<?php

require_once('src/prevented_consumption.php');


class PreventedConsumptionTest extends PHPUnit_Framework_TestCase
{
	public function testGetPreventedCost()
	{
    $month_kwh = 19829;
    $initial_kwh = 231304.8;
    $initial_date = new DateTime('19-10-2016 00:00:00');

    $prevented_consumption = new PreventedConsumption($month_kwh,
                                                      $initial_kwh,
                                                      $initial_date);

    $expected = 134156.78;
    $result = $prevented_consumption->getPreventedCost();

		$this->assertEquals($expected, $result, '', 0.005);
	}

	public function testGetGreenhouseGases()
	{
    $month_kwh = 19829;
    $initial_kwh = 231304.8;
    $initial_date = new DateTime('19-10-2016 00:00:00');

    $prevented_consumption = new PreventedConsumption($month_kwh,
                                                      $initial_kwh,
                                                      $initial_date);

    $expected = 23.13;
    $result = $prevented_consumption->getGreenhouseGases();

		$this->assertEquals($expected, $result, '', 0.005);
	}

	public function testGetPeopleSavingTwentyPercent()
	{
    $month_kwh = 19829;
    $initial_kwh = 231304.8;
    $initial_date = new DateTime('19-10-2016 00:00:00');

    $prevented_consumption = new PreventedConsumption($month_kwh,
                                                      $initial_kwh,
                                                      $initial_date);

    $expected = 23;
    $result = $prevented_consumption->getPeopleSavingTwentyPercent();

		$this->assertEquals($expected, $result);
	}

	public function testGetUnusedCars()
	{
    $month_kwh = 19829;
    $initial_kwh = 231304.8;
    $initial_date = new DateTime('19-10-2016 00:00:00');

    $prevented_consumption = new PreventedConsumption($month_kwh,
                                                      $initial_kwh,
                                                      $initial_date);

    $expected = 4;
    $result = $prevented_consumption->getUnusedCars();

		$this->assertEquals($expected, $result);
	}

	public function testGetUnusedGasolineLiters()
	{
    $month_kwh = 19829;
    $initial_kwh = 231304.8;
    $initial_date = new DateTime('19-10-2016 00:00:00');

    $prevented_consumption = new PreventedConsumption($month_kwh,
                                                      $initial_kwh,
                                                      $initial_date);

    $expected = 9928;
    $result = $prevented_consumption->getUnusedGasolineLiters();

		$this->assertEquals($expected, $result);
	}

	public function testGetForestHectaresAbsorbingCarbon()
	{
    $month_kwh = 19829;
    $initial_kwh = 231304.8;
    $initial_date = new DateTime('19-10-2016 00:00:00');

    $prevented_consumption = new PreventedConsumption($month_kwh,
                                                      $initial_kwh,
                                                      $initial_date);

    $expected = 2.12;
    $result = $prevented_consumption->getForestHectaresAbsorbingCarbon();

		$this->assertEquals($expected, $result, '', 0.005);
	}

	public function testGetRecycledGarbageTons()
	{
    $month_kwh = 19829;
    $initial_kwh = 231304.8;
    $initial_date = new DateTime('19-10-2016 00:00:00');

    $prevented_consumption = new PreventedConsumption($month_kwh,
                                                      $initial_kwh,
                                                      $initial_date);

    $expected = 8.00;
    $result = $prevented_consumption->getRecycledGarbageTons();

		$this->assertEquals($expected, $result, '', 0.001);
	}

	public function testGetGreenhouseGasesWithFinalDate()
	{
    $month_kwh = 19829;
    $initial_kwh = 231304.8;
    $initial_date = new DateTime('19-10-2016 00:00:00');
    $final_date = new DateTime('19-10-2016 10:00:00');

    $prevented_consumption = new PreventedConsumption($month_kwh,
                                                      $initial_kwh,
                                                      $initial_date);

    $expected = 23.16;
    $result = $prevented_consumption->getGreenhouseGases($final_date);

		$this->assertEquals($expected, $result, '', 0.005);
	}

	public function testGetPeopleSavingTwentyPercentWithFinalDate()
	{
    $month_kwh = 19829;
    $initial_kwh = 231304.8;
    $initial_date = new DateTime('19-10-2016 00:00:00');
    $final_date = new DateTime('19-10-2016 10:00:00');

    $prevented_consumption = new PreventedConsumption($month_kwh,
                                                      $initial_kwh,
                                                      $initial_date);

    $expected = 23;
    $result = $prevented_consumption->getPeopleSavingTwentyPercent($final_date);

		$this->assertEquals($expected, $result);
	}

	public function testGetUnusedCarsWithFinalDate()
	{
    $month_kwh = 19829;
    $initial_kwh = 231304.8;
    $initial_date = new DateTime('19-10-2016 00:00:00');
    $final_date = new DateTime('19-10-2016 10:00:00');

    $prevented_consumption = new PreventedConsumption($month_kwh,
                                                      $initial_kwh,
                                                      $initial_date);

    $expected = 4;
    $result = $prevented_consumption->getUnusedCars($final_date);

		$this->assertEquals($expected, $result);
	}

	public function testGetUnusedGasolineLitersWithFinalDate()
	{
    $month_kwh = 19829;
    $initial_kwh = 231304.8;
    $initial_date = new DateTime('19-10-2016 00:00:00');
    $final_date = new DateTime('19-10-2016 10:00:00');

    $prevented_consumption = new PreventedConsumption($month_kwh,
                                                      $initial_kwh,
                                                      $initial_date);

    $expected = 9939;
    $result = $prevented_consumption->getUnusedGasolineLiters($final_date);

		$this->assertEquals($expected, $result);
	}

	public function testGetForestHectaresAbsorbingCarbonWithFinalDate()
	{
    $month_kwh = 19829;
    $initial_kwh = 231304.8;
    $initial_date = new DateTime('19-10-2016 00:00:00');
    $final_date = new DateTime('19-10-2016 10:00:00');

    $prevented_consumption = new PreventedConsumption($month_kwh,
                                                      $initial_kwh,
                                                      $initial_date);

    $expected = 2.13;
    $result = $prevented_consumption->getForestHectaresAbsorbingCarbon($final_date);

		$this->assertEquals($expected, $result, '', 0.005);
	}

	public function testGetRecycledGarbageTonsWithFinalDate()
	{
    $month_kwh = 19829;
    $initial_kwh = 231304.8;
    $initial_date = new DateTime('19-10-2016 00:00:00');
    $final_date = new DateTime('19-10-2016 10:00:00');

    $prevented_consumption = new PreventedConsumption($month_kwh,
                                                      $initial_kwh,
                                                      $initial_date);

    $expected = 8.01;
    $result = $prevented_consumption->getRecycledGarbageTons($final_date);

		$this->assertEquals($expected, $result, '', 0.001);
	}

	public function testGetPreventedCostWithFinalDate()
	{
    $month_kwh = 19829;
    $initial_kwh = 231304.8;
    $initial_date = new DateTime('19-10-2016 00:00:00');
    $final_date = new DateTime('19-10-2016 10:00:00');

    $prevented_consumption = new PreventedConsumption($month_kwh,
                                                      $initial_kwh,
                                                      $initial_date);

    $expected =  134316.52;
    $result = $prevented_consumption->getPreventedCost($final_date);

		$this->assertEquals($expected, $result, '', 0.005);
	}
}
