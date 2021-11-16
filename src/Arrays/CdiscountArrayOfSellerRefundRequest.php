<?php

declare(strict_types=1);

namespace SengentoBV\CdiscountMarketplaceSdk\Arrays;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfSellerRefundRequest Arrays
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfSellerRefundRequest
 * @package Cdiscount
 * @subpackage Arrays
 */
class CdiscountArrayOfSellerRefundRequest extends AbstractStructArrayBase
{
    /**
     * The SellerRefundRequest
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountSellerRefundRequest[]
     */
    protected ?array $SellerRefundRequest = null;
    /**
     * Constructor method for ArrayOfSellerRefundRequest
     * @uses CdiscountArrayOfSellerRefundRequest::setSellerRefundRequest()
     * @param \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountSellerRefundRequest[] $sellerRefundRequest
     */
    public function __construct(?array $sellerRefundRequest = null)
    {
        $this
            ->setSellerRefundRequest($sellerRefundRequest);
    }
    /**
     * Get SellerRefundRequest value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountSellerRefundRequest[]
     */
    public function getSellerRefundRequest(): ?array
    {
        return isset($this->SellerRefundRequest) ? $this->SellerRefundRequest : null;
    }
    /**
     * This method is responsible for validating the values passed to the setSellerRefundRequest method
     * This method is willingly generated in order to preserve the one-line inline validation within the setSellerRefundRequest method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateSellerRefundRequestForArrayConstraintsFromSetSellerRefundRequest(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfSellerRefundRequestSellerRefundRequestItem) {
            // validation for constraint: itemType
            if (!$arrayOfSellerRefundRequestSellerRefundRequestItem instanceof \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountSellerRefundRequest) {
                $invalidValues[] = is_object($arrayOfSellerRefundRequestSellerRefundRequestItem) ? get_class($arrayOfSellerRefundRequestSellerRefundRequestItem) : sprintf('%s(%s)', gettype($arrayOfSellerRefundRequestSellerRefundRequestItem), var_export($arrayOfSellerRefundRequestSellerRefundRequestItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The SellerRefundRequest property can only contain items of type \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountSellerRefundRequest, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set SellerRefundRequest value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws InvalidArgumentException
     * @param \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountSellerRefundRequest[] $sellerRefundRequest
     * @return \SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfSellerRefundRequest
     */
    public function setSellerRefundRequest(?array $sellerRefundRequest = null): self
    {
        // validation for constraint: array
        if ('' !== ($sellerRefundRequestArrayErrorMessage = self::validateSellerRefundRequestForArrayConstraintsFromSetSellerRefundRequest($sellerRefundRequest))) {
            throw new InvalidArgumentException($sellerRefundRequestArrayErrorMessage, __LINE__);
        }
        if (is_null($sellerRefundRequest) || (is_array($sellerRefundRequest) && empty($sellerRefundRequest))) {
            unset($this->SellerRefundRequest);
        } else {
            $this->SellerRefundRequest = $sellerRefundRequest;
        }
        
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountSellerRefundRequest|null
     */
    public function current(): ?\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountSellerRefundRequest
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountSellerRefundRequest|null
     */
    public function item($index): ?\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountSellerRefundRequest
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountSellerRefundRequest|null
     */
    public function first(): ?\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountSellerRefundRequest
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountSellerRefundRequest|null
     */
    public function last(): ?\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountSellerRefundRequest
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountSellerRefundRequest|null
     */
    public function offsetGet($offset): ?\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountSellerRefundRequest
    {
        return parent::offsetGet($offset);
    }
    /**
     * Add element to array
     * @see AbstractStructArrayBase::add()
     * @throws InvalidArgumentException
     * @param \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountSellerRefundRequest $item
     * @return \SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfSellerRefundRequest
     */
    public function add($item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountSellerRefundRequest) {
            throw new InvalidArgumentException(sprintf('The SellerRefundRequest property can only contain items of type \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountSellerRefundRequest, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        return parent::add($item);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string SellerRefundRequest
     */
    public function getAttributeName(): string
    {
        return 'SellerRefundRequest';
    }
}
