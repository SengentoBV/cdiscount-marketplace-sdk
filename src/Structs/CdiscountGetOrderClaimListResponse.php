<?php

namespace SengentoBV\CdiscountMarketplaceSdk\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetOrderClaimListResponse Structs
 * @package Cdiscount
 * @subpackage Structs
 */
class CdiscountGetOrderClaimListResponse extends AbstractStructBase
{
    /**
     * The GetOrderClaimListResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountOrderClaimListMessage
     */
    public $GetOrderClaimListResult;
    /**
     * Constructor method for GetOrderClaimListResponse
     * @uses CdiscountGetOrderClaimListResponse::setGetOrderClaimListResult()
     * @param \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountOrderClaimListMessage $getOrderClaimListResult
     */
    public function __construct(\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountOrderClaimListMessage $getOrderClaimListResult = null)
    {
        $this
            ->setGetOrderClaimListResult($getOrderClaimListResult);
    }
    /**
     * Get GetOrderClaimListResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountOrderClaimListMessage|null
     */
    public function getGetOrderClaimListResult()
    {
        return isset($this->GetOrderClaimListResult) ? $this->GetOrderClaimListResult : null;
    }
    /**
     * Set GetOrderClaimListResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountOrderClaimListMessage $getOrderClaimListResult
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountGetOrderClaimListResponse
     */
    public function setGetOrderClaimListResult(\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountOrderClaimListMessage $getOrderClaimListResult = null)
    {
        if (is_null($getOrderClaimListResult) || (is_array($getOrderClaimListResult) && empty($getOrderClaimListResult))) {
            unset($this->GetOrderClaimListResult);
        } else {
            $this->GetOrderClaimListResult = $getOrderClaimListResult;
        }
        return $this;
    }
}
