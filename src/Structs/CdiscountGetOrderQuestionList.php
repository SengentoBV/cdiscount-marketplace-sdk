<?php

declare(strict_types=1);

namespace SengentoBV\CdiscountMarketplaceSdk\Structs;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetOrderQuestionList Structs
 * @package Cdiscount
 * @subpackage Structs
 */
class CdiscountGetOrderQuestionList extends AbstractStructBase
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
     * The orderQuestionFilter
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountOrderQuestionFilter|null
     */
    protected ?\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountOrderQuestionFilter $orderQuestionFilter = null;
    /**
     * Constructor method for GetOrderQuestionList
     * @uses CdiscountGetOrderQuestionList::setHeaderMessage()
     * @uses CdiscountGetOrderQuestionList::setOrderQuestionFilter()
     * @param \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountHeaderMessage $headerMessage
     * @param \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountOrderQuestionFilter $orderQuestionFilter
     */
    public function __construct(?\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountHeaderMessage $headerMessage = null, ?\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountOrderQuestionFilter $orderQuestionFilter = null)
    {
        $this
            ->setHeaderMessage($headerMessage)
            ->setOrderQuestionFilter($orderQuestionFilter);
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
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountGetOrderQuestionList
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
     * Get orderQuestionFilter value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountOrderQuestionFilter|null
     */
    public function getOrderQuestionFilter(): ?\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountOrderQuestionFilter
    {
        return isset($this->orderQuestionFilter) ? $this->orderQuestionFilter : null;
    }
    /**
     * Set orderQuestionFilter value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountOrderQuestionFilter $orderQuestionFilter
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountGetOrderQuestionList
     */
    public function setOrderQuestionFilter(?\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountOrderQuestionFilter $orderQuestionFilter = null): self
    {
        if (is_null($orderQuestionFilter) || (is_array($orderQuestionFilter) && empty($orderQuestionFilter))) {
            unset($this->orderQuestionFilter);
        } else {
            $this->orderQuestionFilter = $orderQuestionFilter;
        }
        
        return $this;
    }
}
