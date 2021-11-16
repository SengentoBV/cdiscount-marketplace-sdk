<?php

declare(strict_types=1);

namespace SengentoBV\CdiscountMarketplaceSdk\Structs;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ValidationResultMessage Structs
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ValidationResultMessage
 * @package Cdiscount
 * @subpackage Structs
 */
class CdiscountValidationResultMessage extends CdiscountServiceBaseAPIMessage
{
    /**
     * The ValidateOrderResults
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfValidateOrderResult|null
     */
    protected ?\SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfValidateOrderResult $ValidateOrderResults = null;
    /**
     * Constructor method for ValidationResultMessage
     * @uses CdiscountValidationResultMessage::setValidateOrderResults()
     * @param \SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfValidateOrderResult $validateOrderResults
     */
    public function __construct(?\SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfValidateOrderResult $validateOrderResults = null)
    {
        $this
            ->setValidateOrderResults($validateOrderResults);
    }
    /**
     * Get ValidateOrderResults value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfValidateOrderResult|null
     */
    public function getValidateOrderResults(): ?\SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfValidateOrderResult
    {
        return isset($this->ValidateOrderResults) ? $this->ValidateOrderResults : null;
    }
    /**
     * Set ValidateOrderResults value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfValidateOrderResult $validateOrderResults
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountValidationResultMessage
     */
    public function setValidateOrderResults(?\SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfValidateOrderResult $validateOrderResults = null): self
    {
        if (is_null($validateOrderResults) || (is_array($validateOrderResults) && empty($validateOrderResults))) {
            unset($this->ValidateOrderResults);
        } else {
            $this->ValidateOrderResults = $validateOrderResults;
        }
        
        return $this;
    }
}
