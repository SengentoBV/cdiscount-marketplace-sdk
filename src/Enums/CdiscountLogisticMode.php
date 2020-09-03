<?php

namespace SengentoBV\CdiscountMarketplaceSdk\Enums;

use \WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for LogisticMode Enums
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:LogisticMode
 * @package Cdiscount
 * @subpackage Enumerations
 */
class CdiscountLogisticMode extends AbstractStructEnumBase
{
    /**
     * Constant for value 'Marketplace'
     * @return string 'Marketplace'
     */
    const VALUE_MARKETPLACE = 'Marketplace';
    /**
     * Constant for value 'Fulfilment'
     * @return string 'Fulfilment'
     */
    const VALUE_FULFILMENT = 'Fulfilment';
    /**
     * Constant for value 'Fulfilment on demand'
     * @return string 'Fulfilment on demand'
     */
    const VALUE_FULFILMENT_ON_DEMAND = 'Fulfilment on demand';
    /**
     * Return allowed values
     * @uses self::VALUE_MARKETPLACE
     * @uses self::VALUE_FULFILMENT
     * @uses self::VALUE_FULFILMENT_ON_DEMAND
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_MARKETPLACE,
            self::VALUE_FULFILMENT,
            self::VALUE_FULFILMENT_ON_DEMAND,
        );
    }
}
