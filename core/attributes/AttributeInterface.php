<?php
/**
 * @file AttributeInterface.php
 * 
 * @package Evolution\attributes;
 */

namespace Evolution\attributes;

/**
 * @interface AttributeInterface
 */
interface AttributeInterface {

  /**
   * Each attribute have a type, so this function retrive the name of the type.
   *
   * @return string Indicates the type of the attribute.
   */
  public function getType();

  /**
   * Get the value of the attribute.
   * 
   * @return mixed The value of this attribute.
   */
  public function getValue();

  /**
   * Set the attribute value to a new value.
   * 
   * @param mixed The new value for this attribute.
   *
   * @return bool True if the new value is valid and saved, false otherwise.
   */
  public function setValue($value);

  /**
   * Static function that validates the type of possible values for the attribute.
   *
   * @param mixed The value to be tested for the type of this attribute.
   *                                     
   * @return bool True if valid value, false otherwise.
   */
  public static function validate($value);

  /**
   * Retrive the array of Rule objects for this attribute.
   * 
   * @return Rules[] Set of rules of this attribute.
   */
  public function getRules();

  /**
   * Add one Rule object to the set of rules for this attribute.
   * 
   * @return bool True if rule was added, false otherwise.
   */
  public function addRule($rule);

  /**
   * Remove one rule of the set of rules based on the rule id.
   * 
   * @return bool True if the rules was removed, false if not found.
   */
  public function removeRule($rule_id);

}
