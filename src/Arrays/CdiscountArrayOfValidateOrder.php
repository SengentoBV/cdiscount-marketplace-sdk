<?php

namespace SengentoBV\CdiscountMarketplaceSdk\Arrays;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfValidateOrder Arrays
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfValidateOrder
 * @package Cdiscount
 * @subpackage Arrays
 */
class CdiscountArrayOfValidateOrder extends AbstractStructArrayBase
{
    /**
     * The ValidateOrder
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountValidateOrder[]
     */
    public $ValidateOrder;
    /**
     * Constructor method for ArrayOfValidateOrder
     * @uses CdiscountArrayOfValidateOrder::setValidateOrder()
     * @param \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountValidateOrder[] $validateOrder
     */
    public function __construct(array $validateOrder = array())
    {
        $this
            ->setValidateOrder($validateOrder);
    }
    /**
     * Get ValidateOrder value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountValidateOrder[]|null
     */
    public function getValidateOrder()
    {
        return isset($this->ValidateOrder) ? $this->ValidateOrder : null;
    }
    /**
     * This method is responsible for validating the values passed to the setValidateOrder method
     * This method is willingly generated in order to preserve the one-line inline validation within the setValidateOrder method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateValidateOrderForArrayConstraintsFromSetValidateOrder(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfValidateOrderValidateOrderItem) {
            // validation for constraint: itemType
            if (!$arrayOfValidateOrderValidateOrderItem instanceof \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountValidateOrder) {
                $invalidValues[] = is_object($arrayOfValidateOrderValidateOrderItem) ? get_class($arrayOfValidateOrderValidateOrderItem) : sprintf('%s(%s)', gettype($arrayOfValidateOrderValidateOrderItem), var_export($arrayOfValidateOrderValidateOrderItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The ValidateOrder property can only contain items of type \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountValidateOrder, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set ValidateOrder value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountValidateOrder[] $validateOrder
     * @return \SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfValidateOrder
     */
    public function setValidateOrder(array $validateOrder = array())
    {
        // validation for constraint: array
        if ('' !== ($validateOrderArrayErrorMessage = self::validateValidateOrderForArrayConstraintsFromSetValidateOrder($validateOrder))) {
            throw new \InvalidArgumentException($validateOrderArrayErrorMessage, __LINE__);
        }
        if (is_null($validateOrder) || (is_array($validateOrder) && empty($validateOrder))) {
            unset($this->ValidateOrder);
        } else {
            $this->ValidateOrder = $validateOrder;
        }
        return $this;
    }
    /**
     * Add item to ValidateOrder value
     * @throws \InvalidArgumentException
     * @param \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountValidateOrder $item
     * @return \SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfValidateOrder
     */
    public function addToValidateOrder(\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountValidateOrder $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountValidateOrder) {
            throw new \InvalidArgumentException(sprintf('The ValidateOrder property can only contain items of type \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountValidateOrder, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->ValidateOrder[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountValidateOrder|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountValidateOrder|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountValidateOrder|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountValidateOrder|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountValidateOrder|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string ValidateOrder
     */
    public function getAttributeName()
    {
        return 'ValidateOrder';
    }
}
