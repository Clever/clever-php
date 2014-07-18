<?php

class CleverAuthenticationErrorTest extends PHPUnit_Framework_TestCase
{
  public function testInvalidCredentials()
  {
    Clever::setApiKey('invalid');
    try {
      CleverDistrict::all();
    } catch (CleverAuthenticationError $e) {
      $this->assertEquals(401, $e->getHttpStatus());
    }
  }
}
