<?php

declare(strict_types=1);

namespace SengentoBV\CdiscountMarketplaceSdk\Structs;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ProductActivationData Structs
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ProductActivationData
 * @package Cdiscount
 * @subpackage Structs
 */
class CdiscountProductActivationData extends AbstractStructBase
{
    /**
     * The Action
     * @var string|null
     */
    protected ?string $Action = null;
    /**
     * The Height
     * @var float|null
     */
    protected ?float $Height = null;
    /**
     * The Length
     * @var float|null
     */
    protected ?float $Length = null;
    /**
     * The ProductEan
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string|null
     */
    protected ?string $ProductEan = null;
    /**
     * The SellerProductReference
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $SellerProductReference = null;
    /**
     * The Weight
     * @var float|null
     */
    protected ?float $Weight = null;
    /**
     * The Width
     * @var float|null
     */
    protected ?float $Width = null;
    /**
     * Constructor method for ProductActivationData
     * @uses CdiscountProductActivationData::setAction()
     * @uses CdiscountProductActivationData::setHeight()
     * @uses CdiscountProductActivationData::setLength()
     * @uses CdiscountProductActivationData::setProductEan()
     * @uses CdiscountProductActivationData::setSellerProductReference()
     * @uses CdiscountProductActivationData::setWeight()
     * @uses CdiscountProductActivationData::setWidth()
     * @param string $action
     * @param float $height
     * @param float $length
     * @param string $productEan
     * @param string $sellerProductReference
     * @param float $weight
     * @param float $width
     */
    public function __construct(?string $action = null, ?float $height = null, ?float $length = null, ?string $productEan = null, ?string $sellerProductReference = null, ?float $weight = null, ?float $width = null)
    {
        $this
            ->setAction($action)
            ->setHeight($height)
            ->setLength($length)
            ->setProductEan($productEan)
            ->setSellerProductReference($sellerProductReference)
            ->setWeight($weight)
            ->setWidth($width);
    }
    /**
     * Get Action value
     * @return string|null
     */
    public function getAction(): ?string
    {
        return $this->Action;
    }
    /**
     * Set Action value
     * @uses \SengentoBV\CdiscountMarketplaceSdk\Enums\CdiscountFulfilmentProductActionType::valueIsValid()
     * @uses \SengentoBV\CdiscountMarketplaceSdk\Enums\CdiscountFulfilmentProductActionType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $action
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountProductActivationData
     */
    public function setAction(?string $action = null): self
    {
        // validation for constraint: enumeration
        if (!\SengentoBV\CdiscountMarketplaceSdk\Enums\CdiscountFulfilmentProductActionType::valueIsValid($action)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \SengentoBV\CdiscountMarketplaceSdk\Enums\CdiscountFulfilmentProductActionType', is_array($action) ? implode(', ', $action) : var_export($action, true), implode(', ', \SengentoBV\CdiscountMarketplaceSdk\Enums\CdiscountFulfilmentProductActionType::getValidValues())), __LINE__);
        }
        $this->Action = $action;
        
        return $this;
    }
    /**
     * Get Height value
     * @return float|null
     */
    public function getHeight(): ?float
    {
        return $this->Height;
    }
    /**
     * Set Height value
     * @param float $height
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountProductActivationData
     */
    public function setHeight(?float $height = null): self
    {
        // validation for constraint: float
        if (!is_null($height) && !(is_float($height) || is_numeric($height))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($height, true), gettype($height)), __LINE__);
        }
        $this->Height = $height;
        
        return $this;
    }
    /**
     * Get Length value
     * @return float|null
     */
    public function getLength(): ?float
    {
        return $this->Length;
    }
    /**
     * Set Length value
     * @param float $length
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountProductActivationData
     */
    public function setLength(?float $length = null): self
    {
        // validation for constraint: float
        if (!is_null($length) && !(is_float($length) || is_numeric($length))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($length, true), gettype($length)), __LINE__);
        }
        $this->Length = $length;
        
        return $this;
    }
    /**
     * Get ProductEan value
     * @return string|null
     */
    public function getProductEan(): ?string
    {
        return $this->ProductEan;
    }
    /**
     * Set ProductEan value
     * @param string $productEan
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountProductActivationData
     */
    public function setProductEan(?string $productEan = null): self
    {
        // validation for constraint: string
        if (!is_null($productEan) && !is_string($productEan)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($productEan, true), gettype($productEan)), __LINE__);
        }
        $this->ProductEan = $productEan;
        
        return $this;
    }
    /**
     * Get SellerProductReference value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getSellerProductReference(): ?string
    {
        return isset($this->SellerProductReference) ? $this->SellerProductReference : null;
    }
    /**
     * Set SellerProductReference value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $sellerProductReference
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountProductActivationData
     */
    public function setSellerProductReference(?string $sellerProductReference = null): self
    {
        // validation for constraint: string
        if (!is_null($sellerProductReference) && !is_string($sellerProductReference)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($sellerProductReference, true), gettype($sellerProductReference)), __LINE__);
        }
        if (is_null($sellerProductReference) || (is_array($sellerProductReference) && empty($sellerProductReference))) {
            unset($this->SellerProductReference);
        } else {
            $this->SellerProductReference = $sellerProductReference;
        }
        
        return $this;
    }
    /**
     * Get Weight value
     * @return float|null
     */
    public function getWeight(): ?float
    {
        return $this->Weight;
    }
    /**
     * Set Weight value
     * @param float $weight
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountProductActivationData
     */
    public function setWeight(?float $weight = null): self
    {
        // validation for constraint: float
        if (!is_null($weight) && !(is_float($weight) || is_numeric($weight))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($weight, true), gettype($weight)), __LINE__);
        }
        $this->Weight = $weight;
        
        return $this;
    }
    /**
     * Get Width value
     * @return float|null
     */
    public function getWidth(): ?float
    {
        return $this->Width;
    }
    /**
     * Set Width value
     * @param float $width
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountProductActivationData
     */
    public function setWidth(?float $width = null): self
    {
        // validation for constraint: float
        if (!is_null($width) && !(is_float($width) || is_numeric($width))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($width, true), gettype($width)), __LINE__);
        }
        $this->Width = $width;
        
        return $this;
    }
}
