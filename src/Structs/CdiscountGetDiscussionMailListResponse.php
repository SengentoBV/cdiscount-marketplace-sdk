<?php

declare(strict_types=1);

namespace SengentoBV\CdiscountMarketplaceSdk\Structs;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetDiscussionMailListResponse Structs
 * @package Cdiscount
 * @subpackage Structs
 */
class CdiscountGetDiscussionMailListResponse extends AbstractStructBase
{
    /**
     * The GetDiscussionMailListResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountDiscussionMailListMessage|null
     */
    protected ?\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountDiscussionMailListMessage $GetDiscussionMailListResult = null;
    /**
     * Constructor method for GetDiscussionMailListResponse
     * @uses CdiscountGetDiscussionMailListResponse::setGetDiscussionMailListResult()
     * @param \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountDiscussionMailListMessage $getDiscussionMailListResult
     */
    public function __construct(?\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountDiscussionMailListMessage $getDiscussionMailListResult = null)
    {
        $this
            ->setGetDiscussionMailListResult($getDiscussionMailListResult);
    }
    /**
     * Get GetDiscussionMailListResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountDiscussionMailListMessage|null
     */
    public function getGetDiscussionMailListResult(): ?\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountDiscussionMailListMessage
    {
        return isset($this->GetDiscussionMailListResult) ? $this->GetDiscussionMailListResult : null;
    }
    /**
     * Set GetDiscussionMailListResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountDiscussionMailListMessage $getDiscussionMailListResult
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountGetDiscussionMailListResponse
     */
    public function setGetDiscussionMailListResult(?\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountDiscussionMailListMessage $getDiscussionMailListResult = null): self
    {
        if (is_null($getDiscussionMailListResult) || (is_array($getDiscussionMailListResult) && empty($getDiscussionMailListResult))) {
            unset($this->GetDiscussionMailListResult);
        } else {
            $this->GetDiscussionMailListResult = $getDiscussionMailListResult;
        }
        
        return $this;
    }
}
