<?php

declare(strict_types=1);

namespace SengentoBV\CdiscountMarketplaceSdk\Structs;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ProductMatching Structs
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ProductMatching
 * @package Cdiscount
 * @subpackage Structs
 */
class CdiscountProductMatching extends AbstractStructBase
{
    /**
     * The Color
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $Color = null;
    /**
     * The Comment
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $Comment = null;
    /**
     * The Ean
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string|null
     */
    protected ?string $Ean = null;
    /**
     * The MatchingStatus
     * @var string|null
     */
    protected ?string $MatchingStatus = null;
    /**
     * The Name
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string|null
     */
    protected ?string $Name = null;
    /**
     * The SellerProductId
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string|null
     */
    protected ?string $SellerProductId = null;
    /**
     * The Size
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $Size = null;
    /**
     * The Sku
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string|null
     */
    protected ?string $Sku = null;
    /**
     * Constructor method for ProductMatching
     * @uses CdiscountProductMatching::setColor()
     * @uses CdiscountProductMatching::setComment()
     * @uses CdiscountProductMatching::setEan()
     * @uses CdiscountProductMatching::setMatchingStatus()
     * @uses CdiscountProductMatching::setName()
     * @uses CdiscountProductMatching::setSellerProductId()
     * @uses CdiscountProductMatching::setSize()
     * @uses CdiscountProductMatching::setSku()
     * @param string $color
     * @param string $comment
     * @param string $ean
     * @param string $matchingStatus
     * @param string $name
     * @param string $sellerProductId
     * @param string $size
     * @param string $sku
     */
    public function __construct(?string $color = null, ?string $comment = null, ?string $ean = null, ?string $matchingStatus = null, ?string $name = null, ?string $sellerProductId = null, ?string $size = null, ?string $sku = null)
    {
        $this
            ->setColor($color)
            ->setComment($comment)
            ->setEan($ean)
            ->setMatchingStatus($matchingStatus)
            ->setName($name)
            ->setSellerProductId($sellerProductId)
            ->setSize($size)
            ->setSku($sku);
    }
    /**
     * Get Color value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getColor(): ?string
    {
        return isset($this->Color) ? $this->Color : null;
    }
    /**
     * Set Color value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $color
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountProductMatching
     */
    public function setColor(?string $color = null): self
    {
        // validation for constraint: string
        if (!is_null($color) && !is_string($color)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($color, true), gettype($color)), __LINE__);
        }
        if (is_null($color) || (is_array($color) && empty($color))) {
            unset($this->Color);
        } else {
            $this->Color = $color;
        }
        
        return $this;
    }
    /**
     * Get Comment value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getComment(): ?string
    {
        return isset($this->Comment) ? $this->Comment : null;
    }
    /**
     * Set Comment value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $comment
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountProductMatching
     */
    public function setComment(?string $comment = null): self
    {
        // validation for constraint: string
        if (!is_null($comment) && !is_string($comment)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($comment, true), gettype($comment)), __LINE__);
        }
        if (is_null($comment) || (is_array($comment) && empty($comment))) {
            unset($this->Comment);
        } else {
            $this->Comment = $comment;
        }
        
        return $this;
    }
    /**
     * Get Ean value
     * @return string|null
     */
    public function getEan(): ?string
    {
        return $this->Ean;
    }
    /**
     * Set Ean value
     * @param string $ean
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountProductMatching
     */
    public function setEan(?string $ean = null): self
    {
        // validation for constraint: string
        if (!is_null($ean) && !is_string($ean)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($ean, true), gettype($ean)), __LINE__);
        }
        $this->Ean = $ean;
        
        return $this;
    }
    /**
     * Get MatchingStatus value
     * @return string|null
     */
    public function getMatchingStatus(): ?string
    {
        return $this->MatchingStatus;
    }
    /**
     * Set MatchingStatus value
     * @uses \SengentoBV\CdiscountMarketplaceSdk\Enums\CdiscountProductMatchingStatusEnum::valueIsValid()
     * @uses \SengentoBV\CdiscountMarketplaceSdk\Enums\CdiscountProductMatchingStatusEnum::getValidValues()
     * @throws InvalidArgumentException
     * @param string $matchingStatus
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountProductMatching
     */
    public function setMatchingStatus(?string $matchingStatus = null): self
    {
        // validation for constraint: enumeration
        if (!\SengentoBV\CdiscountMarketplaceSdk\Enums\CdiscountProductMatchingStatusEnum::valueIsValid($matchingStatus)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \SengentoBV\CdiscountMarketplaceSdk\Enums\CdiscountProductMatchingStatusEnum', is_array($matchingStatus) ? implode(', ', $matchingStatus) : var_export($matchingStatus, true), implode(', ', \SengentoBV\CdiscountMarketplaceSdk\Enums\CdiscountProductMatchingStatusEnum::getValidValues())), __LINE__);
        }
        $this->MatchingStatus = $matchingStatus;
        
        return $this;
    }
    /**
     * Get Name value
     * @return string|null
     */
    public function getName(): ?string
    {
        return $this->Name;
    }
    /**
     * Set Name value
     * @param string $name
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountProductMatching
     */
    public function setName(?string $name = null): self
    {
        // validation for constraint: string
        if (!is_null($name) && !is_string($name)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($name, true), gettype($name)), __LINE__);
        }
        $this->Name = $name;
        
        return $this;
    }
    /**
     * Get SellerProductId value
     * @return string|null
     */
    public function getSellerProductId(): ?string
    {
        return $this->SellerProductId;
    }
    /**
     * Set SellerProductId value
     * @param string $sellerProductId
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountProductMatching
     */
    public function setSellerProductId(?string $sellerProductId = null): self
    {
        // validation for constraint: string
        if (!is_null($sellerProductId) && !is_string($sellerProductId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($sellerProductId, true), gettype($sellerProductId)), __LINE__);
        }
        $this->SellerProductId = $sellerProductId;
        
        return $this;
    }
    /**
     * Get Size value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getSize(): ?string
    {
        return isset($this->Size) ? $this->Size : null;
    }
    /**
     * Set Size value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $size
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountProductMatching
     */
    public function setSize(?string $size = null): self
    {
        // validation for constraint: string
        if (!is_null($size) && !is_string($size)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($size, true), gettype($size)), __LINE__);
        }
        if (is_null($size) || (is_array($size) && empty($size))) {
            unset($this->Size);
        } else {
            $this->Size = $size;
        }
        
        return $this;
    }
    /**
     * Get Sku value
     * @return string|null
     */
    public function getSku(): ?string
    {
        return $this->Sku;
    }
    /**
     * Set Sku value
     * @param string $sku
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountProductMatching
     */
    public function setSku(?string $sku = null): self
    {
        // validation for constraint: string
        if (!is_null($sku) && !is_string($sku)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($sku, true), gettype($sku)), __LINE__);
        }
        $this->Sku = $sku;
        
        return $this;
    }
}
