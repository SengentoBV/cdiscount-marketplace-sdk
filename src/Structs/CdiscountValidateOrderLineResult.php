<?php

declare(strict_types=1);

namespace SengentoBV\CdiscountMarketplaceSdk\Structs;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ValidateOrderLineResult Structs
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ValidateOrderLineResult
 * @package Cdiscount
 * @subpackage Structs
 */
class CdiscountValidateOrderLineResult extends AbstractStructBase
{
    /**
     * The Errors
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfError|null
     */
    protected ?\SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfError $Errors = null;
    /**
     * The SellerProductId
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $SellerProductId = null;
    /**
     * The Updated
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $Updated = null;
    /**
     * Constructor method for ValidateOrderLineResult
     * @uses CdiscountValidateOrderLineResult::setErrors()
     * @uses CdiscountValidateOrderLineResult::setSellerProductId()
     * @uses CdiscountValidateOrderLineResult::setUpdated()
     * @param \SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfError $errors
     * @param string $sellerProductId
     * @param bool $updated
     */
    public function __construct(?\SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfError $errors = null, ?string $sellerProductId = null, ?bool $updated = null)
    {
        $this
            ->setErrors($errors)
            ->setSellerProductId($sellerProductId)
            ->setUpdated($updated);
    }
    /**
     * Get Errors value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfError|null
     */
    public function getErrors(): ?\SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfError
    {
        return isset($this->Errors) ? $this->Errors : null;
    }
    /**
     * Set Errors value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfError $errors
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountValidateOrderLineResult
     */
    public function setErrors(?\SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfError $errors = null): self
    {
        if (is_null($errors) || (is_array($errors) && empty($errors))) {
            unset($this->Errors);
        } else {
            $this->Errors = $errors;
        }
        
        return $this;
    }
    /**
     * Get SellerProductId value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getSellerProductId(): ?string
    {
        return isset($this->SellerProductId) ? $this->SellerProductId : null;
    }
    /**
     * Set SellerProductId value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $sellerProductId
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountValidateOrderLineResult
     */
    public function setSellerProductId(?string $sellerProductId = null): self
    {
        // validation for constraint: string
        if (!is_null($sellerProductId) && !is_string($sellerProductId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($sellerProductId, true), gettype($sellerProductId)), __LINE__);
        }
        if (is_null($sellerProductId) || (is_array($sellerProductId) && empty($sellerProductId))) {
            unset($this->SellerProductId);
        } else {
            $this->SellerProductId = $sellerProductId;
        }
        
        return $this;
    }
    /**
     * Get Updated value
     * @return bool|null
     */
    public function getUpdated(): ?bool
    {
        return $this->Updated;
    }
    /**
     * Set Updated value
     * @param bool $updated
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountValidateOrderLineResult
     */
    public function setUpdated(?bool $updated = null): self
    {
        // validation for constraint: boolean
        if (!is_null($updated) && !is_bool($updated)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($updated, true), gettype($updated)), __LINE__);
        }
        $this->Updated = $updated;
        
        return $this;
    }
}
