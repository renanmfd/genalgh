<?php

/**
 * 
 */
class Direction implements Action {

  public static $EAST  = 0;
  public static $NORTH = 90;
  public static $WEST  = 180;
  public static $SOUTH = 270;
  public static $DIFF  = 90;

  protected static $initial = 0;

  protected $direction;
  protected $log;

  public function __construct($direction = NULL) {
    $this->direction = isset($direction) ? $direction : static::$initial;
    $this->log = [];
  }

  public function turn($direction) {
    if (!static::validateDirection($direction)) return FALSE;

    $action = __CLASS__;
    $this->log($action, 'Turned to ' . $direction . ' from ' . $this->direction);

    $turns = $this->turnFromTo($this->direction, $direction);
    $this->direction = $direction;

    $result = new ActionResult($action);
    $result->setPoints($this->pointsMapper($turns));
    $result->setDescription($action . ': turn to ' . $direction);
    return $result;
  }

  protected function turnFromTo($from, $to) {
    if ($from === $to) {
      return 0;
    }
    elseif($from === static::$EAST or $from === static::$WEST) {
      if ($to === static::$NORTH or $to === static::$SOUTH) {
        return 1;
      } else {
        return 2;
      }
    }
    elseif($from === static::$NORTH or $from === static::$SOUTH) {
      if ($to === static::$EAST or $to === static::$WEST) {
        return 1;
      } else {
        return 2;
      }
    }
  }

  /**
   * @implements Action interface
   */
  public function pointsMapper($pointBase) {
    return $pointBase * 1000;
  }

  /**
   * @implements Action interface
   */
  public function log($type, $message) {
    $this->log[] = [
      'timestamp' => time(),
      'type' => $type,
      'message' => $message
    ];
  }

  /**
   * @implements Action interface
   */
  public function getLog() {
    return $this->log;
  }

  public static function getDirections() {
    return [
      'NORTH' => static::$NORTH,
      'EAST'  => static::$EAST,
      'SOUTH' => static::$SOUTH,
      'WEST'  => static::$WEST,
    ];
  }

  public static function validateDirection($direction) {
    foreach (static::getDirections() as $validDireciton) {
      if ($direction === $validDireciton) {
        return TRUE;
      }
    }
    return FALSE;
  }

}
