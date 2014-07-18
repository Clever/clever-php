<?php

class CleverApiRequestorTest extends PHPUnit_Framework_TestCase
{
  public function testEncode()
  {
    $a = array('my' => 'value', 'that' => array('your' => 'example'), 'bar' => 1, 'baz' => null);
    $enc = CleverAPIRequestor::encode($a);
    $this->assertEquals($enc, 'my=value&that%5Byour%5D=example&bar=1');

    $a = array('that' => array('your' => 'example', 'foo' => null));
    $enc = CleverAPIRequestor::encode($a);
    $this->assertEquals($enc, 'that%5Byour%5D=example');
  }
}
