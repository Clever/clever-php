<?php

class CleverEvent extends CleverApiResource
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
}
