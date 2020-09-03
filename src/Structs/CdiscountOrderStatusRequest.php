<?php

namespace SengentoBV\CdiscountMarketplaceSdk\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for OrderStatusRequest Structs
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:OrderStatusRequest
 * @package Cdiscount
 * @subpackage Structs
 */
class CdiscountOrderStatusRequest extends AbstractStructBase
{
    /**
     * The Corporation
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $Corporation;
    /**
     * The CustomerOrderNumber
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $CustomerOrderNumber;
    /**
     * Constructor method for OrderStatusRequest
     * @uses CdiscountOrderStatusRequest::setCorporation()
     * @uses CdiscountOrderStatusRequest::setCustomerOrderNumber()
     * @param string $corporation
     * @param string $customerOrderNumber
     */
    public function __construct($corporation = null, $customerOrderNumber = null)
    {
        $this
            ->setCorporation($corporation)
            ->setCustomerOrderNumber($customerOrderNumber);
    }
    /**
     * Get Corporation value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getCorporation()
    {
        return isset($this->Corporation) ? $this->Corporation : null;
    }
    /**
     * Set Corporation value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $corporation
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountOrderStatusRequest
     */
    public function setCorporation($corporation = null)
    {
        // validation for constraint: string
        if (!is_null($corporation) && !is_string($corporation)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($corporation, true), gettype($corporation)), __LINE__);
        }
        if (is_null($corporation) || (is_array($corporation) && empty($corporation))) {
            unset($this->Corporation);
        } else {
            $this->Corporation = $corporation;
        }
        return $this;
    }
    /**
     * Get CustomerOrderNumber value
     * @return string|null
     */
    public function getCustomerOrderNumber()
    {
        return $this->CustomerOrderNumber;
    }
    /**
     * Set CustomerOrderNumber value
     * @param string $customerOrderNumber
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountOrderStatusRequest
     */
    public function setCustomerOrderNumber($customerOrderNumber = null)
    {
        // validation for constraint: string
        if (!is_null($customerOrderNumber) && !is_string($customerOrderNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($customerOrderNumber, true), gettype($customerOrderNumber)), __LINE__);
        }
        $this->CustomerOrderNumber = $customerOrderNumber;
        return $this;
    }
}
