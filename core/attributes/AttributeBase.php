<?php
/**
 * @file AttributeBase.php
 * 
 * @package Evolution\attributes
 */

namespace Evolution\attributes;

/**
 * @class AttributeBase
 */
abstract class AttributeBase implements AttributeInterface {

  protected $value;

  protected $rules;

  /**
   * Creates and attribute of any type.
   * 
   * @throws InvalidAttribute
   * @private
   */
  public function __construct($value) {
    if (self::validate($value)) throw new InvalidAttributeValueException();
    $this->value = $value;
    $this->rules = [];
  }

  /**
   * {@inheritDoc}
   */
  public function getType() {
    return __CLASS__;
  }

  /**
   * {@inheritDoc}
   */
  public function getValue() {
    return $this->value;
  }

  /**
   * {@inheritDoc}
   */
  public function setValue($value) {
    if (self::validate($value)) throw new InvalidAttributeValueException();
    $this->value = $value;
  }

  /**
   * {@inheritDoc}
   */
  public static function validate($value) {
    // This class has no type, then all values are valid.
    return TRUE;
  }

  /**
   * {@inheritDoc}
   */
  public function getRules() {
    return $this->rules;
  }

  /**
   * {@inheritDoc}
   */
  public function addRule($rule) {
    $this->rules[] = $rule;
    return TRUE;
  }

  /**
   * {@inheritDoc}
   */
  public function removeRule($rule_id) {
    foreach ($this->rules as $key => $rule) {
      if ($rule->getId() === $rule_id) {
        unset($this->rules[$key]);
        return TRUE;
      }
    }
    return FALSE;
  }
}
