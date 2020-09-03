<?php

namespace SengentoBV\CdiscountMarketplaceSdk\Arrays;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfVoucher Arrays
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfVoucher
 * @package Cdiscount
 * @subpackage Arrays
 */
class CdiscountArrayOfVoucher extends AbstractStructArrayBase
{
    /**
     * The Voucher
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountVoucher[]
     */
    public $Voucher;
    /**
     * Constructor method for ArrayOfVoucher
     * @uses CdiscountArrayOfVoucher::setVoucher()
     * @param \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountVoucher[] $voucher
     */
    public function __construct(array $voucher = array())
    {
        $this
            ->setVoucher($voucher);
    }
    /**
     * Get Voucher value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountVoucher[]|null
     */
    public function getVoucher()
    {
        return isset($this->Voucher) ? $this->Voucher : null;
    }
    /**
     * This method is responsible for validating the values passed to the setVoucher method
     * This method is willingly generated in order to preserve the one-line inline validation within the setVoucher method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateVoucherForArrayConstraintsFromSetVoucher(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfVoucherVoucherItem) {
            // validation for constraint: itemType
            if (!$arrayOfVoucherVoucherItem instanceof \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountVoucher) {
                $invalidValues[] = is_object($arrayOfVoucherVoucherItem) ? get_class($arrayOfVoucherVoucherItem) : sprintf('%s(%s)', gettype($arrayOfVoucherVoucherItem), var_export($arrayOfVoucherVoucherItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Voucher property can only contain items of type \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountVoucher, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Voucher value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountVoucher[] $voucher
     * @return \SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfVoucher
     */
    public function setVoucher(array $voucher = array())
    {
        // validation for constraint: array
        if ('' !== ($voucherArrayErrorMessage = self::validateVoucherForArrayConstraintsFromSetVoucher($voucher))) {
            throw new \InvalidArgumentException($voucherArrayErrorMessage, __LINE__);
        }
        if (is_null($voucher) || (is_array($voucher) && empty($voucher))) {
            unset($this->Voucher);
        } else {
            $this->Voucher = $voucher;
        }
        return $this;
    }
    /**
     * Add item to Voucher value
     * @throws \InvalidArgumentException
     * @param \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountVoucher $item
     * @return \SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfVoucher
     */
    public function addToVoucher(\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountVoucher $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountVoucher) {
            throw new \InvalidArgumentException(sprintf('The Voucher property can only contain items of type \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountVoucher, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Voucher[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountVoucher|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountVoucher|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountVoucher|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountVoucher|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountVoucher|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string Voucher
     */
    public function getAttributeName()
    {
        return 'Voucher';
    }
}
