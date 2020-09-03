<?php

namespace SengentoBV\CdiscountMarketplaceSdk\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetOfferQuestionListResponse Structs
 * @package Cdiscount
 * @subpackage Structs
 */
class CdiscountGetOfferQuestionListResponse extends AbstractStructBase
{
    /**
     * The GetOfferQuestionListResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountOfferQuestionListMessage
     */
    public $GetOfferQuestionListResult;
    /**
     * Constructor method for GetOfferQuestionListResponse
     * @uses CdiscountGetOfferQuestionListResponse::setGetOfferQuestionListResult()
     * @param \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountOfferQuestionListMessage $getOfferQuestionListResult
     */
    public function __construct(\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountOfferQuestionListMessage $getOfferQuestionListResult = null)
    {
        $this
            ->setGetOfferQuestionListResult($getOfferQuestionListResult);
    }
    /**
     * Get GetOfferQuestionListResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountOfferQuestionListMessage|null
     */
    public function getGetOfferQuestionListResult()
    {
        return isset($this->GetOfferQuestionListResult) ? $this->GetOfferQuestionListResult : null;
    }
    /**
     * Set GetOfferQuestionListResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountOfferQuestionListMessage $getOfferQuestionListResult
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountGetOfferQuestionListResponse
     */
    public function setGetOfferQuestionListResult(\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountOfferQuestionListMessage $getOfferQuestionListResult = null)
    {
        if (is_null($getOfferQuestionListResult) || (is_array($getOfferQuestionListResult) && empty($getOfferQuestionListResult))) {
            unset($this->GetOfferQuestionListResult);
        } else {
            $this->GetOfferQuestionListResult = $getOfferQuestionListResult;
        }
        return $this;
    }
}
