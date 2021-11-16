<?php

declare(strict_types=1);

namespace SengentoBV\CdiscountMarketplaceSdk\Structs;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Offer Structs
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:Offer
 * @package Cdiscount
 * @subpackage Structs
 */
class CdiscountOffer extends AbstractStructBase
{
    /**
     * The BestShippingCharges
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var float|null
     */
    protected ?float $BestShippingCharges = null;
    /**
     * The Comments
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $Comments = null;
    /**
     * The CreationDate
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $CreationDate = null;
    /**
     * The DeaTax
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var float|null
     */
    protected ?float $DeaTax = null;
    /**
     * The DiscountList
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfDiscountComponent|null
     */
    protected ?\SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfDiscountComponent $DiscountList = null;
    /**
     * The EcoTax
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var float|null
     */
    protected ?float $EcoTax = null;
    /**
     * The IntegrationPrice
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var float|null
     */
    protected ?float $IntegrationPrice = null;
    /**
     * The IsCDAV
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $IsCDAV = null;
    /**
     * The LastUpdateDate
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $LastUpdateDate = null;
    /**
     * The LogisticMode
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $LogisticMode = null;
    /**
     * The LogisticsManagement
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $LogisticsManagement = null;
    /**
     * The MinimumPriceForPriceAlignment
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var float|null
     */
    protected ?float $MinimumPriceForPriceAlignment = null;
    /**
     * The OfferBenchMark
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountOfferPriceBenchMark|null
     */
    protected ?\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountOfferPriceBenchMark $OfferBenchMark = null;
    /**
     * The OfferPoolList
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfOfferPool|null
     */
    protected ?\SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfOfferPool $OfferPoolList = null;
    /**
     * The OfferState
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $OfferState = null;
    /**
     * The ParentProductId
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $ParentProductId = null;
    /**
     * The Price
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var float|null
     */
    protected ?float $Price = null;
    /**
     * The PriceMustBeAligned
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $PriceMustBeAligned = null;
    /**
     * The ProductCondition
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $ProductCondition = null;
    /**
     * The ProductEan
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $ProductEan = null;
    /**
     * The ProductId
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $ProductId = null;
    /**
     * The ProductPackagingUnit
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $ProductPackagingUnit = null;
    /**
     * The ProductPackagingUnitPrice
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var float|null
     */
    protected ?float $ProductPackagingUnitPrice = null;
    /**
     * The ProductPackagingValue
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var float|null
     */
    protected ?float $ProductPackagingValue = null;
    /**
     * The SellerProductId
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $SellerProductId = null;
    /**
     * The ShippingInformationList
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfShippingInformation|null
     */
    protected ?\SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfShippingInformation $ShippingInformationList = null;
    /**
     * The SoldOutManagement
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $SoldOutManagement = null;
    /**
     * The Stock
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $Stock = null;
    /**
     * The StrikedPrice
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var float|null
     */
    protected ?float $StrikedPrice = null;
    /**
     * The VatRate
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var float|null
     */
    protected ?float $VatRate = null;
    /**
     * The IsAvailable
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var bool|null
     */
    protected ?bool $IsAvailable = null;
    /**
     * The IsBestOffer
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var bool|null
     */
    protected ?bool $IsBestOffer = null;
    /**
     * The IsWithCommercialOperation
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var bool|null
     */
    protected ?bool $IsWithCommercialOperation = null;
    /**
     * The Seller
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountSeller|null
     */
    protected ?\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountSeller $Seller = null;
    /**
     * The Shipping
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountShipping|null
     */
    protected ?\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountShipping $Shipping = null;
    /**
     * Constructor method for Offer
     * @uses CdiscountOffer::setBestShippingCharges()
     * @uses CdiscountOffer::setComments()
     * @uses CdiscountOffer::setCreationDate()
     * @uses CdiscountOffer::setDeaTax()
     * @uses CdiscountOffer::setDiscountList()
     * @uses CdiscountOffer::setEcoTax()
     * @uses CdiscountOffer::setIntegrationPrice()
     * @uses CdiscountOffer::setIsCDAV()
     * @uses CdiscountOffer::setLastUpdateDate()
     * @uses CdiscountOffer::setLogisticMode()
     * @uses CdiscountOffer::setLogisticsManagement()
     * @uses CdiscountOffer::setMinimumPriceForPriceAlignment()
     * @uses CdiscountOffer::setOfferBenchMark()
     * @uses CdiscountOffer::setOfferPoolList()
     * @uses CdiscountOffer::setOfferState()
     * @uses CdiscountOffer::setParentProductId()
     * @uses CdiscountOffer::setPrice()
     * @uses CdiscountOffer::setPriceMustBeAligned()
     * @uses CdiscountOffer::setProductCondition()
     * @uses CdiscountOffer::setProductEan()
     * @uses CdiscountOffer::setProductId()
     * @uses CdiscountOffer::setProductPackagingUnit()
     * @uses CdiscountOffer::setProductPackagingUnitPrice()
     * @uses CdiscountOffer::setProductPackagingValue()
     * @uses CdiscountOffer::setSellerProductId()
     * @uses CdiscountOffer::setShippingInformationList()
     * @uses CdiscountOffer::setSoldOutManagement()
     * @uses CdiscountOffer::setStock()
     * @uses CdiscountOffer::setStrikedPrice()
     * @uses CdiscountOffer::setVatRate()
     * @uses CdiscountOffer::setIsAvailable()
     * @uses CdiscountOffer::setIsBestOffer()
     * @uses CdiscountOffer::setIsWithCommercialOperation()
     * @uses CdiscountOffer::setSeller()
     * @uses CdiscountOffer::setShipping()
     * @param float $bestShippingCharges
     * @param string $comments
     * @param string $creationDate
     * @param float $deaTax
     * @param \SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfDiscountComponent $discountList
     * @param float $ecoTax
     * @param float $integrationPrice
     * @param bool $isCDAV
     * @param string $lastUpdateDate
     * @param string $logisticMode
     * @param string $logisticsManagement
     * @param float $minimumPriceForPriceAlignment
     * @param \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountOfferPriceBenchMark $offerBenchMark
     * @param \SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfOfferPool $offerPoolList
     * @param string $offerState
     * @param string $parentProductId
     * @param float $price
     * @param string $priceMustBeAligned
     * @param string $productCondition
     * @param string $productEan
     * @param string $productId
     * @param string $productPackagingUnit
     * @param float $productPackagingUnitPrice
     * @param float $productPackagingValue
     * @param string $sellerProductId
     * @param \SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfShippingInformation $shippingInformationList
     * @param string $soldOutManagement
     * @param int $stock
     * @param float $strikedPrice
     * @param float $vatRate
     * @param bool $isAvailable
     * @param bool $isBestOffer
     * @param bool $isWithCommercialOperation
     * @param \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountSeller $seller
     * @param \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountShipping $shipping
     */
    public function __construct(?float $bestShippingCharges = null, ?string $comments = null, ?string $creationDate = null, ?float $deaTax = null, ?\SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfDiscountComponent $discountList = null, ?float $ecoTax = null, ?float $integrationPrice = null, ?bool $isCDAV = null, ?string $lastUpdateDate = null, ?string $logisticMode = null, ?string $logisticsManagement = null, ?float $minimumPriceForPriceAlignment = null, ?\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountOfferPriceBenchMark $offerBenchMark = null, ?\SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfOfferPool $offerPoolList = null, ?string $offerState = null, ?string $parentProductId = null, ?float $price = null, ?string $priceMustBeAligned = null, ?string $productCondition = null, ?string $productEan = null, ?string $productId = null, ?string $productPackagingUnit = null, ?float $productPackagingUnitPrice = null, ?float $productPackagingValue = null, ?string $sellerProductId = null, ?\SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfShippingInformation $shippingInformationList = null, ?string $soldOutManagement = null, ?int $stock = null, ?float $strikedPrice = null, ?float $vatRate = null, ?bool $isAvailable = null, ?bool $isBestOffer = null, ?bool $isWithCommercialOperation = null, ?\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountSeller $seller = null, ?\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountShipping $shipping = null)
    {
        $this
            ->setBestShippingCharges($bestShippingCharges)
            ->setComments($comments)
            ->setCreationDate($creationDate)
            ->setDeaTax($deaTax)
            ->setDiscountList($discountList)
            ->setEcoTax($ecoTax)
            ->setIntegrationPrice($integrationPrice)
            ->setIsCDAV($isCDAV)
            ->setLastUpdateDate($lastUpdateDate)
            ->setLogisticMode($logisticMode)
            ->setLogisticsManagement($logisticsManagement)
            ->setMinimumPriceForPriceAlignment($minimumPriceForPriceAlignment)
            ->setOfferBenchMark($offerBenchMark)
            ->setOfferPoolList($offerPoolList)
            ->setOfferState($offerState)
            ->setParentProductId($parentProductId)
            ->setPrice($price)
            ->setPriceMustBeAligned($priceMustBeAligned)
            ->setProductCondition($productCondition)
            ->setProductEan($productEan)
            ->setProductId($productId)
            ->setProductPackagingUnit($productPackagingUnit)
            ->setProductPackagingUnitPrice($productPackagingUnitPrice)
            ->setProductPackagingValue($productPackagingValue)
            ->setSellerProductId($sellerProductId)
            ->setShippingInformationList($shippingInformationList)
            ->setSoldOutManagement($soldOutManagement)
            ->setStock($stock)
            ->setStrikedPrice($strikedPrice)
            ->setVatRate($vatRate)
            ->setIsAvailable($isAvailable)
            ->setIsBestOffer($isBestOffer)
            ->setIsWithCommercialOperation($isWithCommercialOperation)
            ->setSeller($seller)
            ->setShipping($shipping);
    }
    /**
     * Get BestShippingCharges value
     * @return float|null
     */
    public function getBestShippingCharges(): ?float
    {
        return $this->BestShippingCharges;
    }
    /**
     * Set BestShippingCharges value
     * @param float $bestShippingCharges
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountOffer
     */
    public function setBestShippingCharges(?float $bestShippingCharges = null): self
    {
        // validation for constraint: float
        if (!is_null($bestShippingCharges) && !(is_float($bestShippingCharges) || is_numeric($bestShippingCharges))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($bestShippingCharges, true), gettype($bestShippingCharges)), __LINE__);
        }
        $this->BestShippingCharges = $bestShippingCharges;
        
        return $this;
    }
    /**
     * Get Comments value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getComments(): ?string
    {
        return isset($this->Comments) ? $this->Comments : null;
    }
    /**
     * Set Comments value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $comments
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountOffer
     */
    public function setComments(?string $comments = null): self
    {
        // validation for constraint: string
        if (!is_null($comments) && !is_string($comments)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($comments, true), gettype($comments)), __LINE__);
        }
        if (is_null($comments) || (is_array($comments) && empty($comments))) {
            unset($this->Comments);
        } else {
            $this->Comments = $comments;
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
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountOffer
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
     * Get DeaTax value
     * @return float|null
     */
    public function getDeaTax(): ?float
    {
        return $this->DeaTax;
    }
    /**
     * Set DeaTax value
     * @param float $deaTax
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountOffer
     */
    public function setDeaTax(?float $deaTax = null): self
    {
        // validation for constraint: float
        if (!is_null($deaTax) && !(is_float($deaTax) || is_numeric($deaTax))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($deaTax, true), gettype($deaTax)), __LINE__);
        }
        $this->DeaTax = $deaTax;
        
        return $this;
    }
    /**
     * Get DiscountList value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfDiscountComponent|null
     */
    public function getDiscountList(): ?\SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfDiscountComponent
    {
        return isset($this->DiscountList) ? $this->DiscountList : null;
    }
    /**
     * Set DiscountList value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfDiscountComponent $discountList
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountOffer
     */
    public function setDiscountList(?\SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfDiscountComponent $discountList = null): self
    {
        if (is_null($discountList) || (is_array($discountList) && empty($discountList))) {
            unset($this->DiscountList);
        } else {
            $this->DiscountList = $discountList;
        }
        
        return $this;
    }
    /**
     * Get EcoTax value
     * @return float|null
     */
    public function getEcoTax(): ?float
    {
        return $this->EcoTax;
    }
    /**
     * Set EcoTax value
     * @param float $ecoTax
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountOffer
     */
    public function setEcoTax(?float $ecoTax = null): self
    {
        // validation for constraint: float
        if (!is_null($ecoTax) && !(is_float($ecoTax) || is_numeric($ecoTax))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($ecoTax, true), gettype($ecoTax)), __LINE__);
        }
        $this->EcoTax = $ecoTax;
        
        return $this;
    }
    /**
     * Get IntegrationPrice value
     * @return float|null
     */
    public function getIntegrationPrice(): ?float
    {
        return $this->IntegrationPrice;
    }
    /**
     * Set IntegrationPrice value
     * @param float $integrationPrice
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountOffer
     */
    public function setIntegrationPrice(?float $integrationPrice = null): self
    {
        // validation for constraint: float
        if (!is_null($integrationPrice) && !(is_float($integrationPrice) || is_numeric($integrationPrice))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($integrationPrice, true), gettype($integrationPrice)), __LINE__);
        }
        $this->IntegrationPrice = $integrationPrice;
        
        return $this;
    }
    /**
     * Get IsCDAV value
     * @return bool|null
     */
    public function getIsCDAV(): ?bool
    {
        return $this->IsCDAV;
    }
    /**
     * Set IsCDAV value
     * @param bool $isCDAV
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountOffer
     */
    public function setIsCDAV(?bool $isCDAV = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isCDAV) && !is_bool($isCDAV)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isCDAV, true), gettype($isCDAV)), __LINE__);
        }
        $this->IsCDAV = $isCDAV;
        
        return $this;
    }
    /**
     * Get LastUpdateDate value
     * @return string|null
     */
    public function getLastUpdateDate(): ?string
    {
        return $this->LastUpdateDate;
    }
    /**
     * Set LastUpdateDate value
     * @param string $lastUpdateDate
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountOffer
     */
    public function setLastUpdateDate(?string $lastUpdateDate = null): self
    {
        // validation for constraint: string
        if (!is_null($lastUpdateDate) && !is_string($lastUpdateDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($lastUpdateDate, true), gettype($lastUpdateDate)), __LINE__);
        }
        $this->LastUpdateDate = $lastUpdateDate;
        
        return $this;
    }
    /**
     * Get LogisticMode value
     * @return string|null
     */
    public function getLogisticMode(): ?string
    {
        return $this->LogisticMode;
    }
    /**
     * Set LogisticMode value
     * @uses \SengentoBV\CdiscountMarketplaceSdk\Enums\CdiscountLogisticMode::valueIsValid()
     * @uses \SengentoBV\CdiscountMarketplaceSdk\Enums\CdiscountLogisticMode::getValidValues()
     * @throws InvalidArgumentException
     * @param string $logisticMode
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountOffer
     */
    public function setLogisticMode(?string $logisticMode = null): self
    {
        // validation for constraint: enumeration
        if (!\SengentoBV\CdiscountMarketplaceSdk\Enums\CdiscountLogisticMode::valueIsValid($logisticMode)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \SengentoBV\CdiscountMarketplaceSdk\Enums\CdiscountLogisticMode', is_array($logisticMode) ? implode(', ', $logisticMode) : var_export($logisticMode, true), implode(', ', \SengentoBV\CdiscountMarketplaceSdk\Enums\CdiscountLogisticMode::getValidValues())), __LINE__);
        }
        $this->LogisticMode = $logisticMode;
        
        return $this;
    }
    /**
     * Get LogisticsManagement value
     * @return string|null
     */
    public function getLogisticsManagement(): ?string
    {
        return $this->LogisticsManagement;
    }
    /**
     * Set LogisticsManagement value
     * @uses \SengentoBV\CdiscountMarketplaceSdk\Enums\CdiscountLogisticsManagement::valueIsValid()
     * @uses \SengentoBV\CdiscountMarketplaceSdk\Enums\CdiscountLogisticsManagement::getValidValues()
     * @throws InvalidArgumentException
     * @param string $logisticsManagement
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountOffer
     */
    public function setLogisticsManagement(?string $logisticsManagement = null): self
    {
        // validation for constraint: enumeration
        if (!\SengentoBV\CdiscountMarketplaceSdk\Enums\CdiscountLogisticsManagement::valueIsValid($logisticsManagement)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \SengentoBV\CdiscountMarketplaceSdk\Enums\CdiscountLogisticsManagement', is_array($logisticsManagement) ? implode(', ', $logisticsManagement) : var_export($logisticsManagement, true), implode(', ', \SengentoBV\CdiscountMarketplaceSdk\Enums\CdiscountLogisticsManagement::getValidValues())), __LINE__);
        }
        $this->LogisticsManagement = $logisticsManagement;
        
        return $this;
    }
    /**
     * Get MinimumPriceForPriceAlignment value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return float|null
     */
    public function getMinimumPriceForPriceAlignment(): ?float
    {
        return isset($this->MinimumPriceForPriceAlignment) ? $this->MinimumPriceForPriceAlignment : null;
    }
    /**
     * Set MinimumPriceForPriceAlignment value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param float $minimumPriceForPriceAlignment
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountOffer
     */
    public function setMinimumPriceForPriceAlignment(?float $minimumPriceForPriceAlignment = null): self
    {
        // validation for constraint: float
        if (!is_null($minimumPriceForPriceAlignment) && !(is_float($minimumPriceForPriceAlignment) || is_numeric($minimumPriceForPriceAlignment))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($minimumPriceForPriceAlignment, true), gettype($minimumPriceForPriceAlignment)), __LINE__);
        }
        if (is_null($minimumPriceForPriceAlignment) || (is_array($minimumPriceForPriceAlignment) && empty($minimumPriceForPriceAlignment))) {
            unset($this->MinimumPriceForPriceAlignment);
        } else {
            $this->MinimumPriceForPriceAlignment = $minimumPriceForPriceAlignment;
        }
        
        return $this;
    }
    /**
     * Get OfferBenchMark value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountOfferPriceBenchMark|null
     */
    public function getOfferBenchMark(): ?\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountOfferPriceBenchMark
    {
        return isset($this->OfferBenchMark) ? $this->OfferBenchMark : null;
    }
    /**
     * Set OfferBenchMark value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountOfferPriceBenchMark $offerBenchMark
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountOffer
     */
    public function setOfferBenchMark(?\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountOfferPriceBenchMark $offerBenchMark = null): self
    {
        if (is_null($offerBenchMark) || (is_array($offerBenchMark) && empty($offerBenchMark))) {
            unset($this->OfferBenchMark);
        } else {
            $this->OfferBenchMark = $offerBenchMark;
        }
        
        return $this;
    }
    /**
     * Get OfferPoolList value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfOfferPool|null
     */
    public function getOfferPoolList(): ?\SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfOfferPool
    {
        return isset($this->OfferPoolList) ? $this->OfferPoolList : null;
    }
    /**
     * Set OfferPoolList value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfOfferPool $offerPoolList
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountOffer
     */
    public function setOfferPoolList(?\SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfOfferPool $offerPoolList = null): self
    {
        if (is_null($offerPoolList) || (is_array($offerPoolList) && empty($offerPoolList))) {
            unset($this->OfferPoolList);
        } else {
            $this->OfferPoolList = $offerPoolList;
        }
        
        return $this;
    }
    /**
     * Get OfferState value
     * @return string|null
     */
    public function getOfferState(): ?string
    {
        return $this->OfferState;
    }
    /**
     * Set OfferState value
     * @uses \SengentoBV\CdiscountMarketplaceSdk\Enums\CdiscountOfferStateEnum::valueIsValid()
     * @uses \SengentoBV\CdiscountMarketplaceSdk\Enums\CdiscountOfferStateEnum::getValidValues()
     * @throws InvalidArgumentException
     * @param string $offerState
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountOffer
     */
    public function setOfferState(?string $offerState = null): self
    {
        // validation for constraint: enumeration
        if (!\SengentoBV\CdiscountMarketplaceSdk\Enums\CdiscountOfferStateEnum::valueIsValid($offerState)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \SengentoBV\CdiscountMarketplaceSdk\Enums\CdiscountOfferStateEnum', is_array($offerState) ? implode(', ', $offerState) : var_export($offerState, true), implode(', ', \SengentoBV\CdiscountMarketplaceSdk\Enums\CdiscountOfferStateEnum::getValidValues())), __LINE__);
        }
        $this->OfferState = $offerState;
        
        return $this;
    }
    /**
     * Get ParentProductId value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getParentProductId(): ?string
    {
        return isset($this->ParentProductId) ? $this->ParentProductId : null;
    }
    /**
     * Set ParentProductId value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $parentProductId
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountOffer
     */
    public function setParentProductId(?string $parentProductId = null): self
    {
        // validation for constraint: string
        if (!is_null($parentProductId) && !is_string($parentProductId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($parentProductId, true), gettype($parentProductId)), __LINE__);
        }
        if (is_null($parentProductId) || (is_array($parentProductId) && empty($parentProductId))) {
            unset($this->ParentProductId);
        } else {
            $this->ParentProductId = $parentProductId;
        }
        
        return $this;
    }
    /**
     * Get Price value
     * @return float|null
     */
    public function getPrice(): ?float
    {
        return $this->Price;
    }
    /**
     * Set Price value
     * @param float $price
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountOffer
     */
    public function setPrice(?float $price = null): self
    {
        // validation for constraint: float
        if (!is_null($price) && !(is_float($price) || is_numeric($price))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($price, true), gettype($price)), __LINE__);
        }
        $this->Price = $price;
        
        return $this;
    }
    /**
     * Get PriceMustBeAligned value
     * @return string|null
     */
    public function getPriceMustBeAligned(): ?string
    {
        return $this->PriceMustBeAligned;
    }
    /**
     * Set PriceMustBeAligned value
     * @uses \SengentoBV\CdiscountMarketplaceSdk\Enums\CdiscountPriceAlignmentAction::valueIsValid()
     * @uses \SengentoBV\CdiscountMarketplaceSdk\Enums\CdiscountPriceAlignmentAction::getValidValues()
     * @throws InvalidArgumentException
     * @param string $priceMustBeAligned
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountOffer
     */
    public function setPriceMustBeAligned(?string $priceMustBeAligned = null): self
    {
        // validation for constraint: enumeration
        if (!\SengentoBV\CdiscountMarketplaceSdk\Enums\CdiscountPriceAlignmentAction::valueIsValid($priceMustBeAligned)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \SengentoBV\CdiscountMarketplaceSdk\Enums\CdiscountPriceAlignmentAction', is_array($priceMustBeAligned) ? implode(', ', $priceMustBeAligned) : var_export($priceMustBeAligned, true), implode(', ', \SengentoBV\CdiscountMarketplaceSdk\Enums\CdiscountPriceAlignmentAction::getValidValues())), __LINE__);
        }
        $this->PriceMustBeAligned = $priceMustBeAligned;
        
        return $this;
    }
    /**
     * Get ProductCondition value
     * @return string|null
     */
    public function getProductCondition(): ?string
    {
        return $this->ProductCondition;
    }
    /**
     * Set ProductCondition value
     * @uses \SengentoBV\CdiscountMarketplaceSdk\Enums\CdiscountProductConditionEnum::valueIsValid()
     * @uses \SengentoBV\CdiscountMarketplaceSdk\Enums\CdiscountProductConditionEnum::getValidValues()
     * @throws InvalidArgumentException
     * @param string $productCondition
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountOffer
     */
    public function setProductCondition(?string $productCondition = null): self
    {
        // validation for constraint: enumeration
        if (!\SengentoBV\CdiscountMarketplaceSdk\Enums\CdiscountProductConditionEnum::valueIsValid($productCondition)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \SengentoBV\CdiscountMarketplaceSdk\Enums\CdiscountProductConditionEnum', is_array($productCondition) ? implode(', ', $productCondition) : var_export($productCondition, true), implode(', ', \SengentoBV\CdiscountMarketplaceSdk\Enums\CdiscountProductConditionEnum::getValidValues())), __LINE__);
        }
        $this->ProductCondition = $productCondition;
        
        return $this;
    }
    /**
     * Get ProductEan value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getProductEan(): ?string
    {
        return isset($this->ProductEan) ? $this->ProductEan : null;
    }
    /**
     * Set ProductEan value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $productEan
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountOffer
     */
    public function setProductEan(?string $productEan = null): self
    {
        // validation for constraint: string
        if (!is_null($productEan) && !is_string($productEan)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($productEan, true), gettype($productEan)), __LINE__);
        }
        if (is_null($productEan) || (is_array($productEan) && empty($productEan))) {
            unset($this->ProductEan);
        } else {
            $this->ProductEan = $productEan;
        }
        
        return $this;
    }
    /**
     * Get ProductId value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getProductId(): ?string
    {
        return isset($this->ProductId) ? $this->ProductId : null;
    }
    /**
     * Set ProductId value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $productId
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountOffer
     */
    public function setProductId(?string $productId = null): self
    {
        // validation for constraint: string
        if (!is_null($productId) && !is_string($productId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($productId, true), gettype($productId)), __LINE__);
        }
        if (is_null($productId) || (is_array($productId) && empty($productId))) {
            unset($this->ProductId);
        } else {
            $this->ProductId = $productId;
        }
        
        return $this;
    }
    /**
     * Get ProductPackagingUnit value
     * @return string|null
     */
    public function getProductPackagingUnit(): ?string
    {
        return $this->ProductPackagingUnit;
    }
    /**
     * Set ProductPackagingUnit value
     * @uses \SengentoBV\CdiscountMarketplaceSdk\Enums\CdiscountProductPackagingUnit::valueIsValid()
     * @uses \SengentoBV\CdiscountMarketplaceSdk\Enums\CdiscountProductPackagingUnit::getValidValues()
     * @throws InvalidArgumentException
     * @param string $productPackagingUnit
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountOffer
     */
    public function setProductPackagingUnit(?string $productPackagingUnit = null): self
    {
        // validation for constraint: enumeration
        if (!\SengentoBV\CdiscountMarketplaceSdk\Enums\CdiscountProductPackagingUnit::valueIsValid($productPackagingUnit)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \SengentoBV\CdiscountMarketplaceSdk\Enums\CdiscountProductPackagingUnit', is_array($productPackagingUnit) ? implode(', ', $productPackagingUnit) : var_export($productPackagingUnit, true), implode(', ', \SengentoBV\CdiscountMarketplaceSdk\Enums\CdiscountProductPackagingUnit::getValidValues())), __LINE__);
        }
        $this->ProductPackagingUnit = $productPackagingUnit;
        
        return $this;
    }
    /**
     * Get ProductPackagingUnitPrice value
     * @return float|null
     */
    public function getProductPackagingUnitPrice(): ?float
    {
        return $this->ProductPackagingUnitPrice;
    }
    /**
     * Set ProductPackagingUnitPrice value
     * @param float $productPackagingUnitPrice
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountOffer
     */
    public function setProductPackagingUnitPrice(?float $productPackagingUnitPrice = null): self
    {
        // validation for constraint: float
        if (!is_null($productPackagingUnitPrice) && !(is_float($productPackagingUnitPrice) || is_numeric($productPackagingUnitPrice))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($productPackagingUnitPrice, true), gettype($productPackagingUnitPrice)), __LINE__);
        }
        $this->ProductPackagingUnitPrice = $productPackagingUnitPrice;
        
        return $this;
    }
    /**
     * Get ProductPackagingValue value
     * @return float|null
     */
    public function getProductPackagingValue(): ?float
    {
        return $this->ProductPackagingValue;
    }
    /**
     * Set ProductPackagingValue value
     * @param float $productPackagingValue
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountOffer
     */
    public function setProductPackagingValue(?float $productPackagingValue = null): self
    {
        // validation for constraint: float
        if (!is_null($productPackagingValue) && !(is_float($productPackagingValue) || is_numeric($productPackagingValue))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($productPackagingValue, true), gettype($productPackagingValue)), __LINE__);
        }
        $this->ProductPackagingValue = $productPackagingValue;
        
        return $this;
    }
    /**
     * Get SellerProductId value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getSellerProductId(): ?string
    {
        return isset($this->SellerProductId) ? $this->SellerProductId : null;
    }
    /**
     * Set SellerProductId value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $sellerProductId
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountOffer
     */
    public function setSellerProductId(?string $sellerProductId = null): self
    {
        // validation for constraint: string
        if (!is_null($sellerProductId) && !is_string($sellerProductId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($sellerProductId, true), gettype($sellerProductId)), __LINE__);
        }
        if (is_null($sellerProductId) || (is_array($sellerProductId) && empty($sellerProductId))) {
            unset($this->SellerProductId);
        } else {
            $this->SellerProductId = $sellerProductId;
        }
        
        return $this;
    }
    /**
     * Get ShippingInformationList value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfShippingInformation|null
     */
    public function getShippingInformationList(): ?\SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfShippingInformation
    {
        return isset($this->ShippingInformationList) ? $this->ShippingInformationList : null;
    }
    /**
     * Set ShippingInformationList value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfShippingInformation $shippingInformationList
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountOffer
     */
    public function setShippingInformationList(?\SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfShippingInformation $shippingInformationList = null): self
    {
        if (is_null($shippingInformationList) || (is_array($shippingInformationList) && empty($shippingInformationList))) {
            unset($this->ShippingInformationList);
        } else {
            $this->ShippingInformationList = $shippingInformationList;
        }
        
        return $this;
    }
    /**
     * Get SoldOutManagement value
     * @return string|null
     */
    public function getSoldOutManagement(): ?string
    {
        return $this->SoldOutManagement;
    }
    /**
     * Set SoldOutManagement value
     * @uses \SengentoBV\CdiscountMarketplaceSdk\Enums\CdiscountSoldOutManagement::valueIsValid()
     * @uses \SengentoBV\CdiscountMarketplaceSdk\Enums\CdiscountSoldOutManagement::getValidValues()
     * @throws InvalidArgumentException
     * @param string $soldOutManagement
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountOffer
     */
    public function setSoldOutManagement(?string $soldOutManagement = null): self
    {
        // validation for constraint: enumeration
        if (!\SengentoBV\CdiscountMarketplaceSdk\Enums\CdiscountSoldOutManagement::valueIsValid($soldOutManagement)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \SengentoBV\CdiscountMarketplaceSdk\Enums\CdiscountSoldOutManagement', is_array($soldOutManagement) ? implode(', ', $soldOutManagement) : var_export($soldOutManagement, true), implode(', ', \SengentoBV\CdiscountMarketplaceSdk\Enums\CdiscountSoldOutManagement::getValidValues())), __LINE__);
        }
        $this->SoldOutManagement = $soldOutManagement;
        
        return $this;
    }
    /**
     * Get Stock value
     * @return int|null
     */
    public function getStock(): ?int
    {
        return $this->Stock;
    }
    /**
     * Set Stock value
     * @param int $stock
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountOffer
     */
    public function setStock(?int $stock = null): self
    {
        // validation for constraint: int
        if (!is_null($stock) && !(is_int($stock) || ctype_digit($stock))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($stock, true), gettype($stock)), __LINE__);
        }
        $this->Stock = $stock;
        
        return $this;
    }
    /**
     * Get StrikedPrice value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return float|null
     */
    public function getStrikedPrice(): ?float
    {
        return isset($this->StrikedPrice) ? $this->StrikedPrice : null;
    }
    /**
     * Set StrikedPrice value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param float $strikedPrice
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountOffer
     */
    public function setStrikedPrice(?float $strikedPrice = null): self
    {
        // validation for constraint: float
        if (!is_null($strikedPrice) && !(is_float($strikedPrice) || is_numeric($strikedPrice))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($strikedPrice, true), gettype($strikedPrice)), __LINE__);
        }
        if (is_null($strikedPrice) || (is_array($strikedPrice) && empty($strikedPrice))) {
            unset($this->StrikedPrice);
        } else {
            $this->StrikedPrice = $strikedPrice;
        }
        
        return $this;
    }
    /**
     * Get VatRate value
     * @return float|null
     */
    public function getVatRate(): ?float
    {
        return $this->VatRate;
    }
    /**
     * Set VatRate value
     * @param float $vatRate
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountOffer
     */
    public function setVatRate(?float $vatRate = null): self
    {
        // validation for constraint: float
        if (!is_null($vatRate) && !(is_float($vatRate) || is_numeric($vatRate))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($vatRate, true), gettype($vatRate)), __LINE__);
        }
        $this->VatRate = $vatRate;
        
        return $this;
    }
    /**
     * Get IsAvailable value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return bool|null
     */
    public function getIsAvailable(): ?bool
    {
        return isset($this->IsAvailable) ? $this->IsAvailable : null;
    }
    /**
     * Set IsAvailable value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param bool $isAvailable
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountOffer
     */
    public function setIsAvailable(?bool $isAvailable = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isAvailable) && !is_bool($isAvailable)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isAvailable, true), gettype($isAvailable)), __LINE__);
        }
        if (is_null($isAvailable) || (is_array($isAvailable) && empty($isAvailable))) {
            unset($this->IsAvailable);
        } else {
            $this->IsAvailable = $isAvailable;
        }
        
        return $this;
    }
    /**
     * Get IsBestOffer value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return bool|null
     */
    public function getIsBestOffer(): ?bool
    {
        return isset($this->IsBestOffer) ? $this->IsBestOffer : null;
    }
    /**
     * Set IsBestOffer value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param bool $isBestOffer
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountOffer
     */
    public function setIsBestOffer(?bool $isBestOffer = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isBestOffer) && !is_bool($isBestOffer)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isBestOffer, true), gettype($isBestOffer)), __LINE__);
        }
        if (is_null($isBestOffer) || (is_array($isBestOffer) && empty($isBestOffer))) {
            unset($this->IsBestOffer);
        } else {
            $this->IsBestOffer = $isBestOffer;
        }
        
        return $this;
    }
    /**
     * Get IsWithCommercialOperation value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return bool|null
     */
    public function getIsWithCommercialOperation(): ?bool
    {
        return isset($this->IsWithCommercialOperation) ? $this->IsWithCommercialOperation : null;
    }
    /**
     * Set IsWithCommercialOperation value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param bool $isWithCommercialOperation
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountOffer
     */
    public function setIsWithCommercialOperation(?bool $isWithCommercialOperation = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isWithCommercialOperation) && !is_bool($isWithCommercialOperation)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isWithCommercialOperation, true), gettype($isWithCommercialOperation)), __LINE__);
        }
        if (is_null($isWithCommercialOperation) || (is_array($isWithCommercialOperation) && empty($isWithCommercialOperation))) {
            unset($this->IsWithCommercialOperation);
        } else {
            $this->IsWithCommercialOperation = $isWithCommercialOperation;
        }
        
        return $this;
    }
    /**
     * Get Seller value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountSeller|null
     */
    public function getSeller(): ?\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountSeller
    {
        return isset($this->Seller) ? $this->Seller : null;
    }
    /**
     * Set Seller value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountSeller $seller
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountOffer
     */
    public function setSeller(?\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountSeller $seller = null): self
    {
        if (is_null($seller) || (is_array($seller) && empty($seller))) {
            unset($this->Seller);
        } else {
            $this->Seller = $seller;
        }
        
        return $this;
    }
    /**
     * Get Shipping value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountShipping|null
     */
    public function getShipping(): ?\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountShipping
    {
        return isset($this->Shipping) ? $this->Shipping : null;
    }
    /**
     * Set Shipping value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountShipping $shipping
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountOffer
     */
    public function setShipping(?\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountShipping $shipping = null): self
    {
        if (is_null($shipping) || (is_array($shipping) && empty($shipping))) {
            unset($this->Shipping);
        } else {
            $this->Shipping = $shipping;
        }
        
        return $this;
    }
}
