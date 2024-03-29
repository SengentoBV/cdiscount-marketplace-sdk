<?php

declare(strict_types=1);

namespace SengentoBV\CdiscountMarketplaceSdk\Arrays;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfCloseDiscussionResult Arrays
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfCloseDiscussionResult
 * @package Cdiscount
 * @subpackage Arrays
 */
class CdiscountArrayOfCloseDiscussionResult extends AbstractStructArrayBase
{
    /**
     * The CloseDiscussionResult
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountCloseDiscussionResult[]
     */
    protected ?array $CloseDiscussionResult = null;
    /**
     * Constructor method for ArrayOfCloseDiscussionResult
     * @uses CdiscountArrayOfCloseDiscussionResult::setCloseDiscussionResult()
     * @param \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountCloseDiscussionResult[] $closeDiscussionResult
     */
    public function __construct(?array $closeDiscussionResult = null)
    {
        $this
            ->setCloseDiscussionResult($closeDiscussionResult);
    }
    /**
     * Get CloseDiscussionResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountCloseDiscussionResult[]
     */
    public function getCloseDiscussionResult(): ?array
    {
        return isset($this->CloseDiscussionResult) ? $this->CloseDiscussionResult : null;
    }
    /**
     * This method is responsible for validating the values passed to the setCloseDiscussionResult method
     * This method is willingly generated in order to preserve the one-line inline validation within the setCloseDiscussionResult method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateCloseDiscussionResultForArrayConstraintsFromSetCloseDiscussionResult(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfCloseDiscussionResultCloseDiscussionResultItem) {
            // validation for constraint: itemType
            if (!$arrayOfCloseDiscussionResultCloseDiscussionResultItem instanceof \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountCloseDiscussionResult) {
                $invalidValues[] = is_object($arrayOfCloseDiscussionResultCloseDiscussionResultItem) ? get_class($arrayOfCloseDiscussionResultCloseDiscussionResultItem) : sprintf('%s(%s)', gettype($arrayOfCloseDiscussionResultCloseDiscussionResultItem), var_export($arrayOfCloseDiscussionResultCloseDiscussionResultItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The CloseDiscussionResult property can only contain items of type \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountCloseDiscussionResult, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set CloseDiscussionResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws InvalidArgumentException
     * @param \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountCloseDiscussionResult[] $closeDiscussionResult
     * @return \SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfCloseDiscussionResult
     */
    public function setCloseDiscussionResult(?array $closeDiscussionResult = null): self
    {
        // validation for constraint: array
        if ('' !== ($closeDiscussionResultArrayErrorMessage = self::validateCloseDiscussionResultForArrayConstraintsFromSetCloseDiscussionResult($closeDiscussionResult))) {
            throw new InvalidArgumentException($closeDiscussionResultArrayErrorMessage, __LINE__);
        }
        if (is_null($closeDiscussionResult) || (is_array($closeDiscussionResult) && empty($closeDiscussionResult))) {
            unset($this->CloseDiscussionResult);
        } else {
            $this->CloseDiscussionResult = $closeDiscussionResult;
        }
        
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountCloseDiscussionResult|null
     */
    public function current(): ?\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountCloseDiscussionResult
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountCloseDiscussionResult|null
     */
    public function item($index): ?\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountCloseDiscussionResult
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountCloseDiscussionResult|null
     */
    public function first(): ?\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountCloseDiscussionResult
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountCloseDiscussionResult|null
     */
    public function last(): ?\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountCloseDiscussionResult
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountCloseDiscussionResult|null
     */
    public function offsetGet($offset): ?\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountCloseDiscussionResult
    {
        return parent::offsetGet($offset);
    }
    /**
     * Add element to array
     * @see AbstractStructArrayBase::add()
     * @throws InvalidArgumentException
     * @param \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountCloseDiscussionResult $item
     * @return \SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfCloseDiscussionResult
     */
    public function add($item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountCloseDiscussionResult) {
            throw new InvalidArgumentException(sprintf('The CloseDiscussionResult property can only contain items of type \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountCloseDiscussionResult, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        return parent::add($item);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string CloseDiscussionResult
     */
    public function getAttributeName(): string
    {
        return 'CloseDiscussionResult';
    }
}
