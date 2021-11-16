<?php

declare(strict_types=1);

namespace SengentoBV\CdiscountMarketplaceSdk\Enums;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for ParcelStatus Enums
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ParcelStatus
 * @package Cdiscount
 * @subpackage Enumerations
 */
class CdiscountParcelStatus extends AbstractStructEnumBase
{
    /**
     * Constant for value 'Delivered'
     * @return string 'Delivered'
     */
    const VALUE_DELIVERED = 'Delivered';
    /**
     * Constant for value 'Not Delivered - Back Transporter'
     * @return string 'Not Delivered - Back Transporter'
     */
    const VALUE_NOT_DELIVERED_BACK_TRANSPORTER = 'Not Delivered - Back Transporter';
    /**
     * Constant for value 'Not Delivered - Lost Or Broken'
     * @return string 'Not Delivered - Lost Or Broken'
     */
    const VALUE_NOT_DELIVERED_LOST_OR_BROKEN = 'Not Delivered - Lost Or Broken';
    /**
     * Constant for value 'Committed The Transporter'
     * @return string 'Committed The Transporter'
     */
    const VALUE_COMMITTED_THE_TRANSPORTER = 'Committed The Transporter';
    /**
     * Constant for value 'On Going Delivery'
     * @return string 'On Going Delivery'
     */
    const VALUE_ON_GOING_DELIVERY = 'On Going Delivery';
    /**
     * Constant for value 'In Point Relay'
     * @return string 'In Point Relay'
     */
    const VALUE_IN_POINT_RELAY = 'In Point Relay';
    /**
     * Constant for value 'Other'
     * @return string 'Other'
     */
    const VALUE_OTHER = 'Other';
    /**
     * Constant for value 'Prepared'
     * @return string 'Prepared'
     */
    const VALUE_PREPARED = 'Prepared';
    /**
     * Return allowed values
     * @uses self::VALUE_DELIVERED
     * @uses self::VALUE_NOT_DELIVERED_BACK_TRANSPORTER
     * @uses self::VALUE_NOT_DELIVERED_LOST_OR_BROKEN
     * @uses self::VALUE_COMMITTED_THE_TRANSPORTER
     * @uses self::VALUE_ON_GOING_DELIVERY
     * @uses self::VALUE_IN_POINT_RELAY
     * @uses self::VALUE_OTHER
     * @uses self::VALUE_PREPARED
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_DELIVERED,
            self::VALUE_NOT_DELIVERED_BACK_TRANSPORTER,
            self::VALUE_NOT_DELIVERED_LOST_OR_BROKEN,
            self::VALUE_COMMITTED_THE_TRANSPORTER,
            self::VALUE_ON_GOING_DELIVERY,
            self::VALUE_IN_POINT_RELAY,
            self::VALUE_OTHER,
            self::VALUE_PREPARED,
        ];
    }
}
