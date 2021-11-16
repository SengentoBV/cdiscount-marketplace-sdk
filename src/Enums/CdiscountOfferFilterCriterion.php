<?php

declare(strict_types=1);

namespace SengentoBV\CdiscountMarketplaceSdk\Enums;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for OfferFilterCriterion Enums
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:OfferFilterCriterion
 * @package Cdiscount
 * @subpackage Enumerations
 */
class CdiscountOfferFilterCriterion extends AbstractStructEnumBase
{
    /**
     * Constant for value 'NewOffersOnly'
     * @return string 'NewOffersOnly'
     */
    const VALUE_NEW_OFFERS_ONLY = 'NewOffersOnly';
    /**
     * Constant for value 'UsedOffersOnly'
     * @return string 'UsedOffersOnly'
     */
    const VALUE_USED_OFFERS_ONLY = 'UsedOffersOnly';
    /**
     * Return allowed values
     * @uses self::VALUE_NEW_OFFERS_ONLY
     * @uses self::VALUE_USED_OFFERS_ONLY
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_NEW_OFFERS_ONLY,
            self::VALUE_USED_OFFERS_ONLY,
        ];
    }
}
