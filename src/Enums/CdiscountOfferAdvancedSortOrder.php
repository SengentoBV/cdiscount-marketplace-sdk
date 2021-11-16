<?php

declare(strict_types=1);

namespace SengentoBV\CdiscountMarketplaceSdk\Enums;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for OfferAdvancedSortOrder Enums
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:OfferAdvancedSortOrder
 * @package Cdiscount
 * @subpackage Enumerations
 */
class CdiscountOfferAdvancedSortOrder extends AbstractStructEnumBase
{
    /**
     * Constant for value 'OfferAscending'
     * @return string 'OfferAscending'
     */
    const VALUE_OFFER_ASCENDING = 'OfferAscending';
    /**
     * Constant for value 'OfferDescending'
     * @return string 'OfferDescending'
     */
    const VALUE_OFFER_DESCENDING = 'OfferDescending';
    /**
     * Constant for value 'ProductConditionIdAscending'
     * @return string 'ProductConditionIdAscending'
     */
    const VALUE_PRODUCT_CONDITION_ID_ASCENDING = 'ProductConditionIdAscending';
    /**
     * Constant for value 'ProductConditionIdDescending'
     * @return string 'ProductConditionIdDescending'
     */
    const VALUE_PRODUCT_CONDITION_ID_DESCENDING = 'ProductConditionIdDescending';
    /**
     * Constant for value 'PriceAscending'
     * @return string 'PriceAscending'
     */
    const VALUE_PRICE_ASCENDING = 'PriceAscending';
    /**
     * Constant for value 'PriceDescending'
     * @return string 'PriceDescending'
     */
    const VALUE_PRICE_DESCENDING = 'PriceDescending';
    /**
     * Constant for value 'QuantityAscending'
     * @return string 'QuantityAscending'
     */
    const VALUE_QUANTITY_ASCENDING = 'QuantityAscending';
    /**
     * Constant for value 'QuantityDescending'
     * @return string 'QuantityDescending'
     */
    const VALUE_QUANTITY_DESCENDING = 'QuantityDescending';
    /**
     * Constant for value 'LastUpdateDateAscending'
     * @return string 'LastUpdateDateAscending'
     */
    const VALUE_LAST_UPDATE_DATE_ASCENDING = 'LastUpdateDateAscending';
    /**
     * Constant for value 'LastUpdateDateDescending'
     * @return string 'LastUpdateDateDescending'
     */
    const VALUE_LAST_UPDATE_DATE_DESCENDING = 'LastUpdateDateDescending';
    /**
     * Return allowed values
     * @uses self::VALUE_OFFER_ASCENDING
     * @uses self::VALUE_OFFER_DESCENDING
     * @uses self::VALUE_PRODUCT_CONDITION_ID_ASCENDING
     * @uses self::VALUE_PRODUCT_CONDITION_ID_DESCENDING
     * @uses self::VALUE_PRICE_ASCENDING
     * @uses self::VALUE_PRICE_DESCENDING
     * @uses self::VALUE_QUANTITY_ASCENDING
     * @uses self::VALUE_QUANTITY_DESCENDING
     * @uses self::VALUE_LAST_UPDATE_DATE_ASCENDING
     * @uses self::VALUE_LAST_UPDATE_DATE_DESCENDING
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_OFFER_ASCENDING,
            self::VALUE_OFFER_DESCENDING,
            self::VALUE_PRODUCT_CONDITION_ID_ASCENDING,
            self::VALUE_PRODUCT_CONDITION_ID_DESCENDING,
            self::VALUE_PRICE_ASCENDING,
            self::VALUE_PRICE_DESCENDING,
            self::VALUE_QUANTITY_ASCENDING,
            self::VALUE_QUANTITY_DESCENDING,
            self::VALUE_LAST_UPDATE_DATE_ASCENDING,
            self::VALUE_LAST_UPDATE_DATE_DESCENDING,
        ];
    }
}
