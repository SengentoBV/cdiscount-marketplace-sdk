<?php

namespace SengentoBV\CdiscountMarketplaceSdk\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FulfilmentDeliveryDocumentRequest Structs
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:FulfilmentDeliveryDocumentRequest
 * @package Cdiscount
 * @subpackage Structs
 */
class CdiscountFulfilmentDeliveryDocumentRequest extends AbstractStructBase
{
    /**
     * The DepositId
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $DepositId;
    /**
     * Constructor method for FulfilmentDeliveryDocumentRequest
     * @uses CdiscountFulfilmentDeliveryDocumentRequest::setDepositId()
     * @param int $depositId
     */
    public function __construct($depositId = null)
    {
        $this
            ->setDepositId($depositId);
    }
    /**
     * Get DepositId value
     * @return int|null
     */
    public function getDepositId()
    {
        return $this->DepositId;
    }
    /**
     * Set DepositId value
     * @param int $depositId
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountFulfilmentDeliveryDocumentRequest
     */
    public function setDepositId($depositId = null)
    {
        // validation for constraint: int
        if (!is_null($depositId) && !(is_int($depositId) || ctype_digit($depositId))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($depositId, true), gettype($depositId)), __LINE__);
        }
        $this->DepositId = $depositId;
        return $this;
    }
}
