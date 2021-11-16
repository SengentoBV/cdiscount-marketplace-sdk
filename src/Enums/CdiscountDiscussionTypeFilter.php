<?php

namespace SengentoBV\CdiscountMarketplaceSdk\Enums;

use \WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for DiscussionTypeFilter Enums
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:DiscussionTypeFilter
 * @package Cdiscount
 * @subpackage Enumerations
 */
class CdiscountDiscussionTypeFilter extends AbstractStructEnumBase
{
    /**
     * Constant for value 'All'
     * @return string 'All'
     */
    const VALUE_ALL = 'All';
    /**
     * Constant for value 'Offer'
     * @return string 'Offer'
     */
    const VALUE_OFFER = 'Offer';
    /**
     * Constant for value 'Discussion'
     * @return string 'Discussion'
     */
    const VALUE_DISCUSSION = 'Discussion';
    /**
     * Constant for value 'Claim'
     * @return string 'Claim'
     */
    const VALUE_CLAIM = 'Claim';
    /**
     * Constant for value 'Arbitration'
     * @return string 'Arbitration'
     */
    const VALUE_ARBITRATION = 'Arbitration';
    /**
     * Constant for value 'Favoured'
     * @return string 'Favoured'
     */
    const VALUE_FAVOURED = 'Favoured';
    /**
     * Return allowed values
     * @uses self::VALUE_ALL
     * @uses self::VALUE_OFFER
     * @uses self::VALUE_DISCUSSION
     * @uses self::VALUE_CLAIM
     * @uses self::VALUE_ARBITRATION
     * @uses self::VALUE_FAVOURED
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return array(
            self::VALUE_ALL,
            self::VALUE_OFFER,
            self::VALUE_DISCUSSION,
            self::VALUE_CLAIM,
            self::VALUE_ARBITRATION,
            self::VALUE_FAVOURED,
        );
    }
}
