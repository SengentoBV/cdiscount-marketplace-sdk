<?php

namespace SengentoBV\CdiscountMarketplaceSdk\Enums;

use \WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for ProductMatchingStatusEnum Enums
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ProductMatchingStatusEnum
 * @package Cdiscount
 * @subpackage Enumerations
 */
class CdiscountProductMatchingStatusEnum extends AbstractStructEnumBase
{
    /**
     * Constant for value 'None'
     * @return string 'None'
     */
    const VALUE_NONE = 'None';
    /**
     * Constant for value 'Pending'
     * @return string 'Pending'
     */
    const VALUE_PENDING = 'Pending';
    /**
     * Constant for value 'Ok'
     * @return string 'Ok'
     */
    const VALUE_OK = 'Ok';
    /**
     * Constant for value 'Ko'
     * @return string 'Ko'
     */
    const VALUE_KO = 'Ko';
    /**
     * Return allowed values
     * @uses self::VALUE_NONE
     * @uses self::VALUE_PENDING
     * @uses self::VALUE_OK
     * @uses self::VALUE_KO
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_NONE,
            self::VALUE_PENDING,
            self::VALUE_OK,
            self::VALUE_KO,
        );
    }
}
