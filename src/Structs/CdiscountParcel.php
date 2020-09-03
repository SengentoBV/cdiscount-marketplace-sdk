<?php

namespace SengentoBV\CdiscountMarketplaceSdk\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Parcel Structs
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:Parcel
 * @package Cdiscount
 * @subpackage Structs
 */
class CdiscountParcel extends AbstractStructBase
{
    /**
     * The CustomerNum
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $CustomerNum;
    /**
     * The ExternalCarrierName
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $ExternalCarrierName;
    /**
     * The ExternalCarrierTrackingUrl
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $ExternalCarrierTrackingUrl;
    /**
     * The IsCustomerReturn
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $IsCustomerReturn;
    /**
     * The ParcelItemList
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfParcelItem
     */
    public $ParcelItemList;
    /**
     * The ParcelStatus
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $ParcelStatus;
    /**
     * The RealCarrierCode
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $RealCarrierCode;
    /**
     * Constructor method for Parcel
     * @uses CdiscountParcel::setCustomerNum()
     * @uses CdiscountParcel::setExternalCarrierName()
     * @uses CdiscountParcel::setExternalCarrierTrackingUrl()
     * @uses CdiscountParcel::setIsCustomerReturn()
     * @uses CdiscountParcel::setParcelItemList()
     * @uses CdiscountParcel::setParcelStatus()
     * @uses CdiscountParcel::setRealCarrierCode()
     * @param string $customerNum
     * @param string $externalCarrierName
     * @param string $externalCarrierTrackingUrl
     * @param bool $isCustomerReturn
     * @param \SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfParcelItem $parcelItemList
     * @param string $parcelStatus
     * @param string $realCarrierCode
     */
    public function __construct($customerNum = null, $externalCarrierName = null, $externalCarrierTrackingUrl = null, $isCustomerReturn = null, \SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfParcelItem $parcelItemList = null, $parcelStatus = null, $realCarrierCode = null)
    {
        $this
            ->setCustomerNum($customerNum)
            ->setExternalCarrierName($externalCarrierName)
            ->setExternalCarrierTrackingUrl($externalCarrierTrackingUrl)
            ->setIsCustomerReturn($isCustomerReturn)
            ->setParcelItemList($parcelItemList)
            ->setParcelStatus($parcelStatus)
            ->setRealCarrierCode($realCarrierCode);
    }
    /**
     * Get CustomerNum value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getCustomerNum()
    {
        return isset($this->CustomerNum) ? $this->CustomerNum : null;
    }
    /**
     * Set CustomerNum value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $customerNum
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountParcel
     */
    public function setCustomerNum($customerNum = null)
    {
        // validation for constraint: string
        if (!is_null($customerNum) && !is_string($customerNum)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($customerNum, true), gettype($customerNum)), __LINE__);
        }
        if (is_null($customerNum) || (is_array($customerNum) && empty($customerNum))) {
            unset($this->CustomerNum);
        } else {
            $this->CustomerNum = $customerNum;
        }
        return $this;
    }
    /**
     * Get ExternalCarrierName value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getExternalCarrierName()
    {
        return isset($this->ExternalCarrierName) ? $this->ExternalCarrierName : null;
    }
    /**
     * Set ExternalCarrierName value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $externalCarrierName
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountParcel
     */
    public function setExternalCarrierName($externalCarrierName = null)
    {
        // validation for constraint: string
        if (!is_null($externalCarrierName) && !is_string($externalCarrierName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($externalCarrierName, true), gettype($externalCarrierName)), __LINE__);
        }
        if (is_null($externalCarrierName) || (is_array($externalCarrierName) && empty($externalCarrierName))) {
            unset($this->ExternalCarrierName);
        } else {
            $this->ExternalCarrierName = $externalCarrierName;
        }
        return $this;
    }
    /**
     * Get ExternalCarrierTrackingUrl value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getExternalCarrierTrackingUrl()
    {
        return isset($this->ExternalCarrierTrackingUrl) ? $this->ExternalCarrierTrackingUrl : null;
    }
    /**
     * Set ExternalCarrierTrackingUrl value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $externalCarrierTrackingUrl
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountParcel
     */
    public function setExternalCarrierTrackingUrl($externalCarrierTrackingUrl = null)
    {
        // validation for constraint: string
        if (!is_null($externalCarrierTrackingUrl) && !is_string($externalCarrierTrackingUrl)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($externalCarrierTrackingUrl, true), gettype($externalCarrierTrackingUrl)), __LINE__);
        }
        if (is_null($externalCarrierTrackingUrl) || (is_array($externalCarrierTrackingUrl) && empty($externalCarrierTrackingUrl))) {
            unset($this->ExternalCarrierTrackingUrl);
        } else {
            $this->ExternalCarrierTrackingUrl = $externalCarrierTrackingUrl;
        }
        return $this;
    }
    /**
     * Get IsCustomerReturn value
     * @return bool|null
     */
    public function getIsCustomerReturn()
    {
        return $this->IsCustomerReturn;
    }
    /**
     * Set IsCustomerReturn value
     * @param bool $isCustomerReturn
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountParcel
     */
    public function setIsCustomerReturn($isCustomerReturn = null)
    {
        // validation for constraint: boolean
        if (!is_null($isCustomerReturn) && !is_bool($isCustomerReturn)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isCustomerReturn, true), gettype($isCustomerReturn)), __LINE__);
        }
        $this->IsCustomerReturn = $isCustomerReturn;
        return $this;
    }
    /**
     * Get ParcelItemList value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfParcelItem|null
     */
    public function getParcelItemList()
    {
        return isset($this->ParcelItemList) ? $this->ParcelItemList : null;
    }
    /**
     * Set ParcelItemList value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfParcelItem $parcelItemList
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountParcel
     */
    public function setParcelItemList(\SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfParcelItem $parcelItemList = null)
    {
        if (is_null($parcelItemList) || (is_array($parcelItemList) && empty($parcelItemList))) {
            unset($this->ParcelItemList);
        } else {
            $this->ParcelItemList = $parcelItemList;
        }
        return $this;
    }
    /**
     * Get ParcelStatus value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getParcelStatus()
    {
        return isset($this->ParcelStatus) ? $this->ParcelStatus : null;
    }
    /**
     * Set ParcelStatus value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @uses \SengentoBV\CdiscountMarketplaceSdk\Enums\CdiscountParcelStatus::valueIsValid()
     * @uses \SengentoBV\CdiscountMarketplaceSdk\Enums\CdiscountParcelStatus::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $parcelStatus
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountParcel
     */
    public function setParcelStatus($parcelStatus = null)
    {
        // validation for constraint: enumeration
        if (!\SengentoBV\CdiscountMarketplaceSdk\Enums\CdiscountParcelStatus::valueIsValid($parcelStatus)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \SengentoBV\CdiscountMarketplaceSdk\Enums\CdiscountParcelStatus', is_array($parcelStatus) ? implode(', ', $parcelStatus) : var_export($parcelStatus, true), implode(', ', \SengentoBV\CdiscountMarketplaceSdk\Enums\CdiscountParcelStatus::getValidValues())), __LINE__);
        }
        if (is_null($parcelStatus) || (is_array($parcelStatus) && empty($parcelStatus))) {
            unset($this->ParcelStatus);
        } else {
            $this->ParcelStatus = $parcelStatus;
        }
        return $this;
    }
    /**
     * Get RealCarrierCode value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getRealCarrierCode()
    {
        return isset($this->RealCarrierCode) ? $this->RealCarrierCode : null;
    }
    /**
     * Set RealCarrierCode value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $realCarrierCode
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountParcel
     */
    public function setRealCarrierCode($realCarrierCode = null)
    {
        // validation for constraint: string
        if (!is_null($realCarrierCode) && !is_string($realCarrierCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($realCarrierCode, true), gettype($realCarrierCode)), __LINE__);
        }
        if (is_null($realCarrierCode) || (is_array($realCarrierCode) && empty($realCarrierCode))) {
            unset($this->RealCarrierCode);
        } else {
            $this->RealCarrierCode = $realCarrierCode;
        }
        return $this;
    }
}
