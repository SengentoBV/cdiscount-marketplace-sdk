<?php

declare(strict_types=1);

namespace SengentoBV\CdiscountMarketplaceSdk\Structs;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetOfferQuestionList Structs
 * @package Cdiscount
 * @subpackage Structs
 */
class CdiscountGetOfferQuestionList extends AbstractStructBase
{
    /**
     * The headerMessage
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountHeaderMessage|null
     */
    protected ?\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountHeaderMessage $headerMessage = null;
    /**
     * The offerQuestionFilter
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountOfferQuestionFilter|null
     */
    protected ?\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountOfferQuestionFilter $offerQuestionFilter = null;
    /**
     * Constructor method for GetOfferQuestionList
     * @uses CdiscountGetOfferQuestionList::setHeaderMessage()
     * @uses CdiscountGetOfferQuestionList::setOfferQuestionFilter()
     * @param \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountHeaderMessage $headerMessage
     * @param \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountOfferQuestionFilter $offerQuestionFilter
     */
    public function __construct(?\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountHeaderMessage $headerMessage = null, ?\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountOfferQuestionFilter $offerQuestionFilter = null)
    {
        $this
            ->setHeaderMessage($headerMessage)
            ->setOfferQuestionFilter($offerQuestionFilter);
    }
    /**
     * Get headerMessage value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountHeaderMessage|null
     */
    public function getHeaderMessage(): ?\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountHeaderMessage
    {
        return isset($this->headerMessage) ? $this->headerMessage : null;
    }
    /**
     * Set headerMessage value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountHeaderMessage $headerMessage
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountGetOfferQuestionList
     */
    public function setHeaderMessage(?\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountHeaderMessage $headerMessage = null): self
    {
        if (is_null($headerMessage) || (is_array($headerMessage) && empty($headerMessage))) {
            unset($this->headerMessage);
        } else {
            $this->headerMessage = $headerMessage;
        }
        
        return $this;
    }
    /**
     * Get offerQuestionFilter value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountOfferQuestionFilter|null
     */
    public function getOfferQuestionFilter(): ?\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountOfferQuestionFilter
    {
        return isset($this->offerQuestionFilter) ? $this->offerQuestionFilter : null;
    }
    /**
     * Set offerQuestionFilter value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountOfferQuestionFilter $offerQuestionFilter
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountGetOfferQuestionList
     */
    public function setOfferQuestionFilter(?\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountOfferQuestionFilter $offerQuestionFilter = null): self
    {
        if (is_null($offerQuestionFilter) || (is_array($offerQuestionFilter) && empty($offerQuestionFilter))) {
            unset($this->offerQuestionFilter);
        } else {
            $this->offerQuestionFilter = $offerQuestionFilter;
        }
        
        return $this;
    }
}
