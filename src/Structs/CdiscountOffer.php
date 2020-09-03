<?php

namespace SengentoBV\CdiscountMarketplaceSdk\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

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
     * @var float
     */
    public $BestShippingCharges;
    /**
     * The Comments
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $Comments;
    /**
     * The CreationDate
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $CreationDate;
    /**
     * The DeaTax
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var float
     */
    public $DeaTax;
    /**
     * The DiscountList
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfDiscountComponent
     */
    public $DiscountList;
    /**
     * The EcoTax
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var float
     */
    public $EcoTax;
    /**
     * The IntegrationPrice
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var float
     */
    public $IntegrationPrice;
    /**
     * The IsCDAV
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $IsCDAV;
    /**
     * The LastUpdateDate
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $LastUpdateDate;
    /**
     * The LogisticMode
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $LogisticMode;
    /**
     * The LogisticsManagement
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $LogisticsManagement;
    /**
     * The MinimumPriceForPriceAlignment
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var float
     */
    public $MinimumPriceForPriceAlignment;
    /**
     * The OfferBenchMark
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountOfferPriceBenchMark
     */
    public $OfferBenchMark;
    /**
     * The OfferPoolList
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfOfferPool
     */
    public $OfferPoolList;
    /**
     * The OfferState
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $OfferState;
    /**
     * The ParentProductId
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $ParentProductId;
    /**
     * The Price
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var float
     */
    public $Price;
    /**
     * The PriceMustBeAligned
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $PriceMustBeAligned;
    /**
     * The ProductCondition
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $ProductCondition;
    /**
     * The ProductEan
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $ProductEan;
    /**
     * The ProductId
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $ProductId;
    /**
     * The ProductPackagingUnit
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $ProductPackagingUnit;
    /**
     * The ProductPackagingUnitPrice
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var float
     */
    public $ProductPackagingUnitPrice;
    /**
     * The ProductPackagingValue
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var float
     */
    public $ProductPackagingValue;
    /**
     * The SellerProductId
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $SellerProductId;
    /**
     * The ShippingInformationList
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfShippingInformation
     */
    public $ShippingInformationList;
    /**
     * The SoldOutManagement
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $SoldOutManagement;
    /**
     * The Stock
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $Stock;
    /**
     * The StrikedPrice
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var float
     */
    public $StrikedPrice;
    /**
     * The VatRate
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var float
     */
    public $VatRate;
    /**
     * The IsAvailable
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var bool
     */
    public $IsAvailable;
    /**
     * The IsBestOffer
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var bool
     */
    public $IsBestOffer;
    /**
     * The IsWithCommercialOperation
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var bool
     */
    public $IsWithCommercialOperation;
    /**
     * The Seller
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountSeller
     */
    public $Seller;
    /**
     * The Shipping
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountShipping
     */
    public $Shipping;
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
    public function __construct($bestShippingCharges = null, $comments = null, $creationDate = null, $deaTax = null, \SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfDiscountComponent $discountList = null, $ecoTax = null, $integrationPrice = null, $isCDAV = null, $lastUpdateDate = null, $logisticMode = null, $logisticsManagement = null, $minimumPriceForPriceAlignment = null, \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountOfferPriceBenchMark $offerBenchMark = null, \SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfOfferPool $offerPoolList = null, $offerState = null, $parentProductId = null, $price = null, $priceMustBeAligned = null, $productCondition = null, $productEan = null, $productId = null, $productPackagingUnit = null, $productPackagingUnitPrice = null, $productPackagingValue = null, $sellerProductId = null, \SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfShippingInformation $shippingInformationList = null, $soldOutManagement = null, $stock = null, $strikedPrice = null, $vatRate = null, $isAvailable = null, $isBestOffer = null, $isWithCommercialOperation = null, \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountSeller $seller = null, \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountShipping $shipping = null)
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
    public function getBestShippingCharges()
    {
        return $this->BestShippingCharges;
    }
    /**
     * Set BestShippingCharges value
     * @param float $bestShippingCharges
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountOffer
     */
    public function setBestShippingCharges($bestShippingCharges = null)
    {
        // validation for constraint: float
        if (!is_null($bestShippingCharges) && !(is_float($bestShippingCharges) || is_numeric($bestShippingCharges))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($bestShippingCharges, true), gettype($bestShippingCharges)), __LINE__);
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
    public function getComments()
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
    public function setComments($comments = null)
    {
        // validation for constraint: string
        if (!is_null($comments) && !is_string($comments)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($comments, true), gettype($comments)), __LINE__);
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
    public function getCreationDate()
    {
        return $this->CreationDate;
    }
    /**
     * Set CreationDate value
     * @param string $creationDate
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountOffer
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
     * Get DeaTax value
     * @return float|null
     */
    public function getDeaTax()
    {
        return $this->DeaTax;
    }
    /**
     * Set DeaTax value
     * @param float $deaTax
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountOffer
     */
    public function setDeaTax($deaTax = null)
    {
        // validation for constraint: float
        if (!is_null($deaTax) && !(is_float($deaTax) || is_numeric($deaTax))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($deaTax, true), gettype($deaTax)), __LINE__);
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
    public function getDiscountList()
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
    public function setDiscountList(\SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfDiscountComponent $discountList = null)
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
    public function getEcoTax()
    {
        return $this->EcoTax;
    }
    /**
     * Set EcoTax value
     * @param float $ecoTax
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountOffer
     */
    public function setEcoTax($ecoTax = null)
    {
        // validation for constraint: float
        if (!is_null($ecoTax) && !(is_float($ecoTax) || is_numeric($ecoTax))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($ecoTax, true), gettype($ecoTax)), __LINE__);
        }
        $this->EcoTax = $ecoTax;
        return $this;
    }
    /**
     * Get IntegrationPrice value
     * @return float|null
     */
    public function getIntegrationPrice()
    {
        return $this->IntegrationPrice;
    }
    /**
     * Set IntegrationPrice value
     * @param float $integrationPrice
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountOffer
     */
    public function setIntegrationPrice($integrationPrice = null)
    {
        // validation for constraint: float
        if (!is_null($integrationPrice) && !(is_float($integrationPrice) || is_numeric($integrationPrice))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($integrationPrice, true), gettype($integrationPrice)), __LINE__);
        }
        $this->IntegrationPrice = $integrationPrice;
        return $this;
    }
    /**
     * Get IsCDAV value
     * @return bool|null
     */
    public function getIsCDAV()
    {
        return $this->IsCDAV;
    }
    /**
     * Set IsCDAV value
     * @param bool $isCDAV
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountOffer
     */
    public function setIsCDAV($isCDAV = null)
    {
        // validation for constraint: boolean
        if (!is_null($isCDAV) && !is_bool($isCDAV)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isCDAV, true), gettype($isCDAV)), __LINE__);
        }
        $this->IsCDAV = $isCDAV;
        return $this;
    }
    /**
     * Get LastUpdateDate value
     * @return string|null
     */
    public function getLastUpdateDate()
    {
        return $this->LastUpdateDate;
    }
    /**
     * Set LastUpdateDate value
     * @param string $lastUpdateDate
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountOffer
     */
    public function setLastUpdateDate($lastUpdateDate = null)
    {
        // validation for constraint: string
        if (!is_null($lastUpdateDate) && !is_string($lastUpdateDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($lastUpdateDate, true), gettype($lastUpdateDate)), __LINE__);
        }
        $this->LastUpdateDate = $lastUpdateDate;
        return $this;
    }
    /**
     * Get LogisticMode value
     * @return string|null
     */
    public function getLogisticMode()
    {
        return $this->LogisticMode;
    }
    /**
     * Set LogisticMode value
     * @uses \SengentoBV\CdiscountMarketplaceSdk\Enums\CdiscountLogisticMode::valueIsValid()
     * @uses \SengentoBV\CdiscountMarketplaceSdk\Enums\CdiscountLogisticMode::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $logisticMode
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountOffer
     */
    public function setLogisticMode($logisticMode = null)
    {
        // validation for constraint: enumeration
        if (!\SengentoBV\CdiscountMarketplaceSdk\Enums\CdiscountLogisticMode::valueIsValid($logisticMode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \SengentoBV\CdiscountMarketplaceSdk\Enums\CdiscountLogisticMode', is_array($logisticMode) ? implode(', ', $logisticMode) : var_export($logisticMode, true), implode(', ', \SengentoBV\CdiscountMarketplaceSdk\Enums\CdiscountLogisticMode::getValidValues())), __LINE__);
        }
        $this->LogisticMode = $logisticMode;
        return $this;
    }
    /**
     * Get LogisticsManagement value
     * @return string|null
     */
    public function getLogisticsManagement()
    {
        return $this->LogisticsManagement;
    }
    /**
     * Set LogisticsManagement value
     * @uses \SengentoBV\CdiscountMarketplaceSdk\Enums\CdiscountLogisticsManagement::valueIsValid()
     * @uses \SengentoBV\CdiscountMarketplaceSdk\Enums\CdiscountLogisticsManagement::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $logisticsManagement
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountOffer
     */
    public function setLogisticsManagement($logisticsManagement = null)
    {
        // validation for constraint: enumeration
        if (!\SengentoBV\CdiscountMarketplaceSdk\Enums\CdiscountLogisticsManagement::valueIsValid($logisticsManagement)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \SengentoBV\CdiscountMarketplaceSdk\Enums\CdiscountLogisticsManagement', is_array($logisticsManagement) ? implode(', ', $logisticsManagement) : var_export($logisticsManagement, true), implode(', ', \SengentoBV\CdiscountMarketplaceSdk\Enums\CdiscountLogisticsManagement::getValidValues())), __LINE__);
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
    public function getMinimumPriceForPriceAlignment()
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
    public function setMinimumPriceForPriceAlignment($minimumPriceForPriceAlignment = null)
    {
        // validation for constraint: float
        if (!is_null($minimumPriceForPriceAlignment) && !(is_float($minimumPriceForPriceAlignment) || is_numeric($minimumPriceForPriceAlignment))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($minimumPriceForPriceAlignment, true), gettype($minimumPriceForPriceAlignment)), __LINE__);
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
    public function getOfferBenchMark()
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
    public function setOfferBenchMark(\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountOfferPriceBenchMark $offerBenchMark = null)
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
    public function getOfferPoolList()
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
    public function setOfferPoolList(\SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfOfferPool $offerPoolList = null)
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
    public function getOfferState()
    {
        return $this->OfferState;
    }
    /**
     * Set OfferState value
     * @uses \SengentoBV\CdiscountMarketplaceSdk\Enums\CdiscountOfferStateEnum::valueIsValid()
     * @uses \SengentoBV\CdiscountMarketplaceSdk\Enums\CdiscountOfferStateEnum::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $offerState
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountOffer
     */
    public function setOfferState($offerState = null)
    {
        // validation for constraint: enumeration
        if (!\SengentoBV\CdiscountMarketplaceSdk\Enums\CdiscountOfferStateEnum::valueIsValid($offerState)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \SengentoBV\CdiscountMarketplaceSdk\Enums\CdiscountOfferStateEnum', is_array($offerState) ? implode(', ', $offerState) : var_export($offerState, true), implode(', ', \SengentoBV\CdiscountMarketplaceSdk\Enums\CdiscountOfferStateEnum::getValidValues())), __LINE__);
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
    public function getParentProductId()
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
    public function setParentProductId($parentProductId = null)
    {
        // validation for constraint: string
        if (!is_null($parentProductId) && !is_string($parentProductId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($parentProductId, true), gettype($parentProductId)), __LINE__);
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
    public function getPrice()
    {
        return $this->Price;
    }
    /**
     * Set Price value
     * @param float $price
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountOffer
     */
    public function setPrice($price = null)
    {
        // validation for constraint: float
        if (!is_null($price) && !(is_float($price) || is_numeric($price))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($price, true), gettype($price)), __LINE__);
        }
        $this->Price = $price;
        return $this;
    }
    /**
     * Get PriceMustBeAligned value
     * @return string|null
     */
    public function getPriceMustBeAligned()
    {
        return $this->PriceMustBeAligned;
    }
    /**
     * Set PriceMustBeAligned value
     * @uses \SengentoBV\CdiscountMarketplaceSdk\Enums\CdiscountPriceAlignmentAction::valueIsValid()
     * @uses \SengentoBV\CdiscountMarketplaceSdk\Enums\CdiscountPriceAlignmentAction::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $priceMustBeAligned
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountOffer
     */
    public function setPriceMustBeAligned($priceMustBeAligned = null)
    {
        // validation for constraint: enumeration
        if (!\SengentoBV\CdiscountMarketplaceSdk\Enums\CdiscountPriceAlignmentAction::valueIsValid($priceMustBeAligned)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \SengentoBV\CdiscountMarketplaceSdk\Enums\CdiscountPriceAlignmentAction', is_array($priceMustBeAligned) ? implode(', ', $priceMustBeAligned) : var_export($priceMustBeAligned, true), implode(', ', \SengentoBV\CdiscountMarketplaceSdk\Enums\CdiscountPriceAlignmentAction::getValidValues())), __LINE__);
        }
        $this->PriceMustBeAligned = $priceMustBeAligned;
        return $this;
    }
    /**
     * Get ProductCondition value
     * @return string|null
     */
    public function getProductCondition()
    {
        return $this->ProductCondition;
    }
    /**
     * Set ProductCondition value
     * @uses \SengentoBV\CdiscountMarketplaceSdk\Enums\CdiscountProductConditionEnum::valueIsValid()
     * @uses \SengentoBV\CdiscountMarketplaceSdk\Enums\CdiscountProductConditionEnum::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $productCondition
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountOffer
     */
    public function setProductCondition($productCondition = null)
    {
        // validation for constraint: enumeration
        if (!\SengentoBV\CdiscountMarketplaceSdk\Enums\CdiscountProductConditionEnum::valueIsValid($productCondition)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \SengentoBV\CdiscountMarketplaceSdk\Enums\CdiscountProductConditionEnum', is_array($productCondition) ? implode(', ', $productCondition) : var_export($productCondition, true), implode(', ', \SengentoBV\CdiscountMarketplaceSdk\Enums\CdiscountProductConditionEnum::getValidValues())), __LINE__);
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
    public function getProductEan()
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
    public function setProductEan($productEan = null)
    {
        // validation for constraint: string
        if (!is_null($productEan) && !is_string($productEan)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($productEan, true), gettype($productEan)), __LINE__);
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
    public function getProductId()
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
    public function setProductId($productId = null)
    {
        // validation for constraint: string
        if (!is_null($productId) && !is_string($productId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($productId, true), gettype($productId)), __LINE__);
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
    public function getProductPackagingUnit()
    {
        return $this->ProductPackagingUnit;
    }
    /**
     * Set ProductPackagingUnit value
     * @uses \SengentoBV\CdiscountMarketplaceSdk\Enums\CdiscountProductPackagingUnit::valueIsValid()
     * @uses \SengentoBV\CdiscountMarketplaceSdk\Enums\CdiscountProductPackagingUnit::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $productPackagingUnit
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountOffer
     */
    public function setProductPackagingUnit($productPackagingUnit = null)
    {
        // validation for constraint: enumeration
        if (!\SengentoBV\CdiscountMarketplaceSdk\Enums\CdiscountProductPackagingUnit::valueIsValid($productPackagingUnit)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \SengentoBV\CdiscountMarketplaceSdk\Enums\CdiscountProductPackagingUnit', is_array($productPackagingUnit) ? implode(', ', $productPackagingUnit) : var_export($productPackagingUnit, true), implode(', ', \SengentoBV\CdiscountMarketplaceSdk\Enums\CdiscountProductPackagingUnit::getValidValues())), __LINE__);
        }
        $this->ProductPackagingUnit = $productPackagingUnit;
        return $this;
    }
    /**
     * Get ProductPackagingUnitPrice value
     * @return float|null
     */
    public function getProductPackagingUnitPrice()
    {
        return $this->ProductPackagingUnitPrice;
    }
    /**
     * Set ProductPackagingUnitPrice value
     * @param float $productPackagingUnitPrice
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountOffer
     */
    public function setProductPackagingUnitPrice($productPackagingUnitPrice = null)
    {
        // validation for constraint: float
        if (!is_null($productPackagingUnitPrice) && !(is_float($productPackagingUnitPrice) || is_numeric($productPackagingUnitPrice))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($productPackagingUnitPrice, true), gettype($productPackagingUnitPrice)), __LINE__);
        }
        $this->ProductPackagingUnitPrice = $productPackagingUnitPrice;
        return $this;
    }
    /**
     * Get ProductPackagingValue value
     * @return float|null
     */
    public function getProductPackagingValue()
    {
        return $this->ProductPackagingValue;
    }
    /**
     * Set ProductPackagingValue value
     * @param float $productPackagingValue
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountOffer
     */
    public function setProductPackagingValue($productPackagingValue = null)
    {
        // validation for constraint: float
        if (!is_null($productPackagingValue) && !(is_float($productPackagingValue) || is_numeric($productPackagingValue))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($productPackagingValue, true), gettype($productPackagingValue)), __LINE__);
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
    public function getSellerProductId()
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
    public function setSellerProductId($sellerProductId = null)
    {
        // validation for constraint: string
        if (!is_null($sellerProductId) && !is_string($sellerProductId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($sellerProductId, true), gettype($sellerProductId)), __LINE__);
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
    public function getShippingInformationList()
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
    public function setShippingInformationList(\SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfShippingInformation $shippingInformationList = null)
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
    public function getSoldOutManagement()
    {
        return $this->SoldOutManagement;
    }
    /**
     * Set SoldOutManagement value
     * @uses \SengentoBV\CdiscountMarketplaceSdk\Enums\CdiscountSoldOutManagement::valueIsValid()
     * @uses \SengentoBV\CdiscountMarketplaceSdk\Enums\CdiscountSoldOutManagement::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $soldOutManagement
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountOffer
     */
    public function setSoldOutManagement($soldOutManagement = null)
    {
        // validation for constraint: enumeration
        if (!\SengentoBV\CdiscountMarketplaceSdk\Enums\CdiscountSoldOutManagement::valueIsValid($soldOutManagement)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \SengentoBV\CdiscountMarketplaceSdk\Enums\CdiscountSoldOutManagement', is_array($soldOutManagement) ? implode(', ', $soldOutManagement) : var_export($soldOutManagement, true), implode(', ', \SengentoBV\CdiscountMarketplaceSdk\Enums\CdiscountSoldOutManagement::getValidValues())), __LINE__);
        }
        $this->SoldOutManagement = $soldOutManagement;
        return $this;
    }
    /**
     * Get Stock value
     * @return int|null
     */
    public function getStock()
    {
        return $this->Stock;
    }
    /**
     * Set Stock value
     * @param int $stock
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountOffer
     */
    public function setStock($stock = null)
    {
        // validation for constraint: int
        if (!is_null($stock) && !(is_int($stock) || ctype_digit($stock))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($stock, true), gettype($stock)), __LINE__);
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
    public function getStrikedPrice()
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
    public function setStrikedPrice($strikedPrice = null)
    {
        // validation for constraint: float
        if (!is_null($strikedPrice) && !(is_float($strikedPrice) || is_numeric($strikedPrice))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($strikedPrice, true), gettype($strikedPrice)), __LINE__);
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
    public function getVatRate()
    {
        return $this->VatRate;
    }
    /**
     * Set VatRate value
     * @param float $vatRate
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountOffer
     */
    public function setVatRate($vatRate = null)
    {
        // validation for constraint: float
        if (!is_null($vatRate) && !(is_float($vatRate) || is_numeric($vatRate))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($vatRate, true), gettype($vatRate)), __LINE__);
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
    public function getIsAvailable()
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
    public function setIsAvailable($isAvailable = null)
    {
        // validation for constraint: boolean
        if (!is_null($isAvailable) && !is_bool($isAvailable)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isAvailable, true), gettype($isAvailable)), __LINE__);
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
    public function getIsBestOffer()
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
    public function setIsBestOffer($isBestOffer = null)
    {
        // validation for constraint: boolean
        if (!is_null($isBestOffer) && !is_bool($isBestOffer)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isBestOffer, true), gettype($isBestOffer)), __LINE__);
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
    public function getIsWithCommercialOperation()
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
    public function setIsWithCommercialOperation($isWithCommercialOperation = null)
    {
        // validation for constraint: boolean
        if (!is_null($isWithCommercialOperation) && !is_bool($isWithCommercialOperation)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isWithCommercialOperation, true), gettype($isWithCommercialOperation)), __LINE__);
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
    public function getSeller()
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
    public function setSeller(\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountSeller $seller = null)
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
    public function getShipping()
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
    public function setShipping(\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountShipping $shipping = null)
    {
        if (is_null($shipping) || (is_array($shipping) && empty($shipping))) {
            unset($this->Shipping);
        } else {
            $this->Shipping = $shipping;
        }
        return $this;
    }
}
