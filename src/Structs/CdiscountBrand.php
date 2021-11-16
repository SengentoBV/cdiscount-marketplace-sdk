<?php

declare(strict_types=1);

namespace SengentoBV\CdiscountMarketplaceSdk\Structs;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Brand Structs
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:Brand
 * @package Cdiscount
 * @subpackage Structs
 */
class CdiscountBrand extends AbstractStructBase
{
    /**
     * The BrandName
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $BrandName = null;
    /**
     * Constructor method for Brand
     * @uses CdiscountBrand::setBrandName()
     * @param string $brandName
     */
    public function __construct(?string $brandName = null)
    {
        $this
            ->setBrandName($brandName);
    }
    /**
     * Get BrandName value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getBrandName(): ?string
    {
        return isset($this->BrandName) ? $this->BrandName : null;
    }
    /**
     * Set BrandName value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $brandName
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountBrand
     */
    public function setBrandName(?string $brandName = null): self
    {
        // validation for constraint: string
        if (!is_null($brandName) && !is_string($brandName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($brandName, true), gettype($brandName)), __LINE__);
        }
        if (is_null($brandName) || (is_array($brandName) && empty($brandName))) {
            unset($this->BrandName);
        } else {
            $this->BrandName = $brandName;
        }
        
        return $this;
    }
}
