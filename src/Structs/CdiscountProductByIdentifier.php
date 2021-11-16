<?php

declare(strict_types=1);

namespace SengentoBV\CdiscountMarketplaceSdk\Structs;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ProductByIdentifier Structs
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ProductByIdentifier
 * @package Cdiscount
 * @subpackage Structs
 */
class CdiscountProductByIdentifier extends AbstractStructBase
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
     * The CategoryCode
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $CategoryCode = null;
    /**
     * The Color
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $Color = null;
    /**
     * The Ean
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $Ean = null;
    /**
     * The ErrorMessage
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $ErrorMessage = null;
    /**
     * The FatherProductId
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $FatherProductId = null;
    /**
     * The HasError
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $HasError = null;
    /**
     * The ImageUrl
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $ImageUrl = null;
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
     * - nillable: true
     * @var string|null
     */
    protected ?string $ProductType = null;
    /**
     * The Size
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $Size = null;
    /**
     * Constructor method for ProductByIdentifier
     * @uses CdiscountProductByIdentifier::setBrandName()
     * @uses CdiscountProductByIdentifier::setCategoryCode()
     * @uses CdiscountProductByIdentifier::setColor()
     * @uses CdiscountProductByIdentifier::setEan()
     * @uses CdiscountProductByIdentifier::setErrorMessage()
     * @uses CdiscountProductByIdentifier::setFatherProductId()
     * @uses CdiscountProductByIdentifier::setHasError()
     * @uses CdiscountProductByIdentifier::setImageUrl()
     * @uses CdiscountProductByIdentifier::setName()
     * @uses CdiscountProductByIdentifier::setProductType()
     * @uses CdiscountProductByIdentifier::setSize()
     * @param string $brandName
     * @param string $categoryCode
     * @param string $color
     * @param string $ean
     * @param string $errorMessage
     * @param string $fatherProductId
     * @param bool $hasError
     * @param string $imageUrl
     * @param string $name
     * @param string $productType
     * @param string $size
     */
    public function __construct(?string $brandName = null, ?string $categoryCode = null, ?string $color = null, ?string $ean = null, ?string $errorMessage = null, ?string $fatherProductId = null, ?bool $hasError = null, ?string $imageUrl = null, ?string $name = null, ?string $productType = null, ?string $size = null)
    {
        $this
            ->setBrandName($brandName)
            ->setCategoryCode($categoryCode)
            ->setColor($color)
            ->setEan($ean)
            ->setErrorMessage($errorMessage)
            ->setFatherProductId($fatherProductId)
            ->setHasError($hasError)
            ->setImageUrl($imageUrl)
            ->setName($name)
            ->setProductType($productType)
            ->setSize($size);
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
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountProductByIdentifier
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
     * Get CategoryCode value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getCategoryCode(): ?string
    {
        return isset($this->CategoryCode) ? $this->CategoryCode : null;
    }
    /**
     * Set CategoryCode value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $categoryCode
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountProductByIdentifier
     */
    public function setCategoryCode(?string $categoryCode = null): self
    {
        // validation for constraint: string
        if (!is_null($categoryCode) && !is_string($categoryCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($categoryCode, true), gettype($categoryCode)), __LINE__);
        }
        if (is_null($categoryCode) || (is_array($categoryCode) && empty($categoryCode))) {
            unset($this->CategoryCode);
        } else {
            $this->CategoryCode = $categoryCode;
        }
        
        return $this;
    }
    /**
     * Get Color value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getColor(): ?string
    {
        return isset($this->Color) ? $this->Color : null;
    }
    /**
     * Set Color value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $color
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountProductByIdentifier
     */
    public function setColor(?string $color = null): self
    {
        // validation for constraint: string
        if (!is_null($color) && !is_string($color)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($color, true), gettype($color)), __LINE__);
        }
        if (is_null($color) || (is_array($color) && empty($color))) {
            unset($this->Color);
        } else {
            $this->Color = $color;
        }
        
        return $this;
    }
    /**
     * Get Ean value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getEan(): ?string
    {
        return isset($this->Ean) ? $this->Ean : null;
    }
    /**
     * Set Ean value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $ean
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountProductByIdentifier
     */
    public function setEan(?string $ean = null): self
    {
        // validation for constraint: string
        if (!is_null($ean) && !is_string($ean)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($ean, true), gettype($ean)), __LINE__);
        }
        if (is_null($ean) || (is_array($ean) && empty($ean))) {
            unset($this->Ean);
        } else {
            $this->Ean = $ean;
        }
        
        return $this;
    }
    /**
     * Get ErrorMessage value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getErrorMessage(): ?string
    {
        return isset($this->ErrorMessage) ? $this->ErrorMessage : null;
    }
    /**
     * Set ErrorMessage value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $errorMessage
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountProductByIdentifier
     */
    public function setErrorMessage(?string $errorMessage = null): self
    {
        // validation for constraint: string
        if (!is_null($errorMessage) && !is_string($errorMessage)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($errorMessage, true), gettype($errorMessage)), __LINE__);
        }
        if (is_null($errorMessage) || (is_array($errorMessage) && empty($errorMessage))) {
            unset($this->ErrorMessage);
        } else {
            $this->ErrorMessage = $errorMessage;
        }
        
        return $this;
    }
    /**
     * Get FatherProductId value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getFatherProductId(): ?string
    {
        return isset($this->FatherProductId) ? $this->FatherProductId : null;
    }
    /**
     * Set FatherProductId value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $fatherProductId
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountProductByIdentifier
     */
    public function setFatherProductId(?string $fatherProductId = null): self
    {
        // validation for constraint: string
        if (!is_null($fatherProductId) && !is_string($fatherProductId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($fatherProductId, true), gettype($fatherProductId)), __LINE__);
        }
        if (is_null($fatherProductId) || (is_array($fatherProductId) && empty($fatherProductId))) {
            unset($this->FatherProductId);
        } else {
            $this->FatherProductId = $fatherProductId;
        }
        
        return $this;
    }
    /**
     * Get HasError value
     * @return bool|null
     */
    public function getHasError(): ?bool
    {
        return $this->HasError;
    }
    /**
     * Set HasError value
     * @param bool $hasError
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountProductByIdentifier
     */
    public function setHasError(?bool $hasError = null): self
    {
        // validation for constraint: boolean
        if (!is_null($hasError) && !is_bool($hasError)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($hasError, true), gettype($hasError)), __LINE__);
        }
        $this->HasError = $hasError;
        
        return $this;
    }
    /**
     * Get ImageUrl value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getImageUrl(): ?string
    {
        return isset($this->ImageUrl) ? $this->ImageUrl : null;
    }
    /**
     * Set ImageUrl value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $imageUrl
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountProductByIdentifier
     */
    public function setImageUrl(?string $imageUrl = null): self
    {
        // validation for constraint: string
        if (!is_null($imageUrl) && !is_string($imageUrl)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($imageUrl, true), gettype($imageUrl)), __LINE__);
        }
        if (is_null($imageUrl) || (is_array($imageUrl) && empty($imageUrl))) {
            unset($this->ImageUrl);
        } else {
            $this->ImageUrl = $imageUrl;
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
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountProductByIdentifier
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
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getProductType(): ?string
    {
        return isset($this->ProductType) ? $this->ProductType : null;
    }
    /**
     * Set ProductType value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @uses \SengentoBV\CdiscountMarketplaceSdk\Enums\CdiscountProductTypeEnum::valueIsValid()
     * @uses \SengentoBV\CdiscountMarketplaceSdk\Enums\CdiscountProductTypeEnum::getValidValues()
     * @throws InvalidArgumentException
     * @param string $productType
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountProductByIdentifier
     */
    public function setProductType(?string $productType = null): self
    {
        // validation for constraint: enumeration
        if (!\SengentoBV\CdiscountMarketplaceSdk\Enums\CdiscountProductTypeEnum::valueIsValid($productType)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \SengentoBV\CdiscountMarketplaceSdk\Enums\CdiscountProductTypeEnum', is_array($productType) ? implode(', ', $productType) : var_export($productType, true), implode(', ', \SengentoBV\CdiscountMarketplaceSdk\Enums\CdiscountProductTypeEnum::getValidValues())), __LINE__);
        }
        if (is_null($productType) || (is_array($productType) && empty($productType))) {
            unset($this->ProductType);
        } else {
            $this->ProductType = $productType;
        }
        
        return $this;
    }
    /**
     * Get Size value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getSize(): ?string
    {
        return isset($this->Size) ? $this->Size : null;
    }
    /**
     * Set Size value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $size
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountProductByIdentifier
     */
    public function setSize(?string $size = null): self
    {
        // validation for constraint: string
        if (!is_null($size) && !is_string($size)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($size, true), gettype($size)), __LINE__);
        }
        if (is_null($size) || (is_array($size) && empty($size))) {
            unset($this->Size);
        } else {
            $this->Size = $size;
        }
        
        return $this;
    }
}
