<?php

namespace SengentoBV\CdiscountMarketplaceSdk\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for OrderClaim Structs
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:OrderClaim
 * @package Cdiscount
 * @subpackage Structs
 */
class CdiscountOrderClaim extends CdiscountOrderQuestion
{
    /**
     * The ClaimType
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $ClaimType;
    /**
     * Constructor method for OrderClaim
     * @uses CdiscountOrderClaim::setClaimType()
     * @param string $claimType
     */
    public function __construct($claimType = null)
    {
        $this
            ->setClaimType($claimType);
    }
    /**
     * Get ClaimType value
     * @return string|null
     */
    public function getClaimType()
    {
        return $this->ClaimType;
    }
    /**
     * Set ClaimType value
     * @uses \SengentoBV\CdiscountMarketplaceSdk\Enums\CdiscountClaimType::valueIsValid()
     * @uses \SengentoBV\CdiscountMarketplaceSdk\Enums\CdiscountClaimType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $claimType
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountOrderClaim
     */
    public function setClaimType($claimType = null)
    {
        // validation for constraint: enumeration
        if (!\SengentoBV\CdiscountMarketplaceSdk\Enums\CdiscountClaimType::valueIsValid($claimType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \SengentoBV\CdiscountMarketplaceSdk\Enums\CdiscountClaimType', is_array($claimType) ? implode(', ', $claimType) : var_export($claimType, true), implode(', ', \SengentoBV\CdiscountMarketplaceSdk\Enums\CdiscountClaimType::getValidValues())), __LINE__);
        }
        $this->ClaimType = $claimType;
        return $this;
    }
}
