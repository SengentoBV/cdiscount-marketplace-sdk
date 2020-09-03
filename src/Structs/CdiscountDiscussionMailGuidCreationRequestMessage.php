<?php

namespace SengentoBV\CdiscountMarketplaceSdk\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DiscussionMailGuidCreationRequestMessage Structs
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:DiscussionMailGuidCreationRequestMessage
 * @package Cdiscount
 * @subpackage Structs
 */
class CdiscountDiscussionMailGuidCreationRequestMessage extends AbstractStructBase
{
    /**
     * The ScopusId
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $ScopusId;
    /**
     * Constructor method for DiscussionMailGuidCreationRequestMessage
     * @uses CdiscountDiscussionMailGuidCreationRequestMessage::setScopusId()
     * @param string $scopusId
     */
    public function __construct($scopusId = null)
    {
        $this
            ->setScopusId($scopusId);
    }
    /**
     * Get ScopusId value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getScopusId()
    {
        return isset($this->ScopusId) ? $this->ScopusId : null;
    }
    /**
     * Set ScopusId value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $scopusId
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountDiscussionMailGuidCreationRequestMessage
     */
    public function setScopusId($scopusId = null)
    {
        // validation for constraint: string
        if (!is_null($scopusId) && !is_string($scopusId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($scopusId, true), gettype($scopusId)), __LINE__);
        }
        if (is_null($scopusId) || (is_array($scopusId) && empty($scopusId))) {
            unset($this->ScopusId);
        } else {
            $this->ScopusId = $scopusId;
        }
        return $this;
    }
}
