<?php

declare(strict_types=1);

namespace SengentoBV\CdiscountMarketplaceSdk\Enums;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for OrderStatusType Enums
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:OrderStatusType
 * @package Cdiscount
 * @subpackage Enumerations
 */
class CdiscountOrderStatusType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'NonValidated'
     * @return string 'NonValidated'
     */
    const VALUE_NON_VALIDATED = 'NonValidated';
    /**
     * Constant for value 'NoPaymentAttempt'
     * @return string 'NoPaymentAttempt'
     */
    const VALUE_NO_PAYMENT_ATTEMPT = 'NoPaymentAttempt';
    /**
     * Constant for value 'Cancelled'
     * @return string 'Cancelled'
     */
    const VALUE_CANCELLED = 'Cancelled';
    /**
     * Constant for value 'Validated'
     * @return string 'Validated'
     */
    const VALUE_VALIDATED = 'Validated';
    /**
     * Constant for value 'Waiting'
     * @return string 'Waiting'
     */
    const VALUE_WAITING = 'Waiting';
    /**
     * Constant for value 'Completed'
     * @return string 'Completed'
     */
    const VALUE_COMPLETED = 'Completed';
    /**
     * Return allowed values
     * @uses self::VALUE_NON_VALIDATED
     * @uses self::VALUE_NO_PAYMENT_ATTEMPT
     * @uses self::VALUE_CANCELLED
     * @uses self::VALUE_VALIDATED
     * @uses self::VALUE_WAITING
     * @uses self::VALUE_COMPLETED
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_NON_VALIDATED,
            self::VALUE_NO_PAYMENT_ATTEMPT,
            self::VALUE_CANCELLED,
            self::VALUE_VALIDATED,
            self::VALUE_WAITING,
            self::VALUE_COMPLETED,
        ];
    }
}
