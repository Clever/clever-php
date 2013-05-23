<?php

class CleverSectionTest extends UnitTestCase
{
  public function testUrl()
  {
    $this->assertEqual(CleverSection::classUrl('CleverSection'), '/sections');
  }

  public function testAll()
  {
    authorizeFromEnv();
    $sections = CleverSection::all();
    foreach ($sections as $section) {
      $this->assertEqual(get_class($section), "CleverSection");
      $this->assertEqual($section->instanceUrl(), "/sections/" . $section->id);
      $sectionBefore = clone($section);
      $section->refresh();
      $this->assertEqual($sectionBefore, $section);
    }
  }

  public function testAllLimit()
  {
    authorizeFromEnv();
    $sections = CleverSection::all(array("limit"=>1));
    $this->assertEqual(count($sections),1);
  }

  public function testSecondLevel()
  {
    $sections = CleverSection::all(array('limit'=>1));
    $section = $sections[0];
    $secondLevelTests = array('school'   => 'CleverSchool',
                              'district' => 'CleverDistrict',
                              'students' => 'CleverStudent',
                              'teacher'  => 'CleverTeacher',
                              'events'   => 'CleverEvent');
    foreach ($secondLevelTests as $k => $v) {
      $objs = $section->$k();
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
