<?php

class CleverSetTest extends PHPUnit_Framework_TestCase
{
  public function testCleverSetIsIterable()
  {
    // Ensure that we are able to iterate over CleverSets as if they are an array
    $set_array = array("one", "two", "three", "four");
    $set = new CleverSet($set_array);
    $this->assertTrue(CleverUtil::isIterable($set));
    foreach ($set as $value) {
      $this->assertContains($value, $set_array);
    }
  }
}
