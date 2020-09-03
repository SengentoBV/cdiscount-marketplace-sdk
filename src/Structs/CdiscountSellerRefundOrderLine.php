<?php

namespace SengentoBV\CdiscountMarketplaceSdk\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SellerRefundOrderLine Structs
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:SellerRefundOrderLine
 * @package Cdiscount
 * @subpackage Structs
 */
class CdiscountSellerRefundOrderLine extends AbstractStructBase
{
    /**
     * The Ean
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $Ean;
    /**
     * The RefundShippingCharges
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var bool
     */
    public $RefundShippingCharges;
    /**
     * The SellerProductId
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $SellerProductId;
    /**
     * Constructor method for SellerRefundOrderLine
     * @uses CdiscountSellerRefundOrderLine::setEan()
     * @uses CdiscountSellerRefundOrderLine::setRefundShippingCharges()
     * @uses CdiscountSellerRefundOrderLine::setSellerProductId()
     * @param string $ean
     * @param bool $refundShippingCharges
     * @param string $sellerProductId
     */
    public function __construct($ean = null, $refundShippingCharges = null, $sellerProductId = null)
    {
        $this
            ->setEan($ean)
            ->setRefundShippingCharges($refundShippingCharges)
            ->setSellerProductId($sellerProductId);
    }
    /**
     * Get Ean value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getEan()
    {
        return isset($this->Ean) ? $this->Ean : null;
    }
    /**
     * Set Ean value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $ean
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountSellerRefundOrderLine
     */
    public function setEan($ean = null)
    {
        // validation for constraint: string
        if (!is_null($ean) && !is_string($ean)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($ean, true), gettype($ean)), __LINE__);
        }
        if (is_null($ean) || (is_array($ean) && empty($ean))) {
            unset($this->Ean);
        } else {
            $this->Ean = $ean;
        }
        return $this;
    }
    /**
     * Get RefundShippingCharges value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return bool|null
     */
    public function getRefundShippingCharges()
    {
        return isset($this->RefundShippingCharges) ? $this->RefundShippingCharges : null;
    }
    /**
     * Set RefundShippingCharges value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param bool $refundShippingCharges
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountSellerRefundOrderLine
     */
    public function setRefundShippingCharges($refundShippingCharges = null)
    {
        // validation for constraint: boolean
        if (!is_null($refundShippingCharges) && !is_bool($refundShippingCharges)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($refundShippingCharges, true), gettype($refundShippingCharges)), __LINE__);
        }
        if (is_null($refundShippingCharges) || (is_array($refundShippingCharges) && empty($refundShippingCharges))) {
            unset($this->RefundShippingCharges);
        } else {
            $this->RefundShippingCharges = $refundShippingCharges;
        }
        return $this;
    }
    /**
     * Get SellerProductId value
     * @return string|null
     */
    public function getSellerProductId()
    {
        return $this->SellerProductId;
    }
    /**
     * Set SellerProductId value
     * @param string $sellerProductId
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountSellerRefundOrderLine
     */
    public function setSellerProductId($sellerProductId = null)
    {
        // validation for constraint: string
        if (!is_null($sellerProductId) && !is_string($sellerProductId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($sellerProductId, true), gettype($sellerProductId)), __LINE__);
        }
        $this->SellerProductId = $sellerProductId;
        return $this;
    }
}
