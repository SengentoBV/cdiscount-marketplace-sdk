<?php

declare(strict_types=1);

namespace SengentoBV\CdiscountMarketplaceSdk\Structs;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for OfferQuestionListMessage Structs
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:OfferQuestionListMessage
 * @package Cdiscount
 * @subpackage Structs
 */
class CdiscountOfferQuestionListMessage extends CdiscountServiceBaseAPIMessage
{
    /**
     * The OfferQuestionList
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfOfferQuestion|null
     */
    protected ?\SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfOfferQuestion $OfferQuestionList = null;
    /**
     * Constructor method for OfferQuestionListMessage
     * @uses CdiscountOfferQuestionListMessage::setOfferQuestionList()
     * @param \SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfOfferQuestion $offerQuestionList
     */
    public function __construct(?\SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfOfferQuestion $offerQuestionList = null)
    {
        $this
            ->setOfferQuestionList($offerQuestionList);
    }
    /**
     * Get OfferQuestionList value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfOfferQuestion|null
     */
    public function getOfferQuestionList(): ?\SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfOfferQuestion
    {
        return isset($this->OfferQuestionList) ? $this->OfferQuestionList : null;
    }
    /**
     * Set OfferQuestionList value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfOfferQuestion $offerQuestionList
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountOfferQuestionListMessage
     */
    public function setOfferQuestionList(?\SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfOfferQuestion $offerQuestionList = null): self
    {
        if (is_null($offerQuestionList) || (is_array($offerQuestionList) && empty($offerQuestionList))) {
            unset($this->OfferQuestionList);
        } else {
            $this->OfferQuestionList = $offerQuestionList;
        }
        
        return $this;
    }
}
