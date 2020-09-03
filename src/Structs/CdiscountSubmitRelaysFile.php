<?php

namespace SengentoBV\CdiscountMarketplaceSdk\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SubmitRelaysFile Structs
 * @package Cdiscount
 * @subpackage Structs
 */
class CdiscountSubmitRelaysFile extends AbstractStructBase
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
     * The relaysFileRequest
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountRelaysFileIntegrationRequest
     */
    public $relaysFileRequest;
    /**
     * Constructor method for SubmitRelaysFile
     * @uses CdiscountSubmitRelaysFile::setHeaderMessage()
     * @uses CdiscountSubmitRelaysFile::setRelaysFileRequest()
     * @param \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountHeaderMessage $headerMessage
     * @param \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountRelaysFileIntegrationRequest $relaysFileRequest
     */
    public function __construct(\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountHeaderMessage $headerMessage = null, \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountRelaysFileIntegrationRequest $relaysFileRequest = null)
    {
        $this
            ->setHeaderMessage($headerMessage)
            ->setRelaysFileRequest($relaysFileRequest);
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
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountSubmitRelaysFile
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
     * Get relaysFileRequest value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountRelaysFileIntegrationRequest|null
     */
    public function getRelaysFileRequest()
    {
        return isset($this->relaysFileRequest) ? $this->relaysFileRequest : null;
    }
    /**
     * Set relaysFileRequest value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountRelaysFileIntegrationRequest $relaysFileRequest
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountSubmitRelaysFile
     */
    public function setRelaysFileRequest(\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountRelaysFileIntegrationRequest $relaysFileRequest = null)
    {
        if (is_null($relaysFileRequest) || (is_array($relaysFileRequest) && empty($relaysFileRequest))) {
            unset($this->relaysFileRequest);
        } else {
            $this->relaysFileRequest = $relaysFileRequest;
        }
        return $this;
    }
}
