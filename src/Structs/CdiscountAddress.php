<?php

namespace SengentoBV\CdiscountMarketplaceSdk\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Address Structs
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:Address
 * @package Cdiscount
 * @subpackage Structs
 */
class CdiscountAddress extends AbstractStructBase
{
    /**
     * The Address1
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $Address1;
    /**
     * The Address2
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $Address2;
    /**
     * The ApartmentNumber
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $ApartmentNumber;
    /**
     * The Building
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $Building;
    /**
     * The City
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $City;
    /**
     * The Civility
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $Civility;
    /**
     * The CompanyName
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $CompanyName;
    /**
     * The Country
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $Country;
    /**
     * The County
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $County;
    /**
     * The FirstName
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $FirstName;
    /**
     * The Instructions
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $Instructions;
    /**
     * The LastName
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $LastName;
    /**
     * The PlaceName
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $PlaceName;
    /**
     * The RelayId
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $RelayId;
    /**
     * The Street
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $Street;
    /**
     * The ZipCode
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $ZipCode;
    /**
     * Constructor method for Address
     * @uses CdiscountAddress::setAddress1()
     * @uses CdiscountAddress::setAddress2()
     * @uses CdiscountAddress::setApartmentNumber()
     * @uses CdiscountAddress::setBuilding()
     * @uses CdiscountAddress::setCity()
     * @uses CdiscountAddress::setCivility()
     * @uses CdiscountAddress::setCompanyName()
     * @uses CdiscountAddress::setCountry()
     * @uses CdiscountAddress::setCounty()
     * @uses CdiscountAddress::setFirstName()
     * @uses CdiscountAddress::setInstructions()
     * @uses CdiscountAddress::setLastName()
     * @uses CdiscountAddress::setPlaceName()
     * @uses CdiscountAddress::setRelayId()
     * @uses CdiscountAddress::setStreet()
     * @uses CdiscountAddress::setZipCode()
     * @param string $address1
     * @param string $address2
     * @param string $apartmentNumber
     * @param string $building
     * @param string $city
     * @param string $civility
     * @param string $companyName
     * @param string $country
     * @param string $county
     * @param string $firstName
     * @param string $instructions
     * @param string $lastName
     * @param string $placeName
     * @param string $relayId
     * @param string $street
     * @param string $zipCode
     */
    public function __construct($address1 = null, $address2 = null, $apartmentNumber = null, $building = null, $city = null, $civility = null, $companyName = null, $country = null, $county = null, $firstName = null, $instructions = null, $lastName = null, $placeName = null, $relayId = null, $street = null, $zipCode = null)
    {
        $this
            ->setAddress1($address1)
            ->setAddress2($address2)
            ->setApartmentNumber($apartmentNumber)
            ->setBuilding($building)
            ->setCity($city)
            ->setCivility($civility)
            ->setCompanyName($companyName)
            ->setCountry($country)
            ->setCounty($county)
            ->setFirstName($firstName)
            ->setInstructions($instructions)
            ->setLastName($lastName)
            ->setPlaceName($placeName)
            ->setRelayId($relayId)
            ->setStreet($street)
            ->setZipCode($zipCode);
    }
    /**
     * Get Address1 value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getAddress1()
    {
        return isset($this->Address1) ? $this->Address1 : null;
    }
    /**
     * Set Address1 value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $address1
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountAddress
     */
    public function setAddress1($address1 = null)
    {
        // validation for constraint: string
        if (!is_null($address1) && !is_string($address1)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($address1, true), gettype($address1)), __LINE__);
        }
        if (is_null($address1) || (is_array($address1) && empty($address1))) {
            unset($this->Address1);
        } else {
            $this->Address1 = $address1;
        }
        return $this;
    }
    /**
     * Get Address2 value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getAddress2()
    {
        return isset($this->Address2) ? $this->Address2 : null;
    }
    /**
     * Set Address2 value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $address2
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountAddress
     */
    public function setAddress2($address2 = null)
    {
        // validation for constraint: string
        if (!is_null($address2) && !is_string($address2)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($address2, true), gettype($address2)), __LINE__);
        }
        if (is_null($address2) || (is_array($address2) && empty($address2))) {
            unset($this->Address2);
        } else {
            $this->Address2 = $address2;
        }
        return $this;
    }
    /**
     * Get ApartmentNumber value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getApartmentNumber()
    {
        return isset($this->ApartmentNumber) ? $this->ApartmentNumber : null;
    }
    /**
     * Set ApartmentNumber value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $apartmentNumber
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountAddress
     */
    public function setApartmentNumber($apartmentNumber = null)
    {
        // validation for constraint: string
        if (!is_null($apartmentNumber) && !is_string($apartmentNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($apartmentNumber, true), gettype($apartmentNumber)), __LINE__);
        }
        if (is_null($apartmentNumber) || (is_array($apartmentNumber) && empty($apartmentNumber))) {
            unset($this->ApartmentNumber);
        } else {
            $this->ApartmentNumber = $apartmentNumber;
        }
        return $this;
    }
    /**
     * Get Building value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getBuilding()
    {
        return isset($this->Building) ? $this->Building : null;
    }
    /**
     * Set Building value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $building
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountAddress
     */
    public function setBuilding($building = null)
    {
        // validation for constraint: string
        if (!is_null($building) && !is_string($building)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($building, true), gettype($building)), __LINE__);
        }
        if (is_null($building) || (is_array($building) && empty($building))) {
            unset($this->Building);
        } else {
            $this->Building = $building;
        }
        return $this;
    }
    /**
     * Get City value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getCity()
    {
        return isset($this->City) ? $this->City : null;
    }
    /**
     * Set City value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $city
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountAddress
     */
    public function setCity($city = null)
    {
        // validation for constraint: string
        if (!is_null($city) && !is_string($city)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($city, true), gettype($city)), __LINE__);
        }
        if (is_null($city) || (is_array($city) && empty($city))) {
            unset($this->City);
        } else {
            $this->City = $city;
        }
        return $this;
    }
    /**
     * Get Civility value
     * @return string|null
     */
    public function getCivility()
    {
        return $this->Civility;
    }
    /**
     * Set Civility value
     * @uses \SengentoBV\CdiscountMarketplaceSdk\Enums\CdiscountCivility::valueIsValid()
     * @uses \SengentoBV\CdiscountMarketplaceSdk\Enums\CdiscountCivility::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $civility
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountAddress
     */
    public function setCivility($civility = null)
    {
        // validation for constraint: enumeration
        if (!\SengentoBV\CdiscountMarketplaceSdk\Enums\CdiscountCivility::valueIsValid($civility)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \SengentoBV\CdiscountMarketplaceSdk\Enums\CdiscountCivility', is_array($civility) ? implode(', ', $civility) : var_export($civility, true), implode(', ', \SengentoBV\CdiscountMarketplaceSdk\Enums\CdiscountCivility::getValidValues())), __LINE__);
        }
        $this->Civility = $civility;
        return $this;
    }
    /**
     * Get CompanyName value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getCompanyName()
    {
        return isset($this->CompanyName) ? $this->CompanyName : null;
    }
    /**
     * Set CompanyName value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $companyName
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountAddress
     */
    public function setCompanyName($companyName = null)
    {
        // validation for constraint: string
        if (!is_null($companyName) && !is_string($companyName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($companyName, true), gettype($companyName)), __LINE__);
        }
        if (is_null($companyName) || (is_array($companyName) && empty($companyName))) {
            unset($this->CompanyName);
        } else {
            $this->CompanyName = $companyName;
        }
        return $this;
    }
    /**
     * Get Country value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getCountry()
    {
        return isset($this->Country) ? $this->Country : null;
    }
    /**
     * Set Country value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $country
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountAddress
     */
    public function setCountry($country = null)
    {
        // validation for constraint: string
        if (!is_null($country) && !is_string($country)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($country, true), gettype($country)), __LINE__);
        }
        if (is_null($country) || (is_array($country) && empty($country))) {
            unset($this->Country);
        } else {
            $this->Country = $country;
        }
        return $this;
    }
    /**
     * Get County value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getCounty()
    {
        return isset($this->County) ? $this->County : null;
    }
    /**
     * Set County value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $county
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountAddress
     */
    public function setCounty($county = null)
    {
        // validation for constraint: string
        if (!is_null($county) && !is_string($county)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($county, true), gettype($county)), __LINE__);
        }
        if (is_null($county) || (is_array($county) && empty($county))) {
            unset($this->County);
        } else {
            $this->County = $county;
        }
        return $this;
    }
    /**
     * Get FirstName value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getFirstName()
    {
        return isset($this->FirstName) ? $this->FirstName : null;
    }
    /**
     * Set FirstName value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $firstName
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountAddress
     */
    public function setFirstName($firstName = null)
    {
        // validation for constraint: string
        if (!is_null($firstName) && !is_string($firstName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($firstName, true), gettype($firstName)), __LINE__);
        }
        if (is_null($firstName) || (is_array($firstName) && empty($firstName))) {
            unset($this->FirstName);
        } else {
            $this->FirstName = $firstName;
        }
        return $this;
    }
    /**
     * Get Instructions value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getInstructions()
    {
        return isset($this->Instructions) ? $this->Instructions : null;
    }
    /**
     * Set Instructions value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $instructions
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountAddress
     */
    public function setInstructions($instructions = null)
    {
        // validation for constraint: string
        if (!is_null($instructions) && !is_string($instructions)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($instructions, true), gettype($instructions)), __LINE__);
        }
        if (is_null($instructions) || (is_array($instructions) && empty($instructions))) {
            unset($this->Instructions);
        } else {
            $this->Instructions = $instructions;
        }
        return $this;
    }
    /**
     * Get LastName value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getLastName()
    {
        return isset($this->LastName) ? $this->LastName : null;
    }
    /**
     * Set LastName value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $lastName
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountAddress
     */
    public function setLastName($lastName = null)
    {
        // validation for constraint: string
        if (!is_null($lastName) && !is_string($lastName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($lastName, true), gettype($lastName)), __LINE__);
        }
        if (is_null($lastName) || (is_array($lastName) && empty($lastName))) {
            unset($this->LastName);
        } else {
            $this->LastName = $lastName;
        }
        return $this;
    }
    /**
     * Get PlaceName value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getPlaceName()
    {
        return isset($this->PlaceName) ? $this->PlaceName : null;
    }
    /**
     * Set PlaceName value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $placeName
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountAddress
     */
    public function setPlaceName($placeName = null)
    {
        // validation for constraint: string
        if (!is_null($placeName) && !is_string($placeName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($placeName, true), gettype($placeName)), __LINE__);
        }
        if (is_null($placeName) || (is_array($placeName) && empty($placeName))) {
            unset($this->PlaceName);
        } else {
            $this->PlaceName = $placeName;
        }
        return $this;
    }
    /**
     * Get RelayId value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getRelayId()
    {
        return isset($this->RelayId) ? $this->RelayId : null;
    }
    /**
     * Set RelayId value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $relayId
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountAddress
     */
    public function setRelayId($relayId = null)
    {
        // validation for constraint: string
        if (!is_null($relayId) && !is_string($relayId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($relayId, true), gettype($relayId)), __LINE__);
        }
        if (is_null($relayId) || (is_array($relayId) && empty($relayId))) {
            unset($this->RelayId);
        } else {
            $this->RelayId = $relayId;
        }
        return $this;
    }
    /**
     * Get Street value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getStreet()
    {
        return isset($this->Street) ? $this->Street : null;
    }
    /**
     * Set Street value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $street
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountAddress
     */
    public function setStreet($street = null)
    {
        // validation for constraint: string
        if (!is_null($street) && !is_string($street)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($street, true), gettype($street)), __LINE__);
        }
        if (is_null($street) || (is_array($street) && empty($street))) {
            unset($this->Street);
        } else {
            $this->Street = $street;
        }
        return $this;
    }
    /**
     * Get ZipCode value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getZipCode()
    {
        return isset($this->ZipCode) ? $this->ZipCode : null;
    }
    /**
     * Set ZipCode value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $zipCode
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountAddress
     */
    public function setZipCode($zipCode = null)
    {
        // validation for constraint: string
        if (!is_null($zipCode) && !is_string($zipCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($zipCode, true), gettype($zipCode)), __LINE__);
        }
        if (is_null($zipCode) || (is_array($zipCode) && empty($zipCode))) {
            unset($this->ZipCode);
        } else {
            $this->ZipCode = $zipCode;
        }
        return $this;
    }
}
