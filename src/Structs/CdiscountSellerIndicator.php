<?php

declare(strict_types=1);

namespace SengentoBV\CdiscountMarketplaceSdk\Structs;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SellerIndicator Structs
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:SellerIndicator
 * @package Cdiscount
 * @subpackage Structs
 */
class CdiscountSellerIndicator extends AbstractStructBase
{
    /**
     * The ComputationDate
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $ComputationDate = null;
    /**
     * The Description
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $Description = null;
    /**
     * The Threshold
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var float|null
     */
    protected ?float $Threshold = null;
    /**
     * The ThresholdType
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $ThresholdType = null;
    /**
     * The ValueD30
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var float|null
     */
    protected ?float $ValueD30 = null;
    /**
     * The ValueD60
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var float|null
     */
    protected ?float $ValueD60 = null;
    /**
     * Constructor method for SellerIndicator
     * @uses CdiscountSellerIndicator::setComputationDate()
     * @uses CdiscountSellerIndicator::setDescription()
     * @uses CdiscountSellerIndicator::setThreshold()
     * @uses CdiscountSellerIndicator::setThresholdType()
     * @uses CdiscountSellerIndicator::setValueD30()
     * @uses CdiscountSellerIndicator::setValueD60()
     * @param string $computationDate
     * @param string $description
     * @param float $threshold
     * @param string $thresholdType
     * @param float $valueD30
     * @param float $valueD60
     */
    public function __construct(?string $computationDate = null, ?string $description = null, ?float $threshold = null, ?string $thresholdType = null, ?float $valueD30 = null, ?float $valueD60 = null)
    {
        $this
            ->setComputationDate($computationDate)
            ->setDescription($description)
            ->setThreshold($threshold)
            ->setThresholdType($thresholdType)
            ->setValueD30($valueD30)
            ->setValueD60($valueD60);
    }
    /**
     * Get ComputationDate value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getComputationDate(): ?string
    {
        return isset($this->ComputationDate) ? $this->ComputationDate : null;
    }
    /**
     * Set ComputationDate value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $computationDate
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountSellerIndicator
     */
    public function setComputationDate(?string $computationDate = null): self
    {
        // validation for constraint: string
        if (!is_null($computationDate) && !is_string($computationDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($computationDate, true), gettype($computationDate)), __LINE__);
        }
        if (is_null($computationDate) || (is_array($computationDate) && empty($computationDate))) {
            unset($this->ComputationDate);
        } else {
            $this->ComputationDate = $computationDate;
        }
        
        return $this;
    }
    /**
     * Get Description value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getDescription(): ?string
    {
        return isset($this->Description) ? $this->Description : null;
    }
    /**
     * Set Description value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $description
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountSellerIndicator
     */
    public function setDescription(?string $description = null): self
    {
        // validation for constraint: string
        if (!is_null($description) && !is_string($description)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($description, true), gettype($description)), __LINE__);
        }
        if (is_null($description) || (is_array($description) && empty($description))) {
            unset($this->Description);
        } else {
            $this->Description = $description;
        }
        
        return $this;
    }
    /**
     * Get Threshold value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return float|null
     */
    public function getThreshold(): ?float
    {
        return isset($this->Threshold) ? $this->Threshold : null;
    }
    /**
     * Set Threshold value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param float $threshold
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountSellerIndicator
     */
    public function setThreshold(?float $threshold = null): self
    {
        // validation for constraint: float
        if (!is_null($threshold) && !(is_float($threshold) || is_numeric($threshold))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($threshold, true), gettype($threshold)), __LINE__);
        }
        if (is_null($threshold) || (is_array($threshold) && empty($threshold))) {
            unset($this->Threshold);
        } else {
            $this->Threshold = $threshold;
        }
        
        return $this;
    }
    /**
     * Get ThresholdType value
     * @return string|null
     */
    public function getThresholdType(): ?string
    {
        return $this->ThresholdType;
    }
    /**
     * Set ThresholdType value
     * @uses \SengentoBV\CdiscountMarketplaceSdk\Enums\CdiscountTresholdType::valueIsValid()
     * @uses \SengentoBV\CdiscountMarketplaceSdk\Enums\CdiscountTresholdType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $thresholdType
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountSellerIndicator
     */
    public function setThresholdType(?string $thresholdType = null): self
    {
        // validation for constraint: enumeration
        if (!\SengentoBV\CdiscountMarketplaceSdk\Enums\CdiscountTresholdType::valueIsValid($thresholdType)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \SengentoBV\CdiscountMarketplaceSdk\Enums\CdiscountTresholdType', is_array($thresholdType) ? implode(', ', $thresholdType) : var_export($thresholdType, true), implode(', ', \SengentoBV\CdiscountMarketplaceSdk\Enums\CdiscountTresholdType::getValidValues())), __LINE__);
        }
        $this->ThresholdType = $thresholdType;
        
        return $this;
    }
    /**
     * Get ValueD30 value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return float|null
     */
    public function getValueD30(): ?float
    {
        return isset($this->ValueD30) ? $this->ValueD30 : null;
    }
    /**
     * Set ValueD30 value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param float $valueD30
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountSellerIndicator
     */
    public function setValueD30(?float $valueD30 = null): self
    {
        // validation for constraint: float
        if (!is_null($valueD30) && !(is_float($valueD30) || is_numeric($valueD30))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($valueD30, true), gettype($valueD30)), __LINE__);
        }
        if (is_null($valueD30) || (is_array($valueD30) && empty($valueD30))) {
            unset($this->ValueD30);
        } else {
            $this->ValueD30 = $valueD30;
        }
        
        return $this;
    }
    /**
     * Get ValueD60 value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return float|null
     */
    public function getValueD60(): ?float
    {
        return isset($this->ValueD60) ? $this->ValueD60 : null;
    }
    /**
     * Set ValueD60 value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param float $valueD60
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountSellerIndicator
     */
    public function setValueD60(?float $valueD60 = null): self
    {
        // validation for constraint: float
        if (!is_null($valueD60) && !(is_float($valueD60) || is_numeric($valueD60))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($valueD60, true), gettype($valueD60)), __LINE__);
        }
        if (is_null($valueD60) || (is_array($valueD60) && empty($valueD60))) {
            unset($this->ValueD60);
        } else {
            $this->ValueD60 = $valueD60;
        }
        
        return $this;
    }
}
