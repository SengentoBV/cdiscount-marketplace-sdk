<?php

namespace SengentoBV\CdiscountMarketplaceSdk\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for KeyValueOfintstring Structs
 * @package Cdiscount
 * @subpackage Structs
 */
class CdiscountKeyValueOfintstring extends AbstractStructBase
{
    /**
     * The Key
     * @var int
     */
    public $Key;
    /**
     * The Value
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $Value;
    /**
     * Constructor method for KeyValueOfintstring
     * @uses CdiscountKeyValueOfintstring::setKey()
     * @uses CdiscountKeyValueOfintstring::setValue()
     * @param int $key
     * @param string $value
     */
    public function __construct($key = null, $value = null)
    {
        $this
            ->setKey($key)
            ->setValue($value);
    }
    /**
     * Get Key value
     * @return int|null
     */
    public function getKey()
    {
        return $this->Key;
    }
    /**
     * Set Key value
     * @param int $key
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountKeyValueOfintstring
     */
    public function setKey($key = null)
    {
        // validation for constraint: int
        if (!is_null($key) && !(is_int($key) || ctype_digit($key))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($key, true), gettype($key)), __LINE__);
        }
        $this->Key = $key;
        return $this;
    }
    /**
     * Get Value value
     * @return string|null
     */
    public function getValue()
    {
        return $this->Value;
    }
    /**
     * Set Value value
     * @param string $value
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountKeyValueOfintstring
     */
    public function setValue($value = null)
    {
        // validation for constraint: string
        if (!is_null($value) && !is_string($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($value, true), gettype($value)), __LINE__);
        }
        $this->Value = $value;
        return $this;
    }
}
