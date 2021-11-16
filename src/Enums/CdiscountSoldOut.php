<?php

namespace SengentoBV\CdiscountMarketplaceSdk\Enums;

use \WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for SoldOut Enums
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:SoldOut
 * @package Cdiscount
 * @subpackage Enumerations
 */
class CdiscountSoldOut extends AbstractStructEnumBase
{
    /**
     * Constant for value 'None'
     * @return string 'None'
     */
    const VALUE_NONE = 'None';
    /**
     * Constant for value 'All'
     * @return string 'All'
     */
    const VALUE_ALL = 'All';
    /**
     * Constant for value 'InSoldOut'
     * @return string 'InSoldOut'
     */
    const VALUE_IN_SOLD_OUT = 'InSoldOut';
    /**
     * Constant for value 'InSoldOutFiveDays'
     * @return string 'InSoldOutFiveDays'
     */
    const VALUE_IN_SOLD_OUT_FIVE_DAYS = 'InSoldOutFiveDays';
    /**
     * Constant for value 'InSoldOutFifteenDays'
     * @return string 'InSoldOutFifteenDays'
     */
    const VALUE_IN_SOLD_OUT_FIFTEEN_DAYS = 'InSoldOutFifteenDays';
    /**
     * Constant for value 'InSoldOutAfterFifteenDays'
     * @return string 'InSoldOutAfterFifteenDays'
     */
    const VALUE_IN_SOLD_OUT_AFTER_FIFTEEN_DAYS = 'InSoldOutAfterFifteenDays';
    /**
     * Return allowed values
     * @uses self::VALUE_NONE
     * @uses self::VALUE_ALL
     * @uses self::VALUE_IN_SOLD_OUT
     * @uses self::VALUE_IN_SOLD_OUT_FIVE_DAYS
     * @uses self::VALUE_IN_SOLD_OUT_FIFTEEN_DAYS
     * @uses self::VALUE_IN_SOLD_OUT_AFTER_FIFTEEN_DAYS
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return array(
            self::VALUE_NONE,
            self::VALUE_ALL,
            self::VALUE_IN_SOLD_OUT,
            self::VALUE_IN_SOLD_OUT_FIVE_DAYS,
            self::VALUE_IN_SOLD_OUT_FIFTEEN_DAYS,
            self::VALUE_IN_SOLD_OUT_AFTER_FIFTEEN_DAYS,
        );
    }
}
