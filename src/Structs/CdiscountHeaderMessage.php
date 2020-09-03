<?php

namespace SengentoBV\CdiscountMarketplaceSdk\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

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
     * @var \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountContextMessage
     */
    public $Context;
    /**
     * The Localization
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountLocalizationMessage
     */
    public $Localization;
    /**
     * The Security
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountSecurityContext
     */
    public $Security;
    /**
     * The Version
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $Version;
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
    public function __construct(\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountContextMessage $context = null, \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountLocalizationMessage $localization = null, \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountSecurityContext $security = null, $version = null)
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
    public function getContext()
    {
        return $this->Context;
    }
    /**
     * Set Context value
     * @param \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountContextMessage $context
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountHeaderMessage
     */
    public function setContext(\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountContextMessage $context = null)
    {
        $this->Context = $context;
        return $this;
    }
    /**
     * Get Localization value
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountLocalizationMessage|null
     */
    public function getLocalization()
    {
        return $this->Localization;
    }
    /**
     * Set Localization value
     * @param \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountLocalizationMessage $localization
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountHeaderMessage
     */
    public function setLocalization(\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountLocalizationMessage $localization = null)
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
    public function getSecurity()
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
    public function setSecurity(\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountSecurityContext $security = null)
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
    public function getVersion()
    {
        return $this->Version;
    }
    /**
     * Set Version value
     * @param string $version
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountHeaderMessage
     */
    public function setVersion($version = null)
    {
        // validation for constraint: string
        if (!is_null($version) && !is_string($version)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($version, true), gettype($version)), __LINE__);
        }
        $this->Version = $version;
        return $this;
    }
}
