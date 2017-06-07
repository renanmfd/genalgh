<?php

class TestField {

  public static $EMPTY_CELL = 0;
  public static $FOOD_CELL = 1;
  public static $WALL_CELL = -1;

  protected $field;

  public function __construct($size, $food) {
    for ($i = 0; $i <= $size + 1; $i += 1) {
      $this->field[$i] = [];
      for ($j = 0; $j <= $size + 1; $j += 1) {
        $this->field[$i][$j] = static::$EMPTY_CELL;
        if ($i == 0 or $i == $size + 1 or $j == 0 or $j == $size + 1) {
          $this->field[$i][$j] = static::$WALL_CELL;
        }
      }
    }
    if ($food > $size * $size) $food = $size * $size;
    $foodNumber = 0;
    while($foodNumber < $food) {
      $randX = rand(1, $size);
      $randY = rand(1, $size);
      if ($this->field[$randX][$randY] == 0) {
        $this->field[$randX][$randY] = static::$FOOD_CELL;
        $foodNumber += 1;
      }
    }
  }
  
  public function getPosition($position) {
    return $this->field[$position->getX()][$position->getY()];
  }

  public function setEmptyCell($position) {
    $this->field[$position->getX()][$position->getY()] = static::$EMPTY_CELL;
  }

  public function isEmpty() {
    return !in_array(static::$EMPTY_CELL, $this->field);
  }

  public function show() {
    foreach ($this->field as $key => $row) {
      printf('%3d - ', $key);
      foreach ($row as $cell) {
        printf('%2d ', $cell);
      }
      echo PHP_EOL;
    }
  }

}
