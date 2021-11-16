<?php

declare(strict_types=1);

namespace SengentoBV\CdiscountMarketplaceSdk\Enums;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for RefundMotive Enums
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:RefundMotive
 * @package Cdiscount
 * @subpackage Enumerations
 */
class CdiscountRefundMotive extends AbstractStructEnumBase
{
    /**
     * Constant for value 'VendorRejection'
     * @return string 'VendorRejection'
     */
    const VALUE_VENDOR_REJECTION = 'VendorRejection';
    /**
     * Constant for value 'ClientCancellation'
     * @return string 'ClientCancellation'
     */
    const VALUE_CLIENT_CANCELLATION = 'ClientCancellation';
    /**
     * Constant for value 'VendorRejectionAndClientCancellation'
     * @return string 'VendorRejectionAndClientCancellation'
     */
    const VALUE_VENDOR_REJECTION_AND_CLIENT_CANCELLATION = 'VendorRejectionAndClientCancellation';
    /**
     * Constant for value 'ClientClaim'
     * @return string 'ClientClaim'
     */
    const VALUE_CLIENT_CLAIM = 'ClientClaim';
    /**
     * Constant for value 'VendorInitiatedRefund'
     * @return string 'VendorInitiatedRefund'
     */
    const VALUE_VENDOR_INITIATED_REFUND = 'VendorInitiatedRefund';
    /**
     * Constant for value 'ClientRetraction'
     * @return string 'ClientRetraction'
     */
    const VALUE_CLIENT_RETRACTION = 'ClientRetraction';
    /**
     * Constant for value 'NoClientWithDrawal'
     * @return string 'NoClientWithDrawal'
     */
    const VALUE_NO_CLIENT_WITH_DRAWAL = 'NoClientWithDrawal';
    /**
     * Constant for value 'ProductStockUnavailable'
     * @return string 'ProductStockUnavailable'
     */
    const VALUE_PRODUCT_STOCK_UNAVAILABLE = 'ProductStockUnavailable';
    /**
     * Return allowed values
     * @uses self::VALUE_VENDOR_REJECTION
     * @uses self::VALUE_CLIENT_CANCELLATION
     * @uses self::VALUE_VENDOR_REJECTION_AND_CLIENT_CANCELLATION
     * @uses self::VALUE_CLIENT_CLAIM
     * @uses self::VALUE_VENDOR_INITIATED_REFUND
     * @uses self::VALUE_CLIENT_RETRACTION
     * @uses self::VALUE_NO_CLIENT_WITH_DRAWAL
     * @uses self::VALUE_PRODUCT_STOCK_UNAVAILABLE
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_VENDOR_REJECTION,
            self::VALUE_CLIENT_CANCELLATION,
            self::VALUE_VENDOR_REJECTION_AND_CLIENT_CANCELLATION,
            self::VALUE_CLIENT_CLAIM,
            self::VALUE_VENDOR_INITIATED_REFUND,
            self::VALUE_CLIENT_RETRACTION,
            self::VALUE_NO_CLIENT_WITH_DRAWAL,
            self::VALUE_PRODUCT_STOCK_UNAVAILABLE,
        ];
    }
}
