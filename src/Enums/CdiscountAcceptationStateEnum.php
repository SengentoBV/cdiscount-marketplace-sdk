<?php

namespace SengentoBV\CdiscountMarketplaceSdk\Enums;

use \WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for AcceptationStateEnum Enums
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:AcceptationStateEnum
 * @package Cdiscount
 * @subpackage Enumerations
 */
class CdiscountAcceptationStateEnum extends AbstractStructEnumBase
{
    /**
     * Constant for value 'None'
     * @return string 'None'
     */
    const VALUE_NONE = 'None';
    /**
     * Constant for value 'AcceptedBySeller'
     * @return string 'AcceptedBySeller'
     */
    const VALUE_ACCEPTED_BY_SELLER = 'AcceptedBySeller';
    /**
     * Constant for value 'RefusedBySeller'
     * @return string 'RefusedBySeller'
     */
    const VALUE_REFUSED_BY_SELLER = 'RefusedBySeller';
    /**
     * Constant for value 'ShippedBySeller'
     * @return string 'ShippedBySeller'
     */
    const VALUE_SHIPPED_BY_SELLER = 'ShippedBySeller';
    /**
     * Constant for value 'RefundedAfterShipping'
     * @return string 'RefundedAfterShipping'
     */
    const VALUE_REFUNDED_AFTER_SHIPPING = 'RefundedAfterShipping';
    /**
     * Constant for value 'ShipmentRefusedBySeller'
     * @return string 'ShipmentRefusedBySeller'
     */
    const VALUE_SHIPMENT_REFUSED_BY_SELLER = 'ShipmentRefusedBySeller';
    /**
     * Constant for value 'RefundedAfterShipmentRefused'
     * @return string 'RefundedAfterShipmentRefused'
     */
    const VALUE_REFUNDED_AFTER_SHIPMENT_REFUSED = 'RefundedAfterShipmentRefused';
    /**
     * Constant for value 'CancelledBeforeNotificationByCustomer'
     * @return string 'CancelledBeforeNotificationByCustomer'
     */
    const VALUE_CANCELLED_BEFORE_NOTIFICATION_BY_CUSTOMER = 'CancelledBeforeNotificationByCustomer';
    /**
     * Constant for value 'CancelledBeforePaymentByCustomer'
     * @return string 'CancelledBeforePaymentByCustomer'
     */
    const VALUE_CANCELLED_BEFORE_PAYMENT_BY_CUSTOMER = 'CancelledBeforePaymentByCustomer';
    /**
     * Constant for value 'CancellationRequestPending'
     * @return string 'CancellationRequestPending'
     */
    const VALUE_CANCELLATION_REQUEST_PENDING = 'CancellationRequestPending';
    /**
     * Constant for value 'CancelledAfterPaymentByCustomer'
     * @return string 'CancelledAfterPaymentByCustomer'
     */
    const VALUE_CANCELLED_AFTER_PAYMENT_BY_CUSTOMER = 'CancelledAfterPaymentByCustomer';
    /**
     * Constant for value 'RefundedAfterCustomerCancellation'
     * @return string 'RefundedAfterCustomerCancellation'
     */
    const VALUE_REFUNDED_AFTER_CUSTOMER_CANCELLATION = 'RefundedAfterCustomerCancellation';
    /**
     * Constant for value 'PaymentRefused'
     * @return string 'PaymentRefused'
     */
    const VALUE_PAYMENT_REFUSED = 'PaymentRefused';
    /**
     * Return allowed values
     * @uses self::VALUE_NONE
     * @uses self::VALUE_ACCEPTED_BY_SELLER
     * @uses self::VALUE_REFUSED_BY_SELLER
     * @uses self::VALUE_SHIPPED_BY_SELLER
     * @uses self::VALUE_REFUNDED_AFTER_SHIPPING
     * @uses self::VALUE_SHIPMENT_REFUSED_BY_SELLER
     * @uses self::VALUE_REFUNDED_AFTER_SHIPMENT_REFUSED
     * @uses self::VALUE_CANCELLED_BEFORE_NOTIFICATION_BY_CUSTOMER
     * @uses self::VALUE_CANCELLED_BEFORE_PAYMENT_BY_CUSTOMER
     * @uses self::VALUE_CANCELLATION_REQUEST_PENDING
     * @uses self::VALUE_CANCELLED_AFTER_PAYMENT_BY_CUSTOMER
     * @uses self::VALUE_REFUNDED_AFTER_CUSTOMER_CANCELLATION
     * @uses self::VALUE_PAYMENT_REFUSED
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_NONE,
            self::VALUE_ACCEPTED_BY_SELLER,
            self::VALUE_REFUSED_BY_SELLER,
            self::VALUE_SHIPPED_BY_SELLER,
            self::VALUE_REFUNDED_AFTER_SHIPPING,
            self::VALUE_SHIPMENT_REFUSED_BY_SELLER,
            self::VALUE_REFUNDED_AFTER_SHIPMENT_REFUSED,
            self::VALUE_CANCELLED_BEFORE_NOTIFICATION_BY_CUSTOMER,
            self::VALUE_CANCELLED_BEFORE_PAYMENT_BY_CUSTOMER,
            self::VALUE_CANCELLATION_REQUEST_PENDING,
            self::VALUE_CANCELLED_AFTER_PAYMENT_BY_CUSTOMER,
            self::VALUE_REFUNDED_AFTER_CUSTOMER_CANCELLATION,
            self::VALUE_PAYMENT_REFUSED,
        );
    }
}
