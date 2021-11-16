<?php

declare(strict_types=1);

namespace SengentoBV\CdiscountMarketplaceSdk\Enums;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for Civility Enums
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:Civility
 * @package Cdiscount
 * @subpackage Enumerations
 */
class CdiscountCivility extends AbstractStructEnumBase
{
    /**
     * Constant for value 'None'
     * @return string 'None'
     */
    const VALUE_NONE = 'None';
    /**
     * Constant for value 'MR'
     * @return string 'MR'
     */
    const VALUE_MR = 'MR';
    /**
     * Constant for value 'MISS'
     * @return string 'MISS'
     */
    const VALUE_MISS = 'MISS';
    /**
     * Constant for value 'MRS'
     * @return string 'MRS'
     */
    const VALUE_MRS = 'MRS';
    /**
     * Constant for value 'DR'
     * @return string 'DR'
     */
    const VALUE_DR = 'DR';
    /**
     * Constant for value 'PHD'
     * @return string 'PHD'
     */
    const VALUE_PHD = 'PHD';
    /**
     * Constant for value 'PR'
     * @return string 'PR'
     */
    const VALUE_PR = 'PR';
    /**
     * Return allowed values
     * @uses self::VALUE_NONE
     * @uses self::VALUE_MR
     * @uses self::VALUE_MISS
     * @uses self::VALUE_MRS
     * @uses self::VALUE_DR
     * @uses self::VALUE_PHD
     * @uses self::VALUE_PR
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_NONE,
            self::VALUE_MR,
            self::VALUE_MISS,
            self::VALUE_MRS,
            self::VALUE_DR,
            self::VALUE_PHD,
            self::VALUE_PR,
        ];
    }
}
