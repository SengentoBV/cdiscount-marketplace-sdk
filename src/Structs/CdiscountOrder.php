<?php

namespace SengentoBV\CdiscountMarketplaceSdk\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Order Structs
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:Order
 * @package Cdiscount
 * @subpackage Structs
 */
class CdiscountOrder extends AbstractStructBase
{
    /**
     * The ArchiveParcelList
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $ArchiveParcelList;
    /**
     * The BillingAddress
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountAddress
     */
    public $BillingAddress;
    /**
     * The Corporation
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountCorporation
     */
    public $Corporation;
    /**
     * The CreationDate
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $CreationDate;
    /**
     * The Customer
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountCustomer
     */
    public $Customer;
    /**
     * The HasClaims
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $HasClaims;
    /**
     * The InitialTotalAmount
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var float
     */
    public $InitialTotalAmount;
    /**
     * The InitialTotalShippingChargesAmount
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var float
     */
    public $InitialTotalShippingChargesAmount;
    /**
     * The IsCLogistiqueOrder
     * @var bool
     */
    public $IsCLogistiqueOrder;
    /**
     * The IsEligibileSubstitution
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $IsEligibileSubstitution;
    /**
     * The LastUpdatedDate
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $LastUpdatedDate;
    /**
     * The ModGesLog
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $ModGesLog;
    /**
     * The ModifiedDate
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $ModifiedDate;
    /**
     * The Offer
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountOfferOrder
     */
    public $Offer;
    /**
     * The OrderLineList
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfOrderLine
     */
    public $OrderLineList;
    /**
     * The OrderNumber
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $OrderNumber;
    /**
     * The OrderState
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $OrderState;
    /**
     * The ParcelList
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfParcel
     */
    public $ParcelList;
    /**
     * The PartnerOrderRef
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $PartnerOrderRef;
    /**
     * The ShippedTotalAmount
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var float
     */
    public $ShippedTotalAmount;
    /**
     * The ShippedTotalShippingCharges
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var float
     */
    public $ShippedTotalShippingCharges;
    /**
     * The ShippingAddress
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountAddress
     */
    public $ShippingAddress;
    /**
     * The ShippingCode
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $ShippingCode;
    /**
     * The ShippingDateMax
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $ShippingDateMax;
    /**
     * The ShippingDateMin
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $ShippingDateMin;
    /**
     * The SiteCommissionPromisedAmount
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var float
     */
    public $SiteCommissionPromisedAmount;
    /**
     * The SiteCommissionShippedAmount
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var float
     */
    public $SiteCommissionShippedAmount;
    /**
     * The SiteCommissionValidatedAmount
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var float
     */
    public $SiteCommissionValidatedAmount;
    /**
     * The Status
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $Status;
    /**
     * The ValidatedTotalAmount
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var float
     */
    public $ValidatedTotalAmount;
    /**
     * The ValidatedTotalShippingCharges
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var float
     */
    public $ValidatedTotalShippingCharges;
    /**
     * The ValidationStatus
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $ValidationStatus;
    /**
     * The VisaCegid
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var int
     */
    public $VisaCegid;
    /**
     * The VoucherList
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfVoucher
     */
    public $VoucherList;
    /**
     * Constructor method for Order
     * @uses CdiscountOrder::setArchiveParcelList()
     * @uses CdiscountOrder::setBillingAddress()
     * @uses CdiscountOrder::setCorporation()
     * @uses CdiscountOrder::setCreationDate()
     * @uses CdiscountOrder::setCustomer()
     * @uses CdiscountOrder::setHasClaims()
     * @uses CdiscountOrder::setInitialTotalAmount()
     * @uses CdiscountOrder::setInitialTotalShippingChargesAmount()
     * @uses CdiscountOrder::setIsCLogistiqueOrder()
     * @uses CdiscountOrder::setIsEligibileSubstitution()
     * @uses CdiscountOrder::setLastUpdatedDate()
     * @uses CdiscountOrder::setModGesLog()
     * @uses CdiscountOrder::setModifiedDate()
     * @uses CdiscountOrder::setOffer()
     * @uses CdiscountOrder::setOrderLineList()
     * @uses CdiscountOrder::setOrderNumber()
     * @uses CdiscountOrder::setOrderState()
     * @uses CdiscountOrder::setParcelList()
     * @uses CdiscountOrder::setPartnerOrderRef()
     * @uses CdiscountOrder::setShippedTotalAmount()
     * @uses CdiscountOrder::setShippedTotalShippingCharges()
     * @uses CdiscountOrder::setShippingAddress()
     * @uses CdiscountOrder::setShippingCode()
     * @uses CdiscountOrder::setShippingDateMax()
     * @uses CdiscountOrder::setShippingDateMin()
     * @uses CdiscountOrder::setSiteCommissionPromisedAmount()
     * @uses CdiscountOrder::setSiteCommissionShippedAmount()
     * @uses CdiscountOrder::setSiteCommissionValidatedAmount()
     * @uses CdiscountOrder::setStatus()
     * @uses CdiscountOrder::setValidatedTotalAmount()
     * @uses CdiscountOrder::setValidatedTotalShippingCharges()
     * @uses CdiscountOrder::setValidationStatus()
     * @uses CdiscountOrder::setVisaCegid()
     * @uses CdiscountOrder::setVoucherList()
     * @param bool $archiveParcelList
     * @param \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountAddress $billingAddress
     * @param \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountCorporation $corporation
     * @param string $creationDate
     * @param \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountCustomer $customer
     * @param bool $hasClaims
     * @param float $initialTotalAmount
     * @param float $initialTotalShippingChargesAmount
     * @param bool $isCLogistiqueOrder
     * @param bool $isEligibileSubstitution
     * @param string $lastUpdatedDate
     * @param string $modGesLog
     * @param string $modifiedDate
     * @param \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountOfferOrder $offer
     * @param \SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfOrderLine $orderLineList
     * @param string $orderNumber
     * @param string $orderState
     * @param \SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfParcel $parcelList
     * @param string $partnerOrderRef
     * @param float $shippedTotalAmount
     * @param float $shippedTotalShippingCharges
     * @param \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountAddress $shippingAddress
     * @param string $shippingCode
     * @param string $shippingDateMax
     * @param string $shippingDateMin
     * @param float $siteCommissionPromisedAmount
     * @param float $siteCommissionShippedAmount
     * @param float $siteCommissionValidatedAmount
     * @param string $status
     * @param float $validatedTotalAmount
     * @param float $validatedTotalShippingCharges
     * @param string $validationStatus
     * @param int $visaCegid
     * @param \SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfVoucher $voucherList
     */
    public function __construct($archiveParcelList = null, \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountAddress $billingAddress = null, \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountCorporation $corporation = null, $creationDate = null, \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountCustomer $customer = null, $hasClaims = null, $initialTotalAmount = null, $initialTotalShippingChargesAmount = null, $isCLogistiqueOrder = null, $isEligibileSubstitution = null, $lastUpdatedDate = null, $modGesLog = null, $modifiedDate = null, \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountOfferOrder $offer = null, \SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfOrderLine $orderLineList = null, $orderNumber = null, $orderState = null, \SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfParcel $parcelList = null, $partnerOrderRef = null, $shippedTotalAmount = null, $shippedTotalShippingCharges = null, \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountAddress $shippingAddress = null, $shippingCode = null, $shippingDateMax = null, $shippingDateMin = null, $siteCommissionPromisedAmount = null, $siteCommissionShippedAmount = null, $siteCommissionValidatedAmount = null, $status = null, $validatedTotalAmount = null, $validatedTotalShippingCharges = null, $validationStatus = null, $visaCegid = null, \SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfVoucher $voucherList = null)
    {
        $this
            ->setArchiveParcelList($archiveParcelList)
            ->setBillingAddress($billingAddress)
            ->setCorporation($corporation)
            ->setCreationDate($creationDate)
            ->setCustomer($customer)
            ->setHasClaims($hasClaims)
            ->setInitialTotalAmount($initialTotalAmount)
            ->setInitialTotalShippingChargesAmount($initialTotalShippingChargesAmount)
            ->setIsCLogistiqueOrder($isCLogistiqueOrder)
            ->setIsEligibileSubstitution($isEligibileSubstitution)
            ->setLastUpdatedDate($lastUpdatedDate)
            ->setModGesLog($modGesLog)
            ->setModifiedDate($modifiedDate)
            ->setOffer($offer)
            ->setOrderLineList($orderLineList)
            ->setOrderNumber($orderNumber)
            ->setOrderState($orderState)
            ->setParcelList($parcelList)
            ->setPartnerOrderRef($partnerOrderRef)
            ->setShippedTotalAmount($shippedTotalAmount)
            ->setShippedTotalShippingCharges($shippedTotalShippingCharges)
            ->setShippingAddress($shippingAddress)
            ->setShippingCode($shippingCode)
            ->setShippingDateMax($shippingDateMax)
            ->setShippingDateMin($shippingDateMin)
            ->setSiteCommissionPromisedAmount($siteCommissionPromisedAmount)
            ->setSiteCommissionShippedAmount($siteCommissionShippedAmount)
            ->setSiteCommissionValidatedAmount($siteCommissionValidatedAmount)
            ->setStatus($status)
            ->setValidatedTotalAmount($validatedTotalAmount)
            ->setValidatedTotalShippingCharges($validatedTotalShippingCharges)
            ->setValidationStatus($validationStatus)
            ->setVisaCegid($visaCegid)
            ->setVoucherList($voucherList);
    }
    /**
     * Get ArchiveParcelList value
     * @return bool|null
     */
    public function getArchiveParcelList()
    {
        return $this->ArchiveParcelList;
    }
    /**
     * Set ArchiveParcelList value
     * @param bool $archiveParcelList
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountOrder
     */
    public function setArchiveParcelList($archiveParcelList = null)
    {
        // validation for constraint: boolean
        if (!is_null($archiveParcelList) && !is_bool($archiveParcelList)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($archiveParcelList, true), gettype($archiveParcelList)), __LINE__);
        }
        $this->ArchiveParcelList = $archiveParcelList;
        return $this;
    }
    /**
     * Get BillingAddress value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountAddress|null
     */
    public function getBillingAddress()
    {
        return isset($this->BillingAddress) ? $this->BillingAddress : null;
    }
    /**
     * Set BillingAddress value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountAddress $billingAddress
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountOrder
     */
    public function setBillingAddress(\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountAddress $billingAddress = null)
    {
        if (is_null($billingAddress) || (is_array($billingAddress) && empty($billingAddress))) {
            unset($this->BillingAddress);
        } else {
            $this->BillingAddress = $billingAddress;
        }
        return $this;
    }
    /**
     * Get Corporation value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountCorporation|null
     */
    public function getCorporation()
    {
        return isset($this->Corporation) ? $this->Corporation : null;
    }
    /**
     * Set Corporation value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountCorporation $corporation
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountOrder
     */
    public function setCorporation(\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountCorporation $corporation = null)
    {
        if (is_null($corporation) || (is_array($corporation) && empty($corporation))) {
            unset($this->Corporation);
        } else {
            $this->Corporation = $corporation;
        }
        return $this;
    }
    /**
     * Get CreationDate value
     * @return string|null
     */
    public function getCreationDate()
    {
        return $this->CreationDate;
    }
    /**
     * Set CreationDate value
     * @param string $creationDate
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountOrder
     */
    public function setCreationDate($creationDate = null)
    {
        // validation for constraint: string
        if (!is_null($creationDate) && !is_string($creationDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($creationDate, true), gettype($creationDate)), __LINE__);
        }
        $this->CreationDate = $creationDate;
        return $this;
    }
    /**
     * Get Customer value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountCustomer|null
     */
    public function getCustomer()
    {
        return isset($this->Customer) ? $this->Customer : null;
    }
    /**
     * Set Customer value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountCustomer $customer
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountOrder
     */
    public function setCustomer(\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountCustomer $customer = null)
    {
        if (is_null($customer) || (is_array($customer) && empty($customer))) {
            unset($this->Customer);
        } else {
            $this->Customer = $customer;
        }
        return $this;
    }
    /**
     * Get HasClaims value
     * @return bool|null
     */
    public function getHasClaims()
    {
        return $this->HasClaims;
    }
    /**
     * Set HasClaims value
     * @param bool $hasClaims
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountOrder
     */
    public function setHasClaims($hasClaims = null)
    {
        // validation for constraint: boolean
        if (!is_null($hasClaims) && !is_bool($hasClaims)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($hasClaims, true), gettype($hasClaims)), __LINE__);
        }
        $this->HasClaims = $hasClaims;
        return $this;
    }
    /**
     * Get InitialTotalAmount value
     * @return float|null
     */
    public function getInitialTotalAmount()
    {
        return $this->InitialTotalAmount;
    }
    /**
     * Set InitialTotalAmount value
     * @param float $initialTotalAmount
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountOrder
     */
    public function setInitialTotalAmount($initialTotalAmount = null)
    {
        // validation for constraint: float
        if (!is_null($initialTotalAmount) && !(is_float($initialTotalAmount) || is_numeric($initialTotalAmount))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($initialTotalAmount, true), gettype($initialTotalAmount)), __LINE__);
        }
        $this->InitialTotalAmount = $initialTotalAmount;
        return $this;
    }
    /**
     * Get InitialTotalShippingChargesAmount value
     * @return float|null
     */
    public function getInitialTotalShippingChargesAmount()
    {
        return $this->InitialTotalShippingChargesAmount;
    }
    /**
     * Set InitialTotalShippingChargesAmount value
     * @param float $initialTotalShippingChargesAmount
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountOrder
     */
    public function setInitialTotalShippingChargesAmount($initialTotalShippingChargesAmount = null)
    {
        // validation for constraint: float
        if (!is_null($initialTotalShippingChargesAmount) && !(is_float($initialTotalShippingChargesAmount) || is_numeric($initialTotalShippingChargesAmount))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($initialTotalShippingChargesAmount, true), gettype($initialTotalShippingChargesAmount)), __LINE__);
        }
        $this->InitialTotalShippingChargesAmount = $initialTotalShippingChargesAmount;
        return $this;
    }
    /**
     * Get IsCLogistiqueOrder value
     * @return bool|null
     */
    public function getIsCLogistiqueOrder()
    {
        return $this->IsCLogistiqueOrder;
    }
    /**
     * Set IsCLogistiqueOrder value
     * @param bool $isCLogistiqueOrder
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountOrder
     */
    public function setIsCLogistiqueOrder($isCLogistiqueOrder = null)
    {
        // validation for constraint: boolean
        if (!is_null($isCLogistiqueOrder) && !is_bool($isCLogistiqueOrder)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isCLogistiqueOrder, true), gettype($isCLogistiqueOrder)), __LINE__);
        }
        $this->IsCLogistiqueOrder = $isCLogistiqueOrder;
        return $this;
    }
    /**
     * Get IsEligibileSubstitution value
     * @return bool|null
     */
    public function getIsEligibileSubstitution()
    {
        return $this->IsEligibileSubstitution;
    }
    /**
     * Set IsEligibileSubstitution value
     * @param bool $isEligibileSubstitution
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountOrder
     */
    public function setIsEligibileSubstitution($isEligibileSubstitution = null)
    {
        // validation for constraint: boolean
        if (!is_null($isEligibileSubstitution) && !is_bool($isEligibileSubstitution)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isEligibileSubstitution, true), gettype($isEligibileSubstitution)), __LINE__);
        }
        $this->IsEligibileSubstitution = $isEligibileSubstitution;
        return $this;
    }
    /**
     * Get LastUpdatedDate value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getLastUpdatedDate()
    {
        return isset($this->LastUpdatedDate) ? $this->LastUpdatedDate : null;
    }
    /**
     * Set LastUpdatedDate value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $lastUpdatedDate
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountOrder
     */
    public function setLastUpdatedDate($lastUpdatedDate = null)
    {
        // validation for constraint: string
        if (!is_null($lastUpdatedDate) && !is_string($lastUpdatedDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($lastUpdatedDate, true), gettype($lastUpdatedDate)), __LINE__);
        }
        if (is_null($lastUpdatedDate) || (is_array($lastUpdatedDate) && empty($lastUpdatedDate))) {
            unset($this->LastUpdatedDate);
        } else {
            $this->LastUpdatedDate = $lastUpdatedDate;
        }
        return $this;
    }
    /**
     * Get ModGesLog value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getModGesLog()
    {
        return isset($this->ModGesLog) ? $this->ModGesLog : null;
    }
    /**
     * Set ModGesLog value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $modGesLog
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountOrder
     */
    public function setModGesLog($modGesLog = null)
    {
        // validation for constraint: string
        if (!is_null($modGesLog) && !is_string($modGesLog)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($modGesLog, true), gettype($modGesLog)), __LINE__);
        }
        if (is_null($modGesLog) || (is_array($modGesLog) && empty($modGesLog))) {
            unset($this->ModGesLog);
        } else {
            $this->ModGesLog = $modGesLog;
        }
        return $this;
    }
    /**
     * Get ModifiedDate value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getModifiedDate()
    {
        return isset($this->ModifiedDate) ? $this->ModifiedDate : null;
    }
    /**
     * Set ModifiedDate value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $modifiedDate
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountOrder
     */
    public function setModifiedDate($modifiedDate = null)
    {
        // validation for constraint: string
        if (!is_null($modifiedDate) && !is_string($modifiedDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($modifiedDate, true), gettype($modifiedDate)), __LINE__);
        }
        if (is_null($modifiedDate) || (is_array($modifiedDate) && empty($modifiedDate))) {
            unset($this->ModifiedDate);
        } else {
            $this->ModifiedDate = $modifiedDate;
        }
        return $this;
    }
    /**
     * Get Offer value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountOfferOrder|null
     */
    public function getOffer()
    {
        return isset($this->Offer) ? $this->Offer : null;
    }
    /**
     * Set Offer value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountOfferOrder $offer
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountOrder
     */
    public function setOffer(\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountOfferOrder $offer = null)
    {
        if (is_null($offer) || (is_array($offer) && empty($offer))) {
            unset($this->Offer);
        } else {
            $this->Offer = $offer;
        }
        return $this;
    }
    /**
     * Get OrderLineList value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfOrderLine|null
     */
    public function getOrderLineList()
    {
        return isset($this->OrderLineList) ? $this->OrderLineList : null;
    }
    /**
     * Set OrderLineList value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfOrderLine $orderLineList
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountOrder
     */
    public function setOrderLineList(\SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfOrderLine $orderLineList = null)
    {
        if (is_null($orderLineList) || (is_array($orderLineList) && empty($orderLineList))) {
            unset($this->OrderLineList);
        } else {
            $this->OrderLineList = $orderLineList;
        }
        return $this;
    }
    /**
     * Get OrderNumber value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getOrderNumber()
    {
        return isset($this->OrderNumber) ? $this->OrderNumber : null;
    }
    /**
     * Set OrderNumber value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $orderNumber
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountOrder
     */
    public function setOrderNumber($orderNumber = null)
    {
        // validation for constraint: string
        if (!is_null($orderNumber) && !is_string($orderNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($orderNumber, true), gettype($orderNumber)), __LINE__);
        }
        if (is_null($orderNumber) || (is_array($orderNumber) && empty($orderNumber))) {
            unset($this->OrderNumber);
        } else {
            $this->OrderNumber = $orderNumber;
        }
        return $this;
    }
    /**
     * Get OrderState value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getOrderState()
    {
        return isset($this->OrderState) ? $this->OrderState : null;
    }
    /**
     * Set OrderState value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @uses \SengentoBV\CdiscountMarketplaceSdk\Enums\CdiscountOrderStateEnum::valueIsValid()
     * @uses \SengentoBV\CdiscountMarketplaceSdk\Enums\CdiscountOrderStateEnum::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $orderState
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountOrder
     */
    public function setOrderState($orderState = null)
    {
        // validation for constraint: enumeration
        if (!\SengentoBV\CdiscountMarketplaceSdk\Enums\CdiscountOrderStateEnum::valueIsValid($orderState)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \SengentoBV\CdiscountMarketplaceSdk\Enums\CdiscountOrderStateEnum', is_array($orderState) ? implode(', ', $orderState) : var_export($orderState, true), implode(', ', \SengentoBV\CdiscountMarketplaceSdk\Enums\CdiscountOrderStateEnum::getValidValues())), __LINE__);
        }
        if (is_null($orderState) || (is_array($orderState) && empty($orderState))) {
            unset($this->OrderState);
        } else {
            $this->OrderState = $orderState;
        }
        return $this;
    }
    /**
     * Get ParcelList value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfParcel|null
     */
    public function getParcelList()
    {
        return isset($this->ParcelList) ? $this->ParcelList : null;
    }
    /**
     * Set ParcelList value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfParcel $parcelList
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountOrder
     */
    public function setParcelList(\SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfParcel $parcelList = null)
    {
        if (is_null($parcelList) || (is_array($parcelList) && empty($parcelList))) {
            unset($this->ParcelList);
        } else {
            $this->ParcelList = $parcelList;
        }
        return $this;
    }
    /**
     * Get PartnerOrderRef value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getPartnerOrderRef()
    {
        return isset($this->PartnerOrderRef) ? $this->PartnerOrderRef : null;
    }
    /**
     * Set PartnerOrderRef value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $partnerOrderRef
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountOrder
     */
    public function setPartnerOrderRef($partnerOrderRef = null)
    {
        // validation for constraint: string
        if (!is_null($partnerOrderRef) && !is_string($partnerOrderRef)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($partnerOrderRef, true), gettype($partnerOrderRef)), __LINE__);
        }
        if (is_null($partnerOrderRef) || (is_array($partnerOrderRef) && empty($partnerOrderRef))) {
            unset($this->PartnerOrderRef);
        } else {
            $this->PartnerOrderRef = $partnerOrderRef;
        }
        return $this;
    }
    /**
     * Get ShippedTotalAmount value
     * @return float|null
     */
    public function getShippedTotalAmount()
    {
        return $this->ShippedTotalAmount;
    }
    /**
     * Set ShippedTotalAmount value
     * @param float $shippedTotalAmount
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountOrder
     */
    public function setShippedTotalAmount($shippedTotalAmount = null)
    {
        // validation for constraint: float
        if (!is_null($shippedTotalAmount) && !(is_float($shippedTotalAmount) || is_numeric($shippedTotalAmount))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($shippedTotalAmount, true), gettype($shippedTotalAmount)), __LINE__);
        }
        $this->ShippedTotalAmount = $shippedTotalAmount;
        return $this;
    }
    /**
     * Get ShippedTotalShippingCharges value
     * @return float|null
     */
    public function getShippedTotalShippingCharges()
    {
        return $this->ShippedTotalShippingCharges;
    }
    /**
     * Set ShippedTotalShippingCharges value
     * @param float $shippedTotalShippingCharges
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountOrder
     */
    public function setShippedTotalShippingCharges($shippedTotalShippingCharges = null)
    {
        // validation for constraint: float
        if (!is_null($shippedTotalShippingCharges) && !(is_float($shippedTotalShippingCharges) || is_numeric($shippedTotalShippingCharges))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($shippedTotalShippingCharges, true), gettype($shippedTotalShippingCharges)), __LINE__);
        }
        $this->ShippedTotalShippingCharges = $shippedTotalShippingCharges;
        return $this;
    }
    /**
     * Get ShippingAddress value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountAddress|null
     */
    public function getShippingAddress()
    {
        return isset($this->ShippingAddress) ? $this->ShippingAddress : null;
    }
    /**
     * Set ShippingAddress value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountAddress $shippingAddress
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountOrder
     */
    public function setShippingAddress(\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountAddress $shippingAddress = null)
    {
        if (is_null($shippingAddress) || (is_array($shippingAddress) && empty($shippingAddress))) {
            unset($this->ShippingAddress);
        } else {
            $this->ShippingAddress = $shippingAddress;
        }
        return $this;
    }
    /**
     * Get ShippingCode value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getShippingCode()
    {
        return isset($this->ShippingCode) ? $this->ShippingCode : null;
    }
    /**
     * Set ShippingCode value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $shippingCode
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountOrder
     */
    public function setShippingCode($shippingCode = null)
    {
        // validation for constraint: string
        if (!is_null($shippingCode) && !is_string($shippingCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($shippingCode, true), gettype($shippingCode)), __LINE__);
        }
        if (is_null($shippingCode) || (is_array($shippingCode) && empty($shippingCode))) {
            unset($this->ShippingCode);
        } else {
            $this->ShippingCode = $shippingCode;
        }
        return $this;
    }
    /**
     * Get ShippingDateMax value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getShippingDateMax()
    {
        return isset($this->ShippingDateMax) ? $this->ShippingDateMax : null;
    }
    /**
     * Set ShippingDateMax value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $shippingDateMax
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountOrder
     */
    public function setShippingDateMax($shippingDateMax = null)
    {
        // validation for constraint: string
        if (!is_null($shippingDateMax) && !is_string($shippingDateMax)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($shippingDateMax, true), gettype($shippingDateMax)), __LINE__);
        }
        if (is_null($shippingDateMax) || (is_array($shippingDateMax) && empty($shippingDateMax))) {
            unset($this->ShippingDateMax);
        } else {
            $this->ShippingDateMax = $shippingDateMax;
        }
        return $this;
    }
    /**
     * Get ShippingDateMin value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getShippingDateMin()
    {
        return isset($this->ShippingDateMin) ? $this->ShippingDateMin : null;
    }
    /**
     * Set ShippingDateMin value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $shippingDateMin
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountOrder
     */
    public function setShippingDateMin($shippingDateMin = null)
    {
        // validation for constraint: string
        if (!is_null($shippingDateMin) && !is_string($shippingDateMin)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($shippingDateMin, true), gettype($shippingDateMin)), __LINE__);
        }
        if (is_null($shippingDateMin) || (is_array($shippingDateMin) && empty($shippingDateMin))) {
            unset($this->ShippingDateMin);
        } else {
            $this->ShippingDateMin = $shippingDateMin;
        }
        return $this;
    }
    /**
     * Get SiteCommissionPromisedAmount value
     * @return float|null
     */
    public function getSiteCommissionPromisedAmount()
    {
        return $this->SiteCommissionPromisedAmount;
    }
    /**
     * Set SiteCommissionPromisedAmount value
     * @param float $siteCommissionPromisedAmount
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountOrder
     */
    public function setSiteCommissionPromisedAmount($siteCommissionPromisedAmount = null)
    {
        // validation for constraint: float
        if (!is_null($siteCommissionPromisedAmount) && !(is_float($siteCommissionPromisedAmount) || is_numeric($siteCommissionPromisedAmount))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($siteCommissionPromisedAmount, true), gettype($siteCommissionPromisedAmount)), __LINE__);
        }
        $this->SiteCommissionPromisedAmount = $siteCommissionPromisedAmount;
        return $this;
    }
    /**
     * Get SiteCommissionShippedAmount value
     * @return float|null
     */
    public function getSiteCommissionShippedAmount()
    {
        return $this->SiteCommissionShippedAmount;
    }
    /**
     * Set SiteCommissionShippedAmount value
     * @param float $siteCommissionShippedAmount
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountOrder
     */
    public function setSiteCommissionShippedAmount($siteCommissionShippedAmount = null)
    {
        // validation for constraint: float
        if (!is_null($siteCommissionShippedAmount) && !(is_float($siteCommissionShippedAmount) || is_numeric($siteCommissionShippedAmount))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($siteCommissionShippedAmount, true), gettype($siteCommissionShippedAmount)), __LINE__);
        }
        $this->SiteCommissionShippedAmount = $siteCommissionShippedAmount;
        return $this;
    }
    /**
     * Get SiteCommissionValidatedAmount value
     * @return float|null
     */
    public function getSiteCommissionValidatedAmount()
    {
        return $this->SiteCommissionValidatedAmount;
    }
    /**
     * Set SiteCommissionValidatedAmount value
     * @param float $siteCommissionValidatedAmount
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountOrder
     */
    public function setSiteCommissionValidatedAmount($siteCommissionValidatedAmount = null)
    {
        // validation for constraint: float
        if (!is_null($siteCommissionValidatedAmount) && !(is_float($siteCommissionValidatedAmount) || is_numeric($siteCommissionValidatedAmount))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($siteCommissionValidatedAmount, true), gettype($siteCommissionValidatedAmount)), __LINE__);
        }
        $this->SiteCommissionValidatedAmount = $siteCommissionValidatedAmount;
        return $this;
    }
    /**
     * Get Status value
     * @return string|null
     */
    public function getStatus()
    {
        return $this->Status;
    }
    /**
     * Set Status value
     * @uses \SengentoBV\CdiscountMarketplaceSdk\Enums\CdiscountOrderStatusType::valueIsValid()
     * @uses \SengentoBV\CdiscountMarketplaceSdk\Enums\CdiscountOrderStatusType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $status
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountOrder
     */
    public function setStatus($status = null)
    {
        // validation for constraint: enumeration
        if (!\SengentoBV\CdiscountMarketplaceSdk\Enums\CdiscountOrderStatusType::valueIsValid($status)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \SengentoBV\CdiscountMarketplaceSdk\Enums\CdiscountOrderStatusType', is_array($status) ? implode(', ', $status) : var_export($status, true), implode(', ', \SengentoBV\CdiscountMarketplaceSdk\Enums\CdiscountOrderStatusType::getValidValues())), __LINE__);
        }
        $this->Status = $status;
        return $this;
    }
    /**
     * Get ValidatedTotalAmount value
     * @return float|null
     */
    public function getValidatedTotalAmount()
    {
        return $this->ValidatedTotalAmount;
    }
    /**
     * Set ValidatedTotalAmount value
     * @param float $validatedTotalAmount
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountOrder
     */
    public function setValidatedTotalAmount($validatedTotalAmount = null)
    {
        // validation for constraint: float
        if (!is_null($validatedTotalAmount) && !(is_float($validatedTotalAmount) || is_numeric($validatedTotalAmount))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($validatedTotalAmount, true), gettype($validatedTotalAmount)), __LINE__);
        }
        $this->ValidatedTotalAmount = $validatedTotalAmount;
        return $this;
    }
    /**
     * Get ValidatedTotalShippingCharges value
     * @return float|null
     */
    public function getValidatedTotalShippingCharges()
    {
        return $this->ValidatedTotalShippingCharges;
    }
    /**
     * Set ValidatedTotalShippingCharges value
     * @param float $validatedTotalShippingCharges
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountOrder
     */
    public function setValidatedTotalShippingCharges($validatedTotalShippingCharges = null)
    {
        // validation for constraint: float
        if (!is_null($validatedTotalShippingCharges) && !(is_float($validatedTotalShippingCharges) || is_numeric($validatedTotalShippingCharges))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($validatedTotalShippingCharges, true), gettype($validatedTotalShippingCharges)), __LINE__);
        }
        $this->ValidatedTotalShippingCharges = $validatedTotalShippingCharges;
        return $this;
    }
    /**
     * Get ValidationStatus value
     * @return string|null
     */
    public function getValidationStatus()
    {
        return $this->ValidationStatus;
    }
    /**
     * Set ValidationStatus value
     * @uses \SengentoBV\CdiscountMarketplaceSdk\Enums\CdiscountValidationStatusType::valueIsValid()
     * @uses \SengentoBV\CdiscountMarketplaceSdk\Enums\CdiscountValidationStatusType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $validationStatus
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountOrder
     */
    public function setValidationStatus($validationStatus = null)
    {
        // validation for constraint: enumeration
        if (!\SengentoBV\CdiscountMarketplaceSdk\Enums\CdiscountValidationStatusType::valueIsValid($validationStatus)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \SengentoBV\CdiscountMarketplaceSdk\Enums\CdiscountValidationStatusType', is_array($validationStatus) ? implode(', ', $validationStatus) : var_export($validationStatus, true), implode(', ', \SengentoBV\CdiscountMarketplaceSdk\Enums\CdiscountValidationStatusType::getValidValues())), __LINE__);
        }
        $this->ValidationStatus = $validationStatus;
        return $this;
    }
    /**
     * Get VisaCegid value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return int|null
     */
    public function getVisaCegid()
    {
        return isset($this->VisaCegid) ? $this->VisaCegid : null;
    }
    /**
     * Set VisaCegid value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param int $visaCegid
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountOrder
     */
    public function setVisaCegid($visaCegid = null)
    {
        // validation for constraint: int
        if (!is_null($visaCegid) && !(is_int($visaCegid) || ctype_digit($visaCegid))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($visaCegid, true), gettype($visaCegid)), __LINE__);
        }
        if (is_null($visaCegid) || (is_array($visaCegid) && empty($visaCegid))) {
            unset($this->VisaCegid);
        } else {
            $this->VisaCegid = $visaCegid;
        }
        return $this;
    }
    /**
     * Get VoucherList value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfVoucher|null
     */
    public function getVoucherList()
    {
        return isset($this->VoucherList) ? $this->VoucherList : null;
    }
    /**
     * Set VoucherList value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfVoucher $voucherList
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountOrder
     */
    public function setVoucherList(\SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfVoucher $voucherList = null)
    {
        if (is_null($voucherList) || (is_array($voucherList) && empty($voucherList))) {
            unset($this->VoucherList);
        } else {
            $this->VoucherList = $voucherList;
        }
        return $this;
    }
}
