<?php

declare(strict_types=1);

namespace SengentoBV\CdiscountMarketplaceSdk\Structs;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetOfferPackageSubmissionResult Structs
 * @package Cdiscount
 * @subpackage Structs
 */
class CdiscountGetOfferPackageSubmissionResult extends AbstractStructBase
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
     * The offerPackageFilter
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountPackageFilter|null
     */
    protected ?\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountPackageFilter $offerPackageFilter = null;
    /**
     * Constructor method for GetOfferPackageSubmissionResult
     * @uses CdiscountGetOfferPackageSubmissionResult::setHeaderMessage()
     * @uses CdiscountGetOfferPackageSubmissionResult::setOfferPackageFilter()
     * @param \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountHeaderMessage $headerMessage
     * @param \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountPackageFilter $offerPackageFilter
     */
    public function __construct(?\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountHeaderMessage $headerMessage = null, ?\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountPackageFilter $offerPackageFilter = null)
    {
        $this
            ->setHeaderMessage($headerMessage)
            ->setOfferPackageFilter($offerPackageFilter);
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
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountGetOfferPackageSubmissionResult
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
     * Get offerPackageFilter value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountPackageFilter|null
     */
    public function getOfferPackageFilter(): ?\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountPackageFilter
    {
        return isset($this->offerPackageFilter) ? $this->offerPackageFilter : null;
    }
    /**
     * Set offerPackageFilter value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountPackageFilter $offerPackageFilter
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountGetOfferPackageSubmissionResult
     */
    public function setOfferPackageFilter(?\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountPackageFilter $offerPackageFilter = null): self
    {
        if (is_null($offerPackageFilter) || (is_array($offerPackageFilter) && empty($offerPackageFilter))) {
            unset($this->offerPackageFilter);
        } else {
            $this->offerPackageFilter = $offerPackageFilter;
        }
        
        return $this;
    }
}
