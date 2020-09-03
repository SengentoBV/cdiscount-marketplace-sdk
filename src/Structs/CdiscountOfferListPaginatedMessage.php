<?php

namespace SengentoBV\CdiscountMarketplaceSdk\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for OfferListPaginatedMessage Structs
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:OfferListPaginatedMessage
 * @package Cdiscount
 * @subpackage Structs
 */
class CdiscountOfferListPaginatedMessage extends CdiscountOfferListMessage
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
     * Constructor method for OfferListPaginatedMessage
     * @uses CdiscountOfferListPaginatedMessage::setCurrentPageNumber()
     * @uses CdiscountOfferListPaginatedMessage::setNumberOfPages()
     * @param int $currentPageNumber
     * @param int $numberOfPages
     */
    public function __construct($currentPageNumber = null, $numberOfPages = null)
    {
        $this
            ->setCurrentPageNumber($currentPageNumber)
            ->setNumberOfPages($numberOfPages);
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
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountOfferListPaginatedMessage
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
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountOfferListPaginatedMessage
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
}
