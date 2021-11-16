<?php

declare(strict_types=1);

namespace SengentoBV\CdiscountMarketplaceSdk\Enums;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for ProductCondition Enums
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ProductCondition
 * @package Cdiscount
 * @subpackage Enumerations
 */
class CdiscountProductCondition extends AbstractStructEnumBase
{
    /**
     * Constant for value 'UsedLikeNew'
     * @return string 'UsedLikeNew'
     */
    const VALUE_USED_LIKE_NEW = 'UsedLikeNew';
    /**
     * Constant for value 'UsedVeryGoodCondition'
     * @return string 'UsedVeryGoodCondition'
     */
    const VALUE_USED_VERY_GOOD_CONDITION = 'UsedVeryGoodCondition';
    /**
     * Constant for value 'UsedGoodCondition'
     * @return string 'UsedGoodCondition'
     */
    const VALUE_USED_GOOD_CONDITION = 'UsedGoodCondition';
    /**
     * Constant for value 'UsedSatisfactoryCondtion'
     * @return string 'UsedSatisfactoryCondtion'
     */
    const VALUE_USED_SATISFACTORY_CONDTION = 'UsedSatisfactoryCondtion';
    /**
     * Constant for value 'NewRefurbished'
     * @return string 'NewRefurbished'
     */
    const VALUE_NEW_REFURBISHED = 'NewRefurbished';
    /**
     * Constant for value 'NewNew'
     * @return string 'NewNew'
     */
    const VALUE_NEW_NEW = 'NewNew';
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
     * @uses self::VALUE_USED_LIKE_NEW
     * @uses self::VALUE_USED_VERY_GOOD_CONDITION
     * @uses self::VALUE_USED_GOOD_CONDITION
     * @uses self::VALUE_USED_SATISFACTORY_CONDTION
     * @uses self::VALUE_NEW_REFURBISHED
     * @uses self::VALUE_NEW_NEW
     * @uses self::VALUE_REFURBISHED_LIKE_NEW
     * @uses self::VALUE_REFURBISHED_VERY_GOOD_STATE
     * @uses self::VALUE_REFURBISHED_CORRECT_STATE
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_USED_LIKE_NEW,
            self::VALUE_USED_VERY_GOOD_CONDITION,
            self::VALUE_USED_GOOD_CONDITION,
            self::VALUE_USED_SATISFACTORY_CONDTION,
            self::VALUE_NEW_REFURBISHED,
            self::VALUE_NEW_NEW,
            self::VALUE_REFURBISHED_LIKE_NEW,
            self::VALUE_REFURBISHED_VERY_GOOD_STATE,
            self::VALUE_REFURBISHED_CORRECT_STATE,
        ];
    }
}
