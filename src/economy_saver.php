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
}
