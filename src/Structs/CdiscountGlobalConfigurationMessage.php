<?php

declare(strict_types=1);

namespace SengentoBV\CdiscountMarketplaceSdk\Structs;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GlobalConfigurationMessage Structs
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:GlobalConfigurationMessage
 * @package Cdiscount
 * @subpackage Structs
 */
class CdiscountGlobalConfigurationMessage extends CdiscountServiceBaseAPIMessage
{
    /**
     * The CarrierList
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfCarrier|null
     */
    protected ?\SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfCarrier $CarrierList = null;
    /**
     * Constructor method for GlobalConfigurationMessage
     * @uses CdiscountGlobalConfigurationMessage::setCarrierList()
     * @param \SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfCarrier $carrierList
     */
    public function __construct(?\SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfCarrier $carrierList = null)
    {
        $this
            ->setCarrierList($carrierList);
    }
    /**
     * Get CarrierList value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfCarrier|null
     */
    public function getCarrierList(): ?\SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfCarrier
    {
        return isset($this->CarrierList) ? $this->CarrierList : null;
    }
    /**
     * Set CarrierList value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfCarrier $carrierList
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountGlobalConfigurationMessage
     */
    public function setCarrierList(?\SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfCarrier $carrierList = null): self
    {
        if (is_null($carrierList) || (is_array($carrierList) && empty($carrierList))) {
            unset($this->CarrierList);
        } else {
            $this->CarrierList = $carrierList;
        }
        
        return $this;
    }
}
