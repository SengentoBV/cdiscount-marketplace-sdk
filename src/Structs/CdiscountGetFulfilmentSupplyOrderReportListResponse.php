<?php

namespace SengentoBV\CdiscountMarketplaceSdk\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetFulfilmentSupplyOrderReportListResponse Structs
 * @package Cdiscount
 * @subpackage Structs
 */
class CdiscountGetFulfilmentSupplyOrderReportListResponse extends AbstractStructBase
{
    /**
     * The GetFulfilmentSupplyOrderReportListResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountSupplyOrderReportListMessage
     */
    public $GetFulfilmentSupplyOrderReportListResult;
    /**
     * Constructor method for GetFulfilmentSupplyOrderReportListResponse
     * @uses CdiscountGetFulfilmentSupplyOrderReportListResponse::setGetFulfilmentSupplyOrderReportListResult()
     * @param \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountSupplyOrderReportListMessage $getFulfilmentSupplyOrderReportListResult
     */
    public function __construct(\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountSupplyOrderReportListMessage $getFulfilmentSupplyOrderReportListResult = null)
    {
        $this
            ->setGetFulfilmentSupplyOrderReportListResult($getFulfilmentSupplyOrderReportListResult);
    }
    /**
     * Get GetFulfilmentSupplyOrderReportListResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountSupplyOrderReportListMessage|null
     */
    public function getGetFulfilmentSupplyOrderReportListResult()
    {
        return isset($this->GetFulfilmentSupplyOrderReportListResult) ? $this->GetFulfilmentSupplyOrderReportListResult : null;
    }
    /**
     * Set GetFulfilmentSupplyOrderReportListResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountSupplyOrderReportListMessage $getFulfilmentSupplyOrderReportListResult
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountGetFulfilmentSupplyOrderReportListResponse
     */
    public function setGetFulfilmentSupplyOrderReportListResult(\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountSupplyOrderReportListMessage $getFulfilmentSupplyOrderReportListResult = null)
    {
        if (is_null($getFulfilmentSupplyOrderReportListResult) || (is_array($getFulfilmentSupplyOrderReportListResult) && empty($getFulfilmentSupplyOrderReportListResult))) {
            unset($this->GetFulfilmentSupplyOrderReportListResult);
        } else {
            $this->GetFulfilmentSupplyOrderReportListResult = $getFulfilmentSupplyOrderReportListResult;
        }
        return $this;
    }
}
