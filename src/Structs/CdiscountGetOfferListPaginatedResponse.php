<?php

declare(strict_types=1);

namespace SengentoBV\CdiscountMarketplaceSdk\Structs;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetOfferListPaginatedResponse Structs
 * @package Cdiscount
 * @subpackage Structs
 */
class CdiscountGetOfferListPaginatedResponse extends AbstractStructBase
{
    /**
     * The GetOfferListPaginatedResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountOfferListPaginatedMessage|null
     */
    protected ?\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountOfferListPaginatedMessage $GetOfferListPaginatedResult = null;
    /**
     * Constructor method for GetOfferListPaginatedResponse
     * @uses CdiscountGetOfferListPaginatedResponse::setGetOfferListPaginatedResult()
     * @param \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountOfferListPaginatedMessage $getOfferListPaginatedResult
     */
    public function __construct(?\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountOfferListPaginatedMessage $getOfferListPaginatedResult = null)
    {
        $this
            ->setGetOfferListPaginatedResult($getOfferListPaginatedResult);
    }
    /**
     * Get GetOfferListPaginatedResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountOfferListPaginatedMessage|null
     */
    public function getGetOfferListPaginatedResult(): ?\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountOfferListPaginatedMessage
    {
        return isset($this->GetOfferListPaginatedResult) ? $this->GetOfferListPaginatedResult : null;
    }
    /**
     * Set GetOfferListPaginatedResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountOfferListPaginatedMessage $getOfferListPaginatedResult
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountGetOfferListPaginatedResponse
     */
    public function setGetOfferListPaginatedResult(?\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountOfferListPaginatedMessage $getOfferListPaginatedResult = null): self
    {
        if (is_null($getOfferListPaginatedResult) || (is_array($getOfferListPaginatedResult) && empty($getOfferListPaginatedResult))) {
            unset($this->GetOfferListPaginatedResult);
        } else {
            $this->GetOfferListPaginatedResult = $getOfferListPaginatedResult;
        }
        
        return $this;
    }
}
