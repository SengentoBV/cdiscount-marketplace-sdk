<?php

declare(strict_types=1);

namespace SengentoBV\CdiscountMarketplaceSdk\Arrays;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfDiscussion Arrays
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfDiscussion
 * @package Cdiscount
 * @subpackage Arrays
 */
class CdiscountArrayOfDiscussion extends AbstractStructArrayBase
{
    /**
     * The Discussion
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountDiscussion[]
     */
    protected ?array $Discussion = null;
    /**
     * Constructor method for ArrayOfDiscussion
     * @uses CdiscountArrayOfDiscussion::setDiscussion()
     * @param \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountDiscussion[] $discussion
     */
    public function __construct(?array $discussion = null)
    {
        $this
            ->setDiscussion($discussion);
    }
    /**
     * Get Discussion value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountDiscussion[]
     */
    public function getDiscussion(): ?array
    {
        return isset($this->Discussion) ? $this->Discussion : null;
    }
    /**
     * This method is responsible for validating the values passed to the setDiscussion method
     * This method is willingly generated in order to preserve the one-line inline validation within the setDiscussion method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateDiscussionForArrayConstraintsFromSetDiscussion(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfDiscussionDiscussionItem) {
            // validation for constraint: itemType
            if (!$arrayOfDiscussionDiscussionItem instanceof \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountDiscussion) {
                $invalidValues[] = is_object($arrayOfDiscussionDiscussionItem) ? get_class($arrayOfDiscussionDiscussionItem) : sprintf('%s(%s)', gettype($arrayOfDiscussionDiscussionItem), var_export($arrayOfDiscussionDiscussionItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Discussion property can only contain items of type \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountDiscussion, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set Discussion value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws InvalidArgumentException
     * @param \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountDiscussion[] $discussion
     * @return \SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfDiscussion
     */
    public function setDiscussion(?array $discussion = null): self
    {
        // validation for constraint: array
        if ('' !== ($discussionArrayErrorMessage = self::validateDiscussionForArrayConstraintsFromSetDiscussion($discussion))) {
            throw new InvalidArgumentException($discussionArrayErrorMessage, __LINE__);
        }
        if (is_null($discussion) || (is_array($discussion) && empty($discussion))) {
            unset($this->Discussion);
        } else {
            $this->Discussion = $discussion;
        }
        
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountDiscussion|null
     */
    public function current(): ?\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountDiscussion
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountDiscussion|null
     */
    public function item($index): ?\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountDiscussion
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountDiscussion|null
     */
    public function first(): ?\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountDiscussion
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountDiscussion|null
     */
    public function last(): ?\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountDiscussion
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountDiscussion|null
     */
    public function offsetGet($offset): ?\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountDiscussion
    {
        return parent::offsetGet($offset);
    }
    /**
     * Add element to array
     * @see AbstractStructArrayBase::add()
     * @throws InvalidArgumentException
     * @param \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountDiscussion $item
     * @return \SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfDiscussion
     */
    public function add($item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountDiscussion) {
            throw new InvalidArgumentException(sprintf('The Discussion property can only contain items of type \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountDiscussion, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        return parent::add($item);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string Discussion
     */
    public function getAttributeName(): string
    {
        return 'Discussion';
    }
}
