<?php

namespace SengentoBV\CdiscountMarketplaceSdk\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SupplyOrderLine Structs
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:SupplyOrderLine
 * @package Cdiscount
 * @subpackage Structs
 */
class CdiscountSupplyOrderLine extends AbstractStructBase
{
    /**
     * The IsFod
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $IsFod;
    /**
     * The OrderReferenceList
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfstring
     */
    public $OrderReferenceList;
    /**
     * The OrderedQuantity
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $OrderedQuantity;
    /**
     * The ProductEan
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $ProductEan;
    /**
     * The ReceivedQuantity
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var int
     */
    public $ReceivedQuantity;
    /**
     * The SellerProductReference
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $SellerProductReference;
    /**
     * The SellerSupplyOrderNumber
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $SellerSupplyOrderNumber;
    /**
     * The Status
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $Status;
    /**
     * The SupplyOrderNumber
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $SupplyOrderNumber;
    /**
     * The UndeliveredQuantity
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $UndeliveredQuantity;
    /**
     * The Warehouse
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $Warehouse;
    /**
     * The WarehouseReceptionMinDate
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $WarehouseReceptionMinDate;
    /**
     * Constructor method for SupplyOrderLine
     * @uses CdiscountSupplyOrderLine::setIsFod()
     * @uses CdiscountSupplyOrderLine::setOrderReferenceList()
     * @uses CdiscountSupplyOrderLine::setOrderedQuantity()
     * @uses CdiscountSupplyOrderLine::setProductEan()
     * @uses CdiscountSupplyOrderLine::setReceivedQuantity()
     * @uses CdiscountSupplyOrderLine::setSellerProductReference()
     * @uses CdiscountSupplyOrderLine::setSellerSupplyOrderNumber()
     * @uses CdiscountSupplyOrderLine::setStatus()
     * @uses CdiscountSupplyOrderLine::setSupplyOrderNumber()
     * @uses CdiscountSupplyOrderLine::setUndeliveredQuantity()
     * @uses CdiscountSupplyOrderLine::setWarehouse()
     * @uses CdiscountSupplyOrderLine::setWarehouseReceptionMinDate()
     * @param bool $isFod
     * @param \SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfstring $orderReferenceList
     * @param int $orderedQuantity
     * @param string $productEan
     * @param int $receivedQuantity
     * @param string $sellerProductReference
     * @param string $sellerSupplyOrderNumber
     * @param string $status
     * @param string $supplyOrderNumber
     * @param int $undeliveredQuantity
     * @param string $warehouse
     * @param string $warehouseReceptionMinDate
     */
    public function __construct($isFod = null, \SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfstring $orderReferenceList = null, $orderedQuantity = null, $productEan = null, $receivedQuantity = null, $sellerProductReference = null, $sellerSupplyOrderNumber = null, $status = null, $supplyOrderNumber = null, $undeliveredQuantity = null, $warehouse = null, $warehouseReceptionMinDate = null)
    {
        $this
            ->setIsFod($isFod)
            ->setOrderReferenceList($orderReferenceList)
            ->setOrderedQuantity($orderedQuantity)
            ->setProductEan($productEan)
            ->setReceivedQuantity($receivedQuantity)
            ->setSellerProductReference($sellerProductReference)
            ->setSellerSupplyOrderNumber($sellerSupplyOrderNumber)
            ->setStatus($status)
            ->setSupplyOrderNumber($supplyOrderNumber)
            ->setUndeliveredQuantity($undeliveredQuantity)
            ->setWarehouse($warehouse)
            ->setWarehouseReceptionMinDate($warehouseReceptionMinDate);
    }
    /**
     * Get IsFod value
     * @return bool|null
     */
    public function getIsFod()
    {
        return $this->IsFod;
    }
    /**
     * Set IsFod value
     * @param bool $isFod
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountSupplyOrderLine
     */
    public function setIsFod($isFod = null)
    {
        // validation for constraint: boolean
        if (!is_null($isFod) && !is_bool($isFod)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isFod, true), gettype($isFod)), __LINE__);
        }
        $this->IsFod = $isFod;
        return $this;
    }
    /**
     * Get OrderReferenceList value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfstring|null
     */
    public function getOrderReferenceList()
    {
        return isset($this->OrderReferenceList) ? $this->OrderReferenceList : null;
    }
    /**
     * Set OrderReferenceList value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfstring $orderReferenceList
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountSupplyOrderLine
     */
    public function setOrderReferenceList(\SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfstring $orderReferenceList = null)
    {
        if (is_null($orderReferenceList) || (is_array($orderReferenceList) && empty($orderReferenceList))) {
            unset($this->OrderReferenceList);
        } else {
            $this->OrderReferenceList = $orderReferenceList;
        }
        return $this;
    }
    /**
     * Get OrderedQuantity value
     * @return int|null
     */
    public function getOrderedQuantity()
    {
        return $this->OrderedQuantity;
    }
    /**
     * Set OrderedQuantity value
     * @param int $orderedQuantity
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountSupplyOrderLine
     */
    public function setOrderedQuantity($orderedQuantity = null)
    {
        // validation for constraint: int
        if (!is_null($orderedQuantity) && !(is_int($orderedQuantity) || ctype_digit($orderedQuantity))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($orderedQuantity, true), gettype($orderedQuantity)), __LINE__);
        }
        $this->OrderedQuantity = $orderedQuantity;
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
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountSupplyOrderLine
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
     * Get ReceivedQuantity value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return int|null
     */
    public function getReceivedQuantity()
    {
        return isset($this->ReceivedQuantity) ? $this->ReceivedQuantity : null;
    }
    /**
     * Set ReceivedQuantity value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param int $receivedQuantity
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountSupplyOrderLine
     */
    public function setReceivedQuantity($receivedQuantity = null)
    {
        // validation for constraint: int
        if (!is_null($receivedQuantity) && !(is_int($receivedQuantity) || ctype_digit($receivedQuantity))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($receivedQuantity, true), gettype($receivedQuantity)), __LINE__);
        }
        if (is_null($receivedQuantity) || (is_array($receivedQuantity) && empty($receivedQuantity))) {
            unset($this->ReceivedQuantity);
        } else {
            $this->ReceivedQuantity = $receivedQuantity;
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
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountSupplyOrderLine
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
     * Get SellerSupplyOrderNumber value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getSellerSupplyOrderNumber()
    {
        return isset($this->SellerSupplyOrderNumber) ? $this->SellerSupplyOrderNumber : null;
    }
    /**
     * Set SellerSupplyOrderNumber value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $sellerSupplyOrderNumber
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountSupplyOrderLine
     */
    public function setSellerSupplyOrderNumber($sellerSupplyOrderNumber = null)
    {
        // validation for constraint: string
        if (!is_null($sellerSupplyOrderNumber) && !is_string($sellerSupplyOrderNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($sellerSupplyOrderNumber, true), gettype($sellerSupplyOrderNumber)), __LINE__);
        }
        if (is_null($sellerSupplyOrderNumber) || (is_array($sellerSupplyOrderNumber) && empty($sellerSupplyOrderNumber))) {
            unset($this->SellerSupplyOrderNumber);
        } else {
            $this->SellerSupplyOrderNumber = $sellerSupplyOrderNumber;
        }
        return $this;
    }
    /**
     * Get Status value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getStatus()
    {
        return isset($this->Status) ? $this->Status : null;
    }
    /**
     * Set Status value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @uses \SengentoBV\CdiscountMarketplaceSdk\Enums\CdiscountSupplyOrderStatusType::valueIsValid()
     * @uses \SengentoBV\CdiscountMarketplaceSdk\Enums\CdiscountSupplyOrderStatusType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $status
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountSupplyOrderLine
     */
    public function setStatus($status = null)
    {
        // validation for constraint: enumeration
        if (!\SengentoBV\CdiscountMarketplaceSdk\Enums\CdiscountSupplyOrderStatusType::valueIsValid($status)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \SengentoBV\CdiscountMarketplaceSdk\Enums\CdiscountSupplyOrderStatusType', is_array($status) ? implode(', ', $status) : var_export($status, true), implode(', ', \SengentoBV\CdiscountMarketplaceSdk\Enums\CdiscountSupplyOrderStatusType::getValidValues())), __LINE__);
        }
        if (is_null($status) || (is_array($status) && empty($status))) {
            unset($this->Status);
        } else {
            $this->Status = $status;
        }
        return $this;
    }
    /**
     * Get SupplyOrderNumber value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getSupplyOrderNumber()
    {
        return isset($this->SupplyOrderNumber) ? $this->SupplyOrderNumber : null;
    }
    /**
     * Set SupplyOrderNumber value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $supplyOrderNumber
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountSupplyOrderLine
     */
    public function setSupplyOrderNumber($supplyOrderNumber = null)
    {
        // validation for constraint: string
        if (!is_null($supplyOrderNumber) && !is_string($supplyOrderNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($supplyOrderNumber, true), gettype($supplyOrderNumber)), __LINE__);
        }
        if (is_null($supplyOrderNumber) || (is_array($supplyOrderNumber) && empty($supplyOrderNumber))) {
            unset($this->SupplyOrderNumber);
        } else {
            $this->SupplyOrderNumber = $supplyOrderNumber;
        }
        return $this;
    }
    /**
     * Get UndeliveredQuantity value
     * @return int|null
     */
    public function getUndeliveredQuantity()
    {
        return $this->UndeliveredQuantity;
    }
    /**
     * Set UndeliveredQuantity value
     * @param int $undeliveredQuantity
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountSupplyOrderLine
     */
    public function setUndeliveredQuantity($undeliveredQuantity = null)
    {
        // validation for constraint: int
        if (!is_null($undeliveredQuantity) && !(is_int($undeliveredQuantity) || ctype_digit($undeliveredQuantity))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($undeliveredQuantity, true), gettype($undeliveredQuantity)), __LINE__);
        }
        $this->UndeliveredQuantity = $undeliveredQuantity;
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
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountSupplyOrderLine
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
    /**
     * Get WarehouseReceptionMinDate value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getWarehouseReceptionMinDate()
    {
        return isset($this->WarehouseReceptionMinDate) ? $this->WarehouseReceptionMinDate : null;
    }
    /**
     * Set WarehouseReceptionMinDate value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $warehouseReceptionMinDate
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountSupplyOrderLine
     */
    public function setWarehouseReceptionMinDate($warehouseReceptionMinDate = null)
    {
        // validation for constraint: string
        if (!is_null($warehouseReceptionMinDate) && !is_string($warehouseReceptionMinDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($warehouseReceptionMinDate, true), gettype($warehouseReceptionMinDate)), __LINE__);
        }
        if (is_null($warehouseReceptionMinDate) || (is_array($warehouseReceptionMinDate) && empty($warehouseReceptionMinDate))) {
            unset($this->WarehouseReceptionMinDate);
        } else {
            $this->WarehouseReceptionMinDate = $warehouseReceptionMinDate;
        }
        return $this;
    }
}
