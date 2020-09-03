<?php

namespace SengentoBV\CdiscountMarketplaceSdk\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CompetingOffer Structs
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:CompetingOffer
 * @package Cdiscount
 * @subpackage Structs
 */
class CdiscountCompetingOffer extends AbstractStructBase
{
    /**
     * The ExecutionResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountExecutionResult
     */
    public $ExecutionResult;
    /**
     * The Offers
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfOffer
     */
    public $Offers;
    /**
     * The Product
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountProduct
     */
    public $Product;
    /**
     * Constructor method for CompetingOffer
     * @uses CdiscountCompetingOffer::setExecutionResult()
     * @uses CdiscountCompetingOffer::setOffers()
     * @uses CdiscountCompetingOffer::setProduct()
     * @param \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountExecutionResult $executionResult
     * @param \SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfOffer $offers
     * @param \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountProduct $product
     */
    public function __construct(\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountExecutionResult $executionResult = null, \SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfOffer $offers = null, \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountProduct $product = null)
    {
        $this
            ->setExecutionResult($executionResult)
            ->setOffers($offers)
            ->setProduct($product);
    }
    /**
     * Get ExecutionResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountExecutionResult|null
     */
    public function getExecutionResult()
    {
        return isset($this->ExecutionResult) ? $this->ExecutionResult : null;
    }
    /**
     * Set ExecutionResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountExecutionResult $executionResult
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountCompetingOffer
     */
    public function setExecutionResult(\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountExecutionResult $executionResult = null)
    {
        if (is_null($executionResult) || (is_array($executionResult) && empty($executionResult))) {
            unset($this->ExecutionResult);
        } else {
            $this->ExecutionResult = $executionResult;
        }
        return $this;
    }
    /**
     * Get Offers value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfOffer|null
     */
    public function getOffers()
    {
        return isset($this->Offers) ? $this->Offers : null;
    }
    /**
     * Set Offers value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfOffer $offers
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountCompetingOffer
     */
    public function setOffers(\SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfOffer $offers = null)
    {
        if (is_null($offers) || (is_array($offers) && empty($offers))) {
            unset($this->Offers);
        } else {
            $this->Offers = $offers;
        }
        return $this;
    }
    /**
     * Get Product value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountProduct|null
     */
    public function getProduct()
    {
        return isset($this->Product) ? $this->Product : null;
    }
    /**
     * Set Product value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountProduct $product
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountCompetingOffer
     */
    public function setProduct(\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountProduct $product = null)
    {
        if (is_null($product) || (is_array($product) && empty($product))) {
            unset($this->Product);
        } else {
            $this->Product = $product;
        }
        return $this;
    }
}
