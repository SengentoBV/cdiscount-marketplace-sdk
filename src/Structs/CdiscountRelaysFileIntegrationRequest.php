<?php

namespace SengentoBV\CdiscountMarketplaceSdk\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RelaysFileIntegrationRequest Structs
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:RelaysFileIntegrationRequest
 * @package Cdiscount
 * @subpackage Structs
 */
class CdiscountRelaysFileIntegrationRequest extends AbstractStructBase
{
    /**
     * The RelaysFileURI
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $RelaysFileURI;
    /**
     * Constructor method for RelaysFileIntegrationRequest
     * @uses CdiscountRelaysFileIntegrationRequest::setRelaysFileURI()
     * @param string $relaysFileURI
     */
    public function __construct($relaysFileURI = null)
    {
        $this
            ->setRelaysFileURI($relaysFileURI);
    }
    /**
     * Get RelaysFileURI value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getRelaysFileURI()
    {
        return isset($this->RelaysFileURI) ? $this->RelaysFileURI : null;
    }
    /**
     * Set RelaysFileURI value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $relaysFileURI
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountRelaysFileIntegrationRequest
     */
    public function setRelaysFileURI($relaysFileURI = null)
    {
        // validation for constraint: string
        if (!is_null($relaysFileURI) && !is_string($relaysFileURI)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($relaysFileURI, true), gettype($relaysFileURI)), __LINE__);
        }
        if (is_null($relaysFileURI) || (is_array($relaysFileURI) && empty($relaysFileURI))) {
            unset($this->RelaysFileURI);
        } else {
            $this->RelaysFileURI = $relaysFileURI;
        }
        return $this;
    }
}
