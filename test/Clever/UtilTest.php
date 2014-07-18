<?php

class CleverUtilTest extends PHPUnit_Framework_TestCase
{
  public function testIsList()
  {
    $list = array(5, 'nstaoush', array());
    $this->assertTrue(CleverUtil::isList($list));

    $notlist = array(5, 'nstaoush', array(), 'bar' => 'baz');
    $this->assertFalse(CleverUtil::isList($notlist));
  }

  public function testThatPHPHasValueSemanticsForArrays()
  {
    $original = array('php-arrays' => 'value-semantics');
    $derived = $original;
    $derived['php-arrays'] = 'reference-semantics';

    $this->assertEquals('value-semantics', $original['php-arrays']);
  }
}
