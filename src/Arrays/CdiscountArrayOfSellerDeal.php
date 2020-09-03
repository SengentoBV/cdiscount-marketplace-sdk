<?php

namespace SengentoBV\CdiscountMarketplaceSdk\Arrays;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfSellerDeal Arrays
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfSellerDeal
 * @package Cdiscount
 * @subpackage Arrays
 */
class CdiscountArrayOfSellerDeal extends AbstractStructArrayBase
{
    /**
     * The SellerDeal
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountSellerDeal[]
     */
    public $SellerDeal;
    /**
     * Constructor method for ArrayOfSellerDeal
     * @uses CdiscountArrayOfSellerDeal::setSellerDeal()
     * @param \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountSellerDeal[] $sellerDeal
     */
    public function __construct(array $sellerDeal = array())
    {
        $this
            ->setSellerDeal($sellerDeal);
    }
    /**
     * Get SellerDeal value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountSellerDeal[]|null
     */
    public function getSellerDeal()
    {
        return isset($this->SellerDeal) ? $this->SellerDeal : null;
    }
    /**
     * This method is responsible for validating the values passed to the setSellerDeal method
     * This method is willingly generated in order to preserve the one-line inline validation within the setSellerDeal method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateSellerDealForArrayConstraintsFromSetSellerDeal(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfSellerDealSellerDealItem) {
            // validation for constraint: itemType
            if (!$arrayOfSellerDealSellerDealItem instanceof \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountSellerDeal) {
                $invalidValues[] = is_object($arrayOfSellerDealSellerDealItem) ? get_class($arrayOfSellerDealSellerDealItem) : sprintf('%s(%s)', gettype($arrayOfSellerDealSellerDealItem), var_export($arrayOfSellerDealSellerDealItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The SellerDeal property can only contain items of type \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountSellerDeal, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set SellerDeal value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountSellerDeal[] $sellerDeal
     * @return \SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfSellerDeal
     */
    public function setSellerDeal(array $sellerDeal = array())
    {
        // validation for constraint: array
        if ('' !== ($sellerDealArrayErrorMessage = self::validateSellerDealForArrayConstraintsFromSetSellerDeal($sellerDeal))) {
            throw new \InvalidArgumentException($sellerDealArrayErrorMessage, __LINE__);
        }
        if (is_null($sellerDeal) || (is_array($sellerDeal) && empty($sellerDeal))) {
            unset($this->SellerDeal);
        } else {
            $this->SellerDeal = $sellerDeal;
        }
        return $this;
    }
    /**
     * Add item to SellerDeal value
     * @throws \InvalidArgumentException
     * @param \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountSellerDeal $item
     * @return \SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfSellerDeal
     */
    public function addToSellerDeal(\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountSellerDeal $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountSellerDeal) {
            throw new \InvalidArgumentException(sprintf('The SellerDeal property can only contain items of type \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountSellerDeal, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->SellerDeal[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountSellerDeal|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountSellerDeal|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountSellerDeal|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountSellerDeal|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountSellerDeal|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string SellerDeal
     */
    public function getAttributeName()
    {
        return 'SellerDeal';
    }
}
