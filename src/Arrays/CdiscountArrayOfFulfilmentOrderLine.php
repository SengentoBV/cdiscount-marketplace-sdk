<?php

namespace SengentoBV\CdiscountMarketplaceSdk\Arrays;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfFulfilmentOrderLine Arrays
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfFulfilmentOrderLine
 * @package Cdiscount
 * @subpackage Arrays
 */
class CdiscountArrayOfFulfilmentOrderLine extends AbstractStructArrayBase
{
    /**
     * The FulfilmentOrderLine
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountFulfilmentOrderLine[]
     */
    public $FulfilmentOrderLine;
    /**
     * Constructor method for ArrayOfFulfilmentOrderLine
     * @uses CdiscountArrayOfFulfilmentOrderLine::setFulfilmentOrderLine()
     * @param \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountFulfilmentOrderLine[] $fulfilmentOrderLine
     */
    public function __construct(array $fulfilmentOrderLine = array())
    {
        $this
            ->setFulfilmentOrderLine($fulfilmentOrderLine);
    }
    /**
     * Get FulfilmentOrderLine value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountFulfilmentOrderLine[]|null
     */
    public function getFulfilmentOrderLine()
    {
        return isset($this->FulfilmentOrderLine) ? $this->FulfilmentOrderLine : null;
    }
    /**
     * This method is responsible for validating the values passed to the setFulfilmentOrderLine method
     * This method is willingly generated in order to preserve the one-line inline validation within the setFulfilmentOrderLine method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateFulfilmentOrderLineForArrayConstraintsFromSetFulfilmentOrderLine(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfFulfilmentOrderLineFulfilmentOrderLineItem) {
            // validation for constraint: itemType
            if (!$arrayOfFulfilmentOrderLineFulfilmentOrderLineItem instanceof \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountFulfilmentOrderLine) {
                $invalidValues[] = is_object($arrayOfFulfilmentOrderLineFulfilmentOrderLineItem) ? get_class($arrayOfFulfilmentOrderLineFulfilmentOrderLineItem) : sprintf('%s(%s)', gettype($arrayOfFulfilmentOrderLineFulfilmentOrderLineItem), var_export($arrayOfFulfilmentOrderLineFulfilmentOrderLineItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The FulfilmentOrderLine property can only contain items of type \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountFulfilmentOrderLine, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set FulfilmentOrderLine value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountFulfilmentOrderLine[] $fulfilmentOrderLine
     * @return \SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfFulfilmentOrderLine
     */
    public function setFulfilmentOrderLine(array $fulfilmentOrderLine = array())
    {
        // validation for constraint: array
        if ('' !== ($fulfilmentOrderLineArrayErrorMessage = self::validateFulfilmentOrderLineForArrayConstraintsFromSetFulfilmentOrderLine($fulfilmentOrderLine))) {
            throw new \InvalidArgumentException($fulfilmentOrderLineArrayErrorMessage, __LINE__);
        }
        if (is_null($fulfilmentOrderLine) || (is_array($fulfilmentOrderLine) && empty($fulfilmentOrderLine))) {
            unset($this->FulfilmentOrderLine);
        } else {
            $this->FulfilmentOrderLine = $fulfilmentOrderLine;
        }
        return $this;
    }
    /**
     * Add item to FulfilmentOrderLine value
     * @throws \InvalidArgumentException
     * @param \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountFulfilmentOrderLine $item
     * @return \SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfFulfilmentOrderLine
     */
    public function addToFulfilmentOrderLine(\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountFulfilmentOrderLine $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountFulfilmentOrderLine) {
            throw new \InvalidArgumentException(sprintf('The FulfilmentOrderLine property can only contain items of type \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountFulfilmentOrderLine, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->FulfilmentOrderLine[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountFulfilmentOrderLine|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountFulfilmentOrderLine|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountFulfilmentOrderLine|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountFulfilmentOrderLine|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountFulfilmentOrderLine|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string FulfilmentOrderLine
     */
    public function getAttributeName(): string
    {
        return 'FulfilmentOrderLine';
    }
}
