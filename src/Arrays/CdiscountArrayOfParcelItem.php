<?php

namespace SengentoBV\CdiscountMarketplaceSdk\Arrays;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfParcelItem Arrays
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfParcelItem
 * @package Cdiscount
 * @subpackage Arrays
 */
class CdiscountArrayOfParcelItem extends AbstractStructArrayBase
{
    /**
     * The ParcelItem
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountParcelItem[]
     */
    public $ParcelItem;
    /**
     * Constructor method for ArrayOfParcelItem
     * @uses CdiscountArrayOfParcelItem::setParcelItem()
     * @param \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountParcelItem[] $parcelItem
     */
    public function __construct(array $parcelItem = array())
    {
        $this
            ->setParcelItem($parcelItem);
    }
    /**
     * Get ParcelItem value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountParcelItem[]|null
     */
    public function getParcelItem()
    {
        return isset($this->ParcelItem) ? $this->ParcelItem : null;
    }
    /**
     * This method is responsible for validating the values passed to the setParcelItem method
     * This method is willingly generated in order to preserve the one-line inline validation within the setParcelItem method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateParcelItemForArrayConstraintsFromSetParcelItem(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfParcelItemParcelItemItem) {
            // validation for constraint: itemType
            if (!$arrayOfParcelItemParcelItemItem instanceof \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountParcelItem) {
                $invalidValues[] = is_object($arrayOfParcelItemParcelItemItem) ? get_class($arrayOfParcelItemParcelItemItem) : sprintf('%s(%s)', gettype($arrayOfParcelItemParcelItemItem), var_export($arrayOfParcelItemParcelItemItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The ParcelItem property can only contain items of type \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountParcelItem, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set ParcelItem value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountParcelItem[] $parcelItem
     * @return \SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfParcelItem
     */
    public function setParcelItem(array $parcelItem = array())
    {
        // validation for constraint: array
        if ('' !== ($parcelItemArrayErrorMessage = self::validateParcelItemForArrayConstraintsFromSetParcelItem($parcelItem))) {
            throw new \InvalidArgumentException($parcelItemArrayErrorMessage, __LINE__);
        }
        if (is_null($parcelItem) || (is_array($parcelItem) && empty($parcelItem))) {
            unset($this->ParcelItem);
        } else {
            $this->ParcelItem = $parcelItem;
        }
        return $this;
    }
    /**
     * Add item to ParcelItem value
     * @throws \InvalidArgumentException
     * @param \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountParcelItem $item
     * @return \SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfParcelItem
     */
    public function addToParcelItem(\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountParcelItem $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountParcelItem) {
            throw new \InvalidArgumentException(sprintf('The ParcelItem property can only contain items of type \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountParcelItem, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->ParcelItem[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountParcelItem|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountParcelItem|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountParcelItem|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountParcelItem|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountParcelItem|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string ParcelItem
     */
    public function getAttributeName()
    {
        return 'ParcelItem';
    }
}
