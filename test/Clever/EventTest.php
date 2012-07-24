<?php

class CleverEventTest extends UnitTestCase
{
  public function testUrl()
  {
    $this->assertEqual(CleverEvent::classUrl('CleverEvent'), '/push/events');
  }

  public function testAll()
  {
    authorizeFromEnv();
    $events = CleverEvent::all();
    foreach ($events as $event) {
      $this->assertEqual(get_class($event), "CleverEvent");
      $this->assertEqual($event->instanceUrl(), "/push/events/" . $event->id);
      $eventBefore = clone($event);
      $event->refresh();
      $this->assertEqual($eventBefore, $event);
    }
  }

  public function testAllLimit()
  {
    authorizeFromEnv();
    $events = CleverTeacher::all(array("limit"=>1));
    $this->assertEqual(count($events),1);
  }

  /* todo: second-level uris */
}
