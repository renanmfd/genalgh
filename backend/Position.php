<?php

class Position {

  protected $x;
  protected $y;

  public function __construct($x, $y) {
    $this->x = $x;
    $this->y = $y;
  }

  public function getX() {
    return $this->x;
  }

  public function setX($x) {
    $this->x = $x;
  }

  public function addX($num = 1) {
    $this->x += $num;
  }

  public function getY() {
    return $this->y;
  }

  public function setY($y) {
    $this->y = $y;
  }

  public function addY($num = 1) {
    $this->y += $num;
  }

}
