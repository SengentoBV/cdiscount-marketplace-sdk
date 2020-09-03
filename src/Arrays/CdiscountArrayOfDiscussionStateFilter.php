<?php

namespace SengentoBV\CdiscountMarketplaceSdk\Arrays;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfDiscussionStateFilter Arrays
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfDiscussionStateFilter
 * @package Cdiscount
 * @subpackage Arrays
 */
class CdiscountArrayOfDiscussionStateFilter extends AbstractStructArrayBase
{
    /**
     * The DiscussionStateFilter
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    public $DiscussionStateFilter;
    /**
     * Constructor method for ArrayOfDiscussionStateFilter
     * @uses CdiscountArrayOfDiscussionStateFilter::setDiscussionStateFilter()
     * @param string[] $discussionStateFilter
     */
    public function __construct(array $discussionStateFilter = array())
    {
        $this
            ->setDiscussionStateFilter($discussionStateFilter);
    }
    /**
     * Get DiscussionStateFilter value
     * @return string[]|null
     */
    public function getDiscussionStateFilter()
    {
        return $this->DiscussionStateFilter;
    }
    /**
     * This method is responsible for validating the values passed to the setDiscussionStateFilter method
     * This method is willingly generated in order to preserve the one-line inline validation within the setDiscussionStateFilter method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateDiscussionStateFilterForArrayConstraintsFromSetDiscussionStateFilter(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfDiscussionStateFilterDiscussionStateFilterItem) {
            // validation for constraint: enumeration
            if (!\SengentoBV\CdiscountMarketplaceSdk\Enums\CdiscountDiscussionStateFilter::valueIsValid($arrayOfDiscussionStateFilterDiscussionStateFilterItem)) {
                $invalidValues[] = is_object($arrayOfDiscussionStateFilterDiscussionStateFilterItem) ? get_class($arrayOfDiscussionStateFilterDiscussionStateFilterItem) : sprintf('%s(%s)', gettype($arrayOfDiscussionStateFilterDiscussionStateFilterItem), var_export($arrayOfDiscussionStateFilterDiscussionStateFilterItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \SengentoBV\CdiscountMarketplaceSdk\Enums\CdiscountDiscussionStateFilter', is_array($invalidValues) ? implode(', ', $invalidValues) : var_export($invalidValues, true), implode(', ', \SengentoBV\CdiscountMarketplaceSdk\Enums\CdiscountDiscussionStateFilter::getValidValues()));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set DiscussionStateFilter value
     * @uses \SengentoBV\CdiscountMarketplaceSdk\Enums\CdiscountDiscussionStateFilter::valueIsValid()
     * @uses \SengentoBV\CdiscountMarketplaceSdk\Enums\CdiscountDiscussionStateFilter::getValidValues()
     * @throws \InvalidArgumentException
     * @param string[] $discussionStateFilter
     * @return \SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfDiscussionStateFilter
     */
    public function setDiscussionStateFilter(array $discussionStateFilter = array())
    {
        // validation for constraint: array
        if ('' !== ($discussionStateFilterArrayErrorMessage = self::validateDiscussionStateFilterForArrayConstraintsFromSetDiscussionStateFilter($discussionStateFilter))) {
            throw new \InvalidArgumentException($discussionStateFilterArrayErrorMessage, __LINE__);
        }
        $this->DiscussionStateFilter = $discussionStateFilter;
        return $this;
    }
    /**
     * Add item to DiscussionStateFilter value
     * @uses \SengentoBV\CdiscountMarketplaceSdk\Enums\CdiscountDiscussionStateFilter::valueIsValid()
     * @uses \SengentoBV\CdiscountMarketplaceSdk\Enums\CdiscountDiscussionStateFilter::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfDiscussionStateFilter
     */
    public function addToDiscussionStateFilter($item)
    {
        // validation for constraint: enumeration
        if (!\SengentoBV\CdiscountMarketplaceSdk\Enums\CdiscountDiscussionStateFilter::valueIsValid($item)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \SengentoBV\CdiscountMarketplaceSdk\Enums\CdiscountDiscussionStateFilter', is_array($item) ? implode(', ', $item) : var_export($item, true), implode(', ', \SengentoBV\CdiscountMarketplaceSdk\Enums\CdiscountDiscussionStateFilter::getValidValues())), __LINE__);
        }
        $this->DiscussionStateFilter[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return string|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return string|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return string|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return string|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return string|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Add element to array
     * @see AbstractStructArrayBase::add()
     * @throws \InvalidArgumentException
     * @uses \SengentoBV\CdiscountMarketplaceSdk\Enums\CdiscountDiscussionStateFilter::valueIsValid()
     * @param string $item
     * @return \SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfDiscussionStateFilter
     */
    public function add($item)
    {
        // validation for constraint: enumeration
        if (!\SengentoBV\CdiscountMarketplaceSdk\Enums\CdiscountDiscussionStateFilter::valueIsValid($item)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \SengentoBV\CdiscountMarketplaceSdk\Enums\CdiscountDiscussionStateFilter', is_array($item) ? implode(', ', $item) : var_export($item, true), implode(', ', \SengentoBV\CdiscountMarketplaceSdk\Enums\CdiscountDiscussionStateFilter::getValidValues())), __LINE__);
        }
        return parent::add($item);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string DiscussionStateFilter
     */
    public function getAttributeName()
    {
        return 'DiscussionStateFilter';
    }
}
