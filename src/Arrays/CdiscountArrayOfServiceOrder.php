<?php

namespace SengentoBV\CdiscountMarketplaceSdk\Arrays;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfServiceOrder Arrays
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfServiceOrder
 * @package Cdiscount
 * @subpackage Arrays
 */
class CdiscountArrayOfServiceOrder extends AbstractStructArrayBase
{
    /**
     * The ServiceOrder
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountServiceOrder[]
     */
    public $ServiceOrder;
    /**
     * Constructor method for ArrayOfServiceOrder
     * @uses CdiscountArrayOfServiceOrder::setServiceOrder()
     * @param \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountServiceOrder[] $serviceOrder
     */
    public function __construct(array $serviceOrder = array())
    {
        $this
            ->setServiceOrder($serviceOrder);
    }
    /**
     * Get ServiceOrder value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountServiceOrder[]|null
     */
    public function getServiceOrder()
    {
        return isset($this->ServiceOrder) ? $this->ServiceOrder : null;
    }
    /**
     * This method is responsible for validating the values passed to the setServiceOrder method
     * This method is willingly generated in order to preserve the one-line inline validation within the setServiceOrder method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateServiceOrderForArrayConstraintsFromSetServiceOrder(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfServiceOrderServiceOrderItem) {
            // validation for constraint: itemType
            if (!$arrayOfServiceOrderServiceOrderItem instanceof \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountServiceOrder) {
                $invalidValues[] = is_object($arrayOfServiceOrderServiceOrderItem) ? get_class($arrayOfServiceOrderServiceOrderItem) : sprintf('%s(%s)', gettype($arrayOfServiceOrderServiceOrderItem), var_export($arrayOfServiceOrderServiceOrderItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The ServiceOrder property can only contain items of type \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountServiceOrder, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set ServiceOrder value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountServiceOrder[] $serviceOrder
     * @return \SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfServiceOrder
     */
    public function setServiceOrder(array $serviceOrder = array())
    {
        // validation for constraint: array
        if ('' !== ($serviceOrderArrayErrorMessage = self::validateServiceOrderForArrayConstraintsFromSetServiceOrder($serviceOrder))) {
            throw new \InvalidArgumentException($serviceOrderArrayErrorMessage, __LINE__);
        }
        if (is_null($serviceOrder) || (is_array($serviceOrder) && empty($serviceOrder))) {
            unset($this->ServiceOrder);
        } else {
            $this->ServiceOrder = $serviceOrder;
        }
        return $this;
    }
    /**
     * Add item to ServiceOrder value
     * @throws \InvalidArgumentException
     * @param \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountServiceOrder $item
     * @return \SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfServiceOrder
     */
    public function addToServiceOrder(\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountServiceOrder $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountServiceOrder) {
            throw new \InvalidArgumentException(sprintf('The ServiceOrder property can only contain items of type \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountServiceOrder, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->ServiceOrder[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountServiceOrder|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountServiceOrder|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountServiceOrder|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountServiceOrder|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountServiceOrder|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string ServiceOrder
     */
    public function getAttributeName(): string
    {
        return 'ServiceOrder';
    }
}
