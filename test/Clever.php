<?php

echo "Running the Clever PHP bindings test suite.\n".
     "If you're trying to use the Clever PHP bindings you'll probably want ".
     "to require('lib/Clever.php'); instead of this file\n";

function authorizeFromEnv()
{
  $apiToken = getenv('CLEVER_API_TOKEN');
  if (!$apiToken) $apiToken = "DEMO_TOKEN";
  Clever::setToken($apiToken);
}

$ok = @include_once(dirname(__FILE__).'/simpletest/autorun.php');
if (!$ok) {
  echo "MISSING DEPENDENCY: The Clever API test cases depend on SimpleTest. ".
       "Download it at <http://www.simpletest.org/>, and either install it ".
       "in your PHP include_path or put it in the test/ directory.\n";
  exit(1);
}

require_once(dirname(__FILE__) . '/../lib/Clever.php');
require_once(dirname(__FILE__) . '/../vendor/autoload.php');

require_once(dirname(__FILE__) . '/Clever/ApiRequestorTest.php');
require_once(dirname(__FILE__) . '/Clever/ObjectTest.php');
require_once(dirname(__FILE__) . '/Clever/UtilTest.php');
require_once(dirname(__FILE__) . '/Clever/Error.php');
require_once(dirname(__FILE__) . '/Clever/AuthenticationErrorTest.php');
require_once(dirname(__FILE__) . '/Clever/InvalidRequestErrorTest.php');
require_once(dirname(__FILE__) . '/Clever/DistrictTest.php');
require_once(dirname(__FILE__) . '/Clever/SchoolTest.php');
require_once(dirname(__FILE__) . '/Clever/TeacherTest.php');
require_once(dirname(__FILE__) . '/Clever/StudentTest.php');
require_once(dirname(__FILE__) . '/Clever/SectionTest.php');
require_once(dirname(__FILE__) . '/Clever/EventTest.php');
require_once(dirname(__FILE__) . '/Clever/QueryParamTest.php');
require_once(dirname(__FILE__) . '/Clever/TokenTest.php');
