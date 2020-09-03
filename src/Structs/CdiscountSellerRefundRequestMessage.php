<?php

namespace SengentoBV\CdiscountMarketplaceSdk\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SellerRefundRequestMessage Structs
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:SellerRefundRequestMessage
 * @package Cdiscount
 * @subpackage Structs
 */
class CdiscountSellerRefundRequestMessage extends AbstractStructBase
{
    /**
     * The OrderNumber
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $OrderNumber;
    /**
     * The SellerRefundRequestList
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var \SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfSellerRefundRequest
     */
    public $SellerRefundRequestList;
    /**
     * Constructor method for SellerRefundRequestMessage
     * @uses CdiscountSellerRefundRequestMessage::setOrderNumber()
     * @uses CdiscountSellerRefundRequestMessage::setSellerRefundRequestList()
     * @param string $orderNumber
     * @param \SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfSellerRefundRequest $sellerRefundRequestList
     */
    public function __construct($orderNumber = null, \SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfSellerRefundRequest $sellerRefundRequestList = null)
    {
        $this
            ->setOrderNumber($orderNumber)
            ->setSellerRefundRequestList($sellerRefundRequestList);
    }
    /**
     * Get OrderNumber value
     * @return string|null
     */
    public function getOrderNumber()
    {
        return $this->OrderNumber;
    }
    /**
     * Set OrderNumber value
     * @param string $orderNumber
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountSellerRefundRequestMessage
     */
    public function setOrderNumber($orderNumber = null)
    {
        // validation for constraint: string
        if (!is_null($orderNumber) && !is_string($orderNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($orderNumber, true), gettype($orderNumber)), __LINE__);
        }
        $this->OrderNumber = $orderNumber;
        return $this;
    }
    /**
     * Get SellerRefundRequestList value
     * @return \SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfSellerRefundRequest|null
     */
    public function getSellerRefundRequestList()
    {
        return $this->SellerRefundRequestList;
    }
    /**
     * Set SellerRefundRequestList value
     * @param \SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfSellerRefundRequest $sellerRefundRequestList
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountSellerRefundRequestMessage
     */
    public function setSellerRefundRequestList(\SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfSellerRefundRequest $sellerRefundRequestList = null)
    {
        $this->SellerRefundRequestList = $sellerRefundRequestList;
        return $this;
    }
}
