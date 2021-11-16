<?php

declare(strict_types=1);

namespace SengentoBV\CdiscountMarketplaceSdk\Structs;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CreateRefundVoucherResponse Structs
 * @package Cdiscount
 * @subpackage Structs
 */
class CdiscountCreateRefundVoucherResponse extends AbstractStructBase
{
    /**
     * The CreateRefundVoucherResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountCreateRefundVoucherMessage|null
     */
    protected ?\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountCreateRefundVoucherMessage $CreateRefundVoucherResult = null;
    /**
     * Constructor method for CreateRefundVoucherResponse
     * @uses CdiscountCreateRefundVoucherResponse::setCreateRefundVoucherResult()
     * @param \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountCreateRefundVoucherMessage $createRefundVoucherResult
     */
    public function __construct(?\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountCreateRefundVoucherMessage $createRefundVoucherResult = null)
    {
        $this
            ->setCreateRefundVoucherResult($createRefundVoucherResult);
    }
    /**
     * Get CreateRefundVoucherResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountCreateRefundVoucherMessage|null
     */
    public function getCreateRefundVoucherResult(): ?\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountCreateRefundVoucherMessage
    {
        return isset($this->CreateRefundVoucherResult) ? $this->CreateRefundVoucherResult : null;
    }
    /**
     * Set CreateRefundVoucherResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountCreateRefundVoucherMessage $createRefundVoucherResult
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountCreateRefundVoucherResponse
     */
    public function setCreateRefundVoucherResult(?\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountCreateRefundVoucherMessage $createRefundVoucherResult = null): self
    {
        if (is_null($createRefundVoucherResult) || (is_array($createRefundVoucherResult) && empty($createRefundVoucherResult))) {
            unset($this->CreateRefundVoucherResult);
        } else {
            $this->CreateRefundVoucherResult = $createRefundVoucherResult;
        }
        
        return $this;
    }
}
