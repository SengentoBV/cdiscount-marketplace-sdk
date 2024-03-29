<?php

declare(strict_types=1);

namespace SengentoBV\CdiscountMarketplaceSdk\Structs;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for LocalizationMessage Structs
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:LocalizationMessage
 * @package Cdiscount
 * @subpackage Structs
 */
class CdiscountLocalizationMessage extends AbstractStructBase
{
    /**
     * The Country
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $Country = null;
    /**
     * The CultureName
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $CultureName = null;
    /**
     * The Currency
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $Currency = null;
    /**
     * The DecimalPosition
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var int|null
     */
    protected ?int $DecimalPosition = null;
    /**
     * The Language
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $Language = null;
    /**
     * Constructor method for LocalizationMessage
     * @uses CdiscountLocalizationMessage::setCountry()
     * @uses CdiscountLocalizationMessage::setCultureName()
     * @uses CdiscountLocalizationMessage::setCurrency()
     * @uses CdiscountLocalizationMessage::setDecimalPosition()
     * @uses CdiscountLocalizationMessage::setLanguage()
     * @param string $country
     * @param string $cultureName
     * @param string $currency
     * @param int $decimalPosition
     * @param string $language
     */
    public function __construct(?string $country = null, ?string $cultureName = null, ?string $currency = null, ?int $decimalPosition = null, ?string $language = null)
    {
        $this
            ->setCountry($country)
            ->setCultureName($cultureName)
            ->setCurrency($currency)
            ->setDecimalPosition($decimalPosition)
            ->setLanguage($language);
    }
    /**
     * Get Country value
     * @return string|null
     */
    public function getCountry(): ?string
    {
        return $this->Country;
    }
    /**
     * Set Country value
     * @uses \SengentoBV\CdiscountMarketplaceSdk\Enums\CdiscountCountry::valueIsValid()
     * @uses \SengentoBV\CdiscountMarketplaceSdk\Enums\CdiscountCountry::getValidValues()
     * @throws InvalidArgumentException
     * @param string $country
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountLocalizationMessage
     */
    public function setCountry(?string $country = null): self
    {
        // validation for constraint: enumeration
        if (!\SengentoBV\CdiscountMarketplaceSdk\Enums\CdiscountCountry::valueIsValid($country)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \SengentoBV\CdiscountMarketplaceSdk\Enums\CdiscountCountry', is_array($country) ? implode(', ', $country) : var_export($country, true), implode(', ', \SengentoBV\CdiscountMarketplaceSdk\Enums\CdiscountCountry::getValidValues())), __LINE__);
        }
        $this->Country = $country;
        
        return $this;
    }
    /**
     * Get CultureName value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getCultureName(): ?string
    {
        return isset($this->CultureName) ? $this->CultureName : null;
    }
    /**
     * Set CultureName value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $cultureName
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountLocalizationMessage
     */
    public function setCultureName(?string $cultureName = null): self
    {
        // validation for constraint: string
        if (!is_null($cultureName) && !is_string($cultureName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cultureName, true), gettype($cultureName)), __LINE__);
        }
        if (is_null($cultureName) || (is_array($cultureName) && empty($cultureName))) {
            unset($this->CultureName);
        } else {
            $this->CultureName = $cultureName;
        }
        
        return $this;
    }
    /**
     * Get Currency value
     * @return string|null
     */
    public function getCurrency(): ?string
    {
        return $this->Currency;
    }
    /**
     * Set Currency value
     * @uses \SengentoBV\CdiscountMarketplaceSdk\Enums\CdiscountCurrency::valueIsValid()
     * @uses \SengentoBV\CdiscountMarketplaceSdk\Enums\CdiscountCurrency::getValidValues()
     * @throws InvalidArgumentException
     * @param string $currency
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountLocalizationMessage
     */
    public function setCurrency(?string $currency = null): self
    {
        // validation for constraint: enumeration
        if (!\SengentoBV\CdiscountMarketplaceSdk\Enums\CdiscountCurrency::valueIsValid($currency)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \SengentoBV\CdiscountMarketplaceSdk\Enums\CdiscountCurrency', is_array($currency) ? implode(', ', $currency) : var_export($currency, true), implode(', ', \SengentoBV\CdiscountMarketplaceSdk\Enums\CdiscountCurrency::getValidValues())), __LINE__);
        }
        $this->Currency = $currency;
        
        return $this;
    }
    /**
     * Get DecimalPosition value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return int|null
     */
    public function getDecimalPosition(): ?int
    {
        return isset($this->DecimalPosition) ? $this->DecimalPosition : null;
    }
    /**
     * Set DecimalPosition value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param int $decimalPosition
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountLocalizationMessage
     */
    public function setDecimalPosition(?int $decimalPosition = null): self
    {
        // validation for constraint: int
        if (!is_null($decimalPosition) && !(is_int($decimalPosition) || ctype_digit($decimalPosition))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($decimalPosition, true), gettype($decimalPosition)), __LINE__);
        }
        if (is_null($decimalPosition) || (is_array($decimalPosition) && empty($decimalPosition))) {
            unset($this->DecimalPosition);
        } else {
            $this->DecimalPosition = $decimalPosition;
        }
        
        return $this;
    }
    /**
     * Get Language value
     * @return string|null
     */
    public function getLanguage(): ?string
    {
        return $this->Language;
    }
    /**
     * Set Language value
     * @uses \SengentoBV\CdiscountMarketplaceSdk\Enums\CdiscountLanguage::valueIsValid()
     * @uses \SengentoBV\CdiscountMarketplaceSdk\Enums\CdiscountLanguage::getValidValues()
     * @throws InvalidArgumentException
     * @param string $language
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountLocalizationMessage
     */
    public function setLanguage(?string $language = null): self
    {
        // validation for constraint: enumeration
        if (!\SengentoBV\CdiscountMarketplaceSdk\Enums\CdiscountLanguage::valueIsValid($language)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \SengentoBV\CdiscountMarketplaceSdk\Enums\CdiscountLanguage', is_array($language) ? implode(', ', $language) : var_export($language, true), implode(', ', \SengentoBV\CdiscountMarketplaceSdk\Enums\CdiscountLanguage::getValidValues())), __LINE__);
        }
        $this->Language = $language;
        
        return $this;
    }
}
