<?php

class Guide {

  // When turning, what is the direction priority.
  public $CHECK_TYPES = ['no-check', 'sides', 'left-only', 'right-only', 'all'];
  protected $check;

  // When turning, what is the direction priority.
  public $DIRECTION_TYPES = ['clockwise', 'couter-clockwise', 'turn-around'];
  protected $direction;

  // How the robot make the moviments.
  public $METHOD_TYPES = ['row', 'column', 'diagonal', 'random'];
  protected $method;

  // How many cells will the robot jump on return path.
  public $JUMP_TYPES = [1, 2, 3, 4, 5, 6];
  protected $jump;

}
