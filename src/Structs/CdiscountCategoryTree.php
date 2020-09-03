<?php

namespace SengentoBV\CdiscountMarketplaceSdk\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

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
     * @var bool
     */
    public $AllowOfferIntegration;
    /**
     * The AllowProductIntegration
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $AllowProductIntegration;
    /**
     * The ChildrenCategoryList
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfCategoryTree
     */
    public $ChildrenCategoryList;
    /**
     * The Code
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $Code;
    /**
     * The IsEANOptional
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var bool
     */
    public $IsEANOptional;
    /**
     * The IsStandardProductKindEligible
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $IsStandardProductKindEligible;
    /**
     * The IsVariantProductKindEligible
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $IsVariantProductKindEligible;
    /**
     * The Name
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $Name;
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
    public function __construct($allowOfferIntegration = null, $allowProductIntegration = null, \SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfCategoryTree $childrenCategoryList = null, $code = null, $isEANOptional = null, $isStandardProductKindEligible = null, $isVariantProductKindEligible = null, $name = null)
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
    public function getAllowOfferIntegration()
    {
        return $this->AllowOfferIntegration;
    }
    /**
     * Set AllowOfferIntegration value
     * @param bool $allowOfferIntegration
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountCategoryTree
     */
    public function setAllowOfferIntegration($allowOfferIntegration = null)
    {
        // validation for constraint: boolean
        if (!is_null($allowOfferIntegration) && !is_bool($allowOfferIntegration)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($allowOfferIntegration, true), gettype($allowOfferIntegration)), __LINE__);
        }
        $this->AllowOfferIntegration = $allowOfferIntegration;
        return $this;
    }
    /**
     * Get AllowProductIntegration value
     * @return bool|null
     */
    public function getAllowProductIntegration()
    {
        return $this->AllowProductIntegration;
    }
    /**
     * Set AllowProductIntegration value
     * @param bool $allowProductIntegration
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountCategoryTree
     */
    public function setAllowProductIntegration($allowProductIntegration = null)
    {
        // validation for constraint: boolean
        if (!is_null($allowProductIntegration) && !is_bool($allowProductIntegration)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($allowProductIntegration, true), gettype($allowProductIntegration)), __LINE__);
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
    public function getChildrenCategoryList()
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
    public function setChildrenCategoryList(\SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfCategoryTree $childrenCategoryList = null)
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
    public function getCode()
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
     * Get IsEANOptional value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return bool|null
     */
    public function getIsEANOptional()
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
    public function setIsEANOptional($isEANOptional = null)
    {
        // validation for constraint: boolean
        if (!is_null($isEANOptional) && !is_bool($isEANOptional)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isEANOptional, true), gettype($isEANOptional)), __LINE__);
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
    public function getIsStandardProductKindEligible()
    {
        return $this->IsStandardProductKindEligible;
    }
    /**
     * Set IsStandardProductKindEligible value
     * @param bool $isStandardProductKindEligible
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountCategoryTree
     */
    public function setIsStandardProductKindEligible($isStandardProductKindEligible = null)
    {
        // validation for constraint: boolean
        if (!is_null($isStandardProductKindEligible) && !is_bool($isStandardProductKindEligible)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isStandardProductKindEligible, true), gettype($isStandardProductKindEligible)), __LINE__);
        }
        $this->IsStandardProductKindEligible = $isStandardProductKindEligible;
        return $this;
    }
    /**
     * Get IsVariantProductKindEligible value
     * @return bool|null
     */
    public function getIsVariantProductKindEligible()
    {
        return $this->IsVariantProductKindEligible;
    }
    /**
     * Set IsVariantProductKindEligible value
     * @param bool $isVariantProductKindEligible
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountCategoryTree
     */
    public function setIsVariantProductKindEligible($isVariantProductKindEligible = null)
    {
        // validation for constraint: boolean
        if (!is_null($isVariantProductKindEligible) && !is_bool($isVariantProductKindEligible)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isVariantProductKindEligible, true), gettype($isVariantProductKindEligible)), __LINE__);
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
    public function getName()
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
