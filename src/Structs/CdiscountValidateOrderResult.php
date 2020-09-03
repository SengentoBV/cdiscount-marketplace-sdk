<?php

namespace SengentoBV\CdiscountMarketplaceSdk\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

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
     * @var \SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfError
     */
    public $Errors;
    /**
     * The OrderNumber
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $OrderNumber;
    /**
     * The ValidateOrderLineResults
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfValidateOrderLineResult
     */
    public $ValidateOrderLineResults;
    /**
     * The Validated
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $Validated;
    /**
     * The Warnings
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfError
     */
    public $Warnings;
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
    public function __construct(\SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfError $errors = null, $orderNumber = null, \SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfValidateOrderLineResult $validateOrderLineResults = null, $validated = null, \SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfError $warnings = null)
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
    public function getErrors()
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
    public function setErrors(\SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfError $errors = null)
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
    public function getOrderNumber()
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
    public function setOrderNumber($orderNumber = null)
    {
        // validation for constraint: string
        if (!is_null($orderNumber) && !is_string($orderNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($orderNumber, true), gettype($orderNumber)), __LINE__);
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
    public function getValidateOrderLineResults()
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
    public function setValidateOrderLineResults(\SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfValidateOrderLineResult $validateOrderLineResults = null)
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
    public function getValidated()
    {
        return $this->Validated;
    }
    /**
     * Set Validated value
     * @param bool $validated
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountValidateOrderResult
     */
    public function setValidated($validated = null)
    {
        // validation for constraint: boolean
        if (!is_null($validated) && !is_bool($validated)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($validated, true), gettype($validated)), __LINE__);
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
    public function getWarnings()
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
    public function setWarnings(\SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfError $warnings = null)
    {
        if (is_null($warnings) || (is_array($warnings) && empty($warnings))) {
            unset($this->Warnings);
        } else {
            $this->Warnings = $warnings;
        }
        return $this;
    }
}
