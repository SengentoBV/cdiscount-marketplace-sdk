<?php

namespace SengentoBV\CdiscountMarketplaceSdk\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetFulfilmentActivationReportListResponse Structs
 * @package Cdiscount
 * @subpackage Structs
 */
class CdiscountGetFulfilmentActivationReportListResponse extends AbstractStructBase
{
    /**
     * The GetFulfilmentActivationReportListResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountFulfilmentActivationReportMessage
     */
    public $GetFulfilmentActivationReportListResult;
    /**
     * Constructor method for GetFulfilmentActivationReportListResponse
     * @uses CdiscountGetFulfilmentActivationReportListResponse::setGetFulfilmentActivationReportListResult()
     * @param \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountFulfilmentActivationReportMessage $getFulfilmentActivationReportListResult
     */
    public function __construct(\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountFulfilmentActivationReportMessage $getFulfilmentActivationReportListResult = null)
    {
        $this
            ->setGetFulfilmentActivationReportListResult($getFulfilmentActivationReportListResult);
    }
    /**
     * Get GetFulfilmentActivationReportListResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountFulfilmentActivationReportMessage|null
     */
    public function getGetFulfilmentActivationReportListResult()
    {
        return isset($this->GetFulfilmentActivationReportListResult) ? $this->GetFulfilmentActivationReportListResult : null;
    }
    /**
     * Set GetFulfilmentActivationReportListResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountFulfilmentActivationReportMessage $getFulfilmentActivationReportListResult
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountGetFulfilmentActivationReportListResponse
     */
    public function setGetFulfilmentActivationReportListResult(\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountFulfilmentActivationReportMessage $getFulfilmentActivationReportListResult = null)
    {
        if (is_null($getFulfilmentActivationReportListResult) || (is_array($getFulfilmentActivationReportListResult) && empty($getFulfilmentActivationReportListResult))) {
            unset($this->GetFulfilmentActivationReportListResult);
        } else {
            $this->GetFulfilmentActivationReportListResult = $getFulfilmentActivationReportListResult;
        }
        return $this;
    }
}
