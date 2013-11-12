<?php

abstract class CleverUtil
{
  public static function isList($array)
  {
    if (!is_array($array))
      return false;
    // TODO: this isn't actually correct in general
    foreach (array_keys($array) as $k) {
      if (!is_numeric($k))
        return false;
    }
    return true;
  }

  public static function convertCleverObjectToArray($values)
  {
    $results = array();
    foreach ($values as $k => $v) {
      // FIXME: this is an encapsulation violation
      if (CleverObject::$_permanentAttributes->includes($k)) {
        continue;
      }
      if ($v instanceof CleverObject) {
        $results[$k] = $v->__toArray(true);
      } else if (is_array($v)) {
        $results[$k] = self::convertCleverObjectToArray($v);
      } else {
        $results[$k] = $v;
      }
    }
    return $results;
  }

  public static function convertToCleverObject($resp, $auth)
  {
    $types = array('district' => 'CleverDistrict',
                   'school' => 'CleverSchool',
                   'teacher' => 'CleverTeacher',
                   'student' => 'CleverStudent',
                   'section' => 'CleverSection',
                   'event' => 'CleverEvent');
    if (is_array($resp) && array_key_exists('data', $resp) && self::isList($resp['data'])) {
      $mapped = array();
      foreach ($resp['data'] as $i) {
        array_push($mapped, self::convertToCleverObject($i, $auth));
      }
      return $mapped;
    } else if (is_array($resp) && array_key_exists('data', $resp)) {
      if (isset($resp['uri']) && is_string($resp['uri']) &&
          preg_match( '/^\/(\S*)\/(\S+)s\/(\S*)$/', $resp['uri'], $match ) &&
          isset($types[$match[2]])) {
        $class = $types[$match[2]];
      } else {
        $class = 'CleverObject';
      }
      return CleverObject::scopedConstructFrom($class, $resp['data'], $auth);
    } else {
      return $resp;
    }
  }
}
