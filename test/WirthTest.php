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

	public function test_it_solves_n_eql_6(
	) {
		$this->assertEquals(
			array( 
				"ABACAB", "ABACBA", "ABACBC", "ABCABA", "ABCACB", "ABCBAB", 
				"ABCBAC", "ACABAC", "ACABCA", "ACABCB", "ACBABC", "ACBACA", 
				"ACBCAB", "ACBCAC", "BABCAB", "BABCAC", "BABCBA", "BACABA", 
				"BACABC", "BACBAB", "BACBCA", "BCABAC", "BCABCB", "BCACBA",
				"BCACBC", "BCBABC", "BCBACA", "BCBACB", "CABACA", "CABACB", 
				"CABCAC", "CABCBA", "CACBAB", "CACBAC", "CACBCA", "CBABCA", 
				"CBABCB", "CBACAB", "CBACBC", "CBCABA", "CBCABC", "CBCACB"
			),
			Wirth::getStrings(6)
		);
	}

	public function test_number_of_results(
	) {
		$this->assertEquals(3, count(Wirth::getStrings(1)));
		$this->assertEquals(6, count(Wirth::getStrings(2)));
		$this->assertEquals(12, count(Wirth::getStrings(3)));
		$this->assertEquals(18, count(Wirth::getStrings(4)));
		$this->assertEquals(30, count(Wirth::getStrings(5)));
		$this->assertEquals(42, count(Wirth::getStrings(6)));
		$this->assertEquals(60, count(Wirth::getStrings(7)));
		$this->assertEquals(78, count(Wirth::getStrings(8)));
		$this->assertEquals(108, count(Wirth::getStrings(9)));
		$this->assertEquals(144, count(Wirth::getStrings(10)));
		$this->assertEquals(204, count(Wirth::getStrings(11)));
		$this->assertEquals(264, count(Wirth::getStrings(12)));
		$this->assertEquals(342, count(Wirth::getStrings(13)));
		$this->assertEquals(456, count(Wirth::getStrings(14)));
		$this->assertEquals(618, count(Wirth::getStrings(15)));
	}

}
