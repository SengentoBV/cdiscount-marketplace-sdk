<?php

namespace SengentoBV\CdiscountMarketplaceSdk\Enums;

use \WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for AskingForReturnType Enums
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:AskingForReturnType
 * @package Cdiscount
 * @subpackage Enumerations
 */
class CdiscountAskingForReturnType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'AskingForReturn'
     * @return string 'AskingForReturn'
     */
    const VALUE_ASKING_FOR_RETURN = 'AskingForReturn';
    /**
     * Constant for value 'AskingForReturnAndRemoval'
     * @return string 'AskingForReturnAndRemoval'
     */
    const VALUE_ASKING_FOR_RETURN_AND_REMOVAL = 'AskingForReturnAndRemoval';
    /**
     * Return allowed values
     * @uses self::VALUE_ASKING_FOR_RETURN
     * @uses self::VALUE_ASKING_FOR_RETURN_AND_REMOVAL
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return array(
            self::VALUE_ASKING_FOR_RETURN,
            self::VALUE_ASKING_FOR_RETURN_AND_REMOVAL,
        );
    }
}
