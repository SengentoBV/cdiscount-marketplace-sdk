<?php

namespace SengentoBV\CdiscountMarketplaceSdk\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Carrier Structs
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:Carrier
 * @package Cdiscount
 * @subpackage Structs
 */
class CdiscountCarrier extends AbstractStructBase
{
    /**
     * The CarrierId
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $CarrierId;
    /**
     * The DefaultURL
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $DefaultURL;
    /**
     * The Name
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $Name;
    /**
     * Constructor method for Carrier
     * @uses CdiscountCarrier::setCarrierId()
     * @uses CdiscountCarrier::setDefaultURL()
     * @uses CdiscountCarrier::setName()
     * @param int $carrierId
     * @param string $defaultURL
     * @param string $name
     */
    public function __construct($carrierId = null, $defaultURL = null, $name = null)
    {
        $this
            ->setCarrierId($carrierId)
            ->setDefaultURL($defaultURL)
            ->setName($name);
    }
    /**
     * Get CarrierId value
     * @return int|null
     */
    public function getCarrierId()
    {
        return $this->CarrierId;
    }
    /**
     * Set CarrierId value
     * @param int $carrierId
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountCarrier
     */
    public function setCarrierId($carrierId = null)
    {
        // validation for constraint: int
        if (!is_null($carrierId) && !(is_int($carrierId) || ctype_digit($carrierId))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($carrierId, true), gettype($carrierId)), __LINE__);
        }
        $this->CarrierId = $carrierId;
        return $this;
    }
    /**
     * Get DefaultURL value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getDefaultURL()
    {
        return isset($this->DefaultURL) ? $this->DefaultURL : null;
    }
    /**
     * Set DefaultURL value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $defaultURL
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountCarrier
     */
    public function setDefaultURL($defaultURL = null)
    {
        // validation for constraint: string
        if (!is_null($defaultURL) && !is_string($defaultURL)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($defaultURL, true), gettype($defaultURL)), __LINE__);
        }
        if (is_null($defaultURL) || (is_array($defaultURL) && empty($defaultURL))) {
            unset($this->DefaultURL);
        } else {
            $this->DefaultURL = $defaultURL;
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
    public function getName()
    {
        return isset($this->Name) ? $this->Name : null;
    }
    /**
     * Set Name value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $name
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountCarrier
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
}
