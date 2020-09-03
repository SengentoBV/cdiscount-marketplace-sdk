<?php

namespace SengentoBV\CdiscountMarketplaceSdk\Arrays;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOflong Arrays
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOflong
 * @package Cdiscount
 * @subpackage Arrays
 */
class CdiscountArrayOflong extends AbstractStructArrayBase
{
    /**
     * The long
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var int[]
     */
    public $long;
    /**
     * Constructor method for ArrayOflong
     * @uses CdiscountArrayOflong::setLong()
     * @param int[] $long
     */
    public function __construct(array $long = array())
    {
        $this
            ->setLong($long);
    }
    /**
     * Get long value
     * @return int[]|null
     */
    public function getLong()
    {
        return $this->long;
    }
    /**
     * This method is responsible for validating the values passed to the setLong method
     * This method is willingly generated in order to preserve the one-line inline validation within the setLong method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateLongForArrayConstraintsFromSetLong(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOflongLongItem) {
            // validation for constraint: itemType
            if (!(is_int($arrayOflongLongItem) || ctype_digit($arrayOflongLongItem))) {
                $invalidValues[] = is_object($arrayOflongLongItem) ? get_class($arrayOflongLongItem) : sprintf('%s(%s)', gettype($arrayOflongLongItem), var_export($arrayOflongLongItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The long property can only contain items of type long, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set long value
     * @throws \InvalidArgumentException
     * @param int[] $long
     * @return \SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOflong
     */
    public function setLong(array $long = array())
    {
        // validation for constraint: array
        if ('' !== ($longArrayErrorMessage = self::validateLongForArrayConstraintsFromSetLong($long))) {
            throw new \InvalidArgumentException($longArrayErrorMessage, __LINE__);
        }
        $this->long = $long;
        return $this;
    }
    /**
     * Add item to long value
     * @throws \InvalidArgumentException
     * @param int $item
     * @return \SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOflong
     */
    public function addToLong($item)
    {
        // validation for constraint: itemType
        if (!(is_int($item) || ctype_digit($item))) {
            throw new \InvalidArgumentException(sprintf('The long property can only contain items of type long, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->long[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return int|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return int|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return int|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return int|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return int|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string long
     */
    public function getAttributeName()
    {
        return 'long';
    }
}
