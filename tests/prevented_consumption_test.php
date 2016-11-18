<?php

require_once('src/prevented_consumption.php');


class PreventedConsumptionTest extends PHPUnit_Framework_TestCase
{
	public function testGetPreventedCost()
	{
    $monthKwh = 19829;
    $initialKwh = 231304.8;
    $initialDate = new DateTime('19-10-2016 00:00:00');

    $preventedConsumption = new PreventedConsumption($monthKwh,
                                                      $initialKwh,
                                                      $initialDate);

    $expected = 134156.78;
    $result = $preventedConsumption->getPreventedCost();

		$this->assertEquals($expected, $result, '', 0.005);
	}

	public function testGetGreenhouseGases()
	{
    $monthKwh = 19829;
    $initialKwh = 231304.8;
    $initialDate = new DateTime('19-10-2016 00:00:00');

    $preventedConsumption = new PreventedConsumption($monthKwh,
                                                      $initialKwh,
                                                      $initialDate);

    $expected = 23.13;
    $result = $preventedConsumption->getGreenhouseGases();

		$this->assertEquals($expected, $result, '', 0.005);
	}

	public function testGetPeopleSavingTwentyPercent()
	{
    $monthKwh = 19829;
    $initialKwh = 231304.8;
    $initialDate = new DateTime('19-10-2016 00:00:00');

    $preventedConsumption = new PreventedConsumption($monthKwh,
                                                      $initialKwh,
                                                      $initialDate);

    $expected = 23;
    $result = $preventedConsumption->getPeopleSavingTwentyPercent();

		$this->assertEquals($expected, $result);
	}

	public function testGetUnusedCars()
	{
    $monthKwh = 19829;
    $initialKwh = 231304.8;
    $initialDate = new DateTime('19-10-2016 00:00:00');

    $preventedConsumption = new PreventedConsumption($monthKwh,
                                                      $initialKwh,
                                                      $initialDate);

    $expected = 4;
    $result = $preventedConsumption->getUnusedCars();

		$this->assertEquals($expected, $result);
	}

	public function testGetUnusedGasolineLiters()
	{
    $monthKwh = 19829;
    $initialKwh = 231304.8;
    $initialDate = new DateTime('19-10-2016 00:00:00');

    $preventedConsumption = new PreventedConsumption($monthKwh,
                                                      $initialKwh,
                                                      $initialDate);

    $expected = 9928;
    $result = $preventedConsumption->getUnusedGasolineLiters();

		$this->assertEquals($expected, $result);
	}

	public function testGetForestHectaresAbsorbingCarbon()
	{
    $monthKwh = 19829;
    $initialKwh = 231304.8;
    $initialDate = new DateTime('19-10-2016 00:00:00');

    $preventedConsumption = new PreventedConsumption($monthKwh,
                                                      $initialKwh,
                                                      $initialDate);

    $expected = 2.12;
    $result = $preventedConsumption->getForestHectaresAbsorbingCarbon();

		$this->assertEquals($expected, $result, '', 0.005);
	}

	public function testGetRecycledGarbageTons()
	{
    $monthKwh = 19829;
    $initialKwh = 231304.8;
    $initialDate = new DateTime('19-10-2016 00:00:00');

    $preventedConsumption = new PreventedConsumption($monthKwh,
                                                      $initialKwh,
                                                      $initialDate);

    $expected = 8.00;
    $result = $preventedConsumption->getRecycledGarbageTons();

		$this->assertEquals($expected, $result, '', 0.001);
	}

	public function testGetGreenhouseGasesWithFinalDate()
	{
    $monthKwh = 19829;
    $initialKwh = 231304.8;
    $initialDate = new DateTime('19-10-2016 00:00:00');
    $finalDate = new DateTime('19-10-2016 10:00:00');

    $preventedConsumption = new PreventedConsumption($monthKwh,
                                                      $initialKwh,
                                                      $initialDate);

    $expected = 23.16;
    $result = $preventedConsumption->getGreenhouseGases($finalDate);

		$this->assertEquals($expected, $result, '', 0.005);
	}

	public function testGetPeopleSavingTwentyPercentWithFinalDate()
	{
    $monthKwh = 19829;
    $initialKwh = 231304.8;
    $initialDate = new DateTime('19-10-2016 00:00:00');
    $finalDate = new DateTime('19-10-2016 10:00:00');

    $preventedConsumption = new PreventedConsumption($monthKwh,
                                                      $initialKwh,
                                                      $initialDate);

    $expected = 23;
    $result = $preventedConsumption->getPeopleSavingTwentyPercent($finalDate);

		$this->assertEquals($expected, $result);
	}

	public function testGetUnusedCarsWithFinalDate()
	{
    $monthKwh = 19829;
    $initialKwh = 231304.8;
    $initialDate = new DateTime('19-10-2016 00:00:00');
    $finalDate = new DateTime('19-10-2016 10:00:00');

    $preventedConsumption = new PreventedConsumption($monthKwh,
                                                      $initialKwh,
                                                      $initialDate);

    $expected = 4;
    $result = $preventedConsumption->getUnusedCars($finalDate);

		$this->assertEquals($expected, $result);
	}

	public function testGetUnusedGasolineLitersWithFinalDate()
	{
    $monthKwh = 19829;
    $initialKwh = 231304.8;
    $initialDate = new DateTime('19-10-2016 00:00:00');
    $finalDate = new DateTime('19-10-2016 10:00:00');

    $preventedConsumption = new PreventedConsumption($monthKwh,
                                                      $initialKwh,
                                                      $initialDate);

    $expected = 9939;
    $result = $preventedConsumption->getUnusedGasolineLiters($finalDate);

		$this->assertEquals($expected, $result);
	}

	public function testGetForestHectaresAbsorbingCarbonWithFinalDate()
	{
    $monthKwh = 19829;
    $initialKwh = 231304.8;
    $initialDate = new DateTime('19-10-2016 00:00:00');
    $finalDate = new DateTime('19-10-2016 10:00:00');

    $preventedConsumption = new PreventedConsumption($monthKwh,
                                                      $initialKwh,
                                                      $initialDate);

    $expected = 2.13;
    $result = $preventedConsumption->getForestHectaresAbsorbingCarbon($finalDate);

		$this->assertEquals($expected, $result, '', 0.005);
	}

	public function testGetRecycledGarbageTonsWithFinalDate()
	{
    $monthKwh = 19829;
    $initialKwh = 231304.8;
    $initialDate = new DateTime('19-10-2016 00:00:00');
    $finalDate = new DateTime('19-10-2016 10:00:00');

    $preventedConsumption = new PreventedConsumption($monthKwh,
                                                      $initialKwh,
                                                      $initialDate);

    $expected = 8.01;
    $result = $preventedConsumption->getRecycledGarbageTons($finalDate);

		$this->assertEquals($expected, $result, '', 0.001);
	}

	public function testGetPreventedCostWithFinalDate()
	{
    $monthKwh = 19829;
    $initialKwh = 231304.8;
    $initialDate = new DateTime('19-10-2016 00:00:00');
    $finalDate = new DateTime('19-10-2016 10:00:00');

    $preventedConsumption = new PreventedConsumption($monthKwh,
                                                      $initialKwh,
                                                      $initialDate);

    $expected =  134316.52;
    $result = $preventedConsumption->getPreventedCost($finalDate);

		$this->assertEquals($expected, $result, '', 0.005);
	}
}
