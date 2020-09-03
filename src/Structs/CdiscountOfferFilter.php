<?php

namespace SengentoBV\CdiscountMarketplaceSdk\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for OfferFilter Structs
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:OfferFilter
 * @package Cdiscount
 * @subpackage Structs
 */
class CdiscountOfferFilter extends AbstractStructBase
{
    /**
     * The OfferPoolId
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var int
     */
    public $OfferPoolId;
    /**
     * The SellerProductIdList
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfstring
     */
    public $SellerProductIdList;
    /**
     * Constructor method for OfferFilter
     * @uses CdiscountOfferFilter::setOfferPoolId()
     * @uses CdiscountOfferFilter::setSellerProductIdList()
     * @param int $offerPoolId
     * @param \SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfstring $sellerProductIdList
     */
    public function __construct($offerPoolId = null, \SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfstring $sellerProductIdList = null)
    {
        $this
            ->setOfferPoolId($offerPoolId)
            ->setSellerProductIdList($sellerProductIdList);
    }
    /**
     * Get OfferPoolId value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return int|null
     */
    public function getOfferPoolId()
    {
        return isset($this->OfferPoolId) ? $this->OfferPoolId : null;
    }
    /**
     * Set OfferPoolId value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param int $offerPoolId
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountOfferFilter
     */
    public function setOfferPoolId($offerPoolId = null)
    {
        // validation for constraint: int
        if (!is_null($offerPoolId) && !(is_int($offerPoolId) || ctype_digit($offerPoolId))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($offerPoolId, true), gettype($offerPoolId)), __LINE__);
        }
        if (is_null($offerPoolId) || (is_array($offerPoolId) && empty($offerPoolId))) {
            unset($this->OfferPoolId);
        } else {
            $this->OfferPoolId = $offerPoolId;
        }
        return $this;
    }
    /**
     * Get SellerProductIdList value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfstring|null
     */
    public function getSellerProductIdList()
    {
        return isset($this->SellerProductIdList) ? $this->SellerProductIdList : null;
    }
    /**
     * Set SellerProductIdList value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfstring $sellerProductIdList
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountOfferFilter
     */
    public function setSellerProductIdList(\SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfstring $sellerProductIdList = null)
    {
        if (is_null($sellerProductIdList) || (is_array($sellerProductIdList) && empty($sellerProductIdList))) {
            unset($this->SellerProductIdList);
        } else {
            $this->SellerProductIdList = $sellerProductIdList;
        }
        return $this;
    }
}
