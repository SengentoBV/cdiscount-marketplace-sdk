<?php

declare(strict_types=1);

namespace SengentoBV\CdiscountMarketplaceSdk\Structs;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetOfferListResponse Structs
 * @package Cdiscount
 * @subpackage Structs
 */
class CdiscountGetOfferListResponse extends AbstractStructBase
{
    /**
     * The GetOfferListResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountOfferListMessage|null
     */
    protected ?\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountOfferListMessage $GetOfferListResult = null;
    /**
     * Constructor method for GetOfferListResponse
     * @uses CdiscountGetOfferListResponse::setGetOfferListResult()
     * @param \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountOfferListMessage $getOfferListResult
     */
    public function __construct(?\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountOfferListMessage $getOfferListResult = null)
    {
        $this
            ->setGetOfferListResult($getOfferListResult);
    }
    /**
     * Get GetOfferListResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountOfferListMessage|null
     */
    public function getGetOfferListResult(): ?\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountOfferListMessage
    {
        return isset($this->GetOfferListResult) ? $this->GetOfferListResult : null;
    }
    /**
     * Set GetOfferListResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountOfferListMessage $getOfferListResult
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountGetOfferListResponse
     */
    public function setGetOfferListResult(?\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountOfferListMessage $getOfferListResult = null): self
    {
        if (is_null($getOfferListResult) || (is_array($getOfferListResult) && empty($getOfferListResult))) {
            unset($this->GetOfferListResult);
        } else {
            $this->GetOfferListResult = $getOfferListResult;
        }
        
        return $this;
    }
}
