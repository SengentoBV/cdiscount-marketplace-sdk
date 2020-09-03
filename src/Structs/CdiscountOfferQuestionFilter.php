<?php

namespace SengentoBV\CdiscountMarketplaceSdk\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for OfferQuestionFilter Structs
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:OfferQuestionFilter
 * @package Cdiscount
 * @subpackage Structs
 */
class CdiscountOfferQuestionFilter extends CdiscountDiscussionFilterBase
{
    /**
     * The ProductEANList
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfstring
     */
    public $ProductEANList;
    /**
     * The ProductSellerReferenceList
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfstring
     */
    public $ProductSellerReferenceList;
    /**
     * Constructor method for OfferQuestionFilter
     * @uses CdiscountOfferQuestionFilter::setProductEANList()
     * @uses CdiscountOfferQuestionFilter::setProductSellerReferenceList()
     * @param \SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfstring $productEANList
     * @param \SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfstring $productSellerReferenceList
     */
    public function __construct(\SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfstring $productEANList = null, \SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfstring $productSellerReferenceList = null)
    {
        $this
            ->setProductEANList($productEANList)
            ->setProductSellerReferenceList($productSellerReferenceList);
    }
    /**
     * Get ProductEANList value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfstring|null
     */
    public function getProductEANList()
    {
        return isset($this->ProductEANList) ? $this->ProductEANList : null;
    }
    /**
     * Set ProductEANList value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfstring $productEANList
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountOfferQuestionFilter
     */
    public function setProductEANList(\SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfstring $productEANList = null)
    {
        if (is_null($productEANList) || (is_array($productEANList) && empty($productEANList))) {
            unset($this->ProductEANList);
        } else {
            $this->ProductEANList = $productEANList;
        }
        return $this;
    }
    /**
     * Get ProductSellerReferenceList value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfstring|null
     */
    public function getProductSellerReferenceList()
    {
        return isset($this->ProductSellerReferenceList) ? $this->ProductSellerReferenceList : null;
    }
    /**
     * Set ProductSellerReferenceList value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfstring $productSellerReferenceList
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountOfferQuestionFilter
     */
    public function setProductSellerReferenceList(\SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfstring $productSellerReferenceList = null)
    {
        if (is_null($productSellerReferenceList) || (is_array($productSellerReferenceList) && empty($productSellerReferenceList))) {
            unset($this->ProductSellerReferenceList);
        } else {
            $this->ProductSellerReferenceList = $productSellerReferenceList;
        }
        return $this;
    }
}
