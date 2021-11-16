<?php

declare(strict_types=1);

namespace SengentoBV\CdiscountMarketplaceSdk\Structs;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for OrderLine Structs
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:OrderLine
 * @package Cdiscount
 * @subpackage Structs
 */
class CdiscountOrderLine extends AbstractStructBase
{
    /**
     * The AcceptationState
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $AcceptationState = null;
    /**
     * The CategoryCode
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $CategoryCode = null;
    /**
     * The DeliveryDateMax
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $DeliveryDateMax = null;
    /**
     * The DeliveryDateMin
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $DeliveryDateMin = null;
    /**
     * The HasClaim
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $HasClaim = null;
    /**
     * The InitialPrice
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var float|null
     */
    protected ?float $InitialPrice = null;
    /**
     * The IsCDAV
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $IsCDAV = null;
    /**
     * The IsNegotiated
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var bool|null
     */
    protected ?bool $IsNegotiated = null;
    /**
     * The IsProductEanGenerated
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $IsProductEanGenerated = null;
    /**
     * The Name
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $Name = null;
    /**
     * The OrderLineChildList
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfOrderLine|null
     */
    protected ?\SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfOrderLine $OrderLineChildList = null;
    /**
     * The ProductCondition
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $ProductCondition = null;
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
     * The PurchasePrice
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var float|null
     */
    protected ?float $PurchasePrice = null;
    /**
     * The Quantity
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $Quantity = null;
    /**
     * The RefundShippingCharges
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var bool|null
     */
    protected ?bool $RefundShippingCharges = null;
    /**
     * The RowId
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $RowId = null;
    /**
     * The SellerProductId
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $SellerProductId = null;
    /**
     * The ShippingDateMax
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $ShippingDateMax = null;
    /**
     * The ShippingDateMin
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $ShippingDateMin = null;
    /**
     * The Sku
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $Sku = null;
    /**
     * The SkuParent
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $SkuParent = null;
    /**
     * The UnitAdditionalShippingCharges
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var float|null
     */
    protected ?float $UnitAdditionalShippingCharges = null;
    /**
     * The UnitShippingCharges
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var float|null
     */
    protected ?float $UnitShippingCharges = null;
    /**
     * Constructor method for OrderLine
     * @uses CdiscountOrderLine::setAcceptationState()
     * @uses CdiscountOrderLine::setCategoryCode()
     * @uses CdiscountOrderLine::setDeliveryDateMax()
     * @uses CdiscountOrderLine::setDeliveryDateMin()
     * @uses CdiscountOrderLine::setHasClaim()
     * @uses CdiscountOrderLine::setInitialPrice()
     * @uses CdiscountOrderLine::setIsCDAV()
     * @uses CdiscountOrderLine::setIsNegotiated()
     * @uses CdiscountOrderLine::setIsProductEanGenerated()
     * @uses CdiscountOrderLine::setName()
     * @uses CdiscountOrderLine::setOrderLineChildList()
     * @uses CdiscountOrderLine::setProductCondition()
     * @uses CdiscountOrderLine::setProductEan()
     * @uses CdiscountOrderLine::setProductId()
     * @uses CdiscountOrderLine::setPurchasePrice()
     * @uses CdiscountOrderLine::setQuantity()
     * @uses CdiscountOrderLine::setRefundShippingCharges()
     * @uses CdiscountOrderLine::setRowId()
     * @uses CdiscountOrderLine::setSellerProductId()
     * @uses CdiscountOrderLine::setShippingDateMax()
     * @uses CdiscountOrderLine::setShippingDateMin()
     * @uses CdiscountOrderLine::setSku()
     * @uses CdiscountOrderLine::setSkuParent()
     * @uses CdiscountOrderLine::setUnitAdditionalShippingCharges()
     * @uses CdiscountOrderLine::setUnitShippingCharges()
     * @param string $acceptationState
     * @param string $categoryCode
     * @param string $deliveryDateMax
     * @param string $deliveryDateMin
     * @param bool $hasClaim
     * @param float $initialPrice
     * @param bool $isCDAV
     * @param bool $isNegotiated
     * @param bool $isProductEanGenerated
     * @param string $name
     * @param \SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfOrderLine $orderLineChildList
     * @param string $productCondition
     * @param string $productEan
     * @param string $productId
     * @param float $purchasePrice
     * @param int $quantity
     * @param bool $refundShippingCharges
     * @param int $rowId
     * @param string $sellerProductId
     * @param string $shippingDateMax
     * @param string $shippingDateMin
     * @param string $sku
     * @param string $skuParent
     * @param float $unitAdditionalShippingCharges
     * @param float $unitShippingCharges
     */
    public function __construct(?string $acceptationState = null, ?string $categoryCode = null, ?string $deliveryDateMax = null, ?string $deliveryDateMin = null, ?bool $hasClaim = null, ?float $initialPrice = null, ?bool $isCDAV = null, ?bool $isNegotiated = null, ?bool $isProductEanGenerated = null, ?string $name = null, ?\SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfOrderLine $orderLineChildList = null, ?string $productCondition = null, ?string $productEan = null, ?string $productId = null, ?float $purchasePrice = null, ?int $quantity = null, ?bool $refundShippingCharges = null, ?int $rowId = null, ?string $sellerProductId = null, ?string $shippingDateMax = null, ?string $shippingDateMin = null, ?string $sku = null, ?string $skuParent = null, ?float $unitAdditionalShippingCharges = null, ?float $unitShippingCharges = null)
    {
        $this
            ->setAcceptationState($acceptationState)
            ->setCategoryCode($categoryCode)
            ->setDeliveryDateMax($deliveryDateMax)
            ->setDeliveryDateMin($deliveryDateMin)
            ->setHasClaim($hasClaim)
            ->setInitialPrice($initialPrice)
            ->setIsCDAV($isCDAV)
            ->setIsNegotiated($isNegotiated)
            ->setIsProductEanGenerated($isProductEanGenerated)
            ->setName($name)
            ->setOrderLineChildList($orderLineChildList)
            ->setProductCondition($productCondition)
            ->setProductEan($productEan)
            ->setProductId($productId)
            ->setPurchasePrice($purchasePrice)
            ->setQuantity($quantity)
            ->setRefundShippingCharges($refundShippingCharges)
            ->setRowId($rowId)
            ->setSellerProductId($sellerProductId)
            ->setShippingDateMax($shippingDateMax)
            ->setShippingDateMin($shippingDateMin)
            ->setSku($sku)
            ->setSkuParent($skuParent)
            ->setUnitAdditionalShippingCharges($unitAdditionalShippingCharges)
            ->setUnitShippingCharges($unitShippingCharges);
    }
    /**
     * Get AcceptationState value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getAcceptationState(): ?string
    {
        return isset($this->AcceptationState) ? $this->AcceptationState : null;
    }
    /**
     * Set AcceptationState value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @uses \SengentoBV\CdiscountMarketplaceSdk\Enums\CdiscountAcceptationStateEnum::valueIsValid()
     * @uses \SengentoBV\CdiscountMarketplaceSdk\Enums\CdiscountAcceptationStateEnum::getValidValues()
     * @throws InvalidArgumentException
     * @param string $acceptationState
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountOrderLine
     */
    public function setAcceptationState(?string $acceptationState = null): self
    {
        // validation for constraint: enumeration
        if (!\SengentoBV\CdiscountMarketplaceSdk\Enums\CdiscountAcceptationStateEnum::valueIsValid($acceptationState)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \SengentoBV\CdiscountMarketplaceSdk\Enums\CdiscountAcceptationStateEnum', is_array($acceptationState) ? implode(', ', $acceptationState) : var_export($acceptationState, true), implode(', ', \SengentoBV\CdiscountMarketplaceSdk\Enums\CdiscountAcceptationStateEnum::getValidValues())), __LINE__);
        }
        if (is_null($acceptationState) || (is_array($acceptationState) && empty($acceptationState))) {
            unset($this->AcceptationState);
        } else {
            $this->AcceptationState = $acceptationState;
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
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountOrderLine
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
     * Get DeliveryDateMax value
     * @return string|null
     */
    public function getDeliveryDateMax(): ?string
    {
        return $this->DeliveryDateMax;
    }
    /**
     * Set DeliveryDateMax value
     * @param string $deliveryDateMax
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountOrderLine
     */
    public function setDeliveryDateMax(?string $deliveryDateMax = null): self
    {
        // validation for constraint: string
        if (!is_null($deliveryDateMax) && !is_string($deliveryDateMax)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($deliveryDateMax, true), gettype($deliveryDateMax)), __LINE__);
        }
        $this->DeliveryDateMax = $deliveryDateMax;
        
        return $this;
    }
    /**
     * Get DeliveryDateMin value
     * @return string|null
     */
    public function getDeliveryDateMin(): ?string
    {
        return $this->DeliveryDateMin;
    }
    /**
     * Set DeliveryDateMin value
     * @param string $deliveryDateMin
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountOrderLine
     */
    public function setDeliveryDateMin(?string $deliveryDateMin = null): self
    {
        // validation for constraint: string
        if (!is_null($deliveryDateMin) && !is_string($deliveryDateMin)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($deliveryDateMin, true), gettype($deliveryDateMin)), __LINE__);
        }
        $this->DeliveryDateMin = $deliveryDateMin;
        
        return $this;
    }
    /**
     * Get HasClaim value
     * @return bool|null
     */
    public function getHasClaim(): ?bool
    {
        return $this->HasClaim;
    }
    /**
     * Set HasClaim value
     * @param bool $hasClaim
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountOrderLine
     */
    public function setHasClaim(?bool $hasClaim = null): self
    {
        // validation for constraint: boolean
        if (!is_null($hasClaim) && !is_bool($hasClaim)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($hasClaim, true), gettype($hasClaim)), __LINE__);
        }
        $this->HasClaim = $hasClaim;
        
        return $this;
    }
    /**
     * Get InitialPrice value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return float|null
     */
    public function getInitialPrice(): ?float
    {
        return isset($this->InitialPrice) ? $this->InitialPrice : null;
    }
    /**
     * Set InitialPrice value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param float $initialPrice
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountOrderLine
     */
    public function setInitialPrice(?float $initialPrice = null): self
    {
        // validation for constraint: float
        if (!is_null($initialPrice) && !(is_float($initialPrice) || is_numeric($initialPrice))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($initialPrice, true), gettype($initialPrice)), __LINE__);
        }
        if (is_null($initialPrice) || (is_array($initialPrice) && empty($initialPrice))) {
            unset($this->InitialPrice);
        } else {
            $this->InitialPrice = $initialPrice;
        }
        
        return $this;
    }
    /**
     * Get IsCDAV value
     * @return bool|null
     */
    public function getIsCDAV(): ?bool
    {
        return $this->IsCDAV;
    }
    /**
     * Set IsCDAV value
     * @param bool $isCDAV
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountOrderLine
     */
    public function setIsCDAV(?bool $isCDAV = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isCDAV) && !is_bool($isCDAV)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isCDAV, true), gettype($isCDAV)), __LINE__);
        }
        $this->IsCDAV = $isCDAV;
        
        return $this;
    }
    /**
     * Get IsNegotiated value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return bool|null
     */
    public function getIsNegotiated(): ?bool
    {
        return isset($this->IsNegotiated) ? $this->IsNegotiated : null;
    }
    /**
     * Set IsNegotiated value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param bool $isNegotiated
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountOrderLine
     */
    public function setIsNegotiated(?bool $isNegotiated = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isNegotiated) && !is_bool($isNegotiated)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isNegotiated, true), gettype($isNegotiated)), __LINE__);
        }
        if (is_null($isNegotiated) || (is_array($isNegotiated) && empty($isNegotiated))) {
            unset($this->IsNegotiated);
        } else {
            $this->IsNegotiated = $isNegotiated;
        }
        
        return $this;
    }
    /**
     * Get IsProductEanGenerated value
     * @return bool|null
     */
    public function getIsProductEanGenerated(): ?bool
    {
        return $this->IsProductEanGenerated;
    }
    /**
     * Set IsProductEanGenerated value
     * @param bool $isProductEanGenerated
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountOrderLine
     */
    public function setIsProductEanGenerated(?bool $isProductEanGenerated = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isProductEanGenerated) && !is_bool($isProductEanGenerated)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isProductEanGenerated, true), gettype($isProductEanGenerated)), __LINE__);
        }
        $this->IsProductEanGenerated = $isProductEanGenerated;
        
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
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountOrderLine
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
     * Get OrderLineChildList value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfOrderLine|null
     */
    public function getOrderLineChildList(): ?\SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfOrderLine
    {
        return isset($this->OrderLineChildList) ? $this->OrderLineChildList : null;
    }
    /**
     * Set OrderLineChildList value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfOrderLine $orderLineChildList
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountOrderLine
     */
    public function setOrderLineChildList(?\SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfOrderLine $orderLineChildList = null): self
    {
        if (is_null($orderLineChildList) || (is_array($orderLineChildList) && empty($orderLineChildList))) {
            unset($this->OrderLineChildList);
        } else {
            $this->OrderLineChildList = $orderLineChildList;
        }
        
        return $this;
    }
    /**
     * Get ProductCondition value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getProductCondition(): ?string
    {
        return isset($this->ProductCondition) ? $this->ProductCondition : null;
    }
    /**
     * Set ProductCondition value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @uses \SengentoBV\CdiscountMarketplaceSdk\Enums\CdiscountProductConditionEnum::valueIsValid()
     * @uses \SengentoBV\CdiscountMarketplaceSdk\Enums\CdiscountProductConditionEnum::getValidValues()
     * @throws InvalidArgumentException
     * @param string $productCondition
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountOrderLine
     */
    public function setProductCondition(?string $productCondition = null): self
    {
        // validation for constraint: enumeration
        if (!\SengentoBV\CdiscountMarketplaceSdk\Enums\CdiscountProductConditionEnum::valueIsValid($productCondition)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \SengentoBV\CdiscountMarketplaceSdk\Enums\CdiscountProductConditionEnum', is_array($productCondition) ? implode(', ', $productCondition) : var_export($productCondition, true), implode(', ', \SengentoBV\CdiscountMarketplaceSdk\Enums\CdiscountProductConditionEnum::getValidValues())), __LINE__);
        }
        if (is_null($productCondition) || (is_array($productCondition) && empty($productCondition))) {
            unset($this->ProductCondition);
        } else {
            $this->ProductCondition = $productCondition;
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
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountOrderLine
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
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountOrderLine
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
     * Get PurchasePrice value
     * @return float|null
     */
    public function getPurchasePrice(): ?float
    {
        return $this->PurchasePrice;
    }
    /**
     * Set PurchasePrice value
     * @param float $purchasePrice
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountOrderLine
     */
    public function setPurchasePrice(?float $purchasePrice = null): self
    {
        // validation for constraint: float
        if (!is_null($purchasePrice) && !(is_float($purchasePrice) || is_numeric($purchasePrice))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($purchasePrice, true), gettype($purchasePrice)), __LINE__);
        }
        $this->PurchasePrice = $purchasePrice;
        
        return $this;
    }
    /**
     * Get Quantity value
     * @return int|null
     */
    public function getQuantity(): ?int
    {
        return $this->Quantity;
    }
    /**
     * Set Quantity value
     * @param int $quantity
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountOrderLine
     */
    public function setQuantity(?int $quantity = null): self
    {
        // validation for constraint: int
        if (!is_null($quantity) && !(is_int($quantity) || ctype_digit($quantity))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($quantity, true), gettype($quantity)), __LINE__);
        }
        $this->Quantity = $quantity;
        
        return $this;
    }
    /**
     * Get RefundShippingCharges value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return bool|null
     */
    public function getRefundShippingCharges(): ?bool
    {
        return isset($this->RefundShippingCharges) ? $this->RefundShippingCharges : null;
    }
    /**
     * Set RefundShippingCharges value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param bool $refundShippingCharges
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountOrderLine
     */
    public function setRefundShippingCharges(?bool $refundShippingCharges = null): self
    {
        // validation for constraint: boolean
        if (!is_null($refundShippingCharges) && !is_bool($refundShippingCharges)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($refundShippingCharges, true), gettype($refundShippingCharges)), __LINE__);
        }
        if (is_null($refundShippingCharges) || (is_array($refundShippingCharges) && empty($refundShippingCharges))) {
            unset($this->RefundShippingCharges);
        } else {
            $this->RefundShippingCharges = $refundShippingCharges;
        }
        
        return $this;
    }
    /**
     * Get RowId value
     * @return int|null
     */
    public function getRowId(): ?int
    {
        return $this->RowId;
    }
    /**
     * Set RowId value
     * @param int $rowId
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountOrderLine
     */
    public function setRowId(?int $rowId = null): self
    {
        // validation for constraint: int
        if (!is_null($rowId) && !(is_int($rowId) || ctype_digit($rowId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($rowId, true), gettype($rowId)), __LINE__);
        }
        $this->RowId = $rowId;
        
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
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountOrderLine
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
     * Get ShippingDateMax value
     * @return string|null
     */
    public function getShippingDateMax(): ?string
    {
        return $this->ShippingDateMax;
    }
    /**
     * Set ShippingDateMax value
     * @param string $shippingDateMax
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountOrderLine
     */
    public function setShippingDateMax(?string $shippingDateMax = null): self
    {
        // validation for constraint: string
        if (!is_null($shippingDateMax) && !is_string($shippingDateMax)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($shippingDateMax, true), gettype($shippingDateMax)), __LINE__);
        }
        $this->ShippingDateMax = $shippingDateMax;
        
        return $this;
    }
    /**
     * Get ShippingDateMin value
     * @return string|null
     */
    public function getShippingDateMin(): ?string
    {
        return $this->ShippingDateMin;
    }
    /**
     * Set ShippingDateMin value
     * @param string $shippingDateMin
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountOrderLine
     */
    public function setShippingDateMin(?string $shippingDateMin = null): self
    {
        // validation for constraint: string
        if (!is_null($shippingDateMin) && !is_string($shippingDateMin)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($shippingDateMin, true), gettype($shippingDateMin)), __LINE__);
        }
        $this->ShippingDateMin = $shippingDateMin;
        
        return $this;
    }
    /**
     * Get Sku value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getSku(): ?string
    {
        return isset($this->Sku) ? $this->Sku : null;
    }
    /**
     * Set Sku value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $sku
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountOrderLine
     */
    public function setSku(?string $sku = null): self
    {
        // validation for constraint: string
        if (!is_null($sku) && !is_string($sku)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($sku, true), gettype($sku)), __LINE__);
        }
        if (is_null($sku) || (is_array($sku) && empty($sku))) {
            unset($this->Sku);
        } else {
            $this->Sku = $sku;
        }
        
        return $this;
    }
    /**
     * Get SkuParent value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getSkuParent(): ?string
    {
        return isset($this->SkuParent) ? $this->SkuParent : null;
    }
    /**
     * Set SkuParent value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $skuParent
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountOrderLine
     */
    public function setSkuParent(?string $skuParent = null): self
    {
        // validation for constraint: string
        if (!is_null($skuParent) && !is_string($skuParent)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($skuParent, true), gettype($skuParent)), __LINE__);
        }
        if (is_null($skuParent) || (is_array($skuParent) && empty($skuParent))) {
            unset($this->SkuParent);
        } else {
            $this->SkuParent = $skuParent;
        }
        
        return $this;
    }
    /**
     * Get UnitAdditionalShippingCharges value
     * @return float|null
     */
    public function getUnitAdditionalShippingCharges(): ?float
    {
        return $this->UnitAdditionalShippingCharges;
    }
    /**
     * Set UnitAdditionalShippingCharges value
     * @param float $unitAdditionalShippingCharges
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountOrderLine
     */
    public function setUnitAdditionalShippingCharges(?float $unitAdditionalShippingCharges = null): self
    {
        // validation for constraint: float
        if (!is_null($unitAdditionalShippingCharges) && !(is_float($unitAdditionalShippingCharges) || is_numeric($unitAdditionalShippingCharges))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($unitAdditionalShippingCharges, true), gettype($unitAdditionalShippingCharges)), __LINE__);
        }
        $this->UnitAdditionalShippingCharges = $unitAdditionalShippingCharges;
        
        return $this;
    }
    /**
     * Get UnitShippingCharges value
     * @return float|null
     */
    public function getUnitShippingCharges(): ?float
    {
        return $this->UnitShippingCharges;
    }
    /**
     * Set UnitShippingCharges value
     * @param float $unitShippingCharges
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountOrderLine
     */
    public function setUnitShippingCharges(?float $unitShippingCharges = null): self
    {
        // validation for constraint: float
        if (!is_null($unitShippingCharges) && !(is_float($unitShippingCharges) || is_numeric($unitShippingCharges))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($unitShippingCharges, true), gettype($unitShippingCharges)), __LINE__);
        }
        $this->UnitShippingCharges = $unitShippingCharges;
        
        return $this;
    }
}
