<?php

declare(strict_types=1);

namespace SengentoBV\CdiscountMarketplaceSdk\Structs;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ManageParcelResponse Structs
 * @package Cdiscount
 * @subpackage Structs
 */
class CdiscountManageParcelResponse extends AbstractStructBase
{
    /**
     * The ManageParcelResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountManageParcelResultMessage|null
     */
    protected ?\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountManageParcelResultMessage $ManageParcelResult = null;
    /**
     * Constructor method for ManageParcelResponse
     * @uses CdiscountManageParcelResponse::setManageParcelResult()
     * @param \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountManageParcelResultMessage $manageParcelResult
     */
    public function __construct(?\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountManageParcelResultMessage $manageParcelResult = null)
    {
        $this
            ->setManageParcelResult($manageParcelResult);
    }
    /**
     * Get ManageParcelResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountManageParcelResultMessage|null
     */
    public function getManageParcelResult(): ?\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountManageParcelResultMessage
    {
        return isset($this->ManageParcelResult) ? $this->ManageParcelResult : null;
    }
    /**
     * Set ManageParcelResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountManageParcelResultMessage $manageParcelResult
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountManageParcelResponse
     */
    public function setManageParcelResult(?\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountManageParcelResultMessage $manageParcelResult = null): self
    {
        if (is_null($manageParcelResult) || (is_array($manageParcelResult) && empty($manageParcelResult))) {
            unset($this->ManageParcelResult);
        } else {
            $this->ManageParcelResult = $manageParcelResult;
        }
        
        return $this;
    }
}
