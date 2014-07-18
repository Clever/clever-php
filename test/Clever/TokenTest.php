<?php

class CleverTokenTest extends PHPUnit_Framework_TestCase
{
  public function testToken()
  {
    Clever::setApiKey(null); // Unset any apiKey
    Clever::setToken('DEMO_TOKEN');
    $schools = CleverSchool::all();
    foreach ($schools as $school) {
      $this->assertEquals(get_class($school), "CleverSchool");
      $this->assertEquals($school->instanceUrl(), "/schools/" . $school->id);
      $schoolBefore = clone($school);
      $school->refresh();
      $this->assertEquals($schoolBefore, $school);
    }
  }
}
