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
					if ($new_char != $string[strlen($string)-1]) {
						$results []= $string . $new_char;
					}
				}
			}
			return $results;
		}
	}

}
