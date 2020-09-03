<?php

namespace SengentoBV\CdiscountMarketplaceSdk\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FulfilmentOrderLineListToSupplyMessage Structs
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:FulfilmentOrderLineListToSupplyMessage
 * @package Cdiscount
 * @subpackage Structs
 */
class CdiscountFulfilmentOrderLineListToSupplyMessage extends CdiscountServiceBaseAPIMessage
{
    /**
     * The OrderLineList
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfFulfilmentOrderLine
     */
    public $OrderLineList;
    /**
     * Constructor method for FulfilmentOrderLineListToSupplyMessage
     * @uses CdiscountFulfilmentOrderLineListToSupplyMessage::setOrderLineList()
     * @param \SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfFulfilmentOrderLine $orderLineList
     */
    public function __construct(\SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfFulfilmentOrderLine $orderLineList = null)
    {
        $this
            ->setOrderLineList($orderLineList);
    }
    /**
     * Get OrderLineList value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfFulfilmentOrderLine|null
     */
    public function getOrderLineList()
    {
        return isset($this->OrderLineList) ? $this->OrderLineList : null;
    }
    /**
     * Set OrderLineList value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfFulfilmentOrderLine $orderLineList
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountFulfilmentOrderLineListToSupplyMessage
     */
    public function setOrderLineList(\SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfFulfilmentOrderLine $orderLineList = null)
    {
        if (is_null($orderLineList) || (is_array($orderLineList) && empty($orderLineList))) {
            unset($this->OrderLineList);
        } else {
            $this->OrderLineList = $orderLineList;
        }
        return $this;
    }
}
