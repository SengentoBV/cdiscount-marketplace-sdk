<?php

namespace SengentoBV\CdiscountMarketplaceSdk\Enums;

use \WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for IdentifierTypeEnum Enums
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:IdentifierTypeEnum
 * @package Cdiscount
 * @subpackage Enumerations
 */
class CdiscountIdentifierTypeEnum extends AbstractStructEnumBase
{
    /**
     * Constant for value 'EAN'
     * @return string 'EAN'
     */
    const VALUE_EAN = 'EAN';
    /**
     * Return allowed values
     * @uses self::VALUE_EAN
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_EAN,
        );
    }
}
