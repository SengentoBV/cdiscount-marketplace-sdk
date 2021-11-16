<?php

declare(strict_types=1);

namespace SengentoBV\CdiscountMarketplaceSdk\Structs;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetProductListByIdentifier Structs
 * @package Cdiscount
 * @subpackage Structs
 */
class CdiscountGetProductListByIdentifier extends AbstractStructBase
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
     * The identifierRequest
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountIdentifierRequest|null
     */
    protected ?\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountIdentifierRequest $identifierRequest = null;
    /**
     * Constructor method for GetProductListByIdentifier
     * @uses CdiscountGetProductListByIdentifier::setHeaderMessage()
     * @uses CdiscountGetProductListByIdentifier::setIdentifierRequest()
     * @param \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountHeaderMessage $headerMessage
     * @param \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountIdentifierRequest $identifierRequest
     */
    public function __construct(?\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountHeaderMessage $headerMessage = null, ?\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountIdentifierRequest $identifierRequest = null)
    {
        $this
            ->setHeaderMessage($headerMessage)
            ->setIdentifierRequest($identifierRequest);
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
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountGetProductListByIdentifier
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
     * Get identifierRequest value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountIdentifierRequest|null
     */
    public function getIdentifierRequest(): ?\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountIdentifierRequest
    {
        return isset($this->identifierRequest) ? $this->identifierRequest : null;
    }
    /**
     * Set identifierRequest value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountIdentifierRequest $identifierRequest
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountGetProductListByIdentifier
     */
    public function setIdentifierRequest(?\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountIdentifierRequest $identifierRequest = null): self
    {
        if (is_null($identifierRequest) || (is_array($identifierRequest) && empty($identifierRequest))) {
            unset($this->identifierRequest);
        } else {
            $this->identifierRequest = $identifierRequest;
        }
        
        return $this;
    }
}
