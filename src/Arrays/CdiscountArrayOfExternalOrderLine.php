<?php

declare(strict_types=1);

namespace SengentoBV\CdiscountMarketplaceSdk\Arrays;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfExternalOrderLine Arrays
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfExternalOrderLine
 * @package Cdiscount
 * @subpackage Arrays
 */
class CdiscountArrayOfExternalOrderLine extends AbstractStructArrayBase
{
    /**
     * The ExternalOrderLine
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountExternalOrderLine[]
     */
    protected ?array $ExternalOrderLine = null;
    /**
     * Constructor method for ArrayOfExternalOrderLine
     * @uses CdiscountArrayOfExternalOrderLine::setExternalOrderLine()
     * @param \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountExternalOrderLine[] $externalOrderLine
     */
    public function __construct(?array $externalOrderLine = null)
    {
        $this
            ->setExternalOrderLine($externalOrderLine);
    }
    /**
     * Get ExternalOrderLine value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountExternalOrderLine[]
     */
    public function getExternalOrderLine(): ?array
    {
        return isset($this->ExternalOrderLine) ? $this->ExternalOrderLine : null;
    }
    /**
     * This method is responsible for validating the values passed to the setExternalOrderLine method
     * This method is willingly generated in order to preserve the one-line inline validation within the setExternalOrderLine method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateExternalOrderLineForArrayConstraintsFromSetExternalOrderLine(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfExternalOrderLineExternalOrderLineItem) {
            // validation for constraint: itemType
            if (!$arrayOfExternalOrderLineExternalOrderLineItem instanceof \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountExternalOrderLine) {
                $invalidValues[] = is_object($arrayOfExternalOrderLineExternalOrderLineItem) ? get_class($arrayOfExternalOrderLineExternalOrderLineItem) : sprintf('%s(%s)', gettype($arrayOfExternalOrderLineExternalOrderLineItem), var_export($arrayOfExternalOrderLineExternalOrderLineItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The ExternalOrderLine property can only contain items of type \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountExternalOrderLine, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set ExternalOrderLine value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws InvalidArgumentException
     * @param \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountExternalOrderLine[] $externalOrderLine
     * @return \SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfExternalOrderLine
     */
    public function setExternalOrderLine(?array $externalOrderLine = null): self
    {
        // validation for constraint: array
        if ('' !== ($externalOrderLineArrayErrorMessage = self::validateExternalOrderLineForArrayConstraintsFromSetExternalOrderLine($externalOrderLine))) {
            throw new InvalidArgumentException($externalOrderLineArrayErrorMessage, __LINE__);
        }
        if (is_null($externalOrderLine) || (is_array($externalOrderLine) && empty($externalOrderLine))) {
            unset($this->ExternalOrderLine);
        } else {
            $this->ExternalOrderLine = $externalOrderLine;
        }
        
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountExternalOrderLine|null
     */
    public function current(): ?\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountExternalOrderLine
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountExternalOrderLine|null
     */
    public function item($index): ?\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountExternalOrderLine
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountExternalOrderLine|null
     */
    public function first(): ?\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountExternalOrderLine
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountExternalOrderLine|null
     */
    public function last(): ?\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountExternalOrderLine
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountExternalOrderLine|null
     */
    public function offsetGet($offset): ?\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountExternalOrderLine
    {
        return parent::offsetGet($offset);
    }
    /**
     * Add element to array
     * @see AbstractStructArrayBase::add()
     * @throws InvalidArgumentException
     * @param \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountExternalOrderLine $item
     * @return \SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfExternalOrderLine
     */
    public function add($item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountExternalOrderLine) {
            throw new InvalidArgumentException(sprintf('The ExternalOrderLine property can only contain items of type \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountExternalOrderLine, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        return parent::add($item);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string ExternalOrderLine
     */
    public function getAttributeName(): string
    {
        return 'ExternalOrderLine';
    }
}
