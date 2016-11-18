<?php

require_once('src/economy_saver.php');

abstract class Consumption {

  protected $economySaver;

  public function __construct($economySaver) {
    $this->economySaver = $economySaver;
  }

  abstract public function getPercentageEconomy();

  public function getKwhEconomy() {
    $totalKwhComsumption = $this->economySaver->getTotalKwhConsumption();
    $percentageEconomy = $this->getPercentageEconomy();
    $kwhEconomy = $totalKwhComsumption * ($percentageEconomy / 100.0);

    return $kwhEconomy;
  }

  public function getMoneyEconomy() {
    $fareAmount = $this->economySaver->getFareAmount();
    $kwhEconomy = $this->getKwhEconomy();
    $moneyEconomy = $fareAmount * $kwhEconomy;

    return $moneyEconomy;
  }
}

class LightingConsumption extends Consumption {

  const LED_LIGHTING_TYPE = "Led Lighting";
  const CONVENTIONAL_LIGHTING_TYPE = "Conventional Lighting";

  private $installationTipe;
  private $percentageEconomy;

  public function __construct($economySaver, $installationTipe) {
    parent::__construct($economySaver);

    $this->installationTipe = $installationTipe;

    $this->percentageEconomy = [];
    $this->percentageEconomy[OccupationArea::SUPER_MARKET] = function () {
      return $this->getSuperMarketPercentageEconomy(); };
  }

  public function getPercentageEconomy() {
    $occupationArea = $this->economySaver->getOccupationArea();

    return $this->percentageEconomy[$occupationArea]();
  }

  public function getSuperMarketPercentageEconomy() {
    if($this->installationTipe == self::CONVENTIONAL_LIGHTING_TYPE) {
      return 6.0;
    }

    return 0.0;
  }
}

class AirConditionerConsumption extends Consumption {

  const AC_CENTRAL = "AC Central";
  const AC_INDIVIDUAL = "AC Individual";
  const THERE_NOT = "There Not";

  private $economy;
  private $installationTipe;

  public function __construct($economySaver, $installationTipe) {
    parent::__construct($economySaver);

    $this->installationTipe = $installationTipe;
    $this->initializeEconomyMap();
  }

  public function getPercentageEconomy() {
    $occupationArea = $this->economySaver->getOccupationArea();

    return $this->economy[$occupationArea][$this->installationTipe];
  }

  private function initializeEconomyMap() {
    $this->economy = [];

    $this->economy[OccupationArea::HOTEL] = [];
    $this->economy[OccupationArea::HOTEL][self::AC_CENTRAL] = 24;
    $this->economy[OccupationArea::HOTEL][self::AC_INDIVIDUAL] = 6;
    $this->economy[OccupationArea::HOTEL][self::THERE_NOT] = 0;

    $this->economy[OccupationArea::HOSPITAL] = [];
    $this->economy[OccupationArea::HOSPITAL][self::AC_CENTRAL] = 15;
    $this->economy[OccupationArea::HOSPITAL][self::AC_INDIVIDUAL] = 0;
    $this->economy[OccupationArea::HOSPITAL][self::THERE_NOT] = 0;

    $this->economy[OccupationArea::SHOPPING] = [];
    $this->economy[OccupationArea::SHOPPING][self::AC_CENTRAL] = 24;
    $this->economy[OccupationArea::SHOPPING][self::AC_INDIVIDUAL] = 6;
    $this->economy[OccupationArea::SHOPPING][self::THERE_NOT] = 0;

    $this->economy[OccupationArea::SUPER_MARKET] = [];
    $this->economy[OccupationArea::SUPER_MARKET][self::AC_CENTRAL] = 2;
    $this->economy[OccupationArea::SUPER_MARKET][self::AC_INDIVIDUAL] = 2;
    $this->economy[OccupationArea::SUPER_MARKET][self::THERE_NOT] = 0;

    $this->economy[OccupationArea::EDUCATIONAL_INSTITUTION] = [];
    $this->economy[OccupationArea::EDUCATIONAL_INSTITUTION][self::AC_CENTRAL] = 24;
    $this->economy[OccupationArea::EDUCATIONAL_INSTITUTION][self::AC_INDIVIDUAL] = 15;
    $this->economy[OccupationArea::EDUCATIONAL_INSTITUTION][self::THERE_NOT] = 0;

    $this->economy[OccupationArea::COMMERCIAL_CONDOMINIUM] = [];
    $this->economy[OccupationArea::COMMERCIAL_CONDOMINIUM][self::AC_CENTRAL] = 24;
    $this->economy[OccupationArea::COMMERCIAL_CONDOMINIUM][self::AC_INDIVIDUAL] = 6;
    $this->economy[OccupationArea::COMMERCIAL_CONDOMINIUM][self::THERE_NOT] = 0;

    $this->economy[OccupationArea::RESIDENTIAL_CONDOMINIUM] = [];
    $this->economy[OccupationArea::RESIDENTIAL_CONDOMINIUM][self::AC_CENTRAL] = 24;
    $this->economy[OccupationArea::RESIDENTIAL_CONDOMINIUM][self::AC_INDIVIDUAL] = 6;
    $this->economy[OccupationArea::RESIDENTIAL_CONDOMINIUM][self::THERE_NOT] = 0;
  }
}

