<?php

namespace SengentoBV\CdiscountMarketplaceSdk\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SellerDealRequest Structs
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:SellerDealRequest
 * @package Cdiscount
 * @subpackage Structs
 */
class CdiscountSellerDealRequest extends AbstractStructBase
{
    /**
     * The Limit
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $Limit;
    /**
     * The Page
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $Page;
    /**
     * Constructor method for SellerDealRequest
     * @uses CdiscountSellerDealRequest::setLimit()
     * @uses CdiscountSellerDealRequest::setPage()
     * @param int $limit
     * @param int $page
     */
    public function __construct($limit = null, $page = null)
    {
        $this
            ->setLimit($limit)
            ->setPage($page);
    }
    /**
     * Get Limit value
     * @return int|null
     */
    public function getLimit()
    {
        return $this->Limit;
    }
    /**
     * Set Limit value
     * @param int $limit
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountSellerDealRequest
     */
    public function setLimit($limit = null)
    {
        // validation for constraint: int
        if (!is_null($limit) && !(is_int($limit) || ctype_digit($limit))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($limit, true), gettype($limit)), __LINE__);
        }
        $this->Limit = $limit;
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
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountSellerDealRequest
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
}
