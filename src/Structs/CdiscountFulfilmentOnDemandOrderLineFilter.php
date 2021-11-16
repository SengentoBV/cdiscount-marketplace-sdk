<?php

declare(strict_types=1);

namespace SengentoBV\CdiscountMarketplaceSdk\Structs;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FulfilmentOnDemandOrderLineFilter Structs
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:FulfilmentOnDemandOrderLineFilter
 * @package Cdiscount
 * @subpackage Structs
 */
class CdiscountFulfilmentOnDemandOrderLineFilter extends AbstractStructBase
{
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
     * The Warehouse
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $Warehouse = null;
    /**
     * Constructor method for FulfilmentOnDemandOrderLineFilter
     * @uses CdiscountFulfilmentOnDemandOrderLineFilter::setOrderReference()
     * @uses CdiscountFulfilmentOnDemandOrderLineFilter::setProductEan()
     * @uses CdiscountFulfilmentOnDemandOrderLineFilter::setWarehouse()
     * @param string $orderReference
     * @param string $productEan
     * @param string $warehouse
     */
    public function __construct(?string $orderReference = null, ?string $productEan = null, ?string $warehouse = null)
    {
        $this
            ->setOrderReference($orderReference)
            ->setProductEan($productEan)
            ->setWarehouse($warehouse);
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
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountFulfilmentOnDemandOrderLineFilter
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
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountFulfilmentOnDemandOrderLineFilter
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
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountFulfilmentOnDemandOrderLineFilter
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
