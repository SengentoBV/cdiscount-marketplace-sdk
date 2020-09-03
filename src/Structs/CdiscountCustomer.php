<?php

namespace SengentoBV\CdiscountMarketplaceSdk\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Customer Structs
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:Customer
 * @package Cdiscount
 * @subpackage Structs
 */
class CdiscountCustomer extends AbstractStructBase
{
    /**
     * The Civility
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $Civility;
    /**
     * The CustomerId
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $CustomerId;
    /**
     * The Email
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $Email;
    /**
     * The EncryptedEmail
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $EncryptedEmail;
    /**
     * The FirstName
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $FirstName;
    /**
     * The LastName
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $LastName;
    /**
     * The MobilePhone
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $MobilePhone;
    /**
     * The Phone
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $Phone;
    /**
     * The ShippingFirstName
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $ShippingFirstName;
    /**
     * The ShippingLastName
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $ShippingLastName;
    /**
     * Constructor method for Customer
     * @uses CdiscountCustomer::setCivility()
     * @uses CdiscountCustomer::setCustomerId()
     * @uses CdiscountCustomer::setEmail()
     * @uses CdiscountCustomer::setEncryptedEmail()
     * @uses CdiscountCustomer::setFirstName()
     * @uses CdiscountCustomer::setLastName()
     * @uses CdiscountCustomer::setMobilePhone()
     * @uses CdiscountCustomer::setPhone()
     * @uses CdiscountCustomer::setShippingFirstName()
     * @uses CdiscountCustomer::setShippingLastName()
     * @param string $civility
     * @param string $customerId
     * @param string $email
     * @param string $encryptedEmail
     * @param string $firstName
     * @param string $lastName
     * @param string $mobilePhone
     * @param string $phone
     * @param string $shippingFirstName
     * @param string $shippingLastName
     */
    public function __construct($civility = null, $customerId = null, $email = null, $encryptedEmail = null, $firstName = null, $lastName = null, $mobilePhone = null, $phone = null, $shippingFirstName = null, $shippingLastName = null)
    {
        $this
            ->setCivility($civility)
            ->setCustomerId($customerId)
            ->setEmail($email)
            ->setEncryptedEmail($encryptedEmail)
            ->setFirstName($firstName)
            ->setLastName($lastName)
            ->setMobilePhone($mobilePhone)
            ->setPhone($phone)
            ->setShippingFirstName($shippingFirstName)
            ->setShippingLastName($shippingLastName);
    }
    /**
     * Get Civility value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getCivility()
    {
        return isset($this->Civility) ? $this->Civility : null;
    }
    /**
     * Set Civility value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @uses \SengentoBV\CdiscountMarketplaceSdk\Enums\CdiscountCivility::valueIsValid()
     * @uses \SengentoBV\CdiscountMarketplaceSdk\Enums\CdiscountCivility::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $civility
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountCustomer
     */
    public function setCivility($civility = null)
    {
        // validation for constraint: enumeration
        if (!\SengentoBV\CdiscountMarketplaceSdk\Enums\CdiscountCivility::valueIsValid($civility)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \SengentoBV\CdiscountMarketplaceSdk\Enums\CdiscountCivility', is_array($civility) ? implode(', ', $civility) : var_export($civility, true), implode(', ', \SengentoBV\CdiscountMarketplaceSdk\Enums\CdiscountCivility::getValidValues())), __LINE__);
        }
        if (is_null($civility) || (is_array($civility) && empty($civility))) {
            unset($this->Civility);
        } else {
            $this->Civility = $civility;
        }
        return $this;
    }
    /**
     * Get CustomerId value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getCustomerId()
    {
        return isset($this->CustomerId) ? $this->CustomerId : null;
    }
    /**
     * Set CustomerId value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $customerId
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountCustomer
     */
    public function setCustomerId($customerId = null)
    {
        // validation for constraint: string
        if (!is_null($customerId) && !is_string($customerId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($customerId, true), gettype($customerId)), __LINE__);
        }
        if (is_null($customerId) || (is_array($customerId) && empty($customerId))) {
            unset($this->CustomerId);
        } else {
            $this->CustomerId = $customerId;
        }
        return $this;
    }
    /**
     * Get Email value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getEmail()
    {
        return isset($this->Email) ? $this->Email : null;
    }
    /**
     * Set Email value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $email
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountCustomer
     */
    public function setEmail($email = null)
    {
        // validation for constraint: string
        if (!is_null($email) && !is_string($email)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($email, true), gettype($email)), __LINE__);
        }
        if (is_null($email) || (is_array($email) && empty($email))) {
            unset($this->Email);
        } else {
            $this->Email = $email;
        }
        return $this;
    }
    /**
     * Get EncryptedEmail value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getEncryptedEmail()
    {
        return isset($this->EncryptedEmail) ? $this->EncryptedEmail : null;
    }
    /**
     * Set EncryptedEmail value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $encryptedEmail
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountCustomer
     */
    public function setEncryptedEmail($encryptedEmail = null)
    {
        // validation for constraint: string
        if (!is_null($encryptedEmail) && !is_string($encryptedEmail)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($encryptedEmail, true), gettype($encryptedEmail)), __LINE__);
        }
        if (is_null($encryptedEmail) || (is_array($encryptedEmail) && empty($encryptedEmail))) {
            unset($this->EncryptedEmail);
        } else {
            $this->EncryptedEmail = $encryptedEmail;
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
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountCustomer
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
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountCustomer
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
     * Get MobilePhone value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getMobilePhone()
    {
        return isset($this->MobilePhone) ? $this->MobilePhone : null;
    }
    /**
     * Set MobilePhone value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $mobilePhone
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountCustomer
     */
    public function setMobilePhone($mobilePhone = null)
    {
        // validation for constraint: string
        if (!is_null($mobilePhone) && !is_string($mobilePhone)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($mobilePhone, true), gettype($mobilePhone)), __LINE__);
        }
        if (is_null($mobilePhone) || (is_array($mobilePhone) && empty($mobilePhone))) {
            unset($this->MobilePhone);
        } else {
            $this->MobilePhone = $mobilePhone;
        }
        return $this;
    }
    /**
     * Get Phone value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getPhone()
    {
        return isset($this->Phone) ? $this->Phone : null;
    }
    /**
     * Set Phone value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $phone
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountCustomer
     */
    public function setPhone($phone = null)
    {
        // validation for constraint: string
        if (!is_null($phone) && !is_string($phone)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($phone, true), gettype($phone)), __LINE__);
        }
        if (is_null($phone) || (is_array($phone) && empty($phone))) {
            unset($this->Phone);
        } else {
            $this->Phone = $phone;
        }
        return $this;
    }
    /**
     * Get ShippingFirstName value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getShippingFirstName()
    {
        return isset($this->ShippingFirstName) ? $this->ShippingFirstName : null;
    }
    /**
     * Set ShippingFirstName value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $shippingFirstName
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountCustomer
     */
    public function setShippingFirstName($shippingFirstName = null)
    {
        // validation for constraint: string
        if (!is_null($shippingFirstName) && !is_string($shippingFirstName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($shippingFirstName, true), gettype($shippingFirstName)), __LINE__);
        }
        if (is_null($shippingFirstName) || (is_array($shippingFirstName) && empty($shippingFirstName))) {
            unset($this->ShippingFirstName);
        } else {
            $this->ShippingFirstName = $shippingFirstName;
        }
        return $this;
    }
    /**
     * Get ShippingLastName value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getShippingLastName()
    {
        return isset($this->ShippingLastName) ? $this->ShippingLastName : null;
    }
    /**
     * Set ShippingLastName value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $shippingLastName
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountCustomer
     */
    public function setShippingLastName($shippingLastName = null)
    {
        // validation for constraint: string
        if (!is_null($shippingLastName) && !is_string($shippingLastName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($shippingLastName, true), gettype($shippingLastName)), __LINE__);
        }
        if (is_null($shippingLastName) || (is_array($shippingLastName) && empty($shippingLastName))) {
            unset($this->ShippingLastName);
        } else {
            $this->ShippingLastName = $shippingLastName;
        }
        return $this;
    }
}
