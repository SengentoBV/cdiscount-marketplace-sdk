<?php

declare(strict_types=1);

namespace SengentoBV\CdiscountMarketplaceSdk\Structs;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RelayIntegrationReportMessage Structs
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:RelayIntegrationReportMessage
 * @package Cdiscount
 * @subpackage Structs
 */
class CdiscountRelayIntegrationReportMessage extends CdiscountServiceBaseAPIMessage
{
    /**
     * The NumberOfErrors
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $NumberOfErrors = null;
    /**
     * The RelaysFileId
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $RelaysFileId = null;
    /**
     * The RelaysFileIntegrationStatus
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $RelaysFileIntegrationStatus = null;
    /**
     * The RelaysLogList
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfRelayIntegrationLog|null
     */
    protected ?\SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfRelayIntegrationLog $RelaysLogList = null;
    /**
     * Constructor method for RelayIntegrationReportMessage
     * @uses CdiscountRelayIntegrationReportMessage::setNumberOfErrors()
     * @uses CdiscountRelayIntegrationReportMessage::setRelaysFileId()
     * @uses CdiscountRelayIntegrationReportMessage::setRelaysFileIntegrationStatus()
     * @uses CdiscountRelayIntegrationReportMessage::setRelaysLogList()
     * @param int $numberOfErrors
     * @param int $relaysFileId
     * @param string $relaysFileIntegrationStatus
     * @param \SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfRelayIntegrationLog $relaysLogList
     */
    public function __construct(?int $numberOfErrors = null, ?int $relaysFileId = null, ?string $relaysFileIntegrationStatus = null, ?\SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfRelayIntegrationLog $relaysLogList = null)
    {
        $this
            ->setNumberOfErrors($numberOfErrors)
            ->setRelaysFileId($relaysFileId)
            ->setRelaysFileIntegrationStatus($relaysFileIntegrationStatus)
            ->setRelaysLogList($relaysLogList);
    }
    /**
     * Get NumberOfErrors value
     * @return int|null
     */
    public function getNumberOfErrors(): ?int
    {
        return $this->NumberOfErrors;
    }
    /**
     * Set NumberOfErrors value
     * @param int $numberOfErrors
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountRelayIntegrationReportMessage
     */
    public function setNumberOfErrors(?int $numberOfErrors = null): self
    {
        // validation for constraint: int
        if (!is_null($numberOfErrors) && !(is_int($numberOfErrors) || ctype_digit($numberOfErrors))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($numberOfErrors, true), gettype($numberOfErrors)), __LINE__);
        }
        $this->NumberOfErrors = $numberOfErrors;
        
        return $this;
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
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountRelayIntegrationReportMessage
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
    /**
     * Get RelaysFileIntegrationStatus value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getRelaysFileIntegrationStatus(): ?string
    {
        return isset($this->RelaysFileIntegrationStatus) ? $this->RelaysFileIntegrationStatus : null;
    }
    /**
     * Set RelaysFileIntegrationStatus value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $relaysFileIntegrationStatus
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountRelayIntegrationReportMessage
     */
    public function setRelaysFileIntegrationStatus(?string $relaysFileIntegrationStatus = null): self
    {
        // validation for constraint: string
        if (!is_null($relaysFileIntegrationStatus) && !is_string($relaysFileIntegrationStatus)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($relaysFileIntegrationStatus, true), gettype($relaysFileIntegrationStatus)), __LINE__);
        }
        if (is_null($relaysFileIntegrationStatus) || (is_array($relaysFileIntegrationStatus) && empty($relaysFileIntegrationStatus))) {
            unset($this->RelaysFileIntegrationStatus);
        } else {
            $this->RelaysFileIntegrationStatus = $relaysFileIntegrationStatus;
        }
        
        return $this;
    }
    /**
     * Get RelaysLogList value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfRelayIntegrationLog|null
     */
    public function getRelaysLogList(): ?\SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfRelayIntegrationLog
    {
        return isset($this->RelaysLogList) ? $this->RelaysLogList : null;
    }
    /**
     * Set RelaysLogList value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfRelayIntegrationLog $relaysLogList
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountRelayIntegrationReportMessage
     */
    public function setRelaysLogList(?\SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfRelayIntegrationLog $relaysLogList = null): self
    {
        if (is_null($relaysLogList) || (is_array($relaysLogList) && empty($relaysLogList))) {
            unset($this->RelaysLogList);
        } else {
            $this->RelaysLogList = $relaysLogList;
        }
        
        return $this;
    }
}
