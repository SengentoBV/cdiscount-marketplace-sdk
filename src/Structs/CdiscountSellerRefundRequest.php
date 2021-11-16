<?php

declare(strict_types=1);

namespace SengentoBV\CdiscountMarketplaceSdk\Structs;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SellerRefundRequest Structs
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:SellerRefundRequest
 * @package Cdiscount
 * @subpackage Structs
 */
class CdiscountSellerRefundRequest extends AbstractStructBase
{
    /**
     * The Mode
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $Mode = null;
    /**
     * The Motive
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $Motive = null;
    /**
     * The RefundOrderLine
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountSellerRefundOrderLine|null
     */
    protected ?\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountSellerRefundOrderLine $RefundOrderLine = null;
    /**
     * Constructor method for SellerRefundRequest
     * @uses CdiscountSellerRefundRequest::setMode()
     * @uses CdiscountSellerRefundRequest::setMotive()
     * @uses CdiscountSellerRefundRequest::setRefundOrderLine()
     * @param string $mode
     * @param string $motive
     * @param \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountSellerRefundOrderLine $refundOrderLine
     */
    public function __construct(?string $mode = null, ?string $motive = null, ?\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountSellerRefundOrderLine $refundOrderLine = null)
    {
        $this
            ->setMode($mode)
            ->setMotive($motive)
            ->setRefundOrderLine($refundOrderLine);
    }
    /**
     * Get Mode value
     * @return string|null
     */
    public function getMode(): ?string
    {
        return $this->Mode;
    }
    /**
     * Set Mode value
     * @uses \SengentoBV\CdiscountMarketplaceSdk\Enums\CdiscountSellerRefundRequestMode::valueIsValid()
     * @uses \SengentoBV\CdiscountMarketplaceSdk\Enums\CdiscountSellerRefundRequestMode::getValidValues()
     * @throws InvalidArgumentException
     * @param string $mode
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountSellerRefundRequest
     */
    public function setMode(?string $mode = null): self
    {
        // validation for constraint: enumeration
        if (!\SengentoBV\CdiscountMarketplaceSdk\Enums\CdiscountSellerRefundRequestMode::valueIsValid($mode)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \SengentoBV\CdiscountMarketplaceSdk\Enums\CdiscountSellerRefundRequestMode', is_array($mode) ? implode(', ', $mode) : var_export($mode, true), implode(', ', \SengentoBV\CdiscountMarketplaceSdk\Enums\CdiscountSellerRefundRequestMode::getValidValues())), __LINE__);
        }
        $this->Mode = $mode;
        
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
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountSellerRefundRequest
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
     * Get RefundOrderLine value
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountSellerRefundOrderLine|null
     */
    public function getRefundOrderLine(): ?\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountSellerRefundOrderLine
    {
        return $this->RefundOrderLine;
    }
    /**
     * Set RefundOrderLine value
     * @param \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountSellerRefundOrderLine $refundOrderLine
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountSellerRefundRequest
     */
    public function setRefundOrderLine(?\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountSellerRefundOrderLine $refundOrderLine = null): self
    {
        $this->RefundOrderLine = $refundOrderLine;
        
        return $this;
    }
}
