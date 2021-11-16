<?php

declare(strict_types=1);

namespace SengentoBV\CdiscountMarketplaceSdk\Enums;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for ProductConditionEnum Enums
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ProductConditionEnum
 * @package Cdiscount
 * @subpackage Enumerations
 */
class CdiscountProductConditionEnum extends AbstractStructEnumBase
{
    /**
     * Constant for value 'None'
     * @return string 'None'
     */
    const VALUE_NONE = 'None';
    /**
     * Constant for value 'LikeNew'
     * @return string 'LikeNew'
     */
    const VALUE_LIKE_NEW = 'LikeNew';
    /**
     * Constant for value 'VeryGoodState'
     * @return string 'VeryGoodState'
     */
    const VALUE_VERY_GOOD_STATE = 'VeryGoodState';
    /**
     * Constant for value 'GoodState'
     * @return string 'GoodState'
     */
    const VALUE_GOOD_STATE = 'GoodState';
    /**
     * Constant for value 'AverageState'
     * @return string 'AverageState'
     */
    const VALUE_AVERAGE_STATE = 'AverageState';
    /**
     * Constant for value 'Refurbished'
     * @return string 'Refurbished'
     */
    const VALUE_REFURBISHED = 'Refurbished';
    /**
     * Constant for value 'New'
     * @return string 'New'
     */
    const VALUE_NEW = 'New';
    /**
     * Constant for value 'RefurbishedLikeNew'
     * @return string 'RefurbishedLikeNew'
     */
    const VALUE_REFURBISHED_LIKE_NEW = 'RefurbishedLikeNew';
    /**
     * Constant for value 'RefurbishedVeryGoodState'
     * @return string 'RefurbishedVeryGoodState'
     */
    const VALUE_REFURBISHED_VERY_GOOD_STATE = 'RefurbishedVeryGoodState';
    /**
     * Constant for value 'RefurbishedCorrectState'
     * @return string 'RefurbishedCorrectState'
     */
    const VALUE_REFURBISHED_CORRECT_STATE = 'RefurbishedCorrectState';
    /**
     * Return allowed values
     * @uses self::VALUE_NONE
     * @uses self::VALUE_LIKE_NEW
     * @uses self::VALUE_VERY_GOOD_STATE
     * @uses self::VALUE_GOOD_STATE
     * @uses self::VALUE_AVERAGE_STATE
     * @uses self::VALUE_REFURBISHED
     * @uses self::VALUE_NEW
     * @uses self::VALUE_REFURBISHED_LIKE_NEW
     * @uses self::VALUE_REFURBISHED_VERY_GOOD_STATE
     * @uses self::VALUE_REFURBISHED_CORRECT_STATE
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_NONE,
            self::VALUE_LIKE_NEW,
            self::VALUE_VERY_GOOD_STATE,
            self::VALUE_GOOD_STATE,
            self::VALUE_AVERAGE_STATE,
            self::VALUE_REFURBISHED,
            self::VALUE_NEW,
            self::VALUE_REFURBISHED_LIKE_NEW,
            self::VALUE_REFURBISHED_VERY_GOOD_STATE,
            self::VALUE_REFURBISHED_CORRECT_STATE,
        ];
    }
}
