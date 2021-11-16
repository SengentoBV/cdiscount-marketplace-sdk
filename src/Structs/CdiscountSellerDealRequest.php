<?php

declare(strict_types=1);

namespace SengentoBV\CdiscountMarketplaceSdk\Structs;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

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
     * @var int|null
     */
    protected ?int $Limit = null;
    /**
     * The Page
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $Page = null;
    /**
     * Constructor method for SellerDealRequest
     * @uses CdiscountSellerDealRequest::setLimit()
     * @uses CdiscountSellerDealRequest::setPage()
     * @param int $limit
     * @param int $page
     */
    public function __construct(?int $limit = null, ?int $page = null)
    {
        $this
            ->setLimit($limit)
            ->setPage($page);
    }
    /**
     * Get Limit value
     * @return int|null
     */
    public function getLimit(): ?int
    {
        return $this->Limit;
    }
    /**
     * Set Limit value
     * @param int $limit
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountSellerDealRequest
     */
    public function setLimit(?int $limit = null): self
    {
        // validation for constraint: int
        if (!is_null($limit) && !(is_int($limit) || ctype_digit($limit))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($limit, true), gettype($limit)), __LINE__);
        }
        $this->Limit = $limit;
        
        return $this;
    }
    /**
     * Get Page value
     * @return int|null
     */
    public function getPage(): ?int
    {
        return $this->Page;
    }
    /**
     * Set Page value
     * @param int $page
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountSellerDealRequest
     */
    public function setPage(?int $page = null): self
    {
        // validation for constraint: int
        if (!is_null($page) && !(is_int($page) || ctype_digit($page))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($page, true), gettype($page)), __LINE__);
        }
        $this->Page = $page;
        
        return $this;
    }
}
