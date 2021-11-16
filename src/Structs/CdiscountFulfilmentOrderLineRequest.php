<?php

declare(strict_types=1);

namespace SengentoBV\CdiscountMarketplaceSdk\Structs;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FulfilmentOrderLineRequest Structs
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:FulfilmentOrderLineRequest
 * @package Cdiscount
 * @subpackage Structs
 */
class CdiscountFulfilmentOrderLineRequest extends AbstractStructBase
{
    /**
     * The OrderReference
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string|null
     */
    protected ?string $OrderReference = null;
    /**
     * The ProductEan
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string|null
     */
    protected ?string $ProductEan = null;
    /**
     * Constructor method for FulfilmentOrderLineRequest
     * @uses CdiscountFulfilmentOrderLineRequest::setOrderReference()
     * @uses CdiscountFulfilmentOrderLineRequest::setProductEan()
     * @param string $orderReference
     * @param string $productEan
     */
    public function __construct(?string $orderReference = null, ?string $productEan = null)
    {
        $this
            ->setOrderReference($orderReference)
            ->setProductEan($productEan);
    }
    /**
     * Get OrderReference value
     * @return string|null
     */
    public function getOrderReference(): ?string
    {
        return $this->OrderReference;
    }
    /**
     * Set OrderReference value
     * @param string $orderReference
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountFulfilmentOrderLineRequest
     */
    public function setOrderReference(?string $orderReference = null): self
    {
        // validation for constraint: string
        if (!is_null($orderReference) && !is_string($orderReference)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($orderReference, true), gettype($orderReference)), __LINE__);
        }
        $this->OrderReference = $orderReference;
        
        return $this;
    }
    /**
     * Get ProductEan value
     * @return string|null
     */
    public function getProductEan(): ?string
    {
        return $this->ProductEan;
    }
    /**
     * Set ProductEan value
     * @param string $productEan
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountFulfilmentOrderLineRequest
     */
    public function setProductEan(?string $productEan = null): self
    {
        // validation for constraint: string
        if (!is_null($productEan) && !is_string($productEan)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($productEan, true), gettype($productEan)), __LINE__);
        }
        $this->ProductEan = $productEan;
        
        return $this;
    }
}
