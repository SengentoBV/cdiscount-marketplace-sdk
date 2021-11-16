<?php

namespace SengentoBV\CdiscountMarketplaceSdk\Arrays;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfValidateOrderLineResult Arrays
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfValidateOrderLineResult
 * @package Cdiscount
 * @subpackage Arrays
 */
class CdiscountArrayOfValidateOrderLineResult extends AbstractStructArrayBase
{
    /**
     * The ValidateOrderLineResult
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountValidateOrderLineResult[]
     */
    public $ValidateOrderLineResult;
    /**
     * Constructor method for ArrayOfValidateOrderLineResult
     * @uses CdiscountArrayOfValidateOrderLineResult::setValidateOrderLineResult()
     * @param \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountValidateOrderLineResult[] $validateOrderLineResult
     */
    public function __construct(array $validateOrderLineResult = array())
    {
        $this
            ->setValidateOrderLineResult($validateOrderLineResult);
    }
    /**
     * Get ValidateOrderLineResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountValidateOrderLineResult[]|null
     */
    public function getValidateOrderLineResult()
    {
        return isset($this->ValidateOrderLineResult) ? $this->ValidateOrderLineResult : null;
    }
    /**
     * This method is responsible for validating the values passed to the setValidateOrderLineResult method
     * This method is willingly generated in order to preserve the one-line inline validation within the setValidateOrderLineResult method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateValidateOrderLineResultForArrayConstraintsFromSetValidateOrderLineResult(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfValidateOrderLineResultValidateOrderLineResultItem) {
            // validation for constraint: itemType
            if (!$arrayOfValidateOrderLineResultValidateOrderLineResultItem instanceof \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountValidateOrderLineResult) {
                $invalidValues[] = is_object($arrayOfValidateOrderLineResultValidateOrderLineResultItem) ? get_class($arrayOfValidateOrderLineResultValidateOrderLineResultItem) : sprintf('%s(%s)', gettype($arrayOfValidateOrderLineResultValidateOrderLineResultItem), var_export($arrayOfValidateOrderLineResultValidateOrderLineResultItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The ValidateOrderLineResult property can only contain items of type \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountValidateOrderLineResult, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set ValidateOrderLineResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountValidateOrderLineResult[] $validateOrderLineResult
     * @return \SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfValidateOrderLineResult
     */
    public function setValidateOrderLineResult(array $validateOrderLineResult = array())
    {
        // validation for constraint: array
        if ('' !== ($validateOrderLineResultArrayErrorMessage = self::validateValidateOrderLineResultForArrayConstraintsFromSetValidateOrderLineResult($validateOrderLineResult))) {
            throw new \InvalidArgumentException($validateOrderLineResultArrayErrorMessage, __LINE__);
        }
        if (is_null($validateOrderLineResult) || (is_array($validateOrderLineResult) && empty($validateOrderLineResult))) {
            unset($this->ValidateOrderLineResult);
        } else {
            $this->ValidateOrderLineResult = $validateOrderLineResult;
        }
        return $this;
    }
    /**
     * Add item to ValidateOrderLineResult value
     * @throws \InvalidArgumentException
     * @param \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountValidateOrderLineResult $item
     * @return \SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfValidateOrderLineResult
     */
    public function addToValidateOrderLineResult(\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountValidateOrderLineResult $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountValidateOrderLineResult) {
            throw new \InvalidArgumentException(sprintf('The ValidateOrderLineResult property can only contain items of type \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountValidateOrderLineResult, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->ValidateOrderLineResult[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountValidateOrderLineResult|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountValidateOrderLineResult|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountValidateOrderLineResult|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountValidateOrderLineResult|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountValidateOrderLineResult|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string ValidateOrderLineResult
     */
    public function getAttributeName(): string
    {
        return 'ValidateOrderLineResult';
    }
}
