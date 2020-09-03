<?php

namespace SengentoBV\CdiscountMarketplaceSdk\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetRelaysFileSubmissionResultResponse Structs
 * @package Cdiscount
 * @subpackage Structs
 */
class CdiscountGetRelaysFileSubmissionResultResponse extends AbstractStructBase
{
    /**
     * The GetRelaysFileSubmissionResultResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountRelayIntegrationReportMessage
     */
    public $GetRelaysFileSubmissionResultResult;
    /**
     * Constructor method for GetRelaysFileSubmissionResultResponse
     * @uses CdiscountGetRelaysFileSubmissionResultResponse::setGetRelaysFileSubmissionResultResult()
     * @param \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountRelayIntegrationReportMessage $getRelaysFileSubmissionResultResult
     */
    public function __construct(\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountRelayIntegrationReportMessage $getRelaysFileSubmissionResultResult = null)
    {
        $this
            ->setGetRelaysFileSubmissionResultResult($getRelaysFileSubmissionResultResult);
    }
    /**
     * Get GetRelaysFileSubmissionResultResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountRelayIntegrationReportMessage|null
     */
    public function getGetRelaysFileSubmissionResultResult()
    {
        return isset($this->GetRelaysFileSubmissionResultResult) ? $this->GetRelaysFileSubmissionResultResult : null;
    }
    /**
     * Set GetRelaysFileSubmissionResultResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountRelayIntegrationReportMessage $getRelaysFileSubmissionResultResult
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountGetRelaysFileSubmissionResultResponse
     */
    public function setGetRelaysFileSubmissionResultResult(\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountRelayIntegrationReportMessage $getRelaysFileSubmissionResultResult = null)
    {
        if (is_null($getRelaysFileSubmissionResultResult) || (is_array($getRelaysFileSubmissionResultResult) && empty($getRelaysFileSubmissionResultResult))) {
            unset($this->GetRelaysFileSubmissionResultResult);
        } else {
            $this->GetRelaysFileSubmissionResultResult = $getRelaysFileSubmissionResultResult;
        }
        return $this;
    }
}
