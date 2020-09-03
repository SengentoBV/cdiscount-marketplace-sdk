<?php

namespace SengentoBV\CdiscountMarketplaceSdk\Arrays;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfProductByIdentifier Arrays
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfProductByIdentifier
 * @package Cdiscount
 * @subpackage Arrays
 */
class CdiscountArrayOfProductByIdentifier extends AbstractStructArrayBase
{
    /**
     * The ProductByIdentifier
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountProductByIdentifier[]
     */
    public $ProductByIdentifier;
    /**
     * Constructor method for ArrayOfProductByIdentifier
     * @uses CdiscountArrayOfProductByIdentifier::setProductByIdentifier()
     * @param \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountProductByIdentifier[] $productByIdentifier
     */
    public function __construct(array $productByIdentifier = array())
    {
        $this
            ->setProductByIdentifier($productByIdentifier);
    }
    /**
     * Get ProductByIdentifier value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountProductByIdentifier[]|null
     */
    public function getProductByIdentifier()
    {
        return isset($this->ProductByIdentifier) ? $this->ProductByIdentifier : null;
    }
    /**
     * This method is responsible for validating the values passed to the setProductByIdentifier method
     * This method is willingly generated in order to preserve the one-line inline validation within the setProductByIdentifier method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateProductByIdentifierForArrayConstraintsFromSetProductByIdentifier(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfProductByIdentifierProductByIdentifierItem) {
            // validation for constraint: itemType
            if (!$arrayOfProductByIdentifierProductByIdentifierItem instanceof \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountProductByIdentifier) {
                $invalidValues[] = is_object($arrayOfProductByIdentifierProductByIdentifierItem) ? get_class($arrayOfProductByIdentifierProductByIdentifierItem) : sprintf('%s(%s)', gettype($arrayOfProductByIdentifierProductByIdentifierItem), var_export($arrayOfProductByIdentifierProductByIdentifierItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The ProductByIdentifier property can only contain items of type \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountProductByIdentifier, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set ProductByIdentifier value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountProductByIdentifier[] $productByIdentifier
     * @return \SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfProductByIdentifier
     */
    public function setProductByIdentifier(array $productByIdentifier = array())
    {
        // validation for constraint: array
        if ('' !== ($productByIdentifierArrayErrorMessage = self::validateProductByIdentifierForArrayConstraintsFromSetProductByIdentifier($productByIdentifier))) {
            throw new \InvalidArgumentException($productByIdentifierArrayErrorMessage, __LINE__);
        }
        if (is_null($productByIdentifier) || (is_array($productByIdentifier) && empty($productByIdentifier))) {
            unset($this->ProductByIdentifier);
        } else {
            $this->ProductByIdentifier = $productByIdentifier;
        }
        return $this;
    }
    /**
     * Add item to ProductByIdentifier value
     * @throws \InvalidArgumentException
     * @param \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountProductByIdentifier $item
     * @return \SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfProductByIdentifier
     */
    public function addToProductByIdentifier(\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountProductByIdentifier $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountProductByIdentifier) {
            throw new \InvalidArgumentException(sprintf('The ProductByIdentifier property can only contain items of type \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountProductByIdentifier, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->ProductByIdentifier[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountProductByIdentifier|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountProductByIdentifier|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountProductByIdentifier|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountProductByIdentifier|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountProductByIdentifier|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string ProductByIdentifier
     */
    public function getAttributeName()
    {
        return 'ProductByIdentifier';
    }
}
