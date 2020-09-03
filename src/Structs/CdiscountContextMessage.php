<?php

namespace SengentoBV\CdiscountMarketplaceSdk\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ContextMessage Structs
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ContextMessage
 * @package Cdiscount
 * @subpackage Structs
 */
class CdiscountContextMessage extends AbstractStructBase
{
    /**
     * The CatalogID
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var int
     */
    public $CatalogID;
    /**
     * The ConfigurationPolicy
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $ConfigurationPolicy;
    /**
     * The CustomerID
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $CustomerID;
    /**
     * The CustomerId
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $CustomerId;
    /**
     * The CustomerNumber
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $CustomerNumber;
    /**
     * The CustomerPoolID
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var int
     */
    public $CustomerPoolID;
    /**
     * The GeoCoordinate
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountGeoCoordinate
     */
    public $GeoCoordinate;
    /**
     * The SecuredContext
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $SecuredContext;
    /**
     * The SiteID
     * @var int
     */
    public $SiteID;
    /**
     * Constructor method for ContextMessage
     * @uses CdiscountContextMessage::setCatalogID()
     * @uses CdiscountContextMessage::setConfigurationPolicy()
     * @uses CdiscountContextMessage::setCustomerID()
     * @uses CdiscountContextMessage::setCustomerId_1()
     * @uses CdiscountContextMessage::setCustomerNumber()
     * @uses CdiscountContextMessage::setCustomerPoolID()
     * @uses CdiscountContextMessage::setGeoCoordinate()
     * @uses CdiscountContextMessage::setSecuredContext()
     * @uses CdiscountContextMessage::setSiteID()
     * @param int $catalogID
     * @param string $configurationPolicy
     * @param string $customerID
     * @param int $customerId
     * @param string $customerNumber
     * @param int $customerPoolID
     * @param \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountGeoCoordinate $geoCoordinate
     * @param bool $securedContext
     * @param int $siteID
     */
    public function __construct($catalogID = null, $configurationPolicy = null, $customerID = null, $customerId_1 = null, $customerNumber = null, $customerPoolID = null, \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountGeoCoordinate $geoCoordinate = null, $securedContext = null, $siteID = null)
    {
        $this
            ->setCatalogID($catalogID)
            ->setConfigurationPolicy($configurationPolicy)
            ->setCustomerID($customerID)
            ->setCustomerId_1($customerId_1)
            ->setCustomerNumber($customerNumber)
            ->setCustomerPoolID($customerPoolID)
            ->setGeoCoordinate($geoCoordinate)
            ->setSecuredContext($securedContext)
            ->setSiteID($siteID);
    }
    /**
     * Get CatalogID value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return int|null
     */
    public function getCatalogID()
    {
        return isset($this->CatalogID) ? $this->CatalogID : null;
    }
    /**
     * Set CatalogID value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param int $catalogID
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountContextMessage
     */
    public function setCatalogID($catalogID = null)
    {
        // validation for constraint: int
        if (!is_null($catalogID) && !(is_int($catalogID) || ctype_digit($catalogID))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($catalogID, true), gettype($catalogID)), __LINE__);
        }
        if (is_null($catalogID) || (is_array($catalogID) && empty($catalogID))) {
            unset($this->CatalogID);
        } else {
            $this->CatalogID = $catalogID;
        }
        return $this;
    }
    /**
     * Get ConfigurationPolicy value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getConfigurationPolicy()
    {
        return isset($this->ConfigurationPolicy) ? $this->ConfigurationPolicy : null;
    }
    /**
     * Set ConfigurationPolicy value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $configurationPolicy
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountContextMessage
     */
    public function setConfigurationPolicy($configurationPolicy = null)
    {
        // validation for constraint: string
        if (!is_null($configurationPolicy) && !is_string($configurationPolicy)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($configurationPolicy, true), gettype($configurationPolicy)), __LINE__);
        }
        if (is_null($configurationPolicy) || (is_array($configurationPolicy) && empty($configurationPolicy))) {
            unset($this->ConfigurationPolicy);
        } else {
            $this->ConfigurationPolicy = $configurationPolicy;
        }
        return $this;
    }
    /**
     * Get CustomerID value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getCustomerID()
    {
        return isset($this->CustomerID) ? $this->CustomerID : null;
    }
    /**
     * Set CustomerID value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $customerID
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountContextMessage
     */
    public function setCustomerID($customerID = null)
    {
        // validation for constraint: string
        if (!is_null($customerID) && !is_string($customerID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($customerID, true), gettype($customerID)), __LINE__);
        }
        if (is_null($customerID) || (is_array($customerID) && empty($customerID))) {
            unset($this->CustomerID);
        } else {
            $this->CustomerID = $customerID;
        }
        return $this;
    }
    /**
     * Get CustomerId value
     * @return int|null
     */
    public function getCustomerId_1()
    {
        return $this->CustomerId;
    }
    /**
     * Set CustomerId value
     * @param int $customerId
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountContextMessage
     */
    public function setCustomerId_1($customerId_1 = null)
    {
        // validation for constraint: int
        if (!is_null($customerId_1) && !(is_int($customerId_1) || ctype_digit($customerId_1))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($customerId_1, true), gettype($customerId_1)), __LINE__);
        }
        $this->CustomerId = $customerId_1;
        return $this;
    }
    /**
     * Get CustomerNumber value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getCustomerNumber()
    {
        return isset($this->CustomerNumber) ? $this->CustomerNumber : null;
    }
    /**
     * Set CustomerNumber value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $customerNumber
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountContextMessage
     */
    public function setCustomerNumber($customerNumber = null)
    {
        // validation for constraint: string
        if (!is_null($customerNumber) && !is_string($customerNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($customerNumber, true), gettype($customerNumber)), __LINE__);
        }
        if (is_null($customerNumber) || (is_array($customerNumber) && empty($customerNumber))) {
            unset($this->CustomerNumber);
        } else {
            $this->CustomerNumber = $customerNumber;
        }
        return $this;
    }
    /**
     * Get CustomerPoolID value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return int|null
     */
    public function getCustomerPoolID()
    {
        return isset($this->CustomerPoolID) ? $this->CustomerPoolID : null;
    }
    /**
     * Set CustomerPoolID value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param int $customerPoolID
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountContextMessage
     */
    public function setCustomerPoolID($customerPoolID = null)
    {
        // validation for constraint: int
        if (!is_null($customerPoolID) && !(is_int($customerPoolID) || ctype_digit($customerPoolID))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($customerPoolID, true), gettype($customerPoolID)), __LINE__);
        }
        if (is_null($customerPoolID) || (is_array($customerPoolID) && empty($customerPoolID))) {
            unset($this->CustomerPoolID);
        } else {
            $this->CustomerPoolID = $customerPoolID;
        }
        return $this;
    }
    /**
     * Get GeoCoordinate value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountGeoCoordinate|null
     */
    public function getGeoCoordinate()
    {
        return isset($this->GeoCoordinate) ? $this->GeoCoordinate : null;
    }
    /**
     * Set GeoCoordinate value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountGeoCoordinate $geoCoordinate
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountContextMessage
     */
    public function setGeoCoordinate(\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountGeoCoordinate $geoCoordinate = null)
    {
        if (is_null($geoCoordinate) || (is_array($geoCoordinate) && empty($geoCoordinate))) {
            unset($this->GeoCoordinate);
        } else {
            $this->GeoCoordinate = $geoCoordinate;
        }
        return $this;
    }
    /**
     * Get SecuredContext value
     * @return bool|null
     */
    public function getSecuredContext()
    {
        return $this->SecuredContext;
    }
    /**
     * Set SecuredContext value
     * @param bool $securedContext
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountContextMessage
     */
    public function setSecuredContext($securedContext = null)
    {
        // validation for constraint: boolean
        if (!is_null($securedContext) && !is_bool($securedContext)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($securedContext, true), gettype($securedContext)), __LINE__);
        }
        $this->SecuredContext = $securedContext;
        return $this;
    }
    /**
     * Get SiteID value
     * @return int|null
     */
    public function getSiteID()
    {
        return $this->SiteID;
    }
    /**
     * Set SiteID value
     * @param int $siteID
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountContextMessage
     */
    public function setSiteID($siteID = null)
    {
        // validation for constraint: int
        if (!is_null($siteID) && !(is_int($siteID) || ctype_digit($siteID))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($siteID, true), gettype($siteID)), __LINE__);
        }
        $this->SiteID = $siteID;
        return $this;
    }
}
