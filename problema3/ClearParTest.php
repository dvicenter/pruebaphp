<?php 
use PHPUnit\Framework\TestCase;
/**
* @covers ClearPar
*/
class ClearParTest extends TestCase
{

	function testForValidateClearPar()
	{
		$this->assertTrue(ClearPar::validatePar(')'));
		$this->assertEquals('()', ClearPar::build('(()'));
	}
}
 ?>