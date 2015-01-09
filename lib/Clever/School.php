<?php

class CleverSchool extends CleverApiResource
{
  public static function constructFrom($values, $auth=null)
  {
    $class = get_class();
    return self::scopedConstructFrom($class, $values, $auth);
  }

  public static function retrieve($id, $auth=null)
  {
    $class = get_class();
    return self::_scopedRetrieve($class, $id, $auth);
  }

  public static function all($params=null, $auth=null)
  {
    $class = get_class();
    return self::_scopedAll($class, $params, $auth);
  }

  private static $secondLevelEndpoints;
  public static function init()
  {
    self::$secondLevelEndpoints = array('teachers' => array(),
                                        'students' => array(),
                                        'sections' => array(),
                                        'district' => array(),
                                        'events' => array());
  }
  public function __call($method, $args)
  {
    if (array_key_exists($method, self::$secondLevelEndpoints)) {
      $params = $args && count($args) ? $args[0] : array();
      $requestor = new CleverApiRequestor($this->_auth);
      $url = $this->instanceUrl() . '/' . $method;
      list($response, $auth) = $requestor->request('get', $url, $params);
      return CleverUtil::convertToCleverObject($response, $this->_auth);
    }
    throw new UndefinedEndpointException(__CLASS__ . " endpoint '{$method}' is not defined.");
  }
}

CleverSchool::init();