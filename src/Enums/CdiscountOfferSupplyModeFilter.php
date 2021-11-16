<?php

declare(strict_types=1);

namespace SengentoBV\CdiscountMarketplaceSdk\Enums;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for OfferSupplyModeFilter Enums
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:OfferSupplyModeFilter
 * @package Cdiscount
 * @subpackage Enumerations
 */
class CdiscountOfferSupplyModeFilter extends AbstractStructEnumBase
{
    /**
     * Constant for value 'Marketplace'
     * @return string 'Marketplace'
     */
    const VALUE_MARKETPLACE = 'Marketplace';
    /**
     * Constant for value 'CLogistique'
     * @return string 'CLogistique'
     */
    const VALUE_CLOGISTIQUE = 'CLogistique';
    /**
     * Constant for value 'FOD'
     * @return string 'FOD'
     */
    const VALUE_FOD = 'FOD';
    /**
     * Return allowed values
     * @uses self::VALUE_MARKETPLACE
     * @uses self::VALUE_CLOGISTIQUE
     * @uses self::VALUE_FOD
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_MARKETPLACE,
            self::VALUE_CLOGISTIQUE,
            self::VALUE_FOD,
        ];
    }
}
