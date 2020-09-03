<?php

namespace SengentoBV\CdiscountMarketplaceSdk\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetSellerIndicatorsResponse Structs
 * @package Cdiscount
 * @subpackage Structs
 */
class CdiscountGetSellerIndicatorsResponse extends AbstractStructBase
{
    /**
     * The GetSellerIndicatorsResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountSellerIndicatorsMessage
     */
    public $GetSellerIndicatorsResult;
    /**
     * Constructor method for GetSellerIndicatorsResponse
     * @uses CdiscountGetSellerIndicatorsResponse::setGetSellerIndicatorsResult()
     * @param \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountSellerIndicatorsMessage $getSellerIndicatorsResult
     */
    public function __construct(\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountSellerIndicatorsMessage $getSellerIndicatorsResult = null)
    {
        $this
            ->setGetSellerIndicatorsResult($getSellerIndicatorsResult);
    }
    /**
     * Get GetSellerIndicatorsResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountSellerIndicatorsMessage|null
     */
    public function getGetSellerIndicatorsResult()
    {
        return isset($this->GetSellerIndicatorsResult) ? $this->GetSellerIndicatorsResult : null;
    }
    /**
     * Set GetSellerIndicatorsResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountSellerIndicatorsMessage $getSellerIndicatorsResult
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountGetSellerIndicatorsResponse
     */
    public function setGetSellerIndicatorsResult(\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountSellerIndicatorsMessage $getSellerIndicatorsResult = null)
    {
        if (is_null($getSellerIndicatorsResult) || (is_array($getSellerIndicatorsResult) && empty($getSellerIndicatorsResult))) {
            unset($this->GetSellerIndicatorsResult);
        } else {
            $this->GetSellerIndicatorsResult = $getSellerIndicatorsResult;
        }
        return $this;
    }
}
