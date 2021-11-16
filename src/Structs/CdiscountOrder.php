<?php

declare(strict_types=1);

namespace SengentoBV\CdiscountMarketplaceSdk\Structs;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

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
     * @var bool|null
     */
    protected ?bool $ArchiveParcelList = null;
    /**
     * The BillingAddress
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountAddress|null
     */
    protected ?\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountAddress $BillingAddress = null;
    /**
     * The Corporation
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountCorporation|null
     */
    protected ?\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountCorporation $Corporation = null;
    /**
     * The CreationDate
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $CreationDate = null;
    /**
     * The Customer
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountCustomer|null
     */
    protected ?\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountCustomer $Customer = null;
    /**
     * The HasClaims
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $HasClaims = null;
    /**
     * The InitialTotalAmount
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var float|null
     */
    protected ?float $InitialTotalAmount = null;
    /**
     * The InitialTotalShippingChargesAmount
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var float|null
     */
    protected ?float $InitialTotalShippingChargesAmount = null;
    /**
     * The IsCLogistiqueOrder
     * @var bool|null
     */
    protected ?bool $IsCLogistiqueOrder = null;
    /**
     * The IsEligibileSubstitution
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $IsEligibileSubstitution = null;
    /**
     * The LastUpdatedDate
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $LastUpdatedDate = null;
    /**
     * The ModGesLog
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $ModGesLog = null;
    /**
     * The ModifiedDate
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $ModifiedDate = null;
    /**
     * The Offer
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountOfferOrder|null
     */
    protected ?\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountOfferOrder $Offer = null;
    /**
     * The OrderLineList
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfOrderLine|null
     */
    protected ?\SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfOrderLine $OrderLineList = null;
    /**
     * The OrderNumber
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $OrderNumber = null;
    /**
     * The OrderState
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $OrderState = null;
    /**
     * The ParcelList
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfParcel|null
     */
    protected ?\SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfParcel $ParcelList = null;
    /**
     * The PartnerOrderRef
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $PartnerOrderRef = null;
    /**
     * The ShippedTotalAmount
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var float|null
     */
    protected ?float $ShippedTotalAmount = null;
    /**
     * The ShippedTotalShippingCharges
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var float|null
     */
    protected ?float $ShippedTotalShippingCharges = null;
    /**
     * The ShippingAddress
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountAddress|null
     */
    protected ?\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountAddress $ShippingAddress = null;
    /**
     * The ShippingCode
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $ShippingCode = null;
    /**
     * The ShippingDateMax
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $ShippingDateMax = null;
    /**
     * The ShippingDateMin
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $ShippingDateMin = null;
    /**
     * The SiteCommissionPromisedAmount
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var float|null
     */
    protected ?float $SiteCommissionPromisedAmount = null;
    /**
     * The SiteCommissionShippedAmount
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var float|null
     */
    protected ?float $SiteCommissionShippedAmount = null;
    /**
     * The SiteCommissionValidatedAmount
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var float|null
     */
    protected ?float $SiteCommissionValidatedAmount = null;
    /**
     * The Status
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $Status = null;
    /**
     * The ValidatedTotalAmount
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var float|null
     */
    protected ?float $ValidatedTotalAmount = null;
    /**
     * The ValidatedTotalShippingCharges
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var float|null
     */
    protected ?float $ValidatedTotalShippingCharges = null;
    /**
     * The ValidationStatus
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $ValidationStatus = null;
    /**
     * The VisaCegid
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var int|null
     */
    protected ?int $VisaCegid = null;
    /**
     * The VoucherList
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfVoucher|null
     */
    protected ?\SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfVoucher $VoucherList = null;
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
    public function __construct(?bool $archiveParcelList = null, ?\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountAddress $billingAddress = null, ?\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountCorporation $corporation = null, ?string $creationDate = null, ?\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountCustomer $customer = null, ?bool $hasClaims = null, ?float $initialTotalAmount = null, ?float $initialTotalShippingChargesAmount = null, ?bool $isCLogistiqueOrder = null, ?bool $isEligibileSubstitution = null, ?string $lastUpdatedDate = null, ?string $modGesLog = null, ?string $modifiedDate = null, ?\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountOfferOrder $offer = null, ?\SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfOrderLine $orderLineList = null, ?string $orderNumber = null, ?string $orderState = null, ?\SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfParcel $parcelList = null, ?string $partnerOrderRef = null, ?float $shippedTotalAmount = null, ?float $shippedTotalShippingCharges = null, ?\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountAddress $shippingAddress = null, ?string $shippingCode = null, ?string $shippingDateMax = null, ?string $shippingDateMin = null, ?float $siteCommissionPromisedAmount = null, ?float $siteCommissionShippedAmount = null, ?float $siteCommissionValidatedAmount = null, ?string $status = null, ?float $validatedTotalAmount = null, ?float $validatedTotalShippingCharges = null, ?string $validationStatus = null, ?int $visaCegid = null, ?\SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfVoucher $voucherList = null)
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
    public function getArchiveParcelList(): ?bool
    {
        return $this->ArchiveParcelList;
    }
    /**
     * Set ArchiveParcelList value
     * @param bool $archiveParcelList
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountOrder
     */
    public function setArchiveParcelList(?bool $archiveParcelList = null): self
    {
        // validation for constraint: boolean
        if (!is_null($archiveParcelList) && !is_bool($archiveParcelList)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($archiveParcelList, true), gettype($archiveParcelList)), __LINE__);
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
    public function getBillingAddress(): ?\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountAddress
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
    public function setBillingAddress(?\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountAddress $billingAddress = null): self
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
    public function getCorporation(): ?\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountCorporation
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
    public function setCorporation(?\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountCorporation $corporation = null): self
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
    public function getCreationDate(): ?string
    {
        return $this->CreationDate;
    }
    /**
     * Set CreationDate value
     * @param string $creationDate
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountOrder
     */
    public function setCreationDate(?string $creationDate = null): self
    {
        // validation for constraint: string
        if (!is_null($creationDate) && !is_string($creationDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($creationDate, true), gettype($creationDate)), __LINE__);
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
    public function getCustomer(): ?\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountCustomer
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
    public function setCustomer(?\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountCustomer $customer = null): self
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
    public function getHasClaims(): ?bool
    {
        return $this->HasClaims;
    }
    /**
     * Set HasClaims value
     * @param bool $hasClaims
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountOrder
     */
    public function setHasClaims(?bool $hasClaims = null): self
    {
        // validation for constraint: boolean
        if (!is_null($hasClaims) && !is_bool($hasClaims)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($hasClaims, true), gettype($hasClaims)), __LINE__);
        }
        $this->HasClaims = $hasClaims;
        
        return $this;
    }
    /**
     * Get InitialTotalAmount value
     * @return float|null
     */
    public function getInitialTotalAmount(): ?float
    {
        return $this->InitialTotalAmount;
    }
    /**
     * Set InitialTotalAmount value
     * @param float $initialTotalAmount
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountOrder
     */
    public function setInitialTotalAmount(?float $initialTotalAmount = null): self
    {
        // validation for constraint: float
        if (!is_null($initialTotalAmount) && !(is_float($initialTotalAmount) || is_numeric($initialTotalAmount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($initialTotalAmount, true), gettype($initialTotalAmount)), __LINE__);
        }
        $this->InitialTotalAmount = $initialTotalAmount;
        
        return $this;
    }
    /**
     * Get InitialTotalShippingChargesAmount value
     * @return float|null
     */
    public function getInitialTotalShippingChargesAmount(): ?float
    {
        return $this->InitialTotalShippingChargesAmount;
    }
    /**
     * Set InitialTotalShippingChargesAmount value
     * @param float $initialTotalShippingChargesAmount
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountOrder
     */
    public function setInitialTotalShippingChargesAmount(?float $initialTotalShippingChargesAmount = null): self
    {
        // validation for constraint: float
        if (!is_null($initialTotalShippingChargesAmount) && !(is_float($initialTotalShippingChargesAmount) || is_numeric($initialTotalShippingChargesAmount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($initialTotalShippingChargesAmount, true), gettype($initialTotalShippingChargesAmount)), __LINE__);
        }
        $this->InitialTotalShippingChargesAmount = $initialTotalShippingChargesAmount;
        
        return $this;
    }
    /**
     * Get IsCLogistiqueOrder value
     * @return bool|null
     */
    public function getIsCLogistiqueOrder(): ?bool
    {
        return $this->IsCLogistiqueOrder;
    }
    /**
     * Set IsCLogistiqueOrder value
     * @param bool $isCLogistiqueOrder
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountOrder
     */
    public function setIsCLogistiqueOrder(?bool $isCLogistiqueOrder = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isCLogistiqueOrder) && !is_bool($isCLogistiqueOrder)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isCLogistiqueOrder, true), gettype($isCLogistiqueOrder)), __LINE__);
        }
        $this->IsCLogistiqueOrder = $isCLogistiqueOrder;
        
        return $this;
    }
    /**
     * Get IsEligibileSubstitution value
     * @return bool|null
     */
    public function getIsEligibileSubstitution(): ?bool
    {
        return $this->IsEligibileSubstitution;
    }
    /**
     * Set IsEligibileSubstitution value
     * @param bool $isEligibileSubstitution
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountOrder
     */
    public function setIsEligibileSubstitution(?bool $isEligibileSubstitution = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isEligibileSubstitution) && !is_bool($isEligibileSubstitution)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isEligibileSubstitution, true), gettype($isEligibileSubstitution)), __LINE__);
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
    public function getLastUpdatedDate(): ?string
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
    public function setLastUpdatedDate(?string $lastUpdatedDate = null): self
    {
        // validation for constraint: string
        if (!is_null($lastUpdatedDate) && !is_string($lastUpdatedDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($lastUpdatedDate, true), gettype($lastUpdatedDate)), __LINE__);
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
    public function getModGesLog(): ?string
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
    public function setModGesLog(?string $modGesLog = null): self
    {
        // validation for constraint: string
        if (!is_null($modGesLog) && !is_string($modGesLog)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($modGesLog, true), gettype($modGesLog)), __LINE__);
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
    public function getModifiedDate(): ?string
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
    public function setModifiedDate(?string $modifiedDate = null): self
    {
        // validation for constraint: string
        if (!is_null($modifiedDate) && !is_string($modifiedDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($modifiedDate, true), gettype($modifiedDate)), __LINE__);
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
    public function getOffer(): ?\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountOfferOrder
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
    public function setOffer(?\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountOfferOrder $offer = null): self
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
    public function getOrderLineList(): ?\SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfOrderLine
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
    public function setOrderLineList(?\SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfOrderLine $orderLineList = null): self
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
    public function getOrderNumber(): ?string
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
    public function setOrderNumber(?string $orderNumber = null): self
    {
        // validation for constraint: string
        if (!is_null($orderNumber) && !is_string($orderNumber)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($orderNumber, true), gettype($orderNumber)), __LINE__);
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
    public function getOrderState(): ?string
    {
        return isset($this->OrderState) ? $this->OrderState : null;
    }
    /**
     * Set OrderState value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @uses \SengentoBV\CdiscountMarketplaceSdk\Enums\CdiscountOrderStateEnum::valueIsValid()
     * @uses \SengentoBV\CdiscountMarketplaceSdk\Enums\CdiscountOrderStateEnum::getValidValues()
     * @throws InvalidArgumentException
     * @param string $orderState
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountOrder
     */
    public function setOrderState(?string $orderState = null): self
    {
        // validation for constraint: enumeration
        if (!\SengentoBV\CdiscountMarketplaceSdk\Enums\CdiscountOrderStateEnum::valueIsValid($orderState)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \SengentoBV\CdiscountMarketplaceSdk\Enums\CdiscountOrderStateEnum', is_array($orderState) ? implode(', ', $orderState) : var_export($orderState, true), implode(', ', \SengentoBV\CdiscountMarketplaceSdk\Enums\CdiscountOrderStateEnum::getValidValues())), __LINE__);
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
    public function getParcelList(): ?\SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfParcel
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
    public function setParcelList(?\SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfParcel $parcelList = null): self
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
    public function getPartnerOrderRef(): ?string
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
    public function setPartnerOrderRef(?string $partnerOrderRef = null): self
    {
        // validation for constraint: string
        if (!is_null($partnerOrderRef) && !is_string($partnerOrderRef)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($partnerOrderRef, true), gettype($partnerOrderRef)), __LINE__);
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
    public function getShippedTotalAmount(): ?float
    {
        return $this->ShippedTotalAmount;
    }
    /**
     * Set ShippedTotalAmount value
     * @param float $shippedTotalAmount
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountOrder
     */
    public function setShippedTotalAmount(?float $shippedTotalAmount = null): self
    {
        // validation for constraint: float
        if (!is_null($shippedTotalAmount) && !(is_float($shippedTotalAmount) || is_numeric($shippedTotalAmount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($shippedTotalAmount, true), gettype($shippedTotalAmount)), __LINE__);
        }
        $this->ShippedTotalAmount = $shippedTotalAmount;
        
        return $this;
    }
    /**
     * Get ShippedTotalShippingCharges value
     * @return float|null
     */
    public function getShippedTotalShippingCharges(): ?float
    {
        return $this->ShippedTotalShippingCharges;
    }
    /**
     * Set ShippedTotalShippingCharges value
     * @param float $shippedTotalShippingCharges
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountOrder
     */
    public function setShippedTotalShippingCharges(?float $shippedTotalShippingCharges = null): self
    {
        // validation for constraint: float
        if (!is_null($shippedTotalShippingCharges) && !(is_float($shippedTotalShippingCharges) || is_numeric($shippedTotalShippingCharges))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($shippedTotalShippingCharges, true), gettype($shippedTotalShippingCharges)), __LINE__);
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
    public function getShippingAddress(): ?\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountAddress
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
    public function setShippingAddress(?\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountAddress $shippingAddress = null): self
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
    public function getShippingCode(): ?string
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
    public function setShippingCode(?string $shippingCode = null): self
    {
        // validation for constraint: string
        if (!is_null($shippingCode) && !is_string($shippingCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($shippingCode, true), gettype($shippingCode)), __LINE__);
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
    public function getShippingDateMax(): ?string
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
    public function setShippingDateMax(?string $shippingDateMax = null): self
    {
        // validation for constraint: string
        if (!is_null($shippingDateMax) && !is_string($shippingDateMax)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($shippingDateMax, true), gettype($shippingDateMax)), __LINE__);
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
    public function getShippingDateMin(): ?string
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
    public function setShippingDateMin(?string $shippingDateMin = null): self
    {
        // validation for constraint: string
        if (!is_null($shippingDateMin) && !is_string($shippingDateMin)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($shippingDateMin, true), gettype($shippingDateMin)), __LINE__);
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
    public function getSiteCommissionPromisedAmount(): ?float
    {
        return $this->SiteCommissionPromisedAmount;
    }
    /**
     * Set SiteCommissionPromisedAmount value
     * @param float $siteCommissionPromisedAmount
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountOrder
     */
    public function setSiteCommissionPromisedAmount(?float $siteCommissionPromisedAmount = null): self
    {
        // validation for constraint: float
        if (!is_null($siteCommissionPromisedAmount) && !(is_float($siteCommissionPromisedAmount) || is_numeric($siteCommissionPromisedAmount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($siteCommissionPromisedAmount, true), gettype($siteCommissionPromisedAmount)), __LINE__);
        }
        $this->SiteCommissionPromisedAmount = $siteCommissionPromisedAmount;
        
        return $this;
    }
    /**
     * Get SiteCommissionShippedAmount value
     * @return float|null
     */
    public function getSiteCommissionShippedAmount(): ?float
    {
        return $this->SiteCommissionShippedAmount;
    }
    /**
     * Set SiteCommissionShippedAmount value
     * @param float $siteCommissionShippedAmount
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountOrder
     */
    public function setSiteCommissionShippedAmount(?float $siteCommissionShippedAmount = null): self
    {
        // validation for constraint: float
        if (!is_null($siteCommissionShippedAmount) && !(is_float($siteCommissionShippedAmount) || is_numeric($siteCommissionShippedAmount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($siteCommissionShippedAmount, true), gettype($siteCommissionShippedAmount)), __LINE__);
        }
        $this->SiteCommissionShippedAmount = $siteCommissionShippedAmount;
        
        return $this;
    }
    /**
     * Get SiteCommissionValidatedAmount value
     * @return float|null
     */
    public function getSiteCommissionValidatedAmount(): ?float
    {
        return $this->SiteCommissionValidatedAmount;
    }
    /**
     * Set SiteCommissionValidatedAmount value
     * @param float $siteCommissionValidatedAmount
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountOrder
     */
    public function setSiteCommissionValidatedAmount(?float $siteCommissionValidatedAmount = null): self
    {
        // validation for constraint: float
        if (!is_null($siteCommissionValidatedAmount) && !(is_float($siteCommissionValidatedAmount) || is_numeric($siteCommissionValidatedAmount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($siteCommissionValidatedAmount, true), gettype($siteCommissionValidatedAmount)), __LINE__);
        }
        $this->SiteCommissionValidatedAmount = $siteCommissionValidatedAmount;
        
        return $this;
    }
    /**
     * Get Status value
     * @return string|null
     */
    public function getStatus(): ?string
    {
        return $this->Status;
    }
    /**
     * Set Status value
     * @uses \SengentoBV\CdiscountMarketplaceSdk\Enums\CdiscountOrderStatusType::valueIsValid()
     * @uses \SengentoBV\CdiscountMarketplaceSdk\Enums\CdiscountOrderStatusType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $status
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountOrder
     */
    public function setStatus(?string $status = null): self
    {
        // validation for constraint: enumeration
        if (!\SengentoBV\CdiscountMarketplaceSdk\Enums\CdiscountOrderStatusType::valueIsValid($status)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \SengentoBV\CdiscountMarketplaceSdk\Enums\CdiscountOrderStatusType', is_array($status) ? implode(', ', $status) : var_export($status, true), implode(', ', \SengentoBV\CdiscountMarketplaceSdk\Enums\CdiscountOrderStatusType::getValidValues())), __LINE__);
        }
        $this->Status = $status;
        
        return $this;
    }
    /**
     * Get ValidatedTotalAmount value
     * @return float|null
     */
    public function getValidatedTotalAmount(): ?float
    {
        return $this->ValidatedTotalAmount;
    }
    /**
     * Set ValidatedTotalAmount value
     * @param float $validatedTotalAmount
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountOrder
     */
    public function setValidatedTotalAmount(?float $validatedTotalAmount = null): self
    {
        // validation for constraint: float
        if (!is_null($validatedTotalAmount) && !(is_float($validatedTotalAmount) || is_numeric($validatedTotalAmount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($validatedTotalAmount, true), gettype($validatedTotalAmount)), __LINE__);
        }
        $this->ValidatedTotalAmount = $validatedTotalAmount;
        
        return $this;
    }
    /**
     * Get ValidatedTotalShippingCharges value
     * @return float|null
     */
    public function getValidatedTotalShippingCharges(): ?float
    {
        return $this->ValidatedTotalShippingCharges;
    }
    /**
     * Set ValidatedTotalShippingCharges value
     * @param float $validatedTotalShippingCharges
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountOrder
     */
    public function setValidatedTotalShippingCharges(?float $validatedTotalShippingCharges = null): self
    {
        // validation for constraint: float
        if (!is_null($validatedTotalShippingCharges) && !(is_float($validatedTotalShippingCharges) || is_numeric($validatedTotalShippingCharges))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($validatedTotalShippingCharges, true), gettype($validatedTotalShippingCharges)), __LINE__);
        }
        $this->ValidatedTotalShippingCharges = $validatedTotalShippingCharges;
        
        return $this;
    }
    /**
     * Get ValidationStatus value
     * @return string|null
     */
    public function getValidationStatus(): ?string
    {
        return $this->ValidationStatus;
    }
    /**
     * Set ValidationStatus value
     * @uses \SengentoBV\CdiscountMarketplaceSdk\Enums\CdiscountValidationStatusType::valueIsValid()
     * @uses \SengentoBV\CdiscountMarketplaceSdk\Enums\CdiscountValidationStatusType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $validationStatus
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountOrder
     */
    public function setValidationStatus(?string $validationStatus = null): self
    {
        // validation for constraint: enumeration
        if (!\SengentoBV\CdiscountMarketplaceSdk\Enums\CdiscountValidationStatusType::valueIsValid($validationStatus)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \SengentoBV\CdiscountMarketplaceSdk\Enums\CdiscountValidationStatusType', is_array($validationStatus) ? implode(', ', $validationStatus) : var_export($validationStatus, true), implode(', ', \SengentoBV\CdiscountMarketplaceSdk\Enums\CdiscountValidationStatusType::getValidValues())), __LINE__);
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
    public function getVisaCegid(): ?int
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
    public function setVisaCegid(?int $visaCegid = null): self
    {
        // validation for constraint: int
        if (!is_null($visaCegid) && !(is_int($visaCegid) || ctype_digit($visaCegid))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($visaCegid, true), gettype($visaCegid)), __LINE__);
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
    public function getVoucherList(): ?\SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfVoucher
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
    public function setVoucherList(?\SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfVoucher $voucherList = null): self
    {
        if (is_null($voucherList) || (is_array($voucherList) && empty($voucherList))) {
            unset($this->VoucherList);
        } else {
            $this->VoucherList = $voucherList;
        }
        
        return $this;
    }
}
