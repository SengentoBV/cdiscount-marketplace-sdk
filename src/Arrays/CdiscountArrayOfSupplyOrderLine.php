<?php

declare(strict_types=1);

namespace SengentoBV\CdiscountMarketplaceSdk\Arrays;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfSupplyOrderLine Arrays
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfSupplyOrderLine
 * @package Cdiscount
 * @subpackage Arrays
 */
class CdiscountArrayOfSupplyOrderLine extends AbstractStructArrayBase
{
    /**
     * The SupplyOrderLine
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountSupplyOrderLine[]
     */
    protected ?array $SupplyOrderLine = null;
    /**
     * Constructor method for ArrayOfSupplyOrderLine
     * @uses CdiscountArrayOfSupplyOrderLine::setSupplyOrderLine()
     * @param \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountSupplyOrderLine[] $supplyOrderLine
     */
    public function __construct(?array $supplyOrderLine = null)
    {
        $this
            ->setSupplyOrderLine($supplyOrderLine);
    }
    /**
     * Get SupplyOrderLine value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountSupplyOrderLine[]
     */
    public function getSupplyOrderLine(): ?array
    {
        return isset($this->SupplyOrderLine) ? $this->SupplyOrderLine : null;
    }
    /**
     * This method is responsible for validating the values passed to the setSupplyOrderLine method
     * This method is willingly generated in order to preserve the one-line inline validation within the setSupplyOrderLine method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateSupplyOrderLineForArrayConstraintsFromSetSupplyOrderLine(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfSupplyOrderLineSupplyOrderLineItem) {
            // validation for constraint: itemType
            if (!$arrayOfSupplyOrderLineSupplyOrderLineItem instanceof \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountSupplyOrderLine) {
                $invalidValues[] = is_object($arrayOfSupplyOrderLineSupplyOrderLineItem) ? get_class($arrayOfSupplyOrderLineSupplyOrderLineItem) : sprintf('%s(%s)', gettype($arrayOfSupplyOrderLineSupplyOrderLineItem), var_export($arrayOfSupplyOrderLineSupplyOrderLineItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The SupplyOrderLine property can only contain items of type \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountSupplyOrderLine, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set SupplyOrderLine value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws InvalidArgumentException
     * @param \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountSupplyOrderLine[] $supplyOrderLine
     * @return \SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfSupplyOrderLine
     */
    public function setSupplyOrderLine(?array $supplyOrderLine = null): self
    {
        // validation for constraint: array
        if ('' !== ($supplyOrderLineArrayErrorMessage = self::validateSupplyOrderLineForArrayConstraintsFromSetSupplyOrderLine($supplyOrderLine))) {
            throw new InvalidArgumentException($supplyOrderLineArrayErrorMessage, __LINE__);
        }
        if (is_null($supplyOrderLine) || (is_array($supplyOrderLine) && empty($supplyOrderLine))) {
            unset($this->SupplyOrderLine);
        } else {
            $this->SupplyOrderLine = $supplyOrderLine;
        }
        
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountSupplyOrderLine|null
     */
    public function current(): ?\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountSupplyOrderLine
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountSupplyOrderLine|null
     */
    public function item($index): ?\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountSupplyOrderLine
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountSupplyOrderLine|null
     */
    public function first(): ?\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountSupplyOrderLine
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountSupplyOrderLine|null
     */
    public function last(): ?\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountSupplyOrderLine
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountSupplyOrderLine|null
     */
    public function offsetGet($offset): ?\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountSupplyOrderLine
    {
        return parent::offsetGet($offset);
    }
    /**
     * Add element to array
     * @see AbstractStructArrayBase::add()
     * @throws InvalidArgumentException
     * @param \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountSupplyOrderLine $item
     * @return \SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfSupplyOrderLine
     */
    public function add($item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountSupplyOrderLine) {
            throw new InvalidArgumentException(sprintf('The SupplyOrderLine property can only contain items of type \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountSupplyOrderLine, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        return parent::add($item);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string SupplyOrderLine
     */
    public function getAttributeName(): string
    {
        return 'SupplyOrderLine';
    }
}
