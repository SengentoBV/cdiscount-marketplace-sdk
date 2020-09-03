<?php

namespace SengentoBV\CdiscountMarketplaceSdk\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SellerDealListMessage Structs
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:SellerDealListMessage
 * @package Cdiscount
 * @subpackage Structs
 */
class CdiscountSellerDealListMessage extends CdiscountServiceBaseAPIMessage
{
    /**
     * The Count
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $Count;
    /**
     * The CountByPage
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $CountByPage;
    /**
     * The Page
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $Page;
    /**
     * The SellerDealList
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfSellerDeal
     */
    public $SellerDealList;
    /**
     * Constructor method for SellerDealListMessage
     * @uses CdiscountSellerDealListMessage::setCount()
     * @uses CdiscountSellerDealListMessage::setCountByPage()
     * @uses CdiscountSellerDealListMessage::setPage()
     * @uses CdiscountSellerDealListMessage::setSellerDealList()
     * @param int $count
     * @param int $countByPage
     * @param int $page
     * @param \SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfSellerDeal $sellerDealList
     */
    public function __construct($count = null, $countByPage = null, $page = null, \SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfSellerDeal $sellerDealList = null)
    {
        $this
            ->setCount($count)
            ->setCountByPage($countByPage)
            ->setPage($page)
            ->setSellerDealList($sellerDealList);
    }
    /**
     * Get Count value
     * @return int|null
     */
    public function getCount()
    {
        return $this->Count;
    }
    /**
     * Set Count value
     * @param int $count
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountSellerDealListMessage
     */
    public function setCount($count = null)
    {
        // validation for constraint: int
        if (!is_null($count) && !(is_int($count) || ctype_digit($count))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($count, true), gettype($count)), __LINE__);
        }
        $this->Count = $count;
        return $this;
    }
    /**
     * Get CountByPage value
     * @return int|null
     */
    public function getCountByPage()
    {
        return $this->CountByPage;
    }
    /**
     * Set CountByPage value
     * @param int $countByPage
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountSellerDealListMessage
     */
    public function setCountByPage($countByPage = null)
    {
        // validation for constraint: int
        if (!is_null($countByPage) && !(is_int($countByPage) || ctype_digit($countByPage))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($countByPage, true), gettype($countByPage)), __LINE__);
        }
        $this->CountByPage = $countByPage;
        return $this;
    }
    /**
     * Get Page value
     * @return int|null
     */
    public function getPage()
    {
        return $this->Page;
    }
    /**
     * Set Page value
     * @param int $page
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountSellerDealListMessage
     */
    public function setPage($page = null)
    {
        // validation for constraint: int
        if (!is_null($page) && !(is_int($page) || ctype_digit($page))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($page, true), gettype($page)), __LINE__);
        }
        $this->Page = $page;
        return $this;
    }
    /**
     * Get SellerDealList value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfSellerDeal|null
     */
    public function getSellerDealList()
    {
        return isset($this->SellerDealList) ? $this->SellerDealList : null;
    }
    /**
     * Set SellerDealList value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfSellerDeal $sellerDealList
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountSellerDealListMessage
     */
    public function setSellerDealList(\SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfSellerDeal $sellerDealList = null)
    {
        if (is_null($sellerDealList) || (is_array($sellerDealList) && empty($sellerDealList))) {
            unset($this->SellerDealList);
        } else {
            $this->SellerDealList = $sellerDealList;
        }
        return $this;
    }
}
