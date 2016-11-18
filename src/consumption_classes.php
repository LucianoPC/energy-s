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
