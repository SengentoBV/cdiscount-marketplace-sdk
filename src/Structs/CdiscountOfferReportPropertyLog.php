<?php

namespace SengentoBV\CdiscountMarketplaceSdk\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for OfferReportPropertyLog Structs
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:OfferReportPropertyLog
 * @package Cdiscount
 * @subpackage Structs
 */
class CdiscountOfferReportPropertyLog extends AbstractStructBase
{
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
     * The PropertyCode
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $PropertyCode;
    /**
     * The PropertyError
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $PropertyError;
    /**
     * Constructor method for OfferReportPropertyLog
     * @uses CdiscountOfferReportPropertyLog::setLogMessage()
     * @uses CdiscountOfferReportPropertyLog::setName()
     * @uses CdiscountOfferReportPropertyLog::setPropertyCode()
     * @uses CdiscountOfferReportPropertyLog::setPropertyError()
     * @param string $logMessage
     * @param string $name
     * @param string $propertyCode
     * @param string $propertyError
     */
    public function __construct($logMessage = null, $name = null, $propertyCode = null, $propertyError = null)
    {
        $this
            ->setLogMessage($logMessage)
            ->setName($name)
            ->setPropertyCode($propertyCode)
            ->setPropertyError($propertyError);
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
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountOfferReportPropertyLog
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
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountOfferReportPropertyLog
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
     * Get PropertyCode value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getPropertyCode()
    {
        return isset($this->PropertyCode) ? $this->PropertyCode : null;
    }
    /**
     * Set PropertyCode value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $propertyCode
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountOfferReportPropertyLog
     */
    public function setPropertyCode($propertyCode = null)
    {
        // validation for constraint: string
        if (!is_null($propertyCode) && !is_string($propertyCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($propertyCode, true), gettype($propertyCode)), __LINE__);
        }
        if (is_null($propertyCode) || (is_array($propertyCode) && empty($propertyCode))) {
            unset($this->PropertyCode);
        } else {
            $this->PropertyCode = $propertyCode;
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
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountOfferReportPropertyLog
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
