<?php

declare(strict_types=1);

namespace SengentoBV\CdiscountMarketplaceSdk\Structs;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SubmitOfferPackageResponse Structs
 * @package Cdiscount
 * @subpackage Structs
 */
class CdiscountSubmitOfferPackageResponse extends AbstractStructBase
{
    /**
     * The SubmitOfferPackageResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountOfferIntegrationReportMessage|null
     */
    protected ?\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountOfferIntegrationReportMessage $SubmitOfferPackageResult = null;
    /**
     * Constructor method for SubmitOfferPackageResponse
     * @uses CdiscountSubmitOfferPackageResponse::setSubmitOfferPackageResult()
     * @param \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountOfferIntegrationReportMessage $submitOfferPackageResult
     */
    public function __construct(?\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountOfferIntegrationReportMessage $submitOfferPackageResult = null)
    {
        $this
            ->setSubmitOfferPackageResult($submitOfferPackageResult);
    }
    /**
     * Get SubmitOfferPackageResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountOfferIntegrationReportMessage|null
     */
    public function getSubmitOfferPackageResult(): ?\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountOfferIntegrationReportMessage
    {
        return isset($this->SubmitOfferPackageResult) ? $this->SubmitOfferPackageResult : null;
    }
    /**
     * Set SubmitOfferPackageResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountOfferIntegrationReportMessage $submitOfferPackageResult
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountSubmitOfferPackageResponse
     */
    public function setSubmitOfferPackageResult(?\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountOfferIntegrationReportMessage $submitOfferPackageResult = null): self
    {
        if (is_null($submitOfferPackageResult) || (is_array($submitOfferPackageResult) && empty($submitOfferPackageResult))) {
            unset($this->SubmitOfferPackageResult);
        } else {
            $this->SubmitOfferPackageResult = $submitOfferPackageResult;
        }
        
        return $this;
    }
}
