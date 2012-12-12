<?php

require_once (dirname(__FILE__)."/../src/Wirth.php");

class WirthTest extends PHPUnit_Framework_TestCase {

	public function test_it_solves_n_eql_1(
	) {
		$this->assertEquals(
			array( "A", "B", "C" ),
			Wirth::getStrings(1)
		);
	}

	public function test_it_solves_n_eql_2(
	) {
		$this->assertEquals(
			array( 
				"AB", "AC", 
				"BA", "BC",
				"CA", "CB"
			),
			Wirth::getStrings(2)
		);
	}

}
