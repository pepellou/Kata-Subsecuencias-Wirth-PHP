<?php

class Wirth {

	private static $alphabet = array("A", "B", "C");

	private static $cache = array(
		1 => array("A", "B", "C")
	);

	public static function getStrings(
		$n
	) {
		if (isset(self::$cache[$n])) {
			return self::$cache[$n];
		}
		$previous_case = self::getStrings($n - 1);
		$results = array();
		foreach ($previous_case as $string) {
			foreach (self::$alphabet as $new_char) {
				if (self::can_concat($string, $new_char, $n)) {
					$results []= $string . $new_char;
				}
			}
		}
		self::$cache[$n] = $results;
		return $results;
	}

	private static function can_concat(
		$string, 
		$new_char,
		$n
	) {
		return self::is_valid_string($string . $new_char, $n);
	}

	private static function is_valid_string(
		$string,
		$n
	) {
		for ($i = 1; $i <= $n / 2; $i++) {
			$pos1 = $n - 1;
			$pos2 = $n - $i - 1;
			$equals = true;
			while ($equals && $pos1 >= $n - $i) {
				if ($string[$pos1] != $string[$pos2]) {
					$equals = false;
				}
				$pos1--;
				$pos2--;
			}
			if ($equals) {
				return false;
			}
		}
		return true;
	}

}
