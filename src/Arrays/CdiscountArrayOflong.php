<?php

declare(strict_types=1);

namespace SengentoBV\CdiscountMarketplaceSdk\Arrays;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOflong Arrays
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOflong
 * @package Cdiscount
 * @subpackage Arrays
 */
class CdiscountArrayOflong extends AbstractStructArrayBase
{
    /**
     * The long
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var int[]
     */
    protected ?array $long = null;
    /**
     * Constructor method for ArrayOflong
     * @uses CdiscountArrayOflong::setLong()
     * @param int[] $long
     */
    public function __construct(?array $long = null)
    {
        $this
            ->setLong($long);
    }
    /**
     * Get long value
     * @return int[]
     */
    public function getLong(): ?array
    {
        return $this->long;
    }
    /**
     * This method is responsible for validating the values passed to the setLong method
     * This method is willingly generated in order to preserve the one-line inline validation within the setLong method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateLongForArrayConstraintsFromSetLong(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOflongLongItem) {
            // validation for constraint: itemType
            if (!(is_int($arrayOflongLongItem) || ctype_digit($arrayOflongLongItem))) {
                $invalidValues[] = is_object($arrayOflongLongItem) ? get_class($arrayOflongLongItem) : sprintf('%s(%s)', gettype($arrayOflongLongItem), var_export($arrayOflongLongItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The long property can only contain items of type int, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set long value
     * @throws InvalidArgumentException
     * @param int[] $long
     * @return \SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOflong
     */
    public function setLong(?array $long = null): self
    {
        // validation for constraint: array
        if ('' !== ($longArrayErrorMessage = self::validateLongForArrayConstraintsFromSetLong($long))) {
            throw new InvalidArgumentException($longArrayErrorMessage, __LINE__);
        }
        $this->long = $long;
        
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return int|null
     */
    public function current(): ?int
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return int|null
     */
    public function item($index): ?int
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return int|null
     */
    public function first(): ?int
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return int|null
     */
    public function last(): ?int
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return int|null
     */
    public function offsetGet($offset): ?int
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string long
     */
    public function getAttributeName(): string
    {
        return 'long';
    }
}
