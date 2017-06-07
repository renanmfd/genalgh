<?php

/**
 * Interface Robot.
 */
interface Robot {

  public function __construct();

  public function turn($direction);

  public function turnNorth();

  public function turnEast();

  public function turnSouth();

  public function turnWest();

}
