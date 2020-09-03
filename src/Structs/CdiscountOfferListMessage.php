<?php

namespace SengentoBV\CdiscountMarketplaceSdk\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for OfferListMessage Structs
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:OfferListMessage
 * @package Cdiscount
 * @subpackage Structs
 */
class CdiscountOfferListMessage extends CdiscountServiceBaseAPIMessage
{
    /**
     * The OfferList
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfOffer
     */
    public $OfferList;
    /**
     * Constructor method for OfferListMessage
     * @uses CdiscountOfferListMessage::setOfferList()
     * @param \SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfOffer $offerList
     */
    public function __construct(\SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfOffer $offerList = null)
    {
        $this
            ->setOfferList($offerList);
    }
    /**
     * Get OfferList value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfOffer|null
     */
    public function getOfferList()
    {
        return isset($this->OfferList) ? $this->OfferList : null;
    }
    /**
     * Set OfferList value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfOffer $offerList
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountOfferListMessage
     */
    public function setOfferList(\SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfOffer $offerList = null)
    {
        if (is_null($offerList) || (is_array($offerList) && empty($offerList))) {
            unset($this->OfferList);
        } else {
            $this->OfferList = $offerList;
        }
        return $this;
    }
}
