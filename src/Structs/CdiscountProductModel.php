<?php

declare(strict_types=1);

namespace SengentoBV\CdiscountMarketplaceSdk\Structs;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ProductModel Structs
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ProductModel
 * @package Cdiscount
 * @subpackage Structs
 */
class CdiscountProductModel extends AbstractStructBase
{
    /**
     * The CategoryCode
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $CategoryCode = null;
    /**
     * The Definition
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountModelDefinition|null
     */
    protected ?\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountModelDefinition $Definition = null;
    /**
     * The IsDefault
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $IsDefault = null;
    /**
     * The ModelId
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $ModelId = null;
    /**
     * The Name
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $Name = null;
    /**
     * The ProductXmlStructure
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $ProductXmlStructure = null;
    /**
     * The VariationValueList
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfVariationDescription|null
     */
    protected ?\SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfVariationDescription $VariationValueList = null;
    /**
     * The Version
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $Version = null;
    /**
     * Constructor method for ProductModel
     * @uses CdiscountProductModel::setCategoryCode()
     * @uses CdiscountProductModel::setDefinition()
     * @uses CdiscountProductModel::setIsDefault()
     * @uses CdiscountProductModel::setModelId()
     * @uses CdiscountProductModel::setName()
     * @uses CdiscountProductModel::setProductXmlStructure()
     * @uses CdiscountProductModel::setVariationValueList()
     * @uses CdiscountProductModel::setVersion()
     * @param string $categoryCode
     * @param \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountModelDefinition $definition
     * @param bool $isDefault
     * @param int $modelId
     * @param string $name
     * @param string $productXmlStructure
     * @param \SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfVariationDescription $variationValueList
     * @param string $version
     */
    public function __construct(?string $categoryCode = null, ?\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountModelDefinition $definition = null, ?bool $isDefault = null, ?int $modelId = null, ?string $name = null, ?string $productXmlStructure = null, ?\SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfVariationDescription $variationValueList = null, ?string $version = null)
    {
        $this
            ->setCategoryCode($categoryCode)
            ->setDefinition($definition)
            ->setIsDefault($isDefault)
            ->setModelId($modelId)
            ->setName($name)
            ->setProductXmlStructure($productXmlStructure)
            ->setVariationValueList($variationValueList)
            ->setVersion($version);
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
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountProductModel
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
     * Get Definition value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountModelDefinition|null
     */
    public function getDefinition(): ?\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountModelDefinition
    {
        return isset($this->Definition) ? $this->Definition : null;
    }
    /**
     * Set Definition value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountModelDefinition $definition
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountProductModel
     */
    public function setDefinition(?\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountModelDefinition $definition = null): self
    {
        if (is_null($definition) || (is_array($definition) && empty($definition))) {
            unset($this->Definition);
        } else {
            $this->Definition = $definition;
        }
        
        return $this;
    }
    /**
     * Get IsDefault value
     * @return bool|null
     */
    public function getIsDefault(): ?bool
    {
        return $this->IsDefault;
    }
    /**
     * Set IsDefault value
     * @param bool $isDefault
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountProductModel
     */
    public function setIsDefault(?bool $isDefault = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isDefault) && !is_bool($isDefault)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isDefault, true), gettype($isDefault)), __LINE__);
        }
        $this->IsDefault = $isDefault;
        
        return $this;
    }
    /**
     * Get ModelId value
     * @return int|null
     */
    public function getModelId(): ?int
    {
        return $this->ModelId;
    }
    /**
     * Set ModelId value
     * @param int $modelId
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountProductModel
     */
    public function setModelId(?int $modelId = null): self
    {
        // validation for constraint: int
        if (!is_null($modelId) && !(is_int($modelId) || ctype_digit($modelId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($modelId, true), gettype($modelId)), __LINE__);
        }
        $this->ModelId = $modelId;
        
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
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountProductModel
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
     * Get ProductXmlStructure value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getProductXmlStructure(): ?string
    {
        return isset($this->ProductXmlStructure) ? $this->ProductXmlStructure : null;
    }
    /**
     * Set ProductXmlStructure value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $productXmlStructure
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountProductModel
     */
    public function setProductXmlStructure(?string $productXmlStructure = null): self
    {
        // validation for constraint: string
        if (!is_null($productXmlStructure) && !is_string($productXmlStructure)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($productXmlStructure, true), gettype($productXmlStructure)), __LINE__);
        }
        if (is_null($productXmlStructure) || (is_array($productXmlStructure) && empty($productXmlStructure))) {
            unset($this->ProductXmlStructure);
        } else {
            $this->ProductXmlStructure = $productXmlStructure;
        }
        
        return $this;
    }
    /**
     * Get VariationValueList value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfVariationDescription|null
     */
    public function getVariationValueList(): ?\SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfVariationDescription
    {
        return isset($this->VariationValueList) ? $this->VariationValueList : null;
    }
    /**
     * Set VariationValueList value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfVariationDescription $variationValueList
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountProductModel
     */
    public function setVariationValueList(?\SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfVariationDescription $variationValueList = null): self
    {
        if (is_null($variationValueList) || (is_array($variationValueList) && empty($variationValueList))) {
            unset($this->VariationValueList);
        } else {
            $this->VariationValueList = $variationValueList;
        }
        
        return $this;
    }
    /**
     * Get Version value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getVersion(): ?string
    {
        return isset($this->Version) ? $this->Version : null;
    }
    /**
     * Set Version value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $version
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountProductModel
     */
    public function setVersion(?string $version = null): self
    {
        // validation for constraint: string
        if (!is_null($version) && !is_string($version)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($version, true), gettype($version)), __LINE__);
        }
        if (is_null($version) || (is_array($version) && empty($version))) {
            unset($this->Version);
        } else {
            $this->Version = $version;
        }
        
        return $this;
    }
}
