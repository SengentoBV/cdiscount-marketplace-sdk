<?php

namespace SengentoBV\CdiscountMarketplaceSdk\Arrays;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

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
    public $ValidateOrderResult;
    /**
     * Constructor method for ArrayOfValidateOrderResult
     * @uses CdiscountArrayOfValidateOrderResult::setValidateOrderResult()
     * @param \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountValidateOrderResult[] $validateOrderResult
     */
    public function __construct(array $validateOrderResult = array())
    {
        $this
            ->setValidateOrderResult($validateOrderResult);
    }
    /**
     * Get ValidateOrderResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountValidateOrderResult[]|null
     */
    public function getValidateOrderResult()
    {
        return isset($this->ValidateOrderResult) ? $this->ValidateOrderResult : null;
    }
    /**
     * This method is responsible for validating the values passed to the setValidateOrderResult method
     * This method is willingly generated in order to preserve the one-line inline validation within the setValidateOrderResult method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateValidateOrderResultForArrayConstraintsFromSetValidateOrderResult(array $values = array())
    {
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
     * @throws \InvalidArgumentException
     * @param \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountValidateOrderResult[] $validateOrderResult
     * @return \SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfValidateOrderResult
     */
    public function setValidateOrderResult(array $validateOrderResult = array())
    {
        // validation for constraint: array
        if ('' !== ($validateOrderResultArrayErrorMessage = self::validateValidateOrderResultForArrayConstraintsFromSetValidateOrderResult($validateOrderResult))) {
            throw new \InvalidArgumentException($validateOrderResultArrayErrorMessage, __LINE__);
        }
        if (is_null($validateOrderResult) || (is_array($validateOrderResult) && empty($validateOrderResult))) {
            unset($this->ValidateOrderResult);
        } else {
            $this->ValidateOrderResult = $validateOrderResult;
        }
        return $this;
    }
    /**
     * Add item to ValidateOrderResult value
     * @throws \InvalidArgumentException
     * @param \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountValidateOrderResult $item
     * @return \SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfValidateOrderResult
     */
    public function addToValidateOrderResult(\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountValidateOrderResult $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountValidateOrderResult) {
            throw new \InvalidArgumentException(sprintf('The ValidateOrderResult property can only contain items of type \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountValidateOrderResult, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->ValidateOrderResult[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountValidateOrderResult|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountValidateOrderResult|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountValidateOrderResult|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountValidateOrderResult|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountValidateOrderResult|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string ValidateOrderResult
     */
    public function getAttributeName()
    {
        return 'ValidateOrderResult';
    }
}
