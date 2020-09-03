<?php

namespace SengentoBV\CdiscountMarketplaceSdk\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Voucher Structs
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:Voucher
 * @package Cdiscount
 * @subpackage Structs
 */
class CdiscountVoucher extends AbstractStructBase
{
    /**
     * The CreateDate
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $CreateDate;
    /**
     * The RefundInformation
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountRefundInformation
     */
    public $RefundInformation;
    /**
     * The Source
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $Source;
    /**
     * Constructor method for Voucher
     * @uses CdiscountVoucher::setCreateDate()
     * @uses CdiscountVoucher::setRefundInformation()
     * @uses CdiscountVoucher::setSource()
     * @param string $createDate
     * @param \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountRefundInformation $refundInformation
     * @param string $source
     */
    public function __construct($createDate = null, \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountRefundInformation $refundInformation = null, $source = null)
    {
        $this
            ->setCreateDate($createDate)
            ->setRefundInformation($refundInformation)
            ->setSource($source);
    }
    /**
     * Get CreateDate value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getCreateDate()
    {
        return isset($this->CreateDate) ? $this->CreateDate : null;
    }
    /**
     * Set CreateDate value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $createDate
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountVoucher
     */
    public function setCreateDate($createDate = null)
    {
        // validation for constraint: string
        if (!is_null($createDate) && !is_string($createDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($createDate, true), gettype($createDate)), __LINE__);
        }
        if (is_null($createDate) || (is_array($createDate) && empty($createDate))) {
            unset($this->CreateDate);
        } else {
            $this->CreateDate = $createDate;
        }
        return $this;
    }
    /**
     * Get RefundInformation value
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountRefundInformation|null
     */
    public function getRefundInformation()
    {
        return $this->RefundInformation;
    }
    /**
     * Set RefundInformation value
     * @param \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountRefundInformation $refundInformation
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountVoucher
     */
    public function setRefundInformation(\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountRefundInformation $refundInformation = null)
    {
        $this->RefundInformation = $refundInformation;
        return $this;
    }
    /**
     * Get Source value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getSource()
    {
        return isset($this->Source) ? $this->Source : null;
    }
    /**
     * Set Source value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @uses \SengentoBV\CdiscountMarketplaceSdk\Enums\CdiscountVoucherSourceActor::valueIsValid()
     * @uses \SengentoBV\CdiscountMarketplaceSdk\Enums\CdiscountVoucherSourceActor::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $source
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountVoucher
     */
    public function setSource($source = null)
    {
        // validation for constraint: enumeration
        if (!\SengentoBV\CdiscountMarketplaceSdk\Enums\CdiscountVoucherSourceActor::valueIsValid($source)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \SengentoBV\CdiscountMarketplaceSdk\Enums\CdiscountVoucherSourceActor', is_array($source) ? implode(', ', $source) : var_export($source, true), implode(', ', \SengentoBV\CdiscountMarketplaceSdk\Enums\CdiscountVoucherSourceActor::getValidValues())), __LINE__);
        }
        if (is_null($source) || (is_array($source) && empty($source))) {
            unset($this->Source);
        } else {
            $this->Source = $source;
        }
        return $this;
    }
}
