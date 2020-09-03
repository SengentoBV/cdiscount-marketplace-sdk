<?php

namespace SengentoBV\CdiscountMarketplaceSdk\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for OrderQuestion Structs
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:OrderQuestion
 * @package Cdiscount
 * @subpackage Structs
 */
class CdiscountOrderQuestion extends CdiscountDiscussionThreadBase
{
    /**
     * The OrderNumber
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $OrderNumber;
    /**
     * Constructor method for OrderQuestion
     * @uses CdiscountOrderQuestion::setOrderNumber()
     * @param string $orderNumber
     */
    public function __construct($orderNumber = null)
    {
        $this
            ->setOrderNumber($orderNumber);
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
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountOrderQuestion
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
}
