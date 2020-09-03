<?php

namespace SengentoBV\CdiscountMarketplaceSdk\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetProductStockListResponse Structs
 * @package Cdiscount
 * @subpackage Structs
 */
class CdiscountGetProductStockListResponse extends AbstractStructBase
{
    /**
     * The GetProductStockListResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountProductStockListMessage
     */
    public $GetProductStockListResult;
    /**
     * Constructor method for GetProductStockListResponse
     * @uses CdiscountGetProductStockListResponse::setGetProductStockListResult()
     * @param \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountProductStockListMessage $getProductStockListResult
     */
    public function __construct(\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountProductStockListMessage $getProductStockListResult = null)
    {
        $this
            ->setGetProductStockListResult($getProductStockListResult);
    }
    /**
     * Get GetProductStockListResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountProductStockListMessage|null
     */
    public function getGetProductStockListResult()
    {
        return isset($this->GetProductStockListResult) ? $this->GetProductStockListResult : null;
    }
    /**
     * Set GetProductStockListResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountProductStockListMessage $getProductStockListResult
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountGetProductStockListResponse
     */
    public function setGetProductStockListResult(\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountProductStockListMessage $getProductStockListResult = null)
    {
        if (is_null($getProductStockListResult) || (is_array($getProductStockListResult) && empty($getProductStockListResult))) {
            unset($this->GetProductStockListResult);
        } else {
            $this->GetProductStockListResult = $getProductStockListResult;
        }
        return $this;
    }
}
