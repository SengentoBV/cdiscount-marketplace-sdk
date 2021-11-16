<?php

namespace SengentoBV\CdiscountMarketplaceSdk\Arrays;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfProductMatching Arrays
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfProductMatching
 * @package Cdiscount
 * @subpackage Arrays
 */
class CdiscountArrayOfProductMatching extends AbstractStructArrayBase
{
    /**
     * The ProductMatching
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountProductMatching[]
     */
    public $ProductMatching;
    /**
     * Constructor method for ArrayOfProductMatching
     * @uses CdiscountArrayOfProductMatching::setProductMatching()
     * @param \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountProductMatching[] $productMatching
     */
    public function __construct(array $productMatching = array())
    {
        $this
            ->setProductMatching($productMatching);
    }
    /**
     * Get ProductMatching value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountProductMatching[]|null
     */
    public function getProductMatching()
    {
        return isset($this->ProductMatching) ? $this->ProductMatching : null;
    }
    /**
     * This method is responsible for validating the values passed to the setProductMatching method
     * This method is willingly generated in order to preserve the one-line inline validation within the setProductMatching method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateProductMatchingForArrayConstraintsFromSetProductMatching(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfProductMatchingProductMatchingItem) {
            // validation for constraint: itemType
            if (!$arrayOfProductMatchingProductMatchingItem instanceof \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountProductMatching) {
                $invalidValues[] = is_object($arrayOfProductMatchingProductMatchingItem) ? get_class($arrayOfProductMatchingProductMatchingItem) : sprintf('%s(%s)', gettype($arrayOfProductMatchingProductMatchingItem), var_export($arrayOfProductMatchingProductMatchingItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The ProductMatching property can only contain items of type \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountProductMatching, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set ProductMatching value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountProductMatching[] $productMatching
     * @return \SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfProductMatching
     */
    public function setProductMatching(array $productMatching = array())
    {
        // validation for constraint: array
        if ('' !== ($productMatchingArrayErrorMessage = self::validateProductMatchingForArrayConstraintsFromSetProductMatching($productMatching))) {
            throw new \InvalidArgumentException($productMatchingArrayErrorMessage, __LINE__);
        }
        if (is_null($productMatching) || (is_array($productMatching) && empty($productMatching))) {
            unset($this->ProductMatching);
        } else {
            $this->ProductMatching = $productMatching;
        }
        return $this;
    }
    /**
     * Add item to ProductMatching value
     * @throws \InvalidArgumentException
     * @param \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountProductMatching $item
     * @return \SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfProductMatching
     */
    public function addToProductMatching(\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountProductMatching $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountProductMatching) {
            throw new \InvalidArgumentException(sprintf('The ProductMatching property can only contain items of type \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountProductMatching, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->ProductMatching[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountProductMatching|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountProductMatching|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountProductMatching|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountProductMatching|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountProductMatching|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string ProductMatching
     */
    public function getAttributeName(): string
    {
        return 'ProductMatching';
    }
}
