<?php

namespace SengentoBV\CdiscountMarketplaceSdk\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RefundInformationMessage Structs
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:RefundInformationMessage
 * @package Cdiscount
 * @subpackage Structs
 */
class CdiscountRefundInformationMessage extends CdiscountServiceMessage
{
    /**
     * The Amount
     * @var float
     */
    public $Amount;
    /**
     * The MotiveId
     * @var int
     */
    public $MotiveId;
    /**
     * Constructor method for RefundInformationMessage
     * @uses CdiscountRefundInformationMessage::setAmount()
     * @uses CdiscountRefundInformationMessage::setMotiveId()
     * @param float $amount
     * @param int $motiveId
     */
    public function __construct($amount = null, $motiveId = null)
    {
        $this
            ->setAmount($amount)
            ->setMotiveId($motiveId);
    }
    /**
     * Get Amount value
     * @return float|null
     */
    public function getAmount()
    {
        return $this->Amount;
    }
    /**
     * Set Amount value
     * @param float $amount
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountRefundInformationMessage
     */
    public function setAmount($amount = null)
    {
        // validation for constraint: float
        if (!is_null($amount) && !(is_float($amount) || is_numeric($amount))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($amount, true), gettype($amount)), __LINE__);
        }
        $this->Amount = $amount;
        return $this;
    }
    /**
     * Get MotiveId value
     * @return int|null
     */
    public function getMotiveId()
    {
        return $this->MotiveId;
    }
    /**
     * Set MotiveId value
     * @param int $motiveId
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountRefundInformationMessage
     */
    public function setMotiveId($motiveId = null)
    {
        // validation for constraint: int
        if (!is_null($motiveId) && !(is_int($motiveId) || ctype_digit($motiveId))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($motiveId, true), gettype($motiveId)), __LINE__);
        }
        $this->MotiveId = $motiveId;
        return $this;
    }
}
