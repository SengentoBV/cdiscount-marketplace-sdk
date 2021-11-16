<?php

declare(strict_types=1);

namespace SengentoBV\CdiscountMarketplaceSdk\Structs;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetProductListResponse Structs
 * @package Cdiscount
 * @subpackage Structs
 */
class CdiscountGetProductListResponse extends AbstractStructBase
{
    /**
     * The GetProductListResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountProductListMessage|null
     */
    protected ?\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountProductListMessage $GetProductListResult = null;
    /**
     * Constructor method for GetProductListResponse
     * @uses CdiscountGetProductListResponse::setGetProductListResult()
     * @param \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountProductListMessage $getProductListResult
     */
    public function __construct(?\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountProductListMessage $getProductListResult = null)
    {
        $this
            ->setGetProductListResult($getProductListResult);
    }
    /**
     * Get GetProductListResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountProductListMessage|null
     */
    public function getGetProductListResult(): ?\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountProductListMessage
    {
        return isset($this->GetProductListResult) ? $this->GetProductListResult : null;
    }
    /**
     * Set GetProductListResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountProductListMessage $getProductListResult
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountGetProductListResponse
     */
    public function setGetProductListResult(?\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountProductListMessage $getProductListResult = null): self
    {
        if (is_null($getProductListResult) || (is_array($getProductListResult) && empty($getProductListResult))) {
            unset($this->GetProductListResult);
        } else {
            $this->GetProductListResult = $getProductListResult;
        }
        
        return $this;
    }
}
