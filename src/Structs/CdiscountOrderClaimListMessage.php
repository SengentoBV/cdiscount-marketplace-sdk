<?php

declare(strict_types=1);

namespace SengentoBV\CdiscountMarketplaceSdk\Structs;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for OrderClaimListMessage Structs
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:OrderClaimListMessage
 * @package Cdiscount
 * @subpackage Structs
 */
class CdiscountOrderClaimListMessage extends CdiscountServiceBaseAPIMessage
{
    /**
     * The OrderClaimList
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfOrderClaim|null
     */
    protected ?\SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfOrderClaim $OrderClaimList = null;
    /**
     * Constructor method for OrderClaimListMessage
     * @uses CdiscountOrderClaimListMessage::setOrderClaimList()
     * @param \SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfOrderClaim $orderClaimList
     */
    public function __construct(?\SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfOrderClaim $orderClaimList = null)
    {
        $this
            ->setOrderClaimList($orderClaimList);
    }
    /**
     * Get OrderClaimList value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfOrderClaim|null
     */
    public function getOrderClaimList(): ?\SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfOrderClaim
    {
        return isset($this->OrderClaimList) ? $this->OrderClaimList : null;
    }
    /**
     * Set OrderClaimList value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfOrderClaim $orderClaimList
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountOrderClaimListMessage
     */
    public function setOrderClaimList(?\SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfOrderClaim $orderClaimList = null): self
    {
        if (is_null($orderClaimList) || (is_array($orderClaimList) && empty($orderClaimList))) {
            unset($this->OrderClaimList);
        } else {
            $this->OrderClaimList = $orderClaimList;
        }
        
        return $this;
    }
}
