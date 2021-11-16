<?php

declare(strict_types=1);

namespace SengentoBV\CdiscountMarketplaceSdk\Arrays;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfParcelInfos Arrays
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfParcelInfos
 * @package Cdiscount
 * @subpackage Arrays
 */
class CdiscountArrayOfParcelInfos extends AbstractStructArrayBase
{
    /**
     * The ParcelInfos
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountParcelInfos[]
     */
    protected ?array $ParcelInfos = null;
    /**
     * Constructor method for ArrayOfParcelInfos
     * @uses CdiscountArrayOfParcelInfos::setParcelInfos()
     * @param \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountParcelInfos[] $parcelInfos
     */
    public function __construct(?array $parcelInfos = null)
    {
        $this
            ->setParcelInfos($parcelInfos);
    }
    /**
     * Get ParcelInfos value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountParcelInfos[]
     */
    public function getParcelInfos(): ?array
    {
        return isset($this->ParcelInfos) ? $this->ParcelInfos : null;
    }
    /**
     * This method is responsible for validating the values passed to the setParcelInfos method
     * This method is willingly generated in order to preserve the one-line inline validation within the setParcelInfos method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateParcelInfosForArrayConstraintsFromSetParcelInfos(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfParcelInfosParcelInfosItem) {
            // validation for constraint: itemType
            if (!$arrayOfParcelInfosParcelInfosItem instanceof \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountParcelInfos) {
                $invalidValues[] = is_object($arrayOfParcelInfosParcelInfosItem) ? get_class($arrayOfParcelInfosParcelInfosItem) : sprintf('%s(%s)', gettype($arrayOfParcelInfosParcelInfosItem), var_export($arrayOfParcelInfosParcelInfosItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The ParcelInfos property can only contain items of type \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountParcelInfos, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set ParcelInfos value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws InvalidArgumentException
     * @param \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountParcelInfos[] $parcelInfos
     * @return \SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfParcelInfos
     */
    public function setParcelInfos(?array $parcelInfos = null): self
    {
        // validation for constraint: array
        if ('' !== ($parcelInfosArrayErrorMessage = self::validateParcelInfosForArrayConstraintsFromSetParcelInfos($parcelInfos))) {
            throw new InvalidArgumentException($parcelInfosArrayErrorMessage, __LINE__);
        }
        if (is_null($parcelInfos) || (is_array($parcelInfos) && empty($parcelInfos))) {
            unset($this->ParcelInfos);
        } else {
            $this->ParcelInfos = $parcelInfos;
        }
        
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountParcelInfos|null
     */
    public function current(): ?\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountParcelInfos
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountParcelInfos|null
     */
    public function item($index): ?\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountParcelInfos
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountParcelInfos|null
     */
    public function first(): ?\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountParcelInfos
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountParcelInfos|null
     */
    public function last(): ?\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountParcelInfos
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountParcelInfos|null
     */
    public function offsetGet($offset): ?\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountParcelInfos
    {
        return parent::offsetGet($offset);
    }
    /**
     * Add element to array
     * @see AbstractStructArrayBase::add()
     * @throws InvalidArgumentException
     * @param \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountParcelInfos $item
     * @return \SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfParcelInfos
     */
    public function add($item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountParcelInfos) {
            throw new InvalidArgumentException(sprintf('The ParcelInfos property can only contain items of type \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountParcelInfos, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        return parent::add($item);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string ParcelInfos
     */
    public function getAttributeName(): string
    {
        return 'ParcelInfos';
    }
}
