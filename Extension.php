<?php
/*
* @Author: mark
* @Date:   2014-05-07 14:19:04
* @Last Modified by:   mark
* @Last Modified time: 2014-05-07 15:24:42
*/

namespace Bearlikelion\TwigJsonTools;

class Extension extends \Twig_Extension
{
	/**
	 * Define Twig filters
	 * @example
	 * {{ string|json_decode }}
	 * {{ string|json_encode }}
	 * @return array
	 */
	public function getFilters()
	{
		return array(
			new \Twig_SimpleFilter('json_decode', array($this, 'jsonDecode'))
		);
	}

	/**
	 * Define Twig functions
	 * @example
	 * {{ json_decode(string) }}
	 * {{ json_encode(string) }}
	 * @return array
	 */
	public function getFunctions()
	{
		return array(
			'json_decode'  => new \Twig_SimpleFunction('json_decode', [$this, 'jsonDecode']),
			'json_encode' => new \Twig_SimpleFunction('json_encode', [$this, 'jsonEncode']),
		);
	}

	/**
	 * Decode JSON string
	 * @param  string $string
	 * @return object
	 */
	public function jsonDecode($string)
	{
		return json_decode($string, true);
	}

	/**
	 * Encode an object or array to JSON
	 * @param  array $array
	 * @return string
	 */
	public function jsonEncode($array)
	{
		return json_encode($array);
	}

	/** Extension name */
	public function getName()
	{
		return 'json_extension';
	}
}
