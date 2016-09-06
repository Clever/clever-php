<?php

class CleverSchoolAdminTest extends PHPUnit_Framework_TestCase
{
  public function testUrl()
  {
    $this->assertEquals(CleverSchoolAdmin::classUrl('CleverSchoolAdmin'), '/school_admins');
  }

  public function testAll()
  {
    authorizeFromEnv();
    $schoolAdmins = CleverSchoolAdmin::all();
    foreach ($schoolAdmins as $schoolAdmin) {
      $this->assertEquals(get_class($schoolAdmin), "CleverSchoolAdmin");
      $this->assertEquals($schoolAdmin->instanceUrl(), "/school_admins/" . $schoolAdmin->id);
      $schoolAdminBefore = clone($schoolAdmin);
      $schoolAdmin->refresh();
      $this->assertEquals($schoolAdminBefore, $schoolAdmin);
    }
  }

  public function testAllLimit()
  {
    authorizeFromEnv();
    $schoolAdmins = CleverSchoolAdmin::all(array("limit"=>1));
    $this->assertEquals(count($schoolAdmins),1);
  }

  public function testSecondLevel()
  {
    $schoolAdmins = CleverSchoolAdmin::all(array('limit'=>1));
    $schoolAdmin = $schoolAdmins[0];
    $secondLevelTests = array('events' => 'CleverEvent',
                              'schools'   => 'CleverSchool');
    foreach ($secondLevelTests as $k => $v) {
      $objs = $schoolAdmin->$k();
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
    $schoolAdmins = CleverSchoolAdmin::all(array('limit'=>1));
    $schoolAdmin = $schoolAdmins[0];
    $objs = $schoolAdmin->eventz();
  }
}
