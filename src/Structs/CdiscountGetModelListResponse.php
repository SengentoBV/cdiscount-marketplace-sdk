<?php

namespace SengentoBV\CdiscountMarketplaceSdk\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetModelListResponse Structs
 * @package Cdiscount
 * @subpackage Structs
 */
class CdiscountGetModelListResponse extends AbstractStructBase
{
    /**
     * The GetModelListResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountProductModelListMessage
     */
    public $GetModelListResult;
    /**
     * Constructor method for GetModelListResponse
     * @uses CdiscountGetModelListResponse::setGetModelListResult()
     * @param \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountProductModelListMessage $getModelListResult
     */
    public function __construct(\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountProductModelListMessage $getModelListResult = null)
    {
        $this
            ->setGetModelListResult($getModelListResult);
    }
    /**
     * Get GetModelListResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountProductModelListMessage|null
     */
    public function getGetModelListResult()
    {
        return isset($this->GetModelListResult) ? $this->GetModelListResult : null;
    }
    /**
     * Set GetModelListResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountProductModelListMessage $getModelListResult
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountGetModelListResponse
     */
    public function setGetModelListResult(\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountProductModelListMessage $getModelListResult = null)
    {
        if (is_null($getModelListResult) || (is_array($getModelListResult) && empty($getModelListResult))) {
            unset($this->GetModelListResult);
        } else {
            $this->GetModelListResult = $getModelListResult;
        }
        return $this;
    }
}
