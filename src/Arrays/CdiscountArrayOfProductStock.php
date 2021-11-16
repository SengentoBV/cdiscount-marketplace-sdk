<?php

declare(strict_types=1);

namespace SengentoBV\CdiscountMarketplaceSdk\Arrays;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfProductStock Arrays
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfProductStock
 * @package Cdiscount
 * @subpackage Arrays
 */
class CdiscountArrayOfProductStock extends AbstractStructArrayBase
{
    /**
     * The ProductStock
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountProductStock[]
     */
    protected ?array $ProductStock = null;
    /**
     * Constructor method for ArrayOfProductStock
     * @uses CdiscountArrayOfProductStock::setProductStock()
     * @param \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountProductStock[] $productStock
     */
    public function __construct(?array $productStock = null)
    {
        $this
            ->setProductStock($productStock);
    }
    /**
     * Get ProductStock value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountProductStock[]
     */
    public function getProductStock(): ?array
    {
        return isset($this->ProductStock) ? $this->ProductStock : null;
    }
    /**
     * This method is responsible for validating the values passed to the setProductStock method
     * This method is willingly generated in order to preserve the one-line inline validation within the setProductStock method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateProductStockForArrayConstraintsFromSetProductStock(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfProductStockProductStockItem) {
            // validation for constraint: itemType
            if (!$arrayOfProductStockProductStockItem instanceof \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountProductStock) {
                $invalidValues[] = is_object($arrayOfProductStockProductStockItem) ? get_class($arrayOfProductStockProductStockItem) : sprintf('%s(%s)', gettype($arrayOfProductStockProductStockItem), var_export($arrayOfProductStockProductStockItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The ProductStock property can only contain items of type \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountProductStock, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set ProductStock value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws InvalidArgumentException
     * @param \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountProductStock[] $productStock
     * @return \SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfProductStock
     */
    public function setProductStock(?array $productStock = null): self
    {
        // validation for constraint: array
        if ('' !== ($productStockArrayErrorMessage = self::validateProductStockForArrayConstraintsFromSetProductStock($productStock))) {
            throw new InvalidArgumentException($productStockArrayErrorMessage, __LINE__);
        }
        if (is_null($productStock) || (is_array($productStock) && empty($productStock))) {
            unset($this->ProductStock);
        } else {
            $this->ProductStock = $productStock;
        }
        
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountProductStock|null
     */
    public function current(): ?\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountProductStock
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountProductStock|null
     */
    public function item($index): ?\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountProductStock
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountProductStock|null
     */
    public function first(): ?\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountProductStock
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountProductStock|null
     */
    public function last(): ?\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountProductStock
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountProductStock|null
     */
    public function offsetGet($offset): ?\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountProductStock
    {
        return parent::offsetGet($offset);
    }
    /**
     * Add element to array
     * @see AbstractStructArrayBase::add()
     * @throws InvalidArgumentException
     * @param \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountProductStock $item
     * @return \SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfProductStock
     */
    public function add($item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountProductStock) {
            throw new InvalidArgumentException(sprintf('The ProductStock property can only contain items of type \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountProductStock, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        return parent::add($item);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string ProductStock
     */
    public function getAttributeName(): string
    {
        return 'ProductStock';
    }
}
