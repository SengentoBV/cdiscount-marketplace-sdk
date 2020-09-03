<?php

namespace SengentoBV\CdiscountMarketplaceSdk\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for OrderStatusMessage Structs
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:OrderStatusMessage
 * @package Cdiscount
 * @subpackage Structs
 */
class CdiscountOrderStatusMessage extends CdiscountServiceBaseAPIMessage
{
    /**
     * The Status
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $Status;
    /**
     * Constructor method for OrderStatusMessage
     * @uses CdiscountOrderStatusMessage::setStatus()
     * @param string $status
     */
    public function __construct($status = null)
    {
        $this
            ->setStatus($status);
    }
    /**
     * Get Status value
     * @return string|null
     */
    public function getStatus()
    {
        return $this->Status;
    }
    /**
     * Set Status value
     * @uses \SengentoBV\CdiscountMarketplaceSdk\Enums\CdiscountExternalOrderStatus::valueIsValid()
     * @uses \SengentoBV\CdiscountMarketplaceSdk\Enums\CdiscountExternalOrderStatus::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $status
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountOrderStatusMessage
     */
    public function setStatus($status = null)
    {
        // validation for constraint: enumeration
        if (!\SengentoBV\CdiscountMarketplaceSdk\Enums\CdiscountExternalOrderStatus::valueIsValid($status)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \SengentoBV\CdiscountMarketplaceSdk\Enums\CdiscountExternalOrderStatus', is_array($status) ? implode(', ', $status) : var_export($status, true), implode(', ', \SengentoBV\CdiscountMarketplaceSdk\Enums\CdiscountExternalOrderStatus::getValidValues())), __LINE__);
        }
        $this->Status = $status;
        return $this;
    }
}
