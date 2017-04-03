<?php 
use PHPUnit\Framework\TestCase;

final class ChangeStringTest extends TestCase
{
	
	function testForValidarBuild()
	{
		$this->assertEquals('123bcde*3', ChangeString::build('123abcd*3'));
		$this->assertEquals('**Dbtb 52', ChangeString::build('**Casa 52'));
		$this->assertEquals('**Dbtb 52A', ChangeString::build('**Casa 52Z'));
	}
}

 ?>