<?php

declare(strict_types=1);

namespace SengentoBV\CdiscountMarketplaceSdk\Structs;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AssociatedOrderInfo Structs
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:AssociatedOrderInfo
 * @package Cdiscount
 * @subpackage Structs
 */
class CdiscountAssociatedOrderInfo extends AbstractStructBase
{
    /**
     * The AssociatedSku
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $AssociatedSku = null;
    /**
     * The CustomerMail
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $CustomerMail = null;
    /**
     * The CustomerPhone
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $CustomerPhone = null;
    /**
     * The OrderNumber
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $OrderNumber = null;
    /**
     * The OrderState
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $OrderState = null;
    /**
     * The ProductSheetUrl
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $ProductSheetUrl = null;
    /**
     * The RealDeliveryDate
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $RealDeliveryDate = null;
    /**
     * The ServiceOrderNumber
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $ServiceOrderNumber = null;
    /**
     * The ShippingAddress
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountAddress|null
     */
    protected ?\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountAddress $ShippingAddress = null;
    /**
     * The Sku
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $Sku = null;
    /**
     * Constructor method for AssociatedOrderInfo
     * @uses CdiscountAssociatedOrderInfo::setAssociatedSku()
     * @uses CdiscountAssociatedOrderInfo::setCustomerMail()
     * @uses CdiscountAssociatedOrderInfo::setCustomerPhone()
     * @uses CdiscountAssociatedOrderInfo::setOrderNumber()
     * @uses CdiscountAssociatedOrderInfo::setOrderState()
     * @uses CdiscountAssociatedOrderInfo::setProductSheetUrl()
     * @uses CdiscountAssociatedOrderInfo::setRealDeliveryDate()
     * @uses CdiscountAssociatedOrderInfo::setServiceOrderNumber()
     * @uses CdiscountAssociatedOrderInfo::setShippingAddress()
     * @uses CdiscountAssociatedOrderInfo::setSku()
     * @param string $associatedSku
     * @param string $customerMail
     * @param string $customerPhone
     * @param string $orderNumber
     * @param string $orderState
     * @param string $productSheetUrl
     * @param string $realDeliveryDate
     * @param string $serviceOrderNumber
     * @param \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountAddress $shippingAddress
     * @param string $sku
     */
    public function __construct(?string $associatedSku = null, ?string $customerMail = null, ?string $customerPhone = null, ?string $orderNumber = null, ?string $orderState = null, ?string $productSheetUrl = null, ?string $realDeliveryDate = null, ?string $serviceOrderNumber = null, ?\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountAddress $shippingAddress = null, ?string $sku = null)
    {
        $this
            ->setAssociatedSku($associatedSku)
            ->setCustomerMail($customerMail)
            ->setCustomerPhone($customerPhone)
            ->setOrderNumber($orderNumber)
            ->setOrderState($orderState)
            ->setProductSheetUrl($productSheetUrl)
            ->setRealDeliveryDate($realDeliveryDate)
            ->setServiceOrderNumber($serviceOrderNumber)
            ->setShippingAddress($shippingAddress)
            ->setSku($sku);
    }
    /**
     * Get AssociatedSku value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getAssociatedSku(): ?string
    {
        return isset($this->AssociatedSku) ? $this->AssociatedSku : null;
    }
    /**
     * Set AssociatedSku value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $associatedSku
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountAssociatedOrderInfo
     */
    public function setAssociatedSku(?string $associatedSku = null): self
    {
        // validation for constraint: string
        if (!is_null($associatedSku) && !is_string($associatedSku)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($associatedSku, true), gettype($associatedSku)), __LINE__);
        }
        if (is_null($associatedSku) || (is_array($associatedSku) && empty($associatedSku))) {
            unset($this->AssociatedSku);
        } else {
            $this->AssociatedSku = $associatedSku;
        }
        
        return $this;
    }
    /**
     * Get CustomerMail value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getCustomerMail(): ?string
    {
        return isset($this->CustomerMail) ? $this->CustomerMail : null;
    }
    /**
     * Set CustomerMail value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $customerMail
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountAssociatedOrderInfo
     */
    public function setCustomerMail(?string $customerMail = null): self
    {
        // validation for constraint: string
        if (!is_null($customerMail) && !is_string($customerMail)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($customerMail, true), gettype($customerMail)), __LINE__);
        }
        if (is_null($customerMail) || (is_array($customerMail) && empty($customerMail))) {
            unset($this->CustomerMail);
        } else {
            $this->CustomerMail = $customerMail;
        }
        
        return $this;
    }
    /**
     * Get CustomerPhone value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getCustomerPhone(): ?string
    {
        return isset($this->CustomerPhone) ? $this->CustomerPhone : null;
    }
    /**
     * Set CustomerPhone value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $customerPhone
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountAssociatedOrderInfo
     */
    public function setCustomerPhone(?string $customerPhone = null): self
    {
        // validation for constraint: string
        if (!is_null($customerPhone) && !is_string($customerPhone)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($customerPhone, true), gettype($customerPhone)), __LINE__);
        }
        if (is_null($customerPhone) || (is_array($customerPhone) && empty($customerPhone))) {
            unset($this->CustomerPhone);
        } else {
            $this->CustomerPhone = $customerPhone;
        }
        
        return $this;
    }
    /**
     * Get OrderNumber value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getOrderNumber(): ?string
    {
        return isset($this->OrderNumber) ? $this->OrderNumber : null;
    }
    /**
     * Set OrderNumber value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $orderNumber
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountAssociatedOrderInfo
     */
    public function setOrderNumber(?string $orderNumber = null): self
    {
        // validation for constraint: string
        if (!is_null($orderNumber) && !is_string($orderNumber)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($orderNumber, true), gettype($orderNumber)), __LINE__);
        }
        if (is_null($orderNumber) || (is_array($orderNumber) && empty($orderNumber))) {
            unset($this->OrderNumber);
        } else {
            $this->OrderNumber = $orderNumber;
        }
        
        return $this;
    }
    /**
     * Get OrderState value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getOrderState(): ?string
    {
        return isset($this->OrderState) ? $this->OrderState : null;
    }
    /**
     * Set OrderState value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @uses \SengentoBV\CdiscountMarketplaceSdk\Enums\CdiscountOrderStateEnum::valueIsValid()
     * @uses \SengentoBV\CdiscountMarketplaceSdk\Enums\CdiscountOrderStateEnum::getValidValues()
     * @throws InvalidArgumentException
     * @param string $orderState
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountAssociatedOrderInfo
     */
    public function setOrderState(?string $orderState = null): self
    {
        // validation for constraint: enumeration
        if (!\SengentoBV\CdiscountMarketplaceSdk\Enums\CdiscountOrderStateEnum::valueIsValid($orderState)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \SengentoBV\CdiscountMarketplaceSdk\Enums\CdiscountOrderStateEnum', is_array($orderState) ? implode(', ', $orderState) : var_export($orderState, true), implode(', ', \SengentoBV\CdiscountMarketplaceSdk\Enums\CdiscountOrderStateEnum::getValidValues())), __LINE__);
        }
        if (is_null($orderState) || (is_array($orderState) && empty($orderState))) {
            unset($this->OrderState);
        } else {
            $this->OrderState = $orderState;
        }
        
        return $this;
    }
    /**
     * Get ProductSheetUrl value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getProductSheetUrl(): ?string
    {
        return isset($this->ProductSheetUrl) ? $this->ProductSheetUrl : null;
    }
    /**
     * Set ProductSheetUrl value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $productSheetUrl
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountAssociatedOrderInfo
     */
    public function setProductSheetUrl(?string $productSheetUrl = null): self
    {
        // validation for constraint: string
        if (!is_null($productSheetUrl) && !is_string($productSheetUrl)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($productSheetUrl, true), gettype($productSheetUrl)), __LINE__);
        }
        if (is_null($productSheetUrl) || (is_array($productSheetUrl) && empty($productSheetUrl))) {
            unset($this->ProductSheetUrl);
        } else {
            $this->ProductSheetUrl = $productSheetUrl;
        }
        
        return $this;
    }
    /**
     * Get RealDeliveryDate value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getRealDeliveryDate(): ?string
    {
        return isset($this->RealDeliveryDate) ? $this->RealDeliveryDate : null;
    }
    /**
     * Set RealDeliveryDate value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $realDeliveryDate
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountAssociatedOrderInfo
     */
    public function setRealDeliveryDate(?string $realDeliveryDate = null): self
    {
        // validation for constraint: string
        if (!is_null($realDeliveryDate) && !is_string($realDeliveryDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($realDeliveryDate, true), gettype($realDeliveryDate)), __LINE__);
        }
        if (is_null($realDeliveryDate) || (is_array($realDeliveryDate) && empty($realDeliveryDate))) {
            unset($this->RealDeliveryDate);
        } else {
            $this->RealDeliveryDate = $realDeliveryDate;
        }
        
        return $this;
    }
    /**
     * Get ServiceOrderNumber value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getServiceOrderNumber(): ?string
    {
        return isset($this->ServiceOrderNumber) ? $this->ServiceOrderNumber : null;
    }
    /**
     * Set ServiceOrderNumber value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $serviceOrderNumber
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountAssociatedOrderInfo
     */
    public function setServiceOrderNumber(?string $serviceOrderNumber = null): self
    {
        // validation for constraint: string
        if (!is_null($serviceOrderNumber) && !is_string($serviceOrderNumber)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($serviceOrderNumber, true), gettype($serviceOrderNumber)), __LINE__);
        }
        if (is_null($serviceOrderNumber) || (is_array($serviceOrderNumber) && empty($serviceOrderNumber))) {
            unset($this->ServiceOrderNumber);
        } else {
            $this->ServiceOrderNumber = $serviceOrderNumber;
        }
        
        return $this;
    }
    /**
     * Get ShippingAddress value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountAddress|null
     */
    public function getShippingAddress(): ?\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountAddress
    {
        return isset($this->ShippingAddress) ? $this->ShippingAddress : null;
    }
    /**
     * Set ShippingAddress value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountAddress $shippingAddress
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountAssociatedOrderInfo
     */
    public function setShippingAddress(?\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountAddress $shippingAddress = null): self
    {
        if (is_null($shippingAddress) || (is_array($shippingAddress) && empty($shippingAddress))) {
            unset($this->ShippingAddress);
        } else {
            $this->ShippingAddress = $shippingAddress;
        }
        
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
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountAssociatedOrderInfo
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
}
