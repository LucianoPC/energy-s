<?php

class CumulativeFactor {

  const DAYS_ON_MONTH = 30.0;
  const HOURS_ON_DAY = 24.0;
  const MINUTES_ON_HOUR = 60.0;
  const SECONDS_ON_MINUTE = 60.0;

  private $month_kwh;
  private $day_kwh;
  private $hour_kwh;
  private $minute_kwh;
  private $second_kwh;

  public function __construct($month_kwh) {
    $this->setMonthKwh($month_kwh);
  }

  public function setMonthKwh($month_kwh) {
    $this->month_kwh = $month_kwh * 1.0;

    $this->day_kwh = $this->month_kwh / self::DAYS_ON_MONTH;
    $this->hour_kwh = $this->day_kwh / self::HOURS_ON_DAY;
    $this->minute_kwh = $this->hour_kwh / self::MINUTES_ON_HOUR;
    $this->second_kwh = $this->minute_kwh / self::SECONDS_ON_MINUTE;
  }

  public function getMonthKwh() {
    return $this->month_kwh;
  }

  public function getDayKwh() {
    return $this->day_kwh;
  }

  public function getHourKwh() {
    return $this->hour_kwh;
  }

  public function getMinuteKwh() {
    return $this->minute_kwh;
  }

  public function getSecondKwh() {
    return $this->second_kwh;
  }
}
