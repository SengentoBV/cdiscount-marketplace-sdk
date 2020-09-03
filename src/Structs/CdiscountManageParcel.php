<?php

namespace SengentoBV\CdiscountMarketplaceSdk\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ManageParcel Structs
 * @package Cdiscount
 * @subpackage Structs
 */
class CdiscountManageParcel extends AbstractStructBase
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
     * The manageParcelRequest
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountManageParcelRequest
     */
    public $manageParcelRequest;
    /**
     * Constructor method for ManageParcel
     * @uses CdiscountManageParcel::setHeaderMessage()
     * @uses CdiscountManageParcel::setManageParcelRequest()
     * @param \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountHeaderMessage $headerMessage
     * @param \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountManageParcelRequest $manageParcelRequest
     */
    public function __construct(\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountHeaderMessage $headerMessage = null, \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountManageParcelRequest $manageParcelRequest = null)
    {
        $this
            ->setHeaderMessage($headerMessage)
            ->setManageParcelRequest($manageParcelRequest);
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
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountManageParcel
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
     * Get manageParcelRequest value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountManageParcelRequest|null
     */
    public function getManageParcelRequest()
    {
        return isset($this->manageParcelRequest) ? $this->manageParcelRequest : null;
    }
    /**
     * Set manageParcelRequest value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountManageParcelRequest $manageParcelRequest
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountManageParcel
     */
    public function setManageParcelRequest(\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountManageParcelRequest $manageParcelRequest = null)
    {
        if (is_null($manageParcelRequest) || (is_array($manageParcelRequest) && empty($manageParcelRequest))) {
            unset($this->manageParcelRequest);
        } else {
            $this->manageParcelRequest = $manageParcelRequest;
        }
        return $this;
    }
}
