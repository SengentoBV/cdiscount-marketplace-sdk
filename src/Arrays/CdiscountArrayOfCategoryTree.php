<?php

namespace SengentoBV\CdiscountMarketplaceSdk\Arrays;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfCategoryTree Arrays
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfCategoryTree
 * @package Cdiscount
 * @subpackage Arrays
 */
class CdiscountArrayOfCategoryTree extends AbstractStructArrayBase
{
    /**
     * The CategoryTree
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountCategoryTree[]
     */
    public $CategoryTree;
    /**
     * Constructor method for ArrayOfCategoryTree
     * @uses CdiscountArrayOfCategoryTree::setCategoryTree()
     * @param \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountCategoryTree[] $categoryTree
     */
    public function __construct(array $categoryTree = array())
    {
        $this
            ->setCategoryTree($categoryTree);
    }
    /**
     * Get CategoryTree value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountCategoryTree[]|null
     */
    public function getCategoryTree()
    {
        return isset($this->CategoryTree) ? $this->CategoryTree : null;
    }
    /**
     * This method is responsible for validating the values passed to the setCategoryTree method
     * This method is willingly generated in order to preserve the one-line inline validation within the setCategoryTree method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateCategoryTreeForArrayConstraintsFromSetCategoryTree(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfCategoryTreeCategoryTreeItem) {
            // validation for constraint: itemType
            if (!$arrayOfCategoryTreeCategoryTreeItem instanceof \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountCategoryTree) {
                $invalidValues[] = is_object($arrayOfCategoryTreeCategoryTreeItem) ? get_class($arrayOfCategoryTreeCategoryTreeItem) : sprintf('%s(%s)', gettype($arrayOfCategoryTreeCategoryTreeItem), var_export($arrayOfCategoryTreeCategoryTreeItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The CategoryTree property can only contain items of type \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountCategoryTree, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set CategoryTree value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountCategoryTree[] $categoryTree
     * @return \SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfCategoryTree
     */
    public function setCategoryTree(array $categoryTree = array())
    {
        // validation for constraint: array
        if ('' !== ($categoryTreeArrayErrorMessage = self::validateCategoryTreeForArrayConstraintsFromSetCategoryTree($categoryTree))) {
            throw new \InvalidArgumentException($categoryTreeArrayErrorMessage, __LINE__);
        }
        if (is_null($categoryTree) || (is_array($categoryTree) && empty($categoryTree))) {
            unset($this->CategoryTree);
        } else {
            $this->CategoryTree = $categoryTree;
        }
        return $this;
    }
    /**
     * Add item to CategoryTree value
     * @throws \InvalidArgumentException
     * @param \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountCategoryTree $item
     * @return \SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfCategoryTree
     */
    public function addToCategoryTree(\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountCategoryTree $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountCategoryTree) {
            throw new \InvalidArgumentException(sprintf('The CategoryTree property can only contain items of type \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountCategoryTree, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->CategoryTree[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountCategoryTree|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountCategoryTree|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountCategoryTree|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountCategoryTree|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountCategoryTree|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string CategoryTree
     */
    public function getAttributeName()
    {
        return 'CategoryTree';
    }
}
