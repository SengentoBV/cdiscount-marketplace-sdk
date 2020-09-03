<?php

namespace SengentoBV\CdiscountMarketplaceSdk\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for OrderIntegrationRequest Structs
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:OrderIntegrationRequest
 * @package Cdiscount
 * @subpackage Structs
 */
class CdiscountOrderIntegrationRequest extends AbstractStructBase
{
    /**
     * The Order
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountExternalOrder
     */
    public $Order;
    /**
     * Constructor method for OrderIntegrationRequest
     * @uses CdiscountOrderIntegrationRequest::setOrder()
     * @param \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountExternalOrder $order
     */
    public function __construct(\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountExternalOrder $order = null)
    {
        $this
            ->setOrder($order);
    }
    /**
     * Get Order value
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountExternalOrder|null
     */
    public function getOrder()
    {
        return $this->Order;
    }
    /**
     * Set Order value
     * @param \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountExternalOrder $order
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountOrderIntegrationRequest
     */
    public function setOrder(\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountExternalOrder $order = null)
    {
        $this->Order = $order;
        return $this;
    }
}
