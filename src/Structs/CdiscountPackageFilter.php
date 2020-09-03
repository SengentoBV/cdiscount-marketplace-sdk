<?php

namespace SengentoBV\CdiscountMarketplaceSdk\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PackageFilter Structs
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:PackageFilter
 * @package Cdiscount
 * @subpackage Structs
 */
class CdiscountPackageFilter extends AbstractStructBase
{
    /**
     * The PackageID
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $PackageID;
    /**
     * Constructor method for PackageFilter
     * @uses CdiscountPackageFilter::setPackageID()
     * @param int $packageID
     */
    public function __construct($packageID = null)
    {
        $this
            ->setPackageID($packageID);
    }
    /**
     * Get PackageID value
     * @return int|null
     */
    public function getPackageID()
    {
        return $this->PackageID;
    }
    /**
     * Set PackageID value
     * @param int $packageID
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountPackageFilter
     */
    public function setPackageID($packageID = null)
    {
        // validation for constraint: int
        if (!is_null($packageID) && !(is_int($packageID) || ctype_digit($packageID))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($packageID, true), gettype($packageID)), __LINE__);
        }
        $this->PackageID = $packageID;
        return $this;
    }
}
