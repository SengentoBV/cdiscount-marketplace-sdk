<?php

declare(strict_types=1);

namespace SengentoBV\CdiscountMarketplaceSdk\Structs;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ValidateOrderLine Structs
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ValidateOrderLine
 * @package Cdiscount
 * @subpackage Structs
 */
class CdiscountValidateOrderLine extends AbstractStructBase
{
    /**
     * The AcceptationState
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $AcceptationState = null;
    /**
     * The ProductCondition
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $ProductCondition = null;
    /**
     * The SellerProductId
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $SellerProductId = null;
    /**
     * The TypeOfReturn
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $TypeOfReturn = null;
    /**
     * Constructor method for ValidateOrderLine
     * @uses CdiscountValidateOrderLine::setAcceptationState()
     * @uses CdiscountValidateOrderLine::setProductCondition()
     * @uses CdiscountValidateOrderLine::setSellerProductId()
     * @uses CdiscountValidateOrderLine::setTypeOfReturn()
     * @param string $acceptationState
     * @param string $productCondition
     * @param string $sellerProductId
     * @param string $typeOfReturn
     */
    public function __construct(?string $acceptationState = null, ?string $productCondition = null, ?string $sellerProductId = null, ?string $typeOfReturn = null)
    {
        $this
            ->setAcceptationState($acceptationState)
            ->setProductCondition($productCondition)
            ->setSellerProductId($sellerProductId)
            ->setTypeOfReturn($typeOfReturn);
    }
    /**
     * Get AcceptationState value
     * @return string|null
     */
    public function getAcceptationState(): ?string
    {
        return $this->AcceptationState;
    }
    /**
     * Set AcceptationState value
     * @uses \SengentoBV\CdiscountMarketplaceSdk\Enums\CdiscountAcceptationStateEnum::valueIsValid()
     * @uses \SengentoBV\CdiscountMarketplaceSdk\Enums\CdiscountAcceptationStateEnum::getValidValues()
     * @throws InvalidArgumentException
     * @param string $acceptationState
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountValidateOrderLine
     */
    public function setAcceptationState(?string $acceptationState = null): self
    {
        // validation for constraint: enumeration
        if (!\SengentoBV\CdiscountMarketplaceSdk\Enums\CdiscountAcceptationStateEnum::valueIsValid($acceptationState)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \SengentoBV\CdiscountMarketplaceSdk\Enums\CdiscountAcceptationStateEnum', is_array($acceptationState) ? implode(', ', $acceptationState) : var_export($acceptationState, true), implode(', ', \SengentoBV\CdiscountMarketplaceSdk\Enums\CdiscountAcceptationStateEnum::getValidValues())), __LINE__);
        }
        $this->AcceptationState = $acceptationState;
        
        return $this;
    }
    /**
     * Get ProductCondition value
     * @return string|null
     */
    public function getProductCondition(): ?string
    {
        return $this->ProductCondition;
    }
    /**
     * Set ProductCondition value
     * @uses \SengentoBV\CdiscountMarketplaceSdk\Enums\CdiscountProductConditionEnum::valueIsValid()
     * @uses \SengentoBV\CdiscountMarketplaceSdk\Enums\CdiscountProductConditionEnum::getValidValues()
     * @throws InvalidArgumentException
     * @param string $productCondition
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountValidateOrderLine
     */
    public function setProductCondition(?string $productCondition = null): self
    {
        // validation for constraint: enumeration
        if (!\SengentoBV\CdiscountMarketplaceSdk\Enums\CdiscountProductConditionEnum::valueIsValid($productCondition)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \SengentoBV\CdiscountMarketplaceSdk\Enums\CdiscountProductConditionEnum', is_array($productCondition) ? implode(', ', $productCondition) : var_export($productCondition, true), implode(', ', \SengentoBV\CdiscountMarketplaceSdk\Enums\CdiscountProductConditionEnum::getValidValues())), __LINE__);
        }
        $this->ProductCondition = $productCondition;
        
        return $this;
    }
    /**
     * Get SellerProductId value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getSellerProductId(): ?string
    {
        return isset($this->SellerProductId) ? $this->SellerProductId : null;
    }
    /**
     * Set SellerProductId value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $sellerProductId
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountValidateOrderLine
     */
    public function setSellerProductId(?string $sellerProductId = null): self
    {
        // validation for constraint: string
        if (!is_null($sellerProductId) && !is_string($sellerProductId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($sellerProductId, true), gettype($sellerProductId)), __LINE__);
        }
        if (is_null($sellerProductId) || (is_array($sellerProductId) && empty($sellerProductId))) {
            unset($this->SellerProductId);
        } else {
            $this->SellerProductId = $sellerProductId;
        }
        
        return $this;
    }
    /**
     * Get TypeOfReturn value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getTypeOfReturn(): ?string
    {
        return isset($this->TypeOfReturn) ? $this->TypeOfReturn : null;
    }
    /**
     * Set TypeOfReturn value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @uses \SengentoBV\CdiscountMarketplaceSdk\Enums\CdiscountAskingForReturnType::valueIsValid()
     * @uses \SengentoBV\CdiscountMarketplaceSdk\Enums\CdiscountAskingForReturnType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $typeOfReturn
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountValidateOrderLine
     */
    public function setTypeOfReturn(?string $typeOfReturn = null): self
    {
        // validation for constraint: enumeration
        if (!\SengentoBV\CdiscountMarketplaceSdk\Enums\CdiscountAskingForReturnType::valueIsValid($typeOfReturn)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \SengentoBV\CdiscountMarketplaceSdk\Enums\CdiscountAskingForReturnType', is_array($typeOfReturn) ? implode(', ', $typeOfReturn) : var_export($typeOfReturn, true), implode(', ', \SengentoBV\CdiscountMarketplaceSdk\Enums\CdiscountAskingForReturnType::getValidValues())), __LINE__);
        }
        if (is_null($typeOfReturn) || (is_array($typeOfReturn) && empty($typeOfReturn))) {
            unset($this->TypeOfReturn);
        } else {
            $this->TypeOfReturn = $typeOfReturn;
        }
        
        return $this;
    }
}
