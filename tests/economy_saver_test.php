<?php

require_once('src/economy_saver.php');
require_once('src/consumption_classes.php');


class EconomySaverTest extends PHPUnit_Framework_TestCase
{
	public function testGetFareAmount()
	{
    $occupationArea = OccupationArea::SHOPPING;
    $totalKwhComsumption = 50000;
    $totalValue = 30000;

    $economySaver = new EconomySaver($occupationArea, $totalKwhComsumption,
                                     $totalValue);

    $expected = 0.60;
    $result = $economySaver->getFareAmount();

		$this->assertEquals($expected, $result, '', 0.005);
	}

  public function testSuperMarketEconomyWithOneConsumption() {
    $occupationArea = OccupationArea::SUPER_MARKET;
    $totalKwhComsumption = 50000;
    $totalValue = 30000;

    $economySaver = new EconomySaver($occupationArea, $totalKwhComsumption,
                                     $totalValue);

    $installationTipe = LightingConsumption::CONVENTIONAL_LIGHTING_TYPE;
    $lightingConsumption = new LightingConsumption($economySaver,
                                                   $installationTipe);

    $economySaver->addConsumption($lightingConsumption);

    $expectedKwhEconomy = $lightingConsumption->getKwhEconomy();
    $expectedMoneyEconomy = $lightingConsumption->getMoneyEconomy();

    $kwhEconomy = $economySaver->getKwhEconomy();
    $moneyEconomy = $economySaver->getMoneyEconomy();

		$this->assertEquals($expectedKwhEconomy, $kwhEconomy, '', 0.005);
		$this->assertEquals($expectedMoneyEconomy, $moneyEconomy, '', 0.005);
	}

  public function testSuperMarketEconomyWithTwoConsumption() {
    $occupationArea = OccupationArea::SUPER_MARKET;
    $totalKwhComsumption = 50000;
    $totalValue = 30000;

    $economySaver = new EconomySaver($occupationArea, $totalKwhComsumption,
                                     $totalValue);

    $installationTipe = LightingConsumption::CONVENTIONAL_LIGHTING_TYPE;
    $lightingConsumption = new LightingConsumption($economySaver,
                                                   $installationTipe);

    $installationTipe = AirConditionerConsumption::AC_CENTRAL;
    $airConditionerConsumption = new AirConditionerConsumption($economySaver,
                                                               $installationTipe);

    $economySaver->addConsumption($lightingConsumption);
    $economySaver->addConsumption($airConditionerConsumption);

    $expectedKwhEconomy = $lightingConsumption->getKwhEconomy();
    $expectedKwhEconomy += $airConditionerConsumption->getKwhEconomy();
    $expectedMoneyEconomy = $lightingConsumption->getMoneyEconomy();
    $expectedMoneyEconomy += $airConditionerConsumption->getMoneyEconomy();

    $kwhEconomy = $economySaver->getKwhEconomy();
    $moneyEconomy = $economySaver->getMoneyEconomy();

		$this->assertEquals($expectedKwhEconomy, $kwhEconomy, '', 0.005);
		$this->assertEquals($expectedMoneyEconomy, $moneyEconomy, '', 0.005);
	}

  public function testSuperMarketEconomyWithThreeConsumption() {
    $occupationArea = OccupationArea::SUPER_MARKET;
    $totalKwhComsumption = 50000;
    $totalValue = 30000;

    $economySaver = new EconomySaver($occupationArea, $totalKwhComsumption,
                                     $totalValue);

    $installationTipe = LightingConsumption::CONVENTIONAL_LIGHTING_TYPE;
    $lightingConsumption = new LightingConsumption($economySaver,
                                                   $installationTipe);

    $installationTipe = AirConditionerConsumption::AC_CENTRAL;
    $airConditionerConsumption = new AirConditionerConsumption($economySaver,
                                                               $installationTipe);

    $refrigerationConsumption = new RefrigerationConsumption($economySaver);

    $economySaver->addConsumption($lightingConsumption);
    $economySaver->addConsumption($airConditionerConsumption);
    $economySaver->addConsumption($refrigerationConsumption);

    $expectedKwhEconomy = $lightingConsumption->getKwhEconomy();
    $expectedKwhEconomy += $airConditionerConsumption->getKwhEconomy();
    $expectedKwhEconomy += $refrigerationConsumption->getKwhEconomy();
    $expectedMoneyEconomy = $lightingConsumption->getMoneyEconomy();
    $expectedMoneyEconomy += $airConditionerConsumption->getMoneyEconomy();
    $expectedMoneyEconomy += $refrigerationConsumption->getMoneyEconomy();

    $kwhEconomy = $economySaver->getKwhEconomy();
    $moneyEconomy = $economySaver->getMoneyEconomy();

		$this->assertEquals($expectedKwhEconomy, $kwhEconomy, '', 0.005);
		$this->assertEquals($expectedMoneyEconomy, $moneyEconomy, '', 0.005);
	}
}
