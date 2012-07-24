<?php

class CleverUtilTest extends UnitTestCase
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

    $this->assertEqual('value-semantics', $original['php-arrays']);
  }
}
