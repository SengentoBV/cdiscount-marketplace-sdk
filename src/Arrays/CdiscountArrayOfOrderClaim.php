<?php

namespace SengentoBV\CdiscountMarketplaceSdk\Arrays;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfOrderClaim Arrays
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfOrderClaim
 * @package Cdiscount
 * @subpackage Arrays
 */
class CdiscountArrayOfOrderClaim extends AbstractStructArrayBase
{
    /**
     * The OrderClaim
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountOrderClaim[]
     */
    public $OrderClaim;
    /**
     * Constructor method for ArrayOfOrderClaim
     * @uses CdiscountArrayOfOrderClaim::setOrderClaim()
     * @param \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountOrderClaim[] $orderClaim
     */
    public function __construct(array $orderClaim = array())
    {
        $this
            ->setOrderClaim($orderClaim);
    }
    /**
     * Get OrderClaim value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountOrderClaim[]|null
     */
    public function getOrderClaim()
    {
        return isset($this->OrderClaim) ? $this->OrderClaim : null;
    }
    /**
     * This method is responsible for validating the values passed to the setOrderClaim method
     * This method is willingly generated in order to preserve the one-line inline validation within the setOrderClaim method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateOrderClaimForArrayConstraintsFromSetOrderClaim(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfOrderClaimOrderClaimItem) {
            // validation for constraint: itemType
            if (!$arrayOfOrderClaimOrderClaimItem instanceof \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountOrderClaim) {
                $invalidValues[] = is_object($arrayOfOrderClaimOrderClaimItem) ? get_class($arrayOfOrderClaimOrderClaimItem) : sprintf('%s(%s)', gettype($arrayOfOrderClaimOrderClaimItem), var_export($arrayOfOrderClaimOrderClaimItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The OrderClaim property can only contain items of type \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountOrderClaim, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set OrderClaim value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountOrderClaim[] $orderClaim
     * @return \SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfOrderClaim
     */
    public function setOrderClaim(array $orderClaim = array())
    {
        // validation for constraint: array
        if ('' !== ($orderClaimArrayErrorMessage = self::validateOrderClaimForArrayConstraintsFromSetOrderClaim($orderClaim))) {
            throw new \InvalidArgumentException($orderClaimArrayErrorMessage, __LINE__);
        }
        if (is_null($orderClaim) || (is_array($orderClaim) && empty($orderClaim))) {
            unset($this->OrderClaim);
        } else {
            $this->OrderClaim = $orderClaim;
        }
        return $this;
    }
    /**
     * Add item to OrderClaim value
     * @throws \InvalidArgumentException
     * @param \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountOrderClaim $item
     * @return \SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfOrderClaim
     */
    public function addToOrderClaim(\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountOrderClaim $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountOrderClaim) {
            throw new \InvalidArgumentException(sprintf('The OrderClaim property can only contain items of type \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountOrderClaim, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->OrderClaim[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountOrderClaim|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountOrderClaim|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountOrderClaim|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountOrderClaim|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountOrderClaim|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string OrderClaim
     */
    public function getAttributeName(): string
    {
        return 'OrderClaim';
    }
}
