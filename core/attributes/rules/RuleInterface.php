<?php
/**
 * @file RuleInterface.php
 * 
 * @package Evolution\attributes\rules;
 */

namespace Evolution\attributes\rules;

/**
 * @interface RuleInterface
 */
interface RuleInterface {

  /**
   * Get the number of identification of the rule.
   *
   * @return integer The number of identification of this rule.
   */
  public function getId();

  /**
   * 
   *
   * @return bool
   */
  public function validate();

}
