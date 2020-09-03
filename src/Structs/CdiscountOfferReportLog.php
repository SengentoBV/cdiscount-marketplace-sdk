<?php

namespace SengentoBV\CdiscountMarketplaceSdk\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for OfferReportLog Structs
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:OfferReportLog
 * @package Cdiscount
 * @subpackage Structs
 */
class CdiscountOfferReportLog extends AbstractStructBase
{
    /**
     * The LogDate
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $LogDate;
    /**
     * The OfferIntegrationStatus
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $OfferIntegrationStatus;
    /**
     * The ProductEan
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $ProductEan;
    /**
     * The PropertyList
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfOfferReportPropertyLog
     */
    public $PropertyList;
    /**
     * The SellerProductId
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $SellerProductId;
    /**
     * The Sku
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $Sku;
    /**
     * The Validated
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $Validated;
    /**
     * Constructor method for OfferReportLog
     * @uses CdiscountOfferReportLog::setLogDate()
     * @uses CdiscountOfferReportLog::setOfferIntegrationStatus()
     * @uses CdiscountOfferReportLog::setProductEan()
     * @uses CdiscountOfferReportLog::setPropertyList()
     * @uses CdiscountOfferReportLog::setSellerProductId()
     * @uses CdiscountOfferReportLog::setSku()
     * @uses CdiscountOfferReportLog::setValidated()
     * @param string $logDate
     * @param string $offerIntegrationStatus
     * @param string $productEan
     * @param \SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfOfferReportPropertyLog $propertyList
     * @param string $sellerProductId
     * @param string $sku
     * @param bool $validated
     */
    public function __construct($logDate = null, $offerIntegrationStatus = null, $productEan = null, \SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfOfferReportPropertyLog $propertyList = null, $sellerProductId = null, $sku = null, $validated = null)
    {
        $this
            ->setLogDate($logDate)
            ->setOfferIntegrationStatus($offerIntegrationStatus)
            ->setProductEan($productEan)
            ->setPropertyList($propertyList)
            ->setSellerProductId($sellerProductId)
            ->setSku($sku)
            ->setValidated($validated);
    }
    /**
     * Get LogDate value
     * @return string|null
     */
    public function getLogDate()
    {
        return $this->LogDate;
    }
    /**
     * Set LogDate value
     * @param string $logDate
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountOfferReportLog
     */
    public function setLogDate($logDate = null)
    {
        // validation for constraint: string
        if (!is_null($logDate) && !is_string($logDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($logDate, true), gettype($logDate)), __LINE__);
        }
        $this->LogDate = $logDate;
        return $this;
    }
    /**
     * Get OfferIntegrationStatus value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getOfferIntegrationStatus()
    {
        return isset($this->OfferIntegrationStatus) ? $this->OfferIntegrationStatus : null;
    }
    /**
     * Set OfferIntegrationStatus value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $offerIntegrationStatus
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountOfferReportLog
     */
    public function setOfferIntegrationStatus($offerIntegrationStatus = null)
    {
        // validation for constraint: string
        if (!is_null($offerIntegrationStatus) && !is_string($offerIntegrationStatus)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($offerIntegrationStatus, true), gettype($offerIntegrationStatus)), __LINE__);
        }
        if (is_null($offerIntegrationStatus) || (is_array($offerIntegrationStatus) && empty($offerIntegrationStatus))) {
            unset($this->OfferIntegrationStatus);
        } else {
            $this->OfferIntegrationStatus = $offerIntegrationStatus;
        }
        return $this;
    }
    /**
     * Get ProductEan value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getProductEan()
    {
        return isset($this->ProductEan) ? $this->ProductEan : null;
    }
    /**
     * Set ProductEan value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $productEan
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountOfferReportLog
     */
    public function setProductEan($productEan = null)
    {
        // validation for constraint: string
        if (!is_null($productEan) && !is_string($productEan)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($productEan, true), gettype($productEan)), __LINE__);
        }
        if (is_null($productEan) || (is_array($productEan) && empty($productEan))) {
            unset($this->ProductEan);
        } else {
            $this->ProductEan = $productEan;
        }
        return $this;
    }
    /**
     * Get PropertyList value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfOfferReportPropertyLog|null
     */
    public function getPropertyList()
    {
        return isset($this->PropertyList) ? $this->PropertyList : null;
    }
    /**
     * Set PropertyList value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfOfferReportPropertyLog $propertyList
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountOfferReportLog
     */
    public function setPropertyList(\SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfOfferReportPropertyLog $propertyList = null)
    {
        if (is_null($propertyList) || (is_array($propertyList) && empty($propertyList))) {
            unset($this->PropertyList);
        } else {
            $this->PropertyList = $propertyList;
        }
        return $this;
    }
    /**
     * Get SellerProductId value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getSellerProductId()
    {
        return isset($this->SellerProductId) ? $this->SellerProductId : null;
    }
    /**
     * Set SellerProductId value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $sellerProductId
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountOfferReportLog
     */
    public function setSellerProductId($sellerProductId = null)
    {
        // validation for constraint: string
        if (!is_null($sellerProductId) && !is_string($sellerProductId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($sellerProductId, true), gettype($sellerProductId)), __LINE__);
        }
        if (is_null($sellerProductId) || (is_array($sellerProductId) && empty($sellerProductId))) {
            unset($this->SellerProductId);
        } else {
            $this->SellerProductId = $sellerProductId;
        }
        return $this;
    }
    /**
     * Get Sku value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getSku()
    {
        return isset($this->Sku) ? $this->Sku : null;
    }
    /**
     * Set Sku value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $sku
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountOfferReportLog
     */
    public function setSku($sku = null)
    {
        // validation for constraint: string
        if (!is_null($sku) && !is_string($sku)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($sku, true), gettype($sku)), __LINE__);
        }
        if (is_null($sku) || (is_array($sku) && empty($sku))) {
            unset($this->Sku);
        } else {
            $this->Sku = $sku;
        }
        return $this;
    }
    /**
     * Get Validated value
     * @return bool|null
     */
    public function getValidated()
    {
        return $this->Validated;
    }
    /**
     * Set Validated value
     * @param bool $validated
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountOfferReportLog
     */
    public function setValidated($validated = null)
    {
        // validation for constraint: boolean
        if (!is_null($validated) && !is_bool($validated)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($validated, true), gettype($validated)), __LINE__);
        }
        $this->Validated = $validated;
        return $this;
    }
}
