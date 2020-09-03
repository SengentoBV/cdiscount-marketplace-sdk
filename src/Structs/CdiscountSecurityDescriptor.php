<?php

namespace SengentoBV\CdiscountMarketplaceSdk\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SecurityDescriptor Structs
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:SecurityDescriptor
 * @package Cdiscount
 * @subpackage Structs
 */
class CdiscountSecurityDescriptor extends AbstractStructBase
{
    /**
     * The Authorization
     * @var string
     */
    public $Authorization;
    /**
     * The FunctionIdentifier
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $FunctionIdentifier;
    /**
     * The Version
     * @var int
     */
    public $Version;
    /**
     * Constructor method for SecurityDescriptor
     * @uses CdiscountSecurityDescriptor::setAuthorization()
     * @uses CdiscountSecurityDescriptor::setFunctionIdentifier()
     * @uses CdiscountSecurityDescriptor::setVersion()
     * @param string $authorization
     * @param string $functionIdentifier
     * @param int $version
     */
    public function __construct($authorization = null, $functionIdentifier = null, $version = null)
    {
        $this
            ->setAuthorization($authorization)
            ->setFunctionIdentifier($functionIdentifier)
            ->setVersion($version);
    }
    /**
     * Get Authorization value
     * @return string|null
     */
    public function getAuthorization()
    {
        return $this->Authorization;
    }
    /**
     * Set Authorization value
     * @uses \SengentoBV\CdiscountMarketplaceSdk\Enums\CdiscountAuthorization::valueIsValid()
     * @uses \SengentoBV\CdiscountMarketplaceSdk\Enums\CdiscountAuthorization::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $authorization
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountSecurityDescriptor
     */
    public function setAuthorization($authorization = null)
    {
        // validation for constraint: enumeration
        if (!\SengentoBV\CdiscountMarketplaceSdk\Enums\CdiscountAuthorization::valueIsValid($authorization)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \SengentoBV\CdiscountMarketplaceSdk\Enums\CdiscountAuthorization', is_array($authorization) ? implode(', ', $authorization) : var_export($authorization, true), implode(', ', \SengentoBV\CdiscountMarketplaceSdk\Enums\CdiscountAuthorization::getValidValues())), __LINE__);
        }
        $this->Authorization = $authorization;
        return $this;
    }
    /**
     * Get FunctionIdentifier value
     * @return string|null
     */
    public function getFunctionIdentifier()
    {
        return $this->FunctionIdentifier;
    }
    /**
     * Set FunctionIdentifier value
     * @param string $functionIdentifier
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountSecurityDescriptor
     */
    public function setFunctionIdentifier($functionIdentifier = null)
    {
        // validation for constraint: string
        if (!is_null($functionIdentifier) && !is_string($functionIdentifier)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($functionIdentifier, true), gettype($functionIdentifier)), __LINE__);
        }
        $this->FunctionIdentifier = $functionIdentifier;
        return $this;
    }
    /**
     * Get Version value
     * @return int|null
     */
    public function getVersion()
    {
        return $this->Version;
    }
    /**
     * Set Version value
     * @param int $version
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountSecurityDescriptor
     */
    public function setVersion($version = null)
    {
        // validation for constraint: int
        if (!is_null($version) && !(is_int($version) || ctype_digit($version))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($version, true), gettype($version)), __LINE__);
        }
        $this->Version = $version;
        return $this;
    }
}
