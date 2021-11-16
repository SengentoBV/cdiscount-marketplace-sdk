<?php

declare(strict_types=1);

namespace SengentoBV\CdiscountMarketplaceSdk\Structs;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ServiceOrderListMessage Structs
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ServiceOrderListMessage
 * @package Cdiscount
 * @subpackage Structs
 */
class CdiscountServiceOrderListMessage extends CdiscountServiceBaseAPIMessage
{
    /**
     * The ServiceOrderList
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfServiceOrder|null
     */
    protected ?\SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfServiceOrder $ServiceOrderList = null;
    /**
     * Constructor method for ServiceOrderListMessage
     * @uses CdiscountServiceOrderListMessage::setServiceOrderList()
     * @param \SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfServiceOrder $serviceOrderList
     */
    public function __construct(?\SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfServiceOrder $serviceOrderList = null)
    {
        $this
            ->setServiceOrderList($serviceOrderList);
    }
    /**
     * Get ServiceOrderList value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfServiceOrder|null
     */
    public function getServiceOrderList(): ?\SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfServiceOrder
    {
        return isset($this->ServiceOrderList) ? $this->ServiceOrderList : null;
    }
    /**
     * Set ServiceOrderList value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfServiceOrder $serviceOrderList
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountServiceOrderListMessage
     */
    public function setServiceOrderList(?\SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfServiceOrder $serviceOrderList = null): self
    {
        if (is_null($serviceOrderList) || (is_array($serviceOrderList) && empty($serviceOrderList))) {
            unset($this->ServiceOrderList);
        } else {
            $this->ServiceOrderList = $serviceOrderList;
        }
        
        return $this;
    }
}
