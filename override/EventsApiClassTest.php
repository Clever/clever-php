<?php
namespace Clever;
use \Clever\Configuration;
use \Clever\ApiClient;
use \Clever\ApiException;
use \Clever\ObjectSerializer;
class EventsApiClassTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Setup before running any test cases
     */
    public static function setUpBeforeClass()
    {
    }
    /**
     * Setup before running each test case
     */
    public function setUp()
    {
    }
    /**
     * Clean up after running each test case
     */
    public function tearDown()
    {
    }
    /**
     * Clean up after running all test cases
     */
    public static function tearDownAfterClass()
    {
    }
    /**
     * Test case for Events classes being set correctly
     *
     * .
     *
     */
    public function testEventClass()
    {
      $api_instance = new Api\EventsApi();
      $api_instance->getConfig()->setAccessToken('TEST_TOKEN');
      $result = $api_instance->getEvents(1);
      $eventResponse = $result->getData()[0];
      $event = $eventResponse->getData();
      $test0 = preg_match('/Created/', get_class($event));
      $test1 = preg_match('/Updated/', get_class($event));
      $test2 = preg_match('/Deleted/', get_class($event));
      $this->assertTrue($test0 === 1 or $test1 === 1 or $test2 === 1);
    }
}
