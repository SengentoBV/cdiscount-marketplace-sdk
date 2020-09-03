<?php

namespace SengentoBV\CdiscountMarketplaceSdk\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetGlobalConfigurationResponse Structs
 * @package Cdiscount
 * @subpackage Structs
 */
class CdiscountGetGlobalConfigurationResponse extends AbstractStructBase
{
    /**
     * The GetGlobalConfigurationResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountGlobalConfigurationMessage
     */
    public $GetGlobalConfigurationResult;
    /**
     * Constructor method for GetGlobalConfigurationResponse
     * @uses CdiscountGetGlobalConfigurationResponse::setGetGlobalConfigurationResult()
     * @param \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountGlobalConfigurationMessage $getGlobalConfigurationResult
     */
    public function __construct(\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountGlobalConfigurationMessage $getGlobalConfigurationResult = null)
    {
        $this
            ->setGetGlobalConfigurationResult($getGlobalConfigurationResult);
    }
    /**
     * Get GetGlobalConfigurationResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountGlobalConfigurationMessage|null
     */
    public function getGetGlobalConfigurationResult()
    {
        return isset($this->GetGlobalConfigurationResult) ? $this->GetGlobalConfigurationResult : null;
    }
    /**
     * Set GetGlobalConfigurationResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountGlobalConfigurationMessage $getGlobalConfigurationResult
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountGetGlobalConfigurationResponse
     */
    public function setGetGlobalConfigurationResult(\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountGlobalConfigurationMessage $getGlobalConfigurationResult = null)
    {
        if (is_null($getGlobalConfigurationResult) || (is_array($getGlobalConfigurationResult) && empty($getGlobalConfigurationResult))) {
            unset($this->GetGlobalConfigurationResult);
        } else {
            $this->GetGlobalConfigurationResult = $getGlobalConfigurationResult;
        }
        return $this;
    }
}
