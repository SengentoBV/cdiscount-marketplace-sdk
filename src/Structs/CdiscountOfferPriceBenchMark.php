<?php

declare(strict_types=1);

namespace SengentoBV\CdiscountMarketplaceSdk\Structs;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for OfferPriceBenchMark Structs
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:OfferPriceBenchMark
 * @package Cdiscount
 * @subpackage Structs
 */
class CdiscountOfferPriceBenchMark extends AbstractStructBase
{
    /**
     * The BestOfferId
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $BestOfferId = null;
    /**
     * The BestOfferPrice
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var float|null
     */
    protected ?float $BestOfferPrice = null;
    /**
     * The IsBestOfferPrice
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $IsBestOfferPrice = null;
    /**
     * The ProductCondition
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $ProductCondition = null;
    /**
     * The ProductState
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $ProductState = null;
    /**
     * The ShippingCharges
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var float|null
     */
    protected ?float $ShippingCharges = null;
    /**
     * Constructor method for OfferPriceBenchMark
     * @uses CdiscountOfferPriceBenchMark::setBestOfferId()
     * @uses CdiscountOfferPriceBenchMark::setBestOfferPrice()
     * @uses CdiscountOfferPriceBenchMark::setIsBestOfferPrice()
     * @uses CdiscountOfferPriceBenchMark::setProductCondition()
     * @uses CdiscountOfferPriceBenchMark::setProductState()
     * @uses CdiscountOfferPriceBenchMark::setShippingCharges()
     * @param int $bestOfferId
     * @param float $bestOfferPrice
     * @param bool $isBestOfferPrice
     * @param string $productCondition
     * @param string $productState
     * @param float $shippingCharges
     */
    public function __construct(?int $bestOfferId = null, ?float $bestOfferPrice = null, ?bool $isBestOfferPrice = null, ?string $productCondition = null, ?string $productState = null, ?float $shippingCharges = null)
    {
        $this
            ->setBestOfferId($bestOfferId)
            ->setBestOfferPrice($bestOfferPrice)
            ->setIsBestOfferPrice($isBestOfferPrice)
            ->setProductCondition($productCondition)
            ->setProductState($productState)
            ->setShippingCharges($shippingCharges);
    }
    /**
     * Get BestOfferId value
     * @return int|null
     */
    public function getBestOfferId(): ?int
    {
        return $this->BestOfferId;
    }
    /**
     * Set BestOfferId value
     * @param int $bestOfferId
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountOfferPriceBenchMark
     */
    public function setBestOfferId(?int $bestOfferId = null): self
    {
        // validation for constraint: int
        if (!is_null($bestOfferId) && !(is_int($bestOfferId) || ctype_digit($bestOfferId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($bestOfferId, true), gettype($bestOfferId)), __LINE__);
        }
        $this->BestOfferId = $bestOfferId;
        
        return $this;
    }
    /**
     * Get BestOfferPrice value
     * @return float|null
     */
    public function getBestOfferPrice(): ?float
    {
        return $this->BestOfferPrice;
    }
    /**
     * Set BestOfferPrice value
     * @param float $bestOfferPrice
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountOfferPriceBenchMark
     */
    public function setBestOfferPrice(?float $bestOfferPrice = null): self
    {
        // validation for constraint: float
        if (!is_null($bestOfferPrice) && !(is_float($bestOfferPrice) || is_numeric($bestOfferPrice))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($bestOfferPrice, true), gettype($bestOfferPrice)), __LINE__);
        }
        $this->BestOfferPrice = $bestOfferPrice;
        
        return $this;
    }
    /**
     * Get IsBestOfferPrice value
     * @return bool|null
     */
    public function getIsBestOfferPrice(): ?bool
    {
        return $this->IsBestOfferPrice;
    }
    /**
     * Set IsBestOfferPrice value
     * @param bool $isBestOfferPrice
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountOfferPriceBenchMark
     */
    public function setIsBestOfferPrice(?bool $isBestOfferPrice = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isBestOfferPrice) && !is_bool($isBestOfferPrice)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isBestOfferPrice, true), gettype($isBestOfferPrice)), __LINE__);
        }
        $this->IsBestOfferPrice = $isBestOfferPrice;
        
        return $this;
    }
    /**
     * Get ProductCondition value
     * @return string|null
     */
    public function getProductCondition(): ?string
    {
        return $this->ProductCondition;
    }
    /**
     * Set ProductCondition value
     * @uses \SengentoBV\CdiscountMarketplaceSdk\Enums\CdiscountProductConditionEnum::valueIsValid()
     * @uses \SengentoBV\CdiscountMarketplaceSdk\Enums\CdiscountProductConditionEnum::getValidValues()
     * @throws InvalidArgumentException
     * @param string $productCondition
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountOfferPriceBenchMark
     */
    public function setProductCondition(?string $productCondition = null): self
    {
        // validation for constraint: enumeration
        if (!\SengentoBV\CdiscountMarketplaceSdk\Enums\CdiscountProductConditionEnum::valueIsValid($productCondition)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \SengentoBV\CdiscountMarketplaceSdk\Enums\CdiscountProductConditionEnum', is_array($productCondition) ? implode(', ', $productCondition) : var_export($productCondition, true), implode(', ', \SengentoBV\CdiscountMarketplaceSdk\Enums\CdiscountProductConditionEnum::getValidValues())), __LINE__);
        }
        $this->ProductCondition = $productCondition;
        
        return $this;
    }
    /**
     * Get ProductState value
     * @return string|null
     */
    public function getProductState(): ?string
    {
        return $this->ProductState;
    }
    /**
     * Set ProductState value
     * @uses \SengentoBV\CdiscountMarketplaceSdk\Enums\CdiscountProductStateEnum::valueIsValid()
     * @uses \SengentoBV\CdiscountMarketplaceSdk\Enums\CdiscountProductStateEnum::getValidValues()
     * @throws InvalidArgumentException
     * @param string $productState
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountOfferPriceBenchMark
     */
    public function setProductState(?string $productState = null): self
    {
        // validation for constraint: enumeration
        if (!\SengentoBV\CdiscountMarketplaceSdk\Enums\CdiscountProductStateEnum::valueIsValid($productState)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \SengentoBV\CdiscountMarketplaceSdk\Enums\CdiscountProductStateEnum', is_array($productState) ? implode(', ', $productState) : var_export($productState, true), implode(', ', \SengentoBV\CdiscountMarketplaceSdk\Enums\CdiscountProductStateEnum::getValidValues())), __LINE__);
        }
        $this->ProductState = $productState;
        
        return $this;
    }
    /**
     * Get ShippingCharges value
     * @return float|null
     */
    public function getShippingCharges(): ?float
    {
        return $this->ShippingCharges;
    }
    /**
     * Set ShippingCharges value
     * @param float $shippingCharges
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountOfferPriceBenchMark
     */
    public function setShippingCharges(?float $shippingCharges = null): self
    {
        // validation for constraint: float
        if (!is_null($shippingCharges) && !(is_float($shippingCharges) || is_numeric($shippingCharges))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($shippingCharges, true), gettype($shippingCharges)), __LINE__);
        }
        $this->ShippingCharges = $shippingCharges;
        
        return $this;
    }
}
