<?php

namespace SengentoBV\CdiscountMarketplaceSdk\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for OfferProduct Structs
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:OfferProduct
 * @package Cdiscount
 * @subpackage Structs
 */
class CdiscountOfferProduct extends AbstractStructBase
{
    /**
     * The BestOffer
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountOfferPriceBenchMark
     */
    public $BestOffer;
    /**
     * The BestOfferId
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $BestOfferId;
    /**
     * The BestOfferShippingCharges
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var float
     */
    public $BestOfferShippingCharges;
    /**
     * The CatalogId
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $CatalogId;
    /**
     * The IsFod
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $IsFod;
    /**
     * The LastUpdateDate
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $LastUpdateDate;
    /**
     * The OfferId
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $OfferId;
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
     * The Price
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var float
     */
    public $Price;
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
     * The ProductImageUrl
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $ProductImageUrl;
    /**
     * The ProductName
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $ProductName;
    /**
     * The SellerProductId
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $SellerProductId;
    /**
     * The ShippingCharges
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var float
     */
    public $ShippingCharges;
    /**
     * The Stock
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $Stock;
    /**
     * The SupplyMode
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $SupplyMode;
    /**
     * Constructor method for OfferProduct
     * @uses CdiscountOfferProduct::setBestOffer()
     * @uses CdiscountOfferProduct::setBestOfferId()
     * @uses CdiscountOfferProduct::setBestOfferShippingCharges()
     * @uses CdiscountOfferProduct::setCatalogId()
     * @uses CdiscountOfferProduct::setIsFod()
     * @uses CdiscountOfferProduct::setLastUpdateDate()
     * @uses CdiscountOfferProduct::setOfferId()
     * @uses CdiscountOfferProduct::setOfferPoolList()
     * @uses CdiscountOfferProduct::setOfferState()
     * @uses CdiscountOfferProduct::setPrice()
     * @uses CdiscountOfferProduct::setProductCondition()
     * @uses CdiscountOfferProduct::setProductEan()
     * @uses CdiscountOfferProduct::setProductId()
     * @uses CdiscountOfferProduct::setProductImageUrl()
     * @uses CdiscountOfferProduct::setProductName()
     * @uses CdiscountOfferProduct::setSellerProductId()
     * @uses CdiscountOfferProduct::setShippingCharges()
     * @uses CdiscountOfferProduct::setStock()
     * @uses CdiscountOfferProduct::setSupplyMode()
     * @param \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountOfferPriceBenchMark $bestOffer
     * @param int $bestOfferId
     * @param float $bestOfferShippingCharges
     * @param int $catalogId
     * @param bool $isFod
     * @param string $lastUpdateDate
     * @param int $offerId
     * @param \SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfOfferPool $offerPoolList
     * @param string $offerState
     * @param float $price
     * @param string $productCondition
     * @param string $productEan
     * @param string $productId
     * @param string $productImageUrl
     * @param string $productName
     * @param string $sellerProductId
     * @param float $shippingCharges
     * @param int $stock
     * @param string $supplyMode
     */
    public function __construct(\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountOfferPriceBenchMark $bestOffer = null, $bestOfferId = null, $bestOfferShippingCharges = null, $catalogId = null, $isFod = null, $lastUpdateDate = null, $offerId = null, \SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfOfferPool $offerPoolList = null, $offerState = null, $price = null, $productCondition = null, $productEan = null, $productId = null, $productImageUrl = null, $productName = null, $sellerProductId = null, $shippingCharges = null, $stock = null, $supplyMode = null)
    {
        $this
            ->setBestOffer($bestOffer)
            ->setBestOfferId($bestOfferId)
            ->setBestOfferShippingCharges($bestOfferShippingCharges)
            ->setCatalogId($catalogId)
            ->setIsFod($isFod)
            ->setLastUpdateDate($lastUpdateDate)
            ->setOfferId($offerId)
            ->setOfferPoolList($offerPoolList)
            ->setOfferState($offerState)
            ->setPrice($price)
            ->setProductCondition($productCondition)
            ->setProductEan($productEan)
            ->setProductId($productId)
            ->setProductImageUrl($productImageUrl)
            ->setProductName($productName)
            ->setSellerProductId($sellerProductId)
            ->setShippingCharges($shippingCharges)
            ->setStock($stock)
            ->setSupplyMode($supplyMode);
    }
    /**
     * Get BestOffer value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountOfferPriceBenchMark|null
     */
    public function getBestOffer()
    {
        return isset($this->BestOffer) ? $this->BestOffer : null;
    }
    /**
     * Set BestOffer value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountOfferPriceBenchMark $bestOffer
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountOfferProduct
     */
    public function setBestOffer(\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountOfferPriceBenchMark $bestOffer = null)
    {
        if (is_null($bestOffer) || (is_array($bestOffer) && empty($bestOffer))) {
            unset($this->BestOffer);
        } else {
            $this->BestOffer = $bestOffer;
        }
        return $this;
    }
    /**
     * Get BestOfferId value
     * @return int|null
     */
    public function getBestOfferId()
    {
        return $this->BestOfferId;
    }
    /**
     * Set BestOfferId value
     * @param int $bestOfferId
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountOfferProduct
     */
    public function setBestOfferId($bestOfferId = null)
    {
        // validation for constraint: int
        if (!is_null($bestOfferId) && !(is_int($bestOfferId) || ctype_digit($bestOfferId))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($bestOfferId, true), gettype($bestOfferId)), __LINE__);
        }
        $this->BestOfferId = $bestOfferId;
        return $this;
    }
    /**
     * Get BestOfferShippingCharges value
     * @return float|null
     */
    public function getBestOfferShippingCharges()
    {
        return $this->BestOfferShippingCharges;
    }
    /**
     * Set BestOfferShippingCharges value
     * @param float $bestOfferShippingCharges
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountOfferProduct
     */
    public function setBestOfferShippingCharges($bestOfferShippingCharges = null)
    {
        // validation for constraint: float
        if (!is_null($bestOfferShippingCharges) && !(is_float($bestOfferShippingCharges) || is_numeric($bestOfferShippingCharges))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($bestOfferShippingCharges, true), gettype($bestOfferShippingCharges)), __LINE__);
        }
        $this->BestOfferShippingCharges = $bestOfferShippingCharges;
        return $this;
    }
    /**
     * Get CatalogId value
     * @return int|null
     */
    public function getCatalogId()
    {
        return $this->CatalogId;
    }
    /**
     * Set CatalogId value
     * @param int $catalogId
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountOfferProduct
     */
    public function setCatalogId($catalogId = null)
    {
        // validation for constraint: int
        if (!is_null($catalogId) && !(is_int($catalogId) || ctype_digit($catalogId))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($catalogId, true), gettype($catalogId)), __LINE__);
        }
        $this->CatalogId = $catalogId;
        return $this;
    }
    /**
     * Get IsFod value
     * @return bool|null
     */
    public function getIsFod()
    {
        return $this->IsFod;
    }
    /**
     * Set IsFod value
     * @param bool $isFod
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountOfferProduct
     */
    public function setIsFod($isFod = null)
    {
        // validation for constraint: boolean
        if (!is_null($isFod) && !is_bool($isFod)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isFod, true), gettype($isFod)), __LINE__);
        }
        $this->IsFod = $isFod;
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
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountOfferProduct
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
     * Get OfferId value
     * @return int|null
     */
    public function getOfferId()
    {
        return $this->OfferId;
    }
    /**
     * Set OfferId value
     * @param int $offerId
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountOfferProduct
     */
    public function setOfferId($offerId = null)
    {
        // validation for constraint: int
        if (!is_null($offerId) && !(is_int($offerId) || ctype_digit($offerId))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($offerId, true), gettype($offerId)), __LINE__);
        }
        $this->OfferId = $offerId;
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
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountOfferProduct
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
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountOfferProduct
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
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountOfferProduct
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
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountOfferProduct
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
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountOfferProduct
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
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountOfferProduct
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
     * Get ProductImageUrl value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getProductImageUrl()
    {
        return isset($this->ProductImageUrl) ? $this->ProductImageUrl : null;
    }
    /**
     * Set ProductImageUrl value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $productImageUrl
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountOfferProduct
     */
    public function setProductImageUrl($productImageUrl = null)
    {
        // validation for constraint: string
        if (!is_null($productImageUrl) && !is_string($productImageUrl)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($productImageUrl, true), gettype($productImageUrl)), __LINE__);
        }
        if (is_null($productImageUrl) || (is_array($productImageUrl) && empty($productImageUrl))) {
            unset($this->ProductImageUrl);
        } else {
            $this->ProductImageUrl = $productImageUrl;
        }
        return $this;
    }
    /**
     * Get ProductName value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getProductName()
    {
        return isset($this->ProductName) ? $this->ProductName : null;
    }
    /**
     * Set ProductName value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $productName
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountOfferProduct
     */
    public function setProductName($productName = null)
    {
        // validation for constraint: string
        if (!is_null($productName) && !is_string($productName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($productName, true), gettype($productName)), __LINE__);
        }
        if (is_null($productName) || (is_array($productName) && empty($productName))) {
            unset($this->ProductName);
        } else {
            $this->ProductName = $productName;
        }
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
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountOfferProduct
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
     * Get ShippingCharges value
     * @return float|null
     */
    public function getShippingCharges()
    {
        return $this->ShippingCharges;
    }
    /**
     * Set ShippingCharges value
     * @param float $shippingCharges
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountOfferProduct
     */
    public function setShippingCharges($shippingCharges = null)
    {
        // validation for constraint: float
        if (!is_null($shippingCharges) && !(is_float($shippingCharges) || is_numeric($shippingCharges))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($shippingCharges, true), gettype($shippingCharges)), __LINE__);
        }
        $this->ShippingCharges = $shippingCharges;
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
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountOfferProduct
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
     * Get SupplyMode value
     * @return string|null
     */
    public function getSupplyMode()
    {
        return $this->SupplyMode;
    }
    /**
     * Set SupplyMode value
     * @uses \SengentoBV\CdiscountMarketplaceSdk\Enums\CdiscountSupplyModeType::valueIsValid()
     * @uses \SengentoBV\CdiscountMarketplaceSdk\Enums\CdiscountSupplyModeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $supplyMode
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountOfferProduct
     */
    public function setSupplyMode($supplyMode = null)
    {
        // validation for constraint: enumeration
        if (!\SengentoBV\CdiscountMarketplaceSdk\Enums\CdiscountSupplyModeType::valueIsValid($supplyMode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \SengentoBV\CdiscountMarketplaceSdk\Enums\CdiscountSupplyModeType', is_array($supplyMode) ? implode(', ', $supplyMode) : var_export($supplyMode, true), implode(', ', \SengentoBV\CdiscountMarketplaceSdk\Enums\CdiscountSupplyModeType::getValidValues())), __LINE__);
        }
        $this->SupplyMode = $supplyMode;
        return $this;
    }
}
