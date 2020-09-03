<?php

namespace SengentoBV\CdiscountMarketplaceSdk\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

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
     * @var string
     */
    public $Action;
    /**
     * The Height
     * @var float
     */
    public $Height;
    /**
     * The Length
     * @var float
     */
    public $Length;
    /**
     * The ProductEan
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $ProductEan;
    /**
     * The SellerProductReference
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $SellerProductReference;
    /**
     * The Weight
     * @var float
     */
    public $Weight;
    /**
     * The Width
     * @var float
     */
    public $Width;
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
    public function __construct($action = null, $height = null, $length = null, $productEan = null, $sellerProductReference = null, $weight = null, $width = null)
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
    public function getAction()
    {
        return $this->Action;
    }
    /**
     * Set Action value
     * @uses \SengentoBV\CdiscountMarketplaceSdk\Enums\CdiscountFulfilmentProductActionType::valueIsValid()
     * @uses \SengentoBV\CdiscountMarketplaceSdk\Enums\CdiscountFulfilmentProductActionType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $action
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountProductActivationData
     */
    public function setAction($action = null)
    {
        // validation for constraint: enumeration
        if (!\SengentoBV\CdiscountMarketplaceSdk\Enums\CdiscountFulfilmentProductActionType::valueIsValid($action)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \SengentoBV\CdiscountMarketplaceSdk\Enums\CdiscountFulfilmentProductActionType', is_array($action) ? implode(', ', $action) : var_export($action, true), implode(', ', \SengentoBV\CdiscountMarketplaceSdk\Enums\CdiscountFulfilmentProductActionType::getValidValues())), __LINE__);
        }
        $this->Action = $action;
        return $this;
    }
    /**
     * Get Height value
     * @return float|null
     */
    public function getHeight()
    {
        return $this->Height;
    }
    /**
     * Set Height value
     * @param float $height
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountProductActivationData
     */
    public function setHeight($height = null)
    {
        // validation for constraint: float
        if (!is_null($height) && !(is_float($height) || is_numeric($height))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($height, true), gettype($height)), __LINE__);
        }
        $this->Height = $height;
        return $this;
    }
    /**
     * Get Length value
     * @return float|null
     */
    public function getLength()
    {
        return $this->Length;
    }
    /**
     * Set Length value
     * @param float $length
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountProductActivationData
     */
    public function setLength($length = null)
    {
        // validation for constraint: float
        if (!is_null($length) && !(is_float($length) || is_numeric($length))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($length, true), gettype($length)), __LINE__);
        }
        $this->Length = $length;
        return $this;
    }
    /**
     * Get ProductEan value
     * @return string|null
     */
    public function getProductEan()
    {
        return $this->ProductEan;
    }
    /**
     * Set ProductEan value
     * @param string $productEan
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountProductActivationData
     */
    public function setProductEan($productEan = null)
    {
        // validation for constraint: string
        if (!is_null($productEan) && !is_string($productEan)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($productEan, true), gettype($productEan)), __LINE__);
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
    public function getSellerProductReference()
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
    public function setSellerProductReference($sellerProductReference = null)
    {
        // validation for constraint: string
        if (!is_null($sellerProductReference) && !is_string($sellerProductReference)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($sellerProductReference, true), gettype($sellerProductReference)), __LINE__);
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
    public function getWeight()
    {
        return $this->Weight;
    }
    /**
     * Set Weight value
     * @param float $weight
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountProductActivationData
     */
    public function setWeight($weight = null)
    {
        // validation for constraint: float
        if (!is_null($weight) && !(is_float($weight) || is_numeric($weight))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($weight, true), gettype($weight)), __LINE__);
        }
        $this->Weight = $weight;
        return $this;
    }
    /**
     * Get Width value
     * @return float|null
     */
    public function getWidth()
    {
        return $this->Width;
    }
    /**
     * Set Width value
     * @param float $width
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountProductActivationData
     */
    public function setWidth($width = null)
    {
        // validation for constraint: float
        if (!is_null($width) && !(is_float($width) || is_numeric($width))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($width, true), gettype($width)), __LINE__);
        }
        $this->Width = $width;
        return $this;
    }
}
