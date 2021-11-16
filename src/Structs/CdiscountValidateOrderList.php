<?php

declare(strict_types=1);

namespace SengentoBV\CdiscountMarketplaceSdk\Structs;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ValidateOrderList Structs
 * @package Cdiscount
 * @subpackage Structs
 */
class CdiscountValidateOrderList extends AbstractStructBase
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
     * The validateOrderListMessage
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountValidateOrderListMessage|null
     */
    protected ?\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountValidateOrderListMessage $validateOrderListMessage = null;
    /**
     * Constructor method for ValidateOrderList
     * @uses CdiscountValidateOrderList::setHeaderMessage()
     * @uses CdiscountValidateOrderList::setValidateOrderListMessage()
     * @param \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountHeaderMessage $headerMessage
     * @param \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountValidateOrderListMessage $validateOrderListMessage
     */
    public function __construct(?\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountHeaderMessage $headerMessage = null, ?\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountValidateOrderListMessage $validateOrderListMessage = null)
    {
        $this
            ->setHeaderMessage($headerMessage)
            ->setValidateOrderListMessage($validateOrderListMessage);
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
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountValidateOrderList
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
     * Get validateOrderListMessage value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountValidateOrderListMessage|null
     */
    public function getValidateOrderListMessage(): ?\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountValidateOrderListMessage
    {
        return isset($this->validateOrderListMessage) ? $this->validateOrderListMessage : null;
    }
    /**
     * Set validateOrderListMessage value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountValidateOrderListMessage $validateOrderListMessage
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountValidateOrderList
     */
    public function setValidateOrderListMessage(?\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountValidateOrderListMessage $validateOrderListMessage = null): self
    {
        if (is_null($validateOrderListMessage) || (is_array($validateOrderListMessage) && empty($validateOrderListMessage))) {
            unset($this->validateOrderListMessage);
        } else {
            $this->validateOrderListMessage = $validateOrderListMessage;
        }
        
        return $this;
    }
}
