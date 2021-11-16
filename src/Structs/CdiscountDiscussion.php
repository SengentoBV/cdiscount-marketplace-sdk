<?php

declare(strict_types=1);

namespace SengentoBV\CdiscountMarketplaceSdk\Structs;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Discussion Structs
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:Discussion
 * @package Cdiscount
 * @subpackage Structs
 */
class CdiscountDiscussion extends CdiscountOrderQuestion
{
    /**
     * The ClaimType
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $ClaimType = null;
    /**
     * The ProductEAN
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $ProductEAN = null;
    /**
     * The ProductSellerReference
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $ProductSellerReference = null;
    /**
     * Constructor method for Discussion
     * @uses CdiscountDiscussion::setClaimType()
     * @uses CdiscountDiscussion::setProductEAN()
     * @uses CdiscountDiscussion::setProductSellerReference()
     * @param string $claimType
     * @param string $productEAN
     * @param string $productSellerReference
     */
    public function __construct(?string $claimType = null, ?string $productEAN = null, ?string $productSellerReference = null)
    {
        $this
            ->setClaimType($claimType)
            ->setProductEAN($productEAN)
            ->setProductSellerReference($productSellerReference);
    }
    /**
     * Get ClaimType value
     * @return string|null
     */
    public function getClaimType(): ?string
    {
        return $this->ClaimType;
    }
    /**
     * Set ClaimType value
     * @uses \SengentoBV\CdiscountMarketplaceSdk\Enums\CdiscountClaimType::valueIsValid()
     * @uses \SengentoBV\CdiscountMarketplaceSdk\Enums\CdiscountClaimType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $claimType
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountDiscussion
     */
    public function setClaimType(?string $claimType = null): self
    {
        // validation for constraint: enumeration
        if (!\SengentoBV\CdiscountMarketplaceSdk\Enums\CdiscountClaimType::valueIsValid($claimType)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \SengentoBV\CdiscountMarketplaceSdk\Enums\CdiscountClaimType', is_array($claimType) ? implode(', ', $claimType) : var_export($claimType, true), implode(', ', \SengentoBV\CdiscountMarketplaceSdk\Enums\CdiscountClaimType::getValidValues())), __LINE__);
        }
        $this->ClaimType = $claimType;
        
        return $this;
    }
    /**
     * Get ProductEAN value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getProductEAN(): ?string
    {
        return isset($this->ProductEAN) ? $this->ProductEAN : null;
    }
    /**
     * Set ProductEAN value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $productEAN
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountDiscussion
     */
    public function setProductEAN(?string $productEAN = null): self
    {
        // validation for constraint: string
        if (!is_null($productEAN) && !is_string($productEAN)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($productEAN, true), gettype($productEAN)), __LINE__);
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
    public function getProductSellerReference(): ?string
    {
        return isset($this->ProductSellerReference) ? $this->ProductSellerReference : null;
    }
    /**
     * Set ProductSellerReference value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $productSellerReference
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountDiscussion
     */
    public function setProductSellerReference(?string $productSellerReference = null): self
    {
        // validation for constraint: string
        if (!is_null($productSellerReference) && !is_string($productSellerReference)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($productSellerReference, true), gettype($productSellerReference)), __LINE__);
        }
        if (is_null($productSellerReference) || (is_array($productSellerReference) && empty($productSellerReference))) {
            unset($this->ProductSellerReference);
        } else {
            $this->ProductSellerReference = $productSellerReference;
        }
        
        return $this;
    }
}
