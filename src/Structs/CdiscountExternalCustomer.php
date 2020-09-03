<?php

namespace SengentoBV\CdiscountMarketplaceSdk\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ExternalCustomer Structs
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ExternalCustomer
 * @package Cdiscount
 * @subpackage Structs
 */
class CdiscountExternalCustomer extends AbstractStructBase
{
    /**
     * The AdditionalShippingAddress
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $AdditionalShippingAddress;
    /**
     * The CellPhoneNumber
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $CellPhoneNumber;
    /**
     * The Civility
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $Civility;
    /**
     * The CustomerEmailAddress
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $CustomerEmailAddress;
    /**
     * The CustomerFirstName
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $CustomerFirstName;
    /**
     * The CustomerLastName
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $CustomerLastName;
    /**
     * The LandlinePhoneNumber
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $LandlinePhoneNumber;
    /**
     * The Locality
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $Locality;
    /**
     * The RelayId
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $RelayId;
    /**
     * The ShippingAddress
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $ShippingAddress;
    /**
     * The ShippingAddressTitle
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $ShippingAddressTitle;
    /**
     * The ShippingCity
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $ShippingCity;
    /**
     * The ShippingCountry
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $ShippingCountry;
    /**
     * The ShippingPostalCode
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $ShippingPostalCode;
    /**
     * Constructor method for ExternalCustomer
     * @uses CdiscountExternalCustomer::setAdditionalShippingAddress()
     * @uses CdiscountExternalCustomer::setCellPhoneNumber()
     * @uses CdiscountExternalCustomer::setCivility()
     * @uses CdiscountExternalCustomer::setCustomerEmailAddress()
     * @uses CdiscountExternalCustomer::setCustomerFirstName()
     * @uses CdiscountExternalCustomer::setCustomerLastName()
     * @uses CdiscountExternalCustomer::setLandlinePhoneNumber()
     * @uses CdiscountExternalCustomer::setLocality()
     * @uses CdiscountExternalCustomer::setRelayId()
     * @uses CdiscountExternalCustomer::setShippingAddress()
     * @uses CdiscountExternalCustomer::setShippingAddressTitle()
     * @uses CdiscountExternalCustomer::setShippingCity()
     * @uses CdiscountExternalCustomer::setShippingCountry()
     * @uses CdiscountExternalCustomer::setShippingPostalCode()
     * @param string $additionalShippingAddress
     * @param string $cellPhoneNumber
     * @param string $civility
     * @param string $customerEmailAddress
     * @param string $customerFirstName
     * @param string $customerLastName
     * @param string $landlinePhoneNumber
     * @param string $locality
     * @param string $relayId
     * @param string $shippingAddress
     * @param string $shippingAddressTitle
     * @param string $shippingCity
     * @param string $shippingCountry
     * @param string $shippingPostalCode
     */
    public function __construct($additionalShippingAddress = null, $cellPhoneNumber = null, $civility = null, $customerEmailAddress = null, $customerFirstName = null, $customerLastName = null, $landlinePhoneNumber = null, $locality = null, $relayId = null, $shippingAddress = null, $shippingAddressTitle = null, $shippingCity = null, $shippingCountry = null, $shippingPostalCode = null)
    {
        $this
            ->setAdditionalShippingAddress($additionalShippingAddress)
            ->setCellPhoneNumber($cellPhoneNumber)
            ->setCivility($civility)
            ->setCustomerEmailAddress($customerEmailAddress)
            ->setCustomerFirstName($customerFirstName)
            ->setCustomerLastName($customerLastName)
            ->setLandlinePhoneNumber($landlinePhoneNumber)
            ->setLocality($locality)
            ->setRelayId($relayId)
            ->setShippingAddress($shippingAddress)
            ->setShippingAddressTitle($shippingAddressTitle)
            ->setShippingCity($shippingCity)
            ->setShippingCountry($shippingCountry)
            ->setShippingPostalCode($shippingPostalCode);
    }
    /**
     * Get AdditionalShippingAddress value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getAdditionalShippingAddress()
    {
        return isset($this->AdditionalShippingAddress) ? $this->AdditionalShippingAddress : null;
    }
    /**
     * Set AdditionalShippingAddress value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $additionalShippingAddress
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountExternalCustomer
     */
    public function setAdditionalShippingAddress($additionalShippingAddress = null)
    {
        // validation for constraint: string
        if (!is_null($additionalShippingAddress) && !is_string($additionalShippingAddress)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($additionalShippingAddress, true), gettype($additionalShippingAddress)), __LINE__);
        }
        if (is_null($additionalShippingAddress) || (is_array($additionalShippingAddress) && empty($additionalShippingAddress))) {
            unset($this->AdditionalShippingAddress);
        } else {
            $this->AdditionalShippingAddress = $additionalShippingAddress;
        }
        return $this;
    }
    /**
     * Get CellPhoneNumber value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getCellPhoneNumber()
    {
        return isset($this->CellPhoneNumber) ? $this->CellPhoneNumber : null;
    }
    /**
     * Set CellPhoneNumber value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $cellPhoneNumber
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountExternalCustomer
     */
    public function setCellPhoneNumber($cellPhoneNumber = null)
    {
        // validation for constraint: string
        if (!is_null($cellPhoneNumber) && !is_string($cellPhoneNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cellPhoneNumber, true), gettype($cellPhoneNumber)), __LINE__);
        }
        if (is_null($cellPhoneNumber) || (is_array($cellPhoneNumber) && empty($cellPhoneNumber))) {
            unset($this->CellPhoneNumber);
        } else {
            $this->CellPhoneNumber = $cellPhoneNumber;
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
     * @param string $civility
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountExternalCustomer
     */
    public function setCivility($civility = null)
    {
        // validation for constraint: string
        if (!is_null($civility) && !is_string($civility)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($civility, true), gettype($civility)), __LINE__);
        }
        $this->Civility = $civility;
        return $this;
    }
    /**
     * Get CustomerEmailAddress value
     * @return string|null
     */
    public function getCustomerEmailAddress()
    {
        return $this->CustomerEmailAddress;
    }
    /**
     * Set CustomerEmailAddress value
     * @param string $customerEmailAddress
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountExternalCustomer
     */
    public function setCustomerEmailAddress($customerEmailAddress = null)
    {
        // validation for constraint: string
        if (!is_null($customerEmailAddress) && !is_string($customerEmailAddress)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($customerEmailAddress, true), gettype($customerEmailAddress)), __LINE__);
        }
        $this->CustomerEmailAddress = $customerEmailAddress;
        return $this;
    }
    /**
     * Get CustomerFirstName value
     * @return string|null
     */
    public function getCustomerFirstName()
    {
        return $this->CustomerFirstName;
    }
    /**
     * Set CustomerFirstName value
     * @param string $customerFirstName
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountExternalCustomer
     */
    public function setCustomerFirstName($customerFirstName = null)
    {
        // validation for constraint: string
        if (!is_null($customerFirstName) && !is_string($customerFirstName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($customerFirstName, true), gettype($customerFirstName)), __LINE__);
        }
        $this->CustomerFirstName = $customerFirstName;
        return $this;
    }
    /**
     * Get CustomerLastName value
     * @return string|null
     */
    public function getCustomerLastName()
    {
        return $this->CustomerLastName;
    }
    /**
     * Set CustomerLastName value
     * @param string $customerLastName
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountExternalCustomer
     */
    public function setCustomerLastName($customerLastName = null)
    {
        // validation for constraint: string
        if (!is_null($customerLastName) && !is_string($customerLastName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($customerLastName, true), gettype($customerLastName)), __LINE__);
        }
        $this->CustomerLastName = $customerLastName;
        return $this;
    }
    /**
     * Get LandlinePhoneNumber value
     * @return string|null
     */
    public function getLandlinePhoneNumber()
    {
        return $this->LandlinePhoneNumber;
    }
    /**
     * Set LandlinePhoneNumber value
     * @param string $landlinePhoneNumber
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountExternalCustomer
     */
    public function setLandlinePhoneNumber($landlinePhoneNumber = null)
    {
        // validation for constraint: string
        if (!is_null($landlinePhoneNumber) && !is_string($landlinePhoneNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($landlinePhoneNumber, true), gettype($landlinePhoneNumber)), __LINE__);
        }
        $this->LandlinePhoneNumber = $landlinePhoneNumber;
        return $this;
    }
    /**
     * Get Locality value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getLocality()
    {
        return isset($this->Locality) ? $this->Locality : null;
    }
    /**
     * Set Locality value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $locality
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountExternalCustomer
     */
    public function setLocality($locality = null)
    {
        // validation for constraint: string
        if (!is_null($locality) && !is_string($locality)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($locality, true), gettype($locality)), __LINE__);
        }
        if (is_null($locality) || (is_array($locality) && empty($locality))) {
            unset($this->Locality);
        } else {
            $this->Locality = $locality;
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
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountExternalCustomer
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
     * Get ShippingAddress value
     * @return string|null
     */
    public function getShippingAddress()
    {
        return $this->ShippingAddress;
    }
    /**
     * Set ShippingAddress value
     * @param string $shippingAddress
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountExternalCustomer
     */
    public function setShippingAddress($shippingAddress = null)
    {
        // validation for constraint: string
        if (!is_null($shippingAddress) && !is_string($shippingAddress)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($shippingAddress, true), gettype($shippingAddress)), __LINE__);
        }
        $this->ShippingAddress = $shippingAddress;
        return $this;
    }
    /**
     * Get ShippingAddressTitle value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getShippingAddressTitle()
    {
        return isset($this->ShippingAddressTitle) ? $this->ShippingAddressTitle : null;
    }
    /**
     * Set ShippingAddressTitle value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $shippingAddressTitle
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountExternalCustomer
     */
    public function setShippingAddressTitle($shippingAddressTitle = null)
    {
        // validation for constraint: string
        if (!is_null($shippingAddressTitle) && !is_string($shippingAddressTitle)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($shippingAddressTitle, true), gettype($shippingAddressTitle)), __LINE__);
        }
        if (is_null($shippingAddressTitle) || (is_array($shippingAddressTitle) && empty($shippingAddressTitle))) {
            unset($this->ShippingAddressTitle);
        } else {
            $this->ShippingAddressTitle = $shippingAddressTitle;
        }
        return $this;
    }
    /**
     * Get ShippingCity value
     * @return string|null
     */
    public function getShippingCity()
    {
        return $this->ShippingCity;
    }
    /**
     * Set ShippingCity value
     * @param string $shippingCity
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountExternalCustomer
     */
    public function setShippingCity($shippingCity = null)
    {
        // validation for constraint: string
        if (!is_null($shippingCity) && !is_string($shippingCity)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($shippingCity, true), gettype($shippingCity)), __LINE__);
        }
        $this->ShippingCity = $shippingCity;
        return $this;
    }
    /**
     * Get ShippingCountry value
     * @return string|null
     */
    public function getShippingCountry()
    {
        return $this->ShippingCountry;
    }
    /**
     * Set ShippingCountry value
     * @param string $shippingCountry
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountExternalCustomer
     */
    public function setShippingCountry($shippingCountry = null)
    {
        // validation for constraint: string
        if (!is_null($shippingCountry) && !is_string($shippingCountry)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($shippingCountry, true), gettype($shippingCountry)), __LINE__);
        }
        $this->ShippingCountry = $shippingCountry;
        return $this;
    }
    /**
     * Get ShippingPostalCode value
     * @return string|null
     */
    public function getShippingPostalCode()
    {
        return $this->ShippingPostalCode;
    }
    /**
     * Set ShippingPostalCode value
     * @param string $shippingPostalCode
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountExternalCustomer
     */
    public function setShippingPostalCode($shippingPostalCode = null)
    {
        // validation for constraint: string
        if (!is_null($shippingPostalCode) && !is_string($shippingPostalCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($shippingPostalCode, true), gettype($shippingPostalCode)), __LINE__);
        }
        $this->ShippingPostalCode = $shippingPostalCode;
        return $this;
    }
}
