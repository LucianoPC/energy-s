<?php
use PHPUnit\Framework\TestCase;

require_once('src/energy_functions.php');

class EnergyFunctionsTest extends TestCase
{
	public function testMean()
	{
		$number_one = 4;
		$number_two = 2;
		$mean = 3;

		$result = mean($number_one, $number_two);

		$this->assertEquals($mean, $result);
	}
}
