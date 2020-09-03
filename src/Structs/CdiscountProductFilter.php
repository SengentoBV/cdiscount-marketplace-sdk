<?php

namespace SengentoBV\CdiscountMarketplaceSdk\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ProductFilter Structs
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ProductFilter
 * @package Cdiscount
 * @subpackage Structs
 */
class CdiscountProductFilter extends AbstractStructBase
{
    /**
     * The CategoryCode
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $CategoryCode;
    /**
     * Constructor method for ProductFilter
     * @uses CdiscountProductFilter::setCategoryCode()
     * @param string $categoryCode
     */
    public function __construct($categoryCode = null)
    {
        $this
            ->setCategoryCode($categoryCode);
    }
    /**
     * Get CategoryCode value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getCategoryCode()
    {
        return isset($this->CategoryCode) ? $this->CategoryCode : null;
    }
    /**
     * Set CategoryCode value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $categoryCode
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountProductFilter
     */
    public function setCategoryCode($categoryCode = null)
    {
        // validation for constraint: string
        if (!is_null($categoryCode) && !is_string($categoryCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($categoryCode, true), gettype($categoryCode)), __LINE__);
        }
        if (is_null($categoryCode) || (is_array($categoryCode) && empty($categoryCode))) {
            unset($this->CategoryCode);
        } else {
            $this->CategoryCode = $categoryCode;
        }
        return $this;
    }
}