class WaterHeatingConsumption extends Consumption {

  const HAS_HEATING = "Has Heating";
  const WITHOUT_HEATING = "Without Heating";

  private $economy;
  private $installationTipe;

  public function __construct($economySaver, $installationTipe) {
    parent::__construct($economySaver);

    $this->installationTipe = $installationTipe;
    $this->initializeEconomyMap();
  }

  public function getPercentageEconomy() {
    $occupationArea = $this->economySaver->getOccupationArea();

    return $this->economy[$occupationArea][$this->installationTipe];
  }

  private function initializeEconomyMap() {
    $this->economy = [];

    $this->economy[OccupationArea::HOTEL] = [];
    $this->economy[OccupationArea::HOTEL][self::HAS_HEATING] = 24;
    $this->economy[OccupationArea::HOTEL][self::WITHOUT_HEATING] = 0;

    $this->economy[OccupationArea::HOSPITAL] = [];
    $this->economy[OccupationArea::HOSPITAL][self::HAS_HEATING] = 10;
    $this->economy[OccupationArea::HOSPITAL][self::WITHOUT_HEATING] = 0;

    $this->economy[OccupationArea::SHOPPING] = [];
    $this->economy[OccupationArea::SHOPPING][self::HAS_HEATING] = 0;
    $this->economy[OccupationArea::SHOPPING][self::WITHOUT_HEATING] = 0;

    $this->economy[OccupationArea::SUPER_MARKET] = [];
    $this->economy[OccupationArea::SUPER_MARKET][self::HAS_HEATING] = 0;
    $this->economy[OccupationArea::SUPER_MARKET][self::WITHOUT_HEATING] = 0;

    $this->economy[OccupationArea::EDUCATIONAL_INSTITUTION] = [];
    $this->economy[OccupationArea::EDUCATIONAL_INSTITUTION][self::HAS_HEATING] = 1.5;
    $this->economy[OccupationArea::EDUCATIONAL_INSTITUTION][self::WITHOUT_HEATING] = 0;

    $this->economy[OccupationArea::COMMERCIAL_CONDOMINIUM] = [];
    $this->economy[OccupationArea::COMMERCIAL_CONDOMINIUM][self::HAS_HEATING] = 0;
    $this->economy[OccupationArea::COMMERCIAL_CONDOMINIUM][self::WITHOUT_HEATING] = 0;

    $this->economy[OccupationArea::RESIDENTIAL_CONDOMINIUM] = [];
    $this->economy[OccupationArea::RESIDENTIAL_CONDOMINIUM][self::HAS_HEATING] = 24;
    $this->economy[OccupationArea::RESIDENTIAL_CONDOMINIUM][self::WITHOUT_HEATING] = 0;
  }
}

class RefrigerationConsumption extends Consumption {

  public function getPercentageEconomy() {
    return 40;
  }
}
