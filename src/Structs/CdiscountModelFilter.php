<?php

namespace SengentoBV\CdiscountMarketplaceSdk\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ModelFilter Structs
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ModelFilter
 * @package Cdiscount
 * @subpackage Structs
 */
class CdiscountModelFilter extends AbstractStructBase
{
    /**
     * The CategoryCodeList
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfstring
     */
    public $CategoryCodeList;
    /**
     * Constructor method for ModelFilter
     * @uses CdiscountModelFilter::setCategoryCodeList()
     * @param \SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfstring $categoryCodeList
     */
    public function __construct(\SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfstring $categoryCodeList = null)
    {
        $this
            ->setCategoryCodeList($categoryCodeList);
    }
    /**
     * Get CategoryCodeList value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfstring|null
     */
    public function getCategoryCodeList()
    {
        return isset($this->CategoryCodeList) ? $this->CategoryCodeList : null;
    }
    /**
     * Set CategoryCodeList value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfstring $categoryCodeList
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountModelFilter
     */
    public function setCategoryCodeList(\SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfstring $categoryCodeList = null)
    {
        if (is_null($categoryCodeList) || (is_array($categoryCodeList) && empty($categoryCodeList))) {
            unset($this->CategoryCodeList);
        } else {
            $this->CategoryCodeList = $categoryCodeList;
        }
        return $this;
    }
}
