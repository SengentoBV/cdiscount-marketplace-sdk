<?php

namespace SengentoBV\CdiscountMarketplaceSdk\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SellerRefundResultMessage Structs
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:SellerRefundResultMessage
 * @package Cdiscount
 * @subpackage Structs
 */
class CdiscountSellerRefundResultMessage extends CdiscountServiceMessage
{
    /**
     * The OrderNumber
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $OrderNumber;
    /**
     * The SellerRefundResultList
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var \SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfSellerRefundResult
     */
    public $SellerRefundResultList;
    /**
     * Constructor method for SellerRefundResultMessage
     * @uses CdiscountSellerRefundResultMessage::setOrderNumber()
     * @uses CdiscountSellerRefundResultMessage::setSellerRefundResultList()
     * @param string $orderNumber
     * @param \SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfSellerRefundResult $sellerRefundResultList
     */
    public function __construct($orderNumber = null, \SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfSellerRefundResult $sellerRefundResultList = null)
    {
        $this
            ->setOrderNumber($orderNumber)
            ->setSellerRefundResultList($sellerRefundResultList);
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
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountSellerRefundResultMessage
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
     * Get SellerRefundResultList value
     * @return \SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfSellerRefundResult|null
     */
    public function getSellerRefundResultList()
    {
        return $this->SellerRefundResultList;
    }
    /**
     * Set SellerRefundResultList value
     * @param \SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfSellerRefundResult $sellerRefundResultList
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountSellerRefundResultMessage
     */
    public function setSellerRefundResultList(\SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfSellerRefundResult $sellerRefundResultList = null)
    {
        $this->SellerRefundResultList = $sellerRefundResultList;
        return $this;
    }
}
