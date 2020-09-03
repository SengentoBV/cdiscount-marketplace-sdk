<?php

namespace SengentoBV\CdiscountMarketplaceSdk\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetServiceOrderList Structs
 * @package Cdiscount
 * @subpackage Structs
 */
class CdiscountGetServiceOrderList extends AbstractStructBase
{
    /**
     * The headerMessage
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountHeaderMessage
     */
    public $headerMessage;
    /**
     * The orderFilter
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountOrderFilter
     */
    public $orderFilter;
    /**
     * Constructor method for GetServiceOrderList
     * @uses CdiscountGetServiceOrderList::setHeaderMessage()
     * @uses CdiscountGetServiceOrderList::setOrderFilter()
     * @param \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountHeaderMessage $headerMessage
     * @param \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountOrderFilter $orderFilter
     */
    public function __construct(\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountHeaderMessage $headerMessage = null, \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountOrderFilter $orderFilter = null)
    {
        $this
            ->setHeaderMessage($headerMessage)
            ->setOrderFilter($orderFilter);
    }
    /**
     * Get headerMessage value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountHeaderMessage|null
     */
    public function getHeaderMessage()
    {
        return isset($this->headerMessage) ? $this->headerMessage : null;
    }
    /**
     * Set headerMessage value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountHeaderMessage $headerMessage
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountGetServiceOrderList
     */
    public function setHeaderMessage(\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountHeaderMessage $headerMessage = null)
    {
        if (is_null($headerMessage) || (is_array($headerMessage) && empty($headerMessage))) {
            unset($this->headerMessage);
        } else {
            $this->headerMessage = $headerMessage;
        }
        return $this;
    }
    /**
     * Get orderFilter value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountOrderFilter|null
     */
    public function getOrderFilter()
    {
        return isset($this->orderFilter) ? $this->orderFilter : null;
    }
    /**
     * Set orderFilter value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountOrderFilter $orderFilter
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountGetServiceOrderList
     */
    public function setOrderFilter(\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountOrderFilter $orderFilter = null)
    {
        if (is_null($orderFilter) || (is_array($orderFilter) && empty($orderFilter))) {
            unset($this->orderFilter);
        } else {
            $this->orderFilter = $orderFilter;
        }
        return $this;
    }
}
