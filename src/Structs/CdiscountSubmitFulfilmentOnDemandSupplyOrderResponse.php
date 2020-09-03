<?php

namespace SengentoBV\CdiscountMarketplaceSdk\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SubmitFulfilmentOnDemandSupplyOrderResponse Structs
 * @package Cdiscount
 * @subpackage Structs
 */
class CdiscountSubmitFulfilmentOnDemandSupplyOrderResponse extends AbstractStructBase
{
    /**
     * The SubmitFulfilmentOnDemandSupplyOrderResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountSupplyOrderReportMessage
     */
    public $SubmitFulfilmentOnDemandSupplyOrderResult;
    /**
     * Constructor method for SubmitFulfilmentOnDemandSupplyOrderResponse
     * @uses CdiscountSubmitFulfilmentOnDemandSupplyOrderResponse::setSubmitFulfilmentOnDemandSupplyOrderResult()
     * @param \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountSupplyOrderReportMessage $submitFulfilmentOnDemandSupplyOrderResult
     */
    public function __construct(\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountSupplyOrderReportMessage $submitFulfilmentOnDemandSupplyOrderResult = null)
    {
        $this
            ->setSubmitFulfilmentOnDemandSupplyOrderResult($submitFulfilmentOnDemandSupplyOrderResult);
    }
    /**
     * Get SubmitFulfilmentOnDemandSupplyOrderResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountSupplyOrderReportMessage|null
     */
    public function getSubmitFulfilmentOnDemandSupplyOrderResult()
    {
        return isset($this->SubmitFulfilmentOnDemandSupplyOrderResult) ? $this->SubmitFulfilmentOnDemandSupplyOrderResult : null;
    }
    /**
     * Set SubmitFulfilmentOnDemandSupplyOrderResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountSupplyOrderReportMessage $submitFulfilmentOnDemandSupplyOrderResult
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountSubmitFulfilmentOnDemandSupplyOrderResponse
     */
    public function setSubmitFulfilmentOnDemandSupplyOrderResult(\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountSupplyOrderReportMessage $submitFulfilmentOnDemandSupplyOrderResult = null)
    {
        if (is_null($submitFulfilmentOnDemandSupplyOrderResult) || (is_array($submitFulfilmentOnDemandSupplyOrderResult) && empty($submitFulfilmentOnDemandSupplyOrderResult))) {
            unset($this->SubmitFulfilmentOnDemandSupplyOrderResult);
        } else {
            $this->SubmitFulfilmentOnDemandSupplyOrderResult = $submitFulfilmentOnDemandSupplyOrderResult;
        }
        return $this;
    }
}
