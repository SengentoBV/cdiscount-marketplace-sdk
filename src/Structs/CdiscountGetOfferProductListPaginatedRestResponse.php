<?php

namespace SengentoBV\CdiscountMarketplaceSdk\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetOfferProductListPaginatedRestResponse Structs
 * @package Cdiscount
 * @subpackage Structs
 */
class CdiscountGetOfferProductListPaginatedRestResponse extends AbstractStructBase
{
    /**
     * The GetOfferProductListPaginatedRestResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountOfferProductListPaginatedMessage
     */
    public $GetOfferProductListPaginatedRestResult;
    /**
     * Constructor method for GetOfferProductListPaginatedRestResponse
     * @uses CdiscountGetOfferProductListPaginatedRestResponse::setGetOfferProductListPaginatedRestResult()
     * @param \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountOfferProductListPaginatedMessage $getOfferProductListPaginatedRestResult
     */
    public function __construct(\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountOfferProductListPaginatedMessage $getOfferProductListPaginatedRestResult = null)
    {
        $this
            ->setGetOfferProductListPaginatedRestResult($getOfferProductListPaginatedRestResult);
    }
    /**
     * Get GetOfferProductListPaginatedRestResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountOfferProductListPaginatedMessage|null
     */
    public function getGetOfferProductListPaginatedRestResult()
    {
        return isset($this->GetOfferProductListPaginatedRestResult) ? $this->GetOfferProductListPaginatedRestResult : null;
    }
    /**
     * Set GetOfferProductListPaginatedRestResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountOfferProductListPaginatedMessage $getOfferProductListPaginatedRestResult
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountGetOfferProductListPaginatedRestResponse
     */
    public function setGetOfferProductListPaginatedRestResult(\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountOfferProductListPaginatedMessage $getOfferProductListPaginatedRestResult = null)
    {
        if (is_null($getOfferProductListPaginatedRestResult) || (is_array($getOfferProductListPaginatedRestResult) && empty($getOfferProductListPaginatedRestResult))) {
            unset($this->GetOfferProductListPaginatedRestResult);
        } else {
            $this->GetOfferProductListPaginatedRestResult = $getOfferProductListPaginatedRestResult;
        }
        return $this;
    }
}
