<?php

class Tryout {

  protected $robot;
  protected $field;
  protected $guide;

  public function __construct($robot, $guide, $field) {
    $this->robot = $robot;
    $this->field = $field;
    $this->guide = $guide;
  }

  public function execute() {
    $robot->setPositions(0, 0);
    
  }

}
