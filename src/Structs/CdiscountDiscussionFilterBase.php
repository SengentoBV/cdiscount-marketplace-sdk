<?php

namespace SengentoBV\CdiscountMarketplaceSdk\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DiscussionFilterBase Structs
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:DiscussionFilterBase
 * @package Cdiscount
 * @subpackage Structs
 */
class CdiscountDiscussionFilterBase extends AbstractStructBase
{
    /**
     * The BeginCreationDate
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $BeginCreationDate;
    /**
     * The BeginModificationDate
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $BeginModificationDate;
    /**
     * The EndCreationDate
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $EndCreationDate;
    /**
     * The EndModificationDate
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $EndModificationDate;
    /**
     * The StatusList
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfDiscussionStateFilter
     */
    public $StatusList;
    /**
     * Constructor method for DiscussionFilterBase
     * @uses CdiscountDiscussionFilterBase::setBeginCreationDate()
     * @uses CdiscountDiscussionFilterBase::setBeginModificationDate()
     * @uses CdiscountDiscussionFilterBase::setEndCreationDate()
     * @uses CdiscountDiscussionFilterBase::setEndModificationDate()
     * @uses CdiscountDiscussionFilterBase::setStatusList()
     * @param string $beginCreationDate
     * @param string $beginModificationDate
     * @param string $endCreationDate
     * @param string $endModificationDate
     * @param \SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfDiscussionStateFilter $statusList
     */
    public function __construct($beginCreationDate = null, $beginModificationDate = null, $endCreationDate = null, $endModificationDate = null, \SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfDiscussionStateFilter $statusList = null)
    {
        $this
            ->setBeginCreationDate($beginCreationDate)
            ->setBeginModificationDate($beginModificationDate)
            ->setEndCreationDate($endCreationDate)
            ->setEndModificationDate($endModificationDate)
            ->setStatusList($statusList);
    }
    /**
     * Get BeginCreationDate value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getBeginCreationDate()
    {
        return isset($this->BeginCreationDate) ? $this->BeginCreationDate : null;
    }
    /**
     * Set BeginCreationDate value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $beginCreationDate
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountDiscussionFilterBase
     */
    public function setBeginCreationDate($beginCreationDate = null)
    {
        // validation for constraint: string
        if (!is_null($beginCreationDate) && !is_string($beginCreationDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($beginCreationDate, true), gettype($beginCreationDate)), __LINE__);
        }
        if (is_null($beginCreationDate) || (is_array($beginCreationDate) && empty($beginCreationDate))) {
            unset($this->BeginCreationDate);
        } else {
            $this->BeginCreationDate = $beginCreationDate;
        }
        return $this;
    }
    /**
     * Get BeginModificationDate value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getBeginModificationDate()
    {
        return isset($this->BeginModificationDate) ? $this->BeginModificationDate : null;
    }
    /**
     * Set BeginModificationDate value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $beginModificationDate
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountDiscussionFilterBase
     */
    public function setBeginModificationDate($beginModificationDate = null)
    {
        // validation for constraint: string
        if (!is_null($beginModificationDate) && !is_string($beginModificationDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($beginModificationDate, true), gettype($beginModificationDate)), __LINE__);
        }
        if (is_null($beginModificationDate) || (is_array($beginModificationDate) && empty($beginModificationDate))) {
            unset($this->BeginModificationDate);
        } else {
            $this->BeginModificationDate = $beginModificationDate;
        }
        return $this;
    }
    /**
     * Get EndCreationDate value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getEndCreationDate()
    {
        return isset($this->EndCreationDate) ? $this->EndCreationDate : null;
    }
    /**
     * Set EndCreationDate value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $endCreationDate
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountDiscussionFilterBase
     */
    public function setEndCreationDate($endCreationDate = null)
    {
        // validation for constraint: string
        if (!is_null($endCreationDate) && !is_string($endCreationDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($endCreationDate, true), gettype($endCreationDate)), __LINE__);
        }
        if (is_null($endCreationDate) || (is_array($endCreationDate) && empty($endCreationDate))) {
            unset($this->EndCreationDate);
        } else {
            $this->EndCreationDate = $endCreationDate;
        }
        return $this;
    }
    /**
     * Get EndModificationDate value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getEndModificationDate()
    {
        return isset($this->EndModificationDate) ? $this->EndModificationDate : null;
    }
    /**
     * Set EndModificationDate value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $endModificationDate
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountDiscussionFilterBase
     */
    public function setEndModificationDate($endModificationDate = null)
    {
        // validation for constraint: string
        if (!is_null($endModificationDate) && !is_string($endModificationDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($endModificationDate, true), gettype($endModificationDate)), __LINE__);
        }
        if (is_null($endModificationDate) || (is_array($endModificationDate) && empty($endModificationDate))) {
            unset($this->EndModificationDate);
        } else {
            $this->EndModificationDate = $endModificationDate;
        }
        return $this;
    }
    /**
     * Get StatusList value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfDiscussionStateFilter|null
     */
    public function getStatusList()
    {
        return isset($this->StatusList) ? $this->StatusList : null;
    }
    /**
     * Set StatusList value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfDiscussionStateFilter $statusList
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountDiscussionFilterBase
     */
    public function setStatusList(\SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfDiscussionStateFilter $statusList = null)
    {
        if (is_null($statusList) || (is_array($statusList) && empty($statusList))) {
            unset($this->StatusList);
        } else {
            $this->StatusList = $statusList;
        }
        return $this;
    }
}
