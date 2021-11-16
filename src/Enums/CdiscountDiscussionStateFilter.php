<?php

namespace SengentoBV\CdiscountMarketplaceSdk\Enums;

use \WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for DiscussionStateFilter Enums
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:DiscussionStateFilter
 * @package Cdiscount
 * @subpackage Enumerations
 */
class CdiscountDiscussionStateFilter extends AbstractStructEnumBase
{
    /**
     * Constant for value 'All'
     * @return string 'All'
     */
    const VALUE_ALL = 'All';
    /**
     * Constant for value 'Open'
     * @return string 'Open'
     */
    const VALUE_OPEN = 'Open';
    /**
     * Constant for value 'Closed'
     * @return string 'Closed'
     */
    const VALUE_CLOSED = 'Closed';
    /**
     * Constant for value 'NotProcessed'
     * @return string 'NotProcessed'
     */
    const VALUE_NOT_PROCESSED = 'NotProcessed';
    /**
     * Return allowed values
     * @uses self::VALUE_ALL
     * @uses self::VALUE_OPEN
     * @uses self::VALUE_CLOSED
     * @uses self::VALUE_NOT_PROCESSED
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return array(
            self::VALUE_ALL,
            self::VALUE_OPEN,
            self::VALUE_CLOSED,
            self::VALUE_NOT_PROCESSED,
        );
    }
}
