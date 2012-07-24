<?php

class CleverStudent extends CleverApiResource
{
  public static function constructFrom($values, $apiKey=null)
  {
    $class = get_class();
    return self::scopedConstructFrom($class, $values, $apiKey);
  }

  public static function retrieve($id, $apiKey=null)
  {
    $class = get_class();
    return self::_scopedRetrieve($class, $id, $apiKey);
  }

  public static function all($params=null, $apiKey=null)
  {
    $class = get_class();
    return self::_scopedAll($class, $params, $apiKey);
  }

  private static $secondLevelEndpoints;
  public static function init()
  {
    self::$secondLevelEndpoints = array('sections' => array(),
                                        'school' => array(),
                                        'district' => array(),
                                        'teachers' => array());
  }
  public function __call($method, $args)
  {
    if (array_key_exists($method, self::$secondLevelEndpoints)) {
      $requestor = new CleverApiRequestor($this->_apiKey);
      $url = $this->instanceUrl() . '/' . $method;
      list($response, $apiKey) = $requestor->request('get', $url, $args[0]);
      return CleverUtil::convertToCleverObject($response, $this->_apiKey);
    }
  }
}

CleverStudent::init();
