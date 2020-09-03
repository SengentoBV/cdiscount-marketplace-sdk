<?php

namespace SengentoBV\CdiscountMarketplaceSdk\Arrays;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfDiscountComponent Arrays
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfDiscountComponent
 * @package Cdiscount
 * @subpackage Arrays
 */
class CdiscountArrayOfDiscountComponent extends AbstractStructArrayBase
{
    /**
     * The DiscountComponent
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountDiscountComponent[]
     */
    public $DiscountComponent;
    /**
     * Constructor method for ArrayOfDiscountComponent
     * @uses CdiscountArrayOfDiscountComponent::setDiscountComponent()
     * @param \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountDiscountComponent[] $discountComponent
     */
    public function __construct(array $discountComponent = array())
    {
        $this
            ->setDiscountComponent($discountComponent);
    }
    /**
     * Get DiscountComponent value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountDiscountComponent[]|null
     */
    public function getDiscountComponent()
    {
        return isset($this->DiscountComponent) ? $this->DiscountComponent : null;
    }
    /**
     * This method is responsible for validating the values passed to the setDiscountComponent method
     * This method is willingly generated in order to preserve the one-line inline validation within the setDiscountComponent method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateDiscountComponentForArrayConstraintsFromSetDiscountComponent(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfDiscountComponentDiscountComponentItem) {
            // validation for constraint: itemType
            if (!$arrayOfDiscountComponentDiscountComponentItem instanceof \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountDiscountComponent) {
                $invalidValues[] = is_object($arrayOfDiscountComponentDiscountComponentItem) ? get_class($arrayOfDiscountComponentDiscountComponentItem) : sprintf('%s(%s)', gettype($arrayOfDiscountComponentDiscountComponentItem), var_export($arrayOfDiscountComponentDiscountComponentItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The DiscountComponent property can only contain items of type \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountDiscountComponent, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set DiscountComponent value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountDiscountComponent[] $discountComponent
     * @return \SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfDiscountComponent
     */
    public function setDiscountComponent(array $discountComponent = array())
    {
        // validation for constraint: array
        if ('' !== ($discountComponentArrayErrorMessage = self::validateDiscountComponentForArrayConstraintsFromSetDiscountComponent($discountComponent))) {
            throw new \InvalidArgumentException($discountComponentArrayErrorMessage, __LINE__);
        }
        if (is_null($discountComponent) || (is_array($discountComponent) && empty($discountComponent))) {
            unset($this->DiscountComponent);
        } else {
            $this->DiscountComponent = $discountComponent;
        }
        return $this;
    }
    /**
     * Add item to DiscountComponent value
     * @throws \InvalidArgumentException
     * @param \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountDiscountComponent $item
     * @return \SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfDiscountComponent
     */
    public function addToDiscountComponent(\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountDiscountComponent $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountDiscountComponent) {
            throw new \InvalidArgumentException(sprintf('The DiscountComponent property can only contain items of type \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountDiscountComponent, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->DiscountComponent[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountDiscountComponent|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountDiscountComponent|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountDiscountComponent|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountDiscountComponent|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountDiscountComponent|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string DiscountComponent
     */
    public function getAttributeName()
    {
        return 'DiscountComponent';
    }
}
