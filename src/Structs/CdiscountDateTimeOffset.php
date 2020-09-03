<?php

namespace SengentoBV\CdiscountMarketplaceSdk\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DateTimeOffset Structs
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:DateTimeOffset
 * @package Cdiscount
 * @subpackage Structs
 */
class CdiscountDateTimeOffset extends AbstractStructBase
{
    /**
     * The DateTime
     * @var string
     */
    public $DateTime;
    /**
     * The OffsetMinutes
     * @var int
     */
    public $OffsetMinutes;
    /**
     * Constructor method for DateTimeOffset
     * @uses CdiscountDateTimeOffset::setDateTime()
     * @uses CdiscountDateTimeOffset::setOffsetMinutes()
     * @param string $dateTime
     * @param int $offsetMinutes
     */
    public function __construct($dateTime = null, $offsetMinutes = null)
    {
        $this
            ->setDateTime($dateTime)
            ->setOffsetMinutes($offsetMinutes);
    }
    /**
     * Get DateTime value
     * @return string|null
     */
    public function getDateTime()
    {
        return $this->DateTime;
    }
    /**
     * Set DateTime value
     * @param string $dateTime
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountDateTimeOffset
     */
    public function setDateTime($dateTime = null)
    {
        // validation for constraint: string
        if (!is_null($dateTime) && !is_string($dateTime)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($dateTime, true), gettype($dateTime)), __LINE__);
        }
        $this->DateTime = $dateTime;
        return $this;
    }
    /**
     * Get OffsetMinutes value
     * @return int|null
     */
    public function getOffsetMinutes()
    {
        return $this->OffsetMinutes;
    }
    /**
     * Set OffsetMinutes value
     * @param int $offsetMinutes
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountDateTimeOffset
     */
    public function setOffsetMinutes($offsetMinutes = null)
    {
        // validation for constraint: int
        if (!is_null($offsetMinutes) && !(is_int($offsetMinutes) || ctype_digit($offsetMinutes))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($offsetMinutes, true), gettype($offsetMinutes)), __LINE__);
        }
        $this->OffsetMinutes = $offsetMinutes;
        return $this;
    }
}
