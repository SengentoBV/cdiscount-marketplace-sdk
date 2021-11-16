<?php

declare(strict_types=1);

namespace SengentoBV\CdiscountMarketplaceSdk\Structs;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetParcelShopListResponse Structs
 * @package Cdiscount
 * @subpackage Structs
 */
class CdiscountGetParcelShopListResponse extends AbstractStructBase
{
    /**
     * The GetParcelShopListResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountParcelShopListMessage|null
     */
    protected ?\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountParcelShopListMessage $GetParcelShopListResult = null;
    /**
     * Constructor method for GetParcelShopListResponse
     * @uses CdiscountGetParcelShopListResponse::setGetParcelShopListResult()
     * @param \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountParcelShopListMessage $getParcelShopListResult
     */
    public function __construct(?\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountParcelShopListMessage $getParcelShopListResult = null)
    {
        $this
            ->setGetParcelShopListResult($getParcelShopListResult);
    }
    /**
     * Get GetParcelShopListResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountParcelShopListMessage|null
     */
    public function getGetParcelShopListResult(): ?\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountParcelShopListMessage
    {
        return isset($this->GetParcelShopListResult) ? $this->GetParcelShopListResult : null;
    }
    /**
     * Set GetParcelShopListResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountParcelShopListMessage $getParcelShopListResult
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountGetParcelShopListResponse
     */
    public function setGetParcelShopListResult(?\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountParcelShopListMessage $getParcelShopListResult = null): self
    {
        if (is_null($getParcelShopListResult) || (is_array($getParcelShopListResult) && empty($getParcelShopListResult))) {
            unset($this->GetParcelShopListResult);
        } else {
            $this->GetParcelShopListResult = $getParcelShopListResult;
        }
        
        return $this;
    }
}
