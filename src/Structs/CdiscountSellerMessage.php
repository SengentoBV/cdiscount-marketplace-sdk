<?php

namespace SengentoBV\CdiscountMarketplaceSdk\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SellerMessage Structs
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:SellerMessage
 * @package Cdiscount
 * @subpackage Structs
 */
class CdiscountSellerMessage extends CdiscountServiceBaseAPIMessage
{
    /**
     * The DeliveryModes
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfDeliveryModeInformation
     */
    public $DeliveryModes;
    /**
     * The OfferPoolList
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfOfferPool
     */
    public $OfferPoolList;
    /**
     * The Seller
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountSeller
     */
    public $Seller;
    /**
     * Constructor method for SellerMessage
     * @uses CdiscountSellerMessage::setDeliveryModes()
     * @uses CdiscountSellerMessage::setOfferPoolList()
     * @uses CdiscountSellerMessage::setSeller()
     * @param \SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfDeliveryModeInformation $deliveryModes
     * @param \SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfOfferPool $offerPoolList
     * @param \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountSeller $seller
     */
    public function __construct(\SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfDeliveryModeInformation $deliveryModes = null, \SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfOfferPool $offerPoolList = null, \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountSeller $seller = null)
    {
        $this
            ->setDeliveryModes($deliveryModes)
            ->setOfferPoolList($offerPoolList)
            ->setSeller($seller);
    }
    /**
     * Get DeliveryModes value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfDeliveryModeInformation|null
     */
    public function getDeliveryModes()
    {
        return isset($this->DeliveryModes) ? $this->DeliveryModes : null;
    }
    /**
     * Set DeliveryModes value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfDeliveryModeInformation $deliveryModes
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountSellerMessage
     */
    public function setDeliveryModes(\SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfDeliveryModeInformation $deliveryModes = null)
    {
        if (is_null($deliveryModes) || (is_array($deliveryModes) && empty($deliveryModes))) {
            unset($this->DeliveryModes);
        } else {
            $this->DeliveryModes = $deliveryModes;
        }
        return $this;
    }
    /**
     * Get OfferPoolList value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfOfferPool|null
     */
    public function getOfferPoolList()
    {
        return isset($this->OfferPoolList) ? $this->OfferPoolList : null;
    }
    /**
     * Set OfferPoolList value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfOfferPool $offerPoolList
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountSellerMessage
     */
    public function setOfferPoolList(\SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfOfferPool $offerPoolList = null)
    {
        if (is_null($offerPoolList) || (is_array($offerPoolList) && empty($offerPoolList))) {
            unset($this->OfferPoolList);
        } else {
            $this->OfferPoolList = $offerPoolList;
        }
        return $this;
    }
    /**
     * Get Seller value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountSeller|null
     */
    public function getSeller()
    {
        return isset($this->Seller) ? $this->Seller : null;
    }
    /**
     * Set Seller value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountSeller $seller
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountSellerMessage
     */
    public function setSeller(\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountSeller $seller = null)
    {
        if (is_null($seller) || (is_array($seller) && empty($seller))) {
            unset($this->Seller);
        } else {
            $this->Seller = $seller;
        }
        return $this;
    }
}
