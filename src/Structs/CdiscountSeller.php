<?php

declare(strict_types=1);

namespace SengentoBV\CdiscountMarketplaceSdk\Structs;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

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
     * @var string|null
     */
    protected ?string $Email = null;
    /**
     * The Id
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $Id = null;
    /**
     * The IsAvailable
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $IsAvailable = null;
    /**
     * The Login
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $Login = null;
    /**
     * The MobileNumber
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $MobileNumber = null;
    /**
     * The PhoneNumber
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $PhoneNumber = null;
    /**
     * The SellerAddress
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountAddress|null
     */
    protected ?\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountAddress $SellerAddress = null;
    /**
     * The ShopName
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $ShopName = null;
    /**
     * The ShopUrl
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $ShopUrl = null;
    /**
     * The SiretNumber
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $SiretNumber = null;
    /**
     * The State
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $State = null;
    /**
     * The Name
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $Name = null;
    /**
     * The Rating
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var float|null
     */
    protected ?float $Rating = null;
    /**
     * The RatingCount
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var int|null
     */
    protected ?int $RatingCount = null;
    /**
     * The SalesCount
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var int|null
     */
    protected ?int $SalesCount = null;
    /**
     * The ShipmentCountry
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $ShipmentCountry = null;
    /**
     * Constructor method for Seller
     * @uses CdiscountSeller::setEmail()
     * @uses CdiscountSeller::setId()
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
     * @param int $id
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
    public function __construct(?string $email = null, ?int $id = null, ?string $isAvailable = null, ?string $login = null, ?string $mobileNumber = null, ?string $phoneNumber = null, ?\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountAddress $sellerAddress = null, ?string $shopName = null, ?string $shopUrl = null, ?string $siretNumber = null, ?string $state = null, ?string $name = null, ?float $rating = null, ?int $ratingCount = null, ?int $salesCount = null, ?string $shipmentCountry = null)
    {
        $this
            ->setEmail($email)
            ->setId($id)
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
    public function getEmail(): ?string
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
    public function setEmail(?string $email = null): self
    {
        // validation for constraint: string
        if (!is_null($email) && !is_string($email)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($email, true), gettype($email)), __LINE__);
        }
        if (is_null($email) || (is_array($email) && empty($email))) {
            unset($this->Email);
        } else {
            $this->Email = $email;
        }
        
        return $this;
    }
    /**
     * Get Id value
     * @return int|null
     */
    public function getId(): ?int
    {
        return $this->Id;
    }
    /**
     * Set Id value
     * @param int $id
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountSeller
     */
    public function setId(?int $id = null): self
    {
        // validation for constraint: int
        if (!is_null($id) && !(is_int($id) || ctype_digit($id))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($id, true), gettype($id)), __LINE__);
        }
        $this->Id = $id;
        
        return $this;
    }
    /**
     * Get IsAvailable value
     * @return string|null
     */
    public function getIsAvailable(): ?string
    {
        return $this->IsAvailable;
    }
    /**
     * Set IsAvailable value
     * @uses \SengentoBV\CdiscountMarketplaceSdk\Enums\CdiscountSellerSubStateEnum::valueIsValid()
     * @uses \SengentoBV\CdiscountMarketplaceSdk\Enums\CdiscountSellerSubStateEnum::getValidValues()
     * @throws InvalidArgumentException
     * @param string $isAvailable
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountSeller
     */
    public function setIsAvailable(?string $isAvailable = null): self
    {
        // validation for constraint: enumeration
        if (!\SengentoBV\CdiscountMarketplaceSdk\Enums\CdiscountSellerSubStateEnum::valueIsValid($isAvailable)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \SengentoBV\CdiscountMarketplaceSdk\Enums\CdiscountSellerSubStateEnum', is_array($isAvailable) ? implode(', ', $isAvailable) : var_export($isAvailable, true), implode(', ', \SengentoBV\CdiscountMarketplaceSdk\Enums\CdiscountSellerSubStateEnum::getValidValues())), __LINE__);
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
    public function getLogin(): ?string
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
    public function setLogin(?string $login = null): self
    {
        // validation for constraint: string
        if (!is_null($login) && !is_string($login)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($login, true), gettype($login)), __LINE__);
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
    public function getMobileNumber(): ?string
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
    public function setMobileNumber(?string $mobileNumber = null): self
    {
        // validation for constraint: string
        if (!is_null($mobileNumber) && !is_string($mobileNumber)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($mobileNumber, true), gettype($mobileNumber)), __LINE__);
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
    public function getPhoneNumber(): ?string
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
    public function setPhoneNumber(?string $phoneNumber = null): self
    {
        // validation for constraint: string
        if (!is_null($phoneNumber) && !is_string($phoneNumber)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($phoneNumber, true), gettype($phoneNumber)), __LINE__);
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
    public function getSellerAddress(): ?\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountAddress
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
    public function setSellerAddress(?\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountAddress $sellerAddress = null): self
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
    public function getShopName(): ?string
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
    public function setShopName(?string $shopName = null): self
    {
        // validation for constraint: string
        if (!is_null($shopName) && !is_string($shopName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($shopName, true), gettype($shopName)), __LINE__);
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
    public function getShopUrl(): ?string
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
    public function setShopUrl(?string $shopUrl = null): self
    {
        // validation for constraint: string
        if (!is_null($shopUrl) && !is_string($shopUrl)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($shopUrl, true), gettype($shopUrl)), __LINE__);
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
    public function getSiretNumber(): ?string
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
    public function setSiretNumber(?string $siretNumber = null): self
    {
        // validation for constraint: string
        if (!is_null($siretNumber) && !is_string($siretNumber)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($siretNumber, true), gettype($siretNumber)), __LINE__);
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
    public function getState(): ?string
    {
        return $this->State;
    }
    /**
     * Set State value
     * @uses \SengentoBV\CdiscountMarketplaceSdk\Enums\CdiscountSellerStateEnum::valueIsValid()
     * @uses \SengentoBV\CdiscountMarketplaceSdk\Enums\CdiscountSellerStateEnum::getValidValues()
     * @throws InvalidArgumentException
     * @param string $state
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountSeller
     */
    public function setState(?string $state = null): self
    {
        // validation for constraint: enumeration
        if (!\SengentoBV\CdiscountMarketplaceSdk\Enums\CdiscountSellerStateEnum::valueIsValid($state)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \SengentoBV\CdiscountMarketplaceSdk\Enums\CdiscountSellerStateEnum', is_array($state) ? implode(', ', $state) : var_export($state, true), implode(', ', \SengentoBV\CdiscountMarketplaceSdk\Enums\CdiscountSellerStateEnum::getValidValues())), __LINE__);
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
    public function getName(): ?string
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
    public function setName(?string $name = null): self
    {
        // validation for constraint: string
        if (!is_null($name) && !is_string($name)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($name, true), gettype($name)), __LINE__);
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
    public function getRating(): ?float
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
    public function setRating(?float $rating = null): self
    {
        // validation for constraint: float
        if (!is_null($rating) && !(is_float($rating) || is_numeric($rating))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($rating, true), gettype($rating)), __LINE__);
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
    public function getRatingCount(): ?int
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
    public function setRatingCount(?int $ratingCount = null): self
    {
        // validation for constraint: int
        if (!is_null($ratingCount) && !(is_int($ratingCount) || ctype_digit($ratingCount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($ratingCount, true), gettype($ratingCount)), __LINE__);
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
    public function getSalesCount(): ?int
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
    public function setSalesCount(?int $salesCount = null): self
    {
        // validation for constraint: int
        if (!is_null($salesCount) && !(is_int($salesCount) || ctype_digit($salesCount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($salesCount, true), gettype($salesCount)), __LINE__);
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
    public function getShipmentCountry(): ?string
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
    public function setShipmentCountry(?string $shipmentCountry = null): self
    {
        // validation for constraint: string
        if (!is_null($shipmentCountry) && !is_string($shipmentCountry)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($shipmentCountry, true), gettype($shipmentCountry)), __LINE__);
        }
        if (is_null($shipmentCountry) || (is_array($shipmentCountry) && empty($shipmentCountry))) {
            unset($this->ShipmentCountry);
        } else {
            $this->ShipmentCountry = $shipmentCountry;
        }
        
        return $this;
    }
}
