<?php

namespace SengentoBV\CdiscountMarketplaceSdk\Enums;

use \WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for ValidationStatusType Enums
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ValidationStatusType
 * @package Cdiscount
 * @subpackage Enumerations
 */
class CdiscountValidationStatusType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'ValidatingFianet'
     * @return string 'ValidatingFianet'
     */
    const VALUE_VALIDATING_FIANET = 'ValidatingFianet';
    /**
     * Constant for value 'PreAccepted'
     * @return string 'PreAccepted'
     */
    const VALUE_PRE_ACCEPTED = 'PreAccepted';
    /**
     * Constant for value 'None'
     * @return string 'None'
     */
    const VALUE_NONE = 'None';
    /**
     * Return allowed values
     * @uses self::VALUE_VALIDATING_FIANET
     * @uses self::VALUE_PRE_ACCEPTED
     * @uses self::VALUE_NONE
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return array(
            self::VALUE_VALIDATING_FIANET,
            self::VALUE_PRE_ACCEPTED,
            self::VALUE_NONE,
        );
    }
}
