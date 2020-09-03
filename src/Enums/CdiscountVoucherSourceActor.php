<?php

namespace SengentoBV\CdiscountMarketplaceSdk\Enums;

use \WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for VoucherSourceActor Enums
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:VoucherSourceActor
 * @package Cdiscount
 * @subpackage Enumerations
 */
class CdiscountVoucherSourceActor extends AbstractStructEnumBase
{
    /**
     * Constant for value 'Customer'
     * @return string 'Customer'
     */
    const VALUE_CUSTOMER = 'Customer';
    /**
     * Constant for value 'CDiscount'
     * @return string 'CDiscount'
     */
    const VALUE_CDISCOUNT = 'CDiscount';
    /**
     * Constant for value 'Seller'
     * @return string 'Seller'
     */
    const VALUE_SELLER = 'Seller';
    /**
     * Return allowed values
     * @uses self::VALUE_CUSTOMER
     * @uses self::VALUE_CDISCOUNT
     * @uses self::VALUE_SELLER
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_CUSTOMER,
            self::VALUE_CDISCOUNT,
            self::VALUE_SELLER,
        );
    }
}
