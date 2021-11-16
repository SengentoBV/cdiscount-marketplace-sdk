<?php

declare(strict_types=1);

namespace SengentoBV\CdiscountMarketplaceSdk\Structs;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SubmitOfferStateActionResponse Structs
 * @package Cdiscount
 * @subpackage Structs
 */
class CdiscountSubmitOfferStateActionResponse extends AbstractStructBase
{
    /**
     * The SubmitOfferStateActionResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountOfferStateReportMessage|null
     */
    protected ?\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountOfferStateReportMessage $SubmitOfferStateActionResult = null;
    /**
     * Constructor method for SubmitOfferStateActionResponse
     * @uses CdiscountSubmitOfferStateActionResponse::setSubmitOfferStateActionResult()
     * @param \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountOfferStateReportMessage $submitOfferStateActionResult
     */
    public function __construct(?\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountOfferStateReportMessage $submitOfferStateActionResult = null)
    {
        $this
            ->setSubmitOfferStateActionResult($submitOfferStateActionResult);
    }
    /**
     * Get SubmitOfferStateActionResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountOfferStateReportMessage|null
     */
    public function getSubmitOfferStateActionResult(): ?\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountOfferStateReportMessage
    {
        return isset($this->SubmitOfferStateActionResult) ? $this->SubmitOfferStateActionResult : null;
    }
    /**
     * Set SubmitOfferStateActionResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountOfferStateReportMessage $submitOfferStateActionResult
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountSubmitOfferStateActionResponse
     */
    public function setSubmitOfferStateActionResult(?\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountOfferStateReportMessage $submitOfferStateActionResult = null): self
    {
        if (is_null($submitOfferStateActionResult) || (is_array($submitOfferStateActionResult) && empty($submitOfferStateActionResult))) {
            unset($this->SubmitOfferStateActionResult);
        } else {
            $this->SubmitOfferStateActionResult = $submitOfferStateActionResult;
        }
        
        return $this;
    }
}
