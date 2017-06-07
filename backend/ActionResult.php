<?php

class ActionResult {

  protected $source;
  protected $points;
  protected $description;

  public function __construct($source) {
    $this->source = $source;
  } 

  public function setPoints($points) {
    $this->points = $points;
  }

  public function getPoints() {
    return $this->points;
  }

  public function setDescription($description) {
    $this->description = $description;
  }

  public function getDescription() {
    return $this->description;
  }

}
