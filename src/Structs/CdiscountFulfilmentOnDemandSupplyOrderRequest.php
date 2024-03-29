<?php

declare(strict_types=1);

namespace SengentoBV\CdiscountMarketplaceSdk\Structs;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FulfilmentOnDemandSupplyOrderRequest Structs
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:FulfilmentOnDemandSupplyOrderRequest
 * @package Cdiscount
 * @subpackage Structs
 */
class CdiscountFulfilmentOnDemandSupplyOrderRequest extends AbstractStructBase
{
    /**
     * The OrderLineList
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var \SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfFulfilmentOrderLineRequest|null
     */
    protected ?\SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfFulfilmentOrderLineRequest $OrderLineList = null;
    /**
     * Constructor method for FulfilmentOnDemandSupplyOrderRequest
     * @uses CdiscountFulfilmentOnDemandSupplyOrderRequest::setOrderLineList()
     * @param \SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfFulfilmentOrderLineRequest $orderLineList
     */
    public function __construct(?\SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfFulfilmentOrderLineRequest $orderLineList = null)
    {
        $this
            ->setOrderLineList($orderLineList);
    }
    /**
     * Get OrderLineList value
     * @return \SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfFulfilmentOrderLineRequest|null
     */
    public function getOrderLineList(): ?\SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfFulfilmentOrderLineRequest
    {
        return $this->OrderLineList;
    }
    /**
     * Set OrderLineList value
     * @param \SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfFulfilmentOrderLineRequest $orderLineList
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountFulfilmentOnDemandSupplyOrderRequest
     */
    public function setOrderLineList(?\SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfFulfilmentOrderLineRequest $orderLineList = null): self
    {
        $this->OrderLineList = $orderLineList;
        
        return $this;
    }
}
