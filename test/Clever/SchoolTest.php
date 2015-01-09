<?php

class CleverSchoolTest extends PHPUnit_Framework_TestCase
{
  public function testUrl()
  {
    $this->assertEquals(CleverSchool::classUrl('CleverSchool'), '/schools');
  }

  public function testAll()
  {
    authorizeFromEnv();
    $schools = CleverSchool::all();
    foreach ($schools as $school) {
      $this->assertEquals(get_class($school), "CleverSchool");
      $this->assertEquals($school->instanceUrl(), "/schools/" . $school->id);
      $schoolBefore = clone($school);
      $school->refresh();
      $this->assertEquals($schoolBefore, $school);
    }
  }

  public function testAllLimit()
  {
    authorizeFromEnv();
    $schools = CleverSchool::all(array("limit"=>1));
    $this->assertEquals(count($schools),1);
  }

  public function testSecondLevel()
  {
    $schools = CleverSchool::all(array('limit'=>1));
    $school = $schools[0];
    $secondLevelTests = array('teachers' => 'CleverTeacher',
                              'students' => 'CleverStudent',
                              'sections' => 'CleverSection',
                              'district' => 'CleverDistrict',
                              'events'   => 'CleverEvent');
    foreach ($secondLevelTests as $k => $v) {
      $objs = $school->$k();
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
    $schools = CleverSchool::all(array('limit'=>1));
    $school = $schools[0];
    $objs = $school->eventz();
  }
}
