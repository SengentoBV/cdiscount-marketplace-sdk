<?php

declare(strict_types=1);

namespace SengentoBV\CdiscountMarketplaceSdk\Enums;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for OrderTypeEnum Enums
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:OrderTypeEnum
 * @package Cdiscount
 * @subpackage Enumerations
 */
class CdiscountOrderTypeEnum extends AbstractStructEnumBase
{
    /**
     * Constant for value 'IsFulfillment'
     * @return string 'IsFulfillment'
     */
    const VALUE_IS_FULFILLMENT = 'IsFulfillment';
    /**
     * Constant for value 'MKPFBC'
     * @return string 'MKPFBC'
     */
    const VALUE_MKPFBC = 'MKPFBC';
    /**
     * Constant for value 'EXTFBC'
     * @return string 'EXTFBC'
     */
    const VALUE_EXTFBC = 'EXTFBC';
    /**
     * Constant for value 'None'
     * @return string 'None'
     */
    const VALUE_NONE = 'None';
    /**
     * Return allowed values
     * @uses self::VALUE_IS_FULFILLMENT
     * @uses self::VALUE_MKPFBC
     * @uses self::VALUE_EXTFBC
     * @uses self::VALUE_NONE
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_IS_FULFILLMENT,
            self::VALUE_MKPFBC,
            self::VALUE_EXTFBC,
            self::VALUE_NONE,
        ];
    }
}
