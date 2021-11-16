<?php

namespace SengentoBV\CdiscountMarketplaceSdk\Enums;

use \WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for WarehouseType Enums
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:WarehouseType
 * @package Cdiscount
 * @subpackage Enumerations
 */
class CdiscountWarehouseType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'CEM'
     * @return string 'CEM'
     */
    const VALUE_CEM = 'CEM';
    /**
     * Constant for value 'ANZ'
     * @return string 'ANZ'
     */
    const VALUE_ANZ = 'ANZ';
    /**
     * Constant for value 'SMD'
     * @return string 'SMD'
     */
    const VALUE_SMD = 'SMD';
    /**
     * Constant for value 'PP'
     * @return string 'PP'
     */
    const VALUE_PP = 'PP';
    /**
     * Constant for value 'GPS'
     * @return string 'GPS'
     */
    const VALUE_GPS = 'GPS';
    /**
     * Constant for value 'GPN'
     * @return string 'GPN'
     */
    const VALUE_GPN = 'GPN';
    /**
     * Return allowed values
     * @uses self::VALUE_CEM
     * @uses self::VALUE_ANZ
     * @uses self::VALUE_SMD
     * @uses self::VALUE_PP
     * @uses self::VALUE_GPS
     * @uses self::VALUE_GPN
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return array(
            self::VALUE_CEM,
            self::VALUE_ANZ,
            self::VALUE_SMD,
            self::VALUE_PP,
            self::VALUE_GPS,
            self::VALUE_GPN,
        );
    }
}
