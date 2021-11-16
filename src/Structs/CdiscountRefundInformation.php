<?php

declare(strict_types=1);

namespace SengentoBV\CdiscountMarketplaceSdk\Structs;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RefundInformation Structs
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:RefundInformation
 * @package Cdiscount
 * @subpackage Structs
 */
class CdiscountRefundInformation extends AbstractStructBase
{
    /**
     * The Amount
     * @var float|null
     */
    protected ?float $Amount = null;
    /**
     * The MotiveId
     * @var int|null
     */
    protected ?int $MotiveId = null;
    /**
     * Constructor method for RefundInformation
     * @uses CdiscountRefundInformation::setAmount()
     * @uses CdiscountRefundInformation::setMotiveId()
     * @param float $amount
     * @param int $motiveId
     */
    public function __construct(?float $amount = null, ?int $motiveId = null)
    {
        $this
            ->setAmount($amount)
            ->setMotiveId($motiveId);
    }
    /**
     * Get Amount value
     * @return float|null
     */
    public function getAmount(): ?float
    {
        return $this->Amount;
    }
    /**
     * Set Amount value
     * @param float $amount
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountRefundInformation
     */
    public function setAmount(?float $amount = null): self
    {
        // validation for constraint: float
        if (!is_null($amount) && !(is_float($amount) || is_numeric($amount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($amount, true), gettype($amount)), __LINE__);
        }
        $this->Amount = $amount;
        
        return $this;
    }
    /**
     * Get MotiveId value
     * @return int|null
     */
    public function getMotiveId(): ?int
    {
        return $this->MotiveId;
    }
    /**
     * Set MotiveId value
     * @param int $motiveId
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountRefundInformation
     */
    public function setMotiveId(?int $motiveId = null): self
    {
        // validation for constraint: int
        if (!is_null($motiveId) && !(is_int($motiveId) || ctype_digit($motiveId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($motiveId, true), gettype($motiveId)), __LINE__);
        }
        $this->MotiveId = $motiveId;
        
        return $this;
    }
}
