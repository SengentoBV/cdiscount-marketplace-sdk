<?php

declare(strict_types=1);

namespace SengentoBV\CdiscountMarketplaceSdk\Structs;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetFulfilmentOrderListToSupplyResponse Structs
 * @package Cdiscount
 * @subpackage Structs
 */
class CdiscountGetFulfilmentOrderListToSupplyResponse extends AbstractStructBase
{
    /**
     * The GetFulfilmentOrderListToSupplyResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountFulfilmentOrderLineListToSupplyMessage|null
     */
    protected ?\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountFulfilmentOrderLineListToSupplyMessage $GetFulfilmentOrderListToSupplyResult = null;
    /**
     * Constructor method for GetFulfilmentOrderListToSupplyResponse
     * @uses CdiscountGetFulfilmentOrderListToSupplyResponse::setGetFulfilmentOrderListToSupplyResult()
     * @param \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountFulfilmentOrderLineListToSupplyMessage $getFulfilmentOrderListToSupplyResult
     */
    public function __construct(?\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountFulfilmentOrderLineListToSupplyMessage $getFulfilmentOrderListToSupplyResult = null)
    {
        $this
            ->setGetFulfilmentOrderListToSupplyResult($getFulfilmentOrderListToSupplyResult);
    }
    /**
     * Get GetFulfilmentOrderListToSupplyResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountFulfilmentOrderLineListToSupplyMessage|null
     */
    public function getGetFulfilmentOrderListToSupplyResult(): ?\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountFulfilmentOrderLineListToSupplyMessage
    {
        return isset($this->GetFulfilmentOrderListToSupplyResult) ? $this->GetFulfilmentOrderListToSupplyResult : null;
    }
    /**
     * Set GetFulfilmentOrderListToSupplyResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountFulfilmentOrderLineListToSupplyMessage $getFulfilmentOrderListToSupplyResult
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountGetFulfilmentOrderListToSupplyResponse
     */
    public function setGetFulfilmentOrderListToSupplyResult(?\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountFulfilmentOrderLineListToSupplyMessage $getFulfilmentOrderListToSupplyResult = null): self
    {
        if (is_null($getFulfilmentOrderListToSupplyResult) || (is_array($getFulfilmentOrderListToSupplyResult) && empty($getFulfilmentOrderListToSupplyResult))) {
            unset($this->GetFulfilmentOrderListToSupplyResult);
        } else {
            $this->GetFulfilmentOrderListToSupplyResult = $getFulfilmentOrderListToSupplyResult;
        }
        
        return $this;
    }
}
