<?php

namespace SengentoBV\CdiscountMarketplaceSdk\Arrays;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfOfferProduct Arrays
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfOfferProduct
 * @package Cdiscount
 * @subpackage Arrays
 */
class CdiscountArrayOfOfferProduct extends AbstractStructArrayBase
{
    /**
     * The OfferProduct
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountOfferProduct[]
     */
    public $OfferProduct;
    /**
     * Constructor method for ArrayOfOfferProduct
     * @uses CdiscountArrayOfOfferProduct::setOfferProduct()
     * @param \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountOfferProduct[] $offerProduct
     */
    public function __construct(array $offerProduct = array())
    {
        $this
            ->setOfferProduct($offerProduct);
    }
    /**
     * Get OfferProduct value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountOfferProduct[]|null
     */
    public function getOfferProduct()
    {
        return isset($this->OfferProduct) ? $this->OfferProduct : null;
    }
    /**
     * This method is responsible for validating the values passed to the setOfferProduct method
     * This method is willingly generated in order to preserve the one-line inline validation within the setOfferProduct method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateOfferProductForArrayConstraintsFromSetOfferProduct(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfOfferProductOfferProductItem) {
            // validation for constraint: itemType
            if (!$arrayOfOfferProductOfferProductItem instanceof \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountOfferProduct) {
                $invalidValues[] = is_object($arrayOfOfferProductOfferProductItem) ? get_class($arrayOfOfferProductOfferProductItem) : sprintf('%s(%s)', gettype($arrayOfOfferProductOfferProductItem), var_export($arrayOfOfferProductOfferProductItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The OfferProduct property can only contain items of type \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountOfferProduct, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set OfferProduct value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountOfferProduct[] $offerProduct
     * @return \SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfOfferProduct
     */
    public function setOfferProduct(array $offerProduct = array())
    {
        // validation for constraint: array
        if ('' !== ($offerProductArrayErrorMessage = self::validateOfferProductForArrayConstraintsFromSetOfferProduct($offerProduct))) {
            throw new \InvalidArgumentException($offerProductArrayErrorMessage, __LINE__);
        }
        if (is_null($offerProduct) || (is_array($offerProduct) && empty($offerProduct))) {
            unset($this->OfferProduct);
        } else {
            $this->OfferProduct = $offerProduct;
        }
        return $this;
    }
    /**
     * Add item to OfferProduct value
     * @throws \InvalidArgumentException
     * @param \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountOfferProduct $item
     * @return \SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfOfferProduct
     */
    public function addToOfferProduct(\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountOfferProduct $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountOfferProduct) {
            throw new \InvalidArgumentException(sprintf('The OfferProduct property can only contain items of type \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountOfferProduct, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->OfferProduct[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountOfferProduct|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountOfferProduct|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountOfferProduct|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountOfferProduct|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountOfferProduct|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string OfferProduct
     */
    public function getAttributeName(): string
    {
        return 'OfferProduct';
    }
}
