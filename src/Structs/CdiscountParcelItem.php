<?php

namespace SengentoBV\CdiscountMarketplaceSdk\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ParcelItem Structs
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ParcelItem
 * @package Cdiscount
 * @subpackage Structs
 */
class CdiscountParcelItem extends AbstractStructBase
{
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
     * The Sku
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $Sku;
    /**
     * Constructor method for ParcelItem
     * @uses CdiscountParcelItem::setProductName()
     * @uses CdiscountParcelItem::setQuantity()
     * @uses CdiscountParcelItem::setSku()
     * @param string $productName
     * @param int $quantity
     * @param string $sku
     */
    public function __construct($productName = null, $quantity = null, $sku = null)
    {
        $this
            ->setProductName($productName)
            ->setQuantity($quantity)
            ->setSku($sku);
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
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountParcelItem
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
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountParcelItem
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
     * Get Sku value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getSku()
    {
        return isset($this->Sku) ? $this->Sku : null;
    }
    /**
     * Set Sku value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $sku
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountParcelItem
     */
    public function setSku($sku = null)
    {
        // validation for constraint: string
        if (!is_null($sku) && !is_string($sku)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($sku, true), gettype($sku)), __LINE__);
        }
        if (is_null($sku) || (is_array($sku) && empty($sku))) {
            unset($this->Sku);
        } else {
            $this->Sku = $sku;
        }
        return $this;
    }
}
