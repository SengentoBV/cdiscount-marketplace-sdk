<?php

namespace SengentoBV\CdiscountMarketplaceSdk\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for OfferIntegrationReportMessage Structs
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:OfferIntegrationReportMessage
 * @package Cdiscount
 * @subpackage Structs
 */
class CdiscountOfferIntegrationReportMessage extends CdiscountServiceBaseAPIMessage
{
    /**
     * The NumberOfErrors
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $NumberOfErrors;
    /**
     * The OfferLogList
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfOfferReportLog
     */
    public $OfferLogList;
    /**
     * The PackageId
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $PackageId;
    /**
     * The PackageIntegrationStatus
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $PackageIntegrationStatus;
    /**
     * Constructor method for OfferIntegrationReportMessage
     * @uses CdiscountOfferIntegrationReportMessage::setNumberOfErrors()
     * @uses CdiscountOfferIntegrationReportMessage::setOfferLogList()
     * @uses CdiscountOfferIntegrationReportMessage::setPackageId()
     * @uses CdiscountOfferIntegrationReportMessage::setPackageIntegrationStatus()
     * @param int $numberOfErrors
     * @param \SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfOfferReportLog $offerLogList
     * @param int $packageId
     * @param string $packageIntegrationStatus
     */
    public function __construct($numberOfErrors = null, \SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfOfferReportLog $offerLogList = null, $packageId = null, $packageIntegrationStatus = null)
    {
        $this
            ->setNumberOfErrors($numberOfErrors)
            ->setOfferLogList($offerLogList)
            ->setPackageId($packageId)
            ->setPackageIntegrationStatus($packageIntegrationStatus);
    }
    /**
     * Get NumberOfErrors value
     * @return int|null
     */
    public function getNumberOfErrors()
    {
        return $this->NumberOfErrors;
    }
    /**
     * Set NumberOfErrors value
     * @param int $numberOfErrors
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountOfferIntegrationReportMessage
     */
    public function setNumberOfErrors($numberOfErrors = null)
    {
        // validation for constraint: int
        if (!is_null($numberOfErrors) && !(is_int($numberOfErrors) || ctype_digit($numberOfErrors))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($numberOfErrors, true), gettype($numberOfErrors)), __LINE__);
        }
        $this->NumberOfErrors = $numberOfErrors;
        return $this;
    }
    /**
     * Get OfferLogList value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfOfferReportLog|null
     */
    public function getOfferLogList()
    {
        return isset($this->OfferLogList) ? $this->OfferLogList : null;
    }
    /**
     * Set OfferLogList value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfOfferReportLog $offerLogList
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountOfferIntegrationReportMessage
     */
    public function setOfferLogList(\SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfOfferReportLog $offerLogList = null)
    {
        if (is_null($offerLogList) || (is_array($offerLogList) && empty($offerLogList))) {
            unset($this->OfferLogList);
        } else {
            $this->OfferLogList = $offerLogList;
        }
        return $this;
    }
    /**
     * Get PackageId value
     * @return int|null
     */
    public function getPackageId()
    {
        return $this->PackageId;
    }
    /**
     * Set PackageId value
     * @param int $packageId
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountOfferIntegrationReportMessage
     */
    public function setPackageId($packageId = null)
    {
        // validation for constraint: int
        if (!is_null($packageId) && !(is_int($packageId) || ctype_digit($packageId))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($packageId, true), gettype($packageId)), __LINE__);
        }
        $this->PackageId = $packageId;
        return $this;
    }
    /**
     * Get PackageIntegrationStatus value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getPackageIntegrationStatus()
    {
        return isset($this->PackageIntegrationStatus) ? $this->PackageIntegrationStatus : null;
    }
    /**
     * Set PackageIntegrationStatus value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $packageIntegrationStatus
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountOfferIntegrationReportMessage
     */
    public function setPackageIntegrationStatus($packageIntegrationStatus = null)
    {
        // validation for constraint: string
        if (!is_null($packageIntegrationStatus) && !is_string($packageIntegrationStatus)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($packageIntegrationStatus, true), gettype($packageIntegrationStatus)), __LINE__);
        }
        if (is_null($packageIntegrationStatus) || (is_array($packageIntegrationStatus) && empty($packageIntegrationStatus))) {
            unset($this->PackageIntegrationStatus);
        } else {
            $this->PackageIntegrationStatus = $packageIntegrationStatus;
        }
        return $this;
    }
}
