<?php

namespace SengentoBV\CdiscountMarketplaceSdk\Enums;

use \WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for FbcReferencementFilter Enums
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:FbcReferencementFilter
 * @package Cdiscount
 * @subpackage Enumerations
 */
class CdiscountFbcReferencementFilter extends AbstractStructEnumBase
{
    /**
     * Constant for value 'All'
     * @return string 'All'
     */
    const VALUE_ALL = 'All';
    /**
     * Constant for value 'OnlyReferenced'
     * @return string 'OnlyReferenced'
     */
    const VALUE_ONLY_REFERENCED = 'OnlyReferenced';
    /**
     * Constant for value 'OnlyNotReferenced'
     * @return string 'OnlyNotReferenced'
     */
    const VALUE_ONLY_NOT_REFERENCED = 'OnlyNotReferenced';
    /**
     * Return allowed values
     * @uses self::VALUE_ALL
     * @uses self::VALUE_ONLY_REFERENCED
     * @uses self::VALUE_ONLY_NOT_REFERENCED
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_ALL,
            self::VALUE_ONLY_REFERENCED,
            self::VALUE_ONLY_NOT_REFERENCED,
        );
    }
}
