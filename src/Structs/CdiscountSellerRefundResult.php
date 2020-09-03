<?php

namespace SengentoBV\CdiscountMarketplaceSdk\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SellerRefundResult Structs
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:SellerRefundResult
 * @package Cdiscount
 * @subpackage Structs
 */
class CdiscountSellerRefundResult extends CdiscountServiceMessage
{
    /**
     * The Ean
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $Ean;
    /**
     * The Motive
     * @var string
     */
    public $Motive;
    /**
     * The SellerProductId
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $SellerProductId;
    /**
     * The Value
     * @var float
     */
    public $Value;
    /**
     * Constructor method for SellerRefundResult
     * @uses CdiscountSellerRefundResult::setEan()
     * @uses CdiscountSellerRefundResult::setMotive()
     * @uses CdiscountSellerRefundResult::setSellerProductId()
     * @uses CdiscountSellerRefundResult::setValue()
     * @param string $ean
     * @param string $motive
     * @param string $sellerProductId
     * @param float $value
     */
    public function __construct($ean = null, $motive = null, $sellerProductId = null, $value = null)
    {
        $this
            ->setEan($ean)
            ->setMotive($motive)
            ->setSellerProductId($sellerProductId)
            ->setValue($value);
    }
    /**
     * Get Ean value
     * @return string|null
     */
    public function getEan()
    {
        return $this->Ean;
    }
    /**
     * Set Ean value
     * @param string $ean
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountSellerRefundResult
     */
    public function setEan($ean = null)
    {
        // validation for constraint: string
        if (!is_null($ean) && !is_string($ean)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($ean, true), gettype($ean)), __LINE__);
        }
        $this->Ean = $ean;
        return $this;
    }
    /**
     * Get Motive value
     * @return string|null
     */
    public function getMotive()
    {
        return $this->Motive;
    }
    /**
     * Set Motive value
     * @uses \SengentoBV\CdiscountMarketplaceSdk\Enums\CdiscountRefundMotive::valueIsValid()
     * @uses \SengentoBV\CdiscountMarketplaceSdk\Enums\CdiscountRefundMotive::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $motive
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountSellerRefundResult
     */
    public function setMotive($motive = null)
    {
        // validation for constraint: enumeration
        if (!\SengentoBV\CdiscountMarketplaceSdk\Enums\CdiscountRefundMotive::valueIsValid($motive)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \SengentoBV\CdiscountMarketplaceSdk\Enums\CdiscountRefundMotive', is_array($motive) ? implode(', ', $motive) : var_export($motive, true), implode(', ', \SengentoBV\CdiscountMarketplaceSdk\Enums\CdiscountRefundMotive::getValidValues())), __LINE__);
        }
        $this->Motive = $motive;
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
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountSellerRefundResult
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
    /**
     * Get Value value
     * @return float|null
     */
    public function getValue()
    {
        return $this->Value;
    }
    /**
     * Set Value value
     * @param float $value
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountSellerRefundResult
     */
    public function setValue($value = null)
    {
        // validation for constraint: float
        if (!is_null($value) && !(is_float($value) || is_numeric($value))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($value, true), gettype($value)), __LINE__);
        }
        $this->Value = $value;
        return $this;
    }
}
