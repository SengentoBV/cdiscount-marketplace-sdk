<?php

namespace SengentoBV\CdiscountMarketplaceSdk\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DomainRights Structs
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:DomainRights
 * @package Cdiscount
 * @subpackage Structs
 */
class CdiscountDomainRights extends AbstractStructBase
{
    /**
     * The Name
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $Name;
    /**
     * The SecurityDescriptorList
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var \SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfSecurityDescriptor
     */
    public $SecurityDescriptorList;
    /**
     * Constructor method for DomainRights
     * @uses CdiscountDomainRights::setName()
     * @uses CdiscountDomainRights::setSecurityDescriptorList()
     * @param string $name
     * @param \SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfSecurityDescriptor $securityDescriptorList
     */
    public function __construct($name = null, \SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfSecurityDescriptor $securityDescriptorList = null)
    {
        $this
            ->setName($name)
            ->setSecurityDescriptorList($securityDescriptorList);
    }
    /**
     * Get Name value
     * @return string|null
     */
    public function getName()
    {
        return $this->Name;
    }
    /**
     * Set Name value
     * @param string $name
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountDomainRights
     */
    public function setName($name = null)
    {
        // validation for constraint: string
        if (!is_null($name) && !is_string($name)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($name, true), gettype($name)), __LINE__);
        }
        $this->Name = $name;
        return $this;
    }
    /**
     * Get SecurityDescriptorList value
     * @return \SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfSecurityDescriptor|null
     */
    public function getSecurityDescriptorList()
    {
        return $this->SecurityDescriptorList;
    }
    /**
     * Set SecurityDescriptorList value
     * @param \SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfSecurityDescriptor $securityDescriptorList
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountDomainRights
     */
    public function setSecurityDescriptorList(\SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfSecurityDescriptor $securityDescriptorList = null)
    {
        $this->SecurityDescriptorList = $securityDescriptorList;
        return $this;
    }
}
