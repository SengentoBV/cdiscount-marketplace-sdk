<?php

declare(strict_types=1);

namespace SengentoBV\CdiscountMarketplaceSdk\Structs;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SubmitProductPackageResponse Structs
 * @package Cdiscount
 * @subpackage Structs
 */
class CdiscountSubmitProductPackageResponse extends AbstractStructBase
{
    /**
     * The SubmitProductPackageResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountProductIntegrationReportMessage|null
     */
    protected ?\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountProductIntegrationReportMessage $SubmitProductPackageResult = null;
    /**
     * Constructor method for SubmitProductPackageResponse
     * @uses CdiscountSubmitProductPackageResponse::setSubmitProductPackageResult()
     * @param \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountProductIntegrationReportMessage $submitProductPackageResult
     */
    public function __construct(?\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountProductIntegrationReportMessage $submitProductPackageResult = null)
    {
        $this
            ->setSubmitProductPackageResult($submitProductPackageResult);
    }
    /**
     * Get SubmitProductPackageResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountProductIntegrationReportMessage|null
     */
    public function getSubmitProductPackageResult(): ?\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountProductIntegrationReportMessage
    {
        return isset($this->SubmitProductPackageResult) ? $this->SubmitProductPackageResult : null;
    }
    /**
     * Set SubmitProductPackageResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountProductIntegrationReportMessage $submitProductPackageResult
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountSubmitProductPackageResponse
     */
    public function setSubmitProductPackageResult(?\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountProductIntegrationReportMessage $submitProductPackageResult = null): self
    {
        if (is_null($submitProductPackageResult) || (is_array($submitProductPackageResult) && empty($submitProductPackageResult))) {
            unset($this->SubmitProductPackageResult);
        } else {
            $this->SubmitProductPackageResult = $submitProductPackageResult;
        }
        
        return $this;
    }
}
