<?php

namespace SengentoBV\CdiscountMarketplaceSdk\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetAllAllowedCategoryTreeResponse Structs
 * @package Cdiscount
 * @subpackage Structs
 */
class CdiscountGetAllAllowedCategoryTreeResponse extends AbstractStructBase
{
    /**
     * The GetAllAllowedCategoryTreeResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountCategoryTreeMessage
     */
    public $GetAllAllowedCategoryTreeResult;
    /**
     * Constructor method for GetAllAllowedCategoryTreeResponse
     * @uses CdiscountGetAllAllowedCategoryTreeResponse::setGetAllAllowedCategoryTreeResult()
     * @param \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountCategoryTreeMessage $getAllAllowedCategoryTreeResult
     */
    public function __construct(\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountCategoryTreeMessage $getAllAllowedCategoryTreeResult = null)
    {
        $this
            ->setGetAllAllowedCategoryTreeResult($getAllAllowedCategoryTreeResult);
    }
    /**
     * Get GetAllAllowedCategoryTreeResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountCategoryTreeMessage|null
     */
    public function getGetAllAllowedCategoryTreeResult()
    {
        return isset($this->GetAllAllowedCategoryTreeResult) ? $this->GetAllAllowedCategoryTreeResult : null;
    }
    /**
     * Set GetAllAllowedCategoryTreeResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountCategoryTreeMessage $getAllAllowedCategoryTreeResult
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountGetAllAllowedCategoryTreeResponse
     */
    public function setGetAllAllowedCategoryTreeResult(\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountCategoryTreeMessage $getAllAllowedCategoryTreeResult = null)
    {
        if (is_null($getAllAllowedCategoryTreeResult) || (is_array($getAllAllowedCategoryTreeResult) && empty($getAllAllowedCategoryTreeResult))) {
            unset($this->GetAllAllowedCategoryTreeResult);
        } else {
            $this->GetAllAllowedCategoryTreeResult = $getAllAllowedCategoryTreeResult;
        }
        return $this;
    }
}
