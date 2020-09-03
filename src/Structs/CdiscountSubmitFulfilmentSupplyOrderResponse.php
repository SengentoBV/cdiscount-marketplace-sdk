<?php

namespace SengentoBV\CdiscountMarketplaceSdk\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SubmitFulfilmentSupplyOrderResponse Structs
 * @package Cdiscount
 * @subpackage Structs
 */
class CdiscountSubmitFulfilmentSupplyOrderResponse extends AbstractStructBase
{
    /**
     * The SubmitFulfilmentSupplyOrderResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountSupplyOrderReportMessage
     */
    public $SubmitFulfilmentSupplyOrderResult;
    /**
     * Constructor method for SubmitFulfilmentSupplyOrderResponse
     * @uses CdiscountSubmitFulfilmentSupplyOrderResponse::setSubmitFulfilmentSupplyOrderResult()
     * @param \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountSupplyOrderReportMessage $submitFulfilmentSupplyOrderResult
     */
    public function __construct(\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountSupplyOrderReportMessage $submitFulfilmentSupplyOrderResult = null)
    {
        $this
            ->setSubmitFulfilmentSupplyOrderResult($submitFulfilmentSupplyOrderResult);
    }
    /**
     * Get SubmitFulfilmentSupplyOrderResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountSupplyOrderReportMessage|null
     */
    public function getSubmitFulfilmentSupplyOrderResult()
    {
        return isset($this->SubmitFulfilmentSupplyOrderResult) ? $this->SubmitFulfilmentSupplyOrderResult : null;
    }
    /**
     * Set SubmitFulfilmentSupplyOrderResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountSupplyOrderReportMessage $submitFulfilmentSupplyOrderResult
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountSubmitFulfilmentSupplyOrderResponse
     */
    public function setSubmitFulfilmentSupplyOrderResult(\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountSupplyOrderReportMessage $submitFulfilmentSupplyOrderResult = null)
    {
        if (is_null($submitFulfilmentSupplyOrderResult) || (is_array($submitFulfilmentSupplyOrderResult) && empty($submitFulfilmentSupplyOrderResult))) {
            unset($this->SubmitFulfilmentSupplyOrderResult);
        } else {
            $this->SubmitFulfilmentSupplyOrderResult = $submitFulfilmentSupplyOrderResult;
        }
        return $this;
    }
}
