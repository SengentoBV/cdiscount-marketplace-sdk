<?php

declare(strict_types=1);

namespace SengentoBV\CdiscountMarketplaceSdk\Structs;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

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
     * @var int|null
     */
    protected ?int $CurrentPageNumber = null;
    /**
     * The NumberOfPages
     * @var int|null
     */
    protected ?int $NumberOfPages = null;
    /**
     * The ReportList
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var \SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfSupplyOrderReport|null
     */
    protected ?\SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfSupplyOrderReport $ReportList = null;
    /**
     * Constructor method for SupplyOrderReportListMessage
     * @uses CdiscountSupplyOrderReportListMessage::setCurrentPageNumber()
     * @uses CdiscountSupplyOrderReportListMessage::setNumberOfPages()
     * @uses CdiscountSupplyOrderReportListMessage::setReportList()
     * @param int $currentPageNumber
     * @param int $numberOfPages
     * @param \SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfSupplyOrderReport $reportList
     */
    public function __construct(?int $currentPageNumber = null, ?int $numberOfPages = null, ?\SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfSupplyOrderReport $reportList = null)
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
    public function getCurrentPageNumber(): ?int
    {
        return $this->CurrentPageNumber;
    }
    /**
     * Set CurrentPageNumber value
     * @param int $currentPageNumber
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountSupplyOrderReportListMessage
     */
    public function setCurrentPageNumber(?int $currentPageNumber = null): self
    {
        // validation for constraint: int
        if (!is_null($currentPageNumber) && !(is_int($currentPageNumber) || ctype_digit($currentPageNumber))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($currentPageNumber, true), gettype($currentPageNumber)), __LINE__);
        }
        $this->CurrentPageNumber = $currentPageNumber;
        
        return $this;
    }
    /**
     * Get NumberOfPages value
     * @return int|null
     */
    public function getNumberOfPages(): ?int
    {
        return $this->NumberOfPages;
    }
    /**
     * Set NumberOfPages value
     * @param int $numberOfPages
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountSupplyOrderReportListMessage
     */
    public function setNumberOfPages(?int $numberOfPages = null): self
    {
        // validation for constraint: int
        if (!is_null($numberOfPages) && !(is_int($numberOfPages) || ctype_digit($numberOfPages))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($numberOfPages, true), gettype($numberOfPages)), __LINE__);
        }
        $this->NumberOfPages = $numberOfPages;
        
        return $this;
    }
    /**
     * Get ReportList value
     * @return \SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfSupplyOrderReport|null
     */
    public function getReportList(): ?\SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfSupplyOrderReport
    {
        return $this->ReportList;
    }
    /**
     * Set ReportList value
     * @param \SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfSupplyOrderReport $reportList
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountSupplyOrderReportListMessage
     */
    public function setReportList(?\SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfSupplyOrderReport $reportList = null): self
    {
        $this->ReportList = $reportList;
        
        return $this;
    }
}
