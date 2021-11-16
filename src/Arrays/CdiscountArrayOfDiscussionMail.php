<?php

declare(strict_types=1);

namespace SengentoBV\CdiscountMarketplaceSdk\Arrays;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfDiscussionMail Arrays
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfDiscussionMail
 * @package Cdiscount
 * @subpackage Arrays
 */
class CdiscountArrayOfDiscussionMail extends AbstractStructArrayBase
{
    /**
     * The DiscussionMail
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountDiscussionMail[]
     */
    protected ?array $DiscussionMail = null;
    /**
     * Constructor method for ArrayOfDiscussionMail
     * @uses CdiscountArrayOfDiscussionMail::setDiscussionMail()
     * @param \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountDiscussionMail[] $discussionMail
     */
    public function __construct(?array $discussionMail = null)
    {
        $this
            ->setDiscussionMail($discussionMail);
    }
    /**
     * Get DiscussionMail value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountDiscussionMail[]
     */
    public function getDiscussionMail(): ?array
    {
        return isset($this->DiscussionMail) ? $this->DiscussionMail : null;
    }
    /**
     * This method is responsible for validating the values passed to the setDiscussionMail method
     * This method is willingly generated in order to preserve the one-line inline validation within the setDiscussionMail method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateDiscussionMailForArrayConstraintsFromSetDiscussionMail(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfDiscussionMailDiscussionMailItem) {
            // validation for constraint: itemType
            if (!$arrayOfDiscussionMailDiscussionMailItem instanceof \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountDiscussionMail) {
                $invalidValues[] = is_object($arrayOfDiscussionMailDiscussionMailItem) ? get_class($arrayOfDiscussionMailDiscussionMailItem) : sprintf('%s(%s)', gettype($arrayOfDiscussionMailDiscussionMailItem), var_export($arrayOfDiscussionMailDiscussionMailItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The DiscussionMail property can only contain items of type \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountDiscussionMail, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set DiscussionMail value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws InvalidArgumentException
     * @param \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountDiscussionMail[] $discussionMail
     * @return \SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfDiscussionMail
     */
    public function setDiscussionMail(?array $discussionMail = null): self
    {
        // validation for constraint: array
        if ('' !== ($discussionMailArrayErrorMessage = self::validateDiscussionMailForArrayConstraintsFromSetDiscussionMail($discussionMail))) {
            throw new InvalidArgumentException($discussionMailArrayErrorMessage, __LINE__);
        }
        if (is_null($discussionMail) || (is_array($discussionMail) && empty($discussionMail))) {
            unset($this->DiscussionMail);
        } else {
            $this->DiscussionMail = $discussionMail;
        }
        
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountDiscussionMail|null
     */
    public function current(): ?\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountDiscussionMail
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountDiscussionMail|null
     */
    public function item($index): ?\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountDiscussionMail
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountDiscussionMail|null
     */
    public function first(): ?\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountDiscussionMail
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountDiscussionMail|null
     */
    public function last(): ?\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountDiscussionMail
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountDiscussionMail|null
     */
    public function offsetGet($offset): ?\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountDiscussionMail
    {
        return parent::offsetGet($offset);
    }
    /**
     * Add element to array
     * @see AbstractStructArrayBase::add()
     * @throws InvalidArgumentException
     * @param \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountDiscussionMail $item
     * @return \SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfDiscussionMail
     */
    public function add($item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountDiscussionMail) {
            throw new InvalidArgumentException(sprintf('The DiscussionMail property can only contain items of type \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountDiscussionMail, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        return parent::add($item);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string DiscussionMail
     */
    public function getAttributeName(): string
    {
        return 'DiscussionMail';
    }
}
