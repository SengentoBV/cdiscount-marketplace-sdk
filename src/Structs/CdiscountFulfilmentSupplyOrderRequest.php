<?php

namespace SengentoBV\CdiscountMarketplaceSdk\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FulfilmentSupplyOrderRequest Structs
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:FulfilmentSupplyOrderRequest
 * @package Cdiscount
 * @subpackage Structs
 */
class CdiscountFulfilmentSupplyOrderRequest extends AbstractStructBase
{
    /**
     * The ProductList
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var \SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfFulfilmentProductDescription
     */
    public $ProductList;
    /**
     * Constructor method for FulfilmentSupplyOrderRequest
     * @uses CdiscountFulfilmentSupplyOrderRequest::setProductList()
     * @param \SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfFulfilmentProductDescription $productList
     */
    public function __construct(\SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfFulfilmentProductDescription $productList = null)
    {
        $this
            ->setProductList($productList);
    }
    /**
     * Get ProductList value
     * @return \SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfFulfilmentProductDescription|null
     */
    public function getProductList()
    {
        return $this->ProductList;
    }
    /**
     * Set ProductList value
     * @param \SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfFulfilmentProductDescription $productList
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountFulfilmentSupplyOrderRequest
     */
    public function setProductList(\SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfFulfilmentProductDescription $productList = null)
    {
        $this->ProductList = $productList;
        return $this;
    }
}
