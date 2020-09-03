<?php

namespace SengentoBV\CdiscountMarketplaceSdk\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FulfilmentOrderLine Structs
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:FulfilmentOrderLine
 * @package Cdiscount
 * @subpackage Structs
 */
class CdiscountFulfilmentOrderLine extends AbstractStructBase
{
    /**
     * The ExpectedCustomerDeliveryMax
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $ExpectedCustomerDeliveryMax;
    /**
     * The ExpectedCustomerDeliveryMin
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $ExpectedCustomerDeliveryMin;
    /**
     * The LatestWarehouseDeliveryDate
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $LatestWarehouseDeliveryDate;
    /**
     * The OrderDate
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $OrderDate;
    /**
     * The OrderReference
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $OrderReference;
    /**
     * The ProductEan
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $ProductEan;
    /**
     * The ProductName
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $ProductName;
    /**
     * The Quantity
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $Quantity;
    /**
     * The SellerProductReference
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $SellerProductReference;
    /**
     * The Warehouse
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $Warehouse;
    /**
     * Constructor method for FulfilmentOrderLine
     * @uses CdiscountFulfilmentOrderLine::setExpectedCustomerDeliveryMax()
     * @uses CdiscountFulfilmentOrderLine::setExpectedCustomerDeliveryMin()
     * @uses CdiscountFulfilmentOrderLine::setLatestWarehouseDeliveryDate()
     * @uses CdiscountFulfilmentOrderLine::setOrderDate()
     * @uses CdiscountFulfilmentOrderLine::setOrderReference()
     * @uses CdiscountFulfilmentOrderLine::setProductEan()
     * @uses CdiscountFulfilmentOrderLine::setProductName()
     * @uses CdiscountFulfilmentOrderLine::setQuantity()
     * @uses CdiscountFulfilmentOrderLine::setSellerProductReference()
     * @uses CdiscountFulfilmentOrderLine::setWarehouse()
     * @param string $expectedCustomerDeliveryMax
     * @param string $expectedCustomerDeliveryMin
     * @param string $latestWarehouseDeliveryDate
     * @param string $orderDate
     * @param string $orderReference
     * @param string $productEan
     * @param string $productName
     * @param int $quantity
     * @param string $sellerProductReference
     * @param string $warehouse
     */
    public function __construct($expectedCustomerDeliveryMax = null, $expectedCustomerDeliveryMin = null, $latestWarehouseDeliveryDate = null, $orderDate = null, $orderReference = null, $productEan = null, $productName = null, $quantity = null, $sellerProductReference = null, $warehouse = null)
    {
        $this
            ->setExpectedCustomerDeliveryMax($expectedCustomerDeliveryMax)
            ->setExpectedCustomerDeliveryMin($expectedCustomerDeliveryMin)
            ->setLatestWarehouseDeliveryDate($latestWarehouseDeliveryDate)
            ->setOrderDate($orderDate)
            ->setOrderReference($orderReference)
            ->setProductEan($productEan)
            ->setProductName($productName)
            ->setQuantity($quantity)
            ->setSellerProductReference($sellerProductReference)
            ->setWarehouse($warehouse);
    }
    /**
     * Get ExpectedCustomerDeliveryMax value
     * @return string|null
     */
    public function getExpectedCustomerDeliveryMax()
    {
        return $this->ExpectedCustomerDeliveryMax;
    }
    /**
     * Set ExpectedCustomerDeliveryMax value
     * @param string $expectedCustomerDeliveryMax
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountFulfilmentOrderLine
     */
    public function setExpectedCustomerDeliveryMax($expectedCustomerDeliveryMax = null)
    {
        // validation for constraint: string
        if (!is_null($expectedCustomerDeliveryMax) && !is_string($expectedCustomerDeliveryMax)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($expectedCustomerDeliveryMax, true), gettype($expectedCustomerDeliveryMax)), __LINE__);
        }
        $this->ExpectedCustomerDeliveryMax = $expectedCustomerDeliveryMax;
        return $this;
    }
    /**
     * Get ExpectedCustomerDeliveryMin value
     * @return string|null
     */
    public function getExpectedCustomerDeliveryMin()
    {
        return $this->ExpectedCustomerDeliveryMin;
    }
    /**
     * Set ExpectedCustomerDeliveryMin value
     * @param string $expectedCustomerDeliveryMin
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountFulfilmentOrderLine
     */
    public function setExpectedCustomerDeliveryMin($expectedCustomerDeliveryMin = null)
    {
        // validation for constraint: string
        if (!is_null($expectedCustomerDeliveryMin) && !is_string($expectedCustomerDeliveryMin)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($expectedCustomerDeliveryMin, true), gettype($expectedCustomerDeliveryMin)), __LINE__);
        }
        $this->ExpectedCustomerDeliveryMin = $expectedCustomerDeliveryMin;
        return $this;
    }
    /**
     * Get LatestWarehouseDeliveryDate value
     * @return string|null
     */
    public function getLatestWarehouseDeliveryDate()
    {
        return $this->LatestWarehouseDeliveryDate;
    }
    /**
     * Set LatestWarehouseDeliveryDate value
     * @param string $latestWarehouseDeliveryDate
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountFulfilmentOrderLine
     */
    public function setLatestWarehouseDeliveryDate($latestWarehouseDeliveryDate = null)
    {
        // validation for constraint: string
        if (!is_null($latestWarehouseDeliveryDate) && !is_string($latestWarehouseDeliveryDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($latestWarehouseDeliveryDate, true), gettype($latestWarehouseDeliveryDate)), __LINE__);
        }
        $this->LatestWarehouseDeliveryDate = $latestWarehouseDeliveryDate;
        return $this;
    }
    /**
     * Get OrderDate value
     * @return string|null
     */
    public function getOrderDate()
    {
        return $this->OrderDate;
    }
    /**
     * Set OrderDate value
     * @param string $orderDate
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountFulfilmentOrderLine
     */
    public function setOrderDate($orderDate = null)
    {
        // validation for constraint: string
        if (!is_null($orderDate) && !is_string($orderDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($orderDate, true), gettype($orderDate)), __LINE__);
        }
        $this->OrderDate = $orderDate;
        return $this;
    }
    /**
     * Get OrderReference value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getOrderReference()
    {
        return isset($this->OrderReference) ? $this->OrderReference : null;
    }
    /**
     * Set OrderReference value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $orderReference
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountFulfilmentOrderLine
     */
    public function setOrderReference($orderReference = null)
    {
        // validation for constraint: string
        if (!is_null($orderReference) && !is_string($orderReference)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($orderReference, true), gettype($orderReference)), __LINE__);
        }
        if (is_null($orderReference) || (is_array($orderReference) && empty($orderReference))) {
            unset($this->OrderReference);
        } else {
            $this->OrderReference = $orderReference;
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
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountFulfilmentOrderLine
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
     * Get ProductName value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getProductName()
    {
        return isset($this->ProductName) ? $this->ProductName : null;
    }
    /**
     * Set ProductName value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $productName
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountFulfilmentOrderLine
     */
    public function setProductName($productName = null)
    {
        // validation for constraint: string
        if (!is_null($productName) && !is_string($productName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($productName, true), gettype($productName)), __LINE__);
        }
        if (is_null($productName) || (is_array($productName) && empty($productName))) {
            unset($this->ProductName);
        } else {
            $this->ProductName = $productName;
        }
        return $this;
    }
    /**
     * Get Quantity value
     * @return int|null
     */
    public function getQuantity()
    {
        return $this->Quantity;
    }
    /**
     * Set Quantity value
     * @param int $quantity
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountFulfilmentOrderLine
     */
    public function setQuantity($quantity = null)
    {
        // validation for constraint: int
        if (!is_null($quantity) && !(is_int($quantity) || ctype_digit($quantity))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($quantity, true), gettype($quantity)), __LINE__);
        }
        $this->Quantity = $quantity;
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
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountFulfilmentOrderLine
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
     * Get Warehouse value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getWarehouse()
    {
        return isset($this->Warehouse) ? $this->Warehouse : null;
    }
    /**
     * Set Warehouse value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @uses \SengentoBV\CdiscountMarketplaceSdk\Enums\CdiscountWarehouseType::valueIsValid()
     * @uses \SengentoBV\CdiscountMarketplaceSdk\Enums\CdiscountWarehouseType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $warehouse
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountFulfilmentOrderLine
     */
    public function setWarehouse($warehouse = null)
    {
        // validation for constraint: enumeration
        if (!\SengentoBV\CdiscountMarketplaceSdk\Enums\CdiscountWarehouseType::valueIsValid($warehouse)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \SengentoBV\CdiscountMarketplaceSdk\Enums\CdiscountWarehouseType', is_array($warehouse) ? implode(', ', $warehouse) : var_export($warehouse, true), implode(', ', \SengentoBV\CdiscountMarketplaceSdk\Enums\CdiscountWarehouseType::getValidValues())), __LINE__);
        }
        if (is_null($warehouse) || (is_array($warehouse) && empty($warehouse))) {
            unset($this->Warehouse);
        } else {
            $this->Warehouse = $warehouse;
        }
        return $this;
    }
}
