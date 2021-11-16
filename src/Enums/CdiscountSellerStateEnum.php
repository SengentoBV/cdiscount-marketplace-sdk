<?php

declare(strict_types=1);

namespace SengentoBV\CdiscountMarketplaceSdk\Enums;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for SellerStateEnum Enums
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:SellerStateEnum
 * @package Cdiscount
 * @subpackage Enumerations
 */
class CdiscountSellerStateEnum extends AbstractStructEnumBase
{
    /**
     * Constant for value 'Activated'
     * @return string 'Activated'
     */
    const VALUE_ACTIVATED = 'Activated';
    /**
     * Constant for value 'Deactivated'
     * @return string 'Deactivated'
     */
    const VALUE_DEACTIVATED = 'Deactivated';
    /**
     * Constant for value 'PutOnNotice'
     * @return string 'PutOnNotice'
     */
    const VALUE_PUT_ON_NOTICE = 'PutOnNotice';
    /**
     * Return allowed values
     * @uses self::VALUE_ACTIVATED
     * @uses self::VALUE_DEACTIVATED
     * @uses self::VALUE_PUT_ON_NOTICE
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_ACTIVATED,
            self::VALUE_DEACTIVATED,
            self::VALUE_PUT_ON_NOTICE,
        ];
    }
}
