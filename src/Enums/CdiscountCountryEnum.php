<?php

namespace SengentoBV\CdiscountMarketplaceSdk\Enums;

use \WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for CountryEnum Enums
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:CountryEnum
 * @package Cdiscount
 * @subpackage Enumerations
 */
class CdiscountCountryEnum extends AbstractStructEnumBase
{
    /**
     * Constant for value 'All'
     * @return string 'All'
     */
    const VALUE_ALL = 'All';
    /**
     * Constant for value 'Belgium'
     * @return string 'Belgium'
     */
    const VALUE_BELGIUM = 'Belgium';
    /**
     * Constant for value 'France'
     * @return string 'France'
     */
    const VALUE_FRANCE = 'France';
    /**
     * Constant for value 'Germany'
     * @return string 'Germany'
     */
    const VALUE_GERMANY = 'Germany';
    /**
     * Constant for value 'Spain'
     * @return string 'Spain'
     */
    const VALUE_SPAIN = 'Spain';
    /**
     * Constant for value 'Italy'
     * @return string 'Italy'
     */
    const VALUE_ITALY = 'Italy';
    /**
     * Constant for value 'Luxembourg'
     * @return string 'Luxembourg'
     */
    const VALUE_LUXEMBOURG = 'Luxembourg';
    /**
     * Return allowed values
     * @uses self::VALUE_ALL
     * @uses self::VALUE_BELGIUM
     * @uses self::VALUE_FRANCE
     * @uses self::VALUE_GERMANY
     * @uses self::VALUE_SPAIN
     * @uses self::VALUE_ITALY
     * @uses self::VALUE_LUXEMBOURG
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_ALL,
            self::VALUE_BELGIUM,
            self::VALUE_FRANCE,
            self::VALUE_GERMANY,
            self::VALUE_SPAIN,
            self::VALUE_ITALY,
            self::VALUE_LUXEMBOURG,
        );
    }
}
