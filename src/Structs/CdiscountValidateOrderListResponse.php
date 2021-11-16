<?php

declare(strict_types=1);

namespace SengentoBV\CdiscountMarketplaceSdk\Structs;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ValidateOrderListResponse Structs
 * @package Cdiscount
 * @subpackage Structs
 */
class CdiscountValidateOrderListResponse extends AbstractStructBase
{
    /**
     * The ValidateOrderListResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountValidationResultMessage|null
     */
    protected ?\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountValidationResultMessage $ValidateOrderListResult = null;
    /**
     * Constructor method for ValidateOrderListResponse
     * @uses CdiscountValidateOrderListResponse::setValidateOrderListResult()
     * @param \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountValidationResultMessage $validateOrderListResult
     */
    public function __construct(?\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountValidationResultMessage $validateOrderListResult = null)
    {
        $this
            ->setValidateOrderListResult($validateOrderListResult);
    }
    /**
     * Get ValidateOrderListResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountValidationResultMessage|null
     */
    public function getValidateOrderListResult(): ?\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountValidationResultMessage
    {
        return isset($this->ValidateOrderListResult) ? $this->ValidateOrderListResult : null;
    }
    /**
     * Set ValidateOrderListResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountValidationResultMessage $validateOrderListResult
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountValidateOrderListResponse
     */
    public function setValidateOrderListResult(?\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountValidationResultMessage $validateOrderListResult = null): self
    {
        if (is_null($validateOrderListResult) || (is_array($validateOrderListResult) && empty($validateOrderListResult))) {
            unset($this->ValidateOrderListResult);
        } else {
            $this->ValidateOrderListResult = $validateOrderListResult;
        }
        
        return $this;
    }
}
