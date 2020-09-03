<?php

namespace SengentoBV\CdiscountMarketplaceSdk\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Error Structs
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:Error
 * @package Cdiscount
 * @subpackage Structs
 */
class CdiscountError extends AbstractStructBase
{
    /**
     * The ErrorType
     * @var string
     */
    public $ErrorType;
    /**
     * The Message
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $Message;
    /**
     * Constructor method for Error
     * @uses CdiscountError::setErrorType()
     * @uses CdiscountError::setMessage()
     * @param string $errorType
     * @param string $message
     */
    public function __construct($errorType = null, $message = null)
    {
        $this
            ->setErrorType($errorType)
            ->setMessage($message);
    }
    /**
     * Get ErrorType value
     * @return string|null
     */
    public function getErrorType()
    {
        return $this->ErrorType;
    }
    /**
     * Set ErrorType value
     * @uses \SengentoBV\CdiscountMarketplaceSdk\Enums\CdiscountErrorTypeEnum::valueIsValid()
     * @uses \SengentoBV\CdiscountMarketplaceSdk\Enums\CdiscountErrorTypeEnum::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $errorType
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountError
     */
    public function setErrorType($errorType = null)
    {
        // validation for constraint: enumeration
        if (!\SengentoBV\CdiscountMarketplaceSdk\Enums\CdiscountErrorTypeEnum::valueIsValid($errorType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \SengentoBV\CdiscountMarketplaceSdk\Enums\CdiscountErrorTypeEnum', is_array($errorType) ? implode(', ', $errorType) : var_export($errorType, true), implode(', ', \SengentoBV\CdiscountMarketplaceSdk\Enums\CdiscountErrorTypeEnum::getValidValues())), __LINE__);
        }
        $this->ErrorType = $errorType;
        return $this;
    }
    /**
     * Get Message value
     * @return string|null
     */
    public function getMessage()
    {
        return $this->Message;
    }
    /**
     * Set Message value
     * @param string $message
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountError
     */
    public function setMessage($message = null)
    {
        // validation for constraint: string
        if (!is_null($message) && !is_string($message)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($message, true), gettype($message)), __LINE__);
        }
        $this->Message = $message;
        return $this;
    }
}
