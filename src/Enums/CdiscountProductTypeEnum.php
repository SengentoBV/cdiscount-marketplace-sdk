<?php

declare(strict_types=1);

namespace SengentoBV\CdiscountMarketplaceSdk\Enums;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for ProductTypeEnum Enums
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ProductTypeEnum
 * @package Cdiscount
 * @subpackage Enumerations
 */
class CdiscountProductTypeEnum extends AbstractStructEnumBase
{
    /**
     * Constant for value 'Standard'
     * @return string 'Standard'
     */
    const VALUE_STANDARD = 'Standard';
    /**
     * Constant for value 'Variant'
     * @return string 'Variant'
     */
    const VALUE_VARIANT = 'Variant';
    /**
     * Return allowed values
     * @uses self::VALUE_STANDARD
     * @uses self::VALUE_VARIANT
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_STANDARD,
            self::VALUE_VARIANT,
        ];
    }
}
