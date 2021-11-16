<?php

declare(strict_types=1);

namespace SengentoBV\CdiscountMarketplaceSdk\Structs;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FulfilmentActivationReportRequest Structs
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:FulfilmentActivationReportRequest
 * @package Cdiscount
 * @subpackage Structs
 */
class CdiscountFulfilmentActivationReportRequest extends AbstractStructBase
{
    /**
     * The BeginDate
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $BeginDate = null;
    /**
     * The DepositIdList
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfint|null
     */
    protected ?\SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfint $DepositIdList = null;
    /**
     * The EndDate
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $EndDate = null;
    /**
     * Constructor method for FulfilmentActivationReportRequest
     * @uses CdiscountFulfilmentActivationReportRequest::setBeginDate()
     * @uses CdiscountFulfilmentActivationReportRequest::setDepositIdList()
     * @uses CdiscountFulfilmentActivationReportRequest::setEndDate()
     * @param string $beginDate
     * @param \SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfint $depositIdList
     * @param string $endDate
     */
    public function __construct(?string $beginDate = null, ?\SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfint $depositIdList = null, ?string $endDate = null)
    {
        $this
            ->setBeginDate($beginDate)
            ->setDepositIdList($depositIdList)
            ->setEndDate($endDate);
    }
    /**
     * Get BeginDate value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getBeginDate(): ?string
    {
        return isset($this->BeginDate) ? $this->BeginDate : null;
    }
    /**
     * Set BeginDate value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $beginDate
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountFulfilmentActivationReportRequest
     */
    public function setBeginDate(?string $beginDate = null): self
    {
        // validation for constraint: string
        if (!is_null($beginDate) && !is_string($beginDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($beginDate, true), gettype($beginDate)), __LINE__);
        }
        if (is_null($beginDate) || (is_array($beginDate) && empty($beginDate))) {
            unset($this->BeginDate);
        } else {
            $this->BeginDate = $beginDate;
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
    public function getDepositIdList(): ?\SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfint
    {
        return isset($this->DepositIdList) ? $this->DepositIdList : null;
    }
    /**
     * Set DepositIdList value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfint $depositIdList
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountFulfilmentActivationReportRequest
     */
    public function setDepositIdList(?\SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfint $depositIdList = null): self
    {
        if (is_null($depositIdList) || (is_array($depositIdList) && empty($depositIdList))) {
            unset($this->DepositIdList);
        } else {
            $this->DepositIdList = $depositIdList;
        }
        
        return $this;
    }
    /**
     * Get EndDate value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getEndDate(): ?string
    {
        return isset($this->EndDate) ? $this->EndDate : null;
    }
    /**
     * Set EndDate value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $endDate
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountFulfilmentActivationReportRequest
     */
    public function setEndDate(?string $endDate = null): self
    {
        // validation for constraint: string
        if (!is_null($endDate) && !is_string($endDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($endDate, true), gettype($endDate)), __LINE__);
        }
        if (is_null($endDate) || (is_array($endDate) && empty($endDate))) {
            unset($this->EndDate);
        } else {
            $this->EndDate = $endDate;
        }
        
        return $this;
    }
}
