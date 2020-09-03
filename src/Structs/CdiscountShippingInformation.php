<?php

namespace SengentoBV\CdiscountMarketplaceSdk\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ShippingInformation Structs
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ShippingInformation
 * @package Cdiscount
 * @subpackage Structs
 */
class CdiscountShippingInformation extends AbstractStructBase
{
    /**
     * The AdditionalShippingCharges
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var float
     */
    public $AdditionalShippingCharges;
    /**
     * The DeliveryMode
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountDeliveryModeInformation
     */
    public $DeliveryMode;
    /**
     * The MaxLeadTime
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $MaxLeadTime;
    /**
     * The MinLeadTime
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $MinLeadTime;
    /**
     * The ShippingCharges
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var float
     */
    public $ShippingCharges;
    /**
     * Constructor method for ShippingInformation
     * @uses CdiscountShippingInformation::setAdditionalShippingCharges()
     * @uses CdiscountShippingInformation::setDeliveryMode()
     * @uses CdiscountShippingInformation::setMaxLeadTime()
     * @uses CdiscountShippingInformation::setMinLeadTime()
     * @uses CdiscountShippingInformation::setShippingCharges()
     * @param float $additionalShippingCharges
     * @param \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountDeliveryModeInformation $deliveryMode
     * @param int $maxLeadTime
     * @param int $minLeadTime
     * @param float $shippingCharges
     */
    public function __construct($additionalShippingCharges = null, \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountDeliveryModeInformation $deliveryMode = null, $maxLeadTime = null, $minLeadTime = null, $shippingCharges = null)
    {
        $this
            ->setAdditionalShippingCharges($additionalShippingCharges)
            ->setDeliveryMode($deliveryMode)
            ->setMaxLeadTime($maxLeadTime)
            ->setMinLeadTime($minLeadTime)
            ->setShippingCharges($shippingCharges);
    }
    /**
     * Get AdditionalShippingCharges value
     * @return float|null
     */
    public function getAdditionalShippingCharges()
    {
        return $this->AdditionalShippingCharges;
    }
    /**
     * Set AdditionalShippingCharges value
     * @param float $additionalShippingCharges
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountShippingInformation
     */
    public function setAdditionalShippingCharges($additionalShippingCharges = null)
    {
        // validation for constraint: float
        if (!is_null($additionalShippingCharges) && !(is_float($additionalShippingCharges) || is_numeric($additionalShippingCharges))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($additionalShippingCharges, true), gettype($additionalShippingCharges)), __LINE__);
        }
        $this->AdditionalShippingCharges = $additionalShippingCharges;
        return $this;
    }
    /**
     * Get DeliveryMode value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountDeliveryModeInformation|null
     */
    public function getDeliveryMode()
    {
        return isset($this->DeliveryMode) ? $this->DeliveryMode : null;
    }
    /**
     * Set DeliveryMode value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountDeliveryModeInformation $deliveryMode
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountShippingInformation
     */
    public function setDeliveryMode(\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountDeliveryModeInformation $deliveryMode = null)
    {
        if (is_null($deliveryMode) || (is_array($deliveryMode) && empty($deliveryMode))) {
            unset($this->DeliveryMode);
        } else {
            $this->DeliveryMode = $deliveryMode;
        }
        return $this;
    }
    /**
     * Get MaxLeadTime value
     * @return int|null
     */
    public function getMaxLeadTime()
    {
        return $this->MaxLeadTime;
    }
    /**
     * Set MaxLeadTime value
     * @param int $maxLeadTime
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountShippingInformation
     */
    public function setMaxLeadTime($maxLeadTime = null)
    {
        // validation for constraint: int
        if (!is_null($maxLeadTime) && !(is_int($maxLeadTime) || ctype_digit($maxLeadTime))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($maxLeadTime, true), gettype($maxLeadTime)), __LINE__);
        }
        $this->MaxLeadTime = $maxLeadTime;
        return $this;
    }
    /**
     * Get MinLeadTime value
     * @return int|null
     */
    public function getMinLeadTime()
    {
        return $this->MinLeadTime;
    }
    /**
     * Set MinLeadTime value
     * @param int $minLeadTime
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountShippingInformation
     */
    public function setMinLeadTime($minLeadTime = null)
    {
        // validation for constraint: int
        if (!is_null($minLeadTime) && !(is_int($minLeadTime) || ctype_digit($minLeadTime))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($minLeadTime, true), gettype($minLeadTime)), __LINE__);
        }
        $this->MinLeadTime = $minLeadTime;
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
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountShippingInformation
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
}
