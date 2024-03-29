<?php

declare(strict_types=1);

namespace SengentoBV\CdiscountMarketplaceSdk\Structs;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Product Structs
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:Product
 * @package Cdiscount
 * @subpackage Structs
 */
class CdiscountProduct extends AbstractStructBase
{
    /**
     * The BrandName
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $BrandName = null;
    /**
     * The EANList
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfstring|null
     */
    protected ?\SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfstring $EANList = null;
    /**
     * The ISBN
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $ISBN = null;
    /**
     * The Name
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $Name = null;
    /**
     * The ProductType
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $ProductType = null;
    /**
     * The SKU
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $SKU = null;
    /**
     * The ProductEan
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $ProductEan = null;
    /**
     * The ProductId
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $ProductId = null;
    /**
     * The Title
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $Title = null;
    /**
     * Constructor method for Product
     * @uses CdiscountProduct::setBrandName()
     * @uses CdiscountProduct::setEANList()
     * @uses CdiscountProduct::setISBN()
     * @uses CdiscountProduct::setName()
     * @uses CdiscountProduct::setProductType()
     * @uses CdiscountProduct::setSKU()
     * @uses CdiscountProduct::setProductEan()
     * @uses CdiscountProduct::setProductId()
     * @uses CdiscountProduct::setTitle()
     * @param string $brandName
     * @param \SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfstring $eANList
     * @param string $iSBN
     * @param string $name
     * @param string $productType
     * @param string $sKU
     * @param string $productEan
     * @param string $productId
     * @param string $title
     */
    public function __construct(?string $brandName = null, ?\SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfstring $eANList = null, ?string $iSBN = null, ?string $name = null, ?string $productType = null, ?string $sKU = null, ?string $productEan = null, ?string $productId = null, ?string $title = null)
    {
        $this
            ->setBrandName($brandName)
            ->setEANList($eANList)
            ->setISBN($iSBN)
            ->setName($name)
            ->setProductType($productType)
            ->setSKU($sKU)
            ->setProductEan($productEan)
            ->setProductId($productId)
            ->setTitle($title);
    }
    /**
     * Get BrandName value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getBrandName(): ?string
    {
        return isset($this->BrandName) ? $this->BrandName : null;
    }
    /**
     * Set BrandName value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $brandName
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountProduct
     */
    public function setBrandName(?string $brandName = null): self
    {
        // validation for constraint: string
        if (!is_null($brandName) && !is_string($brandName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($brandName, true), gettype($brandName)), __LINE__);
        }
        if (is_null($brandName) || (is_array($brandName) && empty($brandName))) {
            unset($this->BrandName);
        } else {
            $this->BrandName = $brandName;
        }
        
        return $this;
    }
    /**
     * Get EANList value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfstring|null
     */
    public function getEANList(): ?\SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfstring
    {
        return isset($this->EANList) ? $this->EANList : null;
    }
    /**
     * Set EANList value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfstring $eANList
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountProduct
     */
    public function setEANList(?\SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfstring $eANList = null): self
    {
        if (is_null($eANList) || (is_array($eANList) && empty($eANList))) {
            unset($this->EANList);
        } else {
            $this->EANList = $eANList;
        }
        
        return $this;
    }
    /**
     * Get ISBN value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getISBN(): ?string
    {
        return isset($this->ISBN) ? $this->ISBN : null;
    }
    /**
     * Set ISBN value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $iSBN
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountProduct
     */
    public function setISBN(?string $iSBN = null): self
    {
        // validation for constraint: string
        if (!is_null($iSBN) && !is_string($iSBN)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($iSBN, true), gettype($iSBN)), __LINE__);
        }
        if (is_null($iSBN) || (is_array($iSBN) && empty($iSBN))) {
            unset($this->ISBN);
        } else {
            $this->ISBN = $iSBN;
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
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountProduct
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
     * Get ProductType value
     * @return string|null
     */
    public function getProductType(): ?string
    {
        return $this->ProductType;
    }
    /**
     * Set ProductType value
     * @uses \SengentoBV\CdiscountMarketplaceSdk\Enums\CdiscountProductTypeEnum::valueIsValid()
     * @uses \SengentoBV\CdiscountMarketplaceSdk\Enums\CdiscountProductTypeEnum::getValidValues()
     * @throws InvalidArgumentException
     * @param string $productType
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountProduct
     */
    public function setProductType(?string $productType = null): self
    {
        // validation for constraint: enumeration
        if (!\SengentoBV\CdiscountMarketplaceSdk\Enums\CdiscountProductTypeEnum::valueIsValid($productType)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \SengentoBV\CdiscountMarketplaceSdk\Enums\CdiscountProductTypeEnum', is_array($productType) ? implode(', ', $productType) : var_export($productType, true), implode(', ', \SengentoBV\CdiscountMarketplaceSdk\Enums\CdiscountProductTypeEnum::getValidValues())), __LINE__);
        }
        $this->ProductType = $productType;
        
        return $this;
    }
    /**
     * Get SKU value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getSKU(): ?string
    {
        return isset($this->SKU) ? $this->SKU : null;
    }
    /**
     * Set SKU value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $sKU
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountProduct
     */
    public function setSKU(?string $sKU = null): self
    {
        // validation for constraint: string
        if (!is_null($sKU) && !is_string($sKU)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($sKU, true), gettype($sKU)), __LINE__);
        }
        if (is_null($sKU) || (is_array($sKU) && empty($sKU))) {
            unset($this->SKU);
        } else {
            $this->SKU = $sKU;
        }
        
        return $this;
    }
    /**
     * Get ProductEan value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getProductEan(): ?string
    {
        return isset($this->ProductEan) ? $this->ProductEan : null;
    }
    /**
     * Set ProductEan value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $productEan
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountProduct
     */
    public function setProductEan(?string $productEan = null): self
    {
        // validation for constraint: string
        if (!is_null($productEan) && !is_string($productEan)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($productEan, true), gettype($productEan)), __LINE__);
        }
        if (is_null($productEan) || (is_array($productEan) && empty($productEan))) {
            unset($this->ProductEan);
        } else {
            $this->ProductEan = $productEan;
        }
        
        return $this;
    }
    /**
     * Get ProductId value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getProductId(): ?string
    {
        return isset($this->ProductId) ? $this->ProductId : null;
    }
    /**
     * Set ProductId value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $productId
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountProduct
     */
    public function setProductId(?string $productId = null): self
    {
        // validation for constraint: string
        if (!is_null($productId) && !is_string($productId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($productId, true), gettype($productId)), __LINE__);
        }
        if (is_null($productId) || (is_array($productId) && empty($productId))) {
            unset($this->ProductId);
        } else {
            $this->ProductId = $productId;
        }
        
        return $this;
    }
    /**
     * Get Title value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getTitle(): ?string
    {
        return isset($this->Title) ? $this->Title : null;
    }
    /**
     * Set Title value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $title
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountProduct
     */
    public function setTitle(?string $title = null): self
    {
        // validation for constraint: string
        if (!is_null($title) && !is_string($title)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($title, true), gettype($title)), __LINE__);
        }
        if (is_null($title) || (is_array($title) && empty($title))) {
            unset($this->Title);
        } else {
            $this->Title = $title;
        }
        
        return $this;
    }
}
