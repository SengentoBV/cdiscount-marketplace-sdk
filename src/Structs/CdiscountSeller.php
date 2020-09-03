<?php

namespace SengentoBV\CdiscountMarketplaceSdk\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Seller Structs
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:Seller
 * @package Cdiscount
 * @subpackage Structs
 */
class CdiscountSeller extends AbstractStructBase
{
    /**
     * The Email
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $Email;
    /**
     * The IsAvailable
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $IsAvailable;
    /**
     * The Login
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $Login;
    /**
     * The MobileNumber
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $MobileNumber;
    /**
     * The PhoneNumber
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $PhoneNumber;
    /**
     * The SellerAddress
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountAddress
     */
    public $SellerAddress;
    /**
     * The ShopName
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $ShopName;
    /**
     * The ShopUrl
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $ShopUrl;
    /**
     * The SiretNumber
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $SiretNumber;
    /**
     * The State
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $State;
    /**
     * The Name
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $Name;
    /**
     * The Rating
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var float
     */
    public $Rating;
    /**
     * The RatingCount
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var int
     */
    public $RatingCount;
    /**
     * The SalesCount
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var int
     */
    public $SalesCount;
    /**
     * The ShipmentCountry
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $ShipmentCountry;
    /**
     * Constructor method for Seller
     * @uses CdiscountSeller::setEmail()
     * @uses CdiscountSeller::setIsAvailable()
     * @uses CdiscountSeller::setLogin()
     * @uses CdiscountSeller::setMobileNumber()
     * @uses CdiscountSeller::setPhoneNumber()
     * @uses CdiscountSeller::setSellerAddress()
     * @uses CdiscountSeller::setShopName()
     * @uses CdiscountSeller::setShopUrl()
     * @uses CdiscountSeller::setSiretNumber()
     * @uses CdiscountSeller::setState()
     * @uses CdiscountSeller::setName()
     * @uses CdiscountSeller::setRating()
     * @uses CdiscountSeller::setRatingCount()
     * @uses CdiscountSeller::setSalesCount()
     * @uses CdiscountSeller::setShipmentCountry()
     * @param string $email
     * @param string $isAvailable
     * @param string $login
     * @param string $mobileNumber
     * @param string $phoneNumber
     * @param \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountAddress $sellerAddress
     * @param string $shopName
     * @param string $shopUrl
     * @param string $siretNumber
     * @param string $state
     * @param string $name
     * @param float $rating
     * @param int $ratingCount
     * @param int $salesCount
     * @param string $shipmentCountry
     */
    public function __construct($email = null, $isAvailable = null, $login = null, $mobileNumber = null, $phoneNumber = null, \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountAddress $sellerAddress = null, $shopName = null, $shopUrl = null, $siretNumber = null, $state = null, $name = null, $rating = null, $ratingCount = null, $salesCount = null, $shipmentCountry = null)
    {
        $this
            ->setEmail($email)
            ->setIsAvailable($isAvailable)
            ->setLogin($login)
            ->setMobileNumber($mobileNumber)
            ->setPhoneNumber($phoneNumber)
            ->setSellerAddress($sellerAddress)
            ->setShopName($shopName)
            ->setShopUrl($shopUrl)
            ->setSiretNumber($siretNumber)
            ->setState($state)
            ->setName($name)
            ->setRating($rating)
            ->setRatingCount($ratingCount)
            ->setSalesCount($salesCount)
            ->setShipmentCountry($shipmentCountry);
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
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountSeller
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
     * Get IsAvailable value
     * @return string|null
     */
    public function getIsAvailable()
    {
        return $this->IsAvailable;
    }
    /**
     * Set IsAvailable value
     * @uses \SengentoBV\CdiscountMarketplaceSdk\Enums\CdiscountSellerSubStateEnum::valueIsValid()
     * @uses \SengentoBV\CdiscountMarketplaceSdk\Enums\CdiscountSellerSubStateEnum::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $isAvailable
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountSeller
     */
    public function setIsAvailable($isAvailable = null)
    {
        // validation for constraint: enumeration
        if (!\SengentoBV\CdiscountMarketplaceSdk\Enums\CdiscountSellerSubStateEnum::valueIsValid($isAvailable)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \SengentoBV\CdiscountMarketplaceSdk\Enums\CdiscountSellerSubStateEnum', is_array($isAvailable) ? implode(', ', $isAvailable) : var_export($isAvailable, true), implode(', ', \SengentoBV\CdiscountMarketplaceSdk\Enums\CdiscountSellerSubStateEnum::getValidValues())), __LINE__);
        }
        $this->IsAvailable = $isAvailable;
        return $this;
    }
    /**
     * Get Login value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getLogin()
    {
        return isset($this->Login) ? $this->Login : null;
    }
    /**
     * Set Login value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $login
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountSeller
     */
    public function setLogin($login = null)
    {
        // validation for constraint: string
        if (!is_null($login) && !is_string($login)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($login, true), gettype($login)), __LINE__);
        }
        if (is_null($login) || (is_array($login) && empty($login))) {
            unset($this->Login);
        } else {
            $this->Login = $login;
        }
        return $this;
    }
    /**
     * Get MobileNumber value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getMobileNumber()
    {
        return isset($this->MobileNumber) ? $this->MobileNumber : null;
    }
    /**
     * Set MobileNumber value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $mobileNumber
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountSeller
     */
    public function setMobileNumber($mobileNumber = null)
    {
        // validation for constraint: string
        if (!is_null($mobileNumber) && !is_string($mobileNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($mobileNumber, true), gettype($mobileNumber)), __LINE__);
        }
        if (is_null($mobileNumber) || (is_array($mobileNumber) && empty($mobileNumber))) {
            unset($this->MobileNumber);
        } else {
            $this->MobileNumber = $mobileNumber;
        }
        return $this;
    }
    /**
     * Get PhoneNumber value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getPhoneNumber()
    {
        return isset($this->PhoneNumber) ? $this->PhoneNumber : null;
    }
    /**
     * Set PhoneNumber value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $phoneNumber
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountSeller
     */
    public function setPhoneNumber($phoneNumber = null)
    {
        // validation for constraint: string
        if (!is_null($phoneNumber) && !is_string($phoneNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($phoneNumber, true), gettype($phoneNumber)), __LINE__);
        }
        if (is_null($phoneNumber) || (is_array($phoneNumber) && empty($phoneNumber))) {
            unset($this->PhoneNumber);
        } else {
            $this->PhoneNumber = $phoneNumber;
        }
        return $this;
    }
    /**
     * Get SellerAddress value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountAddress|null
     */
    public function getSellerAddress()
    {
        return isset($this->SellerAddress) ? $this->SellerAddress : null;
    }
    /**
     * Set SellerAddress value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountAddress $sellerAddress
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountSeller
     */
    public function setSellerAddress(\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountAddress $sellerAddress = null)
    {
        if (is_null($sellerAddress) || (is_array($sellerAddress) && empty($sellerAddress))) {
            unset($this->SellerAddress);
        } else {
            $this->SellerAddress = $sellerAddress;
        }
        return $this;
    }
    /**
     * Get ShopName value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getShopName()
    {
        return isset($this->ShopName) ? $this->ShopName : null;
    }
    /**
     * Set ShopName value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $shopName
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountSeller
     */
    public function setShopName($shopName = null)
    {
        // validation for constraint: string
        if (!is_null($shopName) && !is_string($shopName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($shopName, true), gettype($shopName)), __LINE__);
        }
        if (is_null($shopName) || (is_array($shopName) && empty($shopName))) {
            unset($this->ShopName);
        } else {
            $this->ShopName = $shopName;
        }
        return $this;
    }
    /**
     * Get ShopUrl value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getShopUrl()
    {
        return isset($this->ShopUrl) ? $this->ShopUrl : null;
    }
    /**
     * Set ShopUrl value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $shopUrl
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountSeller
     */
    public function setShopUrl($shopUrl = null)
    {
        // validation for constraint: string
        if (!is_null($shopUrl) && !is_string($shopUrl)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($shopUrl, true), gettype($shopUrl)), __LINE__);
        }
        if (is_null($shopUrl) || (is_array($shopUrl) && empty($shopUrl))) {
            unset($this->ShopUrl);
        } else {
            $this->ShopUrl = $shopUrl;
        }
        return $this;
    }
    /**
     * Get SiretNumber value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getSiretNumber()
    {
        return isset($this->SiretNumber) ? $this->SiretNumber : null;
    }
    /**
     * Set SiretNumber value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $siretNumber
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountSeller
     */
    public function setSiretNumber($siretNumber = null)
    {
        // validation for constraint: string
        if (!is_null($siretNumber) && !is_string($siretNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($siretNumber, true), gettype($siretNumber)), __LINE__);
        }
        if (is_null($siretNumber) || (is_array($siretNumber) && empty($siretNumber))) {
            unset($this->SiretNumber);
        } else {
            $this->SiretNumber = $siretNumber;
        }
        return $this;
    }
    /**
     * Get State value
     * @return string|null
     */
    public function getState()
    {
        return $this->State;
    }
    /**
     * Set State value
     * @uses \SengentoBV\CdiscountMarketplaceSdk\Enums\CdiscountSellerStateEnum::valueIsValid()
     * @uses \SengentoBV\CdiscountMarketplaceSdk\Enums\CdiscountSellerStateEnum::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $state
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountSeller
     */
    public function setState($state = null)
    {
        // validation for constraint: enumeration
        if (!\SengentoBV\CdiscountMarketplaceSdk\Enums\CdiscountSellerStateEnum::valueIsValid($state)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \SengentoBV\CdiscountMarketplaceSdk\Enums\CdiscountSellerStateEnum', is_array($state) ? implode(', ', $state) : var_export($state, true), implode(', ', \SengentoBV\CdiscountMarketplaceSdk\Enums\CdiscountSellerStateEnum::getValidValues())), __LINE__);
        }
        $this->State = $state;
        return $this;
    }
    /**
     * Get Name value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getName()
    {
        return isset($this->Name) ? $this->Name : null;
    }
    /**
     * Set Name value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $name
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountSeller
     */
    public function setName($name = null)
    {
        // validation for constraint: string
        if (!is_null($name) && !is_string($name)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($name, true), gettype($name)), __LINE__);
        }
        if (is_null($name) || (is_array($name) && empty($name))) {
            unset($this->Name);
        } else {
            $this->Name = $name;
        }
        return $this;
    }
    /**
     * Get Rating value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return float|null
     */
    public function getRating()
    {
        return isset($this->Rating) ? $this->Rating : null;
    }
    /**
     * Set Rating value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param float $rating
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountSeller
     */
    public function setRating($rating = null)
    {
        // validation for constraint: float
        if (!is_null($rating) && !(is_float($rating) || is_numeric($rating))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($rating, true), gettype($rating)), __LINE__);
        }
        if (is_null($rating) || (is_array($rating) && empty($rating))) {
            unset($this->Rating);
        } else {
            $this->Rating = $rating;
        }
        return $this;
    }
    /**
     * Get RatingCount value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return int|null
     */
    public function getRatingCount()
    {
        return isset($this->RatingCount) ? $this->RatingCount : null;
    }
    /**
     * Set RatingCount value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param int $ratingCount
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountSeller
     */
    public function setRatingCount($ratingCount = null)
    {
        // validation for constraint: int
        if (!is_null($ratingCount) && !(is_int($ratingCount) || ctype_digit($ratingCount))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($ratingCount, true), gettype($ratingCount)), __LINE__);
        }
        if (is_null($ratingCount) || (is_array($ratingCount) && empty($ratingCount))) {
            unset($this->RatingCount);
        } else {
            $this->RatingCount = $ratingCount;
        }
        return $this;
    }
    /**
     * Get SalesCount value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return int|null
     */
    public function getSalesCount()
    {
        return isset($this->SalesCount) ? $this->SalesCount : null;
    }
    /**
     * Set SalesCount value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param int $salesCount
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountSeller
     */
    public function setSalesCount($salesCount = null)
    {
        // validation for constraint: int
        if (!is_null($salesCount) && !(is_int($salesCount) || ctype_digit($salesCount))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($salesCount, true), gettype($salesCount)), __LINE__);
        }
        if (is_null($salesCount) || (is_array($salesCount) && empty($salesCount))) {
            unset($this->SalesCount);
        } else {
            $this->SalesCount = $salesCount;
        }
        return $this;
    }
    /**
     * Get ShipmentCountry value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getShipmentCountry()
    {
        return isset($this->ShipmentCountry) ? $this->ShipmentCountry : null;
    }
    /**
     * Set ShipmentCountry value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $shipmentCountry
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountSeller
     */
    public function setShipmentCountry($shipmentCountry = null)
    {
        // validation for constraint: string
        if (!is_null($shipmentCountry) && !is_string($shipmentCountry)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($shipmentCountry, true), gettype($shipmentCountry)), __LINE__);
        }
        if (is_null($shipmentCountry) || (is_array($shipmentCountry) && empty($shipmentCountry))) {
            unset($this->ShipmentCountry);
        } else {
            $this->ShipmentCountry = $shipmentCountry;
        }
        return $this;
    }
}
