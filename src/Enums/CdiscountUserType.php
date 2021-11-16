<?php

declare(strict_types=1);

namespace SengentoBV\CdiscountMarketplaceSdk\Enums;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for UserType Enums
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:UserType
 * @package Cdiscount
 * @subpackage Enumerations
 */
class CdiscountUserType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'Customer'
     * @return string 'Customer'
     */
    const VALUE_CUSTOMER = 'Customer';
    /**
     * Constant for value 'Seller'
     * @return string 'Seller'
     */
    const VALUE_SELLER = 'Seller';
    /**
     * Constant for value 'Automatic'
     * @return string 'Automatic'
     */
    const VALUE_AUTOMATIC = 'Automatic';
    /**
     * Constant for value 'GrcOperator'
     * @return string 'GrcOperator'
     */
    const VALUE_GRC_OPERATOR = 'GrcOperator';
    /**
     * Return allowed values
     * @uses self::VALUE_CUSTOMER
     * @uses self::VALUE_SELLER
     * @uses self::VALUE_AUTOMATIC
     * @uses self::VALUE_GRC_OPERATOR
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_CUSTOMER,
            self::VALUE_SELLER,
            self::VALUE_AUTOMATIC,
            self::VALUE_GRC_OPERATOR,
        ];
    }
}
