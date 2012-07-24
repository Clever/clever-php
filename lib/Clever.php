<?php

// Tested on PHP 5.2, 5.3

// This snippet (and some of the curl code) due to the Facebook SDK.
if (!function_exists('curl_init')) {
  throw new Exception('Clever needs the CURL PHP extension.');
}
if (!function_exists('json_decode')) {
  throw new Exception('Clever needs the JSON PHP extension.');
}

abstract class Clever
{
  public static $apiKey;
  public static $apiBase = 'https://api.getclever.com/v1.1';
  public static $verifySslCerts = true;
  const VERSION = '1.0.0';

  public static function getApiKey() { return self::$apiKey; }
  public static function setApiKey($apiKey) { self::$apiKey = $apiKey; }

  public static function getVerifySslCerts() { return self::$verifySslCerts; }
  public static function setVerifySslCerts($verify) { self::$verifySslCerts = $verify; }
}

// Utilities
require(dirname(__FILE__) . '/Clever/Util.php');
require(dirname(__FILE__) . '/Clever/Util/Set.php');

// Errors

require(dirname(__FILE__) . '/Clever/Error.php');
require(dirname(__FILE__) . '/Clever/AuthenticationError.php');
require(dirname(__FILE__) . '/Clever/InvalidRequestError.php');

// Plumbing
require(dirname(__FILE__) . '/Clever/Object.php');
require(dirname(__FILE__) . '/Clever/ApiRequestor.php');
require(dirname(__FILE__) . '/Clever/ApiResource.php');

// Clever API Resources
require(dirname(__FILE__) . '/Clever/District.php');
require(dirname(__FILE__) . '/Clever/School.php');
require(dirname(__FILE__) . '/Clever/Teacher.php');
require(dirname(__FILE__) . '/Clever/Student.php');
require(dirname(__FILE__) . '/Clever/Section.php');
require(dirname(__FILE__) . '/Clever/Event.php');
