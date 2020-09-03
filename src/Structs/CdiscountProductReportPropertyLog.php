<?php

namespace SengentoBV\CdiscountMarketplaceSdk\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ProductReportPropertyLog Structs
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ProductReportPropertyLog
 * @package Cdiscount
 * @subpackage Structs
 */
class CdiscountProductReportPropertyLog extends AbstractStructBase
{
    /**
     * The ErrorCode
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $ErrorCode;
    /**
     * The LogMessage
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $LogMessage;
    /**
     * The Name
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $Name;
    /**
     * The PropertyError
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $PropertyError;
    /**
     * Constructor method for ProductReportPropertyLog
     * @uses CdiscountProductReportPropertyLog::setErrorCode()
     * @uses CdiscountProductReportPropertyLog::setLogMessage()
     * @uses CdiscountProductReportPropertyLog::setName()
     * @uses CdiscountProductReportPropertyLog::setPropertyError()
     * @param string $errorCode
     * @param string $logMessage
     * @param string $name
     * @param string $propertyError
     */
    public function __construct($errorCode = null, $logMessage = null, $name = null, $propertyError = null)
    {
        $this
            ->setErrorCode($errorCode)
            ->setLogMessage($logMessage)
            ->setName($name)
            ->setPropertyError($propertyError);
    }
    /**
     * Get ErrorCode value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getErrorCode()
    {
        return isset($this->ErrorCode) ? $this->ErrorCode : null;
    }
    /**
     * Set ErrorCode value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $errorCode
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountProductReportPropertyLog
     */
    public function setErrorCode($errorCode = null)
    {
        // validation for constraint: string
        if (!is_null($errorCode) && !is_string($errorCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($errorCode, true), gettype($errorCode)), __LINE__);
        }
        if (is_null($errorCode) || (is_array($errorCode) && empty($errorCode))) {
            unset($this->ErrorCode);
        } else {
            $this->ErrorCode = $errorCode;
        }
        return $this;
    }
    /**
     * Get LogMessage value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getLogMessage()
    {
        return isset($this->LogMessage) ? $this->LogMessage : null;
    }
    /**
     * Set LogMessage value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $logMessage
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountProductReportPropertyLog
     */
    public function setLogMessage($logMessage = null)
    {
        // validation for constraint: string
        if (!is_null($logMessage) && !is_string($logMessage)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($logMessage, true), gettype($logMessage)), __LINE__);
        }
        if (is_null($logMessage) || (is_array($logMessage) && empty($logMessage))) {
            unset($this->LogMessage);
        } else {
            $this->LogMessage = $logMessage;
        }
        return $this;
    }
    /**
     * Get Name value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getName()
    {
        return isset($this->Name) ? $this->Name : null;
    }
    /**
     * Set Name value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $name
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountProductReportPropertyLog
     */
    public function setName($name = null)
    {
        // validation for constraint: string
        if (!is_null($name) && !is_string($name)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($name, true), gettype($name)), __LINE__);
        }
        if (is_null($name) || (is_array($name) && empty($name))) {
            unset($this->Name);
        } else {
            $this->Name = $name;
        }
        return $this;
    }
    /**
     * Get PropertyError value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getPropertyError()
    {
        return isset($this->PropertyError) ? $this->PropertyError : null;
    }
    /**
     * Set PropertyError value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $propertyError
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountProductReportPropertyLog
     */
    public function setPropertyError($propertyError = null)
    {
        // validation for constraint: string
        if (!is_null($propertyError) && !is_string($propertyError)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($propertyError, true), gettype($propertyError)), __LINE__);
        }
        if (is_null($propertyError) || (is_array($propertyError) && empty($propertyError))) {
            unset($this->PropertyError);
        } else {
            $this->PropertyError = $propertyError;
        }
        return $this;
    }
}
