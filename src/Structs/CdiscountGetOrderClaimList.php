<?php

namespace SengentoBV\CdiscountMarketplaceSdk\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetOrderClaimList Structs
 * @package Cdiscount
 * @subpackage Structs
 */
class CdiscountGetOrderClaimList extends AbstractStructBase
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
     * The orderClaimFilter
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountOrderClaimFilter
     */
    public $orderClaimFilter;
    /**
     * Constructor method for GetOrderClaimList
     * @uses CdiscountGetOrderClaimList::setHeaderMessage()
     * @uses CdiscountGetOrderClaimList::setOrderClaimFilter()
     * @param \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountHeaderMessage $headerMessage
     * @param \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountOrderClaimFilter $orderClaimFilter
     */
    public function __construct(\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountHeaderMessage $headerMessage = null, \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountOrderClaimFilter $orderClaimFilter = null)
    {
        $this
            ->setHeaderMessage($headerMessage)
            ->setOrderClaimFilter($orderClaimFilter);
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
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountGetOrderClaimList
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
     * Get orderClaimFilter value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountOrderClaimFilter|null
     */
    public function getOrderClaimFilter()
    {
        return isset($this->orderClaimFilter) ? $this->orderClaimFilter : null;
    }
    /**
     * Set orderClaimFilter value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountOrderClaimFilter $orderClaimFilter
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountGetOrderClaimList
     */
    public function setOrderClaimFilter(\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountOrderClaimFilter $orderClaimFilter = null)
    {
        if (is_null($orderClaimFilter) || (is_array($orderClaimFilter) && empty($orderClaimFilter))) {
            unset($this->orderClaimFilter);
        } else {
            $this->orderClaimFilter = $orderClaimFilter;
        }
        return $this;
    }
}
