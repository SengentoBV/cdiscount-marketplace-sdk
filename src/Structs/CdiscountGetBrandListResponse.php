<?php

declare(strict_types=1);

namespace SengentoBV\CdiscountMarketplaceSdk\Structs;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetBrandListResponse Structs
 * @package Cdiscount
 * @subpackage Structs
 */
class CdiscountGetBrandListResponse extends AbstractStructBase
{
    /**
     * The GetBrandListResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountBrandListMessage|null
     */
    protected ?\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountBrandListMessage $GetBrandListResult = null;
    /**
     * Constructor method for GetBrandListResponse
     * @uses CdiscountGetBrandListResponse::setGetBrandListResult()
     * @param \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountBrandListMessage $getBrandListResult
     */
    public function __construct(?\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountBrandListMessage $getBrandListResult = null)
    {
        $this
            ->setGetBrandListResult($getBrandListResult);
    }
    /**
     * Get GetBrandListResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountBrandListMessage|null
     */
    public function getGetBrandListResult(): ?\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountBrandListMessage
    {
        return isset($this->GetBrandListResult) ? $this->GetBrandListResult : null;
    }
    /**
     * Set GetBrandListResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountBrandListMessage $getBrandListResult
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountGetBrandListResponse
     */
    public function setGetBrandListResult(?\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountBrandListMessage $getBrandListResult = null): self
    {
        if (is_null($getBrandListResult) || (is_array($getBrandListResult) && empty($getBrandListResult))) {
            unset($this->GetBrandListResult);
        } else {
            $this->GetBrandListResult = $getBrandListResult;
        }
        
        return $this;
    }
}
