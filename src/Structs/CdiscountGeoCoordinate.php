<?php

namespace SengentoBV\CdiscountMarketplaceSdk\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GeoCoordinate Structs
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:GeoCoordinate
 * @package Cdiscount
 * @subpackage Structs
 */
class CdiscountGeoCoordinate extends AbstractStructBase
{
    /**
     * The Altitude
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var float
     */
    public $Altitude;
    /**
     * The Course
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var float
     */
    public $Course;
    /**
     * The HorizontalAccuracy
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var float
     */
    public $HorizontalAccuracy;
    /**
     * The Latitude
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var float
     */
    public $Latitude;
    /**
     * The Longitude
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var float
     */
    public $Longitude;
    /**
     * The Speed
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var float
     */
    public $Speed;
    /**
     * The VerticalAccuracy
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var float
     */
    public $VerticalAccuracy;
    /**
     * Constructor method for GeoCoordinate
     * @uses CdiscountGeoCoordinate::setAltitude()
     * @uses CdiscountGeoCoordinate::setCourse()
     * @uses CdiscountGeoCoordinate::setHorizontalAccuracy()
     * @uses CdiscountGeoCoordinate::setLatitude()
     * @uses CdiscountGeoCoordinate::setLongitude()
     * @uses CdiscountGeoCoordinate::setSpeed()
     * @uses CdiscountGeoCoordinate::setVerticalAccuracy()
     * @param float $altitude
     * @param float $course
     * @param float $horizontalAccuracy
     * @param float $latitude
     * @param float $longitude
     * @param float $speed
     * @param float $verticalAccuracy
     */
    public function __construct($altitude = null, $course = null, $horizontalAccuracy = null, $latitude = null, $longitude = null, $speed = null, $verticalAccuracy = null)
    {
        $this
            ->setAltitude($altitude)
            ->setCourse($course)
            ->setHorizontalAccuracy($horizontalAccuracy)
            ->setLatitude($latitude)
            ->setLongitude($longitude)
            ->setSpeed($speed)
            ->setVerticalAccuracy($verticalAccuracy);
    }
    /**
     * Get Altitude value
     * @return float|null
     */
    public function getAltitude()
    {
        return $this->Altitude;
    }
    /**
     * Set Altitude value
     * @param float $altitude
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountGeoCoordinate
     */
    public function setAltitude($altitude = null)
    {
        // validation for constraint: float
        if (!is_null($altitude) && !(is_float($altitude) || is_numeric($altitude))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($altitude, true), gettype($altitude)), __LINE__);
        }
        $this->Altitude = $altitude;
        return $this;
    }
    /**
     * Get Course value
     * @return float|null
     */
    public function getCourse()
    {
        return $this->Course;
    }
    /**
     * Set Course value
     * @param float $course
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountGeoCoordinate
     */
    public function setCourse($course = null)
    {
        // validation for constraint: float
        if (!is_null($course) && !(is_float($course) || is_numeric($course))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($course, true), gettype($course)), __LINE__);
        }
        $this->Course = $course;
        return $this;
    }
    /**
     * Get HorizontalAccuracy value
     * @return float|null
     */
    public function getHorizontalAccuracy()
    {
        return $this->HorizontalAccuracy;
    }
    /**
     * Set HorizontalAccuracy value
     * @param float $horizontalAccuracy
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountGeoCoordinate
     */
    public function setHorizontalAccuracy($horizontalAccuracy = null)
    {
        // validation for constraint: float
        if (!is_null($horizontalAccuracy) && !(is_float($horizontalAccuracy) || is_numeric($horizontalAccuracy))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($horizontalAccuracy, true), gettype($horizontalAccuracy)), __LINE__);
        }
        $this->HorizontalAccuracy = $horizontalAccuracy;
        return $this;
    }
    /**
     * Get Latitude value
     * @return float|null
     */
    public function getLatitude()
    {
        return $this->Latitude;
    }
    /**
     * Set Latitude value
     * @param float $latitude
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountGeoCoordinate
     */
    public function setLatitude($latitude = null)
    {
        // validation for constraint: float
        if (!is_null($latitude) && !(is_float($latitude) || is_numeric($latitude))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($latitude, true), gettype($latitude)), __LINE__);
        }
        $this->Latitude = $latitude;
        return $this;
    }
    /**
     * Get Longitude value
     * @return float|null
     */
    public function getLongitude()
    {
        return $this->Longitude;
    }
    /**
     * Set Longitude value
     * @param float $longitude
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountGeoCoordinate
     */
    public function setLongitude($longitude = null)
    {
        // validation for constraint: float
        if (!is_null($longitude) && !(is_float($longitude) || is_numeric($longitude))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($longitude, true), gettype($longitude)), __LINE__);
        }
        $this->Longitude = $longitude;
        return $this;
    }
    /**
     * Get Speed value
     * @return float|null
     */
    public function getSpeed()
    {
        return $this->Speed;
    }
    /**
     * Set Speed value
     * @param float $speed
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountGeoCoordinate
     */
    public function setSpeed($speed = null)
    {
        // validation for constraint: float
        if (!is_null($speed) && !(is_float($speed) || is_numeric($speed))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($speed, true), gettype($speed)), __LINE__);
        }
        $this->Speed = $speed;
        return $this;
    }
    /**
     * Get VerticalAccuracy value
     * @return float|null
     */
    public function getVerticalAccuracy()
    {
        return $this->VerticalAccuracy;
    }
    /**
     * Set VerticalAccuracy value
     * @param float $verticalAccuracy
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountGeoCoordinate
     */
    public function setVerticalAccuracy($verticalAccuracy = null)
    {
        // validation for constraint: float
        if (!is_null($verticalAccuracy) && !(is_float($verticalAccuracy) || is_numeric($verticalAccuracy))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($verticalAccuracy, true), gettype($verticalAccuracy)), __LINE__);
        }
        $this->VerticalAccuracy = $verticalAccuracy;
        return $this;
    }
}
