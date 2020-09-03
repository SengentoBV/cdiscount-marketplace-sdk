<?php

namespace SengentoBV\CdiscountMarketplaceSdk\Enums;

use \WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for Authorization Enums
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:Authorization
 * @package Cdiscount
 * @subpackage Enumerations
 */
class CdiscountAuthorization extends AbstractStructEnumBase
{
    /**
     * Constant for value 'None'
     * @return string 'None'
     */
    const VALUE_NONE = 'None';
    /**
     * Return allowed values
     * @uses self::VALUE_NONE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_NONE,
        );
    }
}
