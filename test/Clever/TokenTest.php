<?php

class CleverTokenTest extends UnitTestCase
{
  public function testToken()
  {
    Clever::setApiKey(null); // Unset any apiKey
    Clever::setToken('7f76343d50b9e956138169e8cbb4630bb887b18');
    $schools = CleverSchool::all();
    foreach ($schools as $school) {
      $this->assertEqual(get_class($school), "CleverSchool");
      $this->assertEqual($school->instanceUrl(), "/schools/" . $school->id);
      $schoolBefore = clone($school);
      $school->refresh();
      $this->assertEqual($schoolBefore, $school);
    }
  }
}
