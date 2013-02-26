<?php

class CleverQueryParamTest extends UnitTestCase
{
  public function testWhere()
  {
    authorizeFromEnv();

    $validQueries = array(
      array('where' => json_encode(array('name' => 'Clever Memorial High'))),
      array('where' => '{"name": {"$regex": "Memorial"}}'),
      array('where' => array('name' => 'Clever Memorial High'))
    );
    foreach ($validQueries as $query) {
      $schools = CleverSchool::all($query);
      $this->assertEqual(count($schools), 1);
      $this->assertEqual($schools[0]->name, 'Clever Memorial High');
    }
  }

  public function testCount()
  {
    authorizeFromEnv();

    $validQueries = array(
      array('count' => 'true'),
      array('count' => true),
    );
    foreach ($validQueries as $query) {
      $resp = CleverStudent::all($query);
      $this->assertEqual($resp['count'] > 0, true);
    }
  }

}
