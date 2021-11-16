<?php

declare(strict_types=1);

namespace SengentoBV\CdiscountMarketplaceSdk\Structs;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for OrderListMessage Structs
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:OrderListMessage
 * @package Cdiscount
 * @subpackage Structs
 */
class CdiscountOrderListMessage extends CdiscountServiceBaseAPIMessage
{
    /**
     * The OrderList
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfOrder|null
     */
    protected ?\SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfOrder $OrderList = null;
    /**
     * Constructor method for OrderListMessage
     * @uses CdiscountOrderListMessage::setOrderList()
     * @param \SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfOrder $orderList
     */
    public function __construct(?\SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfOrder $orderList = null)
    {
        $this
            ->setOrderList($orderList);
    }
    /**
     * Get OrderList value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfOrder|null
     */
    public function getOrderList(): ?\SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfOrder
    {
        return isset($this->OrderList) ? $this->OrderList : null;
    }
    /**
     * Set OrderList value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfOrder $orderList
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountOrderListMessage
     */
    public function setOrderList(?\SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfOrder $orderList = null): self
    {
        if (is_null($orderList) || (is_array($orderList) && empty($orderList))) {
            unset($this->OrderList);
        } else {
            $this->OrderList = $orderList;
        }
        
        return $this;
    }
}
