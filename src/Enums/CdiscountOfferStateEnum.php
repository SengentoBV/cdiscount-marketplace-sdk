<?php

namespace SengentoBV\CdiscountMarketplaceSdk\Enums;

use \WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for OfferStateEnum Enums
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:OfferStateEnum
 * @package Cdiscount
 * @subpackage Enumerations
 */
class CdiscountOfferStateEnum extends AbstractStructEnumBase
{
    /**
     * Constant for value 'WaitingForProductActivation'
     * @return string 'WaitingForProductActivation'
     */
    const VALUE_WAITING_FOR_PRODUCT_ACTIVATION = 'WaitingForProductActivation';
    /**
     * Constant for value 'Active'
     * @return string 'Active'
     */
    const VALUE_ACTIVE = 'Active';
    /**
     * Constant for value 'Inactive'
     * @return string 'Inactive'
     */
    const VALUE_INACTIVE = 'Inactive';
    /**
     * Constant for value 'Obsolete'
     * @return string 'Obsolete'
     */
    const VALUE_OBSOLETE = 'Obsolete';
    /**
     * Constant for value 'Fulfillment'
     * @return string 'Fulfillment'
     */
    const VALUE_FULFILLMENT = 'Fulfillment';
    /**
     * Return allowed values
     * @uses self::VALUE_WAITING_FOR_PRODUCT_ACTIVATION
     * @uses self::VALUE_ACTIVE
     * @uses self::VALUE_INACTIVE
     * @uses self::VALUE_OBSOLETE
     * @uses self::VALUE_FULFILLMENT
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return array(
            self::VALUE_WAITING_FOR_PRODUCT_ACTIVATION,
            self::VALUE_ACTIVE,
            self::VALUE_INACTIVE,
            self::VALUE_OBSOLETE,
            self::VALUE_FULFILLMENT,
        );
    }
}
