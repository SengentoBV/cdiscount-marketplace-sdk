<?php

namespace SengentoBV\CdiscountMarketplaceSdk\Enums;

use \WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for FulfilmentProductListStatus Enums
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:FulfilmentProductListStatus
 * @package Cdiscount
 * @subpackage Enumerations
 */
class CdiscountFulfilmentProductListStatus extends AbstractStructEnumBase
{
    /**
     * Constant for value 'Ok'
     * @return string 'Ok'
     */
    const VALUE_OK = 'Ok';
    /**
     * Constant for value 'NoData'
     * @return string 'NoData'
     */
    const VALUE_NO_DATA = 'NoData';
    /**
     * Constant for value 'KO'
     * @return string 'KO'
     */
    const VALUE_KO = 'KO';
    /**
     * Return allowed values
     * @uses self::VALUE_OK
     * @uses self::VALUE_NO_DATA
     * @uses self::VALUE_KO
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_OK,
            self::VALUE_NO_DATA,
            self::VALUE_KO,
        );
    }
}
