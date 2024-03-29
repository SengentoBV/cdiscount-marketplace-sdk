<?php

declare(strict_types=1);

namespace SengentoBV\CdiscountMarketplaceSdk\Structs;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RelaysFileFilter Structs
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:RelaysFileFilter
 * @package Cdiscount
 * @subpackage Structs
 */
class CdiscountRelaysFileFilter extends AbstractStructBase
{
    /**
     * The RelaysFileId
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $RelaysFileId = null;
    /**
     * Constructor method for RelaysFileFilter
     * @uses CdiscountRelaysFileFilter::setRelaysFileId()
     * @param int $relaysFileId
     */
    public function __construct(?int $relaysFileId = null)
    {
        $this
            ->setRelaysFileId($relaysFileId);
    }
    /**
     * Get RelaysFileId value
     * @return int|null
     */
    public function getRelaysFileId(): ?int
    {
        return $this->RelaysFileId;
    }
    /**
     * Set RelaysFileId value
     * @param int $relaysFileId
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountRelaysFileFilter
     */
    public function setRelaysFileId(?int $relaysFileId = null): self
    {
        // validation for constraint: int
        if (!is_null($relaysFileId) && !(is_int($relaysFileId) || ctype_digit($relaysFileId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($relaysFileId, true), gettype($relaysFileId)), __LINE__);
        }
        $this->RelaysFileId = $relaysFileId;
        
        return $this;
    }
}
