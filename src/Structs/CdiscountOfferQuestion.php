<?php

namespace SengentoBV\CdiscountMarketplaceSdk\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for OfferQuestion Structs
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:OfferQuestion
 * @package Cdiscount
 * @subpackage Structs
 */
class CdiscountOfferQuestion extends CdiscountDiscussionThreadBase
{
    /**
     * The ProductEAN
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $ProductEAN;
    /**
     * The ProductSellerReference
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $ProductSellerReference;
    /**
     * Constructor method for OfferQuestion
     * @uses CdiscountOfferQuestion::setProductEAN()
     * @uses CdiscountOfferQuestion::setProductSellerReference()
     * @param string $productEAN
     * @param string $productSellerReference
     */
    public function __construct($productEAN = null, $productSellerReference = null)
    {
        $this
            ->setProductEAN($productEAN)
            ->setProductSellerReference($productSellerReference);
    }
    /**
     * Get ProductEAN value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getProductEAN()
    {
        return isset($this->ProductEAN) ? $this->ProductEAN : null;
    }
    /**
     * Set ProductEAN value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $productEAN
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountOfferQuestion
     */
    public function setProductEAN($productEAN = null)
    {
        // validation for constraint: string
        if (!is_null($productEAN) && !is_string($productEAN)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($productEAN, true), gettype($productEAN)), __LINE__);
        }
        if (is_null($productEAN) || (is_array($productEAN) && empty($productEAN))) {
            unset($this->ProductEAN);
        } else {
            $this->ProductEAN = $productEAN;
        }
        return $this;
    }
    /**
     * Get ProductSellerReference value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getProductSellerReference()
    {
        return isset($this->ProductSellerReference) ? $this->ProductSellerReference : null;
    }
    /**
     * Set ProductSellerReference value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $productSellerReference
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountOfferQuestion
     */
    public function setProductSellerReference($productSellerReference = null)
    {
        // validation for constraint: string
        if (!is_null($productSellerReference) && !is_string($productSellerReference)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($productSellerReference, true), gettype($productSellerReference)), __LINE__);
        }
        if (is_null($productSellerReference) || (is_array($productSellerReference) && empty($productSellerReference))) {
            unset($this->ProductSellerReference);
        } else {
            $this->ProductSellerReference = $productSellerReference;
        }
        return $this;
    }
}
