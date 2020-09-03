<?php

namespace SengentoBV\CdiscountMarketplaceSdk\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Shipping Structs
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:Shipping
 * @package Cdiscount
 * @subpackage Structs
 */
class CdiscountShipping extends AbstractStructBase
{
    /**
     * The Delay
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var int
     */
    public $Delay;
    /**
     * The ShippingMode
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $ShippingMode;
    /**
     * The ShippingPrice
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var float
     */
    public $ShippingPrice;
    /**
     * Constructor method for Shipping
     * @uses CdiscountShipping::setDelay()
     * @uses CdiscountShipping::setShippingMode()
     * @uses CdiscountShipping::setShippingPrice()
     * @param int $delay
     * @param string $shippingMode
     * @param float $shippingPrice
     */
    public function __construct($delay = null, $shippingMode = null, $shippingPrice = null)
    {
        $this
            ->setDelay($delay)
            ->setShippingMode($shippingMode)
            ->setShippingPrice($shippingPrice);
    }
    /**
     * Get Delay value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return int|null
     */
    public function getDelay()
    {
        return isset($this->Delay) ? $this->Delay : null;
    }
    /**
     * Set Delay value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param int $delay
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountShipping
     */
    public function setDelay($delay = null)
    {
        // validation for constraint: int
        if (!is_null($delay) && !(is_int($delay) || ctype_digit($delay))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($delay, true), gettype($delay)), __LINE__);
        }
        if (is_null($delay) || (is_array($delay) && empty($delay))) {
            unset($this->Delay);
        } else {
            $this->Delay = $delay;
        }
        return $this;
    }
    /**
     * Get ShippingMode value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getShippingMode()
    {
        return isset($this->ShippingMode) ? $this->ShippingMode : null;
    }
    /**
     * Set ShippingMode value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $shippingMode
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountShipping
     */
    public function setShippingMode($shippingMode = null)
    {
        // validation for constraint: string
        if (!is_null($shippingMode) && !is_string($shippingMode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($shippingMode, true), gettype($shippingMode)), __LINE__);
        }
        if (is_null($shippingMode) || (is_array($shippingMode) && empty($shippingMode))) {
            unset($this->ShippingMode);
        } else {
            $this->ShippingMode = $shippingMode;
        }
        return $this;
    }
    /**
     * Get ShippingPrice value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return float|null
     */
    public function getShippingPrice()
    {
        return isset($this->ShippingPrice) ? $this->ShippingPrice : null;
    }
    /**
     * Set ShippingPrice value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param float $shippingPrice
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountShipping
     */
    public function setShippingPrice($shippingPrice = null)
    {
        // validation for constraint: float
        if (!is_null($shippingPrice) && !(is_float($shippingPrice) || is_numeric($shippingPrice))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($shippingPrice, true), gettype($shippingPrice)), __LINE__);
        }
        if (is_null($shippingPrice) || (is_array($shippingPrice) && empty($shippingPrice))) {
            unset($this->ShippingPrice);
        } else {
            $this->ShippingPrice = $shippingPrice;
        }
        return $this;
    }
}
