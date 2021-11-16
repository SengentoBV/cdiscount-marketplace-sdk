<?php

namespace SengentoBV\CdiscountMarketplaceSdk\Enums;

use \WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for CloseDiscussionStatus Enums
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:CloseDiscussionStatus
 * @package Cdiscount
 * @subpackage Enumerations
 */
class CdiscountCloseDiscussionStatus extends AbstractStructEnumBase
{
    /**
     * Constant for value 'DiscussionClosed'
     * @return string 'DiscussionClosed'
     */
    const VALUE_DISCUSSION_CLOSED = 'DiscussionClosed';
    /**
     * Constant for value 'DiscussionNotFound'
     * @return string 'DiscussionNotFound'
     */
    const VALUE_DISCUSSION_NOT_FOUND = 'DiscussionNotFound';
    /**
     * Constant for value 'UnauthorizedCancelPending'
     * @return string 'UnauthorizedCancelPending'
     */
    const VALUE_UNAUTHORIZED_CANCEL_PENDING = 'UnauthorizedCancelPending';
    /**
     * Constant for value 'UnauthorizedLastAnswer'
     * @return string 'UnauthorizedLastAnswer'
     */
    const VALUE_UNAUTHORIZED_LAST_ANSWER = 'UnauthorizedLastAnswer';
    /**
     * Constant for value 'AlreadyClosed'
     * @return string 'AlreadyClosed'
     */
    const VALUE_ALREADY_CLOSED = 'AlreadyClosed';
    /**
     * Return allowed values
     * @uses self::VALUE_DISCUSSION_CLOSED
     * @uses self::VALUE_DISCUSSION_NOT_FOUND
     * @uses self::VALUE_UNAUTHORIZED_CANCEL_PENDING
     * @uses self::VALUE_UNAUTHORIZED_LAST_ANSWER
     * @uses self::VALUE_ALREADY_CLOSED
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return array(
            self::VALUE_DISCUSSION_CLOSED,
            self::VALUE_DISCUSSION_NOT_FOUND,
            self::VALUE_UNAUTHORIZED_CANCEL_PENDING,
            self::VALUE_UNAUTHORIZED_LAST_ANSWER,
            self::VALUE_ALREADY_CLOSED,
        );
    }
}
