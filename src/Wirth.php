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
		return self::is_valid_string($string . $new_char);
	}

	private static function is_valid_string(
		$string
	) {
		$length = strlen($string) - 1;
		for ($i = 1; $i <= ($length + 1) / 2; $i++) {
			if (self::ends_with($string, substr($string, $length - 2 * $i + 1, $i))) {
				return false;
			}
		}
		return true;
	}

	private static function ends_with(
		$string,
		$suffix
	) {
		return substr($string, strlen($string) - strlen($suffix)) == $suffix;
	}

}
