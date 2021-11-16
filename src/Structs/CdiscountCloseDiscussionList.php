<?php

declare(strict_types=1);

namespace SengentoBV\CdiscountMarketplaceSdk\Structs;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CloseDiscussionList Structs
 * @package Cdiscount
 * @subpackage Structs
 */
class CdiscountCloseDiscussionList extends AbstractStructBase
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
     * The closeDiscussionRequest
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountCloseDiscussionRequest|null
     */
    protected ?\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountCloseDiscussionRequest $closeDiscussionRequest = null;
    /**
     * Constructor method for CloseDiscussionList
     * @uses CdiscountCloseDiscussionList::setHeaderMessage()
     * @uses CdiscountCloseDiscussionList::setCloseDiscussionRequest()
     * @param \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountHeaderMessage $headerMessage
     * @param \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountCloseDiscussionRequest $closeDiscussionRequest
     */
    public function __construct(?\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountHeaderMessage $headerMessage = null, ?\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountCloseDiscussionRequest $closeDiscussionRequest = null)
    {
        $this
            ->setHeaderMessage($headerMessage)
            ->setCloseDiscussionRequest($closeDiscussionRequest);
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
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountCloseDiscussionList
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
     * Get closeDiscussionRequest value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountCloseDiscussionRequest|null
     */
    public function getCloseDiscussionRequest(): ?\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountCloseDiscussionRequest
    {
        return isset($this->closeDiscussionRequest) ? $this->closeDiscussionRequest : null;
    }
    /**
     * Set closeDiscussionRequest value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountCloseDiscussionRequest $closeDiscussionRequest
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountCloseDiscussionList
     */
    public function setCloseDiscussionRequest(?\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountCloseDiscussionRequest $closeDiscussionRequest = null): self
    {
        if (is_null($closeDiscussionRequest) || (is_array($closeDiscussionRequest) && empty($closeDiscussionRequest))) {
            unset($this->closeDiscussionRequest);
        } else {
            $this->closeDiscussionRequest = $closeDiscussionRequest;
        }
        
        return $this;
    }
}
