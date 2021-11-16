<?php

declare(strict_types=1);

namespace SengentoBV\CdiscountMarketplaceSdk\Enums;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for ParcelActionTypes Enums
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ParcelActionTypes
 * @package Cdiscount
 * @subpackage Enumerations
 */
class CdiscountParcelActionTypes extends AbstractStructEnumBase
{
    /**
     * Constant for value 'AskingForInvestigation'
     * @return string 'AskingForInvestigation'
     */
    const VALUE_ASKING_FOR_INVESTIGATION = 'AskingForInvestigation';
    /**
     * Constant for value 'AskingForDeliveryCertification'
     * @return string 'AskingForDeliveryCertification'
     */
    const VALUE_ASKING_FOR_DELIVERY_CERTIFICATION = 'AskingForDeliveryCertification';
    /**
     * Return allowed values
     * @uses self::VALUE_ASKING_FOR_INVESTIGATION
     * @uses self::VALUE_ASKING_FOR_DELIVERY_CERTIFICATION
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_ASKING_FOR_INVESTIGATION,
            self::VALUE_ASKING_FOR_DELIVERY_CERTIFICATION,
        ];
    }
}
