<?php

declare(strict_types=1);

namespace SengentoBV\CdiscountMarketplaceSdk\Arrays;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfOrderLine Arrays
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfOrderLine
 * @package Cdiscount
 * @subpackage Arrays
 */
class CdiscountArrayOfOrderLine extends AbstractStructArrayBase
{
    /**
     * The OrderLine
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountOrderLine[]
     */
    protected ?array $OrderLine = null;
    /**
     * Constructor method for ArrayOfOrderLine
     * @uses CdiscountArrayOfOrderLine::setOrderLine()
     * @param \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountOrderLine[] $orderLine
     */
    public function __construct(?array $orderLine = null)
    {
        $this
            ->setOrderLine($orderLine);
    }
    /**
     * Get OrderLine value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountOrderLine[]
     */
    public function getOrderLine(): ?array
    {
        return isset($this->OrderLine) ? $this->OrderLine : null;
    }
    /**
     * This method is responsible for validating the values passed to the setOrderLine method
     * This method is willingly generated in order to preserve the one-line inline validation within the setOrderLine method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateOrderLineForArrayConstraintsFromSetOrderLine(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfOrderLineOrderLineItem) {
            // validation for constraint: itemType
            if (!$arrayOfOrderLineOrderLineItem instanceof \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountOrderLine) {
                $invalidValues[] = is_object($arrayOfOrderLineOrderLineItem) ? get_class($arrayOfOrderLineOrderLineItem) : sprintf('%s(%s)', gettype($arrayOfOrderLineOrderLineItem), var_export($arrayOfOrderLineOrderLineItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The OrderLine property can only contain items of type \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountOrderLine, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set OrderLine value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws InvalidArgumentException
     * @param \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountOrderLine[] $orderLine
     * @return \SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfOrderLine
     */
    public function setOrderLine(?array $orderLine = null): self
    {
        // validation for constraint: array
        if ('' !== ($orderLineArrayErrorMessage = self::validateOrderLineForArrayConstraintsFromSetOrderLine($orderLine))) {
            throw new InvalidArgumentException($orderLineArrayErrorMessage, __LINE__);
        }
        if (is_null($orderLine) || (is_array($orderLine) && empty($orderLine))) {
            unset($this->OrderLine);
        } else {
            $this->OrderLine = $orderLine;
        }
        
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountOrderLine|null
     */
    public function current(): ?\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountOrderLine
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountOrderLine|null
     */
    public function item($index): ?\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountOrderLine
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountOrderLine|null
     */
    public function first(): ?\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountOrderLine
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountOrderLine|null
     */
    public function last(): ?\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountOrderLine
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountOrderLine|null
     */
    public function offsetGet($offset): ?\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountOrderLine
    {
        return parent::offsetGet($offset);
    }
    /**
     * Add element to array
     * @see AbstractStructArrayBase::add()
     * @throws InvalidArgumentException
     * @param \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountOrderLine $item
     * @return \SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfOrderLine
     */
    public function add($item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountOrderLine) {
            throw new InvalidArgumentException(sprintf('The OrderLine property can only contain items of type \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountOrderLine, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        return parent::add($item);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string OrderLine
     */
    public function getAttributeName(): string
    {
        return 'OrderLine';
    }
}
