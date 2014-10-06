<?php

class CleverStudentTest extends PHPUnit_Framework_TestCase
{
  public function testUrl()
  {
    $this->assertEquals(CleverStudent::classUrl('CleverStudent'), '/students');
  }

  public function testAll()
  {
    authorizeFromEnv();
    $students = CleverStudent::all();
    foreach ($students as $student) {
      $this->assertEquals(get_class($student), "CleverStudent");
      $this->assertEquals($student->instanceUrl(), "/students/" . $student->id);
      $studentBefore = clone($student);
      $student->refresh();
      $this->assertEquals($studentBefore, $student);
    }
  }

  public function testAllLimit()
  {
    authorizeFromEnv();
    $students = CleverStudent::all(array("limit"=>1));
    $this->assertEquals(count($students),1);
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
    $students = CleverStudent::all(array('limit'=>1));
    $student = $students[0];
    $objs = $student->eventz();
  }
}
