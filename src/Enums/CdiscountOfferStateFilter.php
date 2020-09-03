<?php

namespace SengentoBV\CdiscountMarketplaceSdk\Enums;

use \WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for OfferStateFilter Enums
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:OfferStateFilter
 * @package Cdiscount
 * @subpackage Enumerations
 */
class CdiscountOfferStateFilter extends AbstractStructEnumBase
{
    /**
     * Constant for value 'AllOffersOnly'
     * @return string 'AllOffersOnly'
     */
    const VALUE_ALL_OFFERS_ONLY = 'AllOffersOnly';
    /**
     * Constant for value 'OnlineOffersOnly'
     * @return string 'OnlineOffersOnly'
     */
    const VALUE_ONLINE_OFFERS_ONLY = 'OnlineOffersOnly';
    /**
     * Constant for value 'PublishedOffersOnly'
     * @return string 'PublishedOffersOnly'
     */
    const VALUE_PUBLISHED_OFFERS_ONLY = 'PublishedOffersOnly';
    /**
     * Constant for value 'OfflineOffersOnly'
     * @return string 'OfflineOffersOnly'
     */
    const VALUE_OFFLINE_OFFERS_ONLY = 'OfflineOffersOnly';
    /**
     * Return allowed values
     * @uses self::VALUE_ALL_OFFERS_ONLY
     * @uses self::VALUE_ONLINE_OFFERS_ONLY
     * @uses self::VALUE_PUBLISHED_OFFERS_ONLY
     * @uses self::VALUE_OFFLINE_OFFERS_ONLY
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_ALL_OFFERS_ONLY,
            self::VALUE_ONLINE_OFFERS_ONLY,
            self::VALUE_PUBLISHED_OFFERS_ONLY,
            self::VALUE_OFFLINE_OFFERS_ONLY,
        );
    }
}
