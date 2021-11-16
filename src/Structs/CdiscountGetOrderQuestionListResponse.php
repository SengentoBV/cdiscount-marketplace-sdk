<?php

declare(strict_types=1);

namespace SengentoBV\CdiscountMarketplaceSdk\Structs;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetOrderQuestionListResponse Structs
 * @package Cdiscount
 * @subpackage Structs
 */
class CdiscountGetOrderQuestionListResponse extends AbstractStructBase
{
    /**
     * The GetOrderQuestionListResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountOrderQuestionListMessage|null
     */
    protected ?\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountOrderQuestionListMessage $GetOrderQuestionListResult = null;
    /**
     * Constructor method for GetOrderQuestionListResponse
     * @uses CdiscountGetOrderQuestionListResponse::setGetOrderQuestionListResult()
     * @param \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountOrderQuestionListMessage $getOrderQuestionListResult
     */
    public function __construct(?\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountOrderQuestionListMessage $getOrderQuestionListResult = null)
    {
        $this
            ->setGetOrderQuestionListResult($getOrderQuestionListResult);
    }
    /**
     * Get GetOrderQuestionListResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountOrderQuestionListMessage|null
     */
    public function getGetOrderQuestionListResult(): ?\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountOrderQuestionListMessage
    {
        return isset($this->GetOrderQuestionListResult) ? $this->GetOrderQuestionListResult : null;
    }
    /**
     * Set GetOrderQuestionListResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountOrderQuestionListMessage $getOrderQuestionListResult
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountGetOrderQuestionListResponse
     */
    public function setGetOrderQuestionListResult(?\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountOrderQuestionListMessage $getOrderQuestionListResult = null): self
    {
        if (is_null($getOrderQuestionListResult) || (is_array($getOrderQuestionListResult) && empty($getOrderQuestionListResult))) {
            unset($this->GetOrderQuestionListResult);
        } else {
            $this->GetOrderQuestionListResult = $getOrderQuestionListResult;
        }
        
        return $this;
    }
}
