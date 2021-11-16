<?php

declare(strict_types=1);

namespace SengentoBV\CdiscountMarketplaceSdk\Structs;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SupplyOrderRequest Structs
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:SupplyOrderRequest
 * @package Cdiscount
 * @subpackage Structs
 */
class CdiscountSupplyOrderRequest extends AbstractStructBase
{
    /**
     * The BeginModificationDate
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $BeginModificationDate = null;
    /**
     * The EndModificationDate
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $EndModificationDate = null;
    /**
     * The PageNumber
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var int|null
     */
    protected ?int $PageNumber = null;
    /**
     * The PageSize
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var int|null
     */
    protected ?int $PageSize = null;
    /**
     * The SupplyOrderNumberList
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfstring|null
     */
    protected ?\SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfstring $SupplyOrderNumberList = null;
    /**
     * Constructor method for SupplyOrderRequest
     * @uses CdiscountSupplyOrderRequest::setBeginModificationDate()
     * @uses CdiscountSupplyOrderRequest::setEndModificationDate()
     * @uses CdiscountSupplyOrderRequest::setPageNumber()
     * @uses CdiscountSupplyOrderRequest::setPageSize()
     * @uses CdiscountSupplyOrderRequest::setSupplyOrderNumberList()
     * @param string $beginModificationDate
     * @param string $endModificationDate
     * @param int $pageNumber
     * @param int $pageSize
     * @param \SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfstring $supplyOrderNumberList
     */
    public function __construct(?string $beginModificationDate = null, ?string $endModificationDate = null, ?int $pageNumber = null, ?int $pageSize = null, ?\SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfstring $supplyOrderNumberList = null)
    {
        $this
            ->setBeginModificationDate($beginModificationDate)
            ->setEndModificationDate($endModificationDate)
            ->setPageNumber($pageNumber)
            ->setPageSize($pageSize)
            ->setSupplyOrderNumberList($supplyOrderNumberList);
    }
    /**
     * Get BeginModificationDate value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getBeginModificationDate(): ?string
    {
        return isset($this->BeginModificationDate) ? $this->BeginModificationDate : null;
    }
    /**
     * Set BeginModificationDate value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $beginModificationDate
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountSupplyOrderRequest
     */
    public function setBeginModificationDate(?string $beginModificationDate = null): self
    {
        // validation for constraint: string
        if (!is_null($beginModificationDate) && !is_string($beginModificationDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($beginModificationDate, true), gettype($beginModificationDate)), __LINE__);
        }
        if (is_null($beginModificationDate) || (is_array($beginModificationDate) && empty($beginModificationDate))) {
            unset($this->BeginModificationDate);
        } else {
            $this->BeginModificationDate = $beginModificationDate;
        }
        
        return $this;
    }
    /**
     * Get EndModificationDate value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getEndModificationDate(): ?string
    {
        return isset($this->EndModificationDate) ? $this->EndModificationDate : null;
    }
    /**
     * Set EndModificationDate value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $endModificationDate
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountSupplyOrderRequest
     */
    public function setEndModificationDate(?string $endModificationDate = null): self
    {
        // validation for constraint: string
        if (!is_null($endModificationDate) && !is_string($endModificationDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($endModificationDate, true), gettype($endModificationDate)), __LINE__);
        }
        if (is_null($endModificationDate) || (is_array($endModificationDate) && empty($endModificationDate))) {
            unset($this->EndModificationDate);
        } else {
            $this->EndModificationDate = $endModificationDate;
        }
        
        return $this;
    }
    /**
     * Get PageNumber value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return int|null
     */
    public function getPageNumber(): ?int
    {
        return isset($this->PageNumber) ? $this->PageNumber : null;
    }
    /**
     * Set PageNumber value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param int $pageNumber
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountSupplyOrderRequest
     */
    public function setPageNumber(?int $pageNumber = null): self
    {
        // validation for constraint: int
        if (!is_null($pageNumber) && !(is_int($pageNumber) || ctype_digit($pageNumber))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($pageNumber, true), gettype($pageNumber)), __LINE__);
        }
        if (is_null($pageNumber) || (is_array($pageNumber) && empty($pageNumber))) {
            unset($this->PageNumber);
        } else {
            $this->PageNumber = $pageNumber;
        }
        
        return $this;
    }
    /**
     * Get PageSize value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return int|null
     */
    public function getPageSize(): ?int
    {
        return isset($this->PageSize) ? $this->PageSize : null;
    }
    /**
     * Set PageSize value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param int $pageSize
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountSupplyOrderRequest
     */
    public function setPageSize(?int $pageSize = null): self
    {
        // validation for constraint: int
        if (!is_null($pageSize) && !(is_int($pageSize) || ctype_digit($pageSize))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($pageSize, true), gettype($pageSize)), __LINE__);
        }
        if (is_null($pageSize) || (is_array($pageSize) && empty($pageSize))) {
            unset($this->PageSize);
        } else {
            $this->PageSize = $pageSize;
        }
        
        return $this;
    }
    /**
     * Get SupplyOrderNumberList value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfstring|null
     */
    public function getSupplyOrderNumberList(): ?\SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfstring
    {
        return isset($this->SupplyOrderNumberList) ? $this->SupplyOrderNumberList : null;
    }
    /**
     * Set SupplyOrderNumberList value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfstring $supplyOrderNumberList
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountSupplyOrderRequest
     */
    public function setSupplyOrderNumberList(?\SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfstring $supplyOrderNumberList = null): self
    {
        if (is_null($supplyOrderNumberList) || (is_array($supplyOrderNumberList) && empty($supplyOrderNumberList))) {
            unset($this->SupplyOrderNumberList);
        } else {
            $this->SupplyOrderNumberList = $supplyOrderNumberList;
        }
        
        return $this;
    }
}
