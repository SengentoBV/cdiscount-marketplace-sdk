<?php

namespace SengentoBV\CdiscountMarketplaceSdk\Arrays;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfParcel Arrays
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfParcel
 * @package Cdiscount
 * @subpackage Arrays
 */
class CdiscountArrayOfParcel extends AbstractStructArrayBase
{
    /**
     * The Parcel
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountParcel[]
     */
    public $Parcel;
    /**
     * Constructor method for ArrayOfParcel
     * @uses CdiscountArrayOfParcel::setParcel()
     * @param \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountParcel[] $parcel
     */
    public function __construct(array $parcel = array())
    {
        $this
            ->setParcel($parcel);
    }
    /**
     * Get Parcel value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountParcel[]|null
     */
    public function getParcel()
    {
        return isset($this->Parcel) ? $this->Parcel : null;
    }
    /**
     * This method is responsible for validating the values passed to the setParcel method
     * This method is willingly generated in order to preserve the one-line inline validation within the setParcel method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateParcelForArrayConstraintsFromSetParcel(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfParcelParcelItem) {
            // validation for constraint: itemType
            if (!$arrayOfParcelParcelItem instanceof \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountParcel) {
                $invalidValues[] = is_object($arrayOfParcelParcelItem) ? get_class($arrayOfParcelParcelItem) : sprintf('%s(%s)', gettype($arrayOfParcelParcelItem), var_export($arrayOfParcelParcelItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Parcel property can only contain items of type \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountParcel, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Parcel value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountParcel[] $parcel
     * @return \SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfParcel
     */
    public function setParcel(array $parcel = array())
    {
        // validation for constraint: array
        if ('' !== ($parcelArrayErrorMessage = self::validateParcelForArrayConstraintsFromSetParcel($parcel))) {
            throw new \InvalidArgumentException($parcelArrayErrorMessage, __LINE__);
        }
        if (is_null($parcel) || (is_array($parcel) && empty($parcel))) {
            unset($this->Parcel);
        } else {
            $this->Parcel = $parcel;
        }
        return $this;
    }
    /**
     * Add item to Parcel value
     * @throws \InvalidArgumentException
     * @param \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountParcel $item
     * @return \SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfParcel
     */
    public function addToParcel(\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountParcel $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountParcel) {
            throw new \InvalidArgumentException(sprintf('The Parcel property can only contain items of type \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountParcel, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Parcel[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountParcel|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountParcel|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountParcel|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountParcel|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountParcel|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string Parcel
     */
    public function getAttributeName()
    {
        return 'Parcel';
    }
}
