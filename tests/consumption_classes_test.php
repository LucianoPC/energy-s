<?php

require_once('src/consumption_classes.php');


class LightingConsumptionTest extends PHPUnit_Framework_TestCase
{
	public function testGetSuperMarketEconomyToLedLightingType()
	{
    $occupationArea = OccupationArea::SUPER_MARKET;
    $totalKwhComsumption = 50000;
    $totalValue = 30000;

    $economySaver = new EconomySaver($occupationArea, $totalKwhComsumption,
                                     $totalValue);

    $installationTipe = LightingConsumption::LED_LIGHTING_TYPE;
    $lightingConsumption = new LightingConsumption($economySaver,
                                                   $installationTipe);


    $kwhEconomy = $lightingConsumption->getKwhEconomy();
    $moneyEconomy = $lightingConsumption->getMoneyEconomy();
    $percentageEconomy = $lightingConsumption->getPercentageEconomy();

		$this->assertEquals(0.0, $kwhEconomy, '', 0.005);
		$this->assertEquals(0.0, $moneyEconomy, '', 0.005);
		$this->assertEquals(0.0, $percentageEconomy, '', 0.005);
	}

	public function testGetSuperMarketEconomyToConventionalLightingType()
	{
    $occupationArea = OccupationArea::SUPER_MARKET;
    $totalKwhComsumption = 50000;
    $totalValue = 30000;

    $economySaver = new EconomySaver($occupationArea, $totalKwhComsumption,
                                     $totalValue);

    $installationTipe = LightingConsumption::CONVENTIONAL_LIGHTING_TYPE;
    $lightingConsumption = new LightingConsumption($economySaver,
                                                   $installationTipe);


    $kwhEconomy = $lightingConsumption->getKwhEconomy();
    $moneyEconomy = $lightingConsumption->getMoneyEconomy();
    $percentageEconomy = $lightingConsumption->getPercentageEconomy();

		$this->assertEquals(6.0, $percentageEconomy, '', 0.005);
		$this->assertEquals(3000.0, $kwhEconomy, '', 0.005);
		$this->assertEquals(1800.0, $moneyEconomy, '', 0.005);
	}
}

