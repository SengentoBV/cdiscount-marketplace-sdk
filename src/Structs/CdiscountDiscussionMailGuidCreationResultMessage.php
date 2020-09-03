<?php

namespace SengentoBV\CdiscountMarketplaceSdk\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DiscussionMailGuidCreationResultMessage Structs
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:DiscussionMailGuidCreationResultMessage
 * @package Cdiscount
 * @subpackage Structs
 */
class CdiscountDiscussionMailGuidCreationResultMessage extends CdiscountServiceBaseAPIMessage
{
    /**
     * The MailGuid
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $MailGuid;
    /**
     * Constructor method for DiscussionMailGuidCreationResultMessage
     * @uses CdiscountDiscussionMailGuidCreationResultMessage::setMailGuid()
     * @param string $mailGuid
     */
    public function __construct($mailGuid = null)
    {
        $this
            ->setMailGuid($mailGuid);
    }
    /**
     * Get MailGuid value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getMailGuid()
    {
        return isset($this->MailGuid) ? $this->MailGuid : null;
    }
    /**
     * Set MailGuid value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $mailGuid
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountDiscussionMailGuidCreationResultMessage
     */
    public function setMailGuid($mailGuid = null)
    {
        // validation for constraint: string
        if (!is_null($mailGuid) && !is_string($mailGuid)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($mailGuid, true), gettype($mailGuid)), __LINE__);
        }
        if (is_null($mailGuid) || (is_array($mailGuid) && empty($mailGuid))) {
            unset($this->MailGuid);
        } else {
            $this->MailGuid = $mailGuid;
        }
        return $this;
    }
}
