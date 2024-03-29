<?php

declare(strict_types=1);

namespace SengentoBV\CdiscountMarketplaceSdk\Structs;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SupplyOrderMessage Structs
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:SupplyOrderMessage
 * @package Cdiscount
 * @subpackage Structs
 */
class CdiscountSupplyOrderMessage extends CdiscountServiceBaseAPIMessage
{
    /**
     * The CurrentPageNumber
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $CurrentPageNumber = null;
    /**
     * The NumberOfPages
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $NumberOfPages = null;
    /**
     * The SupplyOrderLineList
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfSupplyOrderLine|null
     */
    protected ?\SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfSupplyOrderLine $SupplyOrderLineList = null;
    /**
     * Constructor method for SupplyOrderMessage
     * @uses CdiscountSupplyOrderMessage::setCurrentPageNumber()
     * @uses CdiscountSupplyOrderMessage::setNumberOfPages()
     * @uses CdiscountSupplyOrderMessage::setSupplyOrderLineList()
     * @param int $currentPageNumber
     * @param int $numberOfPages
     * @param \SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfSupplyOrderLine $supplyOrderLineList
     */
    public function __construct(?int $currentPageNumber = null, ?int $numberOfPages = null, ?\SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfSupplyOrderLine $supplyOrderLineList = null)
    {
        $this
            ->setCurrentPageNumber($currentPageNumber)
            ->setNumberOfPages($numberOfPages)
            ->setSupplyOrderLineList($supplyOrderLineList);
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
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountSupplyOrderMessage
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
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountSupplyOrderMessage
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
     * Get SupplyOrderLineList value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfSupplyOrderLine|null
     */
    public function getSupplyOrderLineList(): ?\SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfSupplyOrderLine
    {
        return isset($this->SupplyOrderLineList) ? $this->SupplyOrderLineList : null;
    }
    /**
     * Set SupplyOrderLineList value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfSupplyOrderLine $supplyOrderLineList
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountSupplyOrderMessage
     */
    public function setSupplyOrderLineList(?\SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfSupplyOrderLine $supplyOrderLineList = null): self
    {
        if (is_null($supplyOrderLineList) || (is_array($supplyOrderLineList) && empty($supplyOrderLineList))) {
            unset($this->SupplyOrderLineList);
        } else {
            $this->SupplyOrderLineList = $supplyOrderLineList;
        }
        
        return $this;
    }
}
