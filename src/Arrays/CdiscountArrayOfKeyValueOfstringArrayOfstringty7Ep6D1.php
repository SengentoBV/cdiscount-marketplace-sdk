<?php

namespace SengentoBV\CdiscountMarketplaceSdk\Arrays;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfKeyValueOfstringArrayOfstringty7Ep6D1 Arrays
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfKeyValueOfstringArrayOfstringty7Ep6D1
 * @package Cdiscount
 * @subpackage Arrays
 */
class CdiscountArrayOfKeyValueOfstringArrayOfstringty7Ep6D1 extends AbstractStructArrayBase
{
    /**
     * The KeyValueOfstringArrayOfstringty7Ep6D1
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountKeyValueOfstringArrayOfstringty7Ep6D1[]
     */
    public $KeyValueOfstringArrayOfstringty7Ep6D1;
    /**
     * Constructor method for ArrayOfKeyValueOfstringArrayOfstringty7Ep6D1
     * @uses CdiscountArrayOfKeyValueOfstringArrayOfstringty7Ep6D1::setKeyValueOfstringArrayOfstringty7Ep6D1()
     * @param \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountKeyValueOfstringArrayOfstringty7Ep6D1[] $keyValueOfstringArrayOfstringty7Ep6D1
     */
    public function __construct(array $keyValueOfstringArrayOfstringty7Ep6D1 = array())
    {
        $this
            ->setKeyValueOfstringArrayOfstringty7Ep6D1($keyValueOfstringArrayOfstringty7Ep6D1);
    }
    /**
     * Get KeyValueOfstringArrayOfstringty7Ep6D1 value
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountKeyValueOfstringArrayOfstringty7Ep6D1[]|null
     */
    public function getKeyValueOfstringArrayOfstringty7Ep6D1()
    {
        return $this->KeyValueOfstringArrayOfstringty7Ep6D1;
    }
    /**
     * This method is responsible for validating the values passed to the setKeyValueOfstringArrayOfstringty7Ep6D1 method
     * This method is willingly generated in order to preserve the one-line inline validation within the setKeyValueOfstringArrayOfstringty7Ep6D1 method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateKeyValueOfstringArrayOfstringty7Ep6D1ForArrayConstraintsFromSetKeyValueOfstringArrayOfstringty7Ep6D1(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfKeyValueOfstringArrayOfstringty7Ep6D1KeyValueOfstringArrayOfstringty7Ep6D1Item) {
            // validation for constraint: itemType
            if (!$arrayOfKeyValueOfstringArrayOfstringty7Ep6D1KeyValueOfstringArrayOfstringty7Ep6D1Item instanceof \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountKeyValueOfstringArrayOfstringty7Ep6D1) {
                $invalidValues[] = is_object($arrayOfKeyValueOfstringArrayOfstringty7Ep6D1KeyValueOfstringArrayOfstringty7Ep6D1Item) ? get_class($arrayOfKeyValueOfstringArrayOfstringty7Ep6D1KeyValueOfstringArrayOfstringty7Ep6D1Item) : sprintf('%s(%s)', gettype($arrayOfKeyValueOfstringArrayOfstringty7Ep6D1KeyValueOfstringArrayOfstringty7Ep6D1Item), var_export($arrayOfKeyValueOfstringArrayOfstringty7Ep6D1KeyValueOfstringArrayOfstringty7Ep6D1Item, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The KeyValueOfstringArrayOfstringty7Ep6D1 property can only contain items of type \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountKeyValueOfstringArrayOfstringty7Ep6D1, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set KeyValueOfstringArrayOfstringty7Ep6D1 value
     * @throws \InvalidArgumentException
     * @param \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountKeyValueOfstringArrayOfstringty7Ep6D1[] $keyValueOfstringArrayOfstringty7Ep6D1
     * @return \SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfKeyValueOfstringArrayOfstringty7Ep6D1
     */
    public function setKeyValueOfstringArrayOfstringty7Ep6D1(array $keyValueOfstringArrayOfstringty7Ep6D1 = array())
    {
        // validation for constraint: array
        if ('' !== ($keyValueOfstringArrayOfstringty7Ep6D1ArrayErrorMessage = self::validateKeyValueOfstringArrayOfstringty7Ep6D1ForArrayConstraintsFromSetKeyValueOfstringArrayOfstringty7Ep6D1($keyValueOfstringArrayOfstringty7Ep6D1))) {
            throw new \InvalidArgumentException($keyValueOfstringArrayOfstringty7Ep6D1ArrayErrorMessage, __LINE__);
        }
        $this->KeyValueOfstringArrayOfstringty7Ep6D1 = $keyValueOfstringArrayOfstringty7Ep6D1;
        return $this;
    }
    /**
     * Add item to KeyValueOfstringArrayOfstringty7Ep6D1 value
     * @throws \InvalidArgumentException
     * @param \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountKeyValueOfstringArrayOfstringty7Ep6D1 $item
     * @return \SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfKeyValueOfstringArrayOfstringty7Ep6D1
     */
    public function addToKeyValueOfstringArrayOfstringty7Ep6D1(\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountKeyValueOfstringArrayOfstringty7Ep6D1 $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountKeyValueOfstringArrayOfstringty7Ep6D1) {
            throw new \InvalidArgumentException(sprintf('The KeyValueOfstringArrayOfstringty7Ep6D1 property can only contain items of type \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountKeyValueOfstringArrayOfstringty7Ep6D1, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->KeyValueOfstringArrayOfstringty7Ep6D1[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountKeyValueOfstringArrayOfstringty7Ep6D1|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountKeyValueOfstringArrayOfstringty7Ep6D1|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountKeyValueOfstringArrayOfstringty7Ep6D1|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountKeyValueOfstringArrayOfstringty7Ep6D1|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountKeyValueOfstringArrayOfstringty7Ep6D1|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string KeyValueOfstringArrayOfstringty7Ep6D1
     */
    public function getAttributeName(): string
    {
        return 'KeyValueOfstringArrayOfstringty7Ep6D1';
    }
}
