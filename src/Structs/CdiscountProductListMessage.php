<?php

declare(strict_types=1);

namespace SengentoBV\CdiscountMarketplaceSdk\Structs;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ProductListMessage Structs
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ProductListMessage
 * @package Cdiscount
 * @subpackage Structs
 */
class CdiscountProductListMessage extends CdiscountServiceBaseAPIMessage
{
    /**
     * The ProductList
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfProduct|null
     */
    protected ?\SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfProduct $ProductList = null;
    /**
     * Constructor method for ProductListMessage
     * @uses CdiscountProductListMessage::setProductList()
     * @param \SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfProduct $productList
     */
    public function __construct(?\SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfProduct $productList = null)
    {
        $this
            ->setProductList($productList);
    }
    /**
     * Get ProductList value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfProduct|null
     */
    public function getProductList(): ?\SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfProduct
    {
        return isset($this->ProductList) ? $this->ProductList : null;
    }
    /**
     * Set ProductList value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfProduct $productList
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountProductListMessage
     */
    public function setProductList(?\SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfProduct $productList = null): self
    {
        if (is_null($productList) || (is_array($productList) && empty($productList))) {
            unset($this->ProductList);
        } else {
            $this->ProductList = $productList;
        }
        
        return $this;
    }
}
