<?php

namespace SengentoBV\CdiscountMarketplaceSdk\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for OfferProductListPaginatedMessage Structs
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:OfferProductListPaginatedMessage
 * @package Cdiscount
 * @subpackage Structs
 */
class CdiscountOfferProductListPaginatedMessage extends CdiscountServiceBaseAPIMessage
{
    /**
     * The CurrentPageNumber
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $CurrentPageNumber;
    /**
     * The NumberOfPages
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $NumberOfPages;
    /**
     * The OfferProductList
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfOfferProduct
     */
    public $OfferProductList;
    /**
     * The OfferTotalCount
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $OfferTotalCount;
    /**
     * Constructor method for OfferProductListPaginatedMessage
     * @uses CdiscountOfferProductListPaginatedMessage::setCurrentPageNumber()
     * @uses CdiscountOfferProductListPaginatedMessage::setNumberOfPages()
     * @uses CdiscountOfferProductListPaginatedMessage::setOfferProductList()
     * @uses CdiscountOfferProductListPaginatedMessage::setOfferTotalCount()
     * @param int $currentPageNumber
     * @param int $numberOfPages
     * @param \SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfOfferProduct $offerProductList
     * @param int $offerTotalCount
     */
    public function __construct($currentPageNumber = null, $numberOfPages = null, \SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfOfferProduct $offerProductList = null, $offerTotalCount = null)
    {
        $this
            ->setCurrentPageNumber($currentPageNumber)
            ->setNumberOfPages($numberOfPages)
            ->setOfferProductList($offerProductList)
            ->setOfferTotalCount($offerTotalCount);
    }
    /**
     * Get CurrentPageNumber value
     * @return int|null
     */
    public function getCurrentPageNumber()
    {
        return $this->CurrentPageNumber;
    }
    /**
     * Set CurrentPageNumber value
     * @param int $currentPageNumber
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountOfferProductListPaginatedMessage
     */
    public function setCurrentPageNumber($currentPageNumber = null)
    {
        // validation for constraint: int
        if (!is_null($currentPageNumber) && !(is_int($currentPageNumber) || ctype_digit($currentPageNumber))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($currentPageNumber, true), gettype($currentPageNumber)), __LINE__);
        }
        $this->CurrentPageNumber = $currentPageNumber;
        return $this;
    }
    /**
     * Get NumberOfPages value
     * @return int|null
     */
    public function getNumberOfPages()
    {
        return $this->NumberOfPages;
    }
    /**
     * Set NumberOfPages value
     * @param int $numberOfPages
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountOfferProductListPaginatedMessage
     */
    public function setNumberOfPages($numberOfPages = null)
    {
        // validation for constraint: int
        if (!is_null($numberOfPages) && !(is_int($numberOfPages) || ctype_digit($numberOfPages))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($numberOfPages, true), gettype($numberOfPages)), __LINE__);
        }
        $this->NumberOfPages = $numberOfPages;
        return $this;
    }
    /**
     * Get OfferProductList value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfOfferProduct|null
     */
    public function getOfferProductList()
    {
        return isset($this->OfferProductList) ? $this->OfferProductList : null;
    }
    /**
     * Set OfferProductList value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfOfferProduct $offerProductList
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountOfferProductListPaginatedMessage
     */
    public function setOfferProductList(\SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfOfferProduct $offerProductList = null)
    {
        if (is_null($offerProductList) || (is_array($offerProductList) && empty($offerProductList))) {
            unset($this->OfferProductList);
        } else {
            $this->OfferProductList = $offerProductList;
        }
        return $this;
    }
    /**
     * Get OfferTotalCount value
     * @return int|null
     */
    public function getOfferTotalCount()
    {
        return $this->OfferTotalCount;
    }
    /**
     * Set OfferTotalCount value
     * @param int $offerTotalCount
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountOfferProductListPaginatedMessage
     */
    public function setOfferTotalCount($offerTotalCount = null)
    {
        // validation for constraint: int
        if (!is_null($offerTotalCount) && !(is_int($offerTotalCount) || ctype_digit($offerTotalCount))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($offerTotalCount, true), gettype($offerTotalCount)), __LINE__);
        }
        $this->OfferTotalCount = $offerTotalCount;
        return $this;
    }
}
