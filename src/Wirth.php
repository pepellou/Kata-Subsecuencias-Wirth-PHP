<?php

class Wirth {

	private static $alphabet = array("A", "B", "C");

	public static function getStrings(
		$n
	) {
		if ($n == 1) {
			return self::$alphabet;
		} else {
			$previous_case = self::getStrings($n - 1);
			$results = array();
			foreach ($previous_case as $string) {
				foreach (self::$alphabet as $new_char) {
					if (self::can_concat($string, $new_char)) {
						$results []= $string . $new_char;
					}
				}
			}
			return $results;
		}
	}

	private static function can_concat(
		$string, 
		$new_char
	) {
		return ($new_char != $string[strlen($string)-1]
			&& !self::ends_with($string . $new_char, substr($string, strlen($string)-3, 2)));
	}

	private static function ends_with(
		$string,
		$suffix
	) {
		return substr($string, strlen($string) - strlen($suffix)) == $suffix;
	}

}
