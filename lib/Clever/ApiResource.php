<?php

abstract class CleverApiResource extends CleverObject
{
  protected static function _scopedRetrieve($class, $id, $auth=null)
  {
    $instance = new $class($id, $auth);
    $instance->refresh();
    return $instance;
  }

  public function refresh()
  {
    $requestor = new CleverApiRequestor($this->_auth);
    $url = $this->instanceUrl();
    list($response, $auth) = $requestor->request('get', $url);
    $this->refreshFrom($response['data'], $auth);
    return $this;
   }

  public static function classUrl($class)
  {
    // Clever(*)
    if (substr($class, 0, strlen('Clever')) == 'Clever')
      $class = substr($class, strlen('Clever'));
    $name = urlencode($class);
    $name = strtolower($name);
    $name = "/${name}s";
    if (strcmp($name, "/events") == 0)
      $name = '/push/events';
    return $name;
  }

  public function instanceUrl()
  {
    $id = $this['id'];
    $class = get_class($this);
    if (!$id) {
      throw new CleverInvalidRequestError("Could not determine which URL to request: $class instance has invalid ID: $id", null);
    }
    $id = CleverApiRequestor::utf8($id);
    $base = self::classUrl($class);
    $extn = urlencode($id);
    return "$base/$extn";
  }

  private static function _validateCall($method, $params=null, $auth=null)
  {
    if ($params && !is_array($params))
      throw new CleverError("You must pass an array as the first argument to Clever API method calls.");
    if ($auth) {
      if (!is_array($auth))
        throw new CleverError('The second argument to Clever API method calls is an optional per-request auth array, which must be an array.');
      else if (!isset($auth['apiKey']) && !isset($auth['token']))
        throw new CleverError('The auth argument to Clever API method calls, if specified, must have either an "apiKey" or "token" field.');
    }
  }

  protected static function _scopedAll($class, $params=null, $auth=null)
  {
    self::_validateCall('all', $params, $auth);
    $requestor = new CleverApiRequestor($auth);
    $url = self::classUrl($class);
    list($response, $auth) = $requestor->request('get', $url, $params);
    return CleverUtil::convertToCleverObject($response, $auth);
  }

  protected static function _scopedCreate($class, $params=null, $auth=null)
  {
    self::_validateCall('create', $params, $auth);
    $requestor = new CleverApiRequestor($auth);
    $url = self::classUrl($class);
    list($response, $auth) = $requestor->request('post', $url, $params);
    return CleverUtil::convertToCleverObject($response, $auth);
  }

  protected function _scopedDelete($class, $params=null)
  {
    self::_validateCall('delete');
    $requestor = new CleverApiRequestor($this->_auth);
    $url = $this->instanceUrl();
    list($response, $auth) = $requestor->request('delete', $url, $params);
    //$this->refreshFrom($response, $auth);
    return $this;
  }
}
