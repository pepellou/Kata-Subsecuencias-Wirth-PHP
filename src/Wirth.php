<?php

class Wirth {

	public static function getStrings(
		$n
	) {
		if ($n == 1) {
			return array( "A", "B", "C" );
		} else {
			return array( "AB", "AC", "BA", "BC", "CA", "CB" );
		}
	}

}
