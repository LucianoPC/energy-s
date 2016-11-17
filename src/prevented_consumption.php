<?php

require_once('src/cumulative_factor.php');


class PreventedConsumption {

  private $initial_kwh;
  private $initial_date;
  private $cumulative_factor;

  private $greenhouse_gases;
  private $people_saving_twenty_percent;
  private $unused_cars;
  private $unused_gasoline_liters;
  private $forest_hectares_absorbing_carbon;
  private $recycled_garbage_tons;

  public function __construct($month_kwh, $initial_kwh, $initial_date) {
    $this->initial_kwh = $initial_kwh;
    $this->initial_date = $initial_date;

    $this->cumulative_factor = new CumulativeFactor($month_kwh);
  }

  public function getPreventedCost($final_date = null) {
    $consumption_kwh = $this->getConsumptionKwh($final_date);
    $prevented_cost = $consumption_kwh * 0.58;

    return $prevented_cost;
  }

  public function getGreenhouseGases($final_date = null) {
    $consumption_kwh = $this->getConsumptionKwh($final_date);
    $greenhouse_gases = $consumption_kwh / 10000.0;

    return $greenhouse_gases;
  }

  public function getPeopleSavingTwentyPercent($final_date = null) {
    $greenhouse_gases = $this->getGreenhouseGases($final_date);
    $people_saving_twenty_percent = intval($greenhouse_gases);

    return $people_saving_twenty_percent;
  }

  public function getUnusedCars($final_date = null) {
    $greenhouse_gases = $this->getGreenhouseGases($final_date);
    $unused_cars = $greenhouse_gases * 0.182876712328767;
    $unused_cars = round($unused_cars);

    return $unused_cars;
  }

  public function getUnusedGasolineLiters($final_date = null) {
    $greenhouse_gases = $this->getGreenhouseGases($final_date);
    $unused_gasoline_liters = $greenhouse_gases * 429.202054794521;
    $unused_gasoline_liters = round($unused_gasoline_liters);

    return $unused_gasoline_liters;
  }

  public function getForestHectaresAbsorbingCarbon($final_date = null) {
    $greenhouse_gases = $this->getGreenhouseGases($final_date);
    $forest_hectares_absorbing_carbon = $greenhouse_gases * 0.0917808219178082;

    return $forest_hectares_absorbing_carbon;
  }

  public function getRecycledGarbageTons($final_date = null) {
    $greenhouse_gases = $this->getGreenhouseGases($final_date);
    $recycled_garbage_tons = $greenhouse_gases * 0.345890410958904;

    return $recycled_garbage_tons;
  }

  private function getConsumptionKwh($final_date = null) {
    $delta_seconds = $this->getDeltaSeconds($final_date);
    $second_kwh = $this->cumulative_factor->getSecondKwh();
    $consumption_kwh = $second_kwh * $delta_seconds;
    $consumption_kwh += $this->initial_kwh;

    return $consumption_kwh;
  }

  private function getDeltaSeconds($final_date = null) {
    if($final_date == null) {
      $final_date = $this->initial_date;
    }

    $final_seconds = strtotime(date_format($final_date, 'd-m-Y H:i:s'));
    $initial_seconds = strtotime(date_format($this->initial_date, 'd-m-Y H:i:s'));
    $delta_seconds = $final_seconds - $initial_seconds;

    return $delta_seconds;
  }
}
