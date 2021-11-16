<?php

declare(strict_types=1);

namespace SengentoBV\CdiscountMarketplaceSdk\Structs;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ServiceOrder Structs
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ServiceOrder
 * @package Cdiscount
 * @subpackage Structs
 */
class CdiscountServiceOrder extends CdiscountOrder
{
    /**
     * The AssociatedOrderInfoList
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfAssociatedOrderInfo|null
     */
    protected ?\SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfAssociatedOrderInfo $AssociatedOrderInfoList = null;
    /**
     * Constructor method for ServiceOrder
     * @uses CdiscountServiceOrder::setAssociatedOrderInfoList()
     * @param \SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfAssociatedOrderInfo $associatedOrderInfoList
     */
    public function __construct(?\SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfAssociatedOrderInfo $associatedOrderInfoList = null)
    {
        $this
            ->setAssociatedOrderInfoList($associatedOrderInfoList);
    }
    /**
     * Get AssociatedOrderInfoList value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfAssociatedOrderInfo|null
     */
    public function getAssociatedOrderInfoList(): ?\SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfAssociatedOrderInfo
    {
        return isset($this->AssociatedOrderInfoList) ? $this->AssociatedOrderInfoList : null;
    }
    /**
     * Set AssociatedOrderInfoList value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfAssociatedOrderInfo $associatedOrderInfoList
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountServiceOrder
     */
    public function setAssociatedOrderInfoList(?\SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfAssociatedOrderInfo $associatedOrderInfoList = null): self
    {
        if (is_null($associatedOrderInfoList) || (is_array($associatedOrderInfoList) && empty($associatedOrderInfoList))) {
            unset($this->AssociatedOrderInfoList);
        } else {
            $this->AssociatedOrderInfoList = $associatedOrderInfoList;
        }
        
        return $this;
    }
}
