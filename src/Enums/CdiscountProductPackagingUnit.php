<?php

declare(strict_types=1);

namespace SengentoBV\CdiscountMarketplaceSdk\Enums;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for ProductPackagingUnit Enums
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ProductPackagingUnit
 * @package Cdiscount
 * @subpackage Enumerations
 */
class CdiscountProductPackagingUnit extends AbstractStructEnumBase
{
    /**
     * Constant for value 'None'
     * @return string 'None'
     */
    const VALUE_NONE = 'None';
    /**
     * Constant for value 'Liter'
     * @return string 'Liter'
     */
    const VALUE_LITER = 'Liter';
    /**
     * Constant for value 'Kilogram'
     * @return string 'Kilogram'
     */
    const VALUE_KILOGRAM = 'Kilogram';
    /**
     * Constant for value 'SquareMeter'
     * @return string 'SquareMeter'
     */
    const VALUE_SQUARE_METER = 'SquareMeter';
    /**
     * Constant for value 'CubicMeter'
     * @return string 'CubicMeter'
     */
    const VALUE_CUBIC_METER = 'CubicMeter';
    /**
     * Constant for value 'Piece'
     * @return string 'Piece'
     */
    const VALUE_PIECE = 'Piece';
    /**
     * Return allowed values
     * @uses self::VALUE_NONE
     * @uses self::VALUE_LITER
     * @uses self::VALUE_KILOGRAM
     * @uses self::VALUE_SQUARE_METER
     * @uses self::VALUE_CUBIC_METER
     * @uses self::VALUE_PIECE
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_NONE,
            self::VALUE_LITER,
            self::VALUE_KILOGRAM,
            self::VALUE_SQUARE_METER,
            self::VALUE_CUBIC_METER,
            self::VALUE_PIECE,
        ];
    }
}
