<?php

namespace SengentoBV\CdiscountMarketplaceSdk\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetDiscussionListResponse Structs
 * @package Cdiscount
 * @subpackage Structs
 */
class CdiscountGetDiscussionListResponse extends AbstractStructBase
{
    /**
     * The GetDiscussionListResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountDiscussionListMessage
     */
    public $GetDiscussionListResult;
    /**
     * Constructor method for GetDiscussionListResponse
     * @uses CdiscountGetDiscussionListResponse::setGetDiscussionListResult()
     * @param \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountDiscussionListMessage $getDiscussionListResult
     */
    public function __construct(\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountDiscussionListMessage $getDiscussionListResult = null)
    {
        $this
            ->setGetDiscussionListResult($getDiscussionListResult);
    }
    /**
     * Get GetDiscussionListResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountDiscussionListMessage|null
     */
    public function getGetDiscussionListResult()
    {
        return isset($this->GetDiscussionListResult) ? $this->GetDiscussionListResult : null;
    }
    /**
     * Set GetDiscussionListResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountDiscussionListMessage $getDiscussionListResult
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountGetDiscussionListResponse
     */
    public function setGetDiscussionListResult(\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountDiscussionListMessage $getDiscussionListResult = null)
    {
        if (is_null($getDiscussionListResult) || (is_array($getDiscussionListResult) && empty($getDiscussionListResult))) {
            unset($this->GetDiscussionListResult);
        } else {
            $this->GetDiscussionListResult = $getDiscussionListResult;
        }
        return $this;
    }
}
