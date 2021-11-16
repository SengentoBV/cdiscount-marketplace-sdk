<?php

namespace SengentoBV\CdiscountMarketplaceSdk\Enums;

use \WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for ErrorTypeEnum Enums
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ErrorTypeEnum
 * @package Cdiscount
 * @subpackage Enumerations
 */
class CdiscountErrorTypeEnum extends AbstractStructEnumBase
{
    /**
     * Constant for value 'UnexpectedException'
     * @return string 'UnexpectedException'
     */
    const VALUE_UNEXPECTED_EXCEPTION = 'UnexpectedException';
    /**
     * Constant for value 'MissingField'
     * @return string 'MissingField'
     */
    const VALUE_MISSING_FIELD = 'MissingField';
    /**
     * Constant for value 'PackageNotFound'
     * @return string 'PackageNotFound'
     */
    const VALUE_PACKAGE_NOT_FOUND = 'PackageNotFound';
    /**
     * Constant for value 'PackageMatchingFileError'
     * @return string 'PackageMatchingFileError'
     */
    const VALUE_PACKAGE_MATCHING_FILE_ERROR = 'PackageMatchingFileError';
    /**
     * Constant for value 'OrderNotFound'
     * @return string 'OrderNotFound'
     */
    const VALUE_ORDER_NOT_FOUND = 'OrderNotFound';
    /**
     * Constant for value 'OrderStateIncoherent'
     * @return string 'OrderStateIncoherent'
     */
    const VALUE_ORDER_STATE_INCOHERENT = 'OrderStateIncoherent';
    /**
     * Constant for value 'OrderLineCancelledAcceptedConflict'
     * @return string 'OrderLineCancelledAcceptedConflict'
     */
    const VALUE_ORDER_LINE_CANCELLED_ACCEPTED_CONFLICT = 'OrderLineCancelledAcceptedConflict';
    /**
     * Constant for value 'SellerNotFound'
     * @return string 'SellerNotFound'
     */
    const VALUE_SELLER_NOT_FOUND = 'SellerNotFound';
    /**
     * Constant for value 'InvalidFileFormat'
     * @return string 'InvalidFileFormat'
     */
    const VALUE_INVALID_FILE_FORMAT = 'InvalidFileFormat';
    /**
     * Constant for value 'FileAlreadySubmitted'
     * @return string 'FileAlreadySubmitted'
     */
    const VALUE_FILE_ALREADY_SUBMITTED = 'FileAlreadySubmitted';
    /**
     * Constant for value 'InvalidRequest'
     * @return string 'InvalidRequest'
     */
    const VALUE_INVALID_REQUEST = 'InvalidRequest';
    /**
     * Constant for value 'FileDownloadException'
     * @return string 'FileDownloadException'
     */
    const VALUE_FILE_DOWNLOAD_EXCEPTION = 'FileDownloadException';
    /**
     * Constant for value 'SellerNotAuthorized'
     * @return string 'SellerNotAuthorized'
     */
    const VALUE_SELLER_NOT_AUTHORIZED = 'SellerNotAuthorized';
    /**
     * Constant for value 'OrderLineNotFound'
     * @return string 'OrderLineNotFound'
     */
    const VALUE_ORDER_LINE_NOT_FOUND = 'OrderLineNotFound';
    /**
     * Constant for value 'OrderLineIncoherentState'
     * @return string 'OrderLineIncoherentState'
     */
    const VALUE_ORDER_LINE_INCOHERENT_STATE = 'OrderLineIncoherentState';
    /**
     * Constant for value 'FunctionNotActive'
     * @return string 'FunctionNotActive'
     */
    const VALUE_FUNCTION_NOT_ACTIVE = 'FunctionNotActive';
    /**
     * Constant for value 'OrderPriceOrQuantityError'
     * @return string 'OrderPriceOrQuantityError'
     */
    const VALUE_ORDER_PRICE_OR_QUANTITY_ERROR = 'OrderPriceOrQuantityError';
    /**
     * Constant for value 'OrderTrackingInformationError'
     * @return string 'OrderTrackingInformationError'
     */
    const VALUE_ORDER_TRACKING_INFORMATION_ERROR = 'OrderTrackingInformationError';
    /**
     * Constant for value 'TooManyProductsInPackageError'
     * @return string 'TooManyProductsInPackageError'
     */
    const VALUE_TOO_MANY_PRODUCTS_IN_PACKAGE_ERROR = 'TooManyProductsInPackageError';
    /**
     * Constant for value 'Quota'
     * @return string 'Quota'
     */
    const VALUE_QUOTA = 'Quota';
    /**
     * Constant for value 'RefundError'
     * @return string 'RefundError'
     */
    const VALUE_REFUND_ERROR = 'RefundError';
    /**
     * Constant for value 'DiscussionCreationError'
     * @return string 'DiscussionCreationError'
     */
    const VALUE_DISCUSSION_CREATION_ERROR = 'DiscussionCreationError';
    /**
     * Constant for value 'ConfigurationError'
     * @return string 'ConfigurationError'
     */
    const VALUE_CONFIGURATION_ERROR = 'ConfigurationError';
    /**
     * Constant for value 'OrderPartiallyCanceled'
     * @return string 'OrderPartiallyCanceled'
     */
    const VALUE_ORDER_PARTIALLY_CANCELED = 'OrderPartiallyCanceled';
    /**
     * Constant for value 'OrderLineUpdateNotAuthorized'
     * @return string 'OrderLineUpdateNotAuthorized'
     */
    const VALUE_ORDER_LINE_UPDATE_NOT_AUTHORIZED = 'OrderLineUpdateNotAuthorized';
    /**
     * Constant for value 'OrderUpdateNotAuthorized'
     * @return string 'OrderUpdateNotAuthorized'
     */
    const VALUE_ORDER_UPDATE_NOT_AUTHORIZED = 'OrderUpdateNotAuthorized';
    /**
     * Constant for value 'AskingForReturnAndRemovalNotAuthorized'
     * @return string 'AskingForReturnAndRemovalNotAuthorized'
     */
    const VALUE_ASKING_FOR_RETURN_AND_REMOVAL_NOT_AUTHORIZED = 'AskingForReturnAndRemovalNotAuthorized';
    /**
     * Constant for value 'OrderLineError'
     * @return string 'OrderLineError'
     */
    const VALUE_ORDER_LINE_ERROR = 'OrderLineError';
    /**
     * Constant for value 'UnauthorizedValueException'
     * @return string 'UnauthorizedValueException'
     */
    const VALUE_UNAUTHORIZED_VALUE_EXCEPTION = 'UnauthorizedValueException';
    /**
     * Constant for value 'NotAuthorizedException'
     * @return string 'NotAuthorizedException'
     */
    const VALUE_NOT_AUTHORIZED_EXCEPTION = 'NotAuthorizedException';
    /**
     * Constant for value 'FulfillmentApiException'
     * @return string 'FulfillmentApiException'
     */
    const VALUE_FULFILLMENT_API_EXCEPTION = 'FulfillmentApiException';
    /**
     * Constant for value 'OfferNotFoundException'
     * @return string 'OfferNotFoundException'
     */
    const VALUE_OFFER_NOT_FOUND_EXCEPTION = 'OfferNotFoundException';
    /**
     * Constant for value 'OperationManagerServiceException'
     * @return string 'OperationManagerServiceException'
     */
    const VALUE_OPERATION_MANAGER_SERVICE_EXCEPTION = 'OperationManagerServiceException';
    /**
     * Constant for value 'InactiveSellerError'
     * @return string 'InactiveSellerError'
     */
    const VALUE_INACTIVE_SELLER_ERROR = 'InactiveSellerError';
    /**
     * Constant for value 'NoDataError'
     * @return string 'NoDataError'
     */
    const VALUE_NO_DATA_ERROR = 'NoDataError';
    /**
     * Constant for value 'ProductIntegrationClosed'
     * @return string 'ProductIntegrationClosed'
     */
    const VALUE_PRODUCT_INTEGRATION_CLOSED = 'ProductIntegrationClosed';
    /**
     * Constant for value 'ProductNotReferencedException'
     * @return string 'ProductNotReferencedException'
     */
    const VALUE_PRODUCT_NOT_REFERENCED_EXCEPTION = 'ProductNotReferencedException';
    /**
     * Constant for value 'ProductReferencedWithoutStockException'
     * @return string 'ProductReferencedWithoutStockException'
     */
    const VALUE_PRODUCT_REFERENCED_WITHOUT_STOCK_EXCEPTION = 'ProductReferencedWithoutStockException';
    /**
     * Constant for value 'ProductNumberLimitExceededException'
     * @return string 'ProductNumberLimitExceededException'
     */
    const VALUE_PRODUCT_NUMBER_LIMIT_EXCEEDED_EXCEPTION = 'ProductNumberLimitExceededException';
    /**
     * Return allowed values
     * @uses self::VALUE_UNEXPECTED_EXCEPTION
     * @uses self::VALUE_MISSING_FIELD
     * @uses self::VALUE_PACKAGE_NOT_FOUND
     * @uses self::VALUE_PACKAGE_MATCHING_FILE_ERROR
     * @uses self::VALUE_ORDER_NOT_FOUND
     * @uses self::VALUE_ORDER_STATE_INCOHERENT
     * @uses self::VALUE_ORDER_LINE_CANCELLED_ACCEPTED_CONFLICT
     * @uses self::VALUE_SELLER_NOT_FOUND
     * @uses self::VALUE_INVALID_FILE_FORMAT
     * @uses self::VALUE_FILE_ALREADY_SUBMITTED
     * @uses self::VALUE_INVALID_REQUEST
     * @uses self::VALUE_FILE_DOWNLOAD_EXCEPTION
     * @uses self::VALUE_SELLER_NOT_AUTHORIZED
     * @uses self::VALUE_ORDER_LINE_NOT_FOUND
     * @uses self::VALUE_ORDER_LINE_INCOHERENT_STATE
     * @uses self::VALUE_FUNCTION_NOT_ACTIVE
     * @uses self::VALUE_ORDER_PRICE_OR_QUANTITY_ERROR
     * @uses self::VALUE_ORDER_TRACKING_INFORMATION_ERROR
     * @uses self::VALUE_TOO_MANY_PRODUCTS_IN_PACKAGE_ERROR
     * @uses self::VALUE_QUOTA
     * @uses self::VALUE_REFUND_ERROR
     * @uses self::VALUE_DISCUSSION_CREATION_ERROR
     * @uses self::VALUE_CONFIGURATION_ERROR
     * @uses self::VALUE_ORDER_PARTIALLY_CANCELED
     * @uses self::VALUE_ORDER_LINE_UPDATE_NOT_AUTHORIZED
     * @uses self::VALUE_ORDER_UPDATE_NOT_AUTHORIZED
     * @uses self::VALUE_ASKING_FOR_RETURN_AND_REMOVAL_NOT_AUTHORIZED
     * @uses self::VALUE_ORDER_LINE_ERROR
     * @uses self::VALUE_UNAUTHORIZED_VALUE_EXCEPTION
     * @uses self::VALUE_NOT_AUTHORIZED_EXCEPTION
     * @uses self::VALUE_FULFILLMENT_API_EXCEPTION
     * @uses self::VALUE_OFFER_NOT_FOUND_EXCEPTION
     * @uses self::VALUE_OPERATION_MANAGER_SERVICE_EXCEPTION
     * @uses self::VALUE_INACTIVE_SELLER_ERROR
     * @uses self::VALUE_NO_DATA_ERROR
     * @uses self::VALUE_PRODUCT_INTEGRATION_CLOSED
     * @uses self::VALUE_PRODUCT_NOT_REFERENCED_EXCEPTION
     * @uses self::VALUE_PRODUCT_REFERENCED_WITHOUT_STOCK_EXCEPTION
     * @uses self::VALUE_PRODUCT_NUMBER_LIMIT_EXCEEDED_EXCEPTION
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return array(
            self::VALUE_UNEXPECTED_EXCEPTION,
            self::VALUE_MISSING_FIELD,
            self::VALUE_PACKAGE_NOT_FOUND,
            self::VALUE_PACKAGE_MATCHING_FILE_ERROR,
            self::VALUE_ORDER_NOT_FOUND,
            self::VALUE_ORDER_STATE_INCOHERENT,
            self::VALUE_ORDER_LINE_CANCELLED_ACCEPTED_CONFLICT,
            self::VALUE_SELLER_NOT_FOUND,
            self::VALUE_INVALID_FILE_FORMAT,
            self::VALUE_FILE_ALREADY_SUBMITTED,
            self::VALUE_INVALID_REQUEST,
            self::VALUE_FILE_DOWNLOAD_EXCEPTION,
            self::VALUE_SELLER_NOT_AUTHORIZED,
            self::VALUE_ORDER_LINE_NOT_FOUND,
            self::VALUE_ORDER_LINE_INCOHERENT_STATE,
            self::VALUE_FUNCTION_NOT_ACTIVE,
            self::VALUE_ORDER_PRICE_OR_QUANTITY_ERROR,
            self::VALUE_ORDER_TRACKING_INFORMATION_ERROR,
            self::VALUE_TOO_MANY_PRODUCTS_IN_PACKAGE_ERROR,
            self::VALUE_QUOTA,
            self::VALUE_REFUND_ERROR,
            self::VALUE_DISCUSSION_CREATION_ERROR,
            self::VALUE_CONFIGURATION_ERROR,
            self::VALUE_ORDER_PARTIALLY_CANCELED,
            self::VALUE_ORDER_LINE_UPDATE_NOT_AUTHORIZED,
            self::VALUE_ORDER_UPDATE_NOT_AUTHORIZED,
            self::VALUE_ASKING_FOR_RETURN_AND_REMOVAL_NOT_AUTHORIZED,
            self::VALUE_ORDER_LINE_ERROR,
            self::VALUE_UNAUTHORIZED_VALUE_EXCEPTION,
            self::VALUE_NOT_AUTHORIZED_EXCEPTION,
            self::VALUE_FULFILLMENT_API_EXCEPTION,
            self::VALUE_OFFER_NOT_FOUND_EXCEPTION,
            self::VALUE_OPERATION_MANAGER_SERVICE_EXCEPTION,
            self::VALUE_INACTIVE_SELLER_ERROR,
            self::VALUE_NO_DATA_ERROR,
            self::VALUE_PRODUCT_INTEGRATION_CLOSED,
            self::VALUE_PRODUCT_NOT_REFERENCED_EXCEPTION,
            self::VALUE_PRODUCT_REFERENCED_WITHOUT_STOCK_EXCEPTION,
            self::VALUE_PRODUCT_NUMBER_LIMIT_EXCEEDED_EXCEPTION,
        );
    }
}
