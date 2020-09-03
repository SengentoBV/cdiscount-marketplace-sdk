<?php

namespace SengentoBV\CdiscountMarketplaceSdk\Enums;

use \WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for OfferSortOrder Enums
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:OfferSortOrder
 * @package Cdiscount
 * @subpackage Enumerations
 */
class CdiscountOfferSortOrder extends AbstractStructEnumBase
{
    /**
     * Constant for value 'BySoldQuantityDescending'
     * @return string 'BySoldQuantityDescending'
     */
    const VALUE_BY_SOLD_QUANTITY_DESCENDING = 'BySoldQuantityDescending';
    /**
     * Constant for value 'ByPriceAscending'
     * @return string 'ByPriceAscending'
     */
    const VALUE_BY_PRICE_ASCENDING = 'ByPriceAscending';
    /**
     * Constant for value 'ByPriceDescending'
     * @return string 'ByPriceDescending'
     */
    const VALUE_BY_PRICE_DESCENDING = 'ByPriceDescending';
    /**
     * Constant for value 'ByCreationDateDescending'
     * @return string 'ByCreationDateDescending'
     */
    const VALUE_BY_CREATION_DATE_DESCENDING = 'ByCreationDateDescending';
    /**
     * Return allowed values
     * @uses self::VALUE_BY_SOLD_QUANTITY_DESCENDING
     * @uses self::VALUE_BY_PRICE_ASCENDING
     * @uses self::VALUE_BY_PRICE_DESCENDING
     * @uses self::VALUE_BY_CREATION_DATE_DESCENDING
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_BY_SOLD_QUANTITY_DESCENDING,
            self::VALUE_BY_PRICE_ASCENDING,
            self::VALUE_BY_PRICE_DESCENDING,
            self::VALUE_BY_CREATION_DATE_DESCENDING,
        );
    }
}
