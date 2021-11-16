<?php

declare(strict_types=1);

namespace SengentoBV\CdiscountMarketplaceSdk\Structs;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FulfilmentProductDescription Structs
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:FulfilmentProductDescription
 * @package Cdiscount
 * @subpackage Structs
 */
class CdiscountFulfilmentProductDescription extends AbstractStructBase
{
    /**
     * The ExternalSupplyOrderId
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $ExternalSupplyOrderId = null;
    /**
     * The ProductEan
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string|null
     */
    protected ?string $ProductEan = null;
    /**
     * The Quantity
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
     * @var string|null
     */
    protected ?string $Warehouse = null;
    /**
     * The WarehouseReceptionMinDate
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $WarehouseReceptionMinDate = null;
    /**
     * Constructor method for FulfilmentProductDescription
     * @uses CdiscountFulfilmentProductDescription::setExternalSupplyOrderId()
     * @uses CdiscountFulfilmentProductDescription::setProductEan()
     * @uses CdiscountFulfilmentProductDescription::setQuantity()
     * @uses CdiscountFulfilmentProductDescription::setSellerProductReference()
     * @uses CdiscountFulfilmentProductDescription::setWarehouse()
     * @uses CdiscountFulfilmentProductDescription::setWarehouseReceptionMinDate()
     * @param string $externalSupplyOrderId
     * @param string $productEan
     * @param int $quantity
     * @param string $sellerProductReference
     * @param string $warehouse
     * @param string $warehouseReceptionMinDate
     */
    public function __construct(?string $externalSupplyOrderId = null, ?string $productEan = null, ?int $quantity = null, ?string $sellerProductReference = null, ?string $warehouse = null, ?string $warehouseReceptionMinDate = null)
    {
        $this
            ->setExternalSupplyOrderId($externalSupplyOrderId)
            ->setProductEan($productEan)
            ->setQuantity($quantity)
            ->setSellerProductReference($sellerProductReference)
            ->setWarehouse($warehouse)
            ->setWarehouseReceptionMinDate($warehouseReceptionMinDate);
    }
    /**
     * Get ExternalSupplyOrderId value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getExternalSupplyOrderId(): ?string
    {
        return isset($this->ExternalSupplyOrderId) ? $this->ExternalSupplyOrderId : null;
    }
    /**
     * Set ExternalSupplyOrderId value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $externalSupplyOrderId
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountFulfilmentProductDescription
     */
    public function setExternalSupplyOrderId(?string $externalSupplyOrderId = null): self
    {
        // validation for constraint: string
        if (!is_null($externalSupplyOrderId) && !is_string($externalSupplyOrderId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($externalSupplyOrderId, true), gettype($externalSupplyOrderId)), __LINE__);
        }
        if (is_null($externalSupplyOrderId) || (is_array($externalSupplyOrderId) && empty($externalSupplyOrderId))) {
            unset($this->ExternalSupplyOrderId);
        } else {
            $this->ExternalSupplyOrderId = $externalSupplyOrderId;
        }
        
        return $this;
    }
    /**
     * Get ProductEan value
     * @return string|null
     */
    public function getProductEan(): ?string
    {
        return $this->ProductEan;
    }
    /**
     * Set ProductEan value
     * @param string $productEan
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountFulfilmentProductDescription
     */
    public function setProductEan(?string $productEan = null): self
    {
        // validation for constraint: string
        if (!is_null($productEan) && !is_string($productEan)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($productEan, true), gettype($productEan)), __LINE__);
        }
        $this->ProductEan = $productEan;
        
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
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountFulfilmentProductDescription
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
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountFulfilmentProductDescription
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
     * @return string|null
     */
    public function getWarehouse(): ?string
    {
        return $this->Warehouse;
    }
    /**
     * Set Warehouse value
     * @uses \SengentoBV\CdiscountMarketplaceSdk\Enums\CdiscountWarehouseType::valueIsValid()
     * @uses \SengentoBV\CdiscountMarketplaceSdk\Enums\CdiscountWarehouseType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $warehouse
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountFulfilmentProductDescription
     */
    public function setWarehouse(?string $warehouse = null): self
    {
        // validation for constraint: enumeration
        if (!\SengentoBV\CdiscountMarketplaceSdk\Enums\CdiscountWarehouseType::valueIsValid($warehouse)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \SengentoBV\CdiscountMarketplaceSdk\Enums\CdiscountWarehouseType', is_array($warehouse) ? implode(', ', $warehouse) : var_export($warehouse, true), implode(', ', \SengentoBV\CdiscountMarketplaceSdk\Enums\CdiscountWarehouseType::getValidValues())), __LINE__);
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
    public function getWarehouseReceptionMinDate(): ?string
    {
        return isset($this->WarehouseReceptionMinDate) ? $this->WarehouseReceptionMinDate : null;
    }
    /**
     * Set WarehouseReceptionMinDate value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $warehouseReceptionMinDate
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountFulfilmentProductDescription
     */
    public function setWarehouseReceptionMinDate(?string $warehouseReceptionMinDate = null): self
    {
        // validation for constraint: string
        if (!is_null($warehouseReceptionMinDate) && !is_string($warehouseReceptionMinDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($warehouseReceptionMinDate, true), gettype($warehouseReceptionMinDate)), __LINE__);
        }
        if (is_null($warehouseReceptionMinDate) || (is_array($warehouseReceptionMinDate) && empty($warehouseReceptionMinDate))) {
            unset($this->WarehouseReceptionMinDate);
        } else {
            $this->WarehouseReceptionMinDate = $warehouseReceptionMinDate;
        }
        
        return $this;
    }
}
