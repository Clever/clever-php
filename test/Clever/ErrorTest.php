<?php

class CleverErrorTest extends PHPUnit_Framework_TestCase
{
  public function testCreation()
  {
    try {
      throw new CleverError("hello", 500, "{'foo':'bar'}", array('foo' => 'bar'));
      $this->fail("Did not raise error");
    } catch (CleverError $e) {
      $this->assertEquals("hello", $e->getMessage());
      $this->assertEquals(500, $e->getHttpStatus());
      $this->assertEquals("{'foo':'bar'}", $e->getHttpBody());
      $this->assertEquals(array('foo' => 'bar'), $e->getJsonBody());
    }
  }
}
