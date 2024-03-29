<?php

require_once 'CRM/Core/Payment/CyberSource.php';

class CRM_Contribute_Payment_CyberSource extends CRM_Core_Payment_CyberSource {
  /** 
   * We only need one instance of this object. So we use the singleton 
   * pattern and cache the instance in this variable 
   *
   * @var object 
   * @static 
   */
  static private $_singleton = null;
  
  /**
   * Constructor
   *
   * @param string $mode the mode of operation: live or test
   *
   * @return void
   */
  function __construct( $mode, &$paymentProcessor ) {
    parent::__construct( $mode, $paymentProcessor );
  }

  /**
   * singleton function used to manage this object
   *
   * @param string $mode the mode of operation: live or test
   *
   * @return object
   * @static
   */
  static function &singleton( $mode, &$paymentProcessor ) {
    $processorName = $paymentProcessor['name'];
    if (self::$_singleton[$processorName] === null ) {
      self::$_singleton[$processorName] =& new CRM_Contribute_Payment_CyberSource( $mode, $paymentProcessor );
    }
    return self::$_singleton[$processorName];
  }

}

