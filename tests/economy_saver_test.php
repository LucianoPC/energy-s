<?php

require_once('src/economy_saver.php');


class EconomySaverTest extends PHPUnit_Framework_TestCase
{
	public function testGetFareAmount()
	{
    $occupationArea = "Shopping";
    $totalKwhComsumption = 50000;
    $totalValue = 30000;

    $economySaver = new EconomySaver($occupationArea, $totalKwhComsumption,
                                     $totalValue);

    $expected = 0.60;
    $result = $economySaver->getFareAmount();

		$this->assertEquals($expected, $result, '', 0.005);
	}
}
