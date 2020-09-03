<?php

namespace SengentoBV\CdiscountMarketplaceSdk\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetCompetingOffersResponse Structs
 * @package Cdiscount
 * @subpackage Structs
 */
class CdiscountGetCompetingOffersResponse extends AbstractStructBase
{
    /**
     * The GetCompetingOffersResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountCompetingOfferMessage
     */
    public $GetCompetingOffersResult;
    /**
     * Constructor method for GetCompetingOffersResponse
     * @uses CdiscountGetCompetingOffersResponse::setGetCompetingOffersResult()
     * @param \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountCompetingOfferMessage $getCompetingOffersResult
     */
    public function __construct(\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountCompetingOfferMessage $getCompetingOffersResult = null)
    {
        $this
            ->setGetCompetingOffersResult($getCompetingOffersResult);
    }
    /**
     * Get GetCompetingOffersResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountCompetingOfferMessage|null
     */
    public function getGetCompetingOffersResult()
    {
        return isset($this->GetCompetingOffersResult) ? $this->GetCompetingOffersResult : null;
    }
    /**
     * Set GetCompetingOffersResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountCompetingOfferMessage $getCompetingOffersResult
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountGetCompetingOffersResponse
     */
    public function setGetCompetingOffersResult(\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountCompetingOfferMessage $getCompetingOffersResult = null)
    {
        if (is_null($getCompetingOffersResult) || (is_array($getCompetingOffersResult) && empty($getCompetingOffersResult))) {
            unset($this->GetCompetingOffersResult);
        } else {
            $this->GetCompetingOffersResult = $getCompetingOffersResult;
        }
        return $this;
    }
}
