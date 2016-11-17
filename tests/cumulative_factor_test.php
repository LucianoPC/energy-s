<?php
use PHPUnit\Framework\TestCase;

require_once('src/cumulative_factor.php');

class CumulativeFactorTest extends TestCase
{
	public function testGetMonthKwh()
	{
		$month_kwh_one = 19829.0;
		$month_kwh_two = 20000.0;

    $cumulative_factor = new CumulativeFactor($month_kwh_one);
		$result_one = $cumulative_factor->getMonthKwh();

    $cumulative_factor->setMonthKwh($month_kwh_two);
		$result_two = $cumulative_factor->getMonthKwh();

		$this->assertEquals($month_kwh_one, $result_one);
		$this->assertEquals($month_kwh_two, $result_two);
	}

	public function testGetDayKwh()
	{
		$month_kwh = 19829.0;
		$day_kwh = 660.97;

    $cumulative_factor = new CumulativeFactor($month_kwh);
		$result = $cumulative_factor->getDayKwh();

		$this->assertEquals($day_kwh, $result, '', 0.01);
	}

	public function testGetHourKwh()
	{
		$month_kwh = 19829.0;
		$hour_kwh = 27.54;

    $cumulative_factor = new CumulativeFactor($month_kwh);
		$result = $cumulative_factor->getHourKwh();

		$this->assertEquals($hour_kwh, $result, '', 0.01);
	}

	public function testGetMinuteKwh()
	{
		$month_kwh = 19829.0;
		$minute_kwh = 0.46;

    $cumulative_factor = new CumulativeFactor($month_kwh);
		$result = $cumulative_factor->getMinuteKwh();

    $this->assertEquals($minute_kwh, $result, '', 0.01);
	}

	public function testGetSecondKwh()
	{
		$month_kwh = 19829.0;
		$second_kwh = 0.008;

    $cumulative_factor = new CumulativeFactor($month_kwh);
		$result = $cumulative_factor->getSecondKwh();

    $this->assertEquals($second_kwh, $result, '', 0.001);
	}
}

