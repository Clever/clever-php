<?php

class CleverInvalidRequestErrorTest extends PHPUnit_Framework_TestCase
{
  public function testInvalidObject()
  {
    authorizeFromEnv();
    try {
      CleverDistrict::retrieve('invalid');
    } catch (CleverInvalidRequestError $e) {
      $this->assertEquals(404, $e->getHttpStatus());
    }
  }

  public function testBadData()
  {
    authorizeFromEnv();
    try {
      CleverDistrict::all(array('asdf' => 25));
    } catch (CleverInvalidRequestError $e) {
      $this->assertEquals(400, $e->getHttpStatus());
    }
  }
}
