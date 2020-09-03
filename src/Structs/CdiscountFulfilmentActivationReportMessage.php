<?php

namespace SengentoBV\CdiscountMarketplaceSdk\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FulfilmentActivationReportMessage Structs
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:FulfilmentActivationReportMessage
 * @package Cdiscount
 * @subpackage Structs
 */
class CdiscountFulfilmentActivationReportMessage extends CdiscountServiceBaseAPIMessage
{
    /**
     * The FulfilmentActivationReportList
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var \SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfFulfilmentActivationReport
     */
    public $FulfilmentActivationReportList;
    /**
     * Constructor method for FulfilmentActivationReportMessage
     * @uses CdiscountFulfilmentActivationReportMessage::setFulfilmentActivationReportList()
     * @param \SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfFulfilmentActivationReport $fulfilmentActivationReportList
     */
    public function __construct(\SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfFulfilmentActivationReport $fulfilmentActivationReportList = null)
    {
        $this
            ->setFulfilmentActivationReportList($fulfilmentActivationReportList);
    }
    /**
     * Get FulfilmentActivationReportList value
     * @return \SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfFulfilmentActivationReport|null
     */
    public function getFulfilmentActivationReportList()
    {
        return $this->FulfilmentActivationReportList;
    }
    /**
     * Set FulfilmentActivationReportList value
     * @param \SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfFulfilmentActivationReport $fulfilmentActivationReportList
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountFulfilmentActivationReportMessage
     */
    public function setFulfilmentActivationReportList(\SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfFulfilmentActivationReport $fulfilmentActivationReportList = null)
    {
        $this->FulfilmentActivationReportList = $fulfilmentActivationReportList;
        return $this;
    }
}
