<?php

declare(strict_types=1);

namespace SengentoBV\CdiscountMarketplaceSdk\Arrays;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfOfferPool Arrays
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfOfferPool
 * @package Cdiscount
 * @subpackage Arrays
 */
class CdiscountArrayOfOfferPool extends AbstractStructArrayBase
{
    /**
     * The OfferPool
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountOfferPool[]
     */
    protected ?array $OfferPool = null;
    /**
     * Constructor method for ArrayOfOfferPool
     * @uses CdiscountArrayOfOfferPool::setOfferPool()
     * @param \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountOfferPool[] $offerPool
     */
    public function __construct(?array $offerPool = null)
    {
        $this
            ->setOfferPool($offerPool);
    }
    /**
     * Get OfferPool value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountOfferPool[]
     */
    public function getOfferPool(): ?array
    {
        return isset($this->OfferPool) ? $this->OfferPool : null;
    }
    /**
     * This method is responsible for validating the values passed to the setOfferPool method
     * This method is willingly generated in order to preserve the one-line inline validation within the setOfferPool method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateOfferPoolForArrayConstraintsFromSetOfferPool(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfOfferPoolOfferPoolItem) {
            // validation for constraint: itemType
            if (!$arrayOfOfferPoolOfferPoolItem instanceof \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountOfferPool) {
                $invalidValues[] = is_object($arrayOfOfferPoolOfferPoolItem) ? get_class($arrayOfOfferPoolOfferPoolItem) : sprintf('%s(%s)', gettype($arrayOfOfferPoolOfferPoolItem), var_export($arrayOfOfferPoolOfferPoolItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The OfferPool property can only contain items of type \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountOfferPool, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set OfferPool value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws InvalidArgumentException
     * @param \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountOfferPool[] $offerPool
     * @return \SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfOfferPool
     */
    public function setOfferPool(?array $offerPool = null): self
    {
        // validation for constraint: array
        if ('' !== ($offerPoolArrayErrorMessage = self::validateOfferPoolForArrayConstraintsFromSetOfferPool($offerPool))) {
            throw new InvalidArgumentException($offerPoolArrayErrorMessage, __LINE__);
        }
        if (is_null($offerPool) || (is_array($offerPool) && empty($offerPool))) {
            unset($this->OfferPool);
        } else {
            $this->OfferPool = $offerPool;
        }
        
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountOfferPool|null
     */
    public function current(): ?\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountOfferPool
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountOfferPool|null
     */
    public function item($index): ?\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountOfferPool
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountOfferPool|null
     */
    public function first(): ?\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountOfferPool
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountOfferPool|null
     */
    public function last(): ?\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountOfferPool
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountOfferPool|null
     */
    public function offsetGet($offset): ?\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountOfferPool
    {
        return parent::offsetGet($offset);
    }
    /**
     * Add element to array
     * @see AbstractStructArrayBase::add()
     * @throws InvalidArgumentException
     * @param \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountOfferPool $item
     * @return \SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfOfferPool
     */
    public function add($item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountOfferPool) {
            throw new InvalidArgumentException(sprintf('The OfferPool property can only contain items of type \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountOfferPool, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        return parent::add($item);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string OfferPool
     */
    public function getAttributeName(): string
    {
        return 'OfferPool';
    }
}
