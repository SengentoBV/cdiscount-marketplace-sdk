<?php

namespace SengentoBV\CdiscountMarketplaceSdk\Enums;

use \WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for SoldOutManagement Enums
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:SoldOutManagement
 * @package Cdiscount
 * @subpackage Enumerations
 */
class CdiscountSoldOutManagement extends AbstractStructEnumBase
{
    /**
     * Constant for value 'No'
     * @return string 'No'
     */
    const VALUE_NO = 'No';
    /**
     * Constant for value 'Yes'
     * @return string 'Yes'
     */
    const VALUE_YES = 'Yes';
    /**
     * Return allowed values
     * @uses self::VALUE_NO
     * @uses self::VALUE_YES
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return array(
            self::VALUE_NO,
            self::VALUE_YES,
        );
    }
}
