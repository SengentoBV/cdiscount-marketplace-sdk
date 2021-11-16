<?php

declare(strict_types=1);

namespace SengentoBV\CdiscountMarketplaceSdk\Structs;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetAllowedCategoryTreeResponse Structs
 * @package Cdiscount
 * @subpackage Structs
 */
class CdiscountGetAllowedCategoryTreeResponse extends AbstractStructBase
{
    /**
     * The GetAllowedCategoryTreeResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountCategoryTreeMessage|null
     */
    protected ?\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountCategoryTreeMessage $GetAllowedCategoryTreeResult = null;
    /**
     * Constructor method for GetAllowedCategoryTreeResponse
     * @uses CdiscountGetAllowedCategoryTreeResponse::setGetAllowedCategoryTreeResult()
     * @param \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountCategoryTreeMessage $getAllowedCategoryTreeResult
     */
    public function __construct(?\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountCategoryTreeMessage $getAllowedCategoryTreeResult = null)
    {
        $this
            ->setGetAllowedCategoryTreeResult($getAllowedCategoryTreeResult);
    }
    /**
     * Get GetAllowedCategoryTreeResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountCategoryTreeMessage|null
     */
    public function getGetAllowedCategoryTreeResult(): ?\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountCategoryTreeMessage
    {
        return isset($this->GetAllowedCategoryTreeResult) ? $this->GetAllowedCategoryTreeResult : null;
    }
    /**
     * Set GetAllowedCategoryTreeResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountCategoryTreeMessage $getAllowedCategoryTreeResult
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountGetAllowedCategoryTreeResponse
     */
    public function setGetAllowedCategoryTreeResult(?\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountCategoryTreeMessage $getAllowedCategoryTreeResult = null): self
    {
        if (is_null($getAllowedCategoryTreeResult) || (is_array($getAllowedCategoryTreeResult) && empty($getAllowedCategoryTreeResult))) {
            unset($this->GetAllowedCategoryTreeResult);
        } else {
            $this->GetAllowedCategoryTreeResult = $getAllowedCategoryTreeResult;
        }
        
        return $this;
    }
}
