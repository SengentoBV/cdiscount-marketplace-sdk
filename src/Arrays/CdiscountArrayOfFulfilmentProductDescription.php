<?php

declare(strict_types=1);

namespace SengentoBV\CdiscountMarketplaceSdk\Arrays;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfFulfilmentProductDescription Arrays
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfFulfilmentProductDescription
 * @package Cdiscount
 * @subpackage Arrays
 */
class CdiscountArrayOfFulfilmentProductDescription extends AbstractStructArrayBase
{
    /**
     * The FulfilmentProductDescription
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountFulfilmentProductDescription[]
     */
    protected ?array $FulfilmentProductDescription = null;
    /**
     * Constructor method for ArrayOfFulfilmentProductDescription
     * @uses CdiscountArrayOfFulfilmentProductDescription::setFulfilmentProductDescription()
     * @param \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountFulfilmentProductDescription[] $fulfilmentProductDescription
     */
    public function __construct(?array $fulfilmentProductDescription = null)
    {
        $this
            ->setFulfilmentProductDescription($fulfilmentProductDescription);
    }
    /**
     * Get FulfilmentProductDescription value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountFulfilmentProductDescription[]
     */
    public function getFulfilmentProductDescription(): ?array
    {
        return isset($this->FulfilmentProductDescription) ? $this->FulfilmentProductDescription : null;
    }
    /**
     * This method is responsible for validating the values passed to the setFulfilmentProductDescription method
     * This method is willingly generated in order to preserve the one-line inline validation within the setFulfilmentProductDescription method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateFulfilmentProductDescriptionForArrayConstraintsFromSetFulfilmentProductDescription(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfFulfilmentProductDescriptionFulfilmentProductDescriptionItem) {
            // validation for constraint: itemType
            if (!$arrayOfFulfilmentProductDescriptionFulfilmentProductDescriptionItem instanceof \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountFulfilmentProductDescription) {
                $invalidValues[] = is_object($arrayOfFulfilmentProductDescriptionFulfilmentProductDescriptionItem) ? get_class($arrayOfFulfilmentProductDescriptionFulfilmentProductDescriptionItem) : sprintf('%s(%s)', gettype($arrayOfFulfilmentProductDescriptionFulfilmentProductDescriptionItem), var_export($arrayOfFulfilmentProductDescriptionFulfilmentProductDescriptionItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The FulfilmentProductDescription property can only contain items of type \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountFulfilmentProductDescription, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set FulfilmentProductDescription value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws InvalidArgumentException
     * @param \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountFulfilmentProductDescription[] $fulfilmentProductDescription
     * @return \SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfFulfilmentProductDescription
     */
    public function setFulfilmentProductDescription(?array $fulfilmentProductDescription = null): self
    {
        // validation for constraint: array
        if ('' !== ($fulfilmentProductDescriptionArrayErrorMessage = self::validateFulfilmentProductDescriptionForArrayConstraintsFromSetFulfilmentProductDescription($fulfilmentProductDescription))) {
            throw new InvalidArgumentException($fulfilmentProductDescriptionArrayErrorMessage, __LINE__);
        }
        if (is_null($fulfilmentProductDescription) || (is_array($fulfilmentProductDescription) && empty($fulfilmentProductDescription))) {
            unset($this->FulfilmentProductDescription);
        } else {
            $this->FulfilmentProductDescription = $fulfilmentProductDescription;
        }
        
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountFulfilmentProductDescription|null
     */
    public function current(): ?\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountFulfilmentProductDescription
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountFulfilmentProductDescription|null
     */
    public function item($index): ?\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountFulfilmentProductDescription
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountFulfilmentProductDescription|null
     */
    public function first(): ?\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountFulfilmentProductDescription
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountFulfilmentProductDescription|null
     */
    public function last(): ?\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountFulfilmentProductDescription
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountFulfilmentProductDescription|null
     */
    public function offsetGet($offset): ?\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountFulfilmentProductDescription
    {
        return parent::offsetGet($offset);
    }
    /**
     * Add element to array
     * @see AbstractStructArrayBase::add()
     * @throws InvalidArgumentException
     * @param \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountFulfilmentProductDescription $item
     * @return \SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfFulfilmentProductDescription
     */
    public function add($item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountFulfilmentProductDescription) {
            throw new InvalidArgumentException(sprintf('The FulfilmentProductDescription property can only contain items of type \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountFulfilmentProductDescription, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        return parent::add($item);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string FulfilmentProductDescription
     */
    public function getAttributeName(): string
    {
        return 'FulfilmentProductDescription';
    }
}
