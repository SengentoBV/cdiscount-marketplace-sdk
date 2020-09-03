<?php

namespace SengentoBV\CdiscountMarketplaceSdk\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RelaysFileDepositMessage Structs
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:RelaysFileDepositMessage
 * @package Cdiscount
 * @subpackage Structs
 */
class CdiscountRelaysFileDepositMessage extends CdiscountServiceBaseAPIMessage
{
    /**
     * The RelaysFileId
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $RelaysFileId;
    /**
     * Constructor method for RelaysFileDepositMessage
     * @uses CdiscountRelaysFileDepositMessage::setRelaysFileId()
     * @param int $relaysFileId
     */
    public function __construct($relaysFileId = null)
    {
        $this
            ->setRelaysFileId($relaysFileId);
    }
    /**
     * Get RelaysFileId value
     * @return int|null
     */
    public function getRelaysFileId()
    {
        return $this->RelaysFileId;
    }
    /**
     * Set RelaysFileId value
     * @param int $relaysFileId
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountRelaysFileDepositMessage
     */
    public function setRelaysFileId($relaysFileId = null)
    {
        // validation for constraint: int
        if (!is_null($relaysFileId) && !(is_int($relaysFileId) || ctype_digit($relaysFileId))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($relaysFileId, true), gettype($relaysFileId)), __LINE__);
        }
        $this->RelaysFileId = $relaysFileId;
        return $this;
    }
}
