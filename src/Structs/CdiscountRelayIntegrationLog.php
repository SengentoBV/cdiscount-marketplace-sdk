<?php

namespace SengentoBV\CdiscountMarketplaceSdk\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RelayIntegrationLog Structs
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:RelayIntegrationLog
 * @package Cdiscount
 * @subpackage Structs
 */
class CdiscountRelayIntegrationLog extends AbstractStructBase
{
    /**
     * The Errors
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfstring
     */
    public $Errors;
    /**
     * The LogDate
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $LogDate;
    /**
     * The RelayReference
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $RelayReference;
    /**
     * The Validated
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $Validated;
    /**
     * Constructor method for RelayIntegrationLog
     * @uses CdiscountRelayIntegrationLog::setErrors()
     * @uses CdiscountRelayIntegrationLog::setLogDate()
     * @uses CdiscountRelayIntegrationLog::setRelayReference()
     * @uses CdiscountRelayIntegrationLog::setValidated()
     * @param \SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfstring $errors
     * @param string $logDate
     * @param string $relayReference
     * @param bool $validated
     */
    public function __construct(\SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfstring $errors = null, $logDate = null, $relayReference = null, $validated = null)
    {
        $this
            ->setErrors($errors)
            ->setLogDate($logDate)
            ->setRelayReference($relayReference)
            ->setValidated($validated);
    }
    /**
     * Get Errors value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfstring|null
     */
    public function getErrors()
    {
        return isset($this->Errors) ? $this->Errors : null;
    }
    /**
     * Set Errors value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfstring $errors
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountRelayIntegrationLog
     */
    public function setErrors(\SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfstring $errors = null)
    {
        if (is_null($errors) || (is_array($errors) && empty($errors))) {
            unset($this->Errors);
        } else {
            $this->Errors = $errors;
        }
        return $this;
    }
    /**
     * Get LogDate value
     * @return string|null
     */
    public function getLogDate()
    {
        return $this->LogDate;
    }
    /**
     * Set LogDate value
     * @param string $logDate
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountRelayIntegrationLog
     */
    public function setLogDate($logDate = null)
    {
        // validation for constraint: string
        if (!is_null($logDate) && !is_string($logDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($logDate, true), gettype($logDate)), __LINE__);
        }
        $this->LogDate = $logDate;
        return $this;
    }
    /**
     * Get RelayReference value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getRelayReference()
    {
        return isset($this->RelayReference) ? $this->RelayReference : null;
    }
    /**
     * Set RelayReference value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $relayReference
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountRelayIntegrationLog
     */
    public function setRelayReference($relayReference = null)
    {
        // validation for constraint: string
        if (!is_null($relayReference) && !is_string($relayReference)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($relayReference, true), gettype($relayReference)), __LINE__);
        }
        if (is_null($relayReference) || (is_array($relayReference) && empty($relayReference))) {
            unset($this->RelayReference);
        } else {
            $this->RelayReference = $relayReference;
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
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountRelayIntegrationLog
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
}
