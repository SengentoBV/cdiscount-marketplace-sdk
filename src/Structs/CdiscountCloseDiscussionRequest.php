<?php

namespace SengentoBV\CdiscountMarketplaceSdk\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CloseDiscussionRequest Structs
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:CloseDiscussionRequest
 * @package Cdiscount
 * @subpackage Structs
 */
class CdiscountCloseDiscussionRequest extends AbstractStructBase
{
    /**
     * The DiscussionIds
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOflong
     */
    public $DiscussionIds;
    /**
     * Constructor method for CloseDiscussionRequest
     * @uses CdiscountCloseDiscussionRequest::setDiscussionIds()
     * @param \SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOflong $discussionIds
     */
    public function __construct(\SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOflong $discussionIds = null)
    {
        $this
            ->setDiscussionIds($discussionIds);
    }
    /**
     * Get DiscussionIds value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOflong|null
     */
    public function getDiscussionIds()
    {
        return isset($this->DiscussionIds) ? $this->DiscussionIds : null;
    }
    /**
     * Set DiscussionIds value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOflong $discussionIds
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountCloseDiscussionRequest
     */
    public function setDiscussionIds(\SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOflong $discussionIds = null)
    {
        if (is_null($discussionIds) || (is_array($discussionIds) && empty($discussionIds))) {
            unset($this->DiscussionIds);
        } else {
            $this->DiscussionIds = $discussionIds;
        }
        return $this;
    }
}
