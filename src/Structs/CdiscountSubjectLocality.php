<?php

declare(strict_types=1);

namespace SengentoBV\CdiscountMarketplaceSdk\Structs;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SubjectLocality Structs
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:SubjectLocality
 * @package Cdiscount
 * @subpackage Structs
 */
class CdiscountSubjectLocality extends AbstractStructBase
{
    /**
     * The Address
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string|null
     */
    protected ?string $Address = null;
    /**
     * The DnsName
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string|null
     */
    protected ?string $DnsName = null;
    /**
     * Constructor method for SubjectLocality
     * @uses CdiscountSubjectLocality::setAddress()
     * @uses CdiscountSubjectLocality::setDnsName()
     * @param string $address
     * @param string $dnsName
     */
    public function __construct(?string $address = null, ?string $dnsName = null)
    {
        $this
            ->setAddress($address)
            ->setDnsName($dnsName);
    }
    /**
     * Get Address value
     * @return string|null
     */
    public function getAddress(): ?string
    {
        return $this->Address;
    }
    /**
     * Set Address value
     * @param string $address
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountSubjectLocality
     */
    public function setAddress(?string $address = null): self
    {
        // validation for constraint: string
        if (!is_null($address) && !is_string($address)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($address, true), gettype($address)), __LINE__);
        }
        $this->Address = $address;
        
        return $this;
    }
    /**
     * Get DnsName value
     * @return string|null
     */
    public function getDnsName(): ?string
    {
        return $this->DnsName;
    }
    /**
     * Set DnsName value
     * @param string $dnsName
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountSubjectLocality
     */
    public function setDnsName(?string $dnsName = null): self
    {
        // validation for constraint: string
        if (!is_null($dnsName) && !is_string($dnsName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($dnsName, true), gettype($dnsName)), __LINE__);
        }
        $this->DnsName = $dnsName;
        
        return $this;
    }
}
