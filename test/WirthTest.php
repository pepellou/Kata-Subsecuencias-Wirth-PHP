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

	public function test_it_solves_n_eql_3(
	) {
		$this->assertEquals(
			array( 
				"ABA", "ABC", "ACA", "ACB", 
				"BAB", "BAC", "BCA", "BCB", 
				"CAB", "CAC", "CBA", "CBC" 
			),
			Wirth::getStrings(3)
		);
	}

	public function test_it_solves_n_eql_4(
	) {
		$this->assertEquals(
			array( 
				"ABAC", "ABCA", "ABCB", "ACAB", "ACBA", "ACBC",
				"BABC", "BACA", "BACB", "BCAB", "BCAC", "BCBA",
				"CABA", "CABC", "CACB", "CBAB", "CBAC", "CBCA"
			),
			Wirth::getStrings(4)
		);
	}

	public function test_it_solves_n_eql_5(
	) {
		$this->assertEquals(
			array( 
				"ABACA", "ABACB", "ABCAB", "ABCAC", "ABCBA", "ACABA",      
				"ACABC", "ACBAB", "ACBAC", "ACBCA", "BABCA", "BABCB",      
				"BACAB", "BACBA", "BACBC", "BCABA", "BCABC", "BCACB",      
				"BCBAB", "BCBAC", "CABAC", "CABCA", "CABCB", "CACBA",      
				"CACBC", "CBABC", "CBACA", "CBACB", "CBCAB", "CBCAC"
			),
			Wirth::getStrings(5)
		);
	}

}
