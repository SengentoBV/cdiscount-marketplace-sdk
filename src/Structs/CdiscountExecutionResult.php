<?php

namespace SengentoBV\CdiscountMarketplaceSdk\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ExecutionResult Structs
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ExecutionResult
 * @package Cdiscount
 * @subpackage Structs
 */
class CdiscountExecutionResult extends AbstractStructBase
{
    /**
     * The ErrorMessage
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $ErrorMessage;
    /**
     * The Success
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $Success;
    /**
     * Constructor method for ExecutionResult
     * @uses CdiscountExecutionResult::setErrorMessage()
     * @uses CdiscountExecutionResult::setSuccess()
     * @param string $errorMessage
     * @param bool $success
     */
    public function __construct($errorMessage = null, $success = null)
    {
        $this
            ->setErrorMessage($errorMessage)
            ->setSuccess($success);
    }
    /**
     * Get ErrorMessage value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getErrorMessage()
    {
        return isset($this->ErrorMessage) ? $this->ErrorMessage : null;
    }
    /**
     * Set ErrorMessage value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @uses \SengentoBV\CdiscountMarketplaceSdk\Enums\CdiscountCompetingOfferErrorMessage::valueIsValid()
     * @uses \SengentoBV\CdiscountMarketplaceSdk\Enums\CdiscountCompetingOfferErrorMessage::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $errorMessage
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountExecutionResult
     */
    public function setErrorMessage($errorMessage = null)
    {
        // validation for constraint: enumeration
        if (!\SengentoBV\CdiscountMarketplaceSdk\Enums\CdiscountCompetingOfferErrorMessage::valueIsValid($errorMessage)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \SengentoBV\CdiscountMarketplaceSdk\Enums\CdiscountCompetingOfferErrorMessage', is_array($errorMessage) ? implode(', ', $errorMessage) : var_export($errorMessage, true), implode(', ', \SengentoBV\CdiscountMarketplaceSdk\Enums\CdiscountCompetingOfferErrorMessage::getValidValues())), __LINE__);
        }
        if (is_null($errorMessage) || (is_array($errorMessage) && empty($errorMessage))) {
            unset($this->ErrorMessage);
        } else {
            $this->ErrorMessage = $errorMessage;
        }
        return $this;
    }
    /**
     * Get Success value
     * @return bool|null
     */
    public function getSuccess()
    {
        return $this->Success;
    }
    /**
     * Set Success value
     * @param bool $success
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountExecutionResult
     */
    public function setSuccess($success = null)
    {
        // validation for constraint: boolean
        if (!is_null($success) && !is_bool($success)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($success, true), gettype($success)), __LINE__);
        }
        $this->Success = $success;
        return $this;
    }
}
