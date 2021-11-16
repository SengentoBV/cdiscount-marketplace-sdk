<?php

declare(strict_types=1);

namespace SengentoBV\CdiscountMarketplaceSdk\Structs;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetSellerInformationResponse Structs
 * @package Cdiscount
 * @subpackage Structs
 */
class CdiscountGetSellerInformationResponse extends AbstractStructBase
{
    /**
     * The GetSellerInformationResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountSellerMessage|null
     */
    protected ?\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountSellerMessage $GetSellerInformationResult = null;
    /**
     * Constructor method for GetSellerInformationResponse
     * @uses CdiscountGetSellerInformationResponse::setGetSellerInformationResult()
     * @param \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountSellerMessage $getSellerInformationResult
     */
    public function __construct(?\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountSellerMessage $getSellerInformationResult = null)
    {
        $this
            ->setGetSellerInformationResult($getSellerInformationResult);
    }
    /**
     * Get GetSellerInformationResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountSellerMessage|null
     */
    public function getGetSellerInformationResult(): ?\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountSellerMessage
    {
        return isset($this->GetSellerInformationResult) ? $this->GetSellerInformationResult : null;
    }
    /**
     * Set GetSellerInformationResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountSellerMessage $getSellerInformationResult
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountGetSellerInformationResponse
     */
    public function setGetSellerInformationResult(?\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountSellerMessage $getSellerInformationResult = null): self
    {
        if (is_null($getSellerInformationResult) || (is_array($getSellerInformationResult) && empty($getSellerInformationResult))) {
            unset($this->GetSellerInformationResult);
        } else {
            $this->GetSellerInformationResult = $getSellerInformationResult;
        }
        
        return $this;
    }
}
