<?php
/**
 * @file IException.php
 * 
 * @package Evolution\exceptions;
 */

namespace Evolution\exceptions;

/**
 * @interface IException
 */
interface IException {

  /* Protected methods inherited from Exception class */

  /**
   * Exception message.
   */
  public function getMessage();

  /**
   * User-defined Exception code.
   */
  public function getCode();

  /**
   * Source filename.
   */
  public function getFile();

  /**
   * Source line.
   */
  public function getLine();

  /**
   * An array of the backtrace().
   */
  public function getTrace();

  /**
   * Formated string of trace
   */
  public function getTraceAsString();

  /* Overrideable methods inherited from Exception class */

  /**
   * Formated string for display.
   */
  public function __toString();

  /**
   * Constructor that allows the use of empty messages.
   */
  public function __construct($message = null, $code = 0);

}
