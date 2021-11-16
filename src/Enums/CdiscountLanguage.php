<?php

namespace SengentoBV\CdiscountMarketplaceSdk\Enums;

use \WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for Language Enums
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:Language
 * @package Cdiscount
 * @subpackage Enumerations
 */
class CdiscountLanguage extends AbstractStructEnumBase
{
    /**
     * Constant for value 'Fr'
     * @return string 'Fr'
     */
    const VALUE_FR = 'Fr';
    /**
     * Constant for value 'En'
     * @return string 'En'
     */
    const VALUE_EN = 'En';
    /**
     * Constant for value 'De'
     * @return string 'De'
     */
    const VALUE_DE = 'De';
    /**
     * Constant for value 'Es'
     * @return string 'Es'
     */
    const VALUE_ES = 'Es';
    /**
     * Constant for value 'Th'
     * @return string 'Th'
     */
    const VALUE_TH = 'Th';
    /**
     * Constant for value 'Vi'
     * @return string 'Vi'
     */
    const VALUE_VI = 'Vi';
    /**
     * Constant for value 'NotDefined'
     * @return string 'NotDefined'
     */
    const VALUE_NOT_DEFINED = 'NotDefined';
    /**
     * Return allowed values
     * @uses self::VALUE_FR
     * @uses self::VALUE_EN
     * @uses self::VALUE_DE
     * @uses self::VALUE_ES
     * @uses self::VALUE_TH
     * @uses self::VALUE_VI
     * @uses self::VALUE_NOT_DEFINED
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return array(
            self::VALUE_FR,
            self::VALUE_EN,
            self::VALUE_DE,
            self::VALUE_ES,
            self::VALUE_TH,
            self::VALUE_VI,
            self::VALUE_NOT_DEFINED,
        );
    }
}
