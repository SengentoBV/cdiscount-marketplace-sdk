<?php

namespace SengentoBV\CdiscountMarketplaceSdk\Enums;

use \WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for ClaimType Enums
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ClaimType
 * @package Cdiscount
 * @subpackage Enumerations
 */
class CdiscountClaimType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'PackageNotReceived'
     * @return string 'PackageNotReceived'
     */
    const VALUE_PACKAGE_NOT_RECEIVED = 'PackageNotReceived';
    /**
     * Constant for value 'IncompletePackage'
     * @return string 'IncompletePackage'
     */
    const VALUE_INCOMPLETE_PACKAGE = 'IncompletePackage';
    /**
     * Constant for value 'MissingAccessories'
     * @return string 'MissingAccessories'
     */
    const VALUE_MISSING_ACCESSORIES = 'MissingAccessories';
    /**
     * Constant for value 'DamagedProduct'
     * @return string 'DamagedProduct'
     */
    const VALUE_DAMAGED_PRODUCT = 'DamagedProduct';
    /**
     * Constant for value 'WrongProductReference'
     * @return string 'WrongProductReference'
     */
    const VALUE_WRONG_PRODUCT_REFERENCE = 'WrongProductReference';
    /**
     * Constant for value 'WrongRefundAmount'
     * @return string 'WrongRefundAmount'
     */
    const VALUE_WRONG_REFUND_AMOUNT = 'WrongRefundAmount';
    /**
     * Constant for value 'RefundNotReceived'
     * @return string 'RefundNotReceived'
     */
    const VALUE_REFUND_NOT_RECEIVED = 'RefundNotReceived';
    /**
     * Constant for value 'ProductNotWorking'
     * @return string 'ProductNotWorking'
     */
    const VALUE_PRODUCT_NOT_WORKING = 'ProductNotWorking';
    /**
     * Constant for value 'Other'
     * @return string 'Other'
     */
    const VALUE_OTHER = 'Other';
    /**
     * Constant for value 'ProductCanceling'
     * @return string 'ProductCanceling'
     */
    const VALUE_PRODUCT_CANCELING = 'ProductCanceling';
    /**
     * Constant for value 'OrderCanceling'
     * @return string 'OrderCanceling'
     */
    const VALUE_ORDER_CANCELING = 'OrderCanceling';
    /**
     * Constant for value 'WishToWithdraw'
     * @return string 'WishToWithdraw'
     */
    const VALUE_WISH_TO_WITHDRAW = 'WishToWithdraw';
    /**
     * Constant for value 'OrderNotShipped'
     * @return string 'OrderNotShipped'
     */
    const VALUE_ORDER_NOT_SHIPPED = 'OrderNotShipped';
    /**
     * Return allowed values
     * @uses self::VALUE_PACKAGE_NOT_RECEIVED
     * @uses self::VALUE_INCOMPLETE_PACKAGE
     * @uses self::VALUE_MISSING_ACCESSORIES
     * @uses self::VALUE_DAMAGED_PRODUCT
     * @uses self::VALUE_WRONG_PRODUCT_REFERENCE
     * @uses self::VALUE_WRONG_REFUND_AMOUNT
     * @uses self::VALUE_REFUND_NOT_RECEIVED
     * @uses self::VALUE_PRODUCT_NOT_WORKING
     * @uses self::VALUE_OTHER
     * @uses self::VALUE_PRODUCT_CANCELING
     * @uses self::VALUE_ORDER_CANCELING
     * @uses self::VALUE_WISH_TO_WITHDRAW
     * @uses self::VALUE_ORDER_NOT_SHIPPED
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return array(
            self::VALUE_PACKAGE_NOT_RECEIVED,
            self::VALUE_INCOMPLETE_PACKAGE,
            self::VALUE_MISSING_ACCESSORIES,
            self::VALUE_DAMAGED_PRODUCT,
            self::VALUE_WRONG_PRODUCT_REFERENCE,
            self::VALUE_WRONG_REFUND_AMOUNT,
            self::VALUE_REFUND_NOT_RECEIVED,
            self::VALUE_PRODUCT_NOT_WORKING,
            self::VALUE_OTHER,
            self::VALUE_PRODUCT_CANCELING,
            self::VALUE_ORDER_CANCELING,
            self::VALUE_WISH_TO_WITHDRAW,
            self::VALUE_ORDER_NOT_SHIPPED,
        );
    }
}
