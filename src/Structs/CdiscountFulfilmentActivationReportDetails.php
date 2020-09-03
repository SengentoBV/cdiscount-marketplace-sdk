<?php

namespace SengentoBV\CdiscountMarketplaceSdk\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FulfilmentActivationReportDetails Structs
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:FulfilmentActivationReportDetails
 * @package Cdiscount
 * @subpackage Structs
 */
class CdiscountFulfilmentActivationReportDetails extends AbstractStructBase
{
    /**
     * The Action
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $Action;
    /**
     * The ActionSuccess
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var bool
     */
    public $ActionSuccess;
    /**
     * The Description
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $Description;
    /**
     * The Height
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var float
     */
    public $Height;
    /**
     * The Length
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var float
     */
    public $Length;
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
     * The SellerProductReference
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $SellerProductReference;
    /**
     * The Weight
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var float
     */
    public $Weight;
    /**
     * The Width
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var float
     */
    public $Width;
    /**
     * Constructor method for FulfilmentActivationReportDetails
     * @uses CdiscountFulfilmentActivationReportDetails::setAction()
     * @uses CdiscountFulfilmentActivationReportDetails::setActionSuccess()
     * @uses CdiscountFulfilmentActivationReportDetails::setDescription()
     * @uses CdiscountFulfilmentActivationReportDetails::setHeight()
     * @uses CdiscountFulfilmentActivationReportDetails::setLength()
     * @uses CdiscountFulfilmentActivationReportDetails::setProductEan()
     * @uses CdiscountFulfilmentActivationReportDetails::setProductId()
     * @uses CdiscountFulfilmentActivationReportDetails::setSellerProductReference()
     * @uses CdiscountFulfilmentActivationReportDetails::setWeight()
     * @uses CdiscountFulfilmentActivationReportDetails::setWidth()
     * @param string $action
     * @param bool $actionSuccess
     * @param string $description
     * @param float $height
     * @param float $length
     * @param string $productEan
     * @param string $productId
     * @param string $sellerProductReference
     * @param float $weight
     * @param float $width
     */
    public function __construct($action = null, $actionSuccess = null, $description = null, $height = null, $length = null, $productEan = null, $productId = null, $sellerProductReference = null, $weight = null, $width = null)
    {
        $this
            ->setAction($action)
            ->setActionSuccess($actionSuccess)
            ->setDescription($description)
            ->setHeight($height)
            ->setLength($length)
            ->setProductEan($productEan)
            ->setProductId($productId)
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
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountFulfilmentActivationReportDetails
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
     * Get ActionSuccess value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return bool|null
     */
    public function getActionSuccess()
    {
        return isset($this->ActionSuccess) ? $this->ActionSuccess : null;
    }
    /**
     * Set ActionSuccess value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param bool $actionSuccess
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountFulfilmentActivationReportDetails
     */
    public function setActionSuccess($actionSuccess = null)
    {
        // validation for constraint: boolean
        if (!is_null($actionSuccess) && !is_bool($actionSuccess)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($actionSuccess, true), gettype($actionSuccess)), __LINE__);
        }
        if (is_null($actionSuccess) || (is_array($actionSuccess) && empty($actionSuccess))) {
            unset($this->ActionSuccess);
        } else {
            $this->ActionSuccess = $actionSuccess;
        }
        return $this;
    }
    /**
     * Get Description value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getDescription()
    {
        return isset($this->Description) ? $this->Description : null;
    }
    /**
     * Set Description value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $description
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountFulfilmentActivationReportDetails
     */
    public function setDescription($description = null)
    {
        // validation for constraint: string
        if (!is_null($description) && !is_string($description)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($description, true), gettype($description)), __LINE__);
        }
        if (is_null($description) || (is_array($description) && empty($description))) {
            unset($this->Description);
        } else {
            $this->Description = $description;
        }
        return $this;
    }
    /**
     * Get Height value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return float|null
     */
    public function getHeight()
    {
        return isset($this->Height) ? $this->Height : null;
    }
    /**
     * Set Height value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param float $height
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountFulfilmentActivationReportDetails
     */
    public function setHeight($height = null)
    {
        // validation for constraint: float
        if (!is_null($height) && !(is_float($height) || is_numeric($height))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($height, true), gettype($height)), __LINE__);
        }
        if (is_null($height) || (is_array($height) && empty($height))) {
            unset($this->Height);
        } else {
            $this->Height = $height;
        }
        return $this;
    }
    /**
     * Get Length value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return float|null
     */
    public function getLength()
    {
        return isset($this->Length) ? $this->Length : null;
    }
    /**
     * Set Length value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param float $length
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountFulfilmentActivationReportDetails
     */
    public function setLength($length = null)
    {
        // validation for constraint: float
        if (!is_null($length) && !(is_float($length) || is_numeric($length))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($length, true), gettype($length)), __LINE__);
        }
        if (is_null($length) || (is_array($length) && empty($length))) {
            unset($this->Length);
        } else {
            $this->Length = $length;
        }
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
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountFulfilmentActivationReportDetails
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
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountFulfilmentActivationReportDetails
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
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountFulfilmentActivationReportDetails
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
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return float|null
     */
    public function getWeight()
    {
        return isset($this->Weight) ? $this->Weight : null;
    }
    /**
     * Set Weight value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param float $weight
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountFulfilmentActivationReportDetails
     */
    public function setWeight($weight = null)
    {
        // validation for constraint: float
        if (!is_null($weight) && !(is_float($weight) || is_numeric($weight))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($weight, true), gettype($weight)), __LINE__);
        }
        if (is_null($weight) || (is_array($weight) && empty($weight))) {
            unset($this->Weight);
        } else {
            $this->Weight = $weight;
        }
        return $this;
    }
    /**
     * Get Width value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return float|null
     */
    public function getWidth()
    {
        return isset($this->Width) ? $this->Width : null;
    }
    /**
     * Set Width value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param float $width
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountFulfilmentActivationReportDetails
     */
    public function setWidth($width = null)
    {
        // validation for constraint: float
        if (!is_null($width) && !(is_float($width) || is_numeric($width))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($width, true), gettype($width)), __LINE__);
        }
        if (is_null($width) || (is_array($width) && empty($width))) {
            unset($this->Width);
        } else {
            $this->Width = $width;
        }
        return $this;
    }
}
