<?php

declare(strict_types=1);

namespace SengentoBV\CdiscountMarketplaceSdk\Arrays;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfSupplyOrderReportLine Arrays
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfSupplyOrderReportLine
 * @package Cdiscount
 * @subpackage Arrays
 */
class CdiscountArrayOfSupplyOrderReportLine extends AbstractStructArrayBase
{
    /**
     * The SupplyOrderReportLine
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountSupplyOrderReportLine[]
     */
    protected ?array $SupplyOrderReportLine = null;
    /**
     * Constructor method for ArrayOfSupplyOrderReportLine
     * @uses CdiscountArrayOfSupplyOrderReportLine::setSupplyOrderReportLine()
     * @param \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountSupplyOrderReportLine[] $supplyOrderReportLine
     */
    public function __construct(?array $supplyOrderReportLine = null)
    {
        $this
            ->setSupplyOrderReportLine($supplyOrderReportLine);
    }
    /**
     * Get SupplyOrderReportLine value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountSupplyOrderReportLine[]
     */
    public function getSupplyOrderReportLine(): ?array
    {
        return isset($this->SupplyOrderReportLine) ? $this->SupplyOrderReportLine : null;
    }
    /**
     * This method is responsible for validating the values passed to the setSupplyOrderReportLine method
     * This method is willingly generated in order to preserve the one-line inline validation within the setSupplyOrderReportLine method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateSupplyOrderReportLineForArrayConstraintsFromSetSupplyOrderReportLine(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfSupplyOrderReportLineSupplyOrderReportLineItem) {
            // validation for constraint: itemType
            if (!$arrayOfSupplyOrderReportLineSupplyOrderReportLineItem instanceof \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountSupplyOrderReportLine) {
                $invalidValues[] = is_object($arrayOfSupplyOrderReportLineSupplyOrderReportLineItem) ? get_class($arrayOfSupplyOrderReportLineSupplyOrderReportLineItem) : sprintf('%s(%s)', gettype($arrayOfSupplyOrderReportLineSupplyOrderReportLineItem), var_export($arrayOfSupplyOrderReportLineSupplyOrderReportLineItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The SupplyOrderReportLine property can only contain items of type \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountSupplyOrderReportLine, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set SupplyOrderReportLine value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws InvalidArgumentException
     * @param \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountSupplyOrderReportLine[] $supplyOrderReportLine
     * @return \SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfSupplyOrderReportLine
     */
    public function setSupplyOrderReportLine(?array $supplyOrderReportLine = null): self
    {
        // validation for constraint: array
        if ('' !== ($supplyOrderReportLineArrayErrorMessage = self::validateSupplyOrderReportLineForArrayConstraintsFromSetSupplyOrderReportLine($supplyOrderReportLine))) {
            throw new InvalidArgumentException($supplyOrderReportLineArrayErrorMessage, __LINE__);
        }
        if (is_null($supplyOrderReportLine) || (is_array($supplyOrderReportLine) && empty($supplyOrderReportLine))) {
            unset($this->SupplyOrderReportLine);
        } else {
            $this->SupplyOrderReportLine = $supplyOrderReportLine;
        }
        
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountSupplyOrderReportLine|null
     */
    public function current(): ?\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountSupplyOrderReportLine
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountSupplyOrderReportLine|null
     */
    public function item($index): ?\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountSupplyOrderReportLine
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountSupplyOrderReportLine|null
     */
    public function first(): ?\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountSupplyOrderReportLine
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountSupplyOrderReportLine|null
     */
    public function last(): ?\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountSupplyOrderReportLine
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountSupplyOrderReportLine|null
     */
    public function offsetGet($offset): ?\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountSupplyOrderReportLine
    {
        return parent::offsetGet($offset);
    }
    /**
     * Add element to array
     * @see AbstractStructArrayBase::add()
     * @throws InvalidArgumentException
     * @param \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountSupplyOrderReportLine $item
     * @return \SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfSupplyOrderReportLine
     */
    public function add($item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountSupplyOrderReportLine) {
            throw new InvalidArgumentException(sprintf('The SupplyOrderReportLine property can only contain items of type \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountSupplyOrderReportLine, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        return parent::add($item);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string SupplyOrderReportLine
     */
    public function getAttributeName(): string
    {
        return 'SupplyOrderReportLine';
    }
}
