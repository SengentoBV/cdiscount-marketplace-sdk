<?php

declare(strict_types=1);

namespace SengentoBV\CdiscountMarketplaceSdk\Arrays;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfSellerIndicator Arrays
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfSellerIndicator
 * @package Cdiscount
 * @subpackage Arrays
 */
class CdiscountArrayOfSellerIndicator extends AbstractStructArrayBase
{
    /**
     * The SellerIndicator
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountSellerIndicator[]
     */
    protected ?array $SellerIndicator = null;
    /**
     * Constructor method for ArrayOfSellerIndicator
     * @uses CdiscountArrayOfSellerIndicator::setSellerIndicator()
     * @param \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountSellerIndicator[] $sellerIndicator
     */
    public function __construct(?array $sellerIndicator = null)
    {
        $this
            ->setSellerIndicator($sellerIndicator);
    }
    /**
     * Get SellerIndicator value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountSellerIndicator[]
     */
    public function getSellerIndicator(): ?array
    {
        return isset($this->SellerIndicator) ? $this->SellerIndicator : null;
    }
    /**
     * This method is responsible for validating the values passed to the setSellerIndicator method
     * This method is willingly generated in order to preserve the one-line inline validation within the setSellerIndicator method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateSellerIndicatorForArrayConstraintsFromSetSellerIndicator(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfSellerIndicatorSellerIndicatorItem) {
            // validation for constraint: itemType
            if (!$arrayOfSellerIndicatorSellerIndicatorItem instanceof \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountSellerIndicator) {
                $invalidValues[] = is_object($arrayOfSellerIndicatorSellerIndicatorItem) ? get_class($arrayOfSellerIndicatorSellerIndicatorItem) : sprintf('%s(%s)', gettype($arrayOfSellerIndicatorSellerIndicatorItem), var_export($arrayOfSellerIndicatorSellerIndicatorItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The SellerIndicator property can only contain items of type \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountSellerIndicator, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set SellerIndicator value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws InvalidArgumentException
     * @param \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountSellerIndicator[] $sellerIndicator
     * @return \SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfSellerIndicator
     */
    public function setSellerIndicator(?array $sellerIndicator = null): self
    {
        // validation for constraint: array
        if ('' !== ($sellerIndicatorArrayErrorMessage = self::validateSellerIndicatorForArrayConstraintsFromSetSellerIndicator($sellerIndicator))) {
            throw new InvalidArgumentException($sellerIndicatorArrayErrorMessage, __LINE__);
        }
        if (is_null($sellerIndicator) || (is_array($sellerIndicator) && empty($sellerIndicator))) {
            unset($this->SellerIndicator);
        } else {
            $this->SellerIndicator = $sellerIndicator;
        }
        
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountSellerIndicator|null
     */
    public function current(): ?\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountSellerIndicator
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountSellerIndicator|null
     */
    public function item($index): ?\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountSellerIndicator
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountSellerIndicator|null
     */
    public function first(): ?\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountSellerIndicator
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountSellerIndicator|null
     */
    public function last(): ?\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountSellerIndicator
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountSellerIndicator|null
     */
    public function offsetGet($offset): ?\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountSellerIndicator
    {
        return parent::offsetGet($offset);
    }
    /**
     * Add element to array
     * @see AbstractStructArrayBase::add()
     * @throws InvalidArgumentException
     * @param \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountSellerIndicator $item
     * @return \SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfSellerIndicator
     */
    public function add($item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountSellerIndicator) {
            throw new InvalidArgumentException(sprintf('The SellerIndicator property can only contain items of type \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountSellerIndicator, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        return parent::add($item);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string SellerIndicator
     */
    public function getAttributeName(): string
    {
        return 'SellerIndicator';
    }
}
