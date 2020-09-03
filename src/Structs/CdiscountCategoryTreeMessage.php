<?php

namespace SengentoBV\CdiscountMarketplaceSdk\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CategoryTreeMessage Structs
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:CategoryTreeMessage
 * @package Cdiscount
 * @subpackage Structs
 */
class CdiscountCategoryTreeMessage extends CdiscountServiceBaseAPIMessage
{
    /**
     * The CategoryTree
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountCategoryTree
     */
    public $CategoryTree;
    /**
     * Constructor method for CategoryTreeMessage
     * @uses CdiscountCategoryTreeMessage::setCategoryTree()
     * @param \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountCategoryTree $categoryTree
     */
    public function __construct(\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountCategoryTree $categoryTree = null)
    {
        $this
            ->setCategoryTree($categoryTree);
    }
    /**
     * Get CategoryTree value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountCategoryTree|null
     */
    public function getCategoryTree()
    {
        return isset($this->CategoryTree) ? $this->CategoryTree : null;
    }
    /**
     * Set CategoryTree value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountCategoryTree $categoryTree
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountCategoryTreeMessage
     */
    public function setCategoryTree(\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountCategoryTree $categoryTree = null)
    {
        if (is_null($categoryTree) || (is_array($categoryTree) && empty($categoryTree))) {
            unset($this->CategoryTree);
        } else {
            $this->CategoryTree = $categoryTree;
        }
        return $this;
    }
}
