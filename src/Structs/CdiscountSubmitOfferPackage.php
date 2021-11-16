<?php

declare(strict_types=1);

namespace SengentoBV\CdiscountMarketplaceSdk\Structs;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SubmitOfferPackage Structs
 * @package Cdiscount
 * @subpackage Structs
 */
class CdiscountSubmitOfferPackage extends AbstractStructBase
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
     * The offerPackageRequest
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountOfferPackageRequest|null
     */
    protected ?\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountOfferPackageRequest $offerPackageRequest = null;
    /**
     * Constructor method for SubmitOfferPackage
     * @uses CdiscountSubmitOfferPackage::setHeaderMessage()
     * @uses CdiscountSubmitOfferPackage::setOfferPackageRequest()
     * @param \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountHeaderMessage $headerMessage
     * @param \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountOfferPackageRequest $offerPackageRequest
     */
    public function __construct(?\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountHeaderMessage $headerMessage = null, ?\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountOfferPackageRequest $offerPackageRequest = null)
    {
        $this
            ->setHeaderMessage($headerMessage)
            ->setOfferPackageRequest($offerPackageRequest);
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
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountSubmitOfferPackage
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
     * Get offerPackageRequest value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountOfferPackageRequest|null
     */
    public function getOfferPackageRequest(): ?\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountOfferPackageRequest
    {
        return isset($this->offerPackageRequest) ? $this->offerPackageRequest : null;
    }
    /**
     * Set offerPackageRequest value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountOfferPackageRequest $offerPackageRequest
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountSubmitOfferPackage
     */
    public function setOfferPackageRequest(?\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountOfferPackageRequest $offerPackageRequest = null): self
    {
        if (is_null($offerPackageRequest) || (is_array($offerPackageRequest) && empty($offerPackageRequest))) {
            unset($this->offerPackageRequest);
        } else {
            $this->offerPackageRequest = $offerPackageRequest;
        }
        
        return $this;
    }
}
