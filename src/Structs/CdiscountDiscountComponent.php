<?php

namespace SengentoBV\CdiscountMarketplaceSdk\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DiscountComponent Structs
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:DiscountComponent
 * @package Cdiscount
 * @subpackage Structs
 */
class CdiscountDiscountComponent extends AbstractStructBase
{
    /**
     * The DiscountValue
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var float
     */
    public $DiscountValue;
    /**
     * The EndDate
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $EndDate;
    /**
     * The Price
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var float
     */
    public $Price;
    /**
     * The StartDate
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $StartDate;
    /**
     * The Type
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $Type;
    /**
     * Constructor method for DiscountComponent
     * @uses CdiscountDiscountComponent::setDiscountValue()
     * @uses CdiscountDiscountComponent::setEndDate()
     * @uses CdiscountDiscountComponent::setPrice()
     * @uses CdiscountDiscountComponent::setStartDate()
     * @uses CdiscountDiscountComponent::setType()
     * @param float $discountValue
     * @param string $endDate
     * @param float $price
     * @param string $startDate
     * @param string $type
     */
    public function __construct($discountValue = null, $endDate = null, $price = null, $startDate = null, $type = null)
    {
        $this
            ->setDiscountValue($discountValue)
            ->setEndDate($endDate)
            ->setPrice($price)
            ->setStartDate($startDate)
            ->setType($type);
    }
    /**
     * Get DiscountValue value
     * @return float|null
     */
    public function getDiscountValue()
    {
        return $this->DiscountValue;
    }
    /**
     * Set DiscountValue value
     * @param float $discountValue
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountDiscountComponent
     */
    public function setDiscountValue($discountValue = null)
    {
        // validation for constraint: float
        if (!is_null($discountValue) && !(is_float($discountValue) || is_numeric($discountValue))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($discountValue, true), gettype($discountValue)), __LINE__);
        }
        $this->DiscountValue = $discountValue;
        return $this;
    }
    /**
     * Get EndDate value
     * @return string|null
     */
    public function getEndDate()
    {
        return $this->EndDate;
    }
    /**
     * Set EndDate value
     * @param string $endDate
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountDiscountComponent
     */
    public function setEndDate($endDate = null)
    {
        // validation for constraint: string
        if (!is_null($endDate) && !is_string($endDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($endDate, true), gettype($endDate)), __LINE__);
        }
        $this->EndDate = $endDate;
        return $this;
    }
    /**
     * Get Price value
     * @return float|null
     */
    public function getPrice()
    {
        return $this->Price;
    }
    /**
     * Set Price value
     * @param float $price
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountDiscountComponent
     */
    public function setPrice($price = null)
    {
        // validation for constraint: float
        if (!is_null($price) && !(is_float($price) || is_numeric($price))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($price, true), gettype($price)), __LINE__);
        }
        $this->Price = $price;
        return $this;
    }
    /**
     * Get StartDate value
     * @return string|null
     */
    public function getStartDate()
    {
        return $this->StartDate;
    }
    /**
     * Set StartDate value
     * @param string $startDate
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountDiscountComponent
     */
    public function setStartDate($startDate = null)
    {
        // validation for constraint: string
        if (!is_null($startDate) && !is_string($startDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($startDate, true), gettype($startDate)), __LINE__);
        }
        $this->StartDate = $startDate;
        return $this;
    }
    /**
     * Get Type value
     * @return string|null
     */
    public function getType()
    {
        return $this->Type;
    }
    /**
     * Set Type value
     * @uses \SengentoBV\CdiscountMarketplaceSdk\Enums\CdiscountDiscountType::valueIsValid()
     * @uses \SengentoBV\CdiscountMarketplaceSdk\Enums\CdiscountDiscountType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $type
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountDiscountComponent
     */
    public function setType($type = null)
    {
        // validation for constraint: enumeration
        if (!\SengentoBV\CdiscountMarketplaceSdk\Enums\CdiscountDiscountType::valueIsValid($type)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \SengentoBV\CdiscountMarketplaceSdk\Enums\CdiscountDiscountType', is_array($type) ? implode(', ', $type) : var_export($type, true), implode(', ', \SengentoBV\CdiscountMarketplaceSdk\Enums\CdiscountDiscountType::getValidValues())), __LINE__);
        }
        $this->Type = $type;
        return $this;
    }
}
