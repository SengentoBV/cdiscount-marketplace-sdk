<?php

namespace SengentoBV\CdiscountMarketplaceSdk\Arrays;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfFulfilmentOrderLineRequest Arrays
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfFulfilmentOrderLineRequest
 * @package Cdiscount
 * @subpackage Arrays
 */
class CdiscountArrayOfFulfilmentOrderLineRequest extends AbstractStructArrayBase
{
    /**
     * The FulfilmentOrderLineRequest
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountFulfilmentOrderLineRequest[]
     */
    public $FulfilmentOrderLineRequest;
    /**
     * Constructor method for ArrayOfFulfilmentOrderLineRequest
     * @uses CdiscountArrayOfFulfilmentOrderLineRequest::setFulfilmentOrderLineRequest()
     * @param \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountFulfilmentOrderLineRequest[] $fulfilmentOrderLineRequest
     */
    public function __construct(array $fulfilmentOrderLineRequest = array())
    {
        $this
            ->setFulfilmentOrderLineRequest($fulfilmentOrderLineRequest);
    }
    /**
     * Get FulfilmentOrderLineRequest value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountFulfilmentOrderLineRequest[]|null
     */
    public function getFulfilmentOrderLineRequest()
    {
        return isset($this->FulfilmentOrderLineRequest) ? $this->FulfilmentOrderLineRequest : null;
    }
    /**
     * This method is responsible for validating the values passed to the setFulfilmentOrderLineRequest method
     * This method is willingly generated in order to preserve the one-line inline validation within the setFulfilmentOrderLineRequest method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateFulfilmentOrderLineRequestForArrayConstraintsFromSetFulfilmentOrderLineRequest(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfFulfilmentOrderLineRequestFulfilmentOrderLineRequestItem) {
            // validation for constraint: itemType
            if (!$arrayOfFulfilmentOrderLineRequestFulfilmentOrderLineRequestItem instanceof \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountFulfilmentOrderLineRequest) {
                $invalidValues[] = is_object($arrayOfFulfilmentOrderLineRequestFulfilmentOrderLineRequestItem) ? get_class($arrayOfFulfilmentOrderLineRequestFulfilmentOrderLineRequestItem) : sprintf('%s(%s)', gettype($arrayOfFulfilmentOrderLineRequestFulfilmentOrderLineRequestItem), var_export($arrayOfFulfilmentOrderLineRequestFulfilmentOrderLineRequestItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The FulfilmentOrderLineRequest property can only contain items of type \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountFulfilmentOrderLineRequest, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set FulfilmentOrderLineRequest value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountFulfilmentOrderLineRequest[] $fulfilmentOrderLineRequest
     * @return \SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfFulfilmentOrderLineRequest
     */
    public function setFulfilmentOrderLineRequest(array $fulfilmentOrderLineRequest = array())
    {
        // validation for constraint: array
        if ('' !== ($fulfilmentOrderLineRequestArrayErrorMessage = self::validateFulfilmentOrderLineRequestForArrayConstraintsFromSetFulfilmentOrderLineRequest($fulfilmentOrderLineRequest))) {
            throw new \InvalidArgumentException($fulfilmentOrderLineRequestArrayErrorMessage, __LINE__);
        }
        if (is_null($fulfilmentOrderLineRequest) || (is_array($fulfilmentOrderLineRequest) && empty($fulfilmentOrderLineRequest))) {
            unset($this->FulfilmentOrderLineRequest);
        } else {
            $this->FulfilmentOrderLineRequest = $fulfilmentOrderLineRequest;
        }
        return $this;
    }
    /**
     * Add item to FulfilmentOrderLineRequest value
     * @throws \InvalidArgumentException
     * @param \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountFulfilmentOrderLineRequest $item
     * @return \SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfFulfilmentOrderLineRequest
     */
    public function addToFulfilmentOrderLineRequest(\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountFulfilmentOrderLineRequest $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountFulfilmentOrderLineRequest) {
            throw new \InvalidArgumentException(sprintf('The FulfilmentOrderLineRequest property can only contain items of type \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountFulfilmentOrderLineRequest, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->FulfilmentOrderLineRequest[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountFulfilmentOrderLineRequest|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountFulfilmentOrderLineRequest|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountFulfilmentOrderLineRequest|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountFulfilmentOrderLineRequest|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountFulfilmentOrderLineRequest|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string FulfilmentOrderLineRequest
     */
    public function getAttributeName(): string
    {
        return 'FulfilmentOrderLineRequest';
    }
}
