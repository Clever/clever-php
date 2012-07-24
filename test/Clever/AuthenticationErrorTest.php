<?php

class CleverAuthenticationErrorTest extends UnitTestCase
{
  public function testInvalidCredentials()
  {
    Clever::setApiKey('invalid');
    try {
      CleverDistrict::all();
    } catch (CleverAuthenticationError $e) {
      $this->assertEqual(401, $e->getHttpStatus());
    }
  }
}
