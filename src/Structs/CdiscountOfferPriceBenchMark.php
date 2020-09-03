<?php

namespace SengentoBV\CdiscountMarketplaceSdk\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

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
     * @var int
     */
    public $BestOfferId;
    /**
     * The BestOfferPrice
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var float
     */
    public $BestOfferPrice;
    /**
     * The IsBestOfferPrice
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $IsBestOfferPrice;
    /**
     * The ProductCondition
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $ProductCondition;
    /**
     * The ProductState
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $ProductState;
    /**
     * The ShippingCharges
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var float
     */
    public $ShippingCharges;
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
    public function __construct($bestOfferId = null, $bestOfferPrice = null, $isBestOfferPrice = null, $productCondition = null, $productState = null, $shippingCharges = null)
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
    public function getBestOfferId()
    {
        return $this->BestOfferId;
    }
    /**
     * Set BestOfferId value
     * @param int $bestOfferId
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountOfferPriceBenchMark
     */
    public function setBestOfferId($bestOfferId = null)
    {
        // validation for constraint: int
        if (!is_null($bestOfferId) && !(is_int($bestOfferId) || ctype_digit($bestOfferId))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($bestOfferId, true), gettype($bestOfferId)), __LINE__);
        }
        $this->BestOfferId = $bestOfferId;
        return $this;
    }
    /**
     * Get BestOfferPrice value
     * @return float|null
     */
    public function getBestOfferPrice()
    {
        return $this->BestOfferPrice;
    }
    /**
     * Set BestOfferPrice value
     * @param float $bestOfferPrice
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountOfferPriceBenchMark
     */
    public function setBestOfferPrice($bestOfferPrice = null)
    {
        // validation for constraint: float
        if (!is_null($bestOfferPrice) && !(is_float($bestOfferPrice) || is_numeric($bestOfferPrice))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($bestOfferPrice, true), gettype($bestOfferPrice)), __LINE__);
        }
        $this->BestOfferPrice = $bestOfferPrice;
        return $this;
    }
    /**
     * Get IsBestOfferPrice value
     * @return bool|null
     */
    public function getIsBestOfferPrice()
    {
        return $this->IsBestOfferPrice;
    }
    /**
     * Set IsBestOfferPrice value
     * @param bool $isBestOfferPrice
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountOfferPriceBenchMark
     */
    public function setIsBestOfferPrice($isBestOfferPrice = null)
    {
        // validation for constraint: boolean
        if (!is_null($isBestOfferPrice) && !is_bool($isBestOfferPrice)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isBestOfferPrice, true), gettype($isBestOfferPrice)), __LINE__);
        }
        $this->IsBestOfferPrice = $isBestOfferPrice;
        return $this;
    }
    /**
     * Get ProductCondition value
     * @return string|null
     */
    public function getProductCondition()
    {
        return $this->ProductCondition;
    }
    /**
     * Set ProductCondition value
     * @uses \SengentoBV\CdiscountMarketplaceSdk\Enums\CdiscountProductConditionEnum::valueIsValid()
     * @uses \SengentoBV\CdiscountMarketplaceSdk\Enums\CdiscountProductConditionEnum::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $productCondition
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountOfferPriceBenchMark
     */
    public function setProductCondition($productCondition = null)
    {
        // validation for constraint: enumeration
        if (!\SengentoBV\CdiscountMarketplaceSdk\Enums\CdiscountProductConditionEnum::valueIsValid($productCondition)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \SengentoBV\CdiscountMarketplaceSdk\Enums\CdiscountProductConditionEnum', is_array($productCondition) ? implode(', ', $productCondition) : var_export($productCondition, true), implode(', ', \SengentoBV\CdiscountMarketplaceSdk\Enums\CdiscountProductConditionEnum::getValidValues())), __LINE__);
        }
        $this->ProductCondition = $productCondition;
        return $this;
    }
    /**
     * Get ProductState value
     * @return string|null
     */
    public function getProductState()
    {
        return $this->ProductState;
    }
    /**
     * Set ProductState value
     * @uses \SengentoBV\CdiscountMarketplaceSdk\Enums\CdiscountProductStateEnum::valueIsValid()
     * @uses \SengentoBV\CdiscountMarketplaceSdk\Enums\CdiscountProductStateEnum::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $productState
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountOfferPriceBenchMark
     */
    public function setProductState($productState = null)
    {
        // validation for constraint: enumeration
        if (!\SengentoBV\CdiscountMarketplaceSdk\Enums\CdiscountProductStateEnum::valueIsValid($productState)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \SengentoBV\CdiscountMarketplaceSdk\Enums\CdiscountProductStateEnum', is_array($productState) ? implode(', ', $productState) : var_export($productState, true), implode(', ', \SengentoBV\CdiscountMarketplaceSdk\Enums\CdiscountProductStateEnum::getValidValues())), __LINE__);
        }
        $this->ProductState = $productState;
        return $this;
    }
    /**
     * Get ShippingCharges value
     * @return float|null
     */
    public function getShippingCharges()
    {
        return $this->ShippingCharges;
    }
    /**
     * Set ShippingCharges value
     * @param float $shippingCharges
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountOfferPriceBenchMark
     */
    public function setShippingCharges($shippingCharges = null)
    {
        // validation for constraint: float
        if (!is_null($shippingCharges) && !(is_float($shippingCharges) || is_numeric($shippingCharges))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($shippingCharges, true), gettype($shippingCharges)), __LINE__);
        }
        $this->ShippingCharges = $shippingCharges;
        return $this;
    }
}
