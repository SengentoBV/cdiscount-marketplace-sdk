<?php

namespace SengentoBV\CdiscountMarketplaceSdk\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for OfferFilterPaginated Structs
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:OfferFilterPaginated
 * @package Cdiscount
 * @subpackage Structs
 */
class CdiscountOfferFilterPaginated extends AbstractStructBase
{
    /**
     * The OfferFilterCriterion
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $OfferFilterCriterion;
    /**
     * The OfferPoolId
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var int
     */
    public $OfferPoolId;
    /**
     * The OfferSortOrder
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $OfferSortOrder;
    /**
     * The OfferStateFilter
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $OfferStateFilter;
    /**
     * The PageNumber
     * @var int
     */
    public $PageNumber;
    /**
     * The SellerProductIdList
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfstring
     */
    public $SellerProductIdList;
    /**
     * Constructor method for OfferFilterPaginated
     * @uses CdiscountOfferFilterPaginated::setOfferFilterCriterion()
     * @uses CdiscountOfferFilterPaginated::setOfferPoolId()
     * @uses CdiscountOfferFilterPaginated::setOfferSortOrder()
     * @uses CdiscountOfferFilterPaginated::setOfferStateFilter()
     * @uses CdiscountOfferFilterPaginated::setPageNumber()
     * @uses CdiscountOfferFilterPaginated::setSellerProductIdList()
     * @param string $offerFilterCriterion
     * @param int $offerPoolId
     * @param string $offerSortOrder
     * @param string $offerStateFilter
     * @param int $pageNumber
     * @param \SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfstring $sellerProductIdList
     */
    public function __construct($offerFilterCriterion = null, $offerPoolId = null, $offerSortOrder = null, $offerStateFilter = null, $pageNumber = null, \SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfstring $sellerProductIdList = null)
    {
        $this
            ->setOfferFilterCriterion($offerFilterCriterion)
            ->setOfferPoolId($offerPoolId)
            ->setOfferSortOrder($offerSortOrder)
            ->setOfferStateFilter($offerStateFilter)
            ->setPageNumber($pageNumber)
            ->setSellerProductIdList($sellerProductIdList);
    }
    /**
     * Get OfferFilterCriterion value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getOfferFilterCriterion()
    {
        return isset($this->OfferFilterCriterion) ? $this->OfferFilterCriterion : null;
    }
    /**
     * Set OfferFilterCriterion value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @uses \SengentoBV\CdiscountMarketplaceSdk\Enums\CdiscountOfferFilterCriterion::valueIsValid()
     * @uses \SengentoBV\CdiscountMarketplaceSdk\Enums\CdiscountOfferFilterCriterion::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $offerFilterCriterion
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountOfferFilterPaginated
     */
    public function setOfferFilterCriterion($offerFilterCriterion = null)
    {
        // validation for constraint: enumeration
        if (!\SengentoBV\CdiscountMarketplaceSdk\Enums\CdiscountOfferFilterCriterion::valueIsValid($offerFilterCriterion)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \SengentoBV\CdiscountMarketplaceSdk\Enums\CdiscountOfferFilterCriterion', is_array($offerFilterCriterion) ? implode(', ', $offerFilterCriterion) : var_export($offerFilterCriterion, true), implode(', ', \SengentoBV\CdiscountMarketplaceSdk\Enums\CdiscountOfferFilterCriterion::getValidValues())), __LINE__);
        }
        if (is_null($offerFilterCriterion) || (is_array($offerFilterCriterion) && empty($offerFilterCriterion))) {
            unset($this->OfferFilterCriterion);
        } else {
            $this->OfferFilterCriterion = $offerFilterCriterion;
        }
        return $this;
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
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountOfferFilterPaginated
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
     * Get OfferSortOrder value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getOfferSortOrder()
    {
        return isset($this->OfferSortOrder) ? $this->OfferSortOrder : null;
    }
    /**
     * Set OfferSortOrder value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @uses \SengentoBV\CdiscountMarketplaceSdk\Enums\CdiscountOfferSortOrder::valueIsValid()
     * @uses \SengentoBV\CdiscountMarketplaceSdk\Enums\CdiscountOfferSortOrder::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $offerSortOrder
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountOfferFilterPaginated
     */
    public function setOfferSortOrder($offerSortOrder = null)
    {
        // validation for constraint: enumeration
        if (!\SengentoBV\CdiscountMarketplaceSdk\Enums\CdiscountOfferSortOrder::valueIsValid($offerSortOrder)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \SengentoBV\CdiscountMarketplaceSdk\Enums\CdiscountOfferSortOrder', is_array($offerSortOrder) ? implode(', ', $offerSortOrder) : var_export($offerSortOrder, true), implode(', ', \SengentoBV\CdiscountMarketplaceSdk\Enums\CdiscountOfferSortOrder::getValidValues())), __LINE__);
        }
        if (is_null($offerSortOrder) || (is_array($offerSortOrder) && empty($offerSortOrder))) {
            unset($this->OfferSortOrder);
        } else {
            $this->OfferSortOrder = $offerSortOrder;
        }
        return $this;
    }
    /**
     * Get OfferStateFilter value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getOfferStateFilter()
    {
        return isset($this->OfferStateFilter) ? $this->OfferStateFilter : null;
    }
    /**
     * Set OfferStateFilter value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @uses \SengentoBV\CdiscountMarketplaceSdk\Enums\CdiscountOfferStateFilter::valueIsValid()
     * @uses \SengentoBV\CdiscountMarketplaceSdk\Enums\CdiscountOfferStateFilter::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $offerStateFilter
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountOfferFilterPaginated
     */
    public function setOfferStateFilter($offerStateFilter = null)
    {
        // validation for constraint: enumeration
        if (!\SengentoBV\CdiscountMarketplaceSdk\Enums\CdiscountOfferStateFilter::valueIsValid($offerStateFilter)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \SengentoBV\CdiscountMarketplaceSdk\Enums\CdiscountOfferStateFilter', is_array($offerStateFilter) ? implode(', ', $offerStateFilter) : var_export($offerStateFilter, true), implode(', ', \SengentoBV\CdiscountMarketplaceSdk\Enums\CdiscountOfferStateFilter::getValidValues())), __LINE__);
        }
        if (is_null($offerStateFilter) || (is_array($offerStateFilter) && empty($offerStateFilter))) {
            unset($this->OfferStateFilter);
        } else {
            $this->OfferStateFilter = $offerStateFilter;
        }
        return $this;
    }
    /**
     * Get PageNumber value
     * @return int|null
     */
    public function getPageNumber()
    {
        return $this->PageNumber;
    }
    /**
     * Set PageNumber value
     * @param int $pageNumber
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountOfferFilterPaginated
     */
    public function setPageNumber($pageNumber = null)
    {
        // validation for constraint: int
        if (!is_null($pageNumber) && !(is_int($pageNumber) || ctype_digit($pageNumber))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($pageNumber, true), gettype($pageNumber)), __LINE__);
        }
        $this->PageNumber = $pageNumber;
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
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountOfferFilterPaginated
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
