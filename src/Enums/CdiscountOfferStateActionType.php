<?php

namespace SengentoBV\CdiscountMarketplaceSdk\Enums;

use \WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for OfferStateActionType Enums
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:OfferStateActionType
 * @package Cdiscount
 * @subpackage Enumerations
 */
class CdiscountOfferStateActionType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'Publish'
     * @return string 'Publish'
     */
    const VALUE_PUBLISH = 'Publish';
    /**
     * Constant for value 'Unpublish'
     * @return string 'Unpublish'
     */
    const VALUE_UNPUBLISH = 'Unpublish';
    /**
     * Return allowed values
     * @uses self::VALUE_PUBLISH
     * @uses self::VALUE_UNPUBLISH
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return array(
            self::VALUE_PUBLISH,
            self::VALUE_UNPUBLISH,
        );
    }
}
