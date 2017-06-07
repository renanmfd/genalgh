<?php

interface Action {
  public function pointsMapper($pointBase);
  public function log($type, $message);
  public function getLog();
}
