<?php

declare(strict_types=1);

namespace SengentoBV\CdiscountMarketplaceSdk\Structs;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CategoryTree Structs
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:CategoryTree
 * @package Cdiscount
 * @subpackage Structs
 */
class CdiscountCategoryTree extends AbstractStructBase
{
    /**
     * The AllowOfferIntegration
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $AllowOfferIntegration = null;
    /**
     * The AllowProductIntegration
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $AllowProductIntegration = null;
    /**
     * The ChildrenCategoryList
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfCategoryTree|null
     */
    protected ?\SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfCategoryTree $ChildrenCategoryList = null;
    /**
     * The Code
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $Code = null;
    /**
     * The IsEANOptional
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var bool|null
     */
    protected ?bool $IsEANOptional = null;
    /**
     * The IsStandardProductKindEligible
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $IsStandardProductKindEligible = null;
    /**
     * The IsVariantProductKindEligible
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $IsVariantProductKindEligible = null;
    /**
     * The Name
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $Name = null;
    /**
     * Constructor method for CategoryTree
     * @uses CdiscountCategoryTree::setAllowOfferIntegration()
     * @uses CdiscountCategoryTree::setAllowProductIntegration()
     * @uses CdiscountCategoryTree::setChildrenCategoryList()
     * @uses CdiscountCategoryTree::setCode()
     * @uses CdiscountCategoryTree::setIsEANOptional()
     * @uses CdiscountCategoryTree::setIsStandardProductKindEligible()
     * @uses CdiscountCategoryTree::setIsVariantProductKindEligible()
     * @uses CdiscountCategoryTree::setName()
     * @param bool $allowOfferIntegration
     * @param bool $allowProductIntegration
     * @param \SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfCategoryTree $childrenCategoryList
     * @param string $code
     * @param bool $isEANOptional
     * @param bool $isStandardProductKindEligible
     * @param bool $isVariantProductKindEligible
     * @param string $name
     */
    public function __construct(?bool $allowOfferIntegration = null, ?bool $allowProductIntegration = null, ?\SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfCategoryTree $childrenCategoryList = null, ?string $code = null, ?bool $isEANOptional = null, ?bool $isStandardProductKindEligible = null, ?bool $isVariantProductKindEligible = null, ?string $name = null)
    {
        $this
            ->setAllowOfferIntegration($allowOfferIntegration)
            ->setAllowProductIntegration($allowProductIntegration)
            ->setChildrenCategoryList($childrenCategoryList)
            ->setCode($code)
            ->setIsEANOptional($isEANOptional)
            ->setIsStandardProductKindEligible($isStandardProductKindEligible)
            ->setIsVariantProductKindEligible($isVariantProductKindEligible)
            ->setName($name);
    }
    /**
     * Get AllowOfferIntegration value
     * @return bool|null
     */
    public function getAllowOfferIntegration(): ?bool
    {
        return $this->AllowOfferIntegration;
    }
    /**
     * Set AllowOfferIntegration value
     * @param bool $allowOfferIntegration
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountCategoryTree
     */
    public function setAllowOfferIntegration(?bool $allowOfferIntegration = null): self
    {
        // validation for constraint: boolean
        if (!is_null($allowOfferIntegration) && !is_bool($allowOfferIntegration)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($allowOfferIntegration, true), gettype($allowOfferIntegration)), __LINE__);
        }
        $this->AllowOfferIntegration = $allowOfferIntegration;
        
        return $this;
    }
    /**
     * Get AllowProductIntegration value
     * @return bool|null
     */
    public function getAllowProductIntegration(): ?bool
    {
        return $this->AllowProductIntegration;
    }
    /**
     * Set AllowProductIntegration value
     * @param bool $allowProductIntegration
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountCategoryTree
     */
    public function setAllowProductIntegration(?bool $allowProductIntegration = null): self
    {
        // validation for constraint: boolean
        if (!is_null($allowProductIntegration) && !is_bool($allowProductIntegration)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($allowProductIntegration, true), gettype($allowProductIntegration)), __LINE__);
        }
        $this->AllowProductIntegration = $allowProductIntegration;
        
        return $this;
    }
    /**
     * Get ChildrenCategoryList value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfCategoryTree|null
     */
    public function getChildrenCategoryList(): ?\SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfCategoryTree
    {
        return isset($this->ChildrenCategoryList) ? $this->ChildrenCategoryList : null;
    }
    /**
     * Set ChildrenCategoryList value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfCategoryTree $childrenCategoryList
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountCategoryTree
     */
    public function setChildrenCategoryList(?\SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfCategoryTree $childrenCategoryList = null): self
    {
        if (is_null($childrenCategoryList) || (is_array($childrenCategoryList) && empty($childrenCategoryList))) {
            unset($this->ChildrenCategoryList);
        } else {
            $this->ChildrenCategoryList = $childrenCategoryList;
        }
        
        return $this;
    }
    /**
     * Get Code value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getCode(): ?string
    {
        return isset($this->Code) ? $this->Code : null;
    }
    /**
     * Set Code value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $code
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountCategoryTree
     */
    public function setCode(?string $code = null): self
    {
        // validation for constraint: string
        if (!is_null($code) && !is_string($code)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($code, true), gettype($code)), __LINE__);
        }
        if (is_null($code) || (is_array($code) && empty($code))) {
            unset($this->Code);
        } else {
            $this->Code = $code;
        }
        
        return $this;
    }
    /**
     * Get IsEANOptional value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return bool|null
     */
    public function getIsEANOptional(): ?bool
    {
        return isset($this->IsEANOptional) ? $this->IsEANOptional : null;
    }
    /**
     * Set IsEANOptional value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param bool $isEANOptional
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountCategoryTree
     */
    public function setIsEANOptional(?bool $isEANOptional = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isEANOptional) && !is_bool($isEANOptional)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isEANOptional, true), gettype($isEANOptional)), __LINE__);
        }
        if (is_null($isEANOptional) || (is_array($isEANOptional) && empty($isEANOptional))) {
            unset($this->IsEANOptional);
        } else {
            $this->IsEANOptional = $isEANOptional;
        }
        
        return $this;
    }
    /**
     * Get IsStandardProductKindEligible value
     * @return bool|null
     */
    public function getIsStandardProductKindEligible(): ?bool
    {
        return $this->IsStandardProductKindEligible;
    }
    /**
     * Set IsStandardProductKindEligible value
     * @param bool $isStandardProductKindEligible
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountCategoryTree
     */
    public function setIsStandardProductKindEligible(?bool $isStandardProductKindEligible = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isStandardProductKindEligible) && !is_bool($isStandardProductKindEligible)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isStandardProductKindEligible, true), gettype($isStandardProductKindEligible)), __LINE__);
        }
        $this->IsStandardProductKindEligible = $isStandardProductKindEligible;
        
        return $this;
    }
    /**
     * Get IsVariantProductKindEligible value
     * @return bool|null
     */
    public function getIsVariantProductKindEligible(): ?bool
    {
        return $this->IsVariantProductKindEligible;
    }
    /**
     * Set IsVariantProductKindEligible value
     * @param bool $isVariantProductKindEligible
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountCategoryTree
     */
    public function setIsVariantProductKindEligible(?bool $isVariantProductKindEligible = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isVariantProductKindEligible) && !is_bool($isVariantProductKindEligible)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isVariantProductKindEligible, true), gettype($isVariantProductKindEligible)), __LINE__);
        }
        $this->IsVariantProductKindEligible = $isVariantProductKindEligible;
        
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
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountCategoryTree
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
