<?php

class CleverDistrictTest extends UnitTestCase
{
  public function testUrl()
  {
    $this->assertEqual(CleverDistrict::classUrl('CleverDistrict'), '/districts');
  }

  public function testAll()
  {
    authorizeFromEnv();
    $districts = CleverDistrict::all();
    foreach ($districts as $district) {
      $this->assertEqual(get_class($district), "CleverDistrict");
      $this->assertEqual($district->instanceUrl(), "/districts/" . $district->id);
      $districtBefore = clone($district);
      $district->refresh();
      $this->assertEqual($districtBefore, $district);
      print_r($district);
    }
  }

  public function testSecondLevel()
  {
    $districts = CleverDistrict::all(array('limit'=>1));
    $district = $districts[0];
    $secondLevelTests = array('schools' => 'CleverSchool',
                              'teachers' => 'CleverTeacher',
                              'students' => 'CleverStudent',
                              'sections' => 'CleverSection');
    foreach ($secondLevelTests as $k => $v) {
      $objs = $district->$k();
      foreach ($objs as $obj) {
        $this->assertEqual(get_class($obj), $v);
        $this->assertEqual($obj->instanceUrl(), '/' . $k . '/' . $obj->id);
      }
    }
  }
}
