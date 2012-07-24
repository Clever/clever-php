<?php

class CleverDistrict extends CleverApiResource
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
    self::$secondLevelEndpoints = array('schools' => array(),
                                        'teachers' => array(),
                                        'students' => array(),
                                        'sections' => array());
  }
  public function __call($method, $args)
  {
    if (array_key_exists($method, self::$secondLevelEndpoints)) {
      $params = $args && count($args) ? $args[0] : array();
      $requestor = new CleverApiRequestor($this->_apiKey);
      $url = $this->instanceUrl() . '/' . $method;
      list($response, $apiKey) = $requestor->request('get', $url, $params);
      return CleverUtil::convertToCleverObject($response, $this->_apiKey);
    }
  }
}

CleverDistrict::init();