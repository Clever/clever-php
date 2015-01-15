<?php

class CleverCursoredPaginationTest extends PHPUnit_Framework_TestCase
{
  public function testCanRetrieveFirstAndLastIDsOfCollection()
  {
    authorizeFromEnv();
    $students = CleverStudent::all(array("limit" => 2));
    $oldest = $students[0];
    $newest = array_pop($students);
    $oldest_id = $oldest->id;
    $newest_id = $newest->id;
    $this->assertInternalType('string', $oldest_id);
    $this->assertInternalType('string', $newest_id);
  }

  public function testCanPaginateWithFirstAndLastIDsOfCollection()
  {
    authorizeFromEnv();
    $students = CleverStudent::all(array("limit" => 2));
    $page_1_handle = array('oldest' => $students[0], 'newest' => end($students));
    reset($students);
    # Request two students occuring after our last request
    $students_page_2 = CleverStudent::all(array("limit" => 2, "starting_after" => $page_1_handle['newest']));
    $this->assertInternalType('array', $students_page_2);
    $page_2_handle = array('oldest' => $students_page_2[0], 'newest' => end($students_page_2));
    reset($students_page_2);
    # Request the first two students again, or the ones before our last request
    $students_page_1_again = CleverStudent::all(array("limit" => 2, "ending_before" => $page_2_handle['oldest']));
    $this->assertInternalType('array', $students_page_1_again);
    for ($i=0; $i < count($students_page_1_again); $i++) {
      $this->assertEquals($students_page_1_again[$i], $students[$i]);
    }
    $this->assertEquals($students, $students_page_1_again);
  }

  public function testCanPaginateInALoop() {
    $schools = CleverSchool::all(array('limit' => 1));
    $last_school = $schools[count($schools)-1];
    $incremental_count = count($schools);
    do {
      $more_schools = CleverSchool::all(array('limit' => 1, 'starting_after' => $last_school->id));
      $incremental_count = $incremental_count + count($more_schools);
      if(count($more_schools) > 0) {
        $schools = array_merge($schools, $more_schools);
        $last_school = $more_schools[count($more_schools)-1];
      } else {
        $last_school = NULL;
      }
    } while($last_school);
    $this->assertEquals($last_school, NULL);
    $this->assertEquals(count($schools), $incremental_count);
  }
}