<?php

namespace SengentoBV\CdiscountMarketplaceSdk\Enums;

use \WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for FulfilmentProductActionType Enums
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:FulfilmentProductActionType
 * @package Cdiscount
 * @subpackage Enumerations
 */
class CdiscountFulfilmentProductActionType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'Activation'
     * @return string 'Activation'
     */
    const VALUE_ACTIVATION = 'Activation';
    /**
     * Constant for value 'Deactivation'
     * @return string 'Deactivation'
     */
    const VALUE_DEACTIVATION = 'Deactivation';
    /**
     * Return allowed values
     * @uses self::VALUE_ACTIVATION
     * @uses self::VALUE_DEACTIVATION
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_ACTIVATION,
            self::VALUE_DEACTIVATION,
        );
    }
}
