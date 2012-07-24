<?php

class CleverSchoolTest extends UnitTestCase
{
  public function testUrl()
  {
    $this->assertEqual(CleverSchool::classUrl('CleverSchool'), '/schools');
  }

  public function testAll()
  {
    authorizeFromEnv();
    $schools = CleverSchool::all();
    foreach ($schools as $school) {
      $this->assertEqual(get_class($school), "CleverSchool");
      $this->assertEqual($school->instanceUrl(), "/schools/" . $school->id);
      $schoolBefore = clone($school);
      $school->refresh();
      $this->assertEqual($schoolBefore, $school);
    }
  }

  public function testAllLimit()
  {
    authorizeFromEnv();
    $schools = CleverSchool::all(array("limit"=>1));
    $this->assertEqual(count($schools),1);
  }

  public function testSecondLevel()
  {
    $schools = CleverSchool::all(array('limit'=>1));
    $school = $schools[0];
    $secondLevelTests = array('teachers' => 'CleverTeacher',
                              'students' => 'CleverStudent',
                              'sections' => 'CleverSection',
                              'district' => 'CleverDistrict');
    foreach ($secondLevelTests as $k => $v) {
      $objs = $school->$k();
      foreach ($objs as $obj) {
        $this->assertEqual(get_class($obj), $v);
        $this->assertEqual($obj->instanceUrl(), '/' . $k . '/' . $obj->id);
      }
    }
  }
}
