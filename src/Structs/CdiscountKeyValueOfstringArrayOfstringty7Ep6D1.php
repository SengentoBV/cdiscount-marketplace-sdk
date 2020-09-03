<?php

namespace SengentoBV\CdiscountMarketplaceSdk\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for KeyValueOfstringArrayOfstringty7Ep6D1 Structs
 * @package Cdiscount
 * @subpackage Structs
 */
class CdiscountKeyValueOfstringArrayOfstringty7Ep6D1 extends AbstractStructBase
{
    /**
     * The Key
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $Key;
    /**
     * The Value
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var \SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfstring
     */
    public $Value;
    /**
     * Constructor method for KeyValueOfstringArrayOfstringty7Ep6D1
     * @uses CdiscountKeyValueOfstringArrayOfstringty7Ep6D1::setKey()
     * @uses CdiscountKeyValueOfstringArrayOfstringty7Ep6D1::setValue()
     * @param string $key
     * @param \SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfstring $value
     */
    public function __construct($key = null, \SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfstring $value = null)
    {
        $this
            ->setKey($key)
            ->setValue($value);
    }
    /**
     * Get Key value
     * @return string|null
     */
    public function getKey()
    {
        return $this->Key;
    }
    /**
     * Set Key value
     * @param string $key
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountKeyValueOfstringArrayOfstringty7Ep6D1
     */
    public function setKey($key = null)
    {
        // validation for constraint: string
        if (!is_null($key) && !is_string($key)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($key, true), gettype($key)), __LINE__);
        }
        $this->Key = $key;
        return $this;
    }
    /**
     * Get Value value
     * @return \SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfstring|null
     */
    public function getValue()
    {
        return $this->Value;
    }
    /**
     * Set Value value
     * @param \SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfstring $value
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountKeyValueOfstringArrayOfstringty7Ep6D1
     */
    public function setValue(\SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfstring $value = null)
    {
        $this->Value = $value;
        return $this;
    }
}
