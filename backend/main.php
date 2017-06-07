<?php

include 'Action.php';
include 'ActionResult.php';
include 'Robot.php';
include 'DefaultRobot.php';
include 'Direction.php';
include 'Position.php';
include 'TestField.php';

$robot = new DefaultRobot();

$field = new TestField(20, 50);
$field->show();
