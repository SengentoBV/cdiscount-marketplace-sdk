<?php

declare(strict_types=1);

namespace SengentoBV\CdiscountMarketplaceSdk\Structs;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

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
     * @var string|null
     */
    protected ?string $Name = null;
    /**
     * The SecurityDescriptorList
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var \SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfSecurityDescriptor|null
     */
    protected ?\SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfSecurityDescriptor $SecurityDescriptorList = null;
    /**
     * Constructor method for DomainRights
     * @uses CdiscountDomainRights::setName()
     * @uses CdiscountDomainRights::setSecurityDescriptorList()
     * @param string $name
     * @param \SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfSecurityDescriptor $securityDescriptorList
     */
    public function __construct(?string $name = null, ?\SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfSecurityDescriptor $securityDescriptorList = null)
    {
        $this
            ->setName($name)
            ->setSecurityDescriptorList($securityDescriptorList);
    }
    /**
     * Get Name value
     * @return string|null
     */
    public function getName(): ?string
    {
        return $this->Name;
    }
    /**
     * Set Name value
     * @param string $name
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountDomainRights
     */
    public function setName(?string $name = null): self
    {
        // validation for constraint: string
        if (!is_null($name) && !is_string($name)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($name, true), gettype($name)), __LINE__);
        }
        $this->Name = $name;
        
        return $this;
    }
    /**
     * Get SecurityDescriptorList value
     * @return \SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfSecurityDescriptor|null
     */
    public function getSecurityDescriptorList(): ?\SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfSecurityDescriptor
    {
        return $this->SecurityDescriptorList;
    }
    /**
     * Set SecurityDescriptorList value
     * @param \SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfSecurityDescriptor $securityDescriptorList
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountDomainRights
     */
    public function setSecurityDescriptorList(?\SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfSecurityDescriptor $securityDescriptorList = null): self
    {
        $this->SecurityDescriptorList = $securityDescriptorList;
        
        return $this;
    }
}
