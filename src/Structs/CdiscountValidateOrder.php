<?php

namespace SengentoBV\CdiscountMarketplaceSdk\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ValidateOrder Structs
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ValidateOrder
 * @package Cdiscount
 * @subpackage Structs
 */
class CdiscountValidateOrder extends AbstractStructBase
{
    /**
     * The CarrierName
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $CarrierName;
    /**
     * The OrderLineList
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfValidateOrderLine
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
     * @var string
     */
    public $OrderState;
    /**
     * The TrackingNumber
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $TrackingNumber;
    /**
     * The TrackingUrl
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $TrackingUrl;
    /**
     * Constructor method for ValidateOrder
     * @uses CdiscountValidateOrder::setCarrierName()
     * @uses CdiscountValidateOrder::setOrderLineList()
     * @uses CdiscountValidateOrder::setOrderNumber()
     * @uses CdiscountValidateOrder::setOrderState()
     * @uses CdiscountValidateOrder::setTrackingNumber()
     * @uses CdiscountValidateOrder::setTrackingUrl()
     * @param string $carrierName
     * @param \SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfValidateOrderLine $orderLineList
     * @param string $orderNumber
     * @param string $orderState
     * @param string $trackingNumber
     * @param string $trackingUrl
     */
    public function __construct($carrierName = null, \SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfValidateOrderLine $orderLineList = null, $orderNumber = null, $orderState = null, $trackingNumber = null, $trackingUrl = null)
    {
        $this
            ->setCarrierName($carrierName)
            ->setOrderLineList($orderLineList)
            ->setOrderNumber($orderNumber)
            ->setOrderState($orderState)
            ->setTrackingNumber($trackingNumber)
            ->setTrackingUrl($trackingUrl);
    }
    /**
     * Get CarrierName value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getCarrierName()
    {
        return isset($this->CarrierName) ? $this->CarrierName : null;
    }
    /**
     * Set CarrierName value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $carrierName
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountValidateOrder
     */
    public function setCarrierName($carrierName = null)
    {
        // validation for constraint: string
        if (!is_null($carrierName) && !is_string($carrierName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($carrierName, true), gettype($carrierName)), __LINE__);
        }
        if (is_null($carrierName) || (is_array($carrierName) && empty($carrierName))) {
            unset($this->CarrierName);
        } else {
            $this->CarrierName = $carrierName;
        }
        return $this;
    }
    /**
     * Get OrderLineList value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfValidateOrderLine|null
     */
    public function getOrderLineList()
    {
        return isset($this->OrderLineList) ? $this->OrderLineList : null;
    }
    /**
     * Set OrderLineList value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfValidateOrderLine $orderLineList
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountValidateOrder
     */
    public function setOrderLineList(\SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfValidateOrderLine $orderLineList = null)
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
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountValidateOrder
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
     * @return string|null
     */
    public function getOrderState()
    {
        return $this->OrderState;
    }
    /**
     * Set OrderState value
     * @uses \SengentoBV\CdiscountMarketplaceSdk\Enums\CdiscountOrderStateEnum::valueIsValid()
     * @uses \SengentoBV\CdiscountMarketplaceSdk\Enums\CdiscountOrderStateEnum::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $orderState
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountValidateOrder
     */
    public function setOrderState($orderState = null)
    {
        // validation for constraint: enumeration
        if (!\SengentoBV\CdiscountMarketplaceSdk\Enums\CdiscountOrderStateEnum::valueIsValid($orderState)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \SengentoBV\CdiscountMarketplaceSdk\Enums\CdiscountOrderStateEnum', is_array($orderState) ? implode(', ', $orderState) : var_export($orderState, true), implode(', ', \SengentoBV\CdiscountMarketplaceSdk\Enums\CdiscountOrderStateEnum::getValidValues())), __LINE__);
        }
        $this->OrderState = $orderState;
        return $this;
    }
    /**
     * Get TrackingNumber value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getTrackingNumber()
    {
        return isset($this->TrackingNumber) ? $this->TrackingNumber : null;
    }
    /**
     * Set TrackingNumber value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $trackingNumber
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountValidateOrder
     */
    public function setTrackingNumber($trackingNumber = null)
    {
        // validation for constraint: string
        if (!is_null($trackingNumber) && !is_string($trackingNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($trackingNumber, true), gettype($trackingNumber)), __LINE__);
        }
        if (is_null($trackingNumber) || (is_array($trackingNumber) && empty($trackingNumber))) {
            unset($this->TrackingNumber);
        } else {
            $this->TrackingNumber = $trackingNumber;
        }
        return $this;
    }
    /**
     * Get TrackingUrl value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getTrackingUrl()
    {
        return isset($this->TrackingUrl) ? $this->TrackingUrl : null;
    }
    /**
     * Set TrackingUrl value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $trackingUrl
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountValidateOrder
     */
    public function setTrackingUrl($trackingUrl = null)
    {
        // validation for constraint: string
        if (!is_null($trackingUrl) && !is_string($trackingUrl)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($trackingUrl, true), gettype($trackingUrl)), __LINE__);
        }
        if (is_null($trackingUrl) || (is_array($trackingUrl) && empty($trackingUrl))) {
            unset($this->TrackingUrl);
        } else {
            $this->TrackingUrl = $trackingUrl;
        }
        return $this;
    }
}
