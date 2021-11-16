<?php

declare(strict_types=1);

namespace SengentoBV\CdiscountMarketplaceSdk\Structs;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for HeaderMessage Structs
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:HeaderMessage
 * @package Cdiscount
 * @subpackage Structs
 */
class CdiscountHeaderMessage extends AbstractStructBase
{
    /**
     * The Context
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountContextMessage|null
     */
    protected ?\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountContextMessage $Context = null;
    /**
     * The Localization
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountLocalizationMessage|null
     */
    protected ?\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountLocalizationMessage $Localization = null;
    /**
     * The Security
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountSecurityContext|null
     */
    protected ?\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountSecurityContext $Security = null;
    /**
     * The Version
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string|null
     */
    protected ?string $Version = null;
    /**
     * Constructor method for HeaderMessage
     * @uses CdiscountHeaderMessage::setContext()
     * @uses CdiscountHeaderMessage::setLocalization()
     * @uses CdiscountHeaderMessage::setSecurity()
     * @uses CdiscountHeaderMessage::setVersion()
     * @param \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountContextMessage $context
     * @param \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountLocalizationMessage $localization
     * @param \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountSecurityContext $security
     * @param string $version
     */
    public function __construct(?\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountContextMessage $context = null, ?\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountLocalizationMessage $localization = null, ?\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountSecurityContext $security = null, ?string $version = null)
    {
        $this
            ->setContext($context)
            ->setLocalization($localization)
            ->setSecurity($security)
            ->setVersion($version);
    }
    /**
     * Get Context value
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountContextMessage|null
     */
    public function getContext(): ?\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountContextMessage
    {
        return $this->Context;
    }
    /**
     * Set Context value
     * @param \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountContextMessage $context
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountHeaderMessage
     */
    public function setContext(?\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountContextMessage $context = null): self
    {
        $this->Context = $context;
        
        return $this;
    }
    /**
     * Get Localization value
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountLocalizationMessage|null
     */
    public function getLocalization(): ?\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountLocalizationMessage
    {
        return $this->Localization;
    }
    /**
     * Set Localization value
     * @param \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountLocalizationMessage $localization
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountHeaderMessage
     */
    public function setLocalization(?\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountLocalizationMessage $localization = null): self
    {
        $this->Localization = $localization;
        
        return $this;
    }
    /**
     * Get Security value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountSecurityContext|null
     */
    public function getSecurity(): ?\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountSecurityContext
    {
        return isset($this->Security) ? $this->Security : null;
    }
    /**
     * Set Security value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountSecurityContext $security
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountHeaderMessage
     */
    public function setSecurity(?\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountSecurityContext $security = null): self
    {
        if (is_null($security) || (is_array($security) && empty($security))) {
            unset($this->Security);
        } else {
            $this->Security = $security;
        }
        
        return $this;
    }
    /**
     * Get Version value
     * @return string|null
     */
    public function getVersion(): ?string
    {
        return $this->Version;
    }
    /**
     * Set Version value
     * @param string $version
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountHeaderMessage
     */
    public function setVersion(?string $version = null): self
    {
        // validation for constraint: string
        if (!is_null($version) && !is_string($version)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($version, true), gettype($version)), __LINE__);
        }
        $this->Version = $version;
        
        return $this;
    }
}
