<?php

namespace SengentoBV\CdiscountMarketplaceSdk\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ProductMatchingFileMessage Structs
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ProductMatchingFileMessage
 * @package Cdiscount
 * @subpackage Structs
 */
class CdiscountProductMatchingFileMessage extends CdiscountServiceBaseAPIMessage
{
    /**
     * The PackageId
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $PackageId;
    /**
     * The ProductMatchingList
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfProductMatching
     */
    public $ProductMatchingList;
    /**
     * Constructor method for ProductMatchingFileMessage
     * @uses CdiscountProductMatchingFileMessage::setPackageId()
     * @uses CdiscountProductMatchingFileMessage::setProductMatchingList()
     * @param int $packageId
     * @param \SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfProductMatching $productMatchingList
     */
    public function __construct($packageId = null, \SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfProductMatching $productMatchingList = null)
    {
        $this
            ->setPackageId($packageId)
            ->setProductMatchingList($productMatchingList);
    }
    /**
     * Get PackageId value
     * @return int|null
     */
    public function getPackageId()
    {
        return $this->PackageId;
    }
    /**
     * Set PackageId value
     * @param int $packageId
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountProductMatchingFileMessage
     */
    public function setPackageId($packageId = null)
    {
        // validation for constraint: int
        if (!is_null($packageId) && !(is_int($packageId) || ctype_digit($packageId))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($packageId, true), gettype($packageId)), __LINE__);
        }
        $this->PackageId = $packageId;
        return $this;
    }
    /**
     * Get ProductMatchingList value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfProductMatching|null
     */
    public function getProductMatchingList()
    {
        return isset($this->ProductMatchingList) ? $this->ProductMatchingList : null;
    }
    /**
     * Set ProductMatchingList value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfProductMatching $productMatchingList
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountProductMatchingFileMessage
     */
    public function setProductMatchingList(\SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfProductMatching $productMatchingList = null)
    {
        if (is_null($productMatchingList) || (is_array($productMatchingList) && empty($productMatchingList))) {
            unset($this->ProductMatchingList);
        } else {
            $this->ProductMatchingList = $productMatchingList;
        }
        return $this;
    }
}
