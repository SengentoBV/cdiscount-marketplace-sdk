<?php

declare(strict_types=1);

namespace SengentoBV\CdiscountMarketplaceSdk\Structs;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetSellerDealsResponse Structs
 * @package Cdiscount
 * @subpackage Structs
 */
class CdiscountGetSellerDealsResponse extends AbstractStructBase
{
    /**
     * The GetSellerDealsResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountSellerDealListMessage|null
     */
    protected ?\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountSellerDealListMessage $GetSellerDealsResult = null;
    /**
     * Constructor method for GetSellerDealsResponse
     * @uses CdiscountGetSellerDealsResponse::setGetSellerDealsResult()
     * @param \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountSellerDealListMessage $getSellerDealsResult
     */
    public function __construct(?\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountSellerDealListMessage $getSellerDealsResult = null)
    {
        $this
            ->setGetSellerDealsResult($getSellerDealsResult);
    }
    /**
     * Get GetSellerDealsResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountSellerDealListMessage|null
     */
    public function getGetSellerDealsResult(): ?\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountSellerDealListMessage
    {
        return isset($this->GetSellerDealsResult) ? $this->GetSellerDealsResult : null;
    }
    /**
     * Set GetSellerDealsResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountSellerDealListMessage $getSellerDealsResult
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountGetSellerDealsResponse
     */
    public function setGetSellerDealsResult(?\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountSellerDealListMessage $getSellerDealsResult = null): self
    {
        if (is_null($getSellerDealsResult) || (is_array($getSellerDealsResult) && empty($getSellerDealsResult))) {
            unset($this->GetSellerDealsResult);
        } else {
            $this->GetSellerDealsResult = $getSellerDealsResult;
        }
        
        return $this;
    }
}
