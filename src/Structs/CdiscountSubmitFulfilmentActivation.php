<?php

namespace SengentoBV\CdiscountMarketplaceSdk\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SubmitFulfilmentActivation Structs
 * @package Cdiscount
 * @subpackage Structs
 */
class CdiscountSubmitFulfilmentActivation extends AbstractStructBase
{
    /**
     * The headerMessage
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountHeaderMessage
     */
    public $headerMessage;
    /**
     * The request
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountFulfilmentActivationRequest
     */
    public $request;
    /**
     * Constructor method for SubmitFulfilmentActivation
     * @uses CdiscountSubmitFulfilmentActivation::setHeaderMessage()
     * @uses CdiscountSubmitFulfilmentActivation::setRequest()
     * @param \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountHeaderMessage $headerMessage
     * @param \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountFulfilmentActivationRequest $request
     */
    public function __construct(\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountHeaderMessage $headerMessage = null, \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountFulfilmentActivationRequest $request = null)
    {
        $this
            ->setHeaderMessage($headerMessage)
            ->setRequest($request);
    }
    /**
     * Get headerMessage value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountHeaderMessage|null
     */
    public function getHeaderMessage()
    {
        return isset($this->headerMessage) ? $this->headerMessage : null;
    }
    /**
     * Set headerMessage value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountHeaderMessage $headerMessage
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountSubmitFulfilmentActivation
     */
    public function setHeaderMessage(\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountHeaderMessage $headerMessage = null)
    {
        if (is_null($headerMessage) || (is_array($headerMessage) && empty($headerMessage))) {
            unset($this->headerMessage);
        } else {
            $this->headerMessage = $headerMessage;
        }
        return $this;
    }
    /**
     * Get request value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountFulfilmentActivationRequest|null
     */
    public function getRequest()
    {
        return isset($this->request) ? $this->request : null;
    }
    /**
     * Set request value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountFulfilmentActivationRequest $request
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountSubmitFulfilmentActivation
     */
    public function setRequest(\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountFulfilmentActivationRequest $request = null)
    {
        if (is_null($request) || (is_array($request) && empty($request))) {
            unset($this->request);
        } else {
            $this->request = $request;
        }
        return $this;
    }
}
