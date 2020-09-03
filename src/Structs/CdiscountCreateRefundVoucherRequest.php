<?php

namespace SengentoBV\CdiscountMarketplaceSdk\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CreateRefundVoucherRequest Structs
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:CreateRefundVoucherRequest
 * @package Cdiscount
 * @subpackage Structs
 */
class CdiscountCreateRefundVoucherRequest extends AbstractStructBase
{
    /**
     * The CommercialGestureList
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfRefundInformation
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
     * - minOccurs: 0
     * - nillable: true
     * @var \SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfSellerRefundRequest
     */
    public $SellerRefundList;
    /**
     * Constructor method for CreateRefundVoucherRequest
     * @uses CdiscountCreateRefundVoucherRequest::setCommercialGestureList()
     * @uses CdiscountCreateRefundVoucherRequest::setOrderNumber()
     * @uses CdiscountCreateRefundVoucherRequest::setSellerRefundList()
     * @param \SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfRefundInformation $commercialGestureList
     * @param string $orderNumber
     * @param \SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfSellerRefundRequest $sellerRefundList
     */
    public function __construct(\SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfRefundInformation $commercialGestureList = null, $orderNumber = null, \SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfSellerRefundRequest $sellerRefundList = null)
    {
        $this
            ->setCommercialGestureList($commercialGestureList)
            ->setOrderNumber($orderNumber)
            ->setSellerRefundList($sellerRefundList);
    }
    /**
     * Get CommercialGestureList value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfRefundInformation|null
     */
    public function getCommercialGestureList()
    {
        return isset($this->CommercialGestureList) ? $this->CommercialGestureList : null;
    }
    /**
     * Set CommercialGestureList value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfRefundInformation $commercialGestureList
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountCreateRefundVoucherRequest
     */
    public function setCommercialGestureList(\SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfRefundInformation $commercialGestureList = null)
    {
        if (is_null($commercialGestureList) || (is_array($commercialGestureList) && empty($commercialGestureList))) {
            unset($this->CommercialGestureList);
        } else {
            $this->CommercialGestureList = $commercialGestureList;
        }
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
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountCreateRefundVoucherRequest
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
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfSellerRefundRequest|null
     */
    public function getSellerRefundList()
    {
        return isset($this->SellerRefundList) ? $this->SellerRefundList : null;
    }
    /**
     * Set SellerRefundList value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfSellerRefundRequest $sellerRefundList
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountCreateRefundVoucherRequest
     */
    public function setSellerRefundList(\SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfSellerRefundRequest $sellerRefundList = null)
    {
        if (is_null($sellerRefundList) || (is_array($sellerRefundList) && empty($sellerRefundList))) {
            unset($this->SellerRefundList);
        } else {
            $this->SellerRefundList = $sellerRefundList;
        }
        return $this;
    }
}
