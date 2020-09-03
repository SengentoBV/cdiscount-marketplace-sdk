<?php

namespace SengentoBV\CdiscountMarketplaceSdk\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ExternalOrder Structs
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ExternalOrder
 * @package Cdiscount
 * @subpackage Structs
 */
class CdiscountExternalOrder extends AbstractStructBase
{
    /**
     * The Comments
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $Comments;
    /**
     * The Corporation
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $Corporation;
    /**
     * The Customer
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountExternalCustomer
     */
    public $Customer;
    /**
     * The CustomerOrderNumber
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $CustomerOrderNumber;
    /**
     * The OrderDate
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $OrderDate;
    /**
     * The OrderLineList
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var \SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfExternalOrderLine
     */
    public $OrderLineList;
    /**
     * The ShippingDateFromSeller
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $ShippingDateFromSeller;
    /**
     * The ShippingMode
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $ShippingMode;
    /**
     * Constructor method for ExternalOrder
     * @uses CdiscountExternalOrder::setComments()
     * @uses CdiscountExternalOrder::setCorporation()
     * @uses CdiscountExternalOrder::setCustomer()
     * @uses CdiscountExternalOrder::setCustomerOrderNumber()
     * @uses CdiscountExternalOrder::setOrderDate()
     * @uses CdiscountExternalOrder::setOrderLineList()
     * @uses CdiscountExternalOrder::setShippingDateFromSeller()
     * @uses CdiscountExternalOrder::setShippingMode()
     * @param string $comments
     * @param string $corporation
     * @param \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountExternalCustomer $customer
     * @param string $customerOrderNumber
     * @param string $orderDate
     * @param \SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfExternalOrderLine $orderLineList
     * @param string $shippingDateFromSeller
     * @param string $shippingMode
     */
    public function __construct($comments = null, $corporation = null, \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountExternalCustomer $customer = null, $customerOrderNumber = null, $orderDate = null, \SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfExternalOrderLine $orderLineList = null, $shippingDateFromSeller = null, $shippingMode = null)
    {
        $this
            ->setComments($comments)
            ->setCorporation($corporation)
            ->setCustomer($customer)
            ->setCustomerOrderNumber($customerOrderNumber)
            ->setOrderDate($orderDate)
            ->setOrderLineList($orderLineList)
            ->setShippingDateFromSeller($shippingDateFromSeller)
            ->setShippingMode($shippingMode);
    }
    /**
     * Get Comments value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getComments()
    {
        return isset($this->Comments) ? $this->Comments : null;
    }
    /**
     * Set Comments value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $comments
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountExternalOrder
     */
    public function setComments($comments = null)
    {
        // validation for constraint: string
        if (!is_null($comments) && !is_string($comments)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($comments, true), gettype($comments)), __LINE__);
        }
        if (is_null($comments) || (is_array($comments) && empty($comments))) {
            unset($this->Comments);
        } else {
            $this->Comments = $comments;
        }
        return $this;
    }
    /**
     * Get Corporation value
     * @return string|null
     */
    public function getCorporation()
    {
        return $this->Corporation;
    }
    /**
     * Set Corporation value
     * @param string $corporation
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountExternalOrder
     */
    public function setCorporation($corporation = null)
    {
        // validation for constraint: string
        if (!is_null($corporation) && !is_string($corporation)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($corporation, true), gettype($corporation)), __LINE__);
        }
        $this->Corporation = $corporation;
        return $this;
    }
    /**
     * Get Customer value
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountExternalCustomer|null
     */
    public function getCustomer()
    {
        return $this->Customer;
    }
    /**
     * Set Customer value
     * @param \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountExternalCustomer $customer
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountExternalOrder
     */
    public function setCustomer(\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountExternalCustomer $customer = null)
    {
        $this->Customer = $customer;
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
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountExternalOrder
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
    /**
     * Get OrderDate value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getOrderDate()
    {
        return isset($this->OrderDate) ? $this->OrderDate : null;
    }
    /**
     * Set OrderDate value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $orderDate
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountExternalOrder
     */
    public function setOrderDate($orderDate = null)
    {
        // validation for constraint: string
        if (!is_null($orderDate) && !is_string($orderDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($orderDate, true), gettype($orderDate)), __LINE__);
        }
        if (is_null($orderDate) || (is_array($orderDate) && empty($orderDate))) {
            unset($this->OrderDate);
        } else {
            $this->OrderDate = $orderDate;
        }
        return $this;
    }
    /**
     * Get OrderLineList value
     * @return \SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfExternalOrderLine|null
     */
    public function getOrderLineList()
    {
        return $this->OrderLineList;
    }
    /**
     * Set OrderLineList value
     * @param \SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfExternalOrderLine $orderLineList
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountExternalOrder
     */
    public function setOrderLineList(\SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfExternalOrderLine $orderLineList = null)
    {
        $this->OrderLineList = $orderLineList;
        return $this;
    }
    /**
     * Get ShippingDateFromSeller value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getShippingDateFromSeller()
    {
        return isset($this->ShippingDateFromSeller) ? $this->ShippingDateFromSeller : null;
    }
    /**
     * Set ShippingDateFromSeller value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $shippingDateFromSeller
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountExternalOrder
     */
    public function setShippingDateFromSeller($shippingDateFromSeller = null)
    {
        // validation for constraint: string
        if (!is_null($shippingDateFromSeller) && !is_string($shippingDateFromSeller)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($shippingDateFromSeller, true), gettype($shippingDateFromSeller)), __LINE__);
        }
        if (is_null($shippingDateFromSeller) || (is_array($shippingDateFromSeller) && empty($shippingDateFromSeller))) {
            unset($this->ShippingDateFromSeller);
        } else {
            $this->ShippingDateFromSeller = $shippingDateFromSeller;
        }
        return $this;
    }
    /**
     * Get ShippingMode value
     * @return string|null
     */
    public function getShippingMode()
    {
        return $this->ShippingMode;
    }
    /**
     * Set ShippingMode value
     * @param string $shippingMode
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountExternalOrder
     */
    public function setShippingMode($shippingMode = null)
    {
        // validation for constraint: string
        if (!is_null($shippingMode) && !is_string($shippingMode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($shippingMode, true), gettype($shippingMode)), __LINE__);
        }
        $this->ShippingMode = $shippingMode;
        return $this;
    }
}
