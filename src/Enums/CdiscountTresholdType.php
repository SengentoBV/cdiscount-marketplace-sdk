<?php

declare(strict_types=1);

namespace SengentoBV\CdiscountMarketplaceSdk\Enums;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for TresholdType Enums
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:TresholdType
 * @package Cdiscount
 * @subpackage Enumerations
 */
class CdiscountTresholdType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'ThresholdMin'
     * @return string 'ThresholdMin'
     */
    const VALUE_THRESHOLD_MIN = 'ThresholdMin';
    /**
     * Constant for value 'ThresholdMax'
     * @return string 'ThresholdMax'
     */
    const VALUE_THRESHOLD_MAX = 'ThresholdMax';
    /**
     * Return allowed values
     * @uses self::VALUE_THRESHOLD_MIN
     * @uses self::VALUE_THRESHOLD_MAX
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_THRESHOLD_MIN,
            self::VALUE_THRESHOLD_MAX,
        ];
    }
}
