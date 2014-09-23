<?php

class CleverTeacherTest extends PHPUnit_Framework_TestCase
{
  public function testUrl()
  {
    $this->assertEquals(CleverTeacher::classUrl('CleverTeacher'), '/teachers');
  }

  public function testAll()
  {
    authorizeFromEnv();
    $teachers = CleverTeacher::all();
    foreach ($teachers as $teacher) {
      $this->assertEquals(get_class($teacher), "CleverTeacher");
      $this->assertEquals($teacher->instanceUrl(), "/teachers/" . $teacher->id);
      $teacherBefore = clone($teacher);
      $teacher->refresh();
      $this->assertEquals($teacherBefore, $teacher);
    }
  }

  public function testAllLimit()
  {
    authorizeFromEnv();
    $teachers = CleverTeacher::all(array("limit"=>1));
    $this->assertEquals(count($teachers),1);
  }

  public function testSecondLevel()
  {
    $teachers = CleverTeacher::all(array('limit'=>1));
    $teacher = $teachers[0];
    $secondLevelTests = array('sections' => 'CleverSection',
                              'school'   => 'CleverSchool',
                              'district' => 'CleverDistrict',
                              'students' => 'CleverStudent',
                              'events'   => 'CleverEvent');
    foreach ($secondLevelTests as $k => $v) {
      $objs = $teacher->$k();
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
    $teachers = CleverTeacher::all(array('limit'=>1));
    $teacher = $teachers[0];
    $objs = $teacher->eventz();
  }
}
