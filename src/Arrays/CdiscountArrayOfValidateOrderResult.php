<?php

declare(strict_types=1);

namespace SengentoBV\CdiscountMarketplaceSdk\Arrays;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfValidateOrderResult Arrays
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfValidateOrderResult
 * @package Cdiscount
 * @subpackage Arrays
 */
class CdiscountArrayOfValidateOrderResult extends AbstractStructArrayBase
{
    /**
     * The ValidateOrderResult
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountValidateOrderResult[]
     */
    protected ?array $ValidateOrderResult = null;
    /**
     * Constructor method for ArrayOfValidateOrderResult
     * @uses CdiscountArrayOfValidateOrderResult::setValidateOrderResult()
     * @param \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountValidateOrderResult[] $validateOrderResult
     */
    public function __construct(?array $validateOrderResult = null)
    {
        $this
            ->setValidateOrderResult($validateOrderResult);
    }
    /**
     * Get ValidateOrderResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountValidateOrderResult[]
     */
    public function getValidateOrderResult(): ?array
    {
        return isset($this->ValidateOrderResult) ? $this->ValidateOrderResult : null;
    }
    /**
     * This method is responsible for validating the values passed to the setValidateOrderResult method
     * This method is willingly generated in order to preserve the one-line inline validation within the setValidateOrderResult method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateValidateOrderResultForArrayConstraintsFromSetValidateOrderResult(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfValidateOrderResultValidateOrderResultItem) {
            // validation for constraint: itemType
            if (!$arrayOfValidateOrderResultValidateOrderResultItem instanceof \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountValidateOrderResult) {
                $invalidValues[] = is_object($arrayOfValidateOrderResultValidateOrderResultItem) ? get_class($arrayOfValidateOrderResultValidateOrderResultItem) : sprintf('%s(%s)', gettype($arrayOfValidateOrderResultValidateOrderResultItem), var_export($arrayOfValidateOrderResultValidateOrderResultItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The ValidateOrderResult property can only contain items of type \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountValidateOrderResult, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set ValidateOrderResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws InvalidArgumentException
     * @param \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountValidateOrderResult[] $validateOrderResult
     * @return \SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfValidateOrderResult
     */
    public function setValidateOrderResult(?array $validateOrderResult = null): self
    {
        // validation for constraint: array
        if ('' !== ($validateOrderResultArrayErrorMessage = self::validateValidateOrderResultForArrayConstraintsFromSetValidateOrderResult($validateOrderResult))) {
            throw new InvalidArgumentException($validateOrderResultArrayErrorMessage, __LINE__);
        }
        if (is_null($validateOrderResult) || (is_array($validateOrderResult) && empty($validateOrderResult))) {
            unset($this->ValidateOrderResult);
        } else {
            $this->ValidateOrderResult = $validateOrderResult;
        }
        
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountValidateOrderResult|null
     */
    public function current(): ?\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountValidateOrderResult
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountValidateOrderResult|null
     */
    public function item($index): ?\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountValidateOrderResult
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountValidateOrderResult|null
     */
    public function first(): ?\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountValidateOrderResult
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountValidateOrderResult|null
     */
    public function last(): ?\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountValidateOrderResult
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountValidateOrderResult|null
     */
    public function offsetGet($offset): ?\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountValidateOrderResult
    {
        return parent::offsetGet($offset);
    }
    /**
     * Add element to array
     * @see AbstractStructArrayBase::add()
     * @throws InvalidArgumentException
     * @param \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountValidateOrderResult $item
     * @return \SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfValidateOrderResult
     */
    public function add($item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountValidateOrderResult) {
            throw new InvalidArgumentException(sprintf('The ValidateOrderResult property can only contain items of type \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountValidateOrderResult, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        return parent::add($item);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string ValidateOrderResult
     */
    public function getAttributeName(): string
    {
        return 'ValidateOrderResult';
    }
}
