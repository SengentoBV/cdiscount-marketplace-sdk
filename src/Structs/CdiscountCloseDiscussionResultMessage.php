<?php

declare(strict_types=1);

namespace SengentoBV\CdiscountMarketplaceSdk\Structs;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CloseDiscussionResultMessage Structs
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:CloseDiscussionResultMessage
 * @package Cdiscount
 * @subpackage Structs
 */
class CdiscountCloseDiscussionResultMessage extends CdiscountServiceBaseAPIMessage
{
    /**
     * The CloseDiscussionResultList
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfCloseDiscussionResult|null
     */
    protected ?\SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfCloseDiscussionResult $CloseDiscussionResultList = null;
    /**
     * Constructor method for CloseDiscussionResultMessage
     * @uses CdiscountCloseDiscussionResultMessage::setCloseDiscussionResultList()
     * @param \SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfCloseDiscussionResult $closeDiscussionResultList
     */
    public function __construct(?\SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfCloseDiscussionResult $closeDiscussionResultList = null)
    {
        $this
            ->setCloseDiscussionResultList($closeDiscussionResultList);
    }
    /**
     * Get CloseDiscussionResultList value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfCloseDiscussionResult|null
     */
    public function getCloseDiscussionResultList(): ?\SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfCloseDiscussionResult
    {
        return isset($this->CloseDiscussionResultList) ? $this->CloseDiscussionResultList : null;
    }
    /**
     * Set CloseDiscussionResultList value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfCloseDiscussionResult $closeDiscussionResultList
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountCloseDiscussionResultMessage
     */
    public function setCloseDiscussionResultList(?\SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfCloseDiscussionResult $closeDiscussionResultList = null): self
    {
        if (is_null($closeDiscussionResultList) || (is_array($closeDiscussionResultList) && empty($closeDiscussionResultList))) {
            unset($this->CloseDiscussionResultList);
        } else {
            $this->CloseDiscussionResultList = $closeDiscussionResultList;
        }
        
        return $this;
    }
}
