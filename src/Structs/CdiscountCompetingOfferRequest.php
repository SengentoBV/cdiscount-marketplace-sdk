<?php

declare(strict_types=1);

namespace SengentoBV\CdiscountMarketplaceSdk\Structs;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CompetingOfferRequest Structs
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:CompetingOfferRequest
 * @package Cdiscount
 * @subpackage Structs
 */
class CdiscountCompetingOfferRequest extends AbstractStructBase
{
    /**
     * The ProductIds
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfstring|null
     */
    protected ?\SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfstring $ProductIds = null;
    /**
     * Constructor method for CompetingOfferRequest
     * @uses CdiscountCompetingOfferRequest::setProductIds()
     * @param \SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfstring $productIds
     */
    public function __construct(?\SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfstring $productIds = null)
    {
        $this
            ->setProductIds($productIds);
    }
    /**
     * Get ProductIds value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfstring|null
     */
    public function getProductIds(): ?\SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfstring
    {
        return isset($this->ProductIds) ? $this->ProductIds : null;
    }
    /**
     * Set ProductIds value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfstring $productIds
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountCompetingOfferRequest
     */
    public function setProductIds(?\SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfstring $productIds = null): self
    {
        if (is_null($productIds) || (is_array($productIds) && empty($productIds))) {
            unset($this->ProductIds);
        } else {
            $this->ProductIds = $productIds;
        }
        
        return $this;
    }
}
