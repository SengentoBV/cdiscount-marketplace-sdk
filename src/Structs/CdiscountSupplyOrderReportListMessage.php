<?php

namespace SengentoBV\CdiscountMarketplaceSdk\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SupplyOrderReportListMessage Structs
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:SupplyOrderReportListMessage
 * @package Cdiscount
 * @subpackage Structs
 */
class CdiscountSupplyOrderReportListMessage extends CdiscountServiceBaseAPIMessage
{
    /**
     * The CurrentPageNumber
     * @var int
     */
    public $CurrentPageNumber;
    /**
     * The NumberOfPages
     * @var int
     */
    public $NumberOfPages;
    /**
     * The ReportList
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var \SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfSupplyOrderReport
     */
    public $ReportList;
    /**
     * Constructor method for SupplyOrderReportListMessage
     * @uses CdiscountSupplyOrderReportListMessage::setCurrentPageNumber()
     * @uses CdiscountSupplyOrderReportListMessage::setNumberOfPages()
     * @uses CdiscountSupplyOrderReportListMessage::setReportList()
     * @param int $currentPageNumber
     * @param int $numberOfPages
     * @param \SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfSupplyOrderReport $reportList
     */
    public function __construct($currentPageNumber = null, $numberOfPages = null, \SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfSupplyOrderReport $reportList = null)
    {
        $this
            ->setCurrentPageNumber($currentPageNumber)
            ->setNumberOfPages($numberOfPages)
            ->setReportList($reportList);
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
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountSupplyOrderReportListMessage
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
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountSupplyOrderReportListMessage
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
     * Get ReportList value
     * @return \SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfSupplyOrderReport|null
     */
    public function getReportList()
    {
        return $this->ReportList;
    }
    /**
     * Set ReportList value
     * @param \SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfSupplyOrderReport $reportList
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountSupplyOrderReportListMessage
     */
    public function setReportList(\SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfSupplyOrderReport $reportList = null)
    {
        $this->ReportList = $reportList;
        return $this;
    }
}
