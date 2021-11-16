<?php

declare(strict_types=1);

namespace SengentoBV\CdiscountMarketplaceSdk\Structs;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for VariationDescription Structs
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:VariationDescription
 * @package Cdiscount
 * @subpackage Structs
 */
class CdiscountVariationDescription extends AbstractStructBase
{
    /**
     * The VariantValueDescription
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $VariantValueDescription = null;
    /**
     * The VariantValueId
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $VariantValueId = null;
    /**
     * Constructor method for VariationDescription
     * @uses CdiscountVariationDescription::setVariantValueDescription()
     * @uses CdiscountVariationDescription::setVariantValueId()
     * @param string $variantValueDescription
     * @param int $variantValueId
     */
    public function __construct(?string $variantValueDescription = null, ?int $variantValueId = null)
    {
        $this
            ->setVariantValueDescription($variantValueDescription)
            ->setVariantValueId($variantValueId);
    }
    /**
     * Get VariantValueDescription value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getVariantValueDescription(): ?string
    {
        return isset($this->VariantValueDescription) ? $this->VariantValueDescription : null;
    }
    /**
     * Set VariantValueDescription value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $variantValueDescription
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountVariationDescription
     */
    public function setVariantValueDescription(?string $variantValueDescription = null): self
    {
        // validation for constraint: string
        if (!is_null($variantValueDescription) && !is_string($variantValueDescription)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($variantValueDescription, true), gettype($variantValueDescription)), __LINE__);
        }
        if (is_null($variantValueDescription) || (is_array($variantValueDescription) && empty($variantValueDescription))) {
            unset($this->VariantValueDescription);
        } else {
            $this->VariantValueDescription = $variantValueDescription;
        }
        
        return $this;
    }
    /**
     * Get VariantValueId value
     * @return int|null
     */
    public function getVariantValueId(): ?int
    {
        return $this->VariantValueId;
    }
    /**
     * Set VariantValueId value
     * @param int $variantValueId
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountVariationDescription
     */
    public function setVariantValueId(?int $variantValueId = null): self
    {
        // validation for constraint: int
        if (!is_null($variantValueId) && !(is_int($variantValueId) || ctype_digit($variantValueId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($variantValueId, true), gettype($variantValueId)), __LINE__);
        }
        $this->VariantValueId = $variantValueId;
        
        return $this;
    }
}
