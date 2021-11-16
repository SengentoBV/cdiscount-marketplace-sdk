<?php

declare(strict_types=1);

namespace SengentoBV\CdiscountMarketplaceSdk\Structs;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

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
     * @var int|null
     */
    protected ?int $PackageID = null;
    /**
     * Constructor method for PackageFilter
     * @uses CdiscountPackageFilter::setPackageID()
     * @param int $packageID
     */
    public function __construct(?int $packageID = null)
    {
        $this
            ->setPackageID($packageID);
    }
    /**
     * Get PackageID value
     * @return int|null
     */
    public function getPackageID(): ?int
    {
        return $this->PackageID;
    }
    /**
     * Set PackageID value
     * @param int $packageID
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountPackageFilter
     */
    public function setPackageID(?int $packageID = null): self
    {
        // validation for constraint: int
        if (!is_null($packageID) && !(is_int($packageID) || ctype_digit($packageID))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($packageID, true), gettype($packageID)), __LINE__);
        }
        $this->PackageID = $packageID;
        
        return $this;
    }
}
