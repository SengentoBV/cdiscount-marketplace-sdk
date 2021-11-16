<?php

declare(strict_types=1);

namespace SengentoBV\CdiscountMarketplaceSdk\Structs;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SupplyOrderReport Structs
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:SupplyOrderReport
 * @package Cdiscount
 * @subpackage Structs
 */
class CdiscountSupplyOrderReport extends AbstractStructBase
{
    /**
     * The DepositId
     * @var int|null
     */
    protected ?int $DepositId = null;
    /**
     * The ReportLineList
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var \SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfSupplyOrderReportLine|null
     */
    protected ?\SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfSupplyOrderReportLine $ReportLineList = null;
    /**
     * Constructor method for SupplyOrderReport
     * @uses CdiscountSupplyOrderReport::setDepositId()
     * @uses CdiscountSupplyOrderReport::setReportLineList()
     * @param int $depositId
     * @param \SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfSupplyOrderReportLine $reportLineList
     */
    public function __construct(?int $depositId = null, ?\SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfSupplyOrderReportLine $reportLineList = null)
    {
        $this
            ->setDepositId($depositId)
            ->setReportLineList($reportLineList);
    }
    /**
     * Get DepositId value
     * @return int|null
     */
    public function getDepositId(): ?int
    {
        return $this->DepositId;
    }
    /**
     * Set DepositId value
     * @param int $depositId
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountSupplyOrderReport
     */
    public function setDepositId(?int $depositId = null): self
    {
        // validation for constraint: int
        if (!is_null($depositId) && !(is_int($depositId) || ctype_digit($depositId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($depositId, true), gettype($depositId)), __LINE__);
        }
        $this->DepositId = $depositId;
        
        return $this;
    }
    /**
     * Get ReportLineList value
     * @return \SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfSupplyOrderReportLine|null
     */
    public function getReportLineList(): ?\SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfSupplyOrderReportLine
    {
        return $this->ReportLineList;
    }
    /**
     * Set ReportLineList value
     * @param \SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfSupplyOrderReportLine $reportLineList
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountSupplyOrderReport
     */
    public function setReportLineList(?\SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfSupplyOrderReportLine $reportLineList = null): self
    {
        $this->ReportLineList = $reportLineList;
        
        return $this;
    }
}
