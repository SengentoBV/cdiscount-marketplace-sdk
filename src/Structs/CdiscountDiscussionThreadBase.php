<?php

declare(strict_types=1);

namespace SengentoBV\CdiscountMarketplaceSdk\Structs;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DiscussionThreadBase Structs
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:DiscussionThreadBase
 * @package Cdiscount
 * @subpackage Structs
 */
class CdiscountDiscussionThreadBase extends AbstractStructBase
{
    /**
     * The CloseDate
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $CloseDate = null;
    /**
     * The CreationDate
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $CreationDate = null;
    /**
     * The Id
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $Id = null;
    /**
     * The LastUpdatedDate
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $LastUpdatedDate = null;
    /**
     * The Messages
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfMessage|null
     */
    protected ?\SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfMessage $Messages = null;
    /**
     * The Status
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $Status = null;
    /**
     * The Subject
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $Subject = null;
    /**
     * Constructor method for DiscussionThreadBase
     * @uses CdiscountDiscussionThreadBase::setCloseDate()
     * @uses CdiscountDiscussionThreadBase::setCreationDate()
     * @uses CdiscountDiscussionThreadBase::setId()
     * @uses CdiscountDiscussionThreadBase::setLastUpdatedDate()
     * @uses CdiscountDiscussionThreadBase::setMessages()
     * @uses CdiscountDiscussionThreadBase::setStatus()
     * @uses CdiscountDiscussionThreadBase::setSubject()
     * @param string $closeDate
     * @param string $creationDate
     * @param int $id
     * @param string $lastUpdatedDate
     * @param \SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfMessage $messages
     * @param string $status
     * @param string $subject
     */
    public function __construct(?string $closeDate = null, ?string $creationDate = null, ?int $id = null, ?string $lastUpdatedDate = null, ?\SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfMessage $messages = null, ?string $status = null, ?string $subject = null)
    {
        $this
            ->setCloseDate($closeDate)
            ->setCreationDate($creationDate)
            ->setId($id)
            ->setLastUpdatedDate($lastUpdatedDate)
            ->setMessages($messages)
            ->setStatus($status)
            ->setSubject($subject);
    }
    /**
     * Get CloseDate value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getCloseDate(): ?string
    {
        return isset($this->CloseDate) ? $this->CloseDate : null;
    }
    /**
     * Set CloseDate value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $closeDate
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountDiscussionThreadBase
     */
    public function setCloseDate(?string $closeDate = null): self
    {
        // validation for constraint: string
        if (!is_null($closeDate) && !is_string($closeDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($closeDate, true), gettype($closeDate)), __LINE__);
        }
        if (is_null($closeDate) || (is_array($closeDate) && empty($closeDate))) {
            unset($this->CloseDate);
        } else {
            $this->CloseDate = $closeDate;
        }
        
        return $this;
    }
    /**
     * Get CreationDate value
     * @return string|null
     */
    public function getCreationDate(): ?string
    {
        return $this->CreationDate;
    }
    /**
     * Set CreationDate value
     * @param string $creationDate
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountDiscussionThreadBase
     */
    public function setCreationDate(?string $creationDate = null): self
    {
        // validation for constraint: string
        if (!is_null($creationDate) && !is_string($creationDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($creationDate, true), gettype($creationDate)), __LINE__);
        }
        $this->CreationDate = $creationDate;
        
        return $this;
    }
    /**
     * Get Id value
     * @return int|null
     */
    public function getId(): ?int
    {
        return $this->Id;
    }
    /**
     * Set Id value
     * @param int $id
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountDiscussionThreadBase
     */
    public function setId(?int $id = null): self
    {
        // validation for constraint: int
        if (!is_null($id) && !(is_int($id) || ctype_digit($id))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($id, true), gettype($id)), __LINE__);
        }
        $this->Id = $id;
        
        return $this;
    }
    /**
     * Get LastUpdatedDate value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getLastUpdatedDate(): ?string
    {
        return isset($this->LastUpdatedDate) ? $this->LastUpdatedDate : null;
    }
    /**
     * Set LastUpdatedDate value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $lastUpdatedDate
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountDiscussionThreadBase
     */
    public function setLastUpdatedDate(?string $lastUpdatedDate = null): self
    {
        // validation for constraint: string
        if (!is_null($lastUpdatedDate) && !is_string($lastUpdatedDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($lastUpdatedDate, true), gettype($lastUpdatedDate)), __LINE__);
        }
        if (is_null($lastUpdatedDate) || (is_array($lastUpdatedDate) && empty($lastUpdatedDate))) {
            unset($this->LastUpdatedDate);
        } else {
            $this->LastUpdatedDate = $lastUpdatedDate;
        }
        
        return $this;
    }
    /**
     * Get Messages value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfMessage|null
     */
    public function getMessages(): ?\SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfMessage
    {
        return isset($this->Messages) ? $this->Messages : null;
    }
    /**
     * Set Messages value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfMessage $messages
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountDiscussionThreadBase
     */
    public function setMessages(?\SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfMessage $messages = null): self
    {
        if (is_null($messages) || (is_array($messages) && empty($messages))) {
            unset($this->Messages);
        } else {
            $this->Messages = $messages;
        }
        
        return $this;
    }
    /**
     * Get Status value
     * @return string|null
     */
    public function getStatus(): ?string
    {
        return $this->Status;
    }
    /**
     * Set Status value
     * @uses \SengentoBV\CdiscountMarketplaceSdk\Enums\CdiscountDiscussionState::valueIsValid()
     * @uses \SengentoBV\CdiscountMarketplaceSdk\Enums\CdiscountDiscussionState::getValidValues()
     * @throws InvalidArgumentException
     * @param string $status
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountDiscussionThreadBase
     */
    public function setStatus(?string $status = null): self
    {
        // validation for constraint: enumeration
        if (!\SengentoBV\CdiscountMarketplaceSdk\Enums\CdiscountDiscussionState::valueIsValid($status)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \SengentoBV\CdiscountMarketplaceSdk\Enums\CdiscountDiscussionState', is_array($status) ? implode(', ', $status) : var_export($status, true), implode(', ', \SengentoBV\CdiscountMarketplaceSdk\Enums\CdiscountDiscussionState::getValidValues())), __LINE__);
        }
        $this->Status = $status;
        
        return $this;
    }
    /**
     * Get Subject value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getSubject(): ?string
    {
        return isset($this->Subject) ? $this->Subject : null;
    }
    /**
     * Set Subject value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $subject
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountDiscussionThreadBase
     */
    public function setSubject(?string $subject = null): self
    {
        // validation for constraint: string
        if (!is_null($subject) && !is_string($subject)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($subject, true), gettype($subject)), __LINE__);
        }
        if (is_null($subject) || (is_array($subject) && empty($subject))) {
            unset($this->Subject);
        } else {
            $this->Subject = $subject;
        }
        
        return $this;
    }
}
