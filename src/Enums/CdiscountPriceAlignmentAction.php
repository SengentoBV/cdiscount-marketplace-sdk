<?php

declare(strict_types=1);

namespace SengentoBV\CdiscountMarketplaceSdk\Enums;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for PriceAlignmentAction Enums
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:PriceAlignmentAction
 * @package Cdiscount
 * @subpackage Enumerations
 */
class CdiscountPriceAlignmentAction extends AbstractStructEnumBase
{
    /**
     * Constant for value 'Empty'
     * @return string 'Empty'
     */
    const VALUE_EMPTY = 'Empty';
    /**
     * Constant for value 'Unknown'
     * @return string 'Unknown'
     */
    const VALUE_UNKNOWN = 'Unknown';
    /**
     * Constant for value 'Align'
     * @return string 'Align'
     */
    const VALUE_ALIGN = 'Align';
    /**
     * Constant for value 'DontAlign'
     * @return string 'DontAlign'
     */
    const VALUE_DONT_ALIGN = 'DontAlign';
    /**
     * Return allowed values
     * @uses self::VALUE_EMPTY
     * @uses self::VALUE_UNKNOWN
     * @uses self::VALUE_ALIGN
     * @uses self::VALUE_DONT_ALIGN
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_EMPTY,
            self::VALUE_UNKNOWN,
            self::VALUE_ALIGN,
            self::VALUE_DONT_ALIGN,
        ];
    }
}
