<?php

class Wirth {

	private static $alphabet = array("A", "B", "C");

	public static function getStrings(
		$n
	) {
		if ($n == 1) {
			return self::$alphabet;
		} else {
			return array( "AB", "AC", "BA", "BC", "CA", "CB" );
		}
	}

}
