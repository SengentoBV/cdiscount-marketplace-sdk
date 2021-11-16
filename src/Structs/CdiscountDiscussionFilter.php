<?php

declare(strict_types=1);

namespace SengentoBV\CdiscountMarketplaceSdk\Structs;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DiscussionFilter Structs
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:DiscussionFilter
 * @package Cdiscount
 * @subpackage Structs
 */
class CdiscountDiscussionFilter extends CdiscountDiscussionFilterBase
{
    /**
     * The DiscussionType
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $DiscussionType = null;
    /**
     * The OrderNumberList
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfstring|null
     */
    protected ?\SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfstring $OrderNumberList = null;
    /**
     * The ProductEanList
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfstring|null
     */
    protected ?\SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfstring $ProductEanList = null;
    /**
     * The ProductSellerReferenceList
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfstring|null
     */
    protected ?\SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfstring $ProductSellerReferenceList = null;
    /**
     * Constructor method for DiscussionFilter
     * @uses CdiscountDiscussionFilter::setDiscussionType()
     * @uses CdiscountDiscussionFilter::setOrderNumberList()
     * @uses CdiscountDiscussionFilter::setProductEanList()
     * @uses CdiscountDiscussionFilter::setProductSellerReferenceList()
     * @param string $discussionType
     * @param \SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfstring $orderNumberList
     * @param \SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfstring $productEanList
     * @param \SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfstring $productSellerReferenceList
     */
    public function __construct(?string $discussionType = null, ?\SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfstring $orderNumberList = null, ?\SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfstring $productEanList = null, ?\SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfstring $productSellerReferenceList = null)
    {
        $this
            ->setDiscussionType($discussionType)
            ->setOrderNumberList($orderNumberList)
            ->setProductEanList($productEanList)
            ->setProductSellerReferenceList($productSellerReferenceList);
    }
    /**
     * Get DiscussionType value
     * @return string|null
     */
    public function getDiscussionType(): ?string
    {
        return $this->DiscussionType;
    }
    /**
     * Set DiscussionType value
     * @uses \SengentoBV\CdiscountMarketplaceSdk\Enums\CdiscountDiscussionTypeFilter::valueIsValid()
     * @uses \SengentoBV\CdiscountMarketplaceSdk\Enums\CdiscountDiscussionTypeFilter::getValidValues()
     * @throws InvalidArgumentException
     * @param string $discussionType
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountDiscussionFilter
     */
    public function setDiscussionType(?string $discussionType = null): self
    {
        // validation for constraint: enumeration
        if (!\SengentoBV\CdiscountMarketplaceSdk\Enums\CdiscountDiscussionTypeFilter::valueIsValid($discussionType)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \SengentoBV\CdiscountMarketplaceSdk\Enums\CdiscountDiscussionTypeFilter', is_array($discussionType) ? implode(', ', $discussionType) : var_export($discussionType, true), implode(', ', \SengentoBV\CdiscountMarketplaceSdk\Enums\CdiscountDiscussionTypeFilter::getValidValues())), __LINE__);
        }
        $this->DiscussionType = $discussionType;
        
        return $this;
    }
    /**
     * Get OrderNumberList value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfstring|null
     */
    public function getOrderNumberList(): ?\SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfstring
    {
        return isset($this->OrderNumberList) ? $this->OrderNumberList : null;
    }
    /**
     * Set OrderNumberList value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfstring $orderNumberList
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountDiscussionFilter
     */
    public function setOrderNumberList(?\SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfstring $orderNumberList = null): self
    {
        if (is_null($orderNumberList) || (is_array($orderNumberList) && empty($orderNumberList))) {
            unset($this->OrderNumberList);
        } else {
            $this->OrderNumberList = $orderNumberList;
        }
        
        return $this;
    }
    /**
     * Get ProductEanList value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfstring|null
     */
    public function getProductEanList(): ?\SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfstring
    {
        return isset($this->ProductEanList) ? $this->ProductEanList : null;
    }
    /**
     * Set ProductEanList value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfstring $productEanList
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountDiscussionFilter
     */
    public function setProductEanList(?\SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfstring $productEanList = null): self
    {
        if (is_null($productEanList) || (is_array($productEanList) && empty($productEanList))) {
            unset($this->ProductEanList);
        } else {
            $this->ProductEanList = $productEanList;
        }
        
        return $this;
    }
    /**
     * Get ProductSellerReferenceList value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfstring|null
     */
    public function getProductSellerReferenceList(): ?\SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfstring
    {
        return isset($this->ProductSellerReferenceList) ? $this->ProductSellerReferenceList : null;
    }
    /**
     * Set ProductSellerReferenceList value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfstring $productSellerReferenceList
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountDiscussionFilter
     */
    public function setProductSellerReferenceList(?\SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfstring $productSellerReferenceList = null): self
    {
        if (is_null($productSellerReferenceList) || (is_array($productSellerReferenceList) && empty($productSellerReferenceList))) {
            unset($this->ProductSellerReferenceList);
        } else {
            $this->ProductSellerReferenceList = $productSellerReferenceList;
        }
        
        return $this;
    }
}
