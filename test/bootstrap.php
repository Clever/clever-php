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

require_once(dirname(__FILE__) . '/../lib/Clever.php');
require_once(dirname(__FILE__) . '/../vendor/autoload.php');