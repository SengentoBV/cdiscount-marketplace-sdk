<?php

namespace SengentoBV\CdiscountMarketplaceSdk\Enums;

use \WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for OrderStateEnum Enums
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:OrderStateEnum
 * @package Cdiscount
 * @subpackage Enumerations
 */
class CdiscountOrderStateEnum extends AbstractStructEnumBase
{
    /**
     * Constant for value 'CancelledByCustomer'
     * @return string 'CancelledByCustomer'
     */
    const VALUE_CANCELLED_BY_CUSTOMER = 'CancelledByCustomer';
    /**
     * Constant for value 'WaitingForSellerAcceptation'
     * @return string 'WaitingForSellerAcceptation'
     */
    const VALUE_WAITING_FOR_SELLER_ACCEPTATION = 'WaitingForSellerAcceptation';
    /**
     * Constant for value 'AcceptedBySeller'
     * @return string 'AcceptedBySeller'
     */
    const VALUE_ACCEPTED_BY_SELLER = 'AcceptedBySeller';
    /**
     * Constant for value 'PaymentInProgress'
     * @return string 'PaymentInProgress'
     */
    const VALUE_PAYMENT_IN_PROGRESS = 'PaymentInProgress';
    /**
     * Constant for value 'WaitingForShipmentAcceptation'
     * @return string 'WaitingForShipmentAcceptation'
     */
    const VALUE_WAITING_FOR_SHIPMENT_ACCEPTATION = 'WaitingForShipmentAcceptation';
    /**
     * Constant for value 'Shipped'
     * @return string 'Shipped'
     */
    const VALUE_SHIPPED = 'Shipped';
    /**
     * Constant for value 'RefusedBySeller'
     * @return string 'RefusedBySeller'
     */
    const VALUE_REFUSED_BY_SELLER = 'RefusedBySeller';
    /**
     * Constant for value 'AutomaticCancellation'
     * @return string 'AutomaticCancellation'
     */
    const VALUE_AUTOMATIC_CANCELLATION = 'AutomaticCancellation';
    /**
     * Constant for value 'PaymentRefused'
     * @return string 'PaymentRefused'
     */
    const VALUE_PAYMENT_REFUSED = 'PaymentRefused';
    /**
     * Constant for value 'ShipmentRefusedBySeller'
     * @return string 'ShipmentRefusedBySeller'
     */
    const VALUE_SHIPMENT_REFUSED_BY_SELLER = 'ShipmentRefusedBySeller';
    /**
     * Constant for value 'None'
     * @return string 'None'
     */
    const VALUE_NONE = 'None';
    /**
     * Constant for value 'ValidatedFianet'
     * @return string 'ValidatedFianet'
     */
    const VALUE_VALIDATED_FIANET = 'ValidatedFianet';
    /**
     * Constant for value 'RefusedNoShipment'
     * @return string 'RefusedNoShipment'
     */
    const VALUE_REFUSED_NO_SHIPMENT = 'RefusedNoShipment';
    /**
     * Constant for value 'AvailableOnStore'
     * @return string 'AvailableOnStore'
     */
    const VALUE_AVAILABLE_ON_STORE = 'AvailableOnStore';
    /**
     * Constant for value 'NonPickedUpByCustomer'
     * @return string 'NonPickedUpByCustomer'
     */
    const VALUE_NON_PICKED_UP_BY_CUSTOMER = 'NonPickedUpByCustomer';
    /**
     * Constant for value 'PickedUp'
     * @return string 'PickedUp'
     */
    const VALUE_PICKED_UP = 'PickedUp';
    /**
     * Constant for value 'ServiceCanceled'
     * @return string 'ServiceCanceled'
     */
    const VALUE_SERVICE_CANCELED = 'ServiceCanceled';
    /**
     * Constant for value 'PendingShipmentForAssociatedProduct'
     * @return string 'PendingShipmentForAssociatedProduct'
     */
    const VALUE_PENDING_SHIPMENT_FOR_ASSOCIATED_PRODUCT = 'PendingShipmentForAssociatedProduct';
    /**
     * Constant for value 'BlockedWaitingForTreatment'
     * @return string 'BlockedWaitingForTreatment'
     */
    const VALUE_BLOCKED_WAITING_FOR_TREATMENT = 'BlockedWaitingForTreatment';
    /**
     * Constant for value 'BlockedWaitingForProof'
     * @return string 'BlockedWaitingForProof'
     */
    const VALUE_BLOCKED_WAITING_FOR_PROOF = 'BlockedWaitingForProof';
    /**
     * Constant for value 'BlockedRepeatedLitigationSuspicion'
     * @return string 'BlockedRepeatedLitigationSuspicion'
     */
    const VALUE_BLOCKED_REPEATED_LITIGATION_SUSPICION = 'BlockedRepeatedLitigationSuspicion';
    /**
     * Constant for value 'BlockedFraudSuspicion'
     * @return string 'BlockedFraudSuspicion'
     */
    const VALUE_BLOCKED_FRAUD_SUSPICION = 'BlockedFraudSuspicion';
    /**
     * Constant for value 'BlockedConfirmed'
     * @return string 'BlockedConfirmed'
     */
    const VALUE_BLOCKED_CONFIRMED = 'BlockedConfirmed';
    /**
     * Constant for value 'FinishedGenerixUpdate'
     * @return string 'FinishedGenerixUpdate'
     */
    const VALUE_FINISHED_GENERIX_UPDATE = 'FinishedGenerixUpdate';
    /**
     * Constant for value 'BlockedRepeatedLitigationSuspicionConfirmation'
     * @return string 'BlockedRepeatedLitigationSuspicionConfirmation'
     */
    const VALUE_BLOCKED_REPEATED_LITIGATION_SUSPICION_CONFIRMATION = 'BlockedRepeatedLitigationSuspicionConfirmation';
    /**
     * Constant for value 'BlockedFraudSuspicionConfirmation'
     * @return string 'BlockedFraudSuspicionConfirmation'
     */
    const VALUE_BLOCKED_FRAUD_SUSPICION_CONFIRMATION = 'BlockedFraudSuspicionConfirmation';
    /**
     * Constant for value 'CegidDown'
     * @return string 'CegidDown'
     */
    const VALUE_CEGID_DOWN = 'CegidDown';
    /**
     * Constant for value 'BlockedAutomaticCds'
     * @return string 'BlockedAutomaticCds'
     */
    const VALUE_BLOCKED_AUTOMATIC_CDS = 'BlockedAutomaticCds';
    /**
     * Constant for value 'BeingCancelled'
     * @return string 'BeingCancelled'
     */
    const VALUE_BEING_CANCELLED = 'BeingCancelled';
    /**
     * Constant for value 'BeingModified'
     * @return string 'BeingModified'
     */
    const VALUE_BEING_MODIFIED = 'BeingModified';
    /**
     * Constant for value 'RequestGoingToGnx'
     * @return string 'RequestGoingToGnx'
     */
    const VALUE_REQUEST_GOING_TO_GNX = 'RequestGoingToGnx';
    /**
     * Constant for value 'PartialInGnx'
     * @return string 'PartialInGnx'
     */
    const VALUE_PARTIAL_IN_GNX = 'PartialInGnx';
    /**
     * Constant for value 'BeingValidatedFianet'
     * @return string 'BeingValidatedFianet'
     */
    const VALUE_BEING_VALIDATED_FIANET = 'BeingValidatedFianet';
    /**
     * Constant for value 'BlockedMarketplaceService'
     * @return string 'BlockedMarketplaceService'
     */
    const VALUE_BLOCKED_MARKETPLACE_SERVICE = 'BlockedMarketplaceService';
    /**
     * Return allowed values
     * @uses self::VALUE_CANCELLED_BY_CUSTOMER
     * @uses self::VALUE_WAITING_FOR_SELLER_ACCEPTATION
     * @uses self::VALUE_ACCEPTED_BY_SELLER
     * @uses self::VALUE_PAYMENT_IN_PROGRESS
     * @uses self::VALUE_WAITING_FOR_SHIPMENT_ACCEPTATION
     * @uses self::VALUE_SHIPPED
     * @uses self::VALUE_REFUSED_BY_SELLER
     * @uses self::VALUE_AUTOMATIC_CANCELLATION
     * @uses self::VALUE_PAYMENT_REFUSED
     * @uses self::VALUE_SHIPMENT_REFUSED_BY_SELLER
     * @uses self::VALUE_NONE
     * @uses self::VALUE_VALIDATED_FIANET
     * @uses self::VALUE_REFUSED_NO_SHIPMENT
     * @uses self::VALUE_AVAILABLE_ON_STORE
     * @uses self::VALUE_NON_PICKED_UP_BY_CUSTOMER
     * @uses self::VALUE_PICKED_UP
     * @uses self::VALUE_SERVICE_CANCELED
     * @uses self::VALUE_PENDING_SHIPMENT_FOR_ASSOCIATED_PRODUCT
     * @uses self::VALUE_BLOCKED_WAITING_FOR_TREATMENT
     * @uses self::VALUE_BLOCKED_WAITING_FOR_PROOF
     * @uses self::VALUE_BLOCKED_REPEATED_LITIGATION_SUSPICION
     * @uses self::VALUE_BLOCKED_FRAUD_SUSPICION
     * @uses self::VALUE_BLOCKED_CONFIRMED
     * @uses self::VALUE_FINISHED_GENERIX_UPDATE
     * @uses self::VALUE_BLOCKED_REPEATED_LITIGATION_SUSPICION_CONFIRMATION
     * @uses self::VALUE_BLOCKED_FRAUD_SUSPICION_CONFIRMATION
     * @uses self::VALUE_CEGID_DOWN
     * @uses self::VALUE_BLOCKED_AUTOMATIC_CDS
     * @uses self::VALUE_BEING_CANCELLED
     * @uses self::VALUE_BEING_MODIFIED
     * @uses self::VALUE_REQUEST_GOING_TO_GNX
     * @uses self::VALUE_PARTIAL_IN_GNX
     * @uses self::VALUE_BEING_VALIDATED_FIANET
     * @uses self::VALUE_BLOCKED_MARKETPLACE_SERVICE
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return array(
            self::VALUE_CANCELLED_BY_CUSTOMER,
            self::VALUE_WAITING_FOR_SELLER_ACCEPTATION,
            self::VALUE_ACCEPTED_BY_SELLER,
            self::VALUE_PAYMENT_IN_PROGRESS,
            self::VALUE_WAITING_FOR_SHIPMENT_ACCEPTATION,
            self::VALUE_SHIPPED,
            self::VALUE_REFUSED_BY_SELLER,
            self::VALUE_AUTOMATIC_CANCELLATION,
            self::VALUE_PAYMENT_REFUSED,
            self::VALUE_SHIPMENT_REFUSED_BY_SELLER,
            self::VALUE_NONE,
            self::VALUE_VALIDATED_FIANET,
            self::VALUE_REFUSED_NO_SHIPMENT,
            self::VALUE_AVAILABLE_ON_STORE,
            self::VALUE_NON_PICKED_UP_BY_CUSTOMER,
            self::VALUE_PICKED_UP,
            self::VALUE_SERVICE_CANCELED,
            self::VALUE_PENDING_SHIPMENT_FOR_ASSOCIATED_PRODUCT,
            self::VALUE_BLOCKED_WAITING_FOR_TREATMENT,
            self::VALUE_BLOCKED_WAITING_FOR_PROOF,
            self::VALUE_BLOCKED_REPEATED_LITIGATION_SUSPICION,
            self::VALUE_BLOCKED_FRAUD_SUSPICION,
            self::VALUE_BLOCKED_CONFIRMED,
            self::VALUE_FINISHED_GENERIX_UPDATE,
            self::VALUE_BLOCKED_REPEATED_LITIGATION_SUSPICION_CONFIRMATION,
            self::VALUE_BLOCKED_FRAUD_SUSPICION_CONFIRMATION,
            self::VALUE_CEGID_DOWN,
            self::VALUE_BLOCKED_AUTOMATIC_CDS,
            self::VALUE_BEING_CANCELLED,
            self::VALUE_BEING_MODIFIED,
            self::VALUE_REQUEST_GOING_TO_GNX,
            self::VALUE_PARTIAL_IN_GNX,
            self::VALUE_BEING_VALIDATED_FIANET,
            self::VALUE_BLOCKED_MARKETPLACE_SERVICE,
        );
    }
}
