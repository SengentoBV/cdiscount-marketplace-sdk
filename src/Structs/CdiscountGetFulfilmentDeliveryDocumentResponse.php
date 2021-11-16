<?php

declare(strict_types=1);

namespace SengentoBV\CdiscountMarketplaceSdk\Structs;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetFulfilmentDeliveryDocumentResponse Structs
 * @package Cdiscount
 * @subpackage Structs
 */
class CdiscountGetFulfilmentDeliveryDocumentResponse extends AbstractStructBase
{
    /**
     * The GetFulfilmentDeliveryDocumentResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountFulfilmentDeliveryDocumentMessage|null
     */
    protected ?\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountFulfilmentDeliveryDocumentMessage $GetFulfilmentDeliveryDocumentResult = null;
    /**
     * Constructor method for GetFulfilmentDeliveryDocumentResponse
     * @uses CdiscountGetFulfilmentDeliveryDocumentResponse::setGetFulfilmentDeliveryDocumentResult()
     * @param \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountFulfilmentDeliveryDocumentMessage $getFulfilmentDeliveryDocumentResult
     */
    public function __construct(?\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountFulfilmentDeliveryDocumentMessage $getFulfilmentDeliveryDocumentResult = null)
    {
        $this
            ->setGetFulfilmentDeliveryDocumentResult($getFulfilmentDeliveryDocumentResult);
    }
    /**
     * Get GetFulfilmentDeliveryDocumentResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountFulfilmentDeliveryDocumentMessage|null
     */
    public function getGetFulfilmentDeliveryDocumentResult(): ?\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountFulfilmentDeliveryDocumentMessage
    {
        return isset($this->GetFulfilmentDeliveryDocumentResult) ? $this->GetFulfilmentDeliveryDocumentResult : null;
    }
    /**
     * Set GetFulfilmentDeliveryDocumentResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountFulfilmentDeliveryDocumentMessage $getFulfilmentDeliveryDocumentResult
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountGetFulfilmentDeliveryDocumentResponse
     */
    public function setGetFulfilmentDeliveryDocumentResult(?\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountFulfilmentDeliveryDocumentMessage $getFulfilmentDeliveryDocumentResult = null): self
    {
        if (is_null($getFulfilmentDeliveryDocumentResult) || (is_array($getFulfilmentDeliveryDocumentResult) && empty($getFulfilmentDeliveryDocumentResult))) {
            unset($this->GetFulfilmentDeliveryDocumentResult);
        } else {
            $this->GetFulfilmentDeliveryDocumentResult = $getFulfilmentDeliveryDocumentResult;
        }
        
        return $this;
    }
}
