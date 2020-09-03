<?php

namespace SengentoBV\CdiscountMarketplaceSdk\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for OrderClaimFilter Structs
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:OrderClaimFilter
 * @package Cdiscount
 * @subpackage Structs
 */
class CdiscountOrderClaimFilter extends CdiscountOrderQuestionFilter
{
    /**
     * The OnlyWithMessageFromCdsCustomerService
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var bool
     */
    public $OnlyWithMessageFromCdsCustomerService;
    /**
     * Constructor method for OrderClaimFilter
     * @uses CdiscountOrderClaimFilter::setOnlyWithMessageFromCdsCustomerService()
     * @param bool $onlyWithMessageFromCdsCustomerService
     */
    public function __construct($onlyWithMessageFromCdsCustomerService = null)
    {
        $this
            ->setOnlyWithMessageFromCdsCustomerService($onlyWithMessageFromCdsCustomerService);
    }
    /**
     * Get OnlyWithMessageFromCdsCustomerService value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return bool|null
     */
    public function getOnlyWithMessageFromCdsCustomerService()
    {
        return isset($this->OnlyWithMessageFromCdsCustomerService) ? $this->OnlyWithMessageFromCdsCustomerService : null;
    }
    /**
     * Set OnlyWithMessageFromCdsCustomerService value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param bool $onlyWithMessageFromCdsCustomerService
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountOrderClaimFilter
     */
    public function setOnlyWithMessageFromCdsCustomerService($onlyWithMessageFromCdsCustomerService = null)
    {
        // validation for constraint: boolean
        if (!is_null($onlyWithMessageFromCdsCustomerService) && !is_bool($onlyWithMessageFromCdsCustomerService)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($onlyWithMessageFromCdsCustomerService, true), gettype($onlyWithMessageFromCdsCustomerService)), __LINE__);
        }
        if (is_null($onlyWithMessageFromCdsCustomerService) || (is_array($onlyWithMessageFromCdsCustomerService) && empty($onlyWithMessageFromCdsCustomerService))) {
            unset($this->OnlyWithMessageFromCdsCustomerService);
        } else {
            $this->OnlyWithMessageFromCdsCustomerService = $onlyWithMessageFromCdsCustomerService;
        }
        return $this;
    }
}
