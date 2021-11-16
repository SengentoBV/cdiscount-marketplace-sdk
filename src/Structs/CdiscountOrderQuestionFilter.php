<?php

declare(strict_types=1);

namespace SengentoBV\CdiscountMarketplaceSdk\Structs;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for OrderQuestionFilter Structs
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:OrderQuestionFilter
 * @package Cdiscount
 * @subpackage Structs
 */
class CdiscountOrderQuestionFilter extends CdiscountDiscussionFilterBase
{
    /**
     * The OrderNumberList
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfstring|null
     */
    protected ?\SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfstring $OrderNumberList = null;
    /**
     * Constructor method for OrderQuestionFilter
     * @uses CdiscountOrderQuestionFilter::setOrderNumberList()
     * @param \SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfstring $orderNumberList
     */
    public function __construct(?\SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfstring $orderNumberList = null)
    {
        $this
            ->setOrderNumberList($orderNumberList);
    }
    /**
     * Get OrderNumberList value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfstring|null
     */
    public function getOrderNumberList(): ?\SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfstring
    {
        return isset($this->OrderNumberList) ? $this->OrderNumberList : null;
    }
    /**
     * Set OrderNumberList value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfstring $orderNumberList
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountOrderQuestionFilter
     */
    public function setOrderNumberList(?\SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfstring $orderNumberList = null): self
    {
        if (is_null($orderNumberList) || (is_array($orderNumberList) && empty($orderNumberList))) {
            unset($this->OrderNumberList);
        } else {
            $this->OrderNumberList = $orderNumberList;
        }
        
        return $this;
    }
}
