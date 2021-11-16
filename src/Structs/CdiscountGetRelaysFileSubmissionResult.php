<?php

declare(strict_types=1);

namespace SengentoBV\CdiscountMarketplaceSdk\Structs;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetRelaysFileSubmissionResult Structs
 * @package Cdiscount
 * @subpackage Structs
 */
class CdiscountGetRelaysFileSubmissionResult extends AbstractStructBase
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
     * The relaysFileFilter
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountRelaysFileFilter|null
     */
    protected ?\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountRelaysFileFilter $relaysFileFilter = null;
    /**
     * Constructor method for GetRelaysFileSubmissionResult
     * @uses CdiscountGetRelaysFileSubmissionResult::setHeaderMessage()
     * @uses CdiscountGetRelaysFileSubmissionResult::setRelaysFileFilter()
     * @param \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountHeaderMessage $headerMessage
     * @param \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountRelaysFileFilter $relaysFileFilter
     */
    public function __construct(?\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountHeaderMessage $headerMessage = null, ?\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountRelaysFileFilter $relaysFileFilter = null)
    {
        $this
            ->setHeaderMessage($headerMessage)
            ->setRelaysFileFilter($relaysFileFilter);
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
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountGetRelaysFileSubmissionResult
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
     * Get relaysFileFilter value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountRelaysFileFilter|null
     */
    public function getRelaysFileFilter(): ?\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountRelaysFileFilter
    {
        return isset($this->relaysFileFilter) ? $this->relaysFileFilter : null;
    }
    /**
     * Set relaysFileFilter value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountRelaysFileFilter $relaysFileFilter
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountGetRelaysFileSubmissionResult
     */
    public function setRelaysFileFilter(?\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountRelaysFileFilter $relaysFileFilter = null): self
    {
        if (is_null($relaysFileFilter) || (is_array($relaysFileFilter) && empty($relaysFileFilter))) {
            unset($this->relaysFileFilter);
        } else {
            $this->relaysFileFilter = $relaysFileFilter;
        }
        
        return $this;
    }
}
