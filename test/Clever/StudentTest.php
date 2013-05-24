<?php

class CleverStudentTest extends UnitTestCase
{
  public function testUrl()
  {
    $this->assertEqual(CleverStudent::classUrl('CleverStudent'), '/students');
  }

  public function testAll()
  {
    authorizeFromEnv();
    $students = CleverStudent::all();
    foreach ($students as $student) {
      $this->assertEqual(get_class($student), "CleverStudent");
      $this->assertEqual($student->instanceUrl(), "/students/" . $student->id);
      $studentBefore = clone($student);
      $student->refresh();
      $this->assertEqual($studentBefore, $student);
    }
  }

  public function testAllLimit()
  {
    authorizeFromEnv();
    $students = CleverStudent::all(array("limit"=>1));
    $this->assertEqual(count($students),1);
  }

  public function testSecondLevel()
  {
    $students = CleverStudent::all(array('limit'=>1));
    $student = $students[0];
    $secondLevelTests = array('sections' => 'CleverSection',
                              'school'   => 'CleverSchool',
                              'district' => 'CleverDistrict',
                              'teachers' => 'CleverTeacher',
                              'events'   => 'CleverEvent');
    foreach ($secondLevelTests as $k => $v) {
      $objs = $student->$k();
      foreach ($objs as $obj) {
        $this->assertEqual(get_class($obj), $v);
        if ($k != "events") {
          $this->assertEqual($obj->instanceUrl(), '/' . $k . '/' . $obj->id);
        } else {
          $this->assertEqual($obj->instanceUrl(), '/push/' . $k . '/' . $obj->id);
        }
      }
    }
  }
}
