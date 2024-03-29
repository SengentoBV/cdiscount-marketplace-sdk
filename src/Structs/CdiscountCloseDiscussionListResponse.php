<?php

declare(strict_types=1);

namespace SengentoBV\CdiscountMarketplaceSdk\Structs;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CloseDiscussionListResponse Structs
 * @package Cdiscount
 * @subpackage Structs
 */
class CdiscountCloseDiscussionListResponse extends AbstractStructBase
{
    /**
     * The CloseDiscussionListResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountCloseDiscussionResultMessage|null
     */
    protected ?\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountCloseDiscussionResultMessage $CloseDiscussionListResult = null;
    /**
     * Constructor method for CloseDiscussionListResponse
     * @uses CdiscountCloseDiscussionListResponse::setCloseDiscussionListResult()
     * @param \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountCloseDiscussionResultMessage $closeDiscussionListResult
     */
    public function __construct(?\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountCloseDiscussionResultMessage $closeDiscussionListResult = null)
    {
        $this
            ->setCloseDiscussionListResult($closeDiscussionListResult);
    }
    /**
     * Get CloseDiscussionListResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountCloseDiscussionResultMessage|null
     */
    public function getCloseDiscussionListResult(): ?\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountCloseDiscussionResultMessage
    {
        return isset($this->CloseDiscussionListResult) ? $this->CloseDiscussionListResult : null;
    }
    /**
     * Set CloseDiscussionListResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountCloseDiscussionResultMessage $closeDiscussionListResult
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountCloseDiscussionListResponse
     */
    public function setCloseDiscussionListResult(?\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountCloseDiscussionResultMessage $closeDiscussionListResult = null): self
    {
        if (is_null($closeDiscussionListResult) || (is_array($closeDiscussionListResult) && empty($closeDiscussionListResult))) {
            unset($this->CloseDiscussionListResult);
        } else {
            $this->CloseDiscussionListResult = $closeDiscussionListResult;
        }
        
        return $this;
    }
}
