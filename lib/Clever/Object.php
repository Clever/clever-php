<?php

class CleverObject implements ArrayAccess
{
  public static $_permanentAttributes;
  public static function init()
  {
    self::$_permanentAttributes = new CleverSet(array('_apiKey'));
  }

  protected $_apiKey;
  protected $_values;

  public function __construct($id=null, $apiKey=null)
  {
    $this->_apiKey = $apiKey;
    $this->_values = array();
    if ($id)
      $this->id = $id;
  }

  // standard accessor magic methods
  public function __set($k, $v)
  {
    $this->_values[$k] = $v;
  }
  public function __isset($k)
  {
    return isset($this->_values[$k]);
  }
  public function __unset($k)
  {
    unset($this->_values[$k]);
  }
  public function __get($k)
  {
    if (isset($this->_values[$k])) {
      return $this->_values[$k];
    } else {
      $class = get_class($this);
      error_log("Clever: Undefined property of $class instance: $k");
      return null;
    }
  }

  // ArrayAccess methods
  public function offsetSet($k, $v)
  {
    $this->$k = $v;
  }
  public function offsetExists($k)
  {
    return isset($this->$k);
  }
  public function offsetUnset($k)
  {
    unset($this->$k);
  }
  public function offsetGet($k)
  {
    return isset($this->_values[$k]) ? $this->_values[$k] : null;
  }

  // This unfortunately needs to be public to be used in Util.php
  public static function scopedConstructFrom($class, $values, $apiKey=null)
  {
    $obj = new $class(isset($values['id']) ? $values['id'] : null, $apiKey);
    $obj->refreshFrom($values, $apiKey);
    return $obj;
  }

  public static function constructFrom($values, $apiKey=null)
  {
    $class = get_class();
    return self::scopedConstructFrom($class, $values, $apiKey);
  }

  public function refreshFrom($values, $apiKey, $partial=false)
  {
    $this->_apiKey = $apiKey;

    // Wipe old state before setting new
    if ($partial)
      $removed = new CleverSet();
    else
      $removed = array_diff(array_keys($this->_values), array_keys($values));

    foreach ($removed as $k) {
      if (self::$_permanentAttributes->includes($k))
        continue;
      unset($this->$k);
    }

    foreach ($values as $k => $v) {
      if (self::$_permanentAttributes->includes($k))
        continue;
      // TODO: recurse on embedded objects for events
      //$this->_values[$k] = CleverUtil::convertToCleverObject($v, $apiKey);
      $this->_values[$k] = $v;
    }
  }

  public function __toJSON()
  {
    if (defined('JSON_PRETTY_PRINT'))
      return json_encode($this->__toArray(true), JSON_PRETTY_PRINT);
    else
      return json_encode($this->__toArray(true));
  }

  public function __toString()
  {
    return $this->__toJSON();
  }

  public function __toArray($recursive=false)
  {
    if ($recursive)
      return CleverUtil::convertCleverObjectToArray($this->_values);
    else
      return $this->_values;
  }
}

CleverObject::init();
