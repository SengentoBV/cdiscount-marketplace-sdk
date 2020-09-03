<?php

namespace SengentoBV\CdiscountMarketplaceSdk\Enums;

use \WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for DiscussionMailStatusEnum Enums
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:DiscussionMailStatusEnum
 * @package Cdiscount
 * @subpackage Enumerations
 */
class CdiscountDiscussionMailStatusEnum extends AbstractStructEnumBase
{
    /**
     * Constant for value 'DiscussionNotFound'
     * @return string 'DiscussionNotFound'
     */
    const VALUE_DISCUSSION_NOT_FOUND = 'DiscussionNotFound';
    /**
     * Constant for value 'UnknownError'
     * @return string 'UnknownError'
     */
    const VALUE_UNKNOWN_ERROR = 'UnknownError';
    /**
     * Constant for value 'Success'
     * @return string 'Success'
     */
    const VALUE_SUCCESS = 'Success';
    /**
     * Constant for value 'DiscussionClosed'
     * @return string 'DiscussionClosed'
     */
    const VALUE_DISCUSSION_CLOSED = 'DiscussionClosed';
    /**
     * Return allowed values
     * @uses self::VALUE_DISCUSSION_NOT_FOUND
     * @uses self::VALUE_UNKNOWN_ERROR
     * @uses self::VALUE_SUCCESS
     * @uses self::VALUE_DISCUSSION_CLOSED
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_DISCUSSION_NOT_FOUND,
            self::VALUE_UNKNOWN_ERROR,
            self::VALUE_SUCCESS,
            self::VALUE_DISCUSSION_CLOSED,
        );
    }
}
