<?php

declare(strict_types=1);

namespace SengentoBV\CdiscountMarketplaceSdk\Structs;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for IdentifierRequest Structs
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:IdentifierRequest
 * @package Cdiscount
 * @subpackage Structs
 */
class CdiscountIdentifierRequest extends AbstractStructBase
{
    /**
     * The IdentifierType
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $IdentifierType = null;
    /**
     * The ValueList
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfstring|null
     */
    protected ?\SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfstring $ValueList = null;
    /**
     * Constructor method for IdentifierRequest
     * @uses CdiscountIdentifierRequest::setIdentifierType()
     * @uses CdiscountIdentifierRequest::setValueList()
     * @param string $identifierType
     * @param \SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfstring $valueList
     */
    public function __construct(?string $identifierType = null, ?\SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfstring $valueList = null)
    {
        $this
            ->setIdentifierType($identifierType)
            ->setValueList($valueList);
    }
    /**
     * Get IdentifierType value
     * @return string|null
     */
    public function getIdentifierType(): ?string
    {
        return $this->IdentifierType;
    }
    /**
     * Set IdentifierType value
     * @uses \SengentoBV\CdiscountMarketplaceSdk\Enums\CdiscountIdentifierTypeEnum::valueIsValid()
     * @uses \SengentoBV\CdiscountMarketplaceSdk\Enums\CdiscountIdentifierTypeEnum::getValidValues()
     * @throws InvalidArgumentException
     * @param string $identifierType
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountIdentifierRequest
     */
    public function setIdentifierType(?string $identifierType = null): self
    {
        // validation for constraint: enumeration
        if (!\SengentoBV\CdiscountMarketplaceSdk\Enums\CdiscountIdentifierTypeEnum::valueIsValid($identifierType)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \SengentoBV\CdiscountMarketplaceSdk\Enums\CdiscountIdentifierTypeEnum', is_array($identifierType) ? implode(', ', $identifierType) : var_export($identifierType, true), implode(', ', \SengentoBV\CdiscountMarketplaceSdk\Enums\CdiscountIdentifierTypeEnum::getValidValues())), __LINE__);
        }
        $this->IdentifierType = $identifierType;
        
        return $this;
    }
    /**
     * Get ValueList value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfstring|null
     */
    public function getValueList(): ?\SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfstring
    {
        return isset($this->ValueList) ? $this->ValueList : null;
    }
    /**
     * Set ValueList value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfstring $valueList
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountIdentifierRequest
     */
    public function setValueList(?\SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfstring $valueList = null): self
    {
        if (is_null($valueList) || (is_array($valueList) && empty($valueList))) {
            unset($this->ValueList);
        } else {
            $this->ValueList = $valueList;
        }
        
        return $this;
    }
}
