<?php

class CleverTeacherTest extends UnitTestCase
{
  public function testUrl()
  {
    $this->assertEqual(CleverTeacher::classUrl('CleverTeacher'), '/teachers');
  }

  public function testAll()
  {
    authorizeFromEnv();
    $teachers = CleverTeacher::all();
    foreach ($teachers as $teacher) {
      $this->assertEqual(get_class($teacher), "CleverTeacher");
      $this->assertEqual($teacher->instanceUrl(), "/teachers/" . $teacher->id);
      $teacherBefore = clone($teacher);
      $teacher->refresh();
      $this->assertEqual($teacherBefore, $teacher);
    }
  }

  public function testAllLimit()
  {
    authorizeFromEnv();
    $teachers = CleverTeacher::all(array("limit"=>1));
    $this->assertEqual(count($teachers),1);
  }

  public function testSecondLevel()
  {
    $teachers = CleverTeacher::all(array('limit'=>1));
    $teacher = $teachers[0];
    $secondLevelTests = array('sections' => 'CleverSection',
                              'school'   => 'CleverSchool',
                              'district' => 'CleverDistrict',
                              'students' => 'CleverStudent');
    foreach ($secondLevelTests as $k => $v) {
      $objs = $teacher->$k();
      foreach ($objs as $obj) {
        $this->assertEqual(get_class($obj), $v);
        $this->assertEqual($obj->instanceUrl(), '/' . $k . '/' . $obj->id);
      }
    }
  }

  public function testEvents()
  {
    $teachers = CleverTeacher::all(array('limit'=>1));
    $teacher = $teachers[0];
    $secondLevelTests = array('events' => 'CleverEvent');
    foreach ($secondLevelTests as $k => $v) {
      $objs = $teacher->$k();
      foreach ($objs as $obj) {
        $this->assertEqual(get_class($obj), $v);
        $this->assertEqual($obj->instanceUrl(), '/push/' . $k . '/' . $obj->id);
      }
    }
  }
}
