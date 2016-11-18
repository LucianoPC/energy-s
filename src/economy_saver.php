<?php

class EconomySaver {

  private $occupationArea;
  private $totalKwhComsumption;
  private $totalValue;

  private $consumptionList;

  public function __construct($occupationArea, $totalKwhComsumption, $totalValue) {
    $this->occupationArea = $occupationArea;
    $this->totalKwhComsumption = $totalKwhComsumption;
    $this->totalValue = $totalValue;

    $this->consumptionList = [];
  }

  public function addConsumption($consumption) {
    $this->consumptionList[] = $consumption;
  }

  public function getKwhEconomy() {
    $kwhEconomy = 0.0;
    foreach($this->consumptionList as $consumption) {
      $kwhEconomy += $consumption->getKwhEconomy();
    }

    return $kwhEconomy;
  }

  public function getMoneyEconomy() {
    $moneyEconomy = 0.0;
    foreach($this->consumptionList as $consumption) {
      $moneyEconomy += $consumption->getMoneyEconomy();
    }

    return $moneyEconomy;
  }

  public function getFareAmount() {
    $fareAmount = $this->totalValue * 1.0 / $this->totalKwhComsumption;

    return $fareAmount;
  }

  public function getOccupationArea() {
    return $this->occupationArea;
  }

  public function getTotalKwhConsumption() {
    return $this->totalKwhComsumption;
  }

  public function getTotalValue() {
    return $this->totalValue;
  }
}

class OccupationArea {

  const HOTEL = "Hotel";
  const HOSPITAL = "Hospital";
  const SHOPPING = "Shopping";
  const SUPER_MARKET = "Super Market";
  const COMMERCIAL_CONDOMINIUM = "Commercial Condominium";
  const RESIDENTIAL_CONDOMINIUM = "Residencial Condominium";
  const EDUCATIONAL_INSTITUTION = "Educational Institution";
}
