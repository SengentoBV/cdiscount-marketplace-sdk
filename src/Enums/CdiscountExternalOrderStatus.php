<?php

namespace SengentoBV\CdiscountMarketplaceSdk\Enums;

use \WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for ExternalOrderStatus Enums
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ExternalOrderStatus
 * @package Cdiscount
 * @subpackage Enumerations
 */
class CdiscountExternalOrderStatus extends AbstractStructEnumBase
{
    /**
     * Constant for value 'Ok'
     * @return string 'Ok'
     */
    const VALUE_OK = 'Ok';
    /**
     * Constant for value 'Pending'
     * @return string 'Pending'
     */
    const VALUE_PENDING = 'Pending';
    /**
     * Constant for value 'Ko'
     * @return string 'Ko'
     */
    const VALUE_KO = 'Ko';
    /**
     * Return allowed values
     * @uses self::VALUE_OK
     * @uses self::VALUE_PENDING
     * @uses self::VALUE_KO
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_OK,
            self::VALUE_PENDING,
            self::VALUE_KO,
        );
    }
}
