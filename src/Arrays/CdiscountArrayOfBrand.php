<?php

namespace SengentoBV\CdiscountMarketplaceSdk\Arrays;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfBrand Arrays
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfBrand
 * @package Cdiscount
 * @subpackage Arrays
 */
class CdiscountArrayOfBrand extends AbstractStructArrayBase
{
    /**
     * The Brand
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountBrand[]
     */
    public $Brand;
    /**
     * Constructor method for ArrayOfBrand
     * @uses CdiscountArrayOfBrand::setBrand()
     * @param \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountBrand[] $brand
     */
    public function __construct(array $brand = array())
    {
        $this
            ->setBrand($brand);
    }
    /**
     * Get Brand value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountBrand[]|null
     */
    public function getBrand()
    {
        return isset($this->Brand) ? $this->Brand : null;
    }
    /**
     * This method is responsible for validating the values passed to the setBrand method
     * This method is willingly generated in order to preserve the one-line inline validation within the setBrand method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateBrandForArrayConstraintsFromSetBrand(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfBrandBrandItem) {
            // validation for constraint: itemType
            if (!$arrayOfBrandBrandItem instanceof \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountBrand) {
                $invalidValues[] = is_object($arrayOfBrandBrandItem) ? get_class($arrayOfBrandBrandItem) : sprintf('%s(%s)', gettype($arrayOfBrandBrandItem), var_export($arrayOfBrandBrandItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Brand property can only contain items of type \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountBrand, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Brand value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountBrand[] $brand
     * @return \SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfBrand
     */
    public function setBrand(array $brand = array())
    {
        // validation for constraint: array
        if ('' !== ($brandArrayErrorMessage = self::validateBrandForArrayConstraintsFromSetBrand($brand))) {
            throw new \InvalidArgumentException($brandArrayErrorMessage, __LINE__);
        }
        if (is_null($brand) || (is_array($brand) && empty($brand))) {
            unset($this->Brand);
        } else {
            $this->Brand = $brand;
        }
        return $this;
    }
    /**
     * Add item to Brand value
     * @throws \InvalidArgumentException
     * @param \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountBrand $item
     * @return \SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfBrand
     */
    public function addToBrand(\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountBrand $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountBrand) {
            throw new \InvalidArgumentException(sprintf('The Brand property can only contain items of type \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountBrand, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Brand[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountBrand|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountBrand|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountBrand|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountBrand|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountBrand|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string Brand
     */
    public function getAttributeName()
    {
        return 'Brand';
    }
}
