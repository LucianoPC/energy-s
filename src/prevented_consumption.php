<?php

require_once('src/cumulative_factor.php');


class PreventedConsumption {

  private $initialKwh;
  private $initialDate;
  private $cumulativeFactor;

  public function __construct($monthKwh, $initialKwh, $initialDate) {
    $this->initialKwh = $initialKwh;
    $this->initialDate = $initialDate;

    $this->cumulativeFactor = new CumulativeFactor($monthKwh);
  }

  public function getPreventedCost($finalDate = null) {
    $consumptionKwh = $this->getConsumptionKwh($finalDate);
    $preventedCost = $consumptionKwh * 0.58;

    return $preventedCost;
  }

  public function getGreenhouseGases($finalDate = null) {
    $consumptionKwh = $this->getConsumptionKwh($finalDate);
    $greenhouseGases = $consumptionKwh / 10000.0;

    return $greenhouseGases;
  }

  public function getPeopleSavingTwentyPercent($finalDate = null) {
    $greenhouseGases = $this->getGreenhouseGases($finalDate);
    $peopleSavingEnergy = intval($greenhouseGases);

    return $peopleSavingEnergy;
  }

  public function getUnusedCars($finalDate = null) {
    $greenhouseGases = $this->getGreenhouseGases($finalDate);
    $unusedCars = $greenhouseGases * 0.182876712328767;
    $unusedCars = round($unusedCars);

    return $unusedCars;
  }

  public function getUnusedGasolineLiters($finalDate = null) {
    $greenhouseGases = $this->getGreenhouseGases($finalDate);
    $unusedGasolineLiters = $greenhouseGases * 429.202054794521;
    $unusedGasolineLiters = round($unusedGasolineLiters);

    return $unusedGasolineLiters;
  }

  public function getForestHectaresAbsorbingCarbon($finalDate = null) {
    $greenhouseGases = $this->getGreenhouseGases($finalDate);
    $forestHectares = $greenhouseGases * 0.0917808219178082;

    return $forestHectares;
  }

  public function getRecycledGarbageTons($finalDate = null) {
    $greenhouseGases = $this->getGreenhouseGases($finalDate);
    $recicledGarbageTons = $greenhouseGases * 0.345890410958904;

    return $recicledGarbageTons;
  }

  private function getConsumptionKwh($finalDate = null) {
    $deltaSeconds = $this->getDeltaSeconds($finalDate);
    $secondKwh = $this->cumulativeFactor->getSecondKwh();
    $consumptionKwh = $secondKwh * $deltaSeconds;
    $consumptionKwh += $this->initialKwh;

    return $consumptionKwh;
  }

  private function getDeltaSeconds($finalDate = null) {
    if($finalDate == null) {
      $finalDate = $this->initialDate;
    }

    $finalSeconds = strtotime(date_format($finalDate, 'd-m-Y H:i:s'));
    $initalSeconds = strtotime(date_format($this->initialDate, 'd-m-Y H:i:s'));
    $deltaSeconds = $finalSeconds - $initalSeconds;

    return $deltaSeconds;
  }
}
