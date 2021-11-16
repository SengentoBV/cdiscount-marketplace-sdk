<?php

declare(strict_types=1);

namespace SengentoBV\CdiscountMarketplaceSdk\Structs;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DiscussionMailListMessage Structs
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:DiscussionMailListMessage
 * @package Cdiscount
 * @subpackage Structs
 */
class CdiscountDiscussionMailListMessage extends CdiscountServiceBaseAPIMessage
{
    /**
     * The DiscussionMailList
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfDiscussionMail|null
     */
    protected ?\SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfDiscussionMail $DiscussionMailList = null;
    /**
     * Constructor method for DiscussionMailListMessage
     * @uses CdiscountDiscussionMailListMessage::setDiscussionMailList()
     * @param \SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfDiscussionMail $discussionMailList
     */
    public function __construct(?\SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfDiscussionMail $discussionMailList = null)
    {
        $this
            ->setDiscussionMailList($discussionMailList);
    }
    /**
     * Get DiscussionMailList value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfDiscussionMail|null
     */
    public function getDiscussionMailList(): ?\SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfDiscussionMail
    {
        return isset($this->DiscussionMailList) ? $this->DiscussionMailList : null;
    }
    /**
     * Set DiscussionMailList value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfDiscussionMail $discussionMailList
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountDiscussionMailListMessage
     */
    public function setDiscussionMailList(?\SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfDiscussionMail $discussionMailList = null): self
    {
        if (is_null($discussionMailList) || (is_array($discussionMailList) && empty($discussionMailList))) {
            unset($this->DiscussionMailList);
        } else {
            $this->DiscussionMailList = $discussionMailList;
        }
        
        return $this;
    }
}
