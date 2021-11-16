<?php

declare(strict_types=1);

namespace SengentoBV\CdiscountMarketplaceSdk\Structs;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Tracking Structs
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:Tracking
 * @package Cdiscount
 * @subpackage Structs
 */
class CdiscountTracking extends AbstractStructBase
{
    /**
     * The InsertDate
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $InsertDate = null;
    /**
     * The Justification
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $Justification = null;
    /**
     * The ParcelNum
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $ParcelNum = null;
    /**
     * The TrackingId
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $TrackingId = null;
    /**
     * Constructor method for Tracking
     * @uses CdiscountTracking::setInsertDate()
     * @uses CdiscountTracking::setJustification()
     * @uses CdiscountTracking::setParcelNum()
     * @uses CdiscountTracking::setTrackingId()
     * @param string $insertDate
     * @param string $justification
     * @param string $parcelNum
     * @param int $trackingId
     */
    public function __construct(?string $insertDate = null, ?string $justification = null, ?string $parcelNum = null, ?int $trackingId = null)
    {
        $this
            ->setInsertDate($insertDate)
            ->setJustification($justification)
            ->setParcelNum($parcelNum)
            ->setTrackingId($trackingId);
    }
    /**
     * Get InsertDate value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getInsertDate(): ?string
    {
        return isset($this->InsertDate) ? $this->InsertDate : null;
    }
    /**
     * Set InsertDate value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $insertDate
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountTracking
     */
    public function setInsertDate(?string $insertDate = null): self
    {
        // validation for constraint: string
        if (!is_null($insertDate) && !is_string($insertDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($insertDate, true), gettype($insertDate)), __LINE__);
        }
        if (is_null($insertDate) || (is_array($insertDate) && empty($insertDate))) {
            unset($this->InsertDate);
        } else {
            $this->InsertDate = $insertDate;
        }
        
        return $this;
    }
    /**
     * Get Justification value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getJustification(): ?string
    {
        return isset($this->Justification) ? $this->Justification : null;
    }
    /**
     * Set Justification value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $justification
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountTracking
     */
    public function setJustification(?string $justification = null): self
    {
        // validation for constraint: string
        if (!is_null($justification) && !is_string($justification)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($justification, true), gettype($justification)), __LINE__);
        }
        if (is_null($justification) || (is_array($justification) && empty($justification))) {
            unset($this->Justification);
        } else {
            $this->Justification = $justification;
        }
        
        return $this;
    }
    /**
     * Get ParcelNum value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getParcelNum(): ?string
    {
        return isset($this->ParcelNum) ? $this->ParcelNum : null;
    }
    /**
     * Set ParcelNum value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $parcelNum
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountTracking
     */
    public function setParcelNum(?string $parcelNum = null): self
    {
        // validation for constraint: string
        if (!is_null($parcelNum) && !is_string($parcelNum)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($parcelNum, true), gettype($parcelNum)), __LINE__);
        }
        if (is_null($parcelNum) || (is_array($parcelNum) && empty($parcelNum))) {
            unset($this->ParcelNum);
        } else {
            $this->ParcelNum = $parcelNum;
        }
        
        return $this;
    }
    /**
     * Get TrackingId value
     * @return int|null
     */
    public function getTrackingId(): ?int
    {
        return $this->TrackingId;
    }
    /**
     * Set TrackingId value
     * @param int $trackingId
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountTracking
     */
    public function setTrackingId(?int $trackingId = null): self
    {
        // validation for constraint: int
        if (!is_null($trackingId) && !(is_int($trackingId) || ctype_digit($trackingId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($trackingId, true), gettype($trackingId)), __LINE__);
        }
        $this->TrackingId = $trackingId;
        
        return $this;
    }
}
