<?php

declare(strict_types=1);

namespace SengentoBV\CdiscountMarketplaceSdk\Structs;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Corporation Structs
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:Corporation
 * @package Cdiscount
 * @subpackage Structs
 */
class CdiscountCorporation extends AbstractStructBase
{
    /**
     * The BusinessUnitId
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $BusinessUnitId = null;
    /**
     * The CorporationCode
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string|null
     */
    protected ?string $CorporationCode = null;
    /**
     * The CorporationId
     * @var int|null
     */
    protected ?int $CorporationId = null;
    /**
     * The CorporationName
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $CorporationName = null;
    /**
     * The IsMarketPlaceActive
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var bool|null
     */
    protected ?bool $IsMarketPlaceActive = null;
    /**
     * Constructor method for Corporation
     * @uses CdiscountCorporation::setBusinessUnitId()
     * @uses CdiscountCorporation::setCorporationCode()
     * @uses CdiscountCorporation::setCorporationId()
     * @uses CdiscountCorporation::setCorporationName()
     * @uses CdiscountCorporation::setIsMarketPlaceActive()
     * @param int $businessUnitId
     * @param string $corporationCode
     * @param int $corporationId
     * @param string $corporationName
     * @param bool $isMarketPlaceActive
     */
    public function __construct(?int $businessUnitId = null, ?string $corporationCode = null, ?int $corporationId = null, ?string $corporationName = null, ?bool $isMarketPlaceActive = null)
    {
        $this
            ->setBusinessUnitId($businessUnitId)
            ->setCorporationCode($corporationCode)
            ->setCorporationId($corporationId)
            ->setCorporationName($corporationName)
            ->setIsMarketPlaceActive($isMarketPlaceActive);
    }
    /**
     * Get BusinessUnitId value
     * @return int|null
     */
    public function getBusinessUnitId(): ?int
    {
        return $this->BusinessUnitId;
    }
    /**
     * Set BusinessUnitId value
     * @param int $businessUnitId
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountCorporation
     */
    public function setBusinessUnitId(?int $businessUnitId = null): self
    {
        // validation for constraint: int
        if (!is_null($businessUnitId) && !(is_int($businessUnitId) || ctype_digit($businessUnitId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($businessUnitId, true), gettype($businessUnitId)), __LINE__);
        }
        $this->BusinessUnitId = $businessUnitId;
        
        return $this;
    }
    /**
     * Get CorporationCode value
     * @return string|null
     */
    public function getCorporationCode(): ?string
    {
        return $this->CorporationCode;
    }
    /**
     * Set CorporationCode value
     * @param string $corporationCode
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountCorporation
     */
    public function setCorporationCode(?string $corporationCode = null): self
    {
        // validation for constraint: string
        if (!is_null($corporationCode) && !is_string($corporationCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($corporationCode, true), gettype($corporationCode)), __LINE__);
        }
        $this->CorporationCode = $corporationCode;
        
        return $this;
    }
    /**
     * Get CorporationId value
     * @return int|null
     */
    public function getCorporationId(): ?int
    {
        return $this->CorporationId;
    }
    /**
     * Set CorporationId value
     * @param int $corporationId
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountCorporation
     */
    public function setCorporationId(?int $corporationId = null): self
    {
        // validation for constraint: int
        if (!is_null($corporationId) && !(is_int($corporationId) || ctype_digit($corporationId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($corporationId, true), gettype($corporationId)), __LINE__);
        }
        $this->CorporationId = $corporationId;
        
        return $this;
    }
    /**
     * Get CorporationName value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getCorporationName(): ?string
    {
        return isset($this->CorporationName) ? $this->CorporationName : null;
    }
    /**
     * Set CorporationName value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $corporationName
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountCorporation
     */
    public function setCorporationName(?string $corporationName = null): self
    {
        // validation for constraint: string
        if (!is_null($corporationName) && !is_string($corporationName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($corporationName, true), gettype($corporationName)), __LINE__);
        }
        if (is_null($corporationName) || (is_array($corporationName) && empty($corporationName))) {
            unset($this->CorporationName);
        } else {
            $this->CorporationName = $corporationName;
        }
        
        return $this;
    }
    /**
     * Get IsMarketPlaceActive value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return bool|null
     */
    public function getIsMarketPlaceActive(): ?bool
    {
        return isset($this->IsMarketPlaceActive) ? $this->IsMarketPlaceActive : null;
    }
    /**
     * Set IsMarketPlaceActive value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param bool $isMarketPlaceActive
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountCorporation
     */
    public function setIsMarketPlaceActive(?bool $isMarketPlaceActive = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isMarketPlaceActive) && !is_bool($isMarketPlaceActive)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isMarketPlaceActive, true), gettype($isMarketPlaceActive)), __LINE__);
        }
        if (is_null($isMarketPlaceActive) || (is_array($isMarketPlaceActive) && empty($isMarketPlaceActive))) {
            unset($this->IsMarketPlaceActive);
        } else {
            $this->IsMarketPlaceActive = $isMarketPlaceActive;
        }
        
        return $this;
    }
}
