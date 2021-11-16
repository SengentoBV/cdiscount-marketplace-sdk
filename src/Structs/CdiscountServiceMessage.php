<?php

declare(strict_types=1);

namespace SengentoBV\CdiscountMarketplaceSdk\Structs;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ServiceMessage Structs
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ServiceMessage
 * @package Cdiscount
 * @subpackage Structs
 */
class CdiscountServiceMessage extends AbstractStructBase
{
    /**
     * The ErrorMessage
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $ErrorMessage = null;
    /**
     * The OperationSuccess
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $OperationSuccess = null;
    /**
     * Constructor method for ServiceMessage
     * @uses CdiscountServiceMessage::setErrorMessage()
     * @uses CdiscountServiceMessage::setOperationSuccess()
     * @param string $errorMessage
     * @param bool $operationSuccess
     */
    public function __construct(?string $errorMessage = null, ?bool $operationSuccess = null)
    {
        $this
            ->setErrorMessage($errorMessage)
            ->setOperationSuccess($operationSuccess);
    }
    /**
     * Get ErrorMessage value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getErrorMessage(): ?string
    {
        return isset($this->ErrorMessage) ? $this->ErrorMessage : null;
    }
    /**
     * Set ErrorMessage value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $errorMessage
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountServiceMessage
     */
    public function setErrorMessage(?string $errorMessage = null): self
    {
        // validation for constraint: string
        if (!is_null($errorMessage) && !is_string($errorMessage)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($errorMessage, true), gettype($errorMessage)), __LINE__);
        }
        if (is_null($errorMessage) || (is_array($errorMessage) && empty($errorMessage))) {
            unset($this->ErrorMessage);
        } else {
            $this->ErrorMessage = $errorMessage;
        }
        
        return $this;
    }
    /**
     * Get OperationSuccess value
     * @return bool|null
     */
    public function getOperationSuccess(): ?bool
    {
        return $this->OperationSuccess;
    }
    /**
     * Set OperationSuccess value
     * @param bool $operationSuccess
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountServiceMessage
     */
    public function setOperationSuccess(?bool $operationSuccess = null): self
    {
        // validation for constraint: boolean
        if (!is_null($operationSuccess) && !is_bool($operationSuccess)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($operationSuccess, true), gettype($operationSuccess)), __LINE__);
        }
        $this->OperationSuccess = $operationSuccess;
        
        return $this;
    }
}
