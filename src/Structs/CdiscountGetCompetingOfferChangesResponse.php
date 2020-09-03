<?php

namespace SengentoBV\CdiscountMarketplaceSdk\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetCompetingOfferChangesResponse Structs
 * @package Cdiscount
 * @subpackage Structs
 */
class CdiscountGetCompetingOfferChangesResponse extends AbstractStructBase
{
    /**
     * The GetCompetingOfferChangesResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountCompetingOfferMessage
     */
    public $GetCompetingOfferChangesResult;
    /**
     * Constructor method for GetCompetingOfferChangesResponse
     * @uses CdiscountGetCompetingOfferChangesResponse::setGetCompetingOfferChangesResult()
     * @param \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountCompetingOfferMessage $getCompetingOfferChangesResult
     */
    public function __construct(\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountCompetingOfferMessage $getCompetingOfferChangesResult = null)
    {
        $this
            ->setGetCompetingOfferChangesResult($getCompetingOfferChangesResult);
    }
    /**
     * Get GetCompetingOfferChangesResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountCompetingOfferMessage|null
     */
    public function getGetCompetingOfferChangesResult()
    {
        return isset($this->GetCompetingOfferChangesResult) ? $this->GetCompetingOfferChangesResult : null;
    }
    /**
     * Set GetCompetingOfferChangesResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountCompetingOfferMessage $getCompetingOfferChangesResult
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountGetCompetingOfferChangesResponse
     */
    public function setGetCompetingOfferChangesResult(\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountCompetingOfferMessage $getCompetingOfferChangesResult = null)
    {
        if (is_null($getCompetingOfferChangesResult) || (is_array($getCompetingOfferChangesResult) && empty($getCompetingOfferChangesResult))) {
            unset($this->GetCompetingOfferChangesResult);
        } else {
            $this->GetCompetingOfferChangesResult = $getCompetingOfferChangesResult;
        }
        return $this;
    }
}
