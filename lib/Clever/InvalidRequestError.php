<?php

class CleverInvalidRequestError extends CleverError
{
  public function __construct($message, $param, $http_status=null, $http_body=null, $json_body=null)
  {
    parent::__construct($message, $http_status, $http_body, $json_body);
    $this->param = $param;
  }
}
