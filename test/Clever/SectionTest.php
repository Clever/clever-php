<?php

class CleverSectionTest extends PHPUnit_Framework_TestCase
{
  public function testUrl()
  {
    $this->assertEquals(CleverSection::classUrl('CleverSection'), '/sections');
  }

  public function testAll()
  {
    authorizeFromEnv();
    $sections = CleverSection::all();
    foreach ($sections as $section) {
      $this->assertEquals(get_class($section), "CleverSection");
      $this->assertEquals($section->instanceUrl(), "/sections/" . $section->id);
      $sectionBefore = clone($section);
      $section->refresh();
      $this->assertEquals($sectionBefore, $section);
    }
  }

  public function testAllLimit()
  {
    authorizeFromEnv();
    $sections = CleverSection::all(array("limit"=>1));
    $this->assertEquals(count($sections),1);
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
    $sections = CleverSection::all(array('limit'=>1));
    $section = $sections[0];
    $objs = $section->eventz();
  }
}
