<?php
/*
* @Author: mark
* @Date:   2014-05-07 14:19:04
* @Last Modified by:   mark
* @Last Modified time: 2014-05-07 15:24:42
*/

namespace Bearlikelion\TwigJsonTools;

use Twig\Extension\AbstractExtension;
use Twig\TwigFilter;
use Twig\TwigFunction;

class Extension extends AbstractExtension
{
	/**
	 * Define Twig filters
	 * @example
	 * {{ string|json_decode }}
	 * {{ string|json_encode }}
	 * @return array
	 */
	public function getFilters(): array
	{
		return [
			new TwigFilter('json_decode', [$this, 'jsonDecode'])
		];
	}

	/**
	 * Define Twig functions
	 * @example
	 * {{ json_decode(string) }}
	 * {{ json_encode(string) }}
	 * @return array
	 */
	public function getFunctions(): array
	{
		return [
			'json_decode'  => new TwigFunction('json_decode', [$this, 'jsonDecode']),
			'json_encode' => new TwigFunction('json_encode', [$this, 'jsonEncode']),
		];
	}

	/**
	 * Decode JSON string
	 * @param  string|array $string
	 * @return string|array
	 */
	public function jsonDecode($string)
	{
		return json_decode($string, true);
	}

	/**
	 * Encode an object or array to JSON
	 * @param  mixed $array
	 * @return string|false
	 */
	public function jsonEncode($array)
	{
		return json_encode($array);
	}
}
