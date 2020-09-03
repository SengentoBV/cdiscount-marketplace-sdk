<?php

namespace SengentoBV\CdiscountMarketplaceSdk\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ParcelShopListMessage Structs
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ParcelShopListMessage
 * @package Cdiscount
 * @subpackage Structs
 */
class CdiscountParcelShopListMessage extends CdiscountServiceBaseAPIMessage
{
    /**
     * The ParcelShopList
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfParcelShop
     */
    public $ParcelShopList;
    /**
     * Constructor method for ParcelShopListMessage
     * @uses CdiscountParcelShopListMessage::setParcelShopList()
     * @param \SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfParcelShop $parcelShopList
     */
    public function __construct(\SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfParcelShop $parcelShopList = null)
    {
        $this
            ->setParcelShopList($parcelShopList);
    }
    /**
     * Get ParcelShopList value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfParcelShop|null
     */
    public function getParcelShopList()
    {
        return isset($this->ParcelShopList) ? $this->ParcelShopList : null;
    }
    /**
     * Set ParcelShopList value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfParcelShop $parcelShopList
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountParcelShopListMessage
     */
    public function setParcelShopList(\SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfParcelShop $parcelShopList = null)
    {
        if (is_null($parcelShopList) || (is_array($parcelShopList) && empty($parcelShopList))) {
            unset($this->ParcelShopList);
        } else {
            $this->ParcelShopList = $parcelShopList;
        }
        return $this;
    }
}
