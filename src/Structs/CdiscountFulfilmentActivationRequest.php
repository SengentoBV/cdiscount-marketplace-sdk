<?php

declare(strict_types=1);

namespace SengentoBV\CdiscountMarketplaceSdk\Structs;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FulfilmentActivationRequest Structs
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:FulfilmentActivationRequest
 * @package Cdiscount
 * @subpackage Structs
 */
class CdiscountFulfilmentActivationRequest extends AbstractStructBase
{
    /**
     * The ProductList
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfProductActivationData|null
     */
    protected ?\SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfProductActivationData $ProductList = null;
    /**
     * Constructor method for FulfilmentActivationRequest
     * @uses CdiscountFulfilmentActivationRequest::setProductList()
     * @param \SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfProductActivationData $productList
     */
    public function __construct(?\SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfProductActivationData $productList = null)
    {
        $this
            ->setProductList($productList);
    }
    /**
     * Get ProductList value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfProductActivationData|null
     */
    public function getProductList(): ?\SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfProductActivationData
    {
        return isset($this->ProductList) ? $this->ProductList : null;
    }
    /**
     * Set ProductList value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfProductActivationData $productList
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountFulfilmentActivationRequest
     */
    public function setProductList(?\SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfProductActivationData $productList = null): self
    {
        if (is_null($productList) || (is_array($productList) && empty($productList))) {
            unset($this->ProductList);
        } else {
            $this->ProductList = $productList;
        }
        
        return $this;
    }
}
