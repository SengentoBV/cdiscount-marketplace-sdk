<?php

declare(strict_types=1);

namespace SengentoBV\CdiscountMarketplaceSdk\Enums;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for DiscountType Enums
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:DiscountType
 * @package Cdiscount
 * @subpackage Enumerations
 */
class CdiscountDiscountType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'StrikedPrice'
     * @return string 'StrikedPrice'
     */
    const VALUE_STRIKED_PRICE = 'StrikedPrice';
    /**
     * Constant for value 'Flash'
     * @return string 'Flash'
     */
    const VALUE_FLASH = 'Flash';
    /**
     * Constant for value 'Sales'
     * @return string 'Sales'
     */
    const VALUE_SALES = 'Sales';
    /**
     * Return allowed values
     * @uses self::VALUE_STRIKED_PRICE
     * @uses self::VALUE_FLASH
     * @uses self::VALUE_SALES
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_STRIKED_PRICE,
            self::VALUE_FLASH,
            self::VALUE_SALES,
        ];
    }
}
