<?php

namespace SengentoBV\CdiscountMarketplaceSdk\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetProductListByIdentifierResponse Structs
 * @package Cdiscount
 * @subpackage Structs
 */
class CdiscountGetProductListByIdentifierResponse extends AbstractStructBase
{
    /**
     * The GetProductListByIdentifierResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountProductListByIdentifierMessage
     */
    public $GetProductListByIdentifierResult;
    /**
     * Constructor method for GetProductListByIdentifierResponse
     * @uses CdiscountGetProductListByIdentifierResponse::setGetProductListByIdentifierResult()
     * @param \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountProductListByIdentifierMessage $getProductListByIdentifierResult
     */
    public function __construct(\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountProductListByIdentifierMessage $getProductListByIdentifierResult = null)
    {
        $this
            ->setGetProductListByIdentifierResult($getProductListByIdentifierResult);
    }
    /**
     * Get GetProductListByIdentifierResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountProductListByIdentifierMessage|null
     */
    public function getGetProductListByIdentifierResult()
    {
        return isset($this->GetProductListByIdentifierResult) ? $this->GetProductListByIdentifierResult : null;
    }
    /**
     * Set GetProductListByIdentifierResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountProductListByIdentifierMessage $getProductListByIdentifierResult
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountGetProductListByIdentifierResponse
     */
    public function setGetProductListByIdentifierResult(\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountProductListByIdentifierMessage $getProductListByIdentifierResult = null)
    {
        if (is_null($getProductListByIdentifierResult) || (is_array($getProductListByIdentifierResult) && empty($getProductListByIdentifierResult))) {
            unset($this->GetProductListByIdentifierResult);
        } else {
            $this->GetProductListByIdentifierResult = $getProductListByIdentifierResult;
        }
        return $this;
    }
}
