<?php

namespace SengentoBV\CdiscountMarketplaceSdk\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DiscussionListMessage Structs
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:DiscussionListMessage
 * @package Cdiscount
 * @subpackage Structs
 */
class CdiscountDiscussionListMessage extends CdiscountServiceBaseAPIMessage
{
    /**
     * The DiscussionList
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfDiscussion
     */
    public $DiscussionList;
    /**
     * Constructor method for DiscussionListMessage
     * @uses CdiscountDiscussionListMessage::setDiscussionList()
     * @param \SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfDiscussion $discussionList
     */
    public function __construct(\SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfDiscussion $discussionList = null)
    {
        $this
            ->setDiscussionList($discussionList);
    }
    /**
     * Get DiscussionList value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfDiscussion|null
     */
    public function getDiscussionList()
    {
        return isset($this->DiscussionList) ? $this->DiscussionList : null;
    }
    /**
     * Set DiscussionList value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfDiscussion $discussionList
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountDiscussionListMessage
     */
    public function setDiscussionList(\SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfDiscussion $discussionList = null)
    {
        if (is_null($discussionList) || (is_array($discussionList) && empty($discussionList))) {
            unset($this->DiscussionList);
        } else {
            $this->DiscussionList = $discussionList;
        }
        return $this;
    }
}
