<?php

namespace SengentoBV\CdiscountMarketplaceSdk\Enums;

use \WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for SellerRefundRequestMode Enums
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:SellerRefundRequestMode
 * @package Cdiscount
 * @subpackage Enumerations
 */
class CdiscountSellerRefundRequestMode extends AbstractStructEnumBase
{
    /**
     * Constant for value 'Claim'
     * @return string 'Claim'
     */
    const VALUE_CLAIM = 'Claim';
    /**
     * Constant for value 'Retraction'
     * @return string 'Retraction'
     */
    const VALUE_RETRACTION = 'Retraction';
    /**
     * Return allowed values
     * @uses self::VALUE_CLAIM
     * @uses self::VALUE_RETRACTION
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_CLAIM,
            self::VALUE_RETRACTION,
        );
    }
}
