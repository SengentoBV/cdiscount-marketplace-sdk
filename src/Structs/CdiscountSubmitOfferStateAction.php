<?php

namespace SengentoBV\CdiscountMarketplaceSdk\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SubmitOfferStateAction Structs
 * @package Cdiscount
 * @subpackage Structs
 */
class CdiscountSubmitOfferStateAction extends AbstractStructBase
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
     * The offerStateRequest
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountOfferStateActionRequest
     */
    public $offerStateRequest;
    /**
     * Constructor method for SubmitOfferStateAction
     * @uses CdiscountSubmitOfferStateAction::setHeaderMessage()
     * @uses CdiscountSubmitOfferStateAction::setOfferStateRequest()
     * @param \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountHeaderMessage $headerMessage
     * @param \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountOfferStateActionRequest $offerStateRequest
     */
    public function __construct(\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountHeaderMessage $headerMessage = null, \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountOfferStateActionRequest $offerStateRequest = null)
    {
        $this
            ->setHeaderMessage($headerMessage)
            ->setOfferStateRequest($offerStateRequest);
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
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountSubmitOfferStateAction
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
     * Get offerStateRequest value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountOfferStateActionRequest|null
     */
    public function getOfferStateRequest()
    {
        return isset($this->offerStateRequest) ? $this->offerStateRequest : null;
    }
    /**
     * Set offerStateRequest value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountOfferStateActionRequest $offerStateRequest
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountSubmitOfferStateAction
     */
    public function setOfferStateRequest(\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountOfferStateActionRequest $offerStateRequest = null)
    {
        if (is_null($offerStateRequest) || (is_array($offerStateRequest) && empty($offerStateRequest))) {
            unset($this->offerStateRequest);
        } else {
            $this->offerStateRequest = $offerStateRequest;
        }
        return $this;
    }
}
