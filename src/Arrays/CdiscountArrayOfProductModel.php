<?php

namespace SengentoBV\CdiscountMarketplaceSdk\Arrays;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfProductModel Arrays
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfProductModel
 * @package Cdiscount
 * @subpackage Arrays
 */
class CdiscountArrayOfProductModel extends AbstractStructArrayBase
{
    /**
     * The ProductModel
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountProductModel[]
     */
    public $ProductModel;
    /**
     * Constructor method for ArrayOfProductModel
     * @uses CdiscountArrayOfProductModel::setProductModel()
     * @param \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountProductModel[] $productModel
     */
    public function __construct(array $productModel = array())
    {
        $this
            ->setProductModel($productModel);
    }
    /**
     * Get ProductModel value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountProductModel[]|null
     */
    public function getProductModel()
    {
        return isset($this->ProductModel) ? $this->ProductModel : null;
    }
    /**
     * This method is responsible for validating the values passed to the setProductModel method
     * This method is willingly generated in order to preserve the one-line inline validation within the setProductModel method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateProductModelForArrayConstraintsFromSetProductModel(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfProductModelProductModelItem) {
            // validation for constraint: itemType
            if (!$arrayOfProductModelProductModelItem instanceof \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountProductModel) {
                $invalidValues[] = is_object($arrayOfProductModelProductModelItem) ? get_class($arrayOfProductModelProductModelItem) : sprintf('%s(%s)', gettype($arrayOfProductModelProductModelItem), var_export($arrayOfProductModelProductModelItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The ProductModel property can only contain items of type \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountProductModel, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set ProductModel value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountProductModel[] $productModel
     * @return \SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfProductModel
     */
    public function setProductModel(array $productModel = array())
    {
        // validation for constraint: array
        if ('' !== ($productModelArrayErrorMessage = self::validateProductModelForArrayConstraintsFromSetProductModel($productModel))) {
            throw new \InvalidArgumentException($productModelArrayErrorMessage, __LINE__);
        }
        if (is_null($productModel) || (is_array($productModel) && empty($productModel))) {
            unset($this->ProductModel);
        } else {
            $this->ProductModel = $productModel;
        }
        return $this;
    }
    /**
     * Add item to ProductModel value
     * @throws \InvalidArgumentException
     * @param \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountProductModel $item
     * @return \SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfProductModel
     */
    public function addToProductModel(\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountProductModel $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountProductModel) {
            throw new \InvalidArgumentException(sprintf('The ProductModel property can only contain items of type \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountProductModel, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->ProductModel[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountProductModel|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountProductModel|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountProductModel|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountProductModel|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountProductModel|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string ProductModel
     */
    public function getAttributeName()
    {
        return 'ProductModel';
    }
}
