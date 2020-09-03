<?php

namespace SengentoBV\CdiscountMarketplaceSdk\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetOrderListResponse Structs
 * @package Cdiscount
 * @subpackage Structs
 */
class CdiscountGetOrderListResponse extends AbstractStructBase
{
    /**
     * The GetOrderListResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountOrderListMessage
     */
    public $GetOrderListResult;
    /**
     * Constructor method for GetOrderListResponse
     * @uses CdiscountGetOrderListResponse::setGetOrderListResult()
     * @param \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountOrderListMessage $getOrderListResult
     */
    public function __construct(\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountOrderListMessage $getOrderListResult = null)
    {
        $this
            ->setGetOrderListResult($getOrderListResult);
    }
    /**
     * Get GetOrderListResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountOrderListMessage|null
     */
    public function getGetOrderListResult()
    {
        return isset($this->GetOrderListResult) ? $this->GetOrderListResult : null;
    }
    /**
     * Set GetOrderListResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountOrderListMessage $getOrderListResult
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountGetOrderListResponse
     */
    public function setGetOrderListResult(\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountOrderListMessage $getOrderListResult = null)
    {
        if (is_null($getOrderListResult) || (is_array($getOrderListResult) && empty($getOrderListResult))) {
            unset($this->GetOrderListResult);
        } else {
            $this->GetOrderListResult = $getOrderListResult;
        }
        return $this;
    }
}
