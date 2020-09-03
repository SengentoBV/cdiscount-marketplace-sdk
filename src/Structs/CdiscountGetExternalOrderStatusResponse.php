<?php

namespace SengentoBV\CdiscountMarketplaceSdk\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetExternalOrderStatusResponse Structs
 * @package Cdiscount
 * @subpackage Structs
 */
class CdiscountGetExternalOrderStatusResponse extends AbstractStructBase
{
    /**
     * The GetExternalOrderStatusResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountOrderStatusMessage
     */
    public $GetExternalOrderStatusResult;
    /**
     * Constructor method for GetExternalOrderStatusResponse
     * @uses CdiscountGetExternalOrderStatusResponse::setGetExternalOrderStatusResult()
     * @param \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountOrderStatusMessage $getExternalOrderStatusResult
     */
    public function __construct(\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountOrderStatusMessage $getExternalOrderStatusResult = null)
    {
        $this
            ->setGetExternalOrderStatusResult($getExternalOrderStatusResult);
    }
    /**
     * Get GetExternalOrderStatusResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountOrderStatusMessage|null
     */
    public function getGetExternalOrderStatusResult()
    {
        return isset($this->GetExternalOrderStatusResult) ? $this->GetExternalOrderStatusResult : null;
    }
    /**
     * Set GetExternalOrderStatusResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountOrderStatusMessage $getExternalOrderStatusResult
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountGetExternalOrderStatusResponse
     */
    public function setGetExternalOrderStatusResult(\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountOrderStatusMessage $getExternalOrderStatusResult = null)
    {
        if (is_null($getExternalOrderStatusResult) || (is_array($getExternalOrderStatusResult) && empty($getExternalOrderStatusResult))) {
            unset($this->GetExternalOrderStatusResult);
        } else {
            $this->GetExternalOrderStatusResult = $getExternalOrderStatusResult;
        }
        return $this;
    }
}
