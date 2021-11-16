<?php

declare(strict_types=1);

namespace SengentoBV\CdiscountMarketplaceSdk\Structs;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for KeyValueOfintstring Structs
 * @package Cdiscount
 * @subpackage Structs
 */
class CdiscountKeyValueOfintstring extends AbstractStructBase
{
    /**
     * The Key
     * @var int|null
     */
    protected ?int $Key = null;
    /**
     * The Value
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string|null
     */
    protected ?string $Value = null;
    /**
     * Constructor method for KeyValueOfintstring
     * @uses CdiscountKeyValueOfintstring::setKey()
     * @uses CdiscountKeyValueOfintstring::setValue()
     * @param int $key
     * @param string $value
     */
    public function __construct(?int $key = null, ?string $value = null)
    {
        $this
            ->setKey($key)
            ->setValue($value);
    }
    /**
     * Get Key value
     * @return int|null
     */
    public function getKey(): ?int
    {
        return $this->Key;
    }
    /**
     * Set Key value
     * @param int $key
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountKeyValueOfintstring
     */
    public function setKey(?int $key = null): self
    {
        // validation for constraint: int
        if (!is_null($key) && !(is_int($key) || ctype_digit($key))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($key, true), gettype($key)), __LINE__);
        }
        $this->Key = $key;
        
        return $this;
    }
    /**
     * Get Value value
     * @return string|null
     */
    public function getValue(): ?string
    {
        return $this->Value;
    }
    /**
     * Set Value value
     * @param string $value
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountKeyValueOfintstring
     */
    public function setValue(?string $value = null): self
    {
        // validation for constraint: string
        if (!is_null($value) && !is_string($value)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($value, true), gettype($value)), __LINE__);
        }
        $this->Value = $value;
        
        return $this;
    }
}
