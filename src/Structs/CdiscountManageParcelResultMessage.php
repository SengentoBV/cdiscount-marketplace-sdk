<?php

namespace SengentoBV\CdiscountMarketplaceSdk\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ManageParcelResultMessage Structs
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ManageParcelResultMessage
 * @package Cdiscount
 * @subpackage Structs
 */
class CdiscountManageParcelResultMessage extends CdiscountServiceBaseAPIMessage
{
    /**
     * The ParcelActionResultList
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfParcelActionResult
     */
    public $ParcelActionResultList;
    /**
     * Constructor method for ManageParcelResultMessage
     * @uses CdiscountManageParcelResultMessage::setParcelActionResultList()
     * @param \SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfParcelActionResult $parcelActionResultList
     */
    public function __construct(\SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfParcelActionResult $parcelActionResultList = null)
    {
        $this
            ->setParcelActionResultList($parcelActionResultList);
    }
    /**
     * Get ParcelActionResultList value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfParcelActionResult|null
     */
    public function getParcelActionResultList()
    {
        return isset($this->ParcelActionResultList) ? $this->ParcelActionResultList : null;
    }
    /**
     * Set ParcelActionResultList value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfParcelActionResult $parcelActionResultList
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountManageParcelResultMessage
     */
    public function setParcelActionResultList(\SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfParcelActionResult $parcelActionResultList = null)
    {
        if (is_null($parcelActionResultList) || (is_array($parcelActionResultList) && empty($parcelActionResultList))) {
            unset($this->ParcelActionResultList);
        } else {
            $this->ParcelActionResultList = $parcelActionResultList;
        }
        return $this;
    }
}
