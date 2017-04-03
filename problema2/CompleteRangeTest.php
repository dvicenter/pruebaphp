<?php 
use PHPUnit\Framework\TestCase;

class CompleteRangeTest extends TestCase
{
	
	function testForValidateRange()
	{
		$this->assertEquals('1,2,3,4,5', CompleteRange::build('1,2,4,5'));
		$this->assertEquals('2,3,4,5,6,7,8,9', CompleteRange::build('2,4,9'));
		$this->assertEquals('55,56,57,58,59,60', CompleteRange::build('55,58,60'));
	}
}
 ?>