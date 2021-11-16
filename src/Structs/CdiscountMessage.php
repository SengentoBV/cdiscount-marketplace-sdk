<?php

declare(strict_types=1);

namespace SengentoBV\CdiscountMarketplaceSdk\Structs;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Message Structs
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:Message
 * @package Cdiscount
 * @subpackage Structs
 */
class CdiscountMessage extends AbstractStructBase
{
    /**
     * The Content
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $Content = null;
    /**
     * The Sender
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $Sender = null;
    /**
     * The SenderType
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $SenderType = null;
    /**
     * The Timestamp
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $Timestamp = null;
    /**
     * Constructor method for Message
     * @uses CdiscountMessage::setContent()
     * @uses CdiscountMessage::setSender()
     * @uses CdiscountMessage::setSenderType()
     * @uses CdiscountMessage::setTimestamp()
     * @param string $content
     * @param string $sender
     * @param string $senderType
     * @param string $timestamp
     */
    public function __construct(?string $content = null, ?string $sender = null, ?string $senderType = null, ?string $timestamp = null)
    {
        $this
            ->setContent($content)
            ->setSender($sender)
            ->setSenderType($senderType)
            ->setTimestamp($timestamp);
    }
    /**
     * Get Content value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getContent(): ?string
    {
        return isset($this->Content) ? $this->Content : null;
    }
    /**
     * Set Content value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $content
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountMessage
     */
    public function setContent(?string $content = null): self
    {
        // validation for constraint: string
        if (!is_null($content) && !is_string($content)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($content, true), gettype($content)), __LINE__);
        }
        if (is_null($content) || (is_array($content) && empty($content))) {
            unset($this->Content);
        } else {
            $this->Content = $content;
        }
        
        return $this;
    }
    /**
     * Get Sender value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getSender(): ?string
    {
        return isset($this->Sender) ? $this->Sender : null;
    }
    /**
     * Set Sender value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $sender
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountMessage
     */
    public function setSender(?string $sender = null): self
    {
        // validation for constraint: string
        if (!is_null($sender) && !is_string($sender)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($sender, true), gettype($sender)), __LINE__);
        }
        if (is_null($sender) || (is_array($sender) && empty($sender))) {
            unset($this->Sender);
        } else {
            $this->Sender = $sender;
        }
        
        return $this;
    }
    /**
     * Get SenderType value
     * @return string|null
     */
    public function getSenderType(): ?string
    {
        return $this->SenderType;
    }
    /**
     * Set SenderType value
     * @uses \SengentoBV\CdiscountMarketplaceSdk\Enums\CdiscountUserType::valueIsValid()
     * @uses \SengentoBV\CdiscountMarketplaceSdk\Enums\CdiscountUserType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $senderType
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountMessage
     */
    public function setSenderType(?string $senderType = null): self
    {
        // validation for constraint: enumeration
        if (!\SengentoBV\CdiscountMarketplaceSdk\Enums\CdiscountUserType::valueIsValid($senderType)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \SengentoBV\CdiscountMarketplaceSdk\Enums\CdiscountUserType', is_array($senderType) ? implode(', ', $senderType) : var_export($senderType, true), implode(', ', \SengentoBV\CdiscountMarketplaceSdk\Enums\CdiscountUserType::getValidValues())), __LINE__);
        }
        $this->SenderType = $senderType;
        
        return $this;
    }
    /**
     * Get Timestamp value
     * @return string|null
     */
    public function getTimestamp(): ?string
    {
        return $this->Timestamp;
    }
    /**
     * Set Timestamp value
     * @param string $timestamp
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountMessage
     */
    public function setTimestamp(?string $timestamp = null): self
    {
        // validation for constraint: string
        if (!is_null($timestamp) && !is_string($timestamp)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($timestamp, true), gettype($timestamp)), __LINE__);
        }
        $this->Timestamp = $timestamp;
        
        return $this;
    }
}
