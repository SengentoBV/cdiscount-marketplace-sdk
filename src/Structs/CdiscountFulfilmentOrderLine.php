<?php

declare(strict_types=1);

namespace SengentoBV\CdiscountMarketplaceSdk\Structs;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

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
     * @var string|null
     */
    protected ?string $ExpectedCustomerDeliveryMax = null;
    /**
     * The ExpectedCustomerDeliveryMin
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $ExpectedCustomerDeliveryMin = null;
    /**
     * The LatestWarehouseDeliveryDate
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $LatestWarehouseDeliveryDate = null;
    /**
     * The OrderDate
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $OrderDate = null;
    /**
     * The OrderReference
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $OrderReference = null;
    /**
     * The ProductEan
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $ProductEan = null;
    /**
     * The ProductName
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $ProductName = null;
    /**
     * The Quantity
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $Quantity = null;
    /**
     * The SellerProductReference
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $SellerProductReference = null;
    /**
     * The Warehouse
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $Warehouse = null;
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
    public function __construct(?string $expectedCustomerDeliveryMax = null, ?string $expectedCustomerDeliveryMin = null, ?string $latestWarehouseDeliveryDate = null, ?string $orderDate = null, ?string $orderReference = null, ?string $productEan = null, ?string $productName = null, ?int $quantity = null, ?string $sellerProductReference = null, ?string $warehouse = null)
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
    public function getExpectedCustomerDeliveryMax(): ?string
    {
        return $this->ExpectedCustomerDeliveryMax;
    }
    /**
     * Set ExpectedCustomerDeliveryMax value
     * @param string $expectedCustomerDeliveryMax
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountFulfilmentOrderLine
     */
    public function setExpectedCustomerDeliveryMax(?string $expectedCustomerDeliveryMax = null): self
    {
        // validation for constraint: string
        if (!is_null($expectedCustomerDeliveryMax) && !is_string($expectedCustomerDeliveryMax)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($expectedCustomerDeliveryMax, true), gettype($expectedCustomerDeliveryMax)), __LINE__);
        }
        $this->ExpectedCustomerDeliveryMax = $expectedCustomerDeliveryMax;
        
        return $this;
    }
    /**
     * Get ExpectedCustomerDeliveryMin value
     * @return string|null
     */
    public function getExpectedCustomerDeliveryMin(): ?string
    {
        return $this->ExpectedCustomerDeliveryMin;
    }
    /**
     * Set ExpectedCustomerDeliveryMin value
     * @param string $expectedCustomerDeliveryMin
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountFulfilmentOrderLine
     */
    public function setExpectedCustomerDeliveryMin(?string $expectedCustomerDeliveryMin = null): self
    {
        // validation for constraint: string
        if (!is_null($expectedCustomerDeliveryMin) && !is_string($expectedCustomerDeliveryMin)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($expectedCustomerDeliveryMin, true), gettype($expectedCustomerDeliveryMin)), __LINE__);
        }
        $this->ExpectedCustomerDeliveryMin = $expectedCustomerDeliveryMin;
        
        return $this;
    }
    /**
     * Get LatestWarehouseDeliveryDate value
     * @return string|null
     */
    public function getLatestWarehouseDeliveryDate(): ?string
    {
        return $this->LatestWarehouseDeliveryDate;
    }
    /**
     * Set LatestWarehouseDeliveryDate value
     * @param string $latestWarehouseDeliveryDate
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountFulfilmentOrderLine
     */
    public function setLatestWarehouseDeliveryDate(?string $latestWarehouseDeliveryDate = null): self
    {
        // validation for constraint: string
        if (!is_null($latestWarehouseDeliveryDate) && !is_string($latestWarehouseDeliveryDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($latestWarehouseDeliveryDate, true), gettype($latestWarehouseDeliveryDate)), __LINE__);
        }
        $this->LatestWarehouseDeliveryDate = $latestWarehouseDeliveryDate;
        
        return $this;
    }
    /**
     * Get OrderDate value
     * @return string|null
     */
    public function getOrderDate(): ?string
    {
        return $this->OrderDate;
    }
    /**
     * Set OrderDate value
     * @param string $orderDate
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountFulfilmentOrderLine
     */
    public function setOrderDate(?string $orderDate = null): self
    {
        // validation for constraint: string
        if (!is_null($orderDate) && !is_string($orderDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($orderDate, true), gettype($orderDate)), __LINE__);
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
    public function getOrderReference(): ?string
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
    public function setOrderReference(?string $orderReference = null): self
    {
        // validation for constraint: string
        if (!is_null($orderReference) && !is_string($orderReference)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($orderReference, true), gettype($orderReference)), __LINE__);
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
    public function getProductEan(): ?string
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
    public function setProductEan(?string $productEan = null): self
    {
        // validation for constraint: string
        if (!is_null($productEan) && !is_string($productEan)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($productEan, true), gettype($productEan)), __LINE__);
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
    public function getProductName(): ?string
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
    public function setProductName(?string $productName = null): self
    {
        // validation for constraint: string
        if (!is_null($productName) && !is_string($productName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($productName, true), gettype($productName)), __LINE__);
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
    public function getQuantity(): ?int
    {
        return $this->Quantity;
    }
    /**
     * Set Quantity value
     * @param int $quantity
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountFulfilmentOrderLine
     */
    public function setQuantity(?int $quantity = null): self
    {
        // validation for constraint: int
        if (!is_null($quantity) && !(is_int($quantity) || ctype_digit($quantity))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($quantity, true), gettype($quantity)), __LINE__);
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
    public function getSellerProductReference(): ?string
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
     * Get Warehouse value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getWarehouse(): ?string
    {
        return isset($this->Warehouse) ? $this->Warehouse : null;
    }
    /**
     * Set Warehouse value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @uses \SengentoBV\CdiscountMarketplaceSdk\Enums\CdiscountWarehouseType::valueIsValid()
     * @uses \SengentoBV\CdiscountMarketplaceSdk\Enums\CdiscountWarehouseType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $warehouse
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountFulfilmentOrderLine
     */
    public function setWarehouse(?string $warehouse = null): self
    {
        // validation for constraint: enumeration
        if (!\SengentoBV\CdiscountMarketplaceSdk\Enums\CdiscountWarehouseType::valueIsValid($warehouse)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \SengentoBV\CdiscountMarketplaceSdk\Enums\CdiscountWarehouseType', is_array($warehouse) ? implode(', ', $warehouse) : var_export($warehouse, true), implode(', ', \SengentoBV\CdiscountMarketplaceSdk\Enums\CdiscountWarehouseType::getValidValues())), __LINE__);
        }
        if (is_null($warehouse) || (is_array($warehouse) && empty($warehouse))) {
            unset($this->Warehouse);
        } else {
            $this->Warehouse = $warehouse;
        }
        
        return $this;
    }
}
