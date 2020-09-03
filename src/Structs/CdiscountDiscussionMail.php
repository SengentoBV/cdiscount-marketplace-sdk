<?php

namespace SengentoBV\CdiscountMarketplaceSdk\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DiscussionMail Structs
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:DiscussionMail
 * @package Cdiscount
 * @subpackage Structs
 */
class CdiscountDiscussionMail extends AbstractStructBase
{
    /**
     * The DiscussionId
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $DiscussionId;
    /**
     * The MailAddress
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $MailAddress;
    /**
     * The OperationStatus
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $OperationStatus;
    /**
     * Constructor method for DiscussionMail
     * @uses CdiscountDiscussionMail::setDiscussionId()
     * @uses CdiscountDiscussionMail::setMailAddress()
     * @uses CdiscountDiscussionMail::setOperationStatus()
     * @param int $discussionId
     * @param string $mailAddress
     * @param string $operationStatus
     */
    public function __construct($discussionId = null, $mailAddress = null, $operationStatus = null)
    {
        $this
            ->setDiscussionId($discussionId)
            ->setMailAddress($mailAddress)
            ->setOperationStatus($operationStatus);
    }
    /**
     * Get DiscussionId value
     * @return int|null
     */
    public function getDiscussionId()
    {
        return $this->DiscussionId;
    }
    /**
     * Set DiscussionId value
     * @param int $discussionId
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountDiscussionMail
     */
    public function setDiscussionId($discussionId = null)
    {
        // validation for constraint: int
        if (!is_null($discussionId) && !(is_int($discussionId) || ctype_digit($discussionId))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($discussionId, true), gettype($discussionId)), __LINE__);
        }
        $this->DiscussionId = $discussionId;
        return $this;
    }
    /**
     * Get MailAddress value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getMailAddress()
    {
        return isset($this->MailAddress) ? $this->MailAddress : null;
    }
    /**
     * Set MailAddress value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $mailAddress
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountDiscussionMail
     */
    public function setMailAddress($mailAddress = null)
    {
        // validation for constraint: string
        if (!is_null($mailAddress) && !is_string($mailAddress)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($mailAddress, true), gettype($mailAddress)), __LINE__);
        }
        if (is_null($mailAddress) || (is_array($mailAddress) && empty($mailAddress))) {
            unset($this->MailAddress);
        } else {
            $this->MailAddress = $mailAddress;
        }
        return $this;
    }
    /**
     * Get OperationStatus value
     * @return string|null
     */
    public function getOperationStatus()
    {
        return $this->OperationStatus;
    }
    /**
     * Set OperationStatus value
     * @uses \SengentoBV\CdiscountMarketplaceSdk\Enums\CdiscountDiscussionMailStatusEnum::valueIsValid()
     * @uses \SengentoBV\CdiscountMarketplaceSdk\Enums\CdiscountDiscussionMailStatusEnum::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $operationStatus
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountDiscussionMail
     */
    public function setOperationStatus($operationStatus = null)
    {
        // validation for constraint: enumeration
        if (!\SengentoBV\CdiscountMarketplaceSdk\Enums\CdiscountDiscussionMailStatusEnum::valueIsValid($operationStatus)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \SengentoBV\CdiscountMarketplaceSdk\Enums\CdiscountDiscussionMailStatusEnum', is_array($operationStatus) ? implode(', ', $operationStatus) : var_export($operationStatus, true), implode(', ', \SengentoBV\CdiscountMarketplaceSdk\Enums\CdiscountDiscussionMailStatusEnum::getValidValues())), __LINE__);
        }
        $this->OperationStatus = $operationStatus;
        return $this;
    }
}
