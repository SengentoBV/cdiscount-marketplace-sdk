<?php

namespace SengentoBV\CdiscountMarketplaceSdk\Enums;

use \WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for ProductState Enums
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ProductState
 * @package Cdiscount
 * @subpackage Enumerations
 */
class CdiscountProductState extends AbstractStructEnumBase
{
    /**
     * Constant for value 'New'
     * @return string 'New'
     */
    const VALUE_NEW = 'New';
    /**
     * Constant for value 'Used'
     * @return string 'Used'
     */
    const VALUE_USED = 'Used';
    /**
     * Return allowed values
     * @uses self::VALUE_NEW
     * @uses self::VALUE_USED
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return array(
            self::VALUE_NEW,
            self::VALUE_USED,
        );
    }
}
