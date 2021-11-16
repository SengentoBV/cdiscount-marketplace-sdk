<?php

declare(strict_types=1);

namespace SengentoBV\CdiscountMarketplaceSdk\Structs;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetFulfilmentSupplyOrderResponse Structs
 * @package Cdiscount
 * @subpackage Structs
 */
class CdiscountGetFulfilmentSupplyOrderResponse extends AbstractStructBase
{
    /**
     * The GetFulfilmentSupplyOrderResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountSupplyOrderMessage|null
     */
    protected ?\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountSupplyOrderMessage $GetFulfilmentSupplyOrderResult = null;
    /**
     * Constructor method for GetFulfilmentSupplyOrderResponse
     * @uses CdiscountGetFulfilmentSupplyOrderResponse::setGetFulfilmentSupplyOrderResult()
     * @param \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountSupplyOrderMessage $getFulfilmentSupplyOrderResult
     */
    public function __construct(?\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountSupplyOrderMessage $getFulfilmentSupplyOrderResult = null)
    {
        $this
            ->setGetFulfilmentSupplyOrderResult($getFulfilmentSupplyOrderResult);
    }
    /**
     * Get GetFulfilmentSupplyOrderResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountSupplyOrderMessage|null
     */
    public function getGetFulfilmentSupplyOrderResult(): ?\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountSupplyOrderMessage
    {
        return isset($this->GetFulfilmentSupplyOrderResult) ? $this->GetFulfilmentSupplyOrderResult : null;
    }
    /**
     * Set GetFulfilmentSupplyOrderResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountSupplyOrderMessage $getFulfilmentSupplyOrderResult
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountGetFulfilmentSupplyOrderResponse
     */
    public function setGetFulfilmentSupplyOrderResult(?\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountSupplyOrderMessage $getFulfilmentSupplyOrderResult = null): self
    {
        if (is_null($getFulfilmentSupplyOrderResult) || (is_array($getFulfilmentSupplyOrderResult) && empty($getFulfilmentSupplyOrderResult))) {
            unset($this->GetFulfilmentSupplyOrderResult);
        } else {
            $this->GetFulfilmentSupplyOrderResult = $getFulfilmentSupplyOrderResult;
        }
        
        return $this;
    }
}
