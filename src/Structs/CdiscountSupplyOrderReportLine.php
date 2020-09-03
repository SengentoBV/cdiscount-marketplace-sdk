<?php

namespace SengentoBV\CdiscountMarketplaceSdk\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SupplyOrderReportLine Structs
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:SupplyOrderReportLine
 * @package Cdiscount
 * @subpackage Structs
 */
class CdiscountSupplyOrderReportLine extends AbstractStructBase
{
    /**
     * The ErrorDetails
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfKeyValueOfintstring
     */
    public $ErrorDetails;
    /**
     * The OrderedQuantity
     * @var int
     */
    public $OrderedQuantity;
    /**
     * The ProductEan
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $ProductEan;
    /**
     * The SellerId
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $SellerId;
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
     * The SupplyOrderNumber
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $SupplyOrderNumber;
    /**
     * The Warehouse
     * Meta information extracted from the WSDL
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
     * Constructor method for SupplyOrderReportLine
     * @uses CdiscountSupplyOrderReportLine::setErrorDetails()
     * @uses CdiscountSupplyOrderReportLine::setOrderedQuantity()
     * @uses CdiscountSupplyOrderReportLine::setProductEan()
     * @uses CdiscountSupplyOrderReportLine::setSellerId()
     * @uses CdiscountSupplyOrderReportLine::setSellerProductReference()
     * @uses CdiscountSupplyOrderReportLine::setSellerSupplyOrderNumber()
     * @uses CdiscountSupplyOrderReportLine::setSupplyOrderNumber()
     * @uses CdiscountSupplyOrderReportLine::setWarehouse()
     * @uses CdiscountSupplyOrderReportLine::setWarehouseReceptionMinDate()
     * @param \SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfKeyValueOfintstring $errorDetails
     * @param int $orderedQuantity
     * @param string $productEan
     * @param int $sellerId
     * @param string $sellerProductReference
     * @param string $sellerSupplyOrderNumber
     * @param string $supplyOrderNumber
     * @param string $warehouse
     * @param string $warehouseReceptionMinDate
     */
    public function __construct(\SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfKeyValueOfintstring $errorDetails = null, $orderedQuantity = null, $productEan = null, $sellerId = null, $sellerProductReference = null, $sellerSupplyOrderNumber = null, $supplyOrderNumber = null, $warehouse = null, $warehouseReceptionMinDate = null)
    {
        $this
            ->setErrorDetails($errorDetails)
            ->setOrderedQuantity($orderedQuantity)
            ->setProductEan($productEan)
            ->setSellerId($sellerId)
            ->setSellerProductReference($sellerProductReference)
            ->setSellerSupplyOrderNumber($sellerSupplyOrderNumber)
            ->setSupplyOrderNumber($supplyOrderNumber)
            ->setWarehouse($warehouse)
            ->setWarehouseReceptionMinDate($warehouseReceptionMinDate);
    }
    /**
     * Get ErrorDetails value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfKeyValueOfintstring|null
     */
    public function getErrorDetails()
    {
        return isset($this->ErrorDetails) ? $this->ErrorDetails : null;
    }
    /**
     * Set ErrorDetails value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfKeyValueOfintstring $errorDetails
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountSupplyOrderReportLine
     */
    public function setErrorDetails(\SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfKeyValueOfintstring $errorDetails = null)
    {
        if (is_null($errorDetails) || (is_array($errorDetails) && empty($errorDetails))) {
            unset($this->ErrorDetails);
        } else {
            $this->ErrorDetails = $errorDetails;
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
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountSupplyOrderReportLine
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
     * @return string|null
     */
    public function getProductEan()
    {
        return $this->ProductEan;
    }
    /**
     * Set ProductEan value
     * @param string $productEan
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountSupplyOrderReportLine
     */
    public function setProductEan($productEan = null)
    {
        // validation for constraint: string
        if (!is_null($productEan) && !is_string($productEan)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($productEan, true), gettype($productEan)), __LINE__);
        }
        $this->ProductEan = $productEan;
        return $this;
    }
    /**
     * Get SellerId value
     * @return int|null
     */
    public function getSellerId()
    {
        return $this->SellerId;
    }
    /**
     * Set SellerId value
     * @param int $sellerId
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountSupplyOrderReportLine
     */
    public function setSellerId($sellerId = null)
    {
        // validation for constraint: int
        if (!is_null($sellerId) && !(is_int($sellerId) || ctype_digit($sellerId))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($sellerId, true), gettype($sellerId)), __LINE__);
        }
        $this->SellerId = $sellerId;
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
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountSupplyOrderReportLine
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
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountSupplyOrderReportLine
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
     * Get SupplyOrderNumber value
     * @return string|null
     */
    public function getSupplyOrderNumber()
    {
        return $this->SupplyOrderNumber;
    }
    /**
     * Set SupplyOrderNumber value
     * @param string $supplyOrderNumber
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountSupplyOrderReportLine
     */
    public function setSupplyOrderNumber($supplyOrderNumber = null)
    {
        // validation for constraint: string
        if (!is_null($supplyOrderNumber) && !is_string($supplyOrderNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($supplyOrderNumber, true), gettype($supplyOrderNumber)), __LINE__);
        }
        $this->SupplyOrderNumber = $supplyOrderNumber;
        return $this;
    }
    /**
     * Get Warehouse value
     * @return string|null
     */
    public function getWarehouse()
    {
        return $this->Warehouse;
    }
    /**
     * Set Warehouse value
     * @uses \SengentoBV\CdiscountMarketplaceSdk\Enums\CdiscountWarehouseType::valueIsValid()
     * @uses \SengentoBV\CdiscountMarketplaceSdk\Enums\CdiscountWarehouseType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $warehouse
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountSupplyOrderReportLine
     */
    public function setWarehouse($warehouse = null)
    {
        // validation for constraint: enumeration
        if (!\SengentoBV\CdiscountMarketplaceSdk\Enums\CdiscountWarehouseType::valueIsValid($warehouse)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \SengentoBV\CdiscountMarketplaceSdk\Enums\CdiscountWarehouseType', is_array($warehouse) ? implode(', ', $warehouse) : var_export($warehouse, true), implode(', ', \SengentoBV\CdiscountMarketplaceSdk\Enums\CdiscountWarehouseType::getValidValues())), __LINE__);
        }
        $this->Warehouse = $warehouse;
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
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountSupplyOrderReportLine
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
