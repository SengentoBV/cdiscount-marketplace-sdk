<?php

declare(strict_types=1);

namespace SengentoBV\CdiscountMarketplaceSdk\Structs;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SellerDeal Structs
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:SellerDeal
 * @package Cdiscount
 * @subpackage Structs
 */
class CdiscountSellerDeal extends AbstractStructBase
{
    /**
     * The Category
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $Category = null;
    /**
     * The CurrentPrice
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var float|null
     */
    protected ?float $CurrentPrice = null;
    /**
     * The CurrentRate
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var float|null
     */
    protected ?float $CurrentRate = null;
    /**
     * The DealId
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $DealId = null;
    /**
     * The Ean
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $Ean = null;
    /**
     * The EndDate
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountDateTimeOffset|null
     */
    protected ?\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountDateTimeOffset $EndDate = null;
    /**
     * The Label
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $Label = null;
    /**
     * The MaxPrice
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var float|null
     */
    protected ?float $MaxPrice = null;
    /**
     * The MinPrice
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var float|null
     */
    protected ?float $MinPrice = null;
    /**
     * The OfferId
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $OfferId = null;
    /**
     * The ProductId
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $ProductId = null;
    /**
     * The ProposedRate
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var float|null
     */
    protected ?float $ProposedRate = null;
    /**
     * The SellerId
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $SellerId = null;
    /**
     * The SellerProductId
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $SellerProductId = null;
    /**
     * The StartDate
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountDateTimeOffset|null
     */
    protected ?\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountDateTimeOffset $StartDate = null;
    /**
     * The Status
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $Status = null;
    /**
     * The StatusCode
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $StatusCode = null;
    /**
     * Constructor method for SellerDeal
     * @uses CdiscountSellerDeal::setCategory()
     * @uses CdiscountSellerDeal::setCurrentPrice()
     * @uses CdiscountSellerDeal::setCurrentRate()
     * @uses CdiscountSellerDeal::setDealId()
     * @uses CdiscountSellerDeal::setEan()
     * @uses CdiscountSellerDeal::setEndDate()
     * @uses CdiscountSellerDeal::setLabel()
     * @uses CdiscountSellerDeal::setMaxPrice()
     * @uses CdiscountSellerDeal::setMinPrice()
     * @uses CdiscountSellerDeal::setOfferId()
     * @uses CdiscountSellerDeal::setProductId()
     * @uses CdiscountSellerDeal::setProposedRate()
     * @uses CdiscountSellerDeal::setSellerId()
     * @uses CdiscountSellerDeal::setSellerProductId()
     * @uses CdiscountSellerDeal::setStartDate()
     * @uses CdiscountSellerDeal::setStatus()
     * @uses CdiscountSellerDeal::setStatusCode()
     * @param string $category
     * @param float $currentPrice
     * @param float $currentRate
     * @param int $dealId
     * @param string $ean
     * @param \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountDateTimeOffset $endDate
     * @param string $label
     * @param float $maxPrice
     * @param float $minPrice
     * @param int $offerId
     * @param string $productId
     * @param float $proposedRate
     * @param int $sellerId
     * @param string $sellerProductId
     * @param \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountDateTimeOffset $startDate
     * @param int $status
     * @param string $statusCode
     */
    public function __construct(?string $category = null, ?float $currentPrice = null, ?float $currentRate = null, ?int $dealId = null, ?string $ean = null, ?\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountDateTimeOffset $endDate = null, ?string $label = null, ?float $maxPrice = null, ?float $minPrice = null, ?int $offerId = null, ?string $productId = null, ?float $proposedRate = null, ?int $sellerId = null, ?string $sellerProductId = null, ?\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountDateTimeOffset $startDate = null, ?int $status = null, ?string $statusCode = null)
    {
        $this
            ->setCategory($category)
            ->setCurrentPrice($currentPrice)
            ->setCurrentRate($currentRate)
            ->setDealId($dealId)
            ->setEan($ean)
            ->setEndDate($endDate)
            ->setLabel($label)
            ->setMaxPrice($maxPrice)
            ->setMinPrice($minPrice)
            ->setOfferId($offerId)
            ->setProductId($productId)
            ->setProposedRate($proposedRate)
            ->setSellerId($sellerId)
            ->setSellerProductId($sellerProductId)
            ->setStartDate($startDate)
            ->setStatus($status)
            ->setStatusCode($statusCode);
    }
    /**
     * Get Category value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getCategory(): ?string
    {
        return isset($this->Category) ? $this->Category : null;
    }
    /**
     * Set Category value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $category
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountSellerDeal
     */
    public function setCategory(?string $category = null): self
    {
        // validation for constraint: string
        if (!is_null($category) && !is_string($category)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($category, true), gettype($category)), __LINE__);
        }
        if (is_null($category) || (is_array($category) && empty($category))) {
            unset($this->Category);
        } else {
            $this->Category = $category;
        }
        
        return $this;
    }
    /**
     * Get CurrentPrice value
     * @return float|null
     */
    public function getCurrentPrice(): ?float
    {
        return $this->CurrentPrice;
    }
    /**
     * Set CurrentPrice value
     * @param float $currentPrice
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountSellerDeal
     */
    public function setCurrentPrice(?float $currentPrice = null): self
    {
        // validation for constraint: float
        if (!is_null($currentPrice) && !(is_float($currentPrice) || is_numeric($currentPrice))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($currentPrice, true), gettype($currentPrice)), __LINE__);
        }
        $this->CurrentPrice = $currentPrice;
        
        return $this;
    }
    /**
     * Get CurrentRate value
     * @return float|null
     */
    public function getCurrentRate(): ?float
    {
        return $this->CurrentRate;
    }
    /**
     * Set CurrentRate value
     * @param float $currentRate
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountSellerDeal
     */
    public function setCurrentRate(?float $currentRate = null): self
    {
        // validation for constraint: float
        if (!is_null($currentRate) && !(is_float($currentRate) || is_numeric($currentRate))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($currentRate, true), gettype($currentRate)), __LINE__);
        }
        $this->CurrentRate = $currentRate;
        
        return $this;
    }
    /**
     * Get DealId value
     * @return int|null
     */
    public function getDealId(): ?int
    {
        return $this->DealId;
    }
    /**
     * Set DealId value
     * @param int $dealId
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountSellerDeal
     */
    public function setDealId(?int $dealId = null): self
    {
        // validation for constraint: int
        if (!is_null($dealId) && !(is_int($dealId) || ctype_digit($dealId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($dealId, true), gettype($dealId)), __LINE__);
        }
        $this->DealId = $dealId;
        
        return $this;
    }
    /**
     * Get Ean value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getEan(): ?string
    {
        return isset($this->Ean) ? $this->Ean : null;
    }
    /**
     * Set Ean value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $ean
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountSellerDeal
     */
    public function setEan(?string $ean = null): self
    {
        // validation for constraint: string
        if (!is_null($ean) && !is_string($ean)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($ean, true), gettype($ean)), __LINE__);
        }
        if (is_null($ean) || (is_array($ean) && empty($ean))) {
            unset($this->Ean);
        } else {
            $this->Ean = $ean;
        }
        
        return $this;
    }
    /**
     * Get EndDate value
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountDateTimeOffset|null
     */
    public function getEndDate(): ?\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountDateTimeOffset
    {
        return $this->EndDate;
    }
    /**
     * Set EndDate value
     * @param \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountDateTimeOffset $endDate
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountSellerDeal
     */
    public function setEndDate(?\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountDateTimeOffset $endDate = null): self
    {
        $this->EndDate = $endDate;
        
        return $this;
    }
    /**
     * Get Label value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getLabel(): ?string
    {
        return isset($this->Label) ? $this->Label : null;
    }
    /**
     * Set Label value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $label
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountSellerDeal
     */
    public function setLabel(?string $label = null): self
    {
        // validation for constraint: string
        if (!is_null($label) && !is_string($label)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($label, true), gettype($label)), __LINE__);
        }
        if (is_null($label) || (is_array($label) && empty($label))) {
            unset($this->Label);
        } else {
            $this->Label = $label;
        }
        
        return $this;
    }
    /**
     * Get MaxPrice value
     * @return float|null
     */
    public function getMaxPrice(): ?float
    {
        return $this->MaxPrice;
    }
    /**
     * Set MaxPrice value
     * @param float $maxPrice
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountSellerDeal
     */
    public function setMaxPrice(?float $maxPrice = null): self
    {
        // validation for constraint: float
        if (!is_null($maxPrice) && !(is_float($maxPrice) || is_numeric($maxPrice))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($maxPrice, true), gettype($maxPrice)), __LINE__);
        }
        $this->MaxPrice = $maxPrice;
        
        return $this;
    }
    /**
     * Get MinPrice value
     * @return float|null
     */
    public function getMinPrice(): ?float
    {
        return $this->MinPrice;
    }
    /**
     * Set MinPrice value
     * @param float $minPrice
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountSellerDeal
     */
    public function setMinPrice(?float $minPrice = null): self
    {
        // validation for constraint: float
        if (!is_null($minPrice) && !(is_float($minPrice) || is_numeric($minPrice))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($minPrice, true), gettype($minPrice)), __LINE__);
        }
        $this->MinPrice = $minPrice;
        
        return $this;
    }
    /**
     * Get OfferId value
     * @return int|null
     */
    public function getOfferId(): ?int
    {
        return $this->OfferId;
    }
    /**
     * Set OfferId value
     * @param int $offerId
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountSellerDeal
     */
    public function setOfferId(?int $offerId = null): self
    {
        // validation for constraint: int
        if (!is_null($offerId) && !(is_int($offerId) || ctype_digit($offerId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($offerId, true), gettype($offerId)), __LINE__);
        }
        $this->OfferId = $offerId;
        
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
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountSellerDeal
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
     * Get ProposedRate value
     * @return float|null
     */
    public function getProposedRate(): ?float
    {
        return $this->ProposedRate;
    }
    /**
     * Set ProposedRate value
     * @param float $proposedRate
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountSellerDeal
     */
    public function setProposedRate(?float $proposedRate = null): self
    {
        // validation for constraint: float
        if (!is_null($proposedRate) && !(is_float($proposedRate) || is_numeric($proposedRate))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($proposedRate, true), gettype($proposedRate)), __LINE__);
        }
        $this->ProposedRate = $proposedRate;
        
        return $this;
    }
    /**
     * Get SellerId value
     * @return int|null
     */
    public function getSellerId(): ?int
    {
        return $this->SellerId;
    }
    /**
     * Set SellerId value
     * @param int $sellerId
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountSellerDeal
     */
    public function setSellerId(?int $sellerId = null): self
    {
        // validation for constraint: int
        if (!is_null($sellerId) && !(is_int($sellerId) || ctype_digit($sellerId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($sellerId, true), gettype($sellerId)), __LINE__);
        }
        $this->SellerId = $sellerId;
        
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
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountSellerDeal
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
     * Get StartDate value
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountDateTimeOffset|null
     */
    public function getStartDate(): ?\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountDateTimeOffset
    {
        return $this->StartDate;
    }
    /**
     * Set StartDate value
     * @param \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountDateTimeOffset $startDate
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountSellerDeal
     */
    public function setStartDate(?\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountDateTimeOffset $startDate = null): self
    {
        $this->StartDate = $startDate;
        
        return $this;
    }
    /**
     * Get Status value
     * @return int|null
     */
    public function getStatus(): ?int
    {
        return $this->Status;
    }
    /**
     * Set Status value
     * @param int $status
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountSellerDeal
     */
    public function setStatus(?int $status = null): self
    {
        // validation for constraint: int
        if (!is_null($status) && !(is_int($status) || ctype_digit($status))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($status, true), gettype($status)), __LINE__);
        }
        $this->Status = $status;
        
        return $this;
    }
    /**
     * Get StatusCode value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getStatusCode(): ?string
    {
        return isset($this->StatusCode) ? $this->StatusCode : null;
    }
    /**
     * Set StatusCode value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $statusCode
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountSellerDeal
     */
    public function setStatusCode(?string $statusCode = null): self
    {
        // validation for constraint: string
        if (!is_null($statusCode) && !is_string($statusCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($statusCode, true), gettype($statusCode)), __LINE__);
        }
        if (is_null($statusCode) || (is_array($statusCode) && empty($statusCode))) {
            unset($this->StatusCode);
        } else {
            $this->StatusCode = $statusCode;
        }
        
        return $this;
    }
}
