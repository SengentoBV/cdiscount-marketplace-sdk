<?php

namespace SengentoBV\CdiscountMarketplaceSdk\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for OrderQuestionListMessage Structs
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:OrderQuestionListMessage
 * @package Cdiscount
 * @subpackage Structs
 */
class CdiscountOrderQuestionListMessage extends CdiscountServiceBaseAPIMessage
{
    /**
     * The OrderQuestionList
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfOrderQuestion
     */
    public $OrderQuestionList;
    /**
     * Constructor method for OrderQuestionListMessage
     * @uses CdiscountOrderQuestionListMessage::setOrderQuestionList()
     * @param \SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfOrderQuestion $orderQuestionList
     */
    public function __construct(\SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfOrderQuestion $orderQuestionList = null)
    {
        $this
            ->setOrderQuestionList($orderQuestionList);
    }
    /**
     * Get OrderQuestionList value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfOrderQuestion|null
     */
    public function getOrderQuestionList()
    {
        return isset($this->OrderQuestionList) ? $this->OrderQuestionList : null;
    }
    /**
     * Set OrderQuestionList value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfOrderQuestion $orderQuestionList
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountOrderQuestionListMessage
     */
    public function setOrderQuestionList(\SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfOrderQuestion $orderQuestionList = null)
    {
        if (is_null($orderQuestionList) || (is_array($orderQuestionList) && empty($orderQuestionList))) {
            unset($this->OrderQuestionList);
        } else {
            $this->OrderQuestionList = $orderQuestionList;
        }
        return $this;
    }
}
