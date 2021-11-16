<?php

namespace SengentoBV\CdiscountMarketplaceSdk\Arrays;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfAssociatedOrderInfo Arrays
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfAssociatedOrderInfo
 * @package Cdiscount
 * @subpackage Arrays
 */
class CdiscountArrayOfAssociatedOrderInfo extends AbstractStructArrayBase
{
    /**
     * The AssociatedOrderInfo
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountAssociatedOrderInfo[]
     */
    public $AssociatedOrderInfo;
    /**
     * Constructor method for ArrayOfAssociatedOrderInfo
     * @uses CdiscountArrayOfAssociatedOrderInfo::setAssociatedOrderInfo()
     * @param \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountAssociatedOrderInfo[] $associatedOrderInfo
     */
    public function __construct(array $associatedOrderInfo = array())
    {
        $this
            ->setAssociatedOrderInfo($associatedOrderInfo);
    }
    /**
     * Get AssociatedOrderInfo value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountAssociatedOrderInfo[]|null
     */
    public function getAssociatedOrderInfo()
    {
        return isset($this->AssociatedOrderInfo) ? $this->AssociatedOrderInfo : null;
    }
    /**
     * This method is responsible for validating the values passed to the setAssociatedOrderInfo method
     * This method is willingly generated in order to preserve the one-line inline validation within the setAssociatedOrderInfo method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateAssociatedOrderInfoForArrayConstraintsFromSetAssociatedOrderInfo(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfAssociatedOrderInfoAssociatedOrderInfoItem) {
            // validation for constraint: itemType
            if (!$arrayOfAssociatedOrderInfoAssociatedOrderInfoItem instanceof \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountAssociatedOrderInfo) {
                $invalidValues[] = is_object($arrayOfAssociatedOrderInfoAssociatedOrderInfoItem) ? get_class($arrayOfAssociatedOrderInfoAssociatedOrderInfoItem) : sprintf('%s(%s)', gettype($arrayOfAssociatedOrderInfoAssociatedOrderInfoItem), var_export($arrayOfAssociatedOrderInfoAssociatedOrderInfoItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The AssociatedOrderInfo property can only contain items of type \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountAssociatedOrderInfo, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set AssociatedOrderInfo value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountAssociatedOrderInfo[] $associatedOrderInfo
     * @return \SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfAssociatedOrderInfo
     */
    public function setAssociatedOrderInfo(array $associatedOrderInfo = array())
    {
        // validation for constraint: array
        if ('' !== ($associatedOrderInfoArrayErrorMessage = self::validateAssociatedOrderInfoForArrayConstraintsFromSetAssociatedOrderInfo($associatedOrderInfo))) {
            throw new \InvalidArgumentException($associatedOrderInfoArrayErrorMessage, __LINE__);
        }
        if (is_null($associatedOrderInfo) || (is_array($associatedOrderInfo) && empty($associatedOrderInfo))) {
            unset($this->AssociatedOrderInfo);
        } else {
            $this->AssociatedOrderInfo = $associatedOrderInfo;
        }
        return $this;
    }
    /**
     * Add item to AssociatedOrderInfo value
     * @throws \InvalidArgumentException
     * @param \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountAssociatedOrderInfo $item
     * @return \SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfAssociatedOrderInfo
     */
    public function addToAssociatedOrderInfo(\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountAssociatedOrderInfo $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountAssociatedOrderInfo) {
            throw new \InvalidArgumentException(sprintf('The AssociatedOrderInfo property can only contain items of type \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountAssociatedOrderInfo, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->AssociatedOrderInfo[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountAssociatedOrderInfo|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountAssociatedOrderInfo|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountAssociatedOrderInfo|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountAssociatedOrderInfo|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountAssociatedOrderInfo|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string AssociatedOrderInfo
     */
    public function getAttributeName(): string
    {
        return 'AssociatedOrderInfo';
    }
}
