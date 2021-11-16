<?php

declare(strict_types=1);

namespace SengentoBV\CdiscountMarketplaceSdk\Structs;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SupplyOrderReportMessage Structs
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:SupplyOrderReportMessage
 * @package Cdiscount
 * @subpackage Structs
 */
class CdiscountSupplyOrderReportMessage extends CdiscountServiceBaseAPIMessage
{
    /**
     * The DepositId
     * @var int|null
     */
    protected ?int $DepositId = null;
    /**
     * Constructor method for SupplyOrderReportMessage
     * @uses CdiscountSupplyOrderReportMessage::setDepositId()
     * @param int $depositId
     */
    public function __construct(?int $depositId = null)
    {
        $this
            ->setDepositId($depositId);
    }
    /**
     * Get DepositId value
     * @return int|null
     */
    public function getDepositId(): ?int
    {
        return $this->DepositId;
    }
    /**
     * Set DepositId value
     * @param int $depositId
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountSupplyOrderReportMessage
     */
    public function setDepositId(?int $depositId = null): self
    {
        // validation for constraint: int
        if (!is_null($depositId) && !(is_int($depositId) || ctype_digit($depositId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($depositId, true), gettype($depositId)), __LINE__);
        }
        $this->DepositId = $depositId;
        
        return $this;
    }
}
