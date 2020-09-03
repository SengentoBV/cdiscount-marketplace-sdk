<?php

namespace SengentoBV\CdiscountMarketplaceSdk\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ExternalOrderLine Structs
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ExternalOrderLine
 * @package Cdiscount
 * @subpackage Structs
 */
class CdiscountExternalOrderLine extends AbstractStructBase
{
    /**
     * The ProductEan
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $ProductEan;
    /**
     * The ProductReference
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $ProductReference;
    /**
     * The Quantity
     * @var int
     */
    public $Quantity;
    /**
     * Constructor method for ExternalOrderLine
     * @uses CdiscountExternalOrderLine::setProductEan()
     * @uses CdiscountExternalOrderLine::setProductReference()
     * @uses CdiscountExternalOrderLine::setQuantity()
     * @param string $productEan
     * @param string $productReference
     * @param int $quantity
     */
    public function __construct($productEan = null, $productReference = null, $quantity = null)
    {
        $this
            ->setProductEan($productEan)
            ->setProductReference($productReference)
            ->setQuantity($quantity);
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
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountExternalOrderLine
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
     * Get ProductReference value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getProductReference()
    {
        return isset($this->ProductReference) ? $this->ProductReference : null;
    }
    /**
     * Set ProductReference value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $productReference
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountExternalOrderLine
     */
    public function setProductReference($productReference = null)
    {
        // validation for constraint: string
        if (!is_null($productReference) && !is_string($productReference)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($productReference, true), gettype($productReference)), __LINE__);
        }
        if (is_null($productReference) || (is_array($productReference) && empty($productReference))) {
            unset($this->ProductReference);
        } else {
            $this->ProductReference = $productReference;
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
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountExternalOrderLine
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
}
