<?php
/**
 * @file RuleBase.php
 * 
 * @package Evolution\attributes\rules;
 */

namespace Evolution\attributes\rules;

/**
 * @interface RuleBase
 */
abstract class RuleBase extends RuleInterface {

  protected $id;

  /**
   *
   */
  public function __construct() {
    $this->id = uniqid("");
  }

  /**
   * Get the number of identification of the rule.
   *
   * @return integer The number of identification of this rule.
   */
  public function getId() {
    return $this->id;
  }

  /**
   * Validate the attribute value.
   *
   * @return bool True if the attribute value is valid, false otherwise.
   */
  public function validate($attribute_value) {
    
  }

}
