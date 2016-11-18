<?php

class CumulativeFactor {

  const DAYS_ON_MONTH = 30.0;
  const HOURS_ON_DAY = 24.0;
  const MINUTES_ON_HOUR = 60.0;
  const SECONDS_ON_MINUTE = 60.0;

  private $monthKwh;
  private $dayKwh;
  private $hourKwh;
  private $minuteKwh;
  private $secondKwh;

  public function __construct($monthKwh) {
    $this->setMonthKwh($monthKwh);
  }

  public function setMonthKwh($monthKwh) {
    $this->monthKwh = $monthKwh * 1.0;

    $this->dayKwh = $this->monthKwh / self::DAYS_ON_MONTH;
    $this->hourKwh = $this->dayKwh / self::HOURS_ON_DAY;
    $this->minuteKwh = $this->hourKwh / self::MINUTES_ON_HOUR;
    $this->secondKwh = $this->minuteKwh / self::SECONDS_ON_MINUTE;
  }

  public function getMonthKwh() {
    return $this->monthKwh;
  }

  public function getDayKwh() {
    return $this->dayKwh;
  }

  public function getHourKwh() {
    return $this->hourKwh;
  }

  public function getMinuteKwh() {
    return $this->minuteKwh;
  }

  public function getSecondKwh() {
    return $this->secondKwh;
  }
}
