<?php

namespace SengentoBV\CdiscountMarketplaceSdk\Enums;

use \WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for SupplyOrderStatusType Enums
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:SupplyOrderStatusType
 * @package Cdiscount
 * @subpackage Enumerations
 */
class CdiscountSupplyOrderStatusType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'Registered'
     * @return string 'Registered'
     */
    const VALUE_REGISTERED = 'Registered';
    /**
     * Constant for value 'AppointmentScheduled'
     * @return string 'AppointmentScheduled'
     */
    const VALUE_APPOINTMENT_SCHEDULED = 'AppointmentScheduled';
    /**
     * Constant for value 'SupplyingInProgress'
     * @return string 'SupplyingInProgress'
     */
    const VALUE_SUPPLYING_IN_PROGRESS = 'SupplyingInProgress';
    /**
     * Constant for value 'SupplyingDone'
     * @return string 'SupplyingDone'
     */
    const VALUE_SUPPLYING_DONE = 'SupplyingDone';
    /**
     * Constant for value 'Rejected'
     * @return string 'Rejected'
     */
    const VALUE_REJECTED = 'Rejected';
    /**
     * Constant for value 'Validated'
     * @return string 'Validated'
     */
    const VALUE_VALIDATED = 'Validated';
    /**
     * Constant for value 'Cancelled'
     * @return string 'Cancelled'
     */
    const VALUE_CANCELLED = 'Cancelled';
    /**
     * Constant for value 'PartiallyReceived'
     * @return string 'PartiallyReceived'
     */
    const VALUE_PARTIALLY_RECEIVED = 'PartiallyReceived';
    /**
     * Return allowed values
     * @uses self::VALUE_REGISTERED
     * @uses self::VALUE_APPOINTMENT_SCHEDULED
     * @uses self::VALUE_SUPPLYING_IN_PROGRESS
     * @uses self::VALUE_SUPPLYING_DONE
     * @uses self::VALUE_REJECTED
     * @uses self::VALUE_VALIDATED
     * @uses self::VALUE_CANCELLED
     * @uses self::VALUE_PARTIALLY_RECEIVED
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_REGISTERED,
            self::VALUE_APPOINTMENT_SCHEDULED,
            self::VALUE_SUPPLYING_IN_PROGRESS,
            self::VALUE_SUPPLYING_DONE,
            self::VALUE_REJECTED,
            self::VALUE_VALIDATED,
            self::VALUE_CANCELLED,
            self::VALUE_PARTIALLY_RECEIVED,
        );
    }
}
