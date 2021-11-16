<?php

declare(strict_types=1);

namespace SengentoBV\CdiscountMarketplaceSdk\Structs;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetAllModelListResponse Structs
 * @package Cdiscount
 * @subpackage Structs
 */
class CdiscountGetAllModelListResponse extends AbstractStructBase
{
    /**
     * The GetAllModelListResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountProductModelListMessage|null
     */
    protected ?\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountProductModelListMessage $GetAllModelListResult = null;
    /**
     * Constructor method for GetAllModelListResponse
     * @uses CdiscountGetAllModelListResponse::setGetAllModelListResult()
     * @param \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountProductModelListMessage $getAllModelListResult
     */
    public function __construct(?\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountProductModelListMessage $getAllModelListResult = null)
    {
        $this
            ->setGetAllModelListResult($getAllModelListResult);
    }
    /**
     * Get GetAllModelListResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountProductModelListMessage|null
     */
    public function getGetAllModelListResult(): ?\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountProductModelListMessage
    {
        return isset($this->GetAllModelListResult) ? $this->GetAllModelListResult : null;
    }
    /**
     * Set GetAllModelListResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountProductModelListMessage $getAllModelListResult
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountGetAllModelListResponse
     */
    public function setGetAllModelListResult(?\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountProductModelListMessage $getAllModelListResult = null): self
    {
        if (is_null($getAllModelListResult) || (is_array($getAllModelListResult) && empty($getAllModelListResult))) {
            unset($this->GetAllModelListResult);
        } else {
            $this->GetAllModelListResult = $getAllModelListResult;
        }
        
        return $this;
    }
}
