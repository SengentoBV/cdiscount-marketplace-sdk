<?php

namespace SengentoBV\CdiscountMarketplaceSdk\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetOfferProductListPaginatedRest Structs
 * @package Cdiscount
 * @subpackage Structs
 */
class CdiscountGetOfferProductListPaginatedRest extends AbstractStructBase
{
    /**
     * The headerMessage
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountHeaderMessage
     */
    public $headerMessage;
    /**
     * The offerProductfilter
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountOfferProductFilterPaginated
     */
    public $offerProductfilter;
    /**
     * Constructor method for GetOfferProductListPaginatedRest
     * @uses CdiscountGetOfferProductListPaginatedRest::setHeaderMessage()
     * @uses CdiscountGetOfferProductListPaginatedRest::setOfferProductfilter()
     * @param \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountHeaderMessage $headerMessage
     * @param \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountOfferProductFilterPaginated $offerProductfilter
     */
    public function __construct(\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountHeaderMessage $headerMessage = null, \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountOfferProductFilterPaginated $offerProductfilter = null)
    {
        $this
            ->setHeaderMessage($headerMessage)
            ->setOfferProductfilter($offerProductfilter);
    }
    /**
     * Get headerMessage value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountHeaderMessage|null
     */
    public function getHeaderMessage()
    {
        return isset($this->headerMessage) ? $this->headerMessage : null;
    }
    /**
     * Set headerMessage value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountHeaderMessage $headerMessage
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountGetOfferProductListPaginatedRest
     */
    public function setHeaderMessage(\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountHeaderMessage $headerMessage = null)
    {
        if (is_null($headerMessage) || (is_array($headerMessage) && empty($headerMessage))) {
            unset($this->headerMessage);
        } else {
            $this->headerMessage = $headerMessage;
        }
        return $this;
    }
    /**
     * Get offerProductfilter value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountOfferProductFilterPaginated|null
     */
    public function getOfferProductfilter()
    {
        return isset($this->offerProductfilter) ? $this->offerProductfilter : null;
    }
    /**
     * Set offerProductfilter value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountOfferProductFilterPaginated $offerProductfilter
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountGetOfferProductListPaginatedRest
     */
    public function setOfferProductfilter(\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountOfferProductFilterPaginated $offerProductfilter = null)
    {
        if (is_null($offerProductfilter) || (is_array($offerProductfilter) && empty($offerProductfilter))) {
            unset($this->offerProductfilter);
        } else {
            $this->offerProductfilter = $offerProductfilter;
        }
        return $this;
    }
}
