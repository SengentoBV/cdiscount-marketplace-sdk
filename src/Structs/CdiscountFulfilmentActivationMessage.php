<?php

declare(strict_types=1);

namespace SengentoBV\CdiscountMarketplaceSdk\Structs;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FulfilmentActivationMessage Structs
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:FulfilmentActivationMessage
 * @package Cdiscount
 * @subpackage Structs
 */
class CdiscountFulfilmentActivationMessage extends CdiscountServiceBaseAPIMessage
{
    /**
     * The DepositId
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $DepositId = null;
    /**
     * Constructor method for FulfilmentActivationMessage
     * @uses CdiscountFulfilmentActivationMessage::setDepositId()
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
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountFulfilmentActivationMessage
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
