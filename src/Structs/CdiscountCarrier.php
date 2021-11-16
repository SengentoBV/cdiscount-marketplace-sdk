<?php

declare(strict_types=1);

namespace SengentoBV\CdiscountMarketplaceSdk\Structs;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

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
     * @var int|null
     */
    protected ?int $CarrierId = null;
    /**
     * The DefaultURL
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $DefaultURL = null;
    /**
     * The Name
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $Name = null;
    /**
     * Constructor method for Carrier
     * @uses CdiscountCarrier::setCarrierId()
     * @uses CdiscountCarrier::setDefaultURL()
     * @uses CdiscountCarrier::setName()
     * @param int $carrierId
     * @param string $defaultURL
     * @param string $name
     */
    public function __construct(?int $carrierId = null, ?string $defaultURL = null, ?string $name = null)
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
    public function getCarrierId(): ?int
    {
        return $this->CarrierId;
    }
    /**
     * Set CarrierId value
     * @param int $carrierId
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountCarrier
     */
    public function setCarrierId(?int $carrierId = null): self
    {
        // validation for constraint: int
        if (!is_null($carrierId) && !(is_int($carrierId) || ctype_digit($carrierId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($carrierId, true), gettype($carrierId)), __LINE__);
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
    public function getDefaultURL(): ?string
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
    public function setDefaultURL(?string $defaultURL = null): self
    {
        // validation for constraint: string
        if (!is_null($defaultURL) && !is_string($defaultURL)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($defaultURL, true), gettype($defaultURL)), __LINE__);
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
    public function getName(): ?string
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
}
