<?php

declare(strict_types=1);

namespace SengentoBV\CdiscountMarketplaceSdk\Arrays;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfParcelActionResult Arrays
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfParcelActionResult
 * @package Cdiscount
 * @subpackage Arrays
 */
class CdiscountArrayOfParcelActionResult extends AbstractStructArrayBase
{
    /**
     * The ParcelActionResult
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountParcelActionResult[]
     */
    protected ?array $ParcelActionResult = null;
    /**
     * Constructor method for ArrayOfParcelActionResult
     * @uses CdiscountArrayOfParcelActionResult::setParcelActionResult()
     * @param \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountParcelActionResult[] $parcelActionResult
     */
    public function __construct(?array $parcelActionResult = null)
    {
        $this
            ->setParcelActionResult($parcelActionResult);
    }
    /**
     * Get ParcelActionResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountParcelActionResult[]
     */
    public function getParcelActionResult(): ?array
    {
        return isset($this->ParcelActionResult) ? $this->ParcelActionResult : null;
    }
    /**
     * This method is responsible for validating the values passed to the setParcelActionResult method
     * This method is willingly generated in order to preserve the one-line inline validation within the setParcelActionResult method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateParcelActionResultForArrayConstraintsFromSetParcelActionResult(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfParcelActionResultParcelActionResultItem) {
            // validation for constraint: itemType
            if (!$arrayOfParcelActionResultParcelActionResultItem instanceof \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountParcelActionResult) {
                $invalidValues[] = is_object($arrayOfParcelActionResultParcelActionResultItem) ? get_class($arrayOfParcelActionResultParcelActionResultItem) : sprintf('%s(%s)', gettype($arrayOfParcelActionResultParcelActionResultItem), var_export($arrayOfParcelActionResultParcelActionResultItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The ParcelActionResult property can only contain items of type \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountParcelActionResult, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set ParcelActionResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws InvalidArgumentException
     * @param \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountParcelActionResult[] $parcelActionResult
     * @return \SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfParcelActionResult
     */
    public function setParcelActionResult(?array $parcelActionResult = null): self
    {
        // validation for constraint: array
        if ('' !== ($parcelActionResultArrayErrorMessage = self::validateParcelActionResultForArrayConstraintsFromSetParcelActionResult($parcelActionResult))) {
            throw new InvalidArgumentException($parcelActionResultArrayErrorMessage, __LINE__);
        }
        if (is_null($parcelActionResult) || (is_array($parcelActionResult) && empty($parcelActionResult))) {
            unset($this->ParcelActionResult);
        } else {
            $this->ParcelActionResult = $parcelActionResult;
        }
        
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountParcelActionResult|null
     */
    public function current(): ?\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountParcelActionResult
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountParcelActionResult|null
     */
    public function item($index): ?\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountParcelActionResult
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountParcelActionResult|null
     */
    public function first(): ?\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountParcelActionResult
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountParcelActionResult|null
     */
    public function last(): ?\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountParcelActionResult
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountParcelActionResult|null
     */
    public function offsetGet($offset): ?\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountParcelActionResult
    {
        return parent::offsetGet($offset);
    }
    /**
     * Add element to array
     * @see AbstractStructArrayBase::add()
     * @throws InvalidArgumentException
     * @param \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountParcelActionResult $item
     * @return \SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfParcelActionResult
     */
    public function add($item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountParcelActionResult) {
            throw new InvalidArgumentException(sprintf('The ParcelActionResult property can only contain items of type \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountParcelActionResult, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        return parent::add($item);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string ParcelActionResult
     */
    public function getAttributeName(): string
    {
        return 'ParcelActionResult';
    }
}
