<?php

class CleverInvalidRequestErrorTest extends UnitTestCase
{
  public function testInvalidObject()
  {
    authorizeFromEnv();
    try {
      CleverDistrict::retrieve('invalid');
    } catch (CleverInvalidRequestError $e) {
      $this->assertEqual(404, $e->getHttpStatus());
    }
  }

  public function testBadData()
  {
    authorizeFromEnv();
    try {
      CleverDistrict::all(array('asdf' => 25));
    } catch (CleverInvalidRequestError $e) {
      $this->assertEqual(400, $e->getHttpStatus());
    }
  }
}
