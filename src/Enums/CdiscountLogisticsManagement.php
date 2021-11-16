<?php

namespace SengentoBV\CdiscountMarketplaceSdk\Enums;

use \WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for LogisticsManagement Enums
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:LogisticsManagement
 * @package Cdiscount
 * @subpackage Enumerations
 */
class CdiscountLogisticsManagement extends AbstractStructEnumBase
{
    /**
     * Constant for value 'Automatic'
     * @return string 'Automatic'
     */
    const VALUE_AUTOMATIC = 'Automatic';
    /**
     * Constant for value 'Seller only'
     * @return string 'Seller only'
     */
    const VALUE_SELLER_ONLY = 'Seller only';
    /**
     * Constant for value 'Fulfilment on demand'
     * @return string 'Fulfilment on demand'
     */
    const VALUE_FULFILMENT_ON_DEMAND = 'Fulfilment on demand';
    /**
     * Return allowed values
     * @uses self::VALUE_AUTOMATIC
     * @uses self::VALUE_SELLER_ONLY
     * @uses self::VALUE_FULFILMENT_ON_DEMAND
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return array(
            self::VALUE_AUTOMATIC,
            self::VALUE_SELLER_ONLY,
            self::VALUE_FULFILMENT_ON_DEMAND,
        );
    }
}
