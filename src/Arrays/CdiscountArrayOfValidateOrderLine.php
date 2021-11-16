<?php

declare(strict_types=1);

namespace SengentoBV\CdiscountMarketplaceSdk\Arrays;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfValidateOrderLine Arrays
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfValidateOrderLine
 * @package Cdiscount
 * @subpackage Arrays
 */
class CdiscountArrayOfValidateOrderLine extends AbstractStructArrayBase
{
    /**
     * The ValidateOrderLine
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountValidateOrderLine[]
     */
    protected ?array $ValidateOrderLine = null;
    /**
     * Constructor method for ArrayOfValidateOrderLine
     * @uses CdiscountArrayOfValidateOrderLine::setValidateOrderLine()
     * @param \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountValidateOrderLine[] $validateOrderLine
     */
    public function __construct(?array $validateOrderLine = null)
    {
        $this
            ->setValidateOrderLine($validateOrderLine);
    }
    /**
     * Get ValidateOrderLine value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountValidateOrderLine[]
     */
    public function getValidateOrderLine(): ?array
    {
        return isset($this->ValidateOrderLine) ? $this->ValidateOrderLine : null;
    }
    /**
     * This method is responsible for validating the values passed to the setValidateOrderLine method
     * This method is willingly generated in order to preserve the one-line inline validation within the setValidateOrderLine method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateValidateOrderLineForArrayConstraintsFromSetValidateOrderLine(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfValidateOrderLineValidateOrderLineItem) {
            // validation for constraint: itemType
            if (!$arrayOfValidateOrderLineValidateOrderLineItem instanceof \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountValidateOrderLine) {
                $invalidValues[] = is_object($arrayOfValidateOrderLineValidateOrderLineItem) ? get_class($arrayOfValidateOrderLineValidateOrderLineItem) : sprintf('%s(%s)', gettype($arrayOfValidateOrderLineValidateOrderLineItem), var_export($arrayOfValidateOrderLineValidateOrderLineItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The ValidateOrderLine property can only contain items of type \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountValidateOrderLine, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set ValidateOrderLine value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws InvalidArgumentException
     * @param \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountValidateOrderLine[] $validateOrderLine
     * @return \SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfValidateOrderLine
     */
    public function setValidateOrderLine(?array $validateOrderLine = null): self
    {
        // validation for constraint: array
        if ('' !== ($validateOrderLineArrayErrorMessage = self::validateValidateOrderLineForArrayConstraintsFromSetValidateOrderLine($validateOrderLine))) {
            throw new InvalidArgumentException($validateOrderLineArrayErrorMessage, __LINE__);
        }
        if (is_null($validateOrderLine) || (is_array($validateOrderLine) && empty($validateOrderLine))) {
            unset($this->ValidateOrderLine);
        } else {
            $this->ValidateOrderLine = $validateOrderLine;
        }
        
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountValidateOrderLine|null
     */
    public function current(): ?\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountValidateOrderLine
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountValidateOrderLine|null
     */
    public function item($index): ?\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountValidateOrderLine
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountValidateOrderLine|null
     */
    public function first(): ?\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountValidateOrderLine
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountValidateOrderLine|null
     */
    public function last(): ?\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountValidateOrderLine
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountValidateOrderLine|null
     */
    public function offsetGet($offset): ?\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountValidateOrderLine
    {
        return parent::offsetGet($offset);
    }
    /**
     * Add element to array
     * @see AbstractStructArrayBase::add()
     * @throws InvalidArgumentException
     * @param \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountValidateOrderLine $item
     * @return \SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfValidateOrderLine
     */
    public function add($item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountValidateOrderLine) {
            throw new InvalidArgumentException(sprintf('The ValidateOrderLine property can only contain items of type \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountValidateOrderLine, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        return parent::add($item);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string ValidateOrderLine
     */
    public function getAttributeName(): string
    {
        return 'ValidateOrderLine';
    }
}
