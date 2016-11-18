<?php

require_once('src/cumulative_factor.php');


class CumulativeFactorTest extends PHPUnit_Framework_TestCase
{
	public function testGetMonthKwh()
	{
		$monthKwhOne = 19829.0;
		$monthKwhTwo = 20000.0;

    $cumulativeFactor = new CumulativeFactor($monthKwhOne);
		$resultOne = $cumulativeFactor->getMonthKwh();

    $cumulativeFactor->setMonthKwh($monthKwhTwo);
		$resultTwo = $cumulativeFactor->getMonthKwh();

		$this->assertEquals($monthKwhOne, $resultOne);
		$this->assertEquals($monthKwhTwo, $resultTwo);
	}

	public function testGetDayKwh()
	{
		$monthKwh = 19829.0;
		$dayKwh = 660.97;

    $cumulativeFactor = new CumulativeFactor($monthKwh);
		$result = $cumulativeFactor->getDayKwh();

		$this->assertEquals($dayKwh, $result, '', 0.01);
	}

	public function testGetHourKwh()
	{
		$monthKwh = 19829.0;
		$hourKwh = 27.54;

    $cumulativeFactor = new CumulativeFactor($monthKwh);
		$result = $cumulativeFactor->getHourKwh();

		$this->assertEquals($hourKwh, $result, '', 0.01);
	}

	public function testGetMinuteKwh()
	{
		$monthKwh = 19829.0;
		$minuteKwh = 0.46;

    $cumulativeFactor = new CumulativeFactor($monthKwh);
		$result = $cumulativeFactor->getMinuteKwh();

    $this->assertEquals($minuteKwh, $result, '', 0.01);
	}

	public function testGetSecondKwh()
	{
		$monthKwh = 19829.0;
		$secondKwh = 0.008;

    $cumulativeFactor = new CumulativeFactor($monthKwh);
		$result = $cumulativeFactor->getSecondKwh();

    $this->assertEquals($secondKwh, $result, '', 0.001);
	}
}

