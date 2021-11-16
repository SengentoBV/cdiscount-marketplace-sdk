<?php

declare(strict_types=1);

namespace SengentoBV\CdiscountMarketplaceSdk\Arrays;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfSellerRefundResult Arrays
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfSellerRefundResult
 * @package Cdiscount
 * @subpackage Arrays
 */
class CdiscountArrayOfSellerRefundResult extends AbstractStructArrayBase
{
    /**
     * The SellerRefundResult
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountSellerRefundResult[]
     */
    protected ?array $SellerRefundResult = null;
    /**
     * Constructor method for ArrayOfSellerRefundResult
     * @uses CdiscountArrayOfSellerRefundResult::setSellerRefundResult()
     * @param \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountSellerRefundResult[] $sellerRefundResult
     */
    public function __construct(?array $sellerRefundResult = null)
    {
        $this
            ->setSellerRefundResult($sellerRefundResult);
    }
    /**
     * Get SellerRefundResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountSellerRefundResult[]
     */
    public function getSellerRefundResult(): ?array
    {
        return isset($this->SellerRefundResult) ? $this->SellerRefundResult : null;
    }
    /**
     * This method is responsible for validating the values passed to the setSellerRefundResult method
     * This method is willingly generated in order to preserve the one-line inline validation within the setSellerRefundResult method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateSellerRefundResultForArrayConstraintsFromSetSellerRefundResult(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfSellerRefundResultSellerRefundResultItem) {
            // validation for constraint: itemType
            if (!$arrayOfSellerRefundResultSellerRefundResultItem instanceof \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountSellerRefundResult) {
                $invalidValues[] = is_object($arrayOfSellerRefundResultSellerRefundResultItem) ? get_class($arrayOfSellerRefundResultSellerRefundResultItem) : sprintf('%s(%s)', gettype($arrayOfSellerRefundResultSellerRefundResultItem), var_export($arrayOfSellerRefundResultSellerRefundResultItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The SellerRefundResult property can only contain items of type \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountSellerRefundResult, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set SellerRefundResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws InvalidArgumentException
     * @param \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountSellerRefundResult[] $sellerRefundResult
     * @return \SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfSellerRefundResult
     */
    public function setSellerRefundResult(?array $sellerRefundResult = null): self
    {
        // validation for constraint: array
        if ('' !== ($sellerRefundResultArrayErrorMessage = self::validateSellerRefundResultForArrayConstraintsFromSetSellerRefundResult($sellerRefundResult))) {
            throw new InvalidArgumentException($sellerRefundResultArrayErrorMessage, __LINE__);
        }
        if (is_null($sellerRefundResult) || (is_array($sellerRefundResult) && empty($sellerRefundResult))) {
            unset($this->SellerRefundResult);
        } else {
            $this->SellerRefundResult = $sellerRefundResult;
        }
        
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountSellerRefundResult|null
     */
    public function current(): ?\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountSellerRefundResult
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountSellerRefundResult|null
     */
    public function item($index): ?\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountSellerRefundResult
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountSellerRefundResult|null
     */
    public function first(): ?\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountSellerRefundResult
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountSellerRefundResult|null
     */
    public function last(): ?\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountSellerRefundResult
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountSellerRefundResult|null
     */
    public function offsetGet($offset): ?\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountSellerRefundResult
    {
        return parent::offsetGet($offset);
    }
    /**
     * Add element to array
     * @see AbstractStructArrayBase::add()
     * @throws InvalidArgumentException
     * @param \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountSellerRefundResult $item
     * @return \SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfSellerRefundResult
     */
    public function add($item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountSellerRefundResult) {
            throw new InvalidArgumentException(sprintf('The SellerRefundResult property can only contain items of type \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountSellerRefundResult, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        return parent::add($item);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string SellerRefundResult
     */
    public function getAttributeName(): string
    {
        return 'SellerRefundResult';
    }
}
