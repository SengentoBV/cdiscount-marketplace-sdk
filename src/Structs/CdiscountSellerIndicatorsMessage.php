<?php

namespace SengentoBV\CdiscountMarketplaceSdk\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SellerIndicatorsMessage Structs
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:SellerIndicatorsMessage
 * @package Cdiscount
 * @subpackage Structs
 */
class CdiscountSellerIndicatorsMessage extends CdiscountServiceBaseAPIMessage
{
    /**
     * The SellerIndicators
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfSellerIndicator
     */
    public $SellerIndicators;
    /**
     * Constructor method for SellerIndicatorsMessage
     * @uses CdiscountSellerIndicatorsMessage::setSellerIndicators()
     * @param \SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfSellerIndicator $sellerIndicators
     */
    public function __construct(\SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfSellerIndicator $sellerIndicators = null)
    {
        $this
            ->setSellerIndicators($sellerIndicators);
    }
    /**
     * Get SellerIndicators value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfSellerIndicator|null
     */
    public function getSellerIndicators()
    {
        return isset($this->SellerIndicators) ? $this->SellerIndicators : null;
    }
    /**
     * Set SellerIndicators value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfSellerIndicator $sellerIndicators
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountSellerIndicatorsMessage
     */
    public function setSellerIndicators(\SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfSellerIndicator $sellerIndicators = null)
    {
        if (is_null($sellerIndicators) || (is_array($sellerIndicators) && empty($sellerIndicators))) {
            unset($this->SellerIndicators);
        } else {
            $this->SellerIndicators = $sellerIndicators;
        }
        return $this;
    }
}
