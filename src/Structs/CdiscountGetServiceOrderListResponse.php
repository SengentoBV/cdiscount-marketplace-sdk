<?php

declare(strict_types=1);

namespace SengentoBV\CdiscountMarketplaceSdk\Structs;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetServiceOrderListResponse Structs
 * @package Cdiscount
 * @subpackage Structs
 */
class CdiscountGetServiceOrderListResponse extends AbstractStructBase
{
    /**
     * The GetServiceOrderListResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountServiceOrderListMessage|null
     */
    protected ?\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountServiceOrderListMessage $GetServiceOrderListResult = null;
    /**
     * Constructor method for GetServiceOrderListResponse
     * @uses CdiscountGetServiceOrderListResponse::setGetServiceOrderListResult()
     * @param \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountServiceOrderListMessage $getServiceOrderListResult
     */
    public function __construct(?\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountServiceOrderListMessage $getServiceOrderListResult = null)
    {
        $this
            ->setGetServiceOrderListResult($getServiceOrderListResult);
    }
    /**
     * Get GetServiceOrderListResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountServiceOrderListMessage|null
     */
    public function getGetServiceOrderListResult(): ?\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountServiceOrderListMessage
    {
        return isset($this->GetServiceOrderListResult) ? $this->GetServiceOrderListResult : null;
    }
    /**
     * Set GetServiceOrderListResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountServiceOrderListMessage $getServiceOrderListResult
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountGetServiceOrderListResponse
     */
    public function setGetServiceOrderListResult(?\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountServiceOrderListMessage $getServiceOrderListResult = null): self
    {
        if (is_null($getServiceOrderListResult) || (is_array($getServiceOrderListResult) && empty($getServiceOrderListResult))) {
            unset($this->GetServiceOrderListResult);
        } else {
            $this->GetServiceOrderListResult = $getServiceOrderListResult;
        }
        
        return $this;
    }
}
