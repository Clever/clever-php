<?php

class CleverDistrictTest extends PHPUnit_Framework_TestCase
{
  public function testUrl()
  {
    $this->assertEquals(CleverDistrict::classUrl('CleverDistrict'), '/districts');
  }

  public function testAll()
  {
    authorizeFromEnv();
    $districts = CleverDistrict::all();
    foreach ($districts as $district) {
      $this->assertEquals(get_class($district), "CleverDistrict");
      $this->assertEquals($district->instanceUrl(), "/districts/" . $district->id);
      $districtBefore = clone($district);
      $district->refresh();
      $this->assertEquals($districtBefore, $district);
    }
  }

  public function testAllLimit()
  {
    authorizeFromEnv();
    $districts = CleverDistrict::all(array("limit"=>1));
    $this->assertEquals(count($districts),1);
  }

  public function testSecondLevel()
  {
    $districts = CleverDistrict::all(array('limit'=>1));
    $district = $districts[0];
    $secondLevelTests = array('schools'  => 'CleverSchool',
                              'teachers' => 'CleverTeacher',
                              'students' => 'CleverStudent',
                              'sections' => 'CleverSection',
                              'events'   => 'CleverEvent');
    foreach ($secondLevelTests as $k => $v) {
      $objs = $district->$k();
      foreach ($objs as $obj) {
        $this->assertEquals(get_class($obj), $v);
        if ($k != "events") {
          $this->assertEquals($obj->instanceUrl(), '/' . $k . '/' . $obj->id);
        } else {
          $this->assertEquals($obj->instanceUrl(), '/push/' . $k . '/' . $obj->id);
        }
      }
    }
  }

  /**
   * @expectedException UndefinedEndpointException
   */
  public function testUndefinedSecondLevel()
  {
    $districts = CleverDistrict::all(array('limit'=>1));
    $district = $districts[0];
    $objs = $district->eventz();
  }
}
