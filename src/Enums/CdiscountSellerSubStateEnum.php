<?php

namespace SengentoBV\CdiscountMarketplaceSdk\Enums;

use \WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for SellerSubStateEnum Enums
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:SellerSubStateEnum
 * @package Cdiscount
 * @subpackage Enumerations
 */
class CdiscountSellerSubStateEnum extends AbstractStructEnumBase
{
    /**
     * Constant for value 'Holidays'
     * @return string 'Holidays'
     */
    const VALUE_HOLIDAYS = 'Holidays';
    /**
     * Constant for value 'ActiveSeller'
     * @return string 'ActiveSeller'
     */
    const VALUE_ACTIVE_SELLER = 'ActiveSeller';
    /**
     * Constant for value 'BannedSeller'
     * @return string 'BannedSeller'
     */
    const VALUE_BANNED_SELLER = 'BannedSeller';
    /**
     * Return allowed values
     * @uses self::VALUE_HOLIDAYS
     * @uses self::VALUE_ACTIVE_SELLER
     * @uses self::VALUE_BANNED_SELLER
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_HOLIDAYS,
            self::VALUE_ACTIVE_SELLER,
            self::VALUE_BANNED_SELLER,
        );
    }
}
