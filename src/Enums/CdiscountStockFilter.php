<?php

namespace SengentoBV\CdiscountMarketplaceSdk\Enums;

use \WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for StockFilter Enums
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:StockFilter
 * @package Cdiscount
 * @subpackage Enumerations
 */
class CdiscountStockFilter extends AbstractStructEnumBase
{
    /**
     * Constant for value 'All'
     * @return string 'All'
     */
    const VALUE_ALL = 'All';
    /**
     * Constant for value 'WithStock'
     * @return string 'WithStock'
     */
    const VALUE_WITH_STOCK = 'WithStock';
    /**
     * Constant for value 'WithoutStock'
     * @return string 'WithoutStock'
     */
    const VALUE_WITHOUT_STOCK = 'WithoutStock';
    /**
     * Return allowed values
     * @uses self::VALUE_ALL
     * @uses self::VALUE_WITH_STOCK
     * @uses self::VALUE_WITHOUT_STOCK
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_ALL,
            self::VALUE_WITH_STOCK,
            self::VALUE_WITHOUT_STOCK,
        );
    }
}
