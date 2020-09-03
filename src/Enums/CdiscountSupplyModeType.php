<?php

namespace SengentoBV\CdiscountMarketplaceSdk\Enums;

use \WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for SupplyModeType Enums
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:SupplyModeType
 * @package Cdiscount
 * @subpackage Enumerations
 */
class CdiscountSupplyModeType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'Mkp'
     * @return string 'Mkp'
     */
    const VALUE_MKP = 'Mkp';
    /**
     * Constant for value 'Fbc'
     * @return string 'Fbc'
     */
    const VALUE_FBC = 'Fbc';
    /**
     * Constant for value 'Ttd'
     * @return string 'Ttd'
     */
    const VALUE_TTD = 'Ttd';
    /**
     * Return allowed values
     * @uses self::VALUE_MKP
     * @uses self::VALUE_FBC
     * @uses self::VALUE_TTD
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_MKP,
            self::VALUE_FBC,
            self::VALUE_TTD,
        );
    }
}
