<?php

declare(strict_types=1);

namespace SengentoBV\CdiscountMarketplaceSdk\Structs;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

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
     * @var string|null
     */
    protected ?string $Ean = null;
    /**
     * The Motive
     * @var string|null
     */
    protected ?string $Motive = null;
    /**
     * The SellerProductId
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string|null
     */
    protected ?string $SellerProductId = null;
    /**
     * The Value
     * @var float|null
     */
    protected ?float $Value = null;
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
    public function __construct(?string $ean = null, ?string $motive = null, ?string $sellerProductId = null, ?float $value = null)
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
    public function getEan(): ?string
    {
        return $this->Ean;
    }
    /**
     * Set Ean value
     * @param string $ean
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountSellerRefundResult
     */
    public function setEan(?string $ean = null): self
    {
        // validation for constraint: string
        if (!is_null($ean) && !is_string($ean)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($ean, true), gettype($ean)), __LINE__);
        }
        $this->Ean = $ean;
        
        return $this;
    }
    /**
     * Get Motive value
     * @return string|null
     */
    public function getMotive(): ?string
    {
        return $this->Motive;
    }
    /**
     * Set Motive value
     * @uses \SengentoBV\CdiscountMarketplaceSdk\Enums\CdiscountRefundMotive::valueIsValid()
     * @uses \SengentoBV\CdiscountMarketplaceSdk\Enums\CdiscountRefundMotive::getValidValues()
     * @throws InvalidArgumentException
     * @param string $motive
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountSellerRefundResult
     */
    public function setMotive(?string $motive = null): self
    {
        // validation for constraint: enumeration
        if (!\SengentoBV\CdiscountMarketplaceSdk\Enums\CdiscountRefundMotive::valueIsValid($motive)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \SengentoBV\CdiscountMarketplaceSdk\Enums\CdiscountRefundMotive', is_array($motive) ? implode(', ', $motive) : var_export($motive, true), implode(', ', \SengentoBV\CdiscountMarketplaceSdk\Enums\CdiscountRefundMotive::getValidValues())), __LINE__);
        }
        $this->Motive = $motive;
        
        return $this;
    }
    /**
     * Get SellerProductId value
     * @return string|null
     */
    public function getSellerProductId(): ?string
    {
        return $this->SellerProductId;
    }
    /**
     * Set SellerProductId value
     * @param string $sellerProductId
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountSellerRefundResult
     */
    public function setSellerProductId(?string $sellerProductId = null): self
    {
        // validation for constraint: string
        if (!is_null($sellerProductId) && !is_string($sellerProductId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($sellerProductId, true), gettype($sellerProductId)), __LINE__);
        }
        $this->SellerProductId = $sellerProductId;
        
        return $this;
    }
    /**
     * Get Value value
     * @return float|null
     */
    public function getValue(): ?float
    {
        return $this->Value;
    }
    /**
     * Set Value value
     * @param float $value
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountSellerRefundResult
     */
    public function setValue(?float $value = null): self
    {
        // validation for constraint: float
        if (!is_null($value) && !(is_float($value) || is_numeric($value))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($value, true), gettype($value)), __LINE__);
        }
        $this->Value = $value;
        
        return $this;
    }
}
