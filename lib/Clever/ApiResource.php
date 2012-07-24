<?php

abstract class CleverApiResource extends CleverObject
{
  protected static function _scopedRetrieve($class, $id, $apiKey=null)
  {
    $instance = new $class($id, $apiKey);
    $instance->refresh();
    return $instance;
  }

  public function refresh()
  {
    $requestor = new CleverApiRequestor($this->_apiKey);
    $url = $this->instanceUrl();
    list($response, $apiKey) = $requestor->request('get', $url);
    $this->refreshFrom($response['data'], $apiKey);
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

  private static function _validateCall($method, $params=null, $apiKey=null)
  {
    if ($params && !is_array($params))
      throw new CleverError("You must pass an array as the first argument to Clever API method calls.");
    if ($apiKey && !is_string($apiKey))
      throw new CleverError('The second argument to Clever API method calls is an optional per-request apiKey, which must be a string.');
  }

  protected static function _scopedAll($class, $params=null, $apiKey=null)
  {
    self::_validateCall('all', $params, $apiKey);
    $requestor = new CleverApiRequestor($apiKey);
    $url = self::classUrl($class);
    list($response, $apiKey) = $requestor->request('get', $url, $params);
    return CleverUtil::convertToCleverObject($response, $apiKey);
  }

  protected static function _scopedCreate($class, $params=null, $apiKey=null)
  {
    self::_validateCall('create', $params, $apiKey);
    $requestor = new CleverApiRequestor($apiKey);
    $url = self::classUrl($class);
    list($response, $apiKey) = $requestor->request('post', $url, $params);
    return CleverUtil::convertToCleverObject($response, $apiKey);
  }

  protected function _scopedDelete($class, $params=null)
  {
    self::_validateCall('delete');
    $requestor = new CleverApiRequestor($this->_apiKey);
    $url = $this->instanceUrl();
    list($response, $apiKey) = $requestor->request('delete', $url, $params);
    //$this->refreshFrom($response, $apiKey);
    return $this;
  }
}
