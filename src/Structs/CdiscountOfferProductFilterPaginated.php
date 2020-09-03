<?php

namespace SengentoBV\CdiscountMarketplaceSdk\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for OfferProductFilterPaginated Structs
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:OfferProductFilterPaginated
 * @package Cdiscount
 * @subpackage Structs
 */
class CdiscountOfferProductFilterPaginated extends AbstractStructBase
{
    /**
     * The OfferPerPage
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var int
     */
    public $OfferPerPage;
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
     * The OfferSupplyModeFilter
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $OfferSupplyModeFilter;
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
     * The TotalItems
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $TotalItems;
    /**
     * Constructor method for OfferProductFilterPaginated
     * @uses CdiscountOfferProductFilterPaginated::setOfferPerPage()
     * @uses CdiscountOfferProductFilterPaginated::setOfferPoolId()
     * @uses CdiscountOfferProductFilterPaginated::setOfferSortOrder()
     * @uses CdiscountOfferProductFilterPaginated::setOfferStateFilter()
     * @uses CdiscountOfferProductFilterPaginated::setOfferSupplyModeFilter()
     * @uses CdiscountOfferProductFilterPaginated::setPageNumber()
     * @uses CdiscountOfferProductFilterPaginated::setSellerProductIdList()
     * @uses CdiscountOfferProductFilterPaginated::setTotalItems()
     * @param int $offerPerPage
     * @param int $offerPoolId
     * @param string $offerSortOrder
     * @param string $offerStateFilter
     * @param string $offerSupplyModeFilter
     * @param int $pageNumber
     * @param \SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfstring $sellerProductIdList
     * @param int $totalItems
     */
    public function __construct($offerPerPage = null, $offerPoolId = null, $offerSortOrder = null, $offerStateFilter = null, $offerSupplyModeFilter = null, $pageNumber = null, \SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfstring $sellerProductIdList = null, $totalItems = null)
    {
        $this
            ->setOfferPerPage($offerPerPage)
            ->setOfferPoolId($offerPoolId)
            ->setOfferSortOrder($offerSortOrder)
            ->setOfferStateFilter($offerStateFilter)
            ->setOfferSupplyModeFilter($offerSupplyModeFilter)
            ->setPageNumber($pageNumber)
            ->setSellerProductIdList($sellerProductIdList)
            ->setTotalItems($totalItems);
    }
    /**
     * Get OfferPerPage value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return int|null
     */
    public function getOfferPerPage()
    {
        return isset($this->OfferPerPage) ? $this->OfferPerPage : null;
    }
    /**
     * Set OfferPerPage value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param int $offerPerPage
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountOfferProductFilterPaginated
     */
    public function setOfferPerPage($offerPerPage = null)
    {
        // validation for constraint: int
        if (!is_null($offerPerPage) && !(is_int($offerPerPage) || ctype_digit($offerPerPage))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($offerPerPage, true), gettype($offerPerPage)), __LINE__);
        }
        if (is_null($offerPerPage) || (is_array($offerPerPage) && empty($offerPerPage))) {
            unset($this->OfferPerPage);
        } else {
            $this->OfferPerPage = $offerPerPage;
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
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountOfferProductFilterPaginated
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
     * @uses \SengentoBV\CdiscountMarketplaceSdk\Enums\CdiscountOfferAdvancedSortOrder::valueIsValid()
     * @uses \SengentoBV\CdiscountMarketplaceSdk\Enums\CdiscountOfferAdvancedSortOrder::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $offerSortOrder
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountOfferProductFilterPaginated
     */
    public function setOfferSortOrder($offerSortOrder = null)
    {
        // validation for constraint: enumeration
        if (!\SengentoBV\CdiscountMarketplaceSdk\Enums\CdiscountOfferAdvancedSortOrder::valueIsValid($offerSortOrder)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \SengentoBV\CdiscountMarketplaceSdk\Enums\CdiscountOfferAdvancedSortOrder', is_array($offerSortOrder) ? implode(', ', $offerSortOrder) : var_export($offerSortOrder, true), implode(', ', \SengentoBV\CdiscountMarketplaceSdk\Enums\CdiscountOfferAdvancedSortOrder::getValidValues())), __LINE__);
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
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountOfferProductFilterPaginated
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
     * Get OfferSupplyModeFilter value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getOfferSupplyModeFilter()
    {
        return isset($this->OfferSupplyModeFilter) ? $this->OfferSupplyModeFilter : null;
    }
    /**
     * Set OfferSupplyModeFilter value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @uses \SengentoBV\CdiscountMarketplaceSdk\Enums\CdiscountOfferSupplyModeFilter::valueIsValid()
     * @uses \SengentoBV\CdiscountMarketplaceSdk\Enums\CdiscountOfferSupplyModeFilter::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $offerSupplyModeFilter
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountOfferProductFilterPaginated
     */
    public function setOfferSupplyModeFilter($offerSupplyModeFilter = null)
    {
        // validation for constraint: enumeration
        if (!\SengentoBV\CdiscountMarketplaceSdk\Enums\CdiscountOfferSupplyModeFilter::valueIsValid($offerSupplyModeFilter)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \SengentoBV\CdiscountMarketplaceSdk\Enums\CdiscountOfferSupplyModeFilter', is_array($offerSupplyModeFilter) ? implode(', ', $offerSupplyModeFilter) : var_export($offerSupplyModeFilter, true), implode(', ', \SengentoBV\CdiscountMarketplaceSdk\Enums\CdiscountOfferSupplyModeFilter::getValidValues())), __LINE__);
        }
        if (is_null($offerSupplyModeFilter) || (is_array($offerSupplyModeFilter) && empty($offerSupplyModeFilter))) {
            unset($this->OfferSupplyModeFilter);
        } else {
            $this->OfferSupplyModeFilter = $offerSupplyModeFilter;
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
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountOfferProductFilterPaginated
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
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountOfferProductFilterPaginated
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
    /**
     * Get TotalItems value
     * @return int|null
     */
    public function getTotalItems()
    {
        return $this->TotalItems;
    }
    /**
     * Set TotalItems value
     * @param int $totalItems
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountOfferProductFilterPaginated
     */
    public function setTotalItems($totalItems = null)
    {
        // validation for constraint: int
        if (!is_null($totalItems) && !(is_int($totalItems) || ctype_digit($totalItems))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($totalItems, true), gettype($totalItems)), __LINE__);
        }
        $this->TotalItems = $totalItems;
        return $this;
    }
}
