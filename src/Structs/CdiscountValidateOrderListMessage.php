<?php

declare(strict_types=1);

namespace SengentoBV\CdiscountMarketplaceSdk\Structs;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ValidateOrderListMessage Structs
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ValidateOrderListMessage
 * @package Cdiscount
 * @subpackage Structs
 */
class CdiscountValidateOrderListMessage extends AbstractStructBase
{
    /**
     * The OrderList
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfValidateOrder|null
     */
    protected ?\SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfValidateOrder $OrderList = null;
    /**
     * Constructor method for ValidateOrderListMessage
     * @uses CdiscountValidateOrderListMessage::setOrderList()
     * @param \SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfValidateOrder $orderList
     */
    public function __construct(?\SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfValidateOrder $orderList = null)
    {
        $this
            ->setOrderList($orderList);
    }
    /**
     * Get OrderList value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfValidateOrder|null
     */
    public function getOrderList(): ?\SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfValidateOrder
    {
        return isset($this->OrderList) ? $this->OrderList : null;
    }
    /**
     * Set OrderList value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfValidateOrder $orderList
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountValidateOrderListMessage
     */
    public function setOrderList(?\SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfValidateOrder $orderList = null): self
    {
        if (is_null($orderList) || (is_array($orderList) && empty($orderList))) {
            unset($this->OrderList);
        } else {
            $this->OrderList = $orderList;
        }
        
        return $this;
    }
}
