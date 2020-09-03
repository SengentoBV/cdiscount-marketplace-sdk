<?php

namespace SengentoBV\CdiscountMarketplaceSdk\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for OrderFilter Structs
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:OrderFilter
 * @package Cdiscount
 * @subpackage Structs
 */
class CdiscountOrderFilter extends AbstractStructBase
{
    /**
     * The BeginCreationDate
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $BeginCreationDate;
    /**
     * The BeginModificationDate
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $BeginModificationDate;
    /**
     * The CorporationCode
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $CorporationCode;
    /**
     * The Country
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $Country;
    /**
     * The EndCreationDate
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $EndCreationDate;
    /**
     * The EndModificationDate
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $EndModificationDate;
    /**
     * The FetchOrderLines
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $FetchOrderLines;
    /**
     * The FetchParcels
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $FetchParcels;
    /**
     * The IncludeExternalFbcSiteId
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $IncludeExternalFbcSiteId;
    /**
     * The OrderReferenceList
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfstring
     */
    public $OrderReferenceList;
    /**
     * The OrderType
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $OrderType;
    /**
     * The PartnerOrderRef
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $PartnerOrderRef;
    /**
     * The States
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfOrderStateEnum
     */
    public $States;
    /**
     * Constructor method for OrderFilter
     * @uses CdiscountOrderFilter::setBeginCreationDate()
     * @uses CdiscountOrderFilter::setBeginModificationDate()
     * @uses CdiscountOrderFilter::setCorporationCode()
     * @uses CdiscountOrderFilter::setCountry()
     * @uses CdiscountOrderFilter::setEndCreationDate()
     * @uses CdiscountOrderFilter::setEndModificationDate()
     * @uses CdiscountOrderFilter::setFetchOrderLines()
     * @uses CdiscountOrderFilter::setFetchParcels()
     * @uses CdiscountOrderFilter::setIncludeExternalFbcSiteId()
     * @uses CdiscountOrderFilter::setOrderReferenceList()
     * @uses CdiscountOrderFilter::setOrderType()
     * @uses CdiscountOrderFilter::setPartnerOrderRef()
     * @uses CdiscountOrderFilter::setStates()
     * @param string $beginCreationDate
     * @param string $beginModificationDate
     * @param string $corporationCode
     * @param string $country
     * @param string $endCreationDate
     * @param string $endModificationDate
     * @param bool $fetchOrderLines
     * @param bool $fetchParcels
     * @param bool $includeExternalFbcSiteId
     * @param \SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfstring $orderReferenceList
     * @param string $orderType
     * @param string $partnerOrderRef
     * @param \SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfOrderStateEnum $states
     */
    public function __construct($beginCreationDate = null, $beginModificationDate = null, $corporationCode = null, $country = null, $endCreationDate = null, $endModificationDate = null, $fetchOrderLines = null, $fetchParcels = null, $includeExternalFbcSiteId = null, \SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfstring $orderReferenceList = null, $orderType = null, $partnerOrderRef = null, \SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfOrderStateEnum $states = null)
    {
        $this
            ->setBeginCreationDate($beginCreationDate)
            ->setBeginModificationDate($beginModificationDate)
            ->setCorporationCode($corporationCode)
            ->setCountry($country)
            ->setEndCreationDate($endCreationDate)
            ->setEndModificationDate($endModificationDate)
            ->setFetchOrderLines($fetchOrderLines)
            ->setFetchParcels($fetchParcels)
            ->setIncludeExternalFbcSiteId($includeExternalFbcSiteId)
            ->setOrderReferenceList($orderReferenceList)
            ->setOrderType($orderType)
            ->setPartnerOrderRef($partnerOrderRef)
            ->setStates($states);
    }
    /**
     * Get BeginCreationDate value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getBeginCreationDate()
    {
        return isset($this->BeginCreationDate) ? $this->BeginCreationDate : null;
    }
    /**
     * Set BeginCreationDate value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $beginCreationDate
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountOrderFilter
     */
    public function setBeginCreationDate($beginCreationDate = null)
    {
        // validation for constraint: string
        if (!is_null($beginCreationDate) && !is_string($beginCreationDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($beginCreationDate, true), gettype($beginCreationDate)), __LINE__);
        }
        if (is_null($beginCreationDate) || (is_array($beginCreationDate) && empty($beginCreationDate))) {
            unset($this->BeginCreationDate);
        } else {
            $this->BeginCreationDate = $beginCreationDate;
        }
        return $this;
    }
    /**
     * Get BeginModificationDate value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getBeginModificationDate()
    {
        return isset($this->BeginModificationDate) ? $this->BeginModificationDate : null;
    }
    /**
     * Set BeginModificationDate value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $beginModificationDate
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountOrderFilter
     */
    public function setBeginModificationDate($beginModificationDate = null)
    {
        // validation for constraint: string
        if (!is_null($beginModificationDate) && !is_string($beginModificationDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($beginModificationDate, true), gettype($beginModificationDate)), __LINE__);
        }
        if (is_null($beginModificationDate) || (is_array($beginModificationDate) && empty($beginModificationDate))) {
            unset($this->BeginModificationDate);
        } else {
            $this->BeginModificationDate = $beginModificationDate;
        }
        return $this;
    }
    /**
     * Get CorporationCode value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getCorporationCode()
    {
        return isset($this->CorporationCode) ? $this->CorporationCode : null;
    }
    /**
     * Set CorporationCode value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $corporationCode
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountOrderFilter
     */
    public function setCorporationCode($corporationCode = null)
    {
        // validation for constraint: string
        if (!is_null($corporationCode) && !is_string($corporationCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($corporationCode, true), gettype($corporationCode)), __LINE__);
        }
        if (is_null($corporationCode) || (is_array($corporationCode) && empty($corporationCode))) {
            unset($this->CorporationCode);
        } else {
            $this->CorporationCode = $corporationCode;
        }
        return $this;
    }
    /**
     * Get Country value
     * @return string|null
     */
    public function getCountry()
    {
        return $this->Country;
    }
    /**
     * Set Country value
     * @uses \SengentoBV\CdiscountMarketplaceSdk\Enums\CdiscountCountryEnum::valueIsValid()
     * @uses \SengentoBV\CdiscountMarketplaceSdk\Enums\CdiscountCountryEnum::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $country
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountOrderFilter
     */
    public function setCountry($country = null)
    {
        // validation for constraint: enumeration
        if (!\SengentoBV\CdiscountMarketplaceSdk\Enums\CdiscountCountryEnum::valueIsValid($country)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \SengentoBV\CdiscountMarketplaceSdk\Enums\CdiscountCountryEnum', is_array($country) ? implode(', ', $country) : var_export($country, true), implode(', ', \SengentoBV\CdiscountMarketplaceSdk\Enums\CdiscountCountryEnum::getValidValues())), __LINE__);
        }
        $this->Country = $country;
        return $this;
    }
    /**
     * Get EndCreationDate value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getEndCreationDate()
    {
        return isset($this->EndCreationDate) ? $this->EndCreationDate : null;
    }
    /**
     * Set EndCreationDate value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $endCreationDate
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountOrderFilter
     */
    public function setEndCreationDate($endCreationDate = null)
    {
        // validation for constraint: string
        if (!is_null($endCreationDate) && !is_string($endCreationDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($endCreationDate, true), gettype($endCreationDate)), __LINE__);
        }
        if (is_null($endCreationDate) || (is_array($endCreationDate) && empty($endCreationDate))) {
            unset($this->EndCreationDate);
        } else {
            $this->EndCreationDate = $endCreationDate;
        }
        return $this;
    }
    /**
     * Get EndModificationDate value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getEndModificationDate()
    {
        return isset($this->EndModificationDate) ? $this->EndModificationDate : null;
    }
    /**
     * Set EndModificationDate value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $endModificationDate
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountOrderFilter
     */
    public function setEndModificationDate($endModificationDate = null)
    {
        // validation for constraint: string
        if (!is_null($endModificationDate) && !is_string($endModificationDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($endModificationDate, true), gettype($endModificationDate)), __LINE__);
        }
        if (is_null($endModificationDate) || (is_array($endModificationDate) && empty($endModificationDate))) {
            unset($this->EndModificationDate);
        } else {
            $this->EndModificationDate = $endModificationDate;
        }
        return $this;
    }
    /**
     * Get FetchOrderLines value
     * @return bool|null
     */
    public function getFetchOrderLines()
    {
        return $this->FetchOrderLines;
    }
    /**
     * Set FetchOrderLines value
     * @param bool $fetchOrderLines
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountOrderFilter
     */
    public function setFetchOrderLines($fetchOrderLines = null)
    {
        // validation for constraint: boolean
        if (!is_null($fetchOrderLines) && !is_bool($fetchOrderLines)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($fetchOrderLines, true), gettype($fetchOrderLines)), __LINE__);
        }
        $this->FetchOrderLines = $fetchOrderLines;
        return $this;
    }
    /**
     * Get FetchParcels value
     * @return bool|null
     */
    public function getFetchParcels()
    {
        return $this->FetchParcels;
    }
    /**
     * Set FetchParcels value
     * @param bool $fetchParcels
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountOrderFilter
     */
    public function setFetchParcels($fetchParcels = null)
    {
        // validation for constraint: boolean
        if (!is_null($fetchParcels) && !is_bool($fetchParcels)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($fetchParcels, true), gettype($fetchParcels)), __LINE__);
        }
        $this->FetchParcels = $fetchParcels;
        return $this;
    }
    /**
     * Get IncludeExternalFbcSiteId value
     * @return bool|null
     */
    public function getIncludeExternalFbcSiteId()
    {
        return $this->IncludeExternalFbcSiteId;
    }
    /**
     * Set IncludeExternalFbcSiteId value
     * @param bool $includeExternalFbcSiteId
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountOrderFilter
     */
    public function setIncludeExternalFbcSiteId($includeExternalFbcSiteId = null)
    {
        // validation for constraint: boolean
        if (!is_null($includeExternalFbcSiteId) && !is_bool($includeExternalFbcSiteId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($includeExternalFbcSiteId, true), gettype($includeExternalFbcSiteId)), __LINE__);
        }
        $this->IncludeExternalFbcSiteId = $includeExternalFbcSiteId;
        return $this;
    }
    /**
     * Get OrderReferenceList value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfstring|null
     */
    public function getOrderReferenceList()
    {
        return isset($this->OrderReferenceList) ? $this->OrderReferenceList : null;
    }
    /**
     * Set OrderReferenceList value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfstring $orderReferenceList
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountOrderFilter
     */
    public function setOrderReferenceList(\SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfstring $orderReferenceList = null)
    {
        if (is_null($orderReferenceList) || (is_array($orderReferenceList) && empty($orderReferenceList))) {
            unset($this->OrderReferenceList);
        } else {
            $this->OrderReferenceList = $orderReferenceList;
        }
        return $this;
    }
    /**
     * Get OrderType value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getOrderType()
    {
        return isset($this->OrderType) ? $this->OrderType : null;
    }
    /**
     * Set OrderType value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @uses \SengentoBV\CdiscountMarketplaceSdk\Enums\CdiscountOrderTypeEnum::valueIsValid()
     * @uses \SengentoBV\CdiscountMarketplaceSdk\Enums\CdiscountOrderTypeEnum::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $orderType
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountOrderFilter
     */
    public function setOrderType($orderType = null)
    {
        // validation for constraint: enumeration
        if (!\SengentoBV\CdiscountMarketplaceSdk\Enums\CdiscountOrderTypeEnum::valueIsValid($orderType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \SengentoBV\CdiscountMarketplaceSdk\Enums\CdiscountOrderTypeEnum', is_array($orderType) ? implode(', ', $orderType) : var_export($orderType, true), implode(', ', \SengentoBV\CdiscountMarketplaceSdk\Enums\CdiscountOrderTypeEnum::getValidValues())), __LINE__);
        }
        if (is_null($orderType) || (is_array($orderType) && empty($orderType))) {
            unset($this->OrderType);
        } else {
            $this->OrderType = $orderType;
        }
        return $this;
    }
    /**
     * Get PartnerOrderRef value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getPartnerOrderRef()
    {
        return isset($this->PartnerOrderRef) ? $this->PartnerOrderRef : null;
    }
    /**
     * Set PartnerOrderRef value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $partnerOrderRef
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountOrderFilter
     */
    public function setPartnerOrderRef($partnerOrderRef = null)
    {
        // validation for constraint: string
        if (!is_null($partnerOrderRef) && !is_string($partnerOrderRef)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($partnerOrderRef, true), gettype($partnerOrderRef)), __LINE__);
        }
        if (is_null($partnerOrderRef) || (is_array($partnerOrderRef) && empty($partnerOrderRef))) {
            unset($this->PartnerOrderRef);
        } else {
            $this->PartnerOrderRef = $partnerOrderRef;
        }
        return $this;
    }
    /**
     * Get States value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfOrderStateEnum|null
     */
    public function getStates()
    {
        return isset($this->States) ? $this->States : null;
    }
    /**
     * Set States value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfOrderStateEnum $states
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountOrderFilter
     */
    public function setStates(\SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfOrderStateEnum $states = null)
    {
        if (is_null($states) || (is_array($states) && empty($states))) {
            unset($this->States);
        } else {
            $this->States = $states;
        }
        return $this;
    }
}
