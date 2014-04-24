<?php

class CleverQueryParamTest extends UnitTestCase
{
  public function testWhere()
  {
    authorizeFromEnv();

    $validQueries = array(
      array('where' => json_encode(array('name' => 'Clever High School'))),
      array('where' => '{"name": {"$regex": "High"}}'),
      array('where' => array('name' => 'Clever High School'))
    );
    foreach ($validQueries as $query) {
      $schools = CleverSchool::all($query);
      $this->assertEqual(count($schools), 1);
      $this->assertEqual($schools[0]->name, 'Clever High School');
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
