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
		$this->assertEquals(798, count(Wirth::getStrings(16)));
		$this->assertEquals(1044, count(Wirth::getStrings(17)));
		$this->assertEquals(1392, count(Wirth::getStrings(18)));
		$this->assertEquals(1830, count(Wirth::getStrings(19)));
		$this->assertEquals(2388, count(Wirth::getStrings(20)));
		$this->assertEquals(3180, count(Wirth::getStrings(21)));
		$this->assertEquals(4146, count(Wirth::getStrings(22)));
		$this->assertEquals(5418, count(Wirth::getStrings(23)));
		$this->assertEquals(7032, count(Wirth::getStrings(24)));
		$this->assertEquals(9198, count(Wirth::getStrings(25)));
		$this->assertEquals(11892, count(Wirth::getStrings(26)));
		$this->assertEquals(15486, count(Wirth::getStrings(27)));
		$this->assertEquals(20220, count(Wirth::getStrings(28)));
		$this->assertEquals(26424, count(Wirth::getStrings(29)));
		$this->assertEquals(34422, count(Wirth::getStrings(30)));
		$this->assertEquals(44862, count(Wirth::getStrings(31)));
		$this->assertEquals(58446, count(Wirth::getStrings(32)));
		$this->assertEquals(76122, count(Wirth::getStrings(33)));
		$this->assertEquals(99276, count(Wirth::getStrings(34)));
		$this->assertEquals(129516, count(Wirth::getStrings(35)));
		$this->assertEquals(168546, count(Wirth::getStrings(36)));
		$this->assertEquals(219516, count(Wirth::getStrings(37)));
		$this->assertEquals(285750, count(Wirth::getStrings(38)));
		$this->assertEquals(372204, count(Wirth::getStrings(39)));
		$this->assertEquals(484446, count(Wirth::getStrings(40)));
	}

}
