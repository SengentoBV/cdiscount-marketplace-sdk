<?php

declare(strict_types=1);

namespace SengentoBV\CdiscountMarketplaceSdk\Structs;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CloseDiscussionResult Structs
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:CloseDiscussionResult
 * @package Cdiscount
 * @subpackage Structs
 */
class CdiscountCloseDiscussionResult extends AbstractStructBase
{
    /**
     * The DiscussionId
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $DiscussionId = null;
    /**
     * The OperationStatus
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $OperationStatus = null;
    /**
     * Constructor method for CloseDiscussionResult
     * @uses CdiscountCloseDiscussionResult::setDiscussionId()
     * @uses CdiscountCloseDiscussionResult::setOperationStatus()
     * @param int $discussionId
     * @param string $operationStatus
     */
    public function __construct(?int $discussionId = null, ?string $operationStatus = null)
    {
        $this
            ->setDiscussionId($discussionId)
            ->setOperationStatus($operationStatus);
    }
    /**
     * Get DiscussionId value
     * @return int|null
     */
    public function getDiscussionId(): ?int
    {
        return $this->DiscussionId;
    }
    /**
     * Set DiscussionId value
     * @param int $discussionId
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountCloseDiscussionResult
     */
    public function setDiscussionId(?int $discussionId = null): self
    {
        // validation for constraint: int
        if (!is_null($discussionId) && !(is_int($discussionId) || ctype_digit($discussionId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($discussionId, true), gettype($discussionId)), __LINE__);
        }
        $this->DiscussionId = $discussionId;
        
        return $this;
    }
    /**
     * Get OperationStatus value
     * @return string|null
     */
    public function getOperationStatus(): ?string
    {
        return $this->OperationStatus;
    }
    /**
     * Set OperationStatus value
     * @uses \SengentoBV\CdiscountMarketplaceSdk\Enums\CdiscountCloseDiscussionStatus::valueIsValid()
     * @uses \SengentoBV\CdiscountMarketplaceSdk\Enums\CdiscountCloseDiscussionStatus::getValidValues()
     * @throws InvalidArgumentException
     * @param string $operationStatus
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountCloseDiscussionResult
     */
    public function setOperationStatus(?string $operationStatus = null): self
    {
        // validation for constraint: enumeration
        if (!\SengentoBV\CdiscountMarketplaceSdk\Enums\CdiscountCloseDiscussionStatus::valueIsValid($operationStatus)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \SengentoBV\CdiscountMarketplaceSdk\Enums\CdiscountCloseDiscussionStatus', is_array($operationStatus) ? implode(', ', $operationStatus) : var_export($operationStatus, true), implode(', ', \SengentoBV\CdiscountMarketplaceSdk\Enums\CdiscountCloseDiscussionStatus::getValidValues())), __LINE__);
        }
        $this->OperationStatus = $operationStatus;
        
        return $this;
    }
}
