<?php

namespace SengentoBV\CdiscountMarketplaceSdk\Arrays;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfProduct Arrays
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfProduct
 * @package Cdiscount
 * @subpackage Arrays
 */
class CdiscountArrayOfProduct extends AbstractStructArrayBase
{
    /**
     * The Product
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountProduct[]
     */
    public $Product;
    /**
     * Constructor method for ArrayOfProduct
     * @uses CdiscountArrayOfProduct::setProduct()
     * @param \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountProduct[] $product
     */
    public function __construct(array $product = array())
    {
        $this
            ->setProduct($product);
    }
    /**
     * Get Product value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountProduct[]|null
     */
    public function getProduct()
    {
        return isset($this->Product) ? $this->Product : null;
    }
    /**
     * This method is responsible for validating the values passed to the setProduct method
     * This method is willingly generated in order to preserve the one-line inline validation within the setProduct method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateProductForArrayConstraintsFromSetProduct(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfProductProductItem) {
            // validation for constraint: itemType
            if (!$arrayOfProductProductItem instanceof \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountProduct) {
                $invalidValues[] = is_object($arrayOfProductProductItem) ? get_class($arrayOfProductProductItem) : sprintf('%s(%s)', gettype($arrayOfProductProductItem), var_export($arrayOfProductProductItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Product property can only contain items of type \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountProduct, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Product value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountProduct[] $product
     * @return \SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfProduct
     */
    public function setProduct(array $product = array())
    {
        // validation for constraint: array
        if ('' !== ($productArrayErrorMessage = self::validateProductForArrayConstraintsFromSetProduct($product))) {
            throw new \InvalidArgumentException($productArrayErrorMessage, __LINE__);
        }
        if (is_null($product) || (is_array($product) && empty($product))) {
            unset($this->Product);
        } else {
            $this->Product = $product;
        }
        return $this;
    }
    /**
     * Add item to Product value
     * @throws \InvalidArgumentException
     * @param \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountProduct $item
     * @return \SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfProduct
     */
    public function addToProduct(\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountProduct $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountProduct) {
            throw new \InvalidArgumentException(sprintf('The Product property can only contain items of type \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountProduct, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Product[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountProduct|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountProduct|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountProduct|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountProduct|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountProduct|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string Product
     */
    public function getAttributeName(): string
    {
        return 'Product';
    }
}
