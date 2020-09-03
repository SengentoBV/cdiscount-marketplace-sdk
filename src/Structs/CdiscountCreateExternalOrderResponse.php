<?php

namespace SengentoBV\CdiscountMarketplaceSdk\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CreateExternalOrderResponse Structs
 * @package Cdiscount
 * @subpackage Structs
 */
class CdiscountCreateExternalOrderResponse extends AbstractStructBase
{
    /**
     * The CreateExternalOrderResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountOrderIntegrationMessage
     */
    public $CreateExternalOrderResult;
    /**
     * Constructor method for CreateExternalOrderResponse
     * @uses CdiscountCreateExternalOrderResponse::setCreateExternalOrderResult()
     * @param \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountOrderIntegrationMessage $createExternalOrderResult
     */
    public function __construct(\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountOrderIntegrationMessage $createExternalOrderResult = null)
    {
        $this
            ->setCreateExternalOrderResult($createExternalOrderResult);
    }
    /**
     * Get CreateExternalOrderResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountOrderIntegrationMessage|null
     */
    public function getCreateExternalOrderResult()
    {
        return isset($this->CreateExternalOrderResult) ? $this->CreateExternalOrderResult : null;
    }
    /**
     * Set CreateExternalOrderResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountOrderIntegrationMessage $createExternalOrderResult
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountCreateExternalOrderResponse
     */
    public function setCreateExternalOrderResult(\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountOrderIntegrationMessage $createExternalOrderResult = null)
    {
        if (is_null($createExternalOrderResult) || (is_array($createExternalOrderResult) && empty($createExternalOrderResult))) {
            unset($this->CreateExternalOrderResult);
        } else {
            $this->CreateExternalOrderResult = $createExternalOrderResult;
        }
        return $this;
    }
}
