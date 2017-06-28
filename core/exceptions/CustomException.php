<?php
/**
 * @file CustomException.php
 * 
 * @package Evolution\exceptions;
 */

namespace Evolution\exceptions;

/**
 * @class CustomException
 */
abstract class CustomException extends Exception implements IException {

  /**
   * Exception message.
   */
  protected $message;

  /**
   * Message of the exception.
   */
  private $string;

  /**
   * User-defined exception code.
   */
  protected $code;

  /**
   * Source filename of exception.
   */
  protected $file;

  /**
   * Source line of exception.
   */
  protected $line;

  /**
   * Backtrace stack.
   */
  private $trace;

  /**
   * Constructor.
   */
  public function __construct($message = null, $code = 0) {
    if (!$message) {
      throw new $this('Unknown '. get_class($this));
    }
    parent::__construct($message, $code);
  }

  /**
   * Transforms all exception data into a printable string.
   */
  public function __toString() {
    return get_class($this) . " '{$this->getMessage()}' in {$this->file}({$this->line})\n"
                            . "{$this->getTraceAsString()}";
  }

}
