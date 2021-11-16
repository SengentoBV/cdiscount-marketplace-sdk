<?php

declare(strict_types=1);

namespace SengentoBV\CdiscountMarketplaceSdk\Structs;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SubmitFulfilmentActivationResponse Structs
 * @package Cdiscount
 * @subpackage Structs
 */
class CdiscountSubmitFulfilmentActivationResponse extends AbstractStructBase
{
    /**
     * The SubmitFulfilmentActivationResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountFulfilmentActivationMessage|null
     */
    protected ?\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountFulfilmentActivationMessage $SubmitFulfilmentActivationResult = null;
    /**
     * Constructor method for SubmitFulfilmentActivationResponse
     * @uses CdiscountSubmitFulfilmentActivationResponse::setSubmitFulfilmentActivationResult()
     * @param \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountFulfilmentActivationMessage $submitFulfilmentActivationResult
     */
    public function __construct(?\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountFulfilmentActivationMessage $submitFulfilmentActivationResult = null)
    {
        $this
            ->setSubmitFulfilmentActivationResult($submitFulfilmentActivationResult);
    }
    /**
     * Get SubmitFulfilmentActivationResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountFulfilmentActivationMessage|null
     */
    public function getSubmitFulfilmentActivationResult(): ?\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountFulfilmentActivationMessage
    {
        return isset($this->SubmitFulfilmentActivationResult) ? $this->SubmitFulfilmentActivationResult : null;
    }
    /**
     * Set SubmitFulfilmentActivationResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountFulfilmentActivationMessage $submitFulfilmentActivationResult
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountSubmitFulfilmentActivationResponse
     */
    public function setSubmitFulfilmentActivationResult(?\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountFulfilmentActivationMessage $submitFulfilmentActivationResult = null): self
    {
        if (is_null($submitFulfilmentActivationResult) || (is_array($submitFulfilmentActivationResult) && empty($submitFulfilmentActivationResult))) {
            unset($this->SubmitFulfilmentActivationResult);
        } else {
            $this->SubmitFulfilmentActivationResult = $submitFulfilmentActivationResult;
        }
        
        return $this;
    }
}
