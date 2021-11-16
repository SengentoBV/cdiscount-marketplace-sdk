<?php

declare(strict_types=1);

namespace SengentoBV\CdiscountMarketplaceSdk\Structs;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetProductPackageSubmissionResultResponse Structs
 * @package Cdiscount
 * @subpackage Structs
 */
class CdiscountGetProductPackageSubmissionResultResponse extends AbstractStructBase
{
    /**
     * The GetProductPackageSubmissionResultResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountProductIntegrationReportMessage|null
     */
    protected ?\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountProductIntegrationReportMessage $GetProductPackageSubmissionResultResult = null;
    /**
     * Constructor method for GetProductPackageSubmissionResultResponse
     * @uses CdiscountGetProductPackageSubmissionResultResponse::setGetProductPackageSubmissionResultResult()
     * @param \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountProductIntegrationReportMessage $getProductPackageSubmissionResultResult
     */
    public function __construct(?\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountProductIntegrationReportMessage $getProductPackageSubmissionResultResult = null)
    {
        $this
            ->setGetProductPackageSubmissionResultResult($getProductPackageSubmissionResultResult);
    }
    /**
     * Get GetProductPackageSubmissionResultResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountProductIntegrationReportMessage|null
     */
    public function getGetProductPackageSubmissionResultResult(): ?\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountProductIntegrationReportMessage
    {
        return isset($this->GetProductPackageSubmissionResultResult) ? $this->GetProductPackageSubmissionResultResult : null;
    }
    /**
     * Set GetProductPackageSubmissionResultResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountProductIntegrationReportMessage $getProductPackageSubmissionResultResult
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountGetProductPackageSubmissionResultResponse
     */
    public function setGetProductPackageSubmissionResultResult(?\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountProductIntegrationReportMessage $getProductPackageSubmissionResultResult = null): self
    {
        if (is_null($getProductPackageSubmissionResultResult) || (is_array($getProductPackageSubmissionResultResult) && empty($getProductPackageSubmissionResultResult))) {
            unset($this->GetProductPackageSubmissionResultResult);
        } else {
            $this->GetProductPackageSubmissionResultResult = $getProductPackageSubmissionResultResult;
        }
        
        return $this;
    }
}
