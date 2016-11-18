<?php

require_once('src/consumption_classes.php');


class LightingConsumptionTest extends PHPUnit_Framework_TestCase {

	public function testSuperMarketWithLedLightingType() {
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

	public function testSuperMarketWithConventionalLightingType() {
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

class AirConditionerConsumptionTest extends PHPUnit_Framework_TestCase {

	public function testShoppingWithAcCentral() {
    $occupationArea = OccupationArea::SHOPPING;
    $totalKwhComsumption = 50000;
    $totalValue = 30000;

    $economySaver = new EconomySaver($occupationArea, $totalKwhComsumption,
                                     $totalValue);

    $installationTipe = AirConditionerConsumption::AC_CENTRAL;
    $airConditionerConsumption = new AirConditionerConsumption($economySaver,
                                                         $installationTipe);


    $kwhEconomy = $airConditionerConsumption->getKwhEconomy();
    $moneyEconomy = $airConditionerConsumption->getMoneyEconomy();
    $percentageEconomy = $airConditionerConsumption->getPercentageEconomy();

		$this->assertEquals(24.0, $percentageEconomy, '', 0.005);
		$this->assertEquals(12000.0, $kwhEconomy, '', 0.005);
		$this->assertEquals(7200.0, $moneyEconomy, '', 0.005);
	}

	public function testShoppingWithAcIndividual() {
    $occupationArea = OccupationArea::SHOPPING;
    $totalKwhComsumption = 50000;
    $totalValue = 30000;

    $economySaver = new EconomySaver($occupationArea, $totalKwhComsumption,
                                     $totalValue);

    $installationTipe = AirConditionerConsumption::AC_INDIVIDUAL;
    $airConditionerConsumption = new AirConditionerConsumption($economySaver,
                                                         $installationTipe);


    $kwhEconomy = $airConditionerConsumption->getKwhEconomy();
    $moneyEconomy = $airConditionerConsumption->getMoneyEconomy();
    $percentageEconomy = $airConditionerConsumption->getPercentageEconomy();

		$this->assertEquals(6.0, $percentageEconomy, '', 0.005);
		$this->assertEquals(3000.0, $kwhEconomy, '', 0.005);
		$this->assertEquals(1800.0, $moneyEconomy, '', 0.005);
	}

	public function testShoppingWithoutAc()
	{
    $occupationArea = OccupationArea::SHOPPING;
    $totalKwhComsumption = 50000;
    $totalValue = 30000;

    $economySaver = new EconomySaver($occupationArea, $totalKwhComsumption,
                                     $totalValue);

    $installationTipe = AirConditionerConsumption::THERE_NOT;
    $airConditionerConsumption = new AirConditionerConsumption($economySaver,
                                                         $installationTipe);


    $kwhEconomy = $airConditionerConsumption->getKwhEconomy();
    $moneyEconomy = $airConditionerConsumption->getMoneyEconomy();
    $percentageEconomy = $airConditionerConsumption->getPercentageEconomy();

		$this->assertEquals(0.0, $percentageEconomy, '', 0.005);
		$this->assertEquals(0.0, $kwhEconomy, '', 0.005);
		$this->assertEquals(0.0, $moneyEconomy, '', 0.005);
	}

	public function testCommercialCondominiumWithAcCentral() {
    $occupationArea = OccupationArea::COMMERCIAL_CONDOMINIUM;
    $totalKwhComsumption = 50000;
    $totalValue = 30000;

    $economySaver = new EconomySaver($occupationArea, $totalKwhComsumption,
                                     $totalValue);

    $installationTipe = AirConditionerConsumption::AC_CENTRAL;
    $airConditionerConsumption = new AirConditionerConsumption($economySaver,
                                                         $installationTipe);


    $kwhEconomy = $airConditionerConsumption->getKwhEconomy();
    $moneyEconomy = $airConditionerConsumption->getMoneyEconomy();
    $percentageEconomy = $airConditionerConsumption->getPercentageEconomy();

		$this->assertEquals(24.0, $percentageEconomy, '', 0.005);
		$this->assertEquals(12000.0, $kwhEconomy, '', 0.005);
		$this->assertEquals(7200.0, $moneyEconomy, '', 0.005);
	}

	public function testCommercialCondominiumWithAcIndividual() {
    $occupationArea = OccupationArea::COMMERCIAL_CONDOMINIUM;
    $totalKwhComsumption = 50000;
    $totalValue = 30000;

    $economySaver = new EconomySaver($occupationArea, $totalKwhComsumption,
                                     $totalValue);

    $installationTipe = AirConditionerConsumption::AC_INDIVIDUAL;
    $airConditionerConsumption = new AirConditionerConsumption($economySaver,
                                                         $installationTipe);


    $kwhEconomy = $airConditionerConsumption->getKwhEconomy();
    $moneyEconomy = $airConditionerConsumption->getMoneyEconomy();
    $percentageEconomy = $airConditionerConsumption->getPercentageEconomy();

		$this->assertEquals(6.0, $percentageEconomy, '', 0.005);
		$this->assertEquals(3000.0, $kwhEconomy, '', 0.005);
		$this->assertEquals(1800.0, $moneyEconomy, '', 0.005);
	}

	public function testCommercialCondominiumWithoutAc() {
    $occupationArea = OccupationArea::COMMERCIAL_CONDOMINIUM;
    $totalKwhComsumption = 50000;
    $totalValue = 30000;

    $economySaver = new EconomySaver($occupationArea, $totalKwhComsumption,
                                     $totalValue);

    $installationTipe = AirConditionerConsumption::THERE_NOT;
    $airConditionerConsumption = new AirConditionerConsumption($economySaver,
                                                         $installationTipe);


    $kwhEconomy = $airConditionerConsumption->getKwhEconomy();
    $moneyEconomy = $airConditionerConsumption->getMoneyEconomy();
    $percentageEconomy = $airConditionerConsumption->getPercentageEconomy();

		$this->assertEquals(0.0, $percentageEconomy, '', 0.005);
		$this->assertEquals(0.0, $kwhEconomy, '', 0.005);
		$this->assertEquals(0.0, $moneyEconomy, '', 0.005);
	}

	public function testResidentialCondominiumWithAcCentral() {
    $occupationArea = OccupationArea::RESIDENTIAL_CONDOMINIUM;
    $totalKwhComsumption = 50000;
    $totalValue = 30000;

    $economySaver = new EconomySaver($occupationArea, $totalKwhComsumption,
                                     $totalValue);

    $installationTipe = AirConditionerConsumption::AC_CENTRAL;
    $airConditionerConsumption = new AirConditionerConsumption($economySaver,
                                                         $installationTipe);


    $kwhEconomy = $airConditionerConsumption->getKwhEconomy();
    $moneyEconomy = $airConditionerConsumption->getMoneyEconomy();
    $percentageEconomy = $airConditionerConsumption->getPercentageEconomy();

		$this->assertEquals(24.0, $percentageEconomy, '', 0.005);
		$this->assertEquals(12000.0, $kwhEconomy, '', 0.005);
		$this->assertEquals(7200.0, $moneyEconomy, '', 0.005);
	}

	public function testResidentialCondominiumWithAcIndividual() {
    $occupationArea = OccupationArea::RESIDENTIAL_CONDOMINIUM;
    $totalKwhComsumption = 50000;
    $totalValue = 30000;

    $economySaver = new EconomySaver($occupationArea, $totalKwhComsumption,
                                     $totalValue);

    $installationTipe = AirConditionerConsumption::AC_INDIVIDUAL;
    $airConditionerConsumption = new AirConditionerConsumption($economySaver,
                                                         $installationTipe);


    $kwhEconomy = $airConditionerConsumption->getKwhEconomy();
    $moneyEconomy = $airConditionerConsumption->getMoneyEconomy();
    $percentageEconomy = $airConditionerConsumption->getPercentageEconomy();

		$this->assertEquals(6.0, $percentageEconomy, '', 0.005);
		$this->assertEquals(3000.0, $kwhEconomy, '', 0.005);
		$this->assertEquals(1800.0, $moneyEconomy, '', 0.005);
	}

	public function testResidentialCondominiumWithoutAc() {
    $occupationArea = OccupationArea::RESIDENTIAL_CONDOMINIUM;
    $totalKwhComsumption = 50000;
    $totalValue = 30000;

    $economySaver = new EconomySaver($occupationArea, $totalKwhComsumption,
                                     $totalValue);

    $installationTipe = AirConditionerConsumption::THERE_NOT;
    $airConditionerConsumption = new AirConditionerConsumption($economySaver,
                                                         $installationTipe);


    $kwhEconomy = $airConditionerConsumption->getKwhEconomy();
    $moneyEconomy = $airConditionerConsumption->getMoneyEconomy();
    $percentageEconomy = $airConditionerConsumption->getPercentageEconomy();

		$this->assertEquals(0.0, $percentageEconomy, '', 0.005);
		$this->assertEquals(0.0, $kwhEconomy, '', 0.005);
		$this->assertEquals(0.0, $moneyEconomy, '', 0.005);
	}

	public function testHospitalWithAcCentral() {
    $occupationArea = OccupationArea::HOSPITAL;
    $totalKwhComsumption = 50000;
    $totalValue = 30000;

    $economySaver = new EconomySaver($occupationArea, $totalKwhComsumption,
                                     $totalValue);

    $installationTipe = AirConditionerConsumption::AC_CENTRAL;
    $airConditionerConsumption = new AirConditionerConsumption($economySaver,
                                                         $installationTipe);


    $kwhEconomy = $airConditionerConsumption->getKwhEconomy();
    $moneyEconomy = $airConditionerConsumption->getMoneyEconomy();
    $percentageEconomy = $airConditionerConsumption->getPercentageEconomy();

		$this->assertEquals(15.0, $percentageEconomy, '', 0.005);
		$this->assertEquals(7500.0, $kwhEconomy, '', 0.005);
		$this->assertEquals(4500.0, $moneyEconomy, '', 0.005);
	}

	public function testHospitalWithAcIndividual() {
    $occupationArea = OccupationArea::HOSPITAL;
    $totalKwhComsumption = 50000;
    $totalValue = 30000;

    $economySaver = new EconomySaver($occupationArea, $totalKwhComsumption,
                                     $totalValue);

    $installationTipe = AirConditionerConsumption::AC_INDIVIDUAL;
    $airConditionerConsumption = new AirConditionerConsumption($economySaver,
                                                         $installationTipe);


    $kwhEconomy = $airConditionerConsumption->getKwhEconomy();
    $moneyEconomy = $airConditionerConsumption->getMoneyEconomy();
    $percentageEconomy = $airConditionerConsumption->getPercentageEconomy();

		$this->assertEquals(0.0, $percentageEconomy, '', 0.005);
		$this->assertEquals(0.0, $kwhEconomy, '', 0.005);
		$this->assertEquals(0.0, $moneyEconomy, '', 0.005);
	}

	public function testHospitalWithoutAc() {
    $occupationArea = OccupationArea::HOSPITAL;
    $totalKwhComsumption = 50000;
    $totalValue = 30000;

    $economySaver = new EconomySaver($occupationArea, $totalKwhComsumption,
                                     $totalValue);

    $installationTipe = AirConditionerConsumption::THERE_NOT;
    $airConditionerConsumption = new AirConditionerConsumption($economySaver,
                                                         $installationTipe);


    $kwhEconomy = $airConditionerConsumption->getKwhEconomy();
    $moneyEconomy = $airConditionerConsumption->getMoneyEconomy();
    $percentageEconomy = $airConditionerConsumption->getPercentageEconomy();

		$this->assertEquals(0.0, $percentageEconomy, '', 0.005);
		$this->assertEquals(0.0, $kwhEconomy, '', 0.005);
		$this->assertEquals(0.0, $moneyEconomy, '', 0.005);
	}

	public function testHotelWithAcCentral() {
    $occupationArea = OccupationArea::HOTEL;
    $totalKwhComsumption = 50000;
    $totalValue = 30000;

    $economySaver = new EconomySaver($occupationArea, $totalKwhComsumption,
                                     $totalValue);

    $installationTipe = AirConditionerConsumption::AC_CENTRAL;
    $airConditionerConsumption = new AirConditionerConsumption($economySaver,
                                                         $installationTipe);


    $kwhEconomy = $airConditionerConsumption->getKwhEconomy();
    $moneyEconomy = $airConditionerConsumption->getMoneyEconomy();
    $percentageEconomy = $airConditionerConsumption->getPercentageEconomy();

		$this->assertEquals(24.0, $percentageEconomy, '', 0.005);
		$this->assertEquals(12000.0, $kwhEconomy, '', 0.005);
		$this->assertEquals(7200.0, $moneyEconomy, '', 0.005);
	}

	public function testHotelWithAcIndividual() {
    $occupationArea = OccupationArea::HOTEL;
    $totalKwhComsumption = 50000;
    $totalValue = 30000;

    $economySaver = new EconomySaver($occupationArea, $totalKwhComsumption,
                                     $totalValue);

    $installationTipe = AirConditionerConsumption::AC_INDIVIDUAL;
    $airConditionerConsumption = new AirConditionerConsumption($economySaver,
                                                         $installationTipe);


    $kwhEconomy = $airConditionerConsumption->getKwhEconomy();
    $moneyEconomy = $airConditionerConsumption->getMoneyEconomy();
    $percentageEconomy = $airConditionerConsumption->getPercentageEconomy();

		$this->assertEquals(6.0, $percentageEconomy, '', 0.005);
		$this->assertEquals(3000.0, $kwhEconomy, '', 0.005);
		$this->assertEquals(1800.0, $moneyEconomy, '', 0.005);
	}

	public function testHotelWithoutAc() {
    $occupationArea = OccupationArea::HOTEL;
    $totalKwhComsumption = 50000;
    $totalValue = 30000;

    $economySaver = new EconomySaver($occupationArea, $totalKwhComsumption,
                                     $totalValue);

    $installationTipe = AirConditionerConsumption::THERE_NOT;
    $airConditionerConsumption = new AirConditionerConsumption($economySaver,
                                                         $installationTipe);


    $kwhEconomy = $airConditionerConsumption->getKwhEconomy();
    $moneyEconomy = $airConditionerConsumption->getMoneyEconomy();
    $percentageEconomy = $airConditionerConsumption->getPercentageEconomy();

		$this->assertEquals(0.0, $percentageEconomy, '', 0.005);
		$this->assertEquals(0.0, $kwhEconomy, '', 0.005);
		$this->assertEquals(0.0, $moneyEconomy, '', 0.005);
	}

	public function testEducationalInstitutionWithAcCentral() {
    $occupationArea = OccupationArea::EDUCATIONAL_INSTITUTION;
    $totalKwhComsumption = 50000;
    $totalValue = 30000;

    $economySaver = new EconomySaver($occupationArea, $totalKwhComsumption,
                                     $totalValue);

    $installationTipe = AirConditionerConsumption::AC_CENTRAL;
    $airConditionerConsumption = new AirConditionerConsumption($economySaver,
                                                         $installationTipe);


    $kwhEconomy = $airConditionerConsumption->getKwhEconomy();
    $moneyEconomy = $airConditionerConsumption->getMoneyEconomy();
    $percentageEconomy = $airConditionerConsumption->getPercentageEconomy();

		$this->assertEquals(24.0, $percentageEconomy, '', 0.005);
		$this->assertEquals(12000.0, $kwhEconomy, '', 0.005);
		$this->assertEquals(7200.0, $moneyEconomy, '', 0.005);
	}

	public function testEducationalInstitutionWithAcIndividual() {
    $occupationArea = OccupationArea::EDUCATIONAL_INSTITUTION;
    $totalKwhComsumption = 50000;
    $totalValue = 30000;

    $economySaver = new EconomySaver($occupationArea, $totalKwhComsumption,
                                     $totalValue);

    $installationTipe = AirConditionerConsumption::AC_INDIVIDUAL;
    $airConditionerConsumption = new AirConditionerConsumption($economySaver,
                                                         $installationTipe);


    $kwhEconomy = $airConditionerConsumption->getKwhEconomy();
    $moneyEconomy = $airConditionerConsumption->getMoneyEconomy();
    $percentageEconomy = $airConditionerConsumption->getPercentageEconomy();

		$this->assertEquals(15.0, $percentageEconomy, '', 0.005);
		$this->assertEquals(7500.0, $kwhEconomy, '', 0.005);
		$this->assertEquals(4500.0, $moneyEconomy, '', 0.005);
	}

	public function testEducationalInstitutionWithoutAc() {
    $occupationArea = OccupationArea::EDUCATIONAL_INSTITUTION;
    $totalKwhComsumption = 50000;
    $totalValue = 30000;

    $economySaver = new EconomySaver($occupationArea, $totalKwhComsumption,
                                     $totalValue);

    $installationTipe = AirConditionerConsumption::THERE_NOT;
    $airConditionerConsumption = new AirConditionerConsumption($economySaver,
                                                         $installationTipe);


    $kwhEconomy = $airConditionerConsumption->getKwhEconomy();
    $moneyEconomy = $airConditionerConsumption->getMoneyEconomy();
    $percentageEconomy = $airConditionerConsumption->getPercentageEconomy();

		$this->assertEquals(0.0, $percentageEconomy, '', 0.005);
		$this->assertEquals(0.0, $kwhEconomy, '', 0.005);
		$this->assertEquals(0.0, $moneyEconomy, '', 0.005);
	}

	public function testSuperMarketWithAcCentral() {
    $occupationArea = OccupationArea::SUPER_MARKET;
    $totalKwhComsumption = 50000;
    $totalValue = 30000;

    $economySaver = new EconomySaver($occupationArea, $totalKwhComsumption,
                                     $totalValue);

    $installationTipe = AirConditionerConsumption::AC_CENTRAL;
    $airConditionerConsumption = new AirConditionerConsumption($economySaver,
                                                         $installationTipe);


    $kwhEconomy = $airConditionerConsumption->getKwhEconomy();
    $moneyEconomy = $airConditionerConsumption->getMoneyEconomy();
    $percentageEconomy = $airConditionerConsumption->getPercentageEconomy();

		$this->assertEquals(2.0, $percentageEconomy, '', 0.005);
		$this->assertEquals(1000.0, $kwhEconomy, '', 0.005);
		$this->assertEquals(600.0, $moneyEconomy, '', 0.005);
	}

	public function testSuperMarketWithAcIndividual() {
    $occupationArea = OccupationArea::SUPER_MARKET;
    $totalKwhComsumption = 50000;
    $totalValue = 30000;

    $economySaver = new EconomySaver($occupationArea, $totalKwhComsumption,
                                     $totalValue);

    $installationTipe = AirConditionerConsumption::AC_INDIVIDUAL;
    $airConditionerConsumption = new AirConditionerConsumption($economySaver,
                                                         $installationTipe);


    $kwhEconomy = $airConditionerConsumption->getKwhEconomy();
    $moneyEconomy = $airConditionerConsumption->getMoneyEconomy();
    $percentageEconomy = $airConditionerConsumption->getPercentageEconomy();

		$this->assertEquals(2.0, $percentageEconomy, '', 0.005);
		$this->assertEquals(1000.0, $kwhEconomy, '', 0.005);
		$this->assertEquals(600.0, $moneyEconomy, '', 0.005);
	}

	public function testSuperMarketWithoutAc() {
    $occupationArea = OccupationArea::SUPER_MARKET;
    $totalKwhComsumption = 50000;
    $totalValue = 30000;

    $economySaver = new EconomySaver($occupationArea, $totalKwhComsumption,
                                     $totalValue);

    $installationTipe = AirConditionerConsumption::THERE_NOT;
    $airConditionerConsumption = new AirConditionerConsumption($economySaver,
                                                         $installationTipe);


    $kwhEconomy = $airConditionerConsumption->getKwhEconomy();
    $moneyEconomy = $airConditionerConsumption->getMoneyEconomy();
    $percentageEconomy = $airConditionerConsumption->getPercentageEconomy();

		$this->assertEquals(0.0, $percentageEconomy, '', 0.005);
		$this->assertEquals(0.0, $kwhEconomy, '', 0.005);
		$this->assertEquals(0.0, $moneyEconomy, '', 0.005);
	}
}

class WaterHeatingConsumptionTest extends PHPUnit_Framework_TestCase {

	public function testShoppingWithHeat() {
    $occupationArea = OccupationArea::SHOPPING;
    $totalKwhComsumption = 50000;
    $totalValue = 30000;

    $economySaver = new EconomySaver($occupationArea, $totalKwhComsumption,
                                     $totalValue);

    $installationTipe = WaterHeatingConsumption::HAS_HEATING;
    $waterHeatingConsumption = new WaterHeatingConsumption($economySaver,
                                                         $installationTipe);


    $kwhEconomy = $waterHeatingConsumption->getKwhEconomy();
    $moneyEconomy = $waterHeatingConsumption->getMoneyEconomy();
    $percentageEconomy = $waterHeatingConsumption->getPercentageEconomy();

		$this->assertEquals(0.0, $percentageEconomy, '', 0.005);
		$this->assertEquals(0.0, $kwhEconomy, '', 0.005);
		$this->assertEquals(0.0, $moneyEconomy, '', 0.005);
	}

	public function testShoppingWithoutHeat() {
    $occupationArea = OccupationArea::SHOPPING;
    $totalKwhComsumption = 50000;
    $totalValue = 30000;

    $economySaver = new EconomySaver($occupationArea, $totalKwhComsumption,
                                     $totalValue);

    $installationTipe = WaterHeatingConsumption::WITHOUT_HEATING;
    $waterHeatingConsumption = new WaterHeatingConsumption($economySaver,
                                                         $installationTipe);


    $kwhEconomy = $waterHeatingConsumption->getKwhEconomy();
    $moneyEconomy = $waterHeatingConsumption->getMoneyEconomy();
    $percentageEconomy = $waterHeatingConsumption->getPercentageEconomy();

		$this->assertEquals(0.0, $percentageEconomy, '', 0.005);
		$this->assertEquals(0.0, $kwhEconomy, '', 0.005);
		$this->assertEquals(0.0, $moneyEconomy, '', 0.005);
	}

	public function testCommercialCondominiumWithHeat() {
    $occupationArea = OccupationArea::COMMERCIAL_CONDOMINIUM;
    $totalKwhComsumption = 50000;
    $totalValue = 30000;

    $economySaver = new EconomySaver($occupationArea, $totalKwhComsumption,
                                     $totalValue);

    $installationTipe = WaterHeatingConsumption::HAS_HEATING;
    $waterHeatingConsumption = new WaterHeatingConsumption($economySaver,
                                                         $installationTipe);


    $kwhEconomy = $waterHeatingConsumption->getKwhEconomy();
    $moneyEconomy = $waterHeatingConsumption->getMoneyEconomy();
    $percentageEconomy = $waterHeatingConsumption->getPercentageEconomy();

		$this->assertEquals(0.0, $percentageEconomy, '', 0.005);
		$this->assertEquals(0.0, $kwhEconomy, '', 0.005);
		$this->assertEquals(0.0, $moneyEconomy, '', 0.005);
	}

	public function testCommercialCondominiumWithoutHeat() {
    $occupationArea = OccupationArea::COMMERCIAL_CONDOMINIUM;
    $totalKwhComsumption = 50000;
    $totalValue = 30000;

    $economySaver = new EconomySaver($occupationArea, $totalKwhComsumption,
                                     $totalValue);

    $installationTipe = WaterHeatingConsumption::WITHOUT_HEATING;
    $waterHeatingConsumption = new WaterHeatingConsumption($economySaver,
                                                         $installationTipe);


    $kwhEconomy = $waterHeatingConsumption->getKwhEconomy();
    $moneyEconomy = $waterHeatingConsumption->getMoneyEconomy();
    $percentageEconomy = $waterHeatingConsumption->getPercentageEconomy();

		$this->assertEquals(0.0, $percentageEconomy, '', 0.005);
		$this->assertEquals(0.0, $kwhEconomy, '', 0.005);
		$this->assertEquals(0.0, $moneyEconomy, '', 0.005);
	}

	public function testResidentialCondominiumWithHeat() {
    $occupationArea = OccupationArea::RESIDENTIAL_CONDOMINIUM;
    $totalKwhComsumption = 50000;
    $totalValue = 30000;

    $economySaver = new EconomySaver($occupationArea, $totalKwhComsumption,
                                     $totalValue);

    $installationTipe = WaterHeatingConsumption::HAS_HEATING;
    $waterHeatingConsumption = new WaterHeatingConsumption($economySaver,
                                                         $installationTipe);


    $kwhEconomy = $waterHeatingConsumption->getKwhEconomy();
    $moneyEconomy = $waterHeatingConsumption->getMoneyEconomy();
    $percentageEconomy = $waterHeatingConsumption->getPercentageEconomy();

		$this->assertEquals(24.0, $percentageEconomy, '', 0.005);
		$this->assertEquals(12000.0, $kwhEconomy, '', 0.005);
		$this->assertEquals(7200.0, $moneyEconomy, '', 0.005);
	}

	public function testResidentialCondominiumWithoutHeat() {
    $occupationArea = OccupationArea::RESIDENTIAL_CONDOMINIUM;
    $totalKwhComsumption = 50000;
    $totalValue = 30000;

    $economySaver = new EconomySaver($occupationArea, $totalKwhComsumption,
                                     $totalValue);

    $installationTipe = WaterHeatingConsumption::WITHOUT_HEATING;
    $waterHeatingConsumption = new WaterHeatingConsumption($economySaver,
                                                         $installationTipe);


    $kwhEconomy = $waterHeatingConsumption->getKwhEconomy();
    $moneyEconomy = $waterHeatingConsumption->getMoneyEconomy();
    $percentageEconomy = $waterHeatingConsumption->getPercentageEconomy();

		$this->assertEquals(0.0, $percentageEconomy, '', 0.005);
		$this->assertEquals(0.0, $kwhEconomy, '', 0.005);
		$this->assertEquals(0.0, $moneyEconomy, '', 0.005);
	}

	public function testHospitalWithHeat() {
    $occupationArea = OccupationArea::HOSPITAL;
    $totalKwhComsumption = 50000;
    $totalValue = 30000;

    $economySaver = new EconomySaver($occupationArea, $totalKwhComsumption,
                                     $totalValue);

    $installationTipe = WaterHeatingConsumption::HAS_HEATING;
    $waterHeatingConsumption = new WaterHeatingConsumption($economySaver,
                                                         $installationTipe);


    $kwhEconomy = $waterHeatingConsumption->getKwhEconomy();
    $moneyEconomy = $waterHeatingConsumption->getMoneyEconomy();
    $percentageEconomy = $waterHeatingConsumption->getPercentageEconomy();

		$this->assertEquals(10.0, $percentageEconomy, '', 0.005);
		$this->assertEquals(5000.0, $kwhEconomy, '', 0.005);
		$this->assertEquals(3000.0, $moneyEconomy, '', 0.005);
	}

	public function testHospitalWithoutHeat() {
    $occupationArea = OccupationArea::HOSPITAL;
    $totalKwhComsumption = 50000;
    $totalValue = 30000;

    $economySaver = new EconomySaver($occupationArea, $totalKwhComsumption,
                                     $totalValue);

    $installationTipe = WaterHeatingConsumption::WITHOUT_HEATING;
    $waterHeatingConsumption = new WaterHeatingConsumption($economySaver,
                                                         $installationTipe);


    $kwhEconomy = $waterHeatingConsumption->getKwhEconomy();
    $moneyEconomy = $waterHeatingConsumption->getMoneyEconomy();
    $percentageEconomy = $waterHeatingConsumption->getPercentageEconomy();

		$this->assertEquals(0.0, $percentageEconomy, '', 0.005);
		$this->assertEquals(0.0, $kwhEconomy, '', 0.005);
		$this->assertEquals(0.0, $moneyEconomy, '', 0.005);
	}

	public function testHotelWithHeat() {
    $occupationArea = OccupationArea::HOTEL;
    $totalKwhComsumption = 50000;
    $totalValue = 30000;

    $economySaver = new EconomySaver($occupationArea, $totalKwhComsumption,
                                     $totalValue);

    $installationTipe = WaterHeatingConsumption::HAS_HEATING;
    $waterHeatingConsumption = new WaterHeatingConsumption($economySaver,
                                                         $installationTipe);


    $kwhEconomy = $waterHeatingConsumption->getKwhEconomy();
    $moneyEconomy = $waterHeatingConsumption->getMoneyEconomy();
    $percentageEconomy = $waterHeatingConsumption->getPercentageEconomy();

		$this->assertEquals(24.0, $percentageEconomy, '', 0.005);
		$this->assertEquals(12000.0, $kwhEconomy, '', 0.005);
		$this->assertEquals(7200.0, $moneyEconomy, '', 0.005);
	}

	public function testHotelWithoutHeat() {
    $occupationArea = OccupationArea::HOTEL;
    $totalKwhComsumption = 50000;
    $totalValue = 30000;

    $economySaver = new EconomySaver($occupationArea, $totalKwhComsumption,
                                     $totalValue);

    $installationTipe = WaterHeatingConsumption::WITHOUT_HEATING;
    $waterHeatingConsumption = new WaterHeatingConsumption($economySaver,
                                                         $installationTipe);


    $kwhEconomy = $waterHeatingConsumption->getKwhEconomy();
    $moneyEconomy = $waterHeatingConsumption->getMoneyEconomy();
    $percentageEconomy = $waterHeatingConsumption->getPercentageEconomy();

		$this->assertEquals(0.0, $percentageEconomy, '', 0.005);
		$this->assertEquals(0.0, $kwhEconomy, '', 0.005);
		$this->assertEquals(0.0, $moneyEconomy, '', 0.005);
	}

	public function testEducationalInstitutionWithHeat() {
    $occupationArea = OccupationArea::EDUCATIONAL_INSTITUTION;
    $totalKwhComsumption = 50000;
    $totalValue = 30000;

    $economySaver = new EconomySaver($occupationArea, $totalKwhComsumption,
                                     $totalValue);

    $installationTipe = WaterHeatingConsumption::HAS_HEATING;
    $waterHeatingConsumption = new WaterHeatingConsumption($economySaver,
                                                         $installationTipe);


    $kwhEconomy = $waterHeatingConsumption->getKwhEconomy();
    $moneyEconomy = $waterHeatingConsumption->getMoneyEconomy();
    $percentageEconomy = $waterHeatingConsumption->getPercentageEconomy();

		$this->assertEquals(1.5, $percentageEconomy, '', 0.005);
		$this->assertEquals(750.0, $kwhEconomy, '', 0.005);
		$this->assertEquals(450.0, $moneyEconomy, '', 0.005);
	}

	public function testEducationalInstitutionWithoutHeat() {
    $occupationArea = OccupationArea::EDUCATIONAL_INSTITUTION;
    $totalKwhComsumption = 50000;
    $totalValue = 30000;

    $economySaver = new EconomySaver($occupationArea, $totalKwhComsumption,
                                     $totalValue);

    $installationTipe = WaterHeatingConsumption::WITHOUT_HEATING;
    $waterHeatingConsumption = new WaterHeatingConsumption($economySaver,
                                                         $installationTipe);


    $kwhEconomy = $waterHeatingConsumption->getKwhEconomy();
    $moneyEconomy = $waterHeatingConsumption->getMoneyEconomy();
    $percentageEconomy = $waterHeatingConsumption->getPercentageEconomy();

		$this->assertEquals(0.0, $percentageEconomy, '', 0.005);
		$this->assertEquals(0.0, $kwhEconomy, '', 0.005);
		$this->assertEquals(0.0, $moneyEconomy, '', 0.005);
	}

	public function testSuperMarketWithHeat() {
    $occupationArea = OccupationArea::SUPER_MARKET;
    $totalKwhComsumption = 50000;
    $totalValue = 30000;

    $economySaver = new EconomySaver($occupationArea, $totalKwhComsumption,
                                     $totalValue);

    $installationTipe = WaterHeatingConsumption::HAS_HEATING;
    $waterHeatingConsumption = new WaterHeatingConsumption($economySaver,
                                                         $installationTipe);


    $kwhEconomy = $waterHeatingConsumption->getKwhEconomy();
    $moneyEconomy = $waterHeatingConsumption->getMoneyEconomy();
    $percentageEconomy = $waterHeatingConsumption->getPercentageEconomy();

		$this->assertEquals(0.0, $percentageEconomy, '', 0.005);
		$this->assertEquals(0.0, $kwhEconomy, '', 0.005);
		$this->assertEquals(0.0, $moneyEconomy, '', 0.005);
	}

	public function testSuperMarketWithoutHeat() {
    $occupationArea = OccupationArea::SUPER_MARKET;
    $totalKwhComsumption = 50000;
    $totalValue = 30000;

    $economySaver = new EconomySaver($occupationArea, $totalKwhComsumption,
                                     $totalValue);

    $installationTipe = WaterHeatingConsumption::WITHOUT_HEATING;
    $waterHeatingConsumption = new WaterHeatingConsumption($economySaver,
                                                         $installationTipe);


    $kwhEconomy = $waterHeatingConsumption->getKwhEconomy();
    $moneyEconomy = $waterHeatingConsumption->getMoneyEconomy();
    $percentageEconomy = $waterHeatingConsumption->getPercentageEconomy();

		$this->assertEquals(0.0, $percentageEconomy, '', 0.005);
		$this->assertEquals(0.0, $kwhEconomy, '', 0.005);
		$this->assertEquals(0.0, $moneyEconomy, '', 0.005);
	}
}

class RefrigerationConsumptionTest extends PHPUnit_Framework_TestCase {

	public function testSuperMarketWithRefrigeration() {
    $occupationArea = OccupationArea::SUPER_MARKET;
    $totalKwhComsumption = 50000;
    $totalValue = 30000;

    $economySaver = new EconomySaver($occupationArea, $totalKwhComsumption,
                                     $totalValue);

    $refrigerationConsumption = new RefrigerationConsumption($economySaver);


    $kwhEconomy = $refrigerationConsumption->getKwhEconomy();
    $moneyEconomy = $refrigerationConsumption->getMoneyEconomy();
    $percentageEconomy = $refrigerationConsumption->getPercentageEconomy();

		$this->assertEquals(40.0, $percentageEconomy, '', 0.005);
		$this->assertEquals(20000.0, $kwhEconomy, '', 0.005);
		$this->assertEquals(12000.0, $moneyEconomy, '', 0.005);
	}
}
