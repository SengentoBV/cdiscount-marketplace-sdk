<?php

namespace SengentoBV\CdiscountMarketplaceSdk\Arrays;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfKeyValueOfintstring Arrays
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfKeyValueOfintstring
 * @package Cdiscount
 * @subpackage Arrays
 */
class CdiscountArrayOfKeyValueOfintstring extends AbstractStructArrayBase
{
    /**
     * The KeyValueOfintstring
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountKeyValueOfintstring[]
     */
    public $KeyValueOfintstring;
    /**
     * Constructor method for ArrayOfKeyValueOfintstring
     * @uses CdiscountArrayOfKeyValueOfintstring::setKeyValueOfintstring()
     * @param \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountKeyValueOfintstring[] $keyValueOfintstring
     */
    public function __construct(array $keyValueOfintstring = array())
    {
        $this
            ->setKeyValueOfintstring($keyValueOfintstring);
    }
    /**
     * Get KeyValueOfintstring value
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountKeyValueOfintstring[]|null
     */
    public function getKeyValueOfintstring()
    {
        return $this->KeyValueOfintstring;
    }
    /**
     * This method is responsible for validating the values passed to the setKeyValueOfintstring method
     * This method is willingly generated in order to preserve the one-line inline validation within the setKeyValueOfintstring method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateKeyValueOfintstringForArrayConstraintsFromSetKeyValueOfintstring(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfKeyValueOfintstringKeyValueOfintstringItem) {
            // validation for constraint: itemType
            if (!$arrayOfKeyValueOfintstringKeyValueOfintstringItem instanceof \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountKeyValueOfintstring) {
                $invalidValues[] = is_object($arrayOfKeyValueOfintstringKeyValueOfintstringItem) ? get_class($arrayOfKeyValueOfintstringKeyValueOfintstringItem) : sprintf('%s(%s)', gettype($arrayOfKeyValueOfintstringKeyValueOfintstringItem), var_export($arrayOfKeyValueOfintstringKeyValueOfintstringItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The KeyValueOfintstring property can only contain items of type \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountKeyValueOfintstring, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set KeyValueOfintstring value
     * @throws \InvalidArgumentException
     * @param \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountKeyValueOfintstring[] $keyValueOfintstring
     * @return \SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfKeyValueOfintstring
     */
    public function setKeyValueOfintstring(array $keyValueOfintstring = array())
    {
        // validation for constraint: array
        if ('' !== ($keyValueOfintstringArrayErrorMessage = self::validateKeyValueOfintstringForArrayConstraintsFromSetKeyValueOfintstring($keyValueOfintstring))) {
            throw new \InvalidArgumentException($keyValueOfintstringArrayErrorMessage, __LINE__);
        }
        $this->KeyValueOfintstring = $keyValueOfintstring;
        return $this;
    }
    /**
     * Add item to KeyValueOfintstring value
     * @throws \InvalidArgumentException
     * @param \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountKeyValueOfintstring $item
     * @return \SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfKeyValueOfintstring
     */
    public function addToKeyValueOfintstring(\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountKeyValueOfintstring $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountKeyValueOfintstring) {
            throw new \InvalidArgumentException(sprintf('The KeyValueOfintstring property can only contain items of type \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountKeyValueOfintstring, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->KeyValueOfintstring[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountKeyValueOfintstring|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountKeyValueOfintstring|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountKeyValueOfintstring|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountKeyValueOfintstring|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountKeyValueOfintstring|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string KeyValueOfintstring
     */
    public function getAttributeName(): string
    {
        return 'KeyValueOfintstring';
    }
}
