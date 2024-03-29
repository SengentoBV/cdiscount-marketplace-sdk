<?php

declare(strict_types=1);

namespace SengentoBV\CdiscountMarketplaceSdk\Arrays;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfMessage Arrays
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfMessage
 * @package Cdiscount
 * @subpackage Arrays
 */
class CdiscountArrayOfMessage extends AbstractStructArrayBase
{
    /**
     * The Message
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountMessage[]
     */
    protected ?array $Message = null;
    /**
     * Constructor method for ArrayOfMessage
     * @uses CdiscountArrayOfMessage::setMessage()
     * @param \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountMessage[] $message
     */
    public function __construct(?array $message = null)
    {
        $this
            ->setMessage($message);
    }
    /**
     * Get Message value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountMessage[]
     */
    public function getMessage(): ?array
    {
        return isset($this->Message) ? $this->Message : null;
    }
    /**
     * This method is responsible for validating the values passed to the setMessage method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMessage method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMessageForArrayConstraintsFromSetMessage(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfMessageMessageItem) {
            // validation for constraint: itemType
            if (!$arrayOfMessageMessageItem instanceof \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountMessage) {
                $invalidValues[] = is_object($arrayOfMessageMessageItem) ? get_class($arrayOfMessageMessageItem) : sprintf('%s(%s)', gettype($arrayOfMessageMessageItem), var_export($arrayOfMessageMessageItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Message property can only contain items of type \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountMessage, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set Message value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws InvalidArgumentException
     * @param \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountMessage[] $message
     * @return \SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfMessage
     */
    public function setMessage(?array $message = null): self
    {
        // validation for constraint: array
        if ('' !== ($messageArrayErrorMessage = self::validateMessageForArrayConstraintsFromSetMessage($message))) {
            throw new InvalidArgumentException($messageArrayErrorMessage, __LINE__);
        }
        if (is_null($message) || (is_array($message) && empty($message))) {
            unset($this->Message);
        } else {
            $this->Message = $message;
        }
        
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountMessage|null
     */
    public function current(): ?\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountMessage
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountMessage|null
     */
    public function item($index): ?\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountMessage
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountMessage|null
     */
    public function first(): ?\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountMessage
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountMessage|null
     */
    public function last(): ?\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountMessage
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountMessage|null
     */
    public function offsetGet($offset): ?\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountMessage
    {
        return parent::offsetGet($offset);
    }
    /**
     * Add element to array
     * @see AbstractStructArrayBase::add()
     * @throws InvalidArgumentException
     * @param \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountMessage $item
     * @return \SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfMessage
     */
    public function add($item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountMessage) {
            throw new InvalidArgumentException(sprintf('The Message property can only contain items of type \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountMessage, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        return parent::add($item);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string Message
     */
    public function getAttributeName(): string
    {
        return 'Message';
    }
}
