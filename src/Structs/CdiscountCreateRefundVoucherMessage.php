<?php

namespace SengentoBV\CdiscountMarketplaceSdk\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CreateRefundVoucherMessage Structs
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:CreateRefundVoucherMessage
 * @package Cdiscount
 * @subpackage Structs
 */
class CdiscountCreateRefundVoucherMessage extends CdiscountServiceBaseAPIMessage
{
    /**
     * The CommercialGestureList
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var \SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfRefundInformationMessage
     */
    public $CommercialGestureList;
    /**
     * The OrderNumber
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $OrderNumber;
    /**
     * The SellerRefundList
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var \SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfSellerRefundResult
     */
    public $SellerRefundList;
    /**
     * Constructor method for CreateRefundVoucherMessage
     * @uses CdiscountCreateRefundVoucherMessage::setCommercialGestureList()
     * @uses CdiscountCreateRefundVoucherMessage::setOrderNumber()
     * @uses CdiscountCreateRefundVoucherMessage::setSellerRefundList()
     * @param \SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfRefundInformationMessage $commercialGestureList
     * @param string $orderNumber
     * @param \SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfSellerRefundResult $sellerRefundList
     */
    public function __construct(\SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfRefundInformationMessage $commercialGestureList = null, $orderNumber = null, \SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfSellerRefundResult $sellerRefundList = null)
    {
        $this
            ->setCommercialGestureList($commercialGestureList)
            ->setOrderNumber($orderNumber)
            ->setSellerRefundList($sellerRefundList);
    }
    /**
     * Get CommercialGestureList value
     * @return \SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfRefundInformationMessage|null
     */
    public function getCommercialGestureList()
    {
        return $this->CommercialGestureList;
    }
    /**
     * Set CommercialGestureList value
     * @param \SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfRefundInformationMessage $commercialGestureList
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountCreateRefundVoucherMessage
     */
    public function setCommercialGestureList(\SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfRefundInformationMessage $commercialGestureList = null)
    {
        $this->CommercialGestureList = $commercialGestureList;
        return $this;
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
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountCreateRefundVoucherMessage
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
     * Get SellerRefundList value
     * @return \SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfSellerRefundResult|null
     */
    public function getSellerRefundList()
    {
        return $this->SellerRefundList;
    }
    /**
     * Set SellerRefundList value
     * @param \SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfSellerRefundResult $sellerRefundList
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountCreateRefundVoucherMessage
     */
    public function setSellerRefundList(\SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfSellerRefundResult $sellerRefundList = null)
    {
        $this->SellerRefundList = $sellerRefundList;
        return $this;
    }
}
