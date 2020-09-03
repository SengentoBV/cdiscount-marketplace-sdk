<?php

namespace SengentoBV\CdiscountMarketplaceSdk\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SupplyOrderReportRequest Structs
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:SupplyOrderReportRequest
 * @package Cdiscount
 * @subpackage Structs
 */
class CdiscountSupplyOrderReportRequest extends AbstractStructBase
{
    /**
     * The BeginCreationDate
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $BeginCreationDate;
    /**
     * The DepositIdList
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfint
     */
    public $DepositIdList;
    /**
     * The EndCreationDate
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $EndCreationDate;
    /**
     * The PageNumber
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $PageNumber;
    /**
     * The PageSize
     * @var int
     */
    public $PageSize;
    /**
     * Constructor method for SupplyOrderReportRequest
     * @uses CdiscountSupplyOrderReportRequest::setBeginCreationDate()
     * @uses CdiscountSupplyOrderReportRequest::setDepositIdList()
     * @uses CdiscountSupplyOrderReportRequest::setEndCreationDate()
     * @uses CdiscountSupplyOrderReportRequest::setPageNumber()
     * @uses CdiscountSupplyOrderReportRequest::setPageSize()
     * @param string $beginCreationDate
     * @param \SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfint $depositIdList
     * @param string $endCreationDate
     * @param int $pageNumber
     * @param int $pageSize
     */
    public function __construct($beginCreationDate = null, \SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfint $depositIdList = null, $endCreationDate = null, $pageNumber = null, $pageSize = null)
    {
        $this
            ->setBeginCreationDate($beginCreationDate)
            ->setDepositIdList($depositIdList)
            ->setEndCreationDate($endCreationDate)
            ->setPageNumber($pageNumber)
            ->setPageSize($pageSize);
    }
    /**
     * Get BeginCreationDate value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getBeginCreationDate()
    {
        return isset($this->BeginCreationDate) ? $this->BeginCreationDate : null;
    }
    /**
     * Set BeginCreationDate value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $beginCreationDate
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountSupplyOrderReportRequest
     */
    public function setBeginCreationDate($beginCreationDate = null)
    {
        // validation for constraint: string
        if (!is_null($beginCreationDate) && !is_string($beginCreationDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($beginCreationDate, true), gettype($beginCreationDate)), __LINE__);
        }
        if (is_null($beginCreationDate) || (is_array($beginCreationDate) && empty($beginCreationDate))) {
            unset($this->BeginCreationDate);
        } else {
            $this->BeginCreationDate = $beginCreationDate;
        }
        return $this;
    }
    /**
     * Get DepositIdList value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfint|null
     */
    public function getDepositIdList()
    {
        return isset($this->DepositIdList) ? $this->DepositIdList : null;
    }
    /**
     * Set DepositIdList value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfint $depositIdList
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountSupplyOrderReportRequest
     */
    public function setDepositIdList(\SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfint $depositIdList = null)
    {
        if (is_null($depositIdList) || (is_array($depositIdList) && empty($depositIdList))) {
            unset($this->DepositIdList);
        } else {
            $this->DepositIdList = $depositIdList;
        }
        return $this;
    }
    /**
     * Get EndCreationDate value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getEndCreationDate()
    {
        return isset($this->EndCreationDate) ? $this->EndCreationDate : null;
    }
    /**
     * Set EndCreationDate value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $endCreationDate
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountSupplyOrderReportRequest
     */
    public function setEndCreationDate($endCreationDate = null)
    {
        // validation for constraint: string
        if (!is_null($endCreationDate) && !is_string($endCreationDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($endCreationDate, true), gettype($endCreationDate)), __LINE__);
        }
        if (is_null($endCreationDate) || (is_array($endCreationDate) && empty($endCreationDate))) {
            unset($this->EndCreationDate);
        } else {
            $this->EndCreationDate = $endCreationDate;
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
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountSupplyOrderReportRequest
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
     * Get PageSize value
     * @return int|null
     */
    public function getPageSize()
    {
        return $this->PageSize;
    }
    /**
     * Set PageSize value
     * @param int $pageSize
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountSupplyOrderReportRequest
     */
    public function setPageSize($pageSize = null)
    {
        // validation for constraint: int
        if (!is_null($pageSize) && !(is_int($pageSize) || ctype_digit($pageSize))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($pageSize, true), gettype($pageSize)), __LINE__);
        }
        $this->PageSize = $pageSize;
        return $this;
    }
}
