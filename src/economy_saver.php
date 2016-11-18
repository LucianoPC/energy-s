<?php

class EconomySaver {

  private $occupationArea;
  private $totalKwhComsumption;
  private $totalValue;

  public function __construct($occupationArea, $totalKwhComsumption,
                              $totalValue) {
    $this->occupationArea = $occupationArea;
    $this->totalKwhComsumption = $totalKwhComsumption;
    $this->totalValue = $totalValue;
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
