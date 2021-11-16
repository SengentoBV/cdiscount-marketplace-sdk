<?php

declare(strict_types=1);

namespace SengentoBV\CdiscountMarketplaceSdk\Structs;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for OfferStateActionRequest Structs
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:OfferStateActionRequest
 * @package Cdiscount
 * @subpackage Structs
 */
class CdiscountOfferStateActionRequest extends AbstractStructBase
{
    /**
     * The Action
     * @var string|null
     */
    protected ?string $Action = null;
    /**
     * The SellerProductId
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $SellerProductId = null;
    /**
     * Constructor method for OfferStateActionRequest
     * @uses CdiscountOfferStateActionRequest::setAction()
     * @uses CdiscountOfferStateActionRequest::setSellerProductId()
     * @param string $action
     * @param string $sellerProductId
     */
    public function __construct(?string $action = null, ?string $sellerProductId = null)
    {
        $this
            ->setAction($action)
            ->setSellerProductId($sellerProductId);
    }
    /**
     * Get Action value
     * @return string|null
     */
    public function getAction(): ?string
    {
        return $this->Action;
    }
    /**
     * Set Action value
     * @uses \SengentoBV\CdiscountMarketplaceSdk\Enums\CdiscountOfferStateActionType::valueIsValid()
     * @uses \SengentoBV\CdiscountMarketplaceSdk\Enums\CdiscountOfferStateActionType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $action
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountOfferStateActionRequest
     */
    public function setAction(?string $action = null): self
    {
        // validation for constraint: enumeration
        if (!\SengentoBV\CdiscountMarketplaceSdk\Enums\CdiscountOfferStateActionType::valueIsValid($action)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \SengentoBV\CdiscountMarketplaceSdk\Enums\CdiscountOfferStateActionType', is_array($action) ? implode(', ', $action) : var_export($action, true), implode(', ', \SengentoBV\CdiscountMarketplaceSdk\Enums\CdiscountOfferStateActionType::getValidValues())), __LINE__);
        }
        $this->Action = $action;
        
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
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountOfferStateActionRequest
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
}
