<?php

declare(strict_types=1);

namespace SengentoBV\CdiscountMarketplaceSdk\Arrays;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfParcelShop Arrays
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfParcelShop
 * @package Cdiscount
 * @subpackage Arrays
 */
class CdiscountArrayOfParcelShop extends AbstractStructArrayBase
{
    /**
     * The ParcelShop
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountParcelShop[]
     */
    protected ?array $ParcelShop = null;
    /**
     * Constructor method for ArrayOfParcelShop
     * @uses CdiscountArrayOfParcelShop::setParcelShop()
     * @param \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountParcelShop[] $parcelShop
     */
    public function __construct(?array $parcelShop = null)
    {
        $this
            ->setParcelShop($parcelShop);
    }
    /**
     * Get ParcelShop value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountParcelShop[]
     */
    public function getParcelShop(): ?array
    {
        return isset($this->ParcelShop) ? $this->ParcelShop : null;
    }
    /**
     * This method is responsible for validating the values passed to the setParcelShop method
     * This method is willingly generated in order to preserve the one-line inline validation within the setParcelShop method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateParcelShopForArrayConstraintsFromSetParcelShop(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfParcelShopParcelShopItem) {
            // validation for constraint: itemType
            if (!$arrayOfParcelShopParcelShopItem instanceof \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountParcelShop) {
                $invalidValues[] = is_object($arrayOfParcelShopParcelShopItem) ? get_class($arrayOfParcelShopParcelShopItem) : sprintf('%s(%s)', gettype($arrayOfParcelShopParcelShopItem), var_export($arrayOfParcelShopParcelShopItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The ParcelShop property can only contain items of type \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountParcelShop, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set ParcelShop value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws InvalidArgumentException
     * @param \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountParcelShop[] $parcelShop
     * @return \SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfParcelShop
     */
    public function setParcelShop(?array $parcelShop = null): self
    {
        // validation for constraint: array
        if ('' !== ($parcelShopArrayErrorMessage = self::validateParcelShopForArrayConstraintsFromSetParcelShop($parcelShop))) {
            throw new InvalidArgumentException($parcelShopArrayErrorMessage, __LINE__);
        }
        if (is_null($parcelShop) || (is_array($parcelShop) && empty($parcelShop))) {
            unset($this->ParcelShop);
        } else {
            $this->ParcelShop = $parcelShop;
        }
        
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountParcelShop|null
     */
    public function current(): ?\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountParcelShop
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountParcelShop|null
     */
    public function item($index): ?\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountParcelShop
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountParcelShop|null
     */
    public function first(): ?\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountParcelShop
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountParcelShop|null
     */
    public function last(): ?\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountParcelShop
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountParcelShop|null
     */
    public function offsetGet($offset): ?\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountParcelShop
    {
        return parent::offsetGet($offset);
    }
    /**
     * Add element to array
     * @see AbstractStructArrayBase::add()
     * @throws InvalidArgumentException
     * @param \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountParcelShop $item
     * @return \SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfParcelShop
     */
    public function add($item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountParcelShop) {
            throw new InvalidArgumentException(sprintf('The ParcelShop property can only contain items of type \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountParcelShop, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        return parent::add($item);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string ParcelShop
     */
    public function getAttributeName(): string
    {
        return 'ParcelShop';
    }
}
