<?php

abstract class CleverUtil
{

	/**
	 * the api uses both singular and plural nouns
	 */
	static $types = array(
		'district'  => 'CleverDistrict',
		'districts' => 'CleverDistrict',
		'school'    => 'CleverSchool',
		'schools'   => 'CleverSchool',
		'teacher'   => 'CleverTeacher',
		'teachers'  => 'CleverTeacher',
		'students'  => 'CleverStudent',
		'sections'  => 'CleverSection',
		'events'    => 'CleverEvent',
	);

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

		if(is_array($resp) && !array_key_exists('data', $resp)){
			return $resp;
		}

		if(isset($resp['data']) && static::isList($resp['data'])){
			$mapped = array();
			foreach ($resp['data'] as $i) {
				$mapped[] = self::convertToCleverObject($i, $auth);
			}
			return $mapped;
		}

		$class = "";
		if (isset($resp['uri']) && is_string($resp['uri'])){
			$class = static::parseUriForClass($resp['uri']);
		}

		//because the API can't return a URI? -- singular object(s)
		if (isset($resp['links']) && is_array($resp['links'])){
			$class = static::parseUriForClass($resp['links'][0]["uri"]);
		}

		if(isset(static::$types[$class])){
			$class = static::$types[$class];
			return CleverObject::scopedConstructFrom($class, $resp['data'], $auth);
		}

		return $resp;

	}

	protected static function parseUriForClass($uri)
	{

		$uri = explode("/", $uri);

		// $uri[0] is a throw away

		// $version = "";
		// if(array_key_exists(1, $uri)){
		// 	$version = $uri[1];
		// }

		$endpoint = "CleverObject";
		if(array_key_exists(2, $uri)){
			$endpoint = $uri[2];
		}

		// $id = "";
		// if(array_key_exists(3, $uri)){
		// 	$id = $uri[3];
		// }

		// $etc = "";
		// if(array_key_exists(4, $uri)){
		// 	$etc = $uri[4];
		// }

		return $endpoint;
		// return array($version, $endpoint, $id, $etc);

	}

}
