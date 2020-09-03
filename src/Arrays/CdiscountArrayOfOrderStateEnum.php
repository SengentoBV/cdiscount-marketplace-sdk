<?php

namespace SengentoBV\CdiscountMarketplaceSdk\Arrays;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfOrderStateEnum Arrays
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfOrderStateEnum
 * @package Cdiscount
 * @subpackage Arrays
 */
class CdiscountArrayOfOrderStateEnum extends AbstractStructArrayBase
{
    /**
     * The OrderStateEnum
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    public $OrderStateEnum;
    /**
     * Constructor method for ArrayOfOrderStateEnum
     * @uses CdiscountArrayOfOrderStateEnum::setOrderStateEnum()
     * @param string[] $orderStateEnum
     */
    public function __construct(array $orderStateEnum = array())
    {
        $this
            ->setOrderStateEnum($orderStateEnum);
    }
    /**
     * Get OrderStateEnum value
     * @return string[]|null
     */
    public function getOrderStateEnum()
    {
        return $this->OrderStateEnum;
    }
    /**
     * This method is responsible for validating the values passed to the setOrderStateEnum method
     * This method is willingly generated in order to preserve the one-line inline validation within the setOrderStateEnum method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateOrderStateEnumForArrayConstraintsFromSetOrderStateEnum(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfOrderStateEnumOrderStateEnumItem) {
            // validation for constraint: enumeration
            if (!\SengentoBV\CdiscountMarketplaceSdk\Enums\CdiscountOrderStateEnum::valueIsValid($arrayOfOrderStateEnumOrderStateEnumItem)) {
                $invalidValues[] = is_object($arrayOfOrderStateEnumOrderStateEnumItem) ? get_class($arrayOfOrderStateEnumOrderStateEnumItem) : sprintf('%s(%s)', gettype($arrayOfOrderStateEnumOrderStateEnumItem), var_export($arrayOfOrderStateEnumOrderStateEnumItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \SengentoBV\CdiscountMarketplaceSdk\Enums\CdiscountOrderStateEnum', is_array($invalidValues) ? implode(', ', $invalidValues) : var_export($invalidValues, true), implode(', ', \SengentoBV\CdiscountMarketplaceSdk\Enums\CdiscountOrderStateEnum::getValidValues()));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set OrderStateEnum value
     * @uses \SengentoBV\CdiscountMarketplaceSdk\Enums\CdiscountOrderStateEnum::valueIsValid()
     * @uses \SengentoBV\CdiscountMarketplaceSdk\Enums\CdiscountOrderStateEnum::getValidValues()
     * @throws \InvalidArgumentException
     * @param string[] $orderStateEnum
     * @return \SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfOrderStateEnum
     */
    public function setOrderStateEnum(array $orderStateEnum = array())
    {
        // validation for constraint: array
        if ('' !== ($orderStateEnumArrayErrorMessage = self::validateOrderStateEnumForArrayConstraintsFromSetOrderStateEnum($orderStateEnum))) {
            throw new \InvalidArgumentException($orderStateEnumArrayErrorMessage, __LINE__);
        }
        $this->OrderStateEnum = $orderStateEnum;
        return $this;
    }
    /**
     * Add item to OrderStateEnum value
     * @uses \SengentoBV\CdiscountMarketplaceSdk\Enums\CdiscountOrderStateEnum::valueIsValid()
     * @uses \SengentoBV\CdiscountMarketplaceSdk\Enums\CdiscountOrderStateEnum::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfOrderStateEnum
     */
    public function addToOrderStateEnum($item)
    {
        // validation for constraint: enumeration
        if (!\SengentoBV\CdiscountMarketplaceSdk\Enums\CdiscountOrderStateEnum::valueIsValid($item)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \SengentoBV\CdiscountMarketplaceSdk\Enums\CdiscountOrderStateEnum', is_array($item) ? implode(', ', $item) : var_export($item, true), implode(', ', \SengentoBV\CdiscountMarketplaceSdk\Enums\CdiscountOrderStateEnum::getValidValues())), __LINE__);
        }
        $this->OrderStateEnum[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return string|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return string|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return string|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return string|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return string|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Add element to array
     * @see AbstractStructArrayBase::add()
     * @throws \InvalidArgumentException
     * @uses \SengentoBV\CdiscountMarketplaceSdk\Enums\CdiscountOrderStateEnum::valueIsValid()
     * @param string $item
     * @return \SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfOrderStateEnum
     */
    public function add($item)
    {
        // validation for constraint: enumeration
        if (!\SengentoBV\CdiscountMarketplaceSdk\Enums\CdiscountOrderStateEnum::valueIsValid($item)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \SengentoBV\CdiscountMarketplaceSdk\Enums\CdiscountOrderStateEnum', is_array($item) ? implode(', ', $item) : var_export($item, true), implode(', ', \SengentoBV\CdiscountMarketplaceSdk\Enums\CdiscountOrderStateEnum::getValidValues())), __LINE__);
        }
        return parent::add($item);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string OrderStateEnum
     */
    public function getAttributeName()
    {
        return 'OrderStateEnum';
    }
}
