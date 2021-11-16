<?php

declare(strict_types=1);

namespace SengentoBV\CdiscountMarketplaceSdk\Arrays;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfRefundInformationMessage Arrays
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfRefundInformationMessage
 * @package Cdiscount
 * @subpackage Arrays
 */
class CdiscountArrayOfRefundInformationMessage extends AbstractStructArrayBase
{
    /**
     * The RefundInformationMessage
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountRefundInformationMessage[]
     */
    protected ?array $RefundInformationMessage = null;
    /**
     * Constructor method for ArrayOfRefundInformationMessage
     * @uses CdiscountArrayOfRefundInformationMessage::setRefundInformationMessage()
     * @param \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountRefundInformationMessage[] $refundInformationMessage
     */
    public function __construct(?array $refundInformationMessage = null)
    {
        $this
            ->setRefundInformationMessage($refundInformationMessage);
    }
    /**
     * Get RefundInformationMessage value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountRefundInformationMessage[]
     */
    public function getRefundInformationMessage(): ?array
    {
        return isset($this->RefundInformationMessage) ? $this->RefundInformationMessage : null;
    }
    /**
     * This method is responsible for validating the values passed to the setRefundInformationMessage method
     * This method is willingly generated in order to preserve the one-line inline validation within the setRefundInformationMessage method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateRefundInformationMessageForArrayConstraintsFromSetRefundInformationMessage(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfRefundInformationMessageRefundInformationMessageItem) {
            // validation for constraint: itemType
            if (!$arrayOfRefundInformationMessageRefundInformationMessageItem instanceof \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountRefundInformationMessage) {
                $invalidValues[] = is_object($arrayOfRefundInformationMessageRefundInformationMessageItem) ? get_class($arrayOfRefundInformationMessageRefundInformationMessageItem) : sprintf('%s(%s)', gettype($arrayOfRefundInformationMessageRefundInformationMessageItem), var_export($arrayOfRefundInformationMessageRefundInformationMessageItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The RefundInformationMessage property can only contain items of type \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountRefundInformationMessage, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set RefundInformationMessage value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws InvalidArgumentException
     * @param \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountRefundInformationMessage[] $refundInformationMessage
     * @return \SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfRefundInformationMessage
     */
    public function setRefundInformationMessage(?array $refundInformationMessage = null): self
    {
        // validation for constraint: array
        if ('' !== ($refundInformationMessageArrayErrorMessage = self::validateRefundInformationMessageForArrayConstraintsFromSetRefundInformationMessage($refundInformationMessage))) {
            throw new InvalidArgumentException($refundInformationMessageArrayErrorMessage, __LINE__);
        }
        if (is_null($refundInformationMessage) || (is_array($refundInformationMessage) && empty($refundInformationMessage))) {
            unset($this->RefundInformationMessage);
        } else {
            $this->RefundInformationMessage = $refundInformationMessage;
        }
        
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountRefundInformationMessage|null
     */
    public function current(): ?\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountRefundInformationMessage
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountRefundInformationMessage|null
     */
    public function item($index): ?\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountRefundInformationMessage
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountRefundInformationMessage|null
     */
    public function first(): ?\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountRefundInformationMessage
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountRefundInformationMessage|null
     */
    public function last(): ?\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountRefundInformationMessage
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountRefundInformationMessage|null
     */
    public function offsetGet($offset): ?\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountRefundInformationMessage
    {
        return parent::offsetGet($offset);
    }
    /**
     * Add element to array
     * @see AbstractStructArrayBase::add()
     * @throws InvalidArgumentException
     * @param \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountRefundInformationMessage $item
     * @return \SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfRefundInformationMessage
     */
    public function add($item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountRefundInformationMessage) {
            throw new InvalidArgumentException(sprintf('The RefundInformationMessage property can only contain items of type \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountRefundInformationMessage, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        return parent::add($item);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string RefundInformationMessage
     */
    public function getAttributeName(): string
    {
        return 'RefundInformationMessage';
    }
}
