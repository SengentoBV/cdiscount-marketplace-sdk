<?php

namespace SengentoBV\CdiscountMarketplaceSdk\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetOfferPackageSubmissionResultResponse Structs
 * @package Cdiscount
 * @subpackage Structs
 */
class CdiscountGetOfferPackageSubmissionResultResponse extends AbstractStructBase
{
    /**
     * The GetOfferPackageSubmissionResultResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountOfferIntegrationReportMessage
     */
    public $GetOfferPackageSubmissionResultResult;
    /**
     * Constructor method for GetOfferPackageSubmissionResultResponse
     * @uses CdiscountGetOfferPackageSubmissionResultResponse::setGetOfferPackageSubmissionResultResult()
     * @param \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountOfferIntegrationReportMessage $getOfferPackageSubmissionResultResult
     */
    public function __construct(\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountOfferIntegrationReportMessage $getOfferPackageSubmissionResultResult = null)
    {
        $this
            ->setGetOfferPackageSubmissionResultResult($getOfferPackageSubmissionResultResult);
    }
    /**
     * Get GetOfferPackageSubmissionResultResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountOfferIntegrationReportMessage|null
     */
    public function getGetOfferPackageSubmissionResultResult()
    {
        return isset($this->GetOfferPackageSubmissionResultResult) ? $this->GetOfferPackageSubmissionResultResult : null;
    }
    /**
     * Set GetOfferPackageSubmissionResultResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountOfferIntegrationReportMessage $getOfferPackageSubmissionResultResult
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountGetOfferPackageSubmissionResultResponse
     */
    public function setGetOfferPackageSubmissionResultResult(\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountOfferIntegrationReportMessage $getOfferPackageSubmissionResultResult = null)
    {
        if (is_null($getOfferPackageSubmissionResultResult) || (is_array($getOfferPackageSubmissionResultResult) && empty($getOfferPackageSubmissionResultResult))) {
            unset($this->GetOfferPackageSubmissionResultResult);
        } else {
            $this->GetOfferPackageSubmissionResultResult = $getOfferPackageSubmissionResultResult;
        }
        return $this;
    }
}
