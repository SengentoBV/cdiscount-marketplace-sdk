<?php

namespace SengentoBV\CdiscountMarketplaceSdk\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ProductPackageRequest Structs
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ProductPackageRequest
 * @package Cdiscount
 * @subpackage Structs
 */
class CdiscountProductPackageRequest extends AbstractStructBase
{
    /**
     * The ZipFileFullPath
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $ZipFileFullPath;
    /**
     * Constructor method for ProductPackageRequest
     * @uses CdiscountProductPackageRequest::setZipFileFullPath()
     * @param string $zipFileFullPath
     */
    public function __construct($zipFileFullPath = null)
    {
        $this
            ->setZipFileFullPath($zipFileFullPath);
    }
    /**
     * Get ZipFileFullPath value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getZipFileFullPath()
    {
        return isset($this->ZipFileFullPath) ? $this->ZipFileFullPath : null;
    }
    /**
     * Set ZipFileFullPath value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $zipFileFullPath
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountProductPackageRequest
     */
    public function setZipFileFullPath($zipFileFullPath = null)
    {
        // validation for constraint: string
        if (!is_null($zipFileFullPath) && !is_string($zipFileFullPath)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($zipFileFullPath, true), gettype($zipFileFullPath)), __LINE__);
        }
        if (is_null($zipFileFullPath) || (is_array($zipFileFullPath) && empty($zipFileFullPath))) {
            unset($this->ZipFileFullPath);
        } else {
            $this->ZipFileFullPath = $zipFileFullPath;
        }
        return $this;
    }
}
