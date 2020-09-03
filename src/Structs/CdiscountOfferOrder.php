<?php

namespace SengentoBV\CdiscountMarketplaceSdk\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for OfferOrder Structs
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:OfferOrder
 * @package Cdiscount
 * @subpackage Structs
 */
class CdiscountOfferOrder extends AbstractStructBase
{
    /**
     * The Code
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $Code;
    /**
     * The CreationDate
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $CreationDate;
    /**
     * The ExpirationDate
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $ExpirationDate;
    /**
     * Constructor method for OfferOrder
     * @uses CdiscountOfferOrder::setCode()
     * @uses CdiscountOfferOrder::setCreationDate()
     * @uses CdiscountOfferOrder::setExpirationDate()
     * @param string $code
     * @param string $creationDate
     * @param string $expirationDate
     */
    public function __construct($code = null, $creationDate = null, $expirationDate = null)
    {
        $this
            ->setCode($code)
            ->setCreationDate($creationDate)
            ->setExpirationDate($expirationDate);
    }
    /**
     * Get Code value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getCode()
    {
        return isset($this->Code) ? $this->Code : null;
    }
    /**
     * Set Code value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $code
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountOfferOrder
     */
    public function setCode($code = null)
    {
        // validation for constraint: string
        if (!is_null($code) && !is_string($code)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($code, true), gettype($code)), __LINE__);
        }
        if (is_null($code) || (is_array($code) && empty($code))) {
            unset($this->Code);
        } else {
            $this->Code = $code;
        }
        return $this;
    }
    /**
     * Get CreationDate value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getCreationDate()
    {
        return isset($this->CreationDate) ? $this->CreationDate : null;
    }
    /**
     * Set CreationDate value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $creationDate
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountOfferOrder
     */
    public function setCreationDate($creationDate = null)
    {
        // validation for constraint: string
        if (!is_null($creationDate) && !is_string($creationDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($creationDate, true), gettype($creationDate)), __LINE__);
        }
        if (is_null($creationDate) || (is_array($creationDate) && empty($creationDate))) {
            unset($this->CreationDate);
        } else {
            $this->CreationDate = $creationDate;
        }
        return $this;
    }
    /**
     * Get ExpirationDate value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getExpirationDate()
    {
        return isset($this->ExpirationDate) ? $this->ExpirationDate : null;
    }
    /**
     * Set ExpirationDate value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $expirationDate
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountOfferOrder
     */
    public function setExpirationDate($expirationDate = null)
    {
        // validation for constraint: string
        if (!is_null($expirationDate) && !is_string($expirationDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($expirationDate, true), gettype($expirationDate)), __LINE__);
        }
        if (is_null($expirationDate) || (is_array($expirationDate) && empty($expirationDate))) {
            unset($this->ExpirationDate);
        } else {
            $this->ExpirationDate = $expirationDate;
        }
        return $this;
    }
}
