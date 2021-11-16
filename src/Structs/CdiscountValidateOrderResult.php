<?php

declare(strict_types=1);

namespace SengentoBV\CdiscountMarketplaceSdk\Structs;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ValidateOrderResult Structs
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ValidateOrderResult
 * @package Cdiscount
 * @subpackage Structs
 */
class CdiscountValidateOrderResult extends AbstractStructBase
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
     * The OrderNumber
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $OrderNumber = null;
    /**
     * The ValidateOrderLineResults
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfValidateOrderLineResult|null
     */
    protected ?\SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfValidateOrderLineResult $ValidateOrderLineResults = null;
    /**
     * The Validated
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $Validated = null;
    /**
     * The Warnings
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfError|null
     */
    protected ?\SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfError $Warnings = null;
    /**
     * Constructor method for ValidateOrderResult
     * @uses CdiscountValidateOrderResult::setErrors()
     * @uses CdiscountValidateOrderResult::setOrderNumber()
     * @uses CdiscountValidateOrderResult::setValidateOrderLineResults()
     * @uses CdiscountValidateOrderResult::setValidated()
     * @uses CdiscountValidateOrderResult::setWarnings()
     * @param \SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfError $errors
     * @param string $orderNumber
     * @param \SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfValidateOrderLineResult $validateOrderLineResults
     * @param bool $validated
     * @param \SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfError $warnings
     */
    public function __construct(?\SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfError $errors = null, ?string $orderNumber = null, ?\SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfValidateOrderLineResult $validateOrderLineResults = null, ?bool $validated = null, ?\SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfError $warnings = null)
    {
        $this
            ->setErrors($errors)
            ->setOrderNumber($orderNumber)
            ->setValidateOrderLineResults($validateOrderLineResults)
            ->setValidated($validated)
            ->setWarnings($warnings);
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
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountValidateOrderResult
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
     * Get OrderNumber value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getOrderNumber(): ?string
    {
        return isset($this->OrderNumber) ? $this->OrderNumber : null;
    }
    /**
     * Set OrderNumber value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $orderNumber
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountValidateOrderResult
     */
    public function setOrderNumber(?string $orderNumber = null): self
    {
        // validation for constraint: string
        if (!is_null($orderNumber) && !is_string($orderNumber)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($orderNumber, true), gettype($orderNumber)), __LINE__);
        }
        if (is_null($orderNumber) || (is_array($orderNumber) && empty($orderNumber))) {
            unset($this->OrderNumber);
        } else {
            $this->OrderNumber = $orderNumber;
        }
        
        return $this;
    }
    /**
     * Get ValidateOrderLineResults value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfValidateOrderLineResult|null
     */
    public function getValidateOrderLineResults(): ?\SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfValidateOrderLineResult
    {
        return isset($this->ValidateOrderLineResults) ? $this->ValidateOrderLineResults : null;
    }
    /**
     * Set ValidateOrderLineResults value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfValidateOrderLineResult $validateOrderLineResults
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountValidateOrderResult
     */
    public function setValidateOrderLineResults(?\SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfValidateOrderLineResult $validateOrderLineResults = null): self
    {
        if (is_null($validateOrderLineResults) || (is_array($validateOrderLineResults) && empty($validateOrderLineResults))) {
            unset($this->ValidateOrderLineResults);
        } else {
            $this->ValidateOrderLineResults = $validateOrderLineResults;
        }
        
        return $this;
    }
    /**
     * Get Validated value
     * @return bool|null
     */
    public function getValidated(): ?bool
    {
        return $this->Validated;
    }
    /**
     * Set Validated value
     * @param bool $validated
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountValidateOrderResult
     */
    public function setValidated(?bool $validated = null): self
    {
        // validation for constraint: boolean
        if (!is_null($validated) && !is_bool($validated)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($validated, true), gettype($validated)), __LINE__);
        }
        $this->Validated = $validated;
        
        return $this;
    }
    /**
     * Get Warnings value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfError|null
     */
    public function getWarnings(): ?\SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfError
    {
        return isset($this->Warnings) ? $this->Warnings : null;
    }
    /**
     * Set Warnings value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfError $warnings
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountValidateOrderResult
     */
    public function setWarnings(?\SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfError $warnings = null): self
    {
        if (is_null($warnings) || (is_array($warnings) && empty($warnings))) {
            unset($this->Warnings);
        } else {
            $this->Warnings = $warnings;
        }
        
        return $this;
    }
}
