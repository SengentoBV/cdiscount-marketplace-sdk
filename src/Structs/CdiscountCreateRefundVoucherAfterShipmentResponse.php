<?php

declare(strict_types=1);

namespace SengentoBV\CdiscountMarketplaceSdk\Structs;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CreateRefundVoucherAfterShipmentResponse Structs
 * @package Cdiscount
 * @subpackage Structs
 */
class CdiscountCreateRefundVoucherAfterShipmentResponse extends AbstractStructBase
{
    /**
     * The CreateRefundVoucherAfterShipmentResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountSellerRefundResultMessage|null
     */
    protected ?\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountSellerRefundResultMessage $CreateRefundVoucherAfterShipmentResult = null;
    /**
     * Constructor method for CreateRefundVoucherAfterShipmentResponse
     * @uses CdiscountCreateRefundVoucherAfterShipmentResponse::setCreateRefundVoucherAfterShipmentResult()
     * @param \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountSellerRefundResultMessage $createRefundVoucherAfterShipmentResult
     */
    public function __construct(?\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountSellerRefundResultMessage $createRefundVoucherAfterShipmentResult = null)
    {
        $this
            ->setCreateRefundVoucherAfterShipmentResult($createRefundVoucherAfterShipmentResult);
    }
    /**
     * Get CreateRefundVoucherAfterShipmentResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountSellerRefundResultMessage|null
     */
    public function getCreateRefundVoucherAfterShipmentResult(): ?\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountSellerRefundResultMessage
    {
        return isset($this->CreateRefundVoucherAfterShipmentResult) ? $this->CreateRefundVoucherAfterShipmentResult : null;
    }
    /**
     * Set CreateRefundVoucherAfterShipmentResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountSellerRefundResultMessage $createRefundVoucherAfterShipmentResult
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountCreateRefundVoucherAfterShipmentResponse
     */
    public function setCreateRefundVoucherAfterShipmentResult(?\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountSellerRefundResultMessage $createRefundVoucherAfterShipmentResult = null): self
    {
        if (is_null($createRefundVoucherAfterShipmentResult) || (is_array($createRefundVoucherAfterShipmentResult) && empty($createRefundVoucherAfterShipmentResult))) {
            unset($this->CreateRefundVoucherAfterShipmentResult);
        } else {
            $this->CreateRefundVoucherAfterShipmentResult = $createRefundVoucherAfterShipmentResult;
        }
        
        return $this;
    }
}
