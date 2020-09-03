<?php

namespace SengentoBV\CdiscountMarketplaceSdk\Enums;

use \WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for CompetingOfferErrorMessage Enums
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:CompetingOfferErrorMessage
 * @package Cdiscount
 * @subpackage Enumerations
 */
class CdiscountCompetingOfferErrorMessage extends AbstractStructEnumBase
{
    /**
     * Constant for value 'UnautorizedProduct'
     * @return string 'UnautorizedProduct'
     */
    const VALUE_UNAUTORIZED_PRODUCT = 'UnautorizedProduct';
    /**
     * Constant for value 'UnknownProduct'
     * @return string 'UnknownProduct'
     */
    const VALUE_UNKNOWN_PRODUCT = 'UnknownProduct';
    /**
     * Constant for value 'TechnicalError'
     * @return string 'TechnicalError'
     */
    const VALUE_TECHNICAL_ERROR = 'TechnicalError';
    /**
     * Constant for value 'ParentVariantProduct'
     * @return string 'ParentVariantProduct'
     */
    const VALUE_PARENT_VARIANT_PRODUCT = 'ParentVariantProduct';
    /**
     * Return allowed values
     * @uses self::VALUE_UNAUTORIZED_PRODUCT
     * @uses self::VALUE_UNKNOWN_PRODUCT
     * @uses self::VALUE_TECHNICAL_ERROR
     * @uses self::VALUE_PARENT_VARIANT_PRODUCT
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_UNAUTORIZED_PRODUCT,
            self::VALUE_UNKNOWN_PRODUCT,
            self::VALUE_TECHNICAL_ERROR,
            self::VALUE_PARENT_VARIANT_PRODUCT,
        );
    }
}
