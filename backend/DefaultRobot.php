<?php

class DefaultRobot implements Robot {

  protected $direction;
  protected $position;

  public function __construct() {
    $this->direction = new Direction();
    $this->position = new Position(0, 0);
  }

  public function turn($direction) {
    return $this->direction->turn($direction);
  }

  public function turnNorth() {
    return $this->turn(Direction::$NORTH);
  }

  public function turnEast() {
    return $this->turn(Direction::$EAST);
  }

  public function turnSouth() {
    return $this->turn(Direction::$SOUTH);
  }

  public function turnWest() {
    return $this->turn(Direction::$WEST);
  }

  public function setDirection($direction) {
    $this->direction = $direction;
  }

  public function getDirection() {
    return $this->direction;
  }

  public function setPosition($position) {
    $this->position = $position;
  }
  
  public function setPositions($x, $y) {
    $this->position->setX($x);
    $this->position->setY($y);
  }

  public function getPosition() {
    return $this->position;
  }

}
