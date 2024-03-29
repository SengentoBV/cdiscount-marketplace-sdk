<?php

declare(strict_types=1);

namespace SengentoBV\CdiscountMarketplaceSdk\Structs;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ParcelShop Structs
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ParcelShop
 * @package Cdiscount
 * @subpackage Structs
 */
class CdiscountParcelShop extends AbstractStructBase
{
    /**
     * The AddressComplement
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $AddressComplement = null;
    /**
     * The City
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $City = null;
    /**
     * The ClosingDate
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $ClosingDate = null;
    /**
     * The ExceptionalClosingDate1
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $ExceptionalClosingDate1 = null;
    /**
     * The ExceptionalClosingDate2
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $ExceptionalClosingDate2 = null;
    /**
     * The ExceptionalClosingDate3
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $ExceptionalClosingDate3 = null;
    /**
     * The ExceptionalClosingDate4
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $ExceptionalClosingDate4 = null;
    /**
     * The ExceptionalClosingDate5
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $ExceptionalClosingDate5 = null;
    /**
     * The FridayAfternoonClosingHour
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $FridayAfternoonClosingHour = null;
    /**
     * The FridayAfternoonOpeningHour
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $FridayAfternoonOpeningHour = null;
    /**
     * The FridayMorningClosingHour
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $FridayMorningClosingHour = null;
    /**
     * The FridayMorningOpeningHour
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $FridayMorningOpeningHour = null;
    /**
     * The IsStoreShipmentActive
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $IsStoreShipmentActive = null;
    /**
     * The IsTakeAwayDeliveryActive
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $IsTakeAwayDeliveryActive = null;
    /**
     * The Latitude
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var float|null
     */
    protected ?float $Latitude = null;
    /**
     * The Locality
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $Locality = null;
    /**
     * The Longitude
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var float|null
     */
    protected ?float $Longitude = null;
    /**
     * The MondayAfternoonClosingHour
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $MondayAfternoonClosingHour = null;
    /**
     * The MondayAfternoonOpeningHour
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $MondayAfternoonOpeningHour = null;
    /**
     * The MondayMorningClosingHour
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $MondayMorningClosingHour = null;
    /**
     * The MondayMorningOpeningHour
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $MondayMorningOpeningHour = null;
    /**
     * The Name
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $Name = null;
    /**
     * The OpeningDate
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $OpeningDate = null;
    /**
     * The PhoneNumber
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $PhoneNumber = null;
    /**
     * The Reference
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $Reference = null;
    /**
     * The SaturdayAfternoonClosingHour
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $SaturdayAfternoonClosingHour = null;
    /**
     * The SaturdayAfternoonOpeningHour
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $SaturdayAfternoonOpeningHour = null;
    /**
     * The SaturdayMorningClosingHour
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $SaturdayMorningClosingHour = null;
    /**
     * The SaturdayMorningOpeningHour
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $SaturdayMorningOpeningHour = null;
    /**
     * The StreetAndStreetNumber
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $StreetAndStreetNumber = null;
    /**
     * The SundayAfternoonClosingHour
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $SundayAfternoonClosingHour = null;
    /**
     * The SundayAfternoonOpeningHour
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $SundayAfternoonOpeningHour = null;
    /**
     * The SundayMorningClosingHour
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $SundayMorningClosingHour = null;
    /**
     * The SundayMorningOpeningHour
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $SundayMorningOpeningHour = null;
    /**
     * The TemporaryClosingEndDate
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $TemporaryClosingEndDate = null;
    /**
     * The TemporaryClosingStartDate
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $TemporaryClosingStartDate = null;
    /**
     * The ThursdayAfternoonClosingHour
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $ThursdayAfternoonClosingHour = null;
    /**
     * The ThursdayAfternoonOpeningHour
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $ThursdayAfternoonOpeningHour = null;
    /**
     * The ThursdayMorningClosingHour
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $ThursdayMorningClosingHour = null;
    /**
     * The ThursdayMorningOpeningHour
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $ThursdayMorningOpeningHour = null;
    /**
     * The TuesdayAfternoonClosingHour
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $TuesdayAfternoonClosingHour = null;
    /**
     * The TuesdayAfternoonOpeningHour
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $TuesdayAfternoonOpeningHour = null;
    /**
     * The TuesdayMorningClosingHour
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $TuesdayMorningClosingHour = null;
    /**
     * The TuesdayMorningOpeningHour
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $TuesdayMorningOpeningHour = null;
    /**
     * The WednesdayAfternoonClosingHour
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $WednesdayAfternoonClosingHour = null;
    /**
     * The WednesdayAfternoonOpeningHour
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $WednesdayAfternoonOpeningHour = null;
    /**
     * The WednesdayMorningClosingHour
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $WednesdayMorningClosingHour = null;
    /**
     * The WednesdayMorningOpeningHour
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $WednesdayMorningOpeningHour = null;
    /**
     * The ZipCode
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $ZipCode = null;
    /**
     * Constructor method for ParcelShop
     * @uses CdiscountParcelShop::setAddressComplement()
     * @uses CdiscountParcelShop::setCity()
     * @uses CdiscountParcelShop::setClosingDate()
     * @uses CdiscountParcelShop::setExceptionalClosingDate1()
     * @uses CdiscountParcelShop::setExceptionalClosingDate2()
     * @uses CdiscountParcelShop::setExceptionalClosingDate3()
     * @uses CdiscountParcelShop::setExceptionalClosingDate4()
     * @uses CdiscountParcelShop::setExceptionalClosingDate5()
     * @uses CdiscountParcelShop::setFridayAfternoonClosingHour()
     * @uses CdiscountParcelShop::setFridayAfternoonOpeningHour()
     * @uses CdiscountParcelShop::setFridayMorningClosingHour()
     * @uses CdiscountParcelShop::setFridayMorningOpeningHour()
     * @uses CdiscountParcelShop::setIsStoreShipmentActive()
     * @uses CdiscountParcelShop::setIsTakeAwayDeliveryActive()
     * @uses CdiscountParcelShop::setLatitude()
     * @uses CdiscountParcelShop::setLocality()
     * @uses CdiscountParcelShop::setLongitude()
     * @uses CdiscountParcelShop::setMondayAfternoonClosingHour()
     * @uses CdiscountParcelShop::setMondayAfternoonOpeningHour()
     * @uses CdiscountParcelShop::setMondayMorningClosingHour()
     * @uses CdiscountParcelShop::setMondayMorningOpeningHour()
     * @uses CdiscountParcelShop::setName()
     * @uses CdiscountParcelShop::setOpeningDate()
     * @uses CdiscountParcelShop::setPhoneNumber()
     * @uses CdiscountParcelShop::setReference()
     * @uses CdiscountParcelShop::setSaturdayAfternoonClosingHour()
     * @uses CdiscountParcelShop::setSaturdayAfternoonOpeningHour()
     * @uses CdiscountParcelShop::setSaturdayMorningClosingHour()
     * @uses CdiscountParcelShop::setSaturdayMorningOpeningHour()
     * @uses CdiscountParcelShop::setStreetAndStreetNumber()
     * @uses CdiscountParcelShop::setSundayAfternoonClosingHour()
     * @uses CdiscountParcelShop::setSundayAfternoonOpeningHour()
     * @uses CdiscountParcelShop::setSundayMorningClosingHour()
     * @uses CdiscountParcelShop::setSundayMorningOpeningHour()
     * @uses CdiscountParcelShop::setTemporaryClosingEndDate()
     * @uses CdiscountParcelShop::setTemporaryClosingStartDate()
     * @uses CdiscountParcelShop::setThursdayAfternoonClosingHour()
     * @uses CdiscountParcelShop::setThursdayAfternoonOpeningHour()
     * @uses CdiscountParcelShop::setThursdayMorningClosingHour()
     * @uses CdiscountParcelShop::setThursdayMorningOpeningHour()
     * @uses CdiscountParcelShop::setTuesdayAfternoonClosingHour()
     * @uses CdiscountParcelShop::setTuesdayAfternoonOpeningHour()
     * @uses CdiscountParcelShop::setTuesdayMorningClosingHour()
     * @uses CdiscountParcelShop::setTuesdayMorningOpeningHour()
     * @uses CdiscountParcelShop::setWednesdayAfternoonClosingHour()
     * @uses CdiscountParcelShop::setWednesdayAfternoonOpeningHour()
     * @uses CdiscountParcelShop::setWednesdayMorningClosingHour()
     * @uses CdiscountParcelShop::setWednesdayMorningOpeningHour()
     * @uses CdiscountParcelShop::setZipCode()
     * @param string $addressComplement
     * @param string $city
     * @param string $closingDate
     * @param string $exceptionalClosingDate1
     * @param string $exceptionalClosingDate2
     * @param string $exceptionalClosingDate3
     * @param string $exceptionalClosingDate4
     * @param string $exceptionalClosingDate5
     * @param string $fridayAfternoonClosingHour
     * @param string $fridayAfternoonOpeningHour
     * @param string $fridayMorningClosingHour
     * @param string $fridayMorningOpeningHour
     * @param bool $isStoreShipmentActive
     * @param bool $isTakeAwayDeliveryActive
     * @param float $latitude
     * @param string $locality
     * @param float $longitude
     * @param string $mondayAfternoonClosingHour
     * @param string $mondayAfternoonOpeningHour
     * @param string $mondayMorningClosingHour
     * @param string $mondayMorningOpeningHour
     * @param string $name
     * @param string $openingDate
     * @param string $phoneNumber
     * @param string $reference
     * @param string $saturdayAfternoonClosingHour
     * @param string $saturdayAfternoonOpeningHour
     * @param string $saturdayMorningClosingHour
     * @param string $saturdayMorningOpeningHour
     * @param string $streetAndStreetNumber
     * @param string $sundayAfternoonClosingHour
     * @param string $sundayAfternoonOpeningHour
     * @param string $sundayMorningClosingHour
     * @param string $sundayMorningOpeningHour
     * @param string $temporaryClosingEndDate
     * @param string $temporaryClosingStartDate
     * @param string $thursdayAfternoonClosingHour
     * @param string $thursdayAfternoonOpeningHour
     * @param string $thursdayMorningClosingHour
     * @param string $thursdayMorningOpeningHour
     * @param string $tuesdayAfternoonClosingHour
     * @param string $tuesdayAfternoonOpeningHour
     * @param string $tuesdayMorningClosingHour
     * @param string $tuesdayMorningOpeningHour
     * @param string $wednesdayAfternoonClosingHour
     * @param string $wednesdayAfternoonOpeningHour
     * @param string $wednesdayMorningClosingHour
     * @param string $wednesdayMorningOpeningHour
     * @param string $zipCode
     */
    public function __construct(?string $addressComplement = null, ?string $city = null, ?string $closingDate = null, ?string $exceptionalClosingDate1 = null, ?string $exceptionalClosingDate2 = null, ?string $exceptionalClosingDate3 = null, ?string $exceptionalClosingDate4 = null, ?string $exceptionalClosingDate5 = null, ?string $fridayAfternoonClosingHour = null, ?string $fridayAfternoonOpeningHour = null, ?string $fridayMorningClosingHour = null, ?string $fridayMorningOpeningHour = null, ?bool $isStoreShipmentActive = null, ?bool $isTakeAwayDeliveryActive = null, ?float $latitude = null, ?string $locality = null, ?float $longitude = null, ?string $mondayAfternoonClosingHour = null, ?string $mondayAfternoonOpeningHour = null, ?string $mondayMorningClosingHour = null, ?string $mondayMorningOpeningHour = null, ?string $name = null, ?string $openingDate = null, ?string $phoneNumber = null, ?string $reference = null, ?string $saturdayAfternoonClosingHour = null, ?string $saturdayAfternoonOpeningHour = null, ?string $saturdayMorningClosingHour = null, ?string $saturdayMorningOpeningHour = null, ?string $streetAndStreetNumber = null, ?string $sundayAfternoonClosingHour = null, ?string $sundayAfternoonOpeningHour = null, ?string $sundayMorningClosingHour = null, ?string $sundayMorningOpeningHour = null, ?string $temporaryClosingEndDate = null, ?string $temporaryClosingStartDate = null, ?string $thursdayAfternoonClosingHour = null, ?string $thursdayAfternoonOpeningHour = null, ?string $thursdayMorningClosingHour = null, ?string $thursdayMorningOpeningHour = null, ?string $tuesdayAfternoonClosingHour = null, ?string $tuesdayAfternoonOpeningHour = null, ?string $tuesdayMorningClosingHour = null, ?string $tuesdayMorningOpeningHour = null, ?string $wednesdayAfternoonClosingHour = null, ?string $wednesdayAfternoonOpeningHour = null, ?string $wednesdayMorningClosingHour = null, ?string $wednesdayMorningOpeningHour = null, ?string $zipCode = null)
    {
        $this
            ->setAddressComplement($addressComplement)
            ->setCity($city)
            ->setClosingDate($closingDate)
            ->setExceptionalClosingDate1($exceptionalClosingDate1)
            ->setExceptionalClosingDate2($exceptionalClosingDate2)
            ->setExceptionalClosingDate3($exceptionalClosingDate3)
            ->setExceptionalClosingDate4($exceptionalClosingDate4)
            ->setExceptionalClosingDate5($exceptionalClosingDate5)
            ->setFridayAfternoonClosingHour($fridayAfternoonClosingHour)
            ->setFridayAfternoonOpeningHour($fridayAfternoonOpeningHour)
            ->setFridayMorningClosingHour($fridayMorningClosingHour)
            ->setFridayMorningOpeningHour($fridayMorningOpeningHour)
            ->setIsStoreShipmentActive($isStoreShipmentActive)
            ->setIsTakeAwayDeliveryActive($isTakeAwayDeliveryActive)
            ->setLatitude($latitude)
            ->setLocality($locality)
            ->setLongitude($longitude)
            ->setMondayAfternoonClosingHour($mondayAfternoonClosingHour)
            ->setMondayAfternoonOpeningHour($mondayAfternoonOpeningHour)
            ->setMondayMorningClosingHour($mondayMorningClosingHour)
            ->setMondayMorningOpeningHour($mondayMorningOpeningHour)
            ->setName($name)
            ->setOpeningDate($openingDate)
            ->setPhoneNumber($phoneNumber)
            ->setReference($reference)
            ->setSaturdayAfternoonClosingHour($saturdayAfternoonClosingHour)
            ->setSaturdayAfternoonOpeningHour($saturdayAfternoonOpeningHour)
            ->setSaturdayMorningClosingHour($saturdayMorningClosingHour)
            ->setSaturdayMorningOpeningHour($saturdayMorningOpeningHour)
            ->setStreetAndStreetNumber($streetAndStreetNumber)
            ->setSundayAfternoonClosingHour($sundayAfternoonClosingHour)
            ->setSundayAfternoonOpeningHour($sundayAfternoonOpeningHour)
            ->setSundayMorningClosingHour($sundayMorningClosingHour)
            ->setSundayMorningOpeningHour($sundayMorningOpeningHour)
            ->setTemporaryClosingEndDate($temporaryClosingEndDate)
            ->setTemporaryClosingStartDate($temporaryClosingStartDate)
            ->setThursdayAfternoonClosingHour($thursdayAfternoonClosingHour)
            ->setThursdayAfternoonOpeningHour($thursdayAfternoonOpeningHour)
            ->setThursdayMorningClosingHour($thursdayMorningClosingHour)
            ->setThursdayMorningOpeningHour($thursdayMorningOpeningHour)
            ->setTuesdayAfternoonClosingHour($tuesdayAfternoonClosingHour)
            ->setTuesdayAfternoonOpeningHour($tuesdayAfternoonOpeningHour)
            ->setTuesdayMorningClosingHour($tuesdayMorningClosingHour)
            ->setTuesdayMorningOpeningHour($tuesdayMorningOpeningHour)
            ->setWednesdayAfternoonClosingHour($wednesdayAfternoonClosingHour)
            ->setWednesdayAfternoonOpeningHour($wednesdayAfternoonOpeningHour)
            ->setWednesdayMorningClosingHour($wednesdayMorningClosingHour)
            ->setWednesdayMorningOpeningHour($wednesdayMorningOpeningHour)
            ->setZipCode($zipCode);
    }
    /**
     * Get AddressComplement value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getAddressComplement(): ?string
    {
        return isset($this->AddressComplement) ? $this->AddressComplement : null;
    }
    /**
     * Set AddressComplement value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $addressComplement
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountParcelShop
     */
    public function setAddressComplement(?string $addressComplement = null): self
    {
        // validation for constraint: string
        if (!is_null($addressComplement) && !is_string($addressComplement)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($addressComplement, true), gettype($addressComplement)), __LINE__);
        }
        if (is_null($addressComplement) || (is_array($addressComplement) && empty($addressComplement))) {
            unset($this->AddressComplement);
        } else {
            $this->AddressComplement = $addressComplement;
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
    public function getCity(): ?string
    {
        return isset($this->City) ? $this->City : null;
    }
    /**
     * Set City value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $city
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountParcelShop
     */
    public function setCity(?string $city = null): self
    {
        // validation for constraint: string
        if (!is_null($city) && !is_string($city)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($city, true), gettype($city)), __LINE__);
        }
        if (is_null($city) || (is_array($city) && empty($city))) {
            unset($this->City);
        } else {
            $this->City = $city;
        }
        
        return $this;
    }
    /**
     * Get ClosingDate value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getClosingDate(): ?string
    {
        return isset($this->ClosingDate) ? $this->ClosingDate : null;
    }
    /**
     * Set ClosingDate value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $closingDate
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountParcelShop
     */
    public function setClosingDate(?string $closingDate = null): self
    {
        // validation for constraint: string
        if (!is_null($closingDate) && !is_string($closingDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($closingDate, true), gettype($closingDate)), __LINE__);
        }
        if (is_null($closingDate) || (is_array($closingDate) && empty($closingDate))) {
            unset($this->ClosingDate);
        } else {
            $this->ClosingDate = $closingDate;
        }
        
        return $this;
    }
    /**
     * Get ExceptionalClosingDate1 value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getExceptionalClosingDate1(): ?string
    {
        return isset($this->ExceptionalClosingDate1) ? $this->ExceptionalClosingDate1 : null;
    }
    /**
     * Set ExceptionalClosingDate1 value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $exceptionalClosingDate1
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountParcelShop
     */
    public function setExceptionalClosingDate1(?string $exceptionalClosingDate1 = null): self
    {
        // validation for constraint: string
        if (!is_null($exceptionalClosingDate1) && !is_string($exceptionalClosingDate1)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($exceptionalClosingDate1, true), gettype($exceptionalClosingDate1)), __LINE__);
        }
        if (is_null($exceptionalClosingDate1) || (is_array($exceptionalClosingDate1) && empty($exceptionalClosingDate1))) {
            unset($this->ExceptionalClosingDate1);
        } else {
            $this->ExceptionalClosingDate1 = $exceptionalClosingDate1;
        }
        
        return $this;
    }
    /**
     * Get ExceptionalClosingDate2 value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getExceptionalClosingDate2(): ?string
    {
        return isset($this->ExceptionalClosingDate2) ? $this->ExceptionalClosingDate2 : null;
    }
    /**
     * Set ExceptionalClosingDate2 value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $exceptionalClosingDate2
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountParcelShop
     */
    public function setExceptionalClosingDate2(?string $exceptionalClosingDate2 = null): self
    {
        // validation for constraint: string
        if (!is_null($exceptionalClosingDate2) && !is_string($exceptionalClosingDate2)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($exceptionalClosingDate2, true), gettype($exceptionalClosingDate2)), __LINE__);
        }
        if (is_null($exceptionalClosingDate2) || (is_array($exceptionalClosingDate2) && empty($exceptionalClosingDate2))) {
            unset($this->ExceptionalClosingDate2);
        } else {
            $this->ExceptionalClosingDate2 = $exceptionalClosingDate2;
        }
        
        return $this;
    }
    /**
     * Get ExceptionalClosingDate3 value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getExceptionalClosingDate3(): ?string
    {
        return isset($this->ExceptionalClosingDate3) ? $this->ExceptionalClosingDate3 : null;
    }
    /**
     * Set ExceptionalClosingDate3 value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $exceptionalClosingDate3
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountParcelShop
     */
    public function setExceptionalClosingDate3(?string $exceptionalClosingDate3 = null): self
    {
        // validation for constraint: string
        if (!is_null($exceptionalClosingDate3) && !is_string($exceptionalClosingDate3)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($exceptionalClosingDate3, true), gettype($exceptionalClosingDate3)), __LINE__);
        }
        if (is_null($exceptionalClosingDate3) || (is_array($exceptionalClosingDate3) && empty($exceptionalClosingDate3))) {
            unset($this->ExceptionalClosingDate3);
        } else {
            $this->ExceptionalClosingDate3 = $exceptionalClosingDate3;
        }
        
        return $this;
    }
    /**
     * Get ExceptionalClosingDate4 value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getExceptionalClosingDate4(): ?string
    {
        return isset($this->ExceptionalClosingDate4) ? $this->ExceptionalClosingDate4 : null;
    }
    /**
     * Set ExceptionalClosingDate4 value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $exceptionalClosingDate4
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountParcelShop
     */
    public function setExceptionalClosingDate4(?string $exceptionalClosingDate4 = null): self
    {
        // validation for constraint: string
        if (!is_null($exceptionalClosingDate4) && !is_string($exceptionalClosingDate4)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($exceptionalClosingDate4, true), gettype($exceptionalClosingDate4)), __LINE__);
        }
        if (is_null($exceptionalClosingDate4) || (is_array($exceptionalClosingDate4) && empty($exceptionalClosingDate4))) {
            unset($this->ExceptionalClosingDate4);
        } else {
            $this->ExceptionalClosingDate4 = $exceptionalClosingDate4;
        }
        
        return $this;
    }
    /**
     * Get ExceptionalClosingDate5 value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getExceptionalClosingDate5(): ?string
    {
        return isset($this->ExceptionalClosingDate5) ? $this->ExceptionalClosingDate5 : null;
    }
    /**
     * Set ExceptionalClosingDate5 value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $exceptionalClosingDate5
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountParcelShop
     */
    public function setExceptionalClosingDate5(?string $exceptionalClosingDate5 = null): self
    {
        // validation for constraint: string
        if (!is_null($exceptionalClosingDate5) && !is_string($exceptionalClosingDate5)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($exceptionalClosingDate5, true), gettype($exceptionalClosingDate5)), __LINE__);
        }
        if (is_null($exceptionalClosingDate5) || (is_array($exceptionalClosingDate5) && empty($exceptionalClosingDate5))) {
            unset($this->ExceptionalClosingDate5);
        } else {
            $this->ExceptionalClosingDate5 = $exceptionalClosingDate5;
        }
        
        return $this;
    }
    /**
     * Get FridayAfternoonClosingHour value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getFridayAfternoonClosingHour(): ?string
    {
        return isset($this->FridayAfternoonClosingHour) ? $this->FridayAfternoonClosingHour : null;
    }
    /**
     * Set FridayAfternoonClosingHour value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $fridayAfternoonClosingHour
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountParcelShop
     */
    public function setFridayAfternoonClosingHour(?string $fridayAfternoonClosingHour = null): self
    {
        // validation for constraint: string
        if (!is_null($fridayAfternoonClosingHour) && !is_string($fridayAfternoonClosingHour)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($fridayAfternoonClosingHour, true), gettype($fridayAfternoonClosingHour)), __LINE__);
        }
        if (is_null($fridayAfternoonClosingHour) || (is_array($fridayAfternoonClosingHour) && empty($fridayAfternoonClosingHour))) {
            unset($this->FridayAfternoonClosingHour);
        } else {
            $this->FridayAfternoonClosingHour = $fridayAfternoonClosingHour;
        }
        
        return $this;
    }
    /**
     * Get FridayAfternoonOpeningHour value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getFridayAfternoonOpeningHour(): ?string
    {
        return isset($this->FridayAfternoonOpeningHour) ? $this->FridayAfternoonOpeningHour : null;
    }
    /**
     * Set FridayAfternoonOpeningHour value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $fridayAfternoonOpeningHour
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountParcelShop
     */
    public function setFridayAfternoonOpeningHour(?string $fridayAfternoonOpeningHour = null): self
    {
        // validation for constraint: string
        if (!is_null($fridayAfternoonOpeningHour) && !is_string($fridayAfternoonOpeningHour)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($fridayAfternoonOpeningHour, true), gettype($fridayAfternoonOpeningHour)), __LINE__);
        }
        if (is_null($fridayAfternoonOpeningHour) || (is_array($fridayAfternoonOpeningHour) && empty($fridayAfternoonOpeningHour))) {
            unset($this->FridayAfternoonOpeningHour);
        } else {
            $this->FridayAfternoonOpeningHour = $fridayAfternoonOpeningHour;
        }
        
        return $this;
    }
    /**
     * Get FridayMorningClosingHour value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getFridayMorningClosingHour(): ?string
    {
        return isset($this->FridayMorningClosingHour) ? $this->FridayMorningClosingHour : null;
    }
    /**
     * Set FridayMorningClosingHour value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $fridayMorningClosingHour
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountParcelShop
     */
    public function setFridayMorningClosingHour(?string $fridayMorningClosingHour = null): self
    {
        // validation for constraint: string
        if (!is_null($fridayMorningClosingHour) && !is_string($fridayMorningClosingHour)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($fridayMorningClosingHour, true), gettype($fridayMorningClosingHour)), __LINE__);
        }
        if (is_null($fridayMorningClosingHour) || (is_array($fridayMorningClosingHour) && empty($fridayMorningClosingHour))) {
            unset($this->FridayMorningClosingHour);
        } else {
            $this->FridayMorningClosingHour = $fridayMorningClosingHour;
        }
        
        return $this;
    }
    /**
     * Get FridayMorningOpeningHour value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getFridayMorningOpeningHour(): ?string
    {
        return isset($this->FridayMorningOpeningHour) ? $this->FridayMorningOpeningHour : null;
    }
    /**
     * Set FridayMorningOpeningHour value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $fridayMorningOpeningHour
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountParcelShop
     */
    public function setFridayMorningOpeningHour(?string $fridayMorningOpeningHour = null): self
    {
        // validation for constraint: string
        if (!is_null($fridayMorningOpeningHour) && !is_string($fridayMorningOpeningHour)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($fridayMorningOpeningHour, true), gettype($fridayMorningOpeningHour)), __LINE__);
        }
        if (is_null($fridayMorningOpeningHour) || (is_array($fridayMorningOpeningHour) && empty($fridayMorningOpeningHour))) {
            unset($this->FridayMorningOpeningHour);
        } else {
            $this->FridayMorningOpeningHour = $fridayMorningOpeningHour;
        }
        
        return $this;
    }
    /**
     * Get IsStoreShipmentActive value
     * @return bool|null
     */
    public function getIsStoreShipmentActive(): ?bool
    {
        return $this->IsStoreShipmentActive;
    }
    /**
     * Set IsStoreShipmentActive value
     * @param bool $isStoreShipmentActive
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountParcelShop
     */
    public function setIsStoreShipmentActive(?bool $isStoreShipmentActive = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isStoreShipmentActive) && !is_bool($isStoreShipmentActive)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isStoreShipmentActive, true), gettype($isStoreShipmentActive)), __LINE__);
        }
        $this->IsStoreShipmentActive = $isStoreShipmentActive;
        
        return $this;
    }
    /**
     * Get IsTakeAwayDeliveryActive value
     * @return bool|null
     */
    public function getIsTakeAwayDeliveryActive(): ?bool
    {
        return $this->IsTakeAwayDeliveryActive;
    }
    /**
     * Set IsTakeAwayDeliveryActive value
     * @param bool $isTakeAwayDeliveryActive
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountParcelShop
     */
    public function setIsTakeAwayDeliveryActive(?bool $isTakeAwayDeliveryActive = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isTakeAwayDeliveryActive) && !is_bool($isTakeAwayDeliveryActive)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isTakeAwayDeliveryActive, true), gettype($isTakeAwayDeliveryActive)), __LINE__);
        }
        $this->IsTakeAwayDeliveryActive = $isTakeAwayDeliveryActive;
        
        return $this;
    }
    /**
     * Get Latitude value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return float|null
     */
    public function getLatitude(): ?float
    {
        return isset($this->Latitude) ? $this->Latitude : null;
    }
    /**
     * Set Latitude value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param float $latitude
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountParcelShop
     */
    public function setLatitude(?float $latitude = null): self
    {
        // validation for constraint: float
        if (!is_null($latitude) && !(is_float($latitude) || is_numeric($latitude))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($latitude, true), gettype($latitude)), __LINE__);
        }
        if (is_null($latitude) || (is_array($latitude) && empty($latitude))) {
            unset($this->Latitude);
        } else {
            $this->Latitude = $latitude;
        }
        
        return $this;
    }
    /**
     * Get Locality value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getLocality(): ?string
    {
        return isset($this->Locality) ? $this->Locality : null;
    }
    /**
     * Set Locality value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $locality
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountParcelShop
     */
    public function setLocality(?string $locality = null): self
    {
        // validation for constraint: string
        if (!is_null($locality) && !is_string($locality)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($locality, true), gettype($locality)), __LINE__);
        }
        if (is_null($locality) || (is_array($locality) && empty($locality))) {
            unset($this->Locality);
        } else {
            $this->Locality = $locality;
        }
        
        return $this;
    }
    /**
     * Get Longitude value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return float|null
     */
    public function getLongitude(): ?float
    {
        return isset($this->Longitude) ? $this->Longitude : null;
    }
    /**
     * Set Longitude value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param float $longitude
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountParcelShop
     */
    public function setLongitude(?float $longitude = null): self
    {
        // validation for constraint: float
        if (!is_null($longitude) && !(is_float($longitude) || is_numeric($longitude))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($longitude, true), gettype($longitude)), __LINE__);
        }
        if (is_null($longitude) || (is_array($longitude) && empty($longitude))) {
            unset($this->Longitude);
        } else {
            $this->Longitude = $longitude;
        }
        
        return $this;
    }
    /**
     * Get MondayAfternoonClosingHour value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getMondayAfternoonClosingHour(): ?string
    {
        return isset($this->MondayAfternoonClosingHour) ? $this->MondayAfternoonClosingHour : null;
    }
    /**
     * Set MondayAfternoonClosingHour value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $mondayAfternoonClosingHour
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountParcelShop
     */
    public function setMondayAfternoonClosingHour(?string $mondayAfternoonClosingHour = null): self
    {
        // validation for constraint: string
        if (!is_null($mondayAfternoonClosingHour) && !is_string($mondayAfternoonClosingHour)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($mondayAfternoonClosingHour, true), gettype($mondayAfternoonClosingHour)), __LINE__);
        }
        if (is_null($mondayAfternoonClosingHour) || (is_array($mondayAfternoonClosingHour) && empty($mondayAfternoonClosingHour))) {
            unset($this->MondayAfternoonClosingHour);
        } else {
            $this->MondayAfternoonClosingHour = $mondayAfternoonClosingHour;
        }
        
        return $this;
    }
    /**
     * Get MondayAfternoonOpeningHour value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getMondayAfternoonOpeningHour(): ?string
    {
        return isset($this->MondayAfternoonOpeningHour) ? $this->MondayAfternoonOpeningHour : null;
    }
    /**
     * Set MondayAfternoonOpeningHour value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $mondayAfternoonOpeningHour
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountParcelShop
     */
    public function setMondayAfternoonOpeningHour(?string $mondayAfternoonOpeningHour = null): self
    {
        // validation for constraint: string
        if (!is_null($mondayAfternoonOpeningHour) && !is_string($mondayAfternoonOpeningHour)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($mondayAfternoonOpeningHour, true), gettype($mondayAfternoonOpeningHour)), __LINE__);
        }
        if (is_null($mondayAfternoonOpeningHour) || (is_array($mondayAfternoonOpeningHour) && empty($mondayAfternoonOpeningHour))) {
            unset($this->MondayAfternoonOpeningHour);
        } else {
            $this->MondayAfternoonOpeningHour = $mondayAfternoonOpeningHour;
        }
        
        return $this;
    }
    /**
     * Get MondayMorningClosingHour value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getMondayMorningClosingHour(): ?string
    {
        return isset($this->MondayMorningClosingHour) ? $this->MondayMorningClosingHour : null;
    }
    /**
     * Set MondayMorningClosingHour value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $mondayMorningClosingHour
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountParcelShop
     */
    public function setMondayMorningClosingHour(?string $mondayMorningClosingHour = null): self
    {
        // validation for constraint: string
        if (!is_null($mondayMorningClosingHour) && !is_string($mondayMorningClosingHour)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($mondayMorningClosingHour, true), gettype($mondayMorningClosingHour)), __LINE__);
        }
        if (is_null($mondayMorningClosingHour) || (is_array($mondayMorningClosingHour) && empty($mondayMorningClosingHour))) {
            unset($this->MondayMorningClosingHour);
        } else {
            $this->MondayMorningClosingHour = $mondayMorningClosingHour;
        }
        
        return $this;
    }
    /**
     * Get MondayMorningOpeningHour value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getMondayMorningOpeningHour(): ?string
    {
        return isset($this->MondayMorningOpeningHour) ? $this->MondayMorningOpeningHour : null;
    }
    /**
     * Set MondayMorningOpeningHour value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $mondayMorningOpeningHour
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountParcelShop
     */
    public function setMondayMorningOpeningHour(?string $mondayMorningOpeningHour = null): self
    {
        // validation for constraint: string
        if (!is_null($mondayMorningOpeningHour) && !is_string($mondayMorningOpeningHour)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($mondayMorningOpeningHour, true), gettype($mondayMorningOpeningHour)), __LINE__);
        }
        if (is_null($mondayMorningOpeningHour) || (is_array($mondayMorningOpeningHour) && empty($mondayMorningOpeningHour))) {
            unset($this->MondayMorningOpeningHour);
        } else {
            $this->MondayMorningOpeningHour = $mondayMorningOpeningHour;
        }
        
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
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountParcelShop
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
     * Get OpeningDate value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getOpeningDate(): ?string
    {
        return isset($this->OpeningDate) ? $this->OpeningDate : null;
    }
    /**
     * Set OpeningDate value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $openingDate
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountParcelShop
     */
    public function setOpeningDate(?string $openingDate = null): self
    {
        // validation for constraint: string
        if (!is_null($openingDate) && !is_string($openingDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($openingDate, true), gettype($openingDate)), __LINE__);
        }
        if (is_null($openingDate) || (is_array($openingDate) && empty($openingDate))) {
            unset($this->OpeningDate);
        } else {
            $this->OpeningDate = $openingDate;
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
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountParcelShop
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
     * Get Reference value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getReference(): ?string
    {
        return isset($this->Reference) ? $this->Reference : null;
    }
    /**
     * Set Reference value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $reference
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountParcelShop
     */
    public function setReference(?string $reference = null): self
    {
        // validation for constraint: string
        if (!is_null($reference) && !is_string($reference)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($reference, true), gettype($reference)), __LINE__);
        }
        if (is_null($reference) || (is_array($reference) && empty($reference))) {
            unset($this->Reference);
        } else {
            $this->Reference = $reference;
        }
        
        return $this;
    }
    /**
     * Get SaturdayAfternoonClosingHour value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getSaturdayAfternoonClosingHour(): ?string
    {
        return isset($this->SaturdayAfternoonClosingHour) ? $this->SaturdayAfternoonClosingHour : null;
    }
    /**
     * Set SaturdayAfternoonClosingHour value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $saturdayAfternoonClosingHour
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountParcelShop
     */
    public function setSaturdayAfternoonClosingHour(?string $saturdayAfternoonClosingHour = null): self
    {
        // validation for constraint: string
        if (!is_null($saturdayAfternoonClosingHour) && !is_string($saturdayAfternoonClosingHour)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($saturdayAfternoonClosingHour, true), gettype($saturdayAfternoonClosingHour)), __LINE__);
        }
        if (is_null($saturdayAfternoonClosingHour) || (is_array($saturdayAfternoonClosingHour) && empty($saturdayAfternoonClosingHour))) {
            unset($this->SaturdayAfternoonClosingHour);
        } else {
            $this->SaturdayAfternoonClosingHour = $saturdayAfternoonClosingHour;
        }
        
        return $this;
    }
    /**
     * Get SaturdayAfternoonOpeningHour value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getSaturdayAfternoonOpeningHour(): ?string
    {
        return isset($this->SaturdayAfternoonOpeningHour) ? $this->SaturdayAfternoonOpeningHour : null;
    }
    /**
     * Set SaturdayAfternoonOpeningHour value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $saturdayAfternoonOpeningHour
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountParcelShop
     */
    public function setSaturdayAfternoonOpeningHour(?string $saturdayAfternoonOpeningHour = null): self
    {
        // validation for constraint: string
        if (!is_null($saturdayAfternoonOpeningHour) && !is_string($saturdayAfternoonOpeningHour)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($saturdayAfternoonOpeningHour, true), gettype($saturdayAfternoonOpeningHour)), __LINE__);
        }
        if (is_null($saturdayAfternoonOpeningHour) || (is_array($saturdayAfternoonOpeningHour) && empty($saturdayAfternoonOpeningHour))) {
            unset($this->SaturdayAfternoonOpeningHour);
        } else {
            $this->SaturdayAfternoonOpeningHour = $saturdayAfternoonOpeningHour;
        }
        
        return $this;
    }
    /**
     * Get SaturdayMorningClosingHour value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getSaturdayMorningClosingHour(): ?string
    {
        return isset($this->SaturdayMorningClosingHour) ? $this->SaturdayMorningClosingHour : null;
    }
    /**
     * Set SaturdayMorningClosingHour value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $saturdayMorningClosingHour
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountParcelShop
     */
    public function setSaturdayMorningClosingHour(?string $saturdayMorningClosingHour = null): self
    {
        // validation for constraint: string
        if (!is_null($saturdayMorningClosingHour) && !is_string($saturdayMorningClosingHour)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($saturdayMorningClosingHour, true), gettype($saturdayMorningClosingHour)), __LINE__);
        }
        if (is_null($saturdayMorningClosingHour) || (is_array($saturdayMorningClosingHour) && empty($saturdayMorningClosingHour))) {
            unset($this->SaturdayMorningClosingHour);
        } else {
            $this->SaturdayMorningClosingHour = $saturdayMorningClosingHour;
        }
        
        return $this;
    }
    /**
     * Get SaturdayMorningOpeningHour value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getSaturdayMorningOpeningHour(): ?string
    {
        return isset($this->SaturdayMorningOpeningHour) ? $this->SaturdayMorningOpeningHour : null;
    }
    /**
     * Set SaturdayMorningOpeningHour value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $saturdayMorningOpeningHour
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountParcelShop
     */
    public function setSaturdayMorningOpeningHour(?string $saturdayMorningOpeningHour = null): self
    {
        // validation for constraint: string
        if (!is_null($saturdayMorningOpeningHour) && !is_string($saturdayMorningOpeningHour)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($saturdayMorningOpeningHour, true), gettype($saturdayMorningOpeningHour)), __LINE__);
        }
        if (is_null($saturdayMorningOpeningHour) || (is_array($saturdayMorningOpeningHour) && empty($saturdayMorningOpeningHour))) {
            unset($this->SaturdayMorningOpeningHour);
        } else {
            $this->SaturdayMorningOpeningHour = $saturdayMorningOpeningHour;
        }
        
        return $this;
    }
    /**
     * Get StreetAndStreetNumber value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getStreetAndStreetNumber(): ?string
    {
        return isset($this->StreetAndStreetNumber) ? $this->StreetAndStreetNumber : null;
    }
    /**
     * Set StreetAndStreetNumber value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $streetAndStreetNumber
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountParcelShop
     */
    public function setStreetAndStreetNumber(?string $streetAndStreetNumber = null): self
    {
        // validation for constraint: string
        if (!is_null($streetAndStreetNumber) && !is_string($streetAndStreetNumber)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($streetAndStreetNumber, true), gettype($streetAndStreetNumber)), __LINE__);
        }
        if (is_null($streetAndStreetNumber) || (is_array($streetAndStreetNumber) && empty($streetAndStreetNumber))) {
            unset($this->StreetAndStreetNumber);
        } else {
            $this->StreetAndStreetNumber = $streetAndStreetNumber;
        }
        
        return $this;
    }
    /**
     * Get SundayAfternoonClosingHour value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getSundayAfternoonClosingHour(): ?string
    {
        return isset($this->SundayAfternoonClosingHour) ? $this->SundayAfternoonClosingHour : null;
    }
    /**
     * Set SundayAfternoonClosingHour value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $sundayAfternoonClosingHour
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountParcelShop
     */
    public function setSundayAfternoonClosingHour(?string $sundayAfternoonClosingHour = null): self
    {
        // validation for constraint: string
        if (!is_null($sundayAfternoonClosingHour) && !is_string($sundayAfternoonClosingHour)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($sundayAfternoonClosingHour, true), gettype($sundayAfternoonClosingHour)), __LINE__);
        }
        if (is_null($sundayAfternoonClosingHour) || (is_array($sundayAfternoonClosingHour) && empty($sundayAfternoonClosingHour))) {
            unset($this->SundayAfternoonClosingHour);
        } else {
            $this->SundayAfternoonClosingHour = $sundayAfternoonClosingHour;
        }
        
        return $this;
    }
    /**
     * Get SundayAfternoonOpeningHour value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getSundayAfternoonOpeningHour(): ?string
    {
        return isset($this->SundayAfternoonOpeningHour) ? $this->SundayAfternoonOpeningHour : null;
    }
    /**
     * Set SundayAfternoonOpeningHour value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $sundayAfternoonOpeningHour
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountParcelShop
     */
    public function setSundayAfternoonOpeningHour(?string $sundayAfternoonOpeningHour = null): self
    {
        // validation for constraint: string
        if (!is_null($sundayAfternoonOpeningHour) && !is_string($sundayAfternoonOpeningHour)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($sundayAfternoonOpeningHour, true), gettype($sundayAfternoonOpeningHour)), __LINE__);
        }
        if (is_null($sundayAfternoonOpeningHour) || (is_array($sundayAfternoonOpeningHour) && empty($sundayAfternoonOpeningHour))) {
            unset($this->SundayAfternoonOpeningHour);
        } else {
            $this->SundayAfternoonOpeningHour = $sundayAfternoonOpeningHour;
        }
        
        return $this;
    }
    /**
     * Get SundayMorningClosingHour value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getSundayMorningClosingHour(): ?string
    {
        return isset($this->SundayMorningClosingHour) ? $this->SundayMorningClosingHour : null;
    }
    /**
     * Set SundayMorningClosingHour value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $sundayMorningClosingHour
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountParcelShop
     */
    public function setSundayMorningClosingHour(?string $sundayMorningClosingHour = null): self
    {
        // validation for constraint: string
        if (!is_null($sundayMorningClosingHour) && !is_string($sundayMorningClosingHour)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($sundayMorningClosingHour, true), gettype($sundayMorningClosingHour)), __LINE__);
        }
        if (is_null($sundayMorningClosingHour) || (is_array($sundayMorningClosingHour) && empty($sundayMorningClosingHour))) {
            unset($this->SundayMorningClosingHour);
        } else {
            $this->SundayMorningClosingHour = $sundayMorningClosingHour;
        }
        
        return $this;
    }
    /**
     * Get SundayMorningOpeningHour value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getSundayMorningOpeningHour(): ?string
    {
        return isset($this->SundayMorningOpeningHour) ? $this->SundayMorningOpeningHour : null;
    }
    /**
     * Set SundayMorningOpeningHour value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $sundayMorningOpeningHour
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountParcelShop
     */
    public function setSundayMorningOpeningHour(?string $sundayMorningOpeningHour = null): self
    {
        // validation for constraint: string
        if (!is_null($sundayMorningOpeningHour) && !is_string($sundayMorningOpeningHour)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($sundayMorningOpeningHour, true), gettype($sundayMorningOpeningHour)), __LINE__);
        }
        if (is_null($sundayMorningOpeningHour) || (is_array($sundayMorningOpeningHour) && empty($sundayMorningOpeningHour))) {
            unset($this->SundayMorningOpeningHour);
        } else {
            $this->SundayMorningOpeningHour = $sundayMorningOpeningHour;
        }
        
        return $this;
    }
    /**
     * Get TemporaryClosingEndDate value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getTemporaryClosingEndDate(): ?string
    {
        return isset($this->TemporaryClosingEndDate) ? $this->TemporaryClosingEndDate : null;
    }
    /**
     * Set TemporaryClosingEndDate value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $temporaryClosingEndDate
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountParcelShop
     */
    public function setTemporaryClosingEndDate(?string $temporaryClosingEndDate = null): self
    {
        // validation for constraint: string
        if (!is_null($temporaryClosingEndDate) && !is_string($temporaryClosingEndDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($temporaryClosingEndDate, true), gettype($temporaryClosingEndDate)), __LINE__);
        }
        if (is_null($temporaryClosingEndDate) || (is_array($temporaryClosingEndDate) && empty($temporaryClosingEndDate))) {
            unset($this->TemporaryClosingEndDate);
        } else {
            $this->TemporaryClosingEndDate = $temporaryClosingEndDate;
        }
        
        return $this;
    }
    /**
     * Get TemporaryClosingStartDate value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getTemporaryClosingStartDate(): ?string
    {
        return isset($this->TemporaryClosingStartDate) ? $this->TemporaryClosingStartDate : null;
    }
    /**
     * Set TemporaryClosingStartDate value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $temporaryClosingStartDate
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountParcelShop
     */
    public function setTemporaryClosingStartDate(?string $temporaryClosingStartDate = null): self
    {
        // validation for constraint: string
        if (!is_null($temporaryClosingStartDate) && !is_string($temporaryClosingStartDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($temporaryClosingStartDate, true), gettype($temporaryClosingStartDate)), __LINE__);
        }
        if (is_null($temporaryClosingStartDate) || (is_array($temporaryClosingStartDate) && empty($temporaryClosingStartDate))) {
            unset($this->TemporaryClosingStartDate);
        } else {
            $this->TemporaryClosingStartDate = $temporaryClosingStartDate;
        }
        
        return $this;
    }
    /**
     * Get ThursdayAfternoonClosingHour value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getThursdayAfternoonClosingHour(): ?string
    {
        return isset($this->ThursdayAfternoonClosingHour) ? $this->ThursdayAfternoonClosingHour : null;
    }
    /**
     * Set ThursdayAfternoonClosingHour value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $thursdayAfternoonClosingHour
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountParcelShop
     */
    public function setThursdayAfternoonClosingHour(?string $thursdayAfternoonClosingHour = null): self
    {
        // validation for constraint: string
        if (!is_null($thursdayAfternoonClosingHour) && !is_string($thursdayAfternoonClosingHour)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($thursdayAfternoonClosingHour, true), gettype($thursdayAfternoonClosingHour)), __LINE__);
        }
        if (is_null($thursdayAfternoonClosingHour) || (is_array($thursdayAfternoonClosingHour) && empty($thursdayAfternoonClosingHour))) {
            unset($this->ThursdayAfternoonClosingHour);
        } else {
            $this->ThursdayAfternoonClosingHour = $thursdayAfternoonClosingHour;
        }
        
        return $this;
    }
    /**
     * Get ThursdayAfternoonOpeningHour value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getThursdayAfternoonOpeningHour(): ?string
    {
        return isset($this->ThursdayAfternoonOpeningHour) ? $this->ThursdayAfternoonOpeningHour : null;
    }
    /**
     * Set ThursdayAfternoonOpeningHour value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $thursdayAfternoonOpeningHour
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountParcelShop
     */
    public function setThursdayAfternoonOpeningHour(?string $thursdayAfternoonOpeningHour = null): self
    {
        // validation for constraint: string
        if (!is_null($thursdayAfternoonOpeningHour) && !is_string($thursdayAfternoonOpeningHour)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($thursdayAfternoonOpeningHour, true), gettype($thursdayAfternoonOpeningHour)), __LINE__);
        }
        if (is_null($thursdayAfternoonOpeningHour) || (is_array($thursdayAfternoonOpeningHour) && empty($thursdayAfternoonOpeningHour))) {
            unset($this->ThursdayAfternoonOpeningHour);
        } else {
            $this->ThursdayAfternoonOpeningHour = $thursdayAfternoonOpeningHour;
        }
        
        return $this;
    }
    /**
     * Get ThursdayMorningClosingHour value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getThursdayMorningClosingHour(): ?string
    {
        return isset($this->ThursdayMorningClosingHour) ? $this->ThursdayMorningClosingHour : null;
    }
    /**
     * Set ThursdayMorningClosingHour value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $thursdayMorningClosingHour
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountParcelShop
     */
    public function setThursdayMorningClosingHour(?string $thursdayMorningClosingHour = null): self
    {
        // validation for constraint: string
        if (!is_null($thursdayMorningClosingHour) && !is_string($thursdayMorningClosingHour)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($thursdayMorningClosingHour, true), gettype($thursdayMorningClosingHour)), __LINE__);
        }
        if (is_null($thursdayMorningClosingHour) || (is_array($thursdayMorningClosingHour) && empty($thursdayMorningClosingHour))) {
            unset($this->ThursdayMorningClosingHour);
        } else {
            $this->ThursdayMorningClosingHour = $thursdayMorningClosingHour;
        }
        
        return $this;
    }
    /**
     * Get ThursdayMorningOpeningHour value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getThursdayMorningOpeningHour(): ?string
    {
        return isset($this->ThursdayMorningOpeningHour) ? $this->ThursdayMorningOpeningHour : null;
    }
    /**
     * Set ThursdayMorningOpeningHour value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $thursdayMorningOpeningHour
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountParcelShop
     */
    public function setThursdayMorningOpeningHour(?string $thursdayMorningOpeningHour = null): self
    {
        // validation for constraint: string
        if (!is_null($thursdayMorningOpeningHour) && !is_string($thursdayMorningOpeningHour)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($thursdayMorningOpeningHour, true), gettype($thursdayMorningOpeningHour)), __LINE__);
        }
        if (is_null($thursdayMorningOpeningHour) || (is_array($thursdayMorningOpeningHour) && empty($thursdayMorningOpeningHour))) {
            unset($this->ThursdayMorningOpeningHour);
        } else {
            $this->ThursdayMorningOpeningHour = $thursdayMorningOpeningHour;
        }
        
        return $this;
    }
    /**
     * Get TuesdayAfternoonClosingHour value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getTuesdayAfternoonClosingHour(): ?string
    {
        return isset($this->TuesdayAfternoonClosingHour) ? $this->TuesdayAfternoonClosingHour : null;
    }
    /**
     * Set TuesdayAfternoonClosingHour value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $tuesdayAfternoonClosingHour
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountParcelShop
     */
    public function setTuesdayAfternoonClosingHour(?string $tuesdayAfternoonClosingHour = null): self
    {
        // validation for constraint: string
        if (!is_null($tuesdayAfternoonClosingHour) && !is_string($tuesdayAfternoonClosingHour)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($tuesdayAfternoonClosingHour, true), gettype($tuesdayAfternoonClosingHour)), __LINE__);
        }
        if (is_null($tuesdayAfternoonClosingHour) || (is_array($tuesdayAfternoonClosingHour) && empty($tuesdayAfternoonClosingHour))) {
            unset($this->TuesdayAfternoonClosingHour);
        } else {
            $this->TuesdayAfternoonClosingHour = $tuesdayAfternoonClosingHour;
        }
        
        return $this;
    }
    /**
     * Get TuesdayAfternoonOpeningHour value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getTuesdayAfternoonOpeningHour(): ?string
    {
        return isset($this->TuesdayAfternoonOpeningHour) ? $this->TuesdayAfternoonOpeningHour : null;
    }
    /**
     * Set TuesdayAfternoonOpeningHour value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $tuesdayAfternoonOpeningHour
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountParcelShop
     */
    public function setTuesdayAfternoonOpeningHour(?string $tuesdayAfternoonOpeningHour = null): self
    {
        // validation for constraint: string
        if (!is_null($tuesdayAfternoonOpeningHour) && !is_string($tuesdayAfternoonOpeningHour)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($tuesdayAfternoonOpeningHour, true), gettype($tuesdayAfternoonOpeningHour)), __LINE__);
        }
        if (is_null($tuesdayAfternoonOpeningHour) || (is_array($tuesdayAfternoonOpeningHour) && empty($tuesdayAfternoonOpeningHour))) {
            unset($this->TuesdayAfternoonOpeningHour);
        } else {
            $this->TuesdayAfternoonOpeningHour = $tuesdayAfternoonOpeningHour;
        }
        
        return $this;
    }
    /**
     * Get TuesdayMorningClosingHour value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getTuesdayMorningClosingHour(): ?string
    {
        return isset($this->TuesdayMorningClosingHour) ? $this->TuesdayMorningClosingHour : null;
    }
    /**
     * Set TuesdayMorningClosingHour value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $tuesdayMorningClosingHour
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountParcelShop
     */
    public function setTuesdayMorningClosingHour(?string $tuesdayMorningClosingHour = null): self
    {
        // validation for constraint: string
        if (!is_null($tuesdayMorningClosingHour) && !is_string($tuesdayMorningClosingHour)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($tuesdayMorningClosingHour, true), gettype($tuesdayMorningClosingHour)), __LINE__);
        }
        if (is_null($tuesdayMorningClosingHour) || (is_array($tuesdayMorningClosingHour) && empty($tuesdayMorningClosingHour))) {
            unset($this->TuesdayMorningClosingHour);
        } else {
            $this->TuesdayMorningClosingHour = $tuesdayMorningClosingHour;
        }
        
        return $this;
    }
    /**
     * Get TuesdayMorningOpeningHour value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getTuesdayMorningOpeningHour(): ?string
    {
        return isset($this->TuesdayMorningOpeningHour) ? $this->TuesdayMorningOpeningHour : null;
    }
    /**
     * Set TuesdayMorningOpeningHour value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $tuesdayMorningOpeningHour
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountParcelShop
     */
    public function setTuesdayMorningOpeningHour(?string $tuesdayMorningOpeningHour = null): self
    {
        // validation for constraint: string
        if (!is_null($tuesdayMorningOpeningHour) && !is_string($tuesdayMorningOpeningHour)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($tuesdayMorningOpeningHour, true), gettype($tuesdayMorningOpeningHour)), __LINE__);
        }
        if (is_null($tuesdayMorningOpeningHour) || (is_array($tuesdayMorningOpeningHour) && empty($tuesdayMorningOpeningHour))) {
            unset($this->TuesdayMorningOpeningHour);
        } else {
            $this->TuesdayMorningOpeningHour = $tuesdayMorningOpeningHour;
        }
        
        return $this;
    }
    /**
     * Get WednesdayAfternoonClosingHour value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getWednesdayAfternoonClosingHour(): ?string
    {
        return isset($this->WednesdayAfternoonClosingHour) ? $this->WednesdayAfternoonClosingHour : null;
    }
    /**
     * Set WednesdayAfternoonClosingHour value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $wednesdayAfternoonClosingHour
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountParcelShop
     */
    public function setWednesdayAfternoonClosingHour(?string $wednesdayAfternoonClosingHour = null): self
    {
        // validation for constraint: string
        if (!is_null($wednesdayAfternoonClosingHour) && !is_string($wednesdayAfternoonClosingHour)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($wednesdayAfternoonClosingHour, true), gettype($wednesdayAfternoonClosingHour)), __LINE__);
        }
        if (is_null($wednesdayAfternoonClosingHour) || (is_array($wednesdayAfternoonClosingHour) && empty($wednesdayAfternoonClosingHour))) {
            unset($this->WednesdayAfternoonClosingHour);
        } else {
            $this->WednesdayAfternoonClosingHour = $wednesdayAfternoonClosingHour;
        }
        
        return $this;
    }
    /**
     * Get WednesdayAfternoonOpeningHour value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getWednesdayAfternoonOpeningHour(): ?string
    {
        return isset($this->WednesdayAfternoonOpeningHour) ? $this->WednesdayAfternoonOpeningHour : null;
    }
    /**
     * Set WednesdayAfternoonOpeningHour value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $wednesdayAfternoonOpeningHour
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountParcelShop
     */
    public function setWednesdayAfternoonOpeningHour(?string $wednesdayAfternoonOpeningHour = null): self
    {
        // validation for constraint: string
        if (!is_null($wednesdayAfternoonOpeningHour) && !is_string($wednesdayAfternoonOpeningHour)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($wednesdayAfternoonOpeningHour, true), gettype($wednesdayAfternoonOpeningHour)), __LINE__);
        }
        if (is_null($wednesdayAfternoonOpeningHour) || (is_array($wednesdayAfternoonOpeningHour) && empty($wednesdayAfternoonOpeningHour))) {
            unset($this->WednesdayAfternoonOpeningHour);
        } else {
            $this->WednesdayAfternoonOpeningHour = $wednesdayAfternoonOpeningHour;
        }
        
        return $this;
    }
    /**
     * Get WednesdayMorningClosingHour value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getWednesdayMorningClosingHour(): ?string
    {
        return isset($this->WednesdayMorningClosingHour) ? $this->WednesdayMorningClosingHour : null;
    }
    /**
     * Set WednesdayMorningClosingHour value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $wednesdayMorningClosingHour
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountParcelShop
     */
    public function setWednesdayMorningClosingHour(?string $wednesdayMorningClosingHour = null): self
    {
        // validation for constraint: string
        if (!is_null($wednesdayMorningClosingHour) && !is_string($wednesdayMorningClosingHour)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($wednesdayMorningClosingHour, true), gettype($wednesdayMorningClosingHour)), __LINE__);
        }
        if (is_null($wednesdayMorningClosingHour) || (is_array($wednesdayMorningClosingHour) && empty($wednesdayMorningClosingHour))) {
            unset($this->WednesdayMorningClosingHour);
        } else {
            $this->WednesdayMorningClosingHour = $wednesdayMorningClosingHour;
        }
        
        return $this;
    }
    /**
     * Get WednesdayMorningOpeningHour value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getWednesdayMorningOpeningHour(): ?string
    {
        return isset($this->WednesdayMorningOpeningHour) ? $this->WednesdayMorningOpeningHour : null;
    }
    /**
     * Set WednesdayMorningOpeningHour value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $wednesdayMorningOpeningHour
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountParcelShop
     */
    public function setWednesdayMorningOpeningHour(?string $wednesdayMorningOpeningHour = null): self
    {
        // validation for constraint: string
        if (!is_null($wednesdayMorningOpeningHour) && !is_string($wednesdayMorningOpeningHour)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($wednesdayMorningOpeningHour, true), gettype($wednesdayMorningOpeningHour)), __LINE__);
        }
        if (is_null($wednesdayMorningOpeningHour) || (is_array($wednesdayMorningOpeningHour) && empty($wednesdayMorningOpeningHour))) {
            unset($this->WednesdayMorningOpeningHour);
        } else {
            $this->WednesdayMorningOpeningHour = $wednesdayMorningOpeningHour;
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
    public function getZipCode(): ?string
    {
        return isset($this->ZipCode) ? $this->ZipCode : null;
    }
    /**
     * Set ZipCode value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $zipCode
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountParcelShop
     */
    public function setZipCode(?string $zipCode = null): self
    {
        // validation for constraint: string
        if (!is_null($zipCode) && !is_string($zipCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($zipCode, true), gettype($zipCode)), __LINE__);
        }
        if (is_null($zipCode) || (is_array($zipCode) && empty($zipCode))) {
            unset($this->ZipCode);
        } else {
            $this->ZipCode = $zipCode;
        }
        
        return $this;
    }
}
