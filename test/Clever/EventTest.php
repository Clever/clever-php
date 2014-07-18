<?php

class CleverEventTest extends PHPUnit_Framework_TestCase
{
  public function testUrl()
  {
    $this->assertEquals(CleverEvent::classUrl('CleverEvent'), '/push/events');
  }

  public function testAll()
  {
    authorizeFromEnv();
    $events = CleverEvent::all();
    foreach ($events as $event) {
      $this->assertEquals(get_class($event), "CleverEvent");
      $this->assertEquals($event->instanceUrl(), "/push/events/" . $event->id);
      $eventBefore = clone($event);
      $event->refresh();
      $this->assertEquals($eventBefore, $event);
    }
  }

  public function testAllLimit()
  {
    authorizeFromEnv();
    $events = CleverTeacher::all(array("limit"=>1));
    $this->assertEquals(count($events),1);
  }

  /* todo: second-level uris */
}
