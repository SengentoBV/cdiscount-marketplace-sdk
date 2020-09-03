<?php

namespace SengentoBV\CdiscountMarketplaceSdk\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SubmitRelaysFileResponse Structs
 * @package Cdiscount
 * @subpackage Structs
 */
class CdiscountSubmitRelaysFileResponse extends AbstractStructBase
{
    /**
     * The SubmitRelaysFileResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountRelaysFileDepositMessage
     */
    public $SubmitRelaysFileResult;
    /**
     * Constructor method for SubmitRelaysFileResponse
     * @uses CdiscountSubmitRelaysFileResponse::setSubmitRelaysFileResult()
     * @param \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountRelaysFileDepositMessage $submitRelaysFileResult
     */
    public function __construct(\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountRelaysFileDepositMessage $submitRelaysFileResult = null)
    {
        $this
            ->setSubmitRelaysFileResult($submitRelaysFileResult);
    }
    /**
     * Get SubmitRelaysFileResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountRelaysFileDepositMessage|null
     */
    public function getSubmitRelaysFileResult()
    {
        return isset($this->SubmitRelaysFileResult) ? $this->SubmitRelaysFileResult : null;
    }
    /**
     * Set SubmitRelaysFileResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountRelaysFileDepositMessage $submitRelaysFileResult
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountSubmitRelaysFileResponse
     */
    public function setSubmitRelaysFileResult(\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountRelaysFileDepositMessage $submitRelaysFileResult = null)
    {
        if (is_null($submitRelaysFileResult) || (is_array($submitRelaysFileResult) && empty($submitRelaysFileResult))) {
            unset($this->SubmitRelaysFileResult);
        } else {
            $this->SubmitRelaysFileResult = $submitRelaysFileResult;
        }
        return $this;
    }
}
