<?php

namespace SengentoBV\CdiscountMarketplaceSdk\Arrays;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfFulfilmentActivationReportDetails Arrays
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfFulfilmentActivationReportDetails
 * @package Cdiscount
 * @subpackage Arrays
 */
class CdiscountArrayOfFulfilmentActivationReportDetails extends AbstractStructArrayBase
{
    /**
     * The FulfilmentActivationReportDetails
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountFulfilmentActivationReportDetails[]
     */
    public $FulfilmentActivationReportDetails;
    /**
     * Constructor method for ArrayOfFulfilmentActivationReportDetails
     * @uses CdiscountArrayOfFulfilmentActivationReportDetails::setFulfilmentActivationReportDetails()
     * @param \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountFulfilmentActivationReportDetails[] $fulfilmentActivationReportDetails
     */
    public function __construct(array $fulfilmentActivationReportDetails = array())
    {
        $this
            ->setFulfilmentActivationReportDetails($fulfilmentActivationReportDetails);
    }
    /**
     * Get FulfilmentActivationReportDetails value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountFulfilmentActivationReportDetails[]|null
     */
    public function getFulfilmentActivationReportDetails()
    {
        return isset($this->FulfilmentActivationReportDetails) ? $this->FulfilmentActivationReportDetails : null;
    }
    /**
     * This method is responsible for validating the values passed to the setFulfilmentActivationReportDetails method
     * This method is willingly generated in order to preserve the one-line inline validation within the setFulfilmentActivationReportDetails method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateFulfilmentActivationReportDetailsForArrayConstraintsFromSetFulfilmentActivationReportDetails(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfFulfilmentActivationReportDetailsFulfilmentActivationReportDetailsItem) {
            // validation for constraint: itemType
            if (!$arrayOfFulfilmentActivationReportDetailsFulfilmentActivationReportDetailsItem instanceof \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountFulfilmentActivationReportDetails) {
                $invalidValues[] = is_object($arrayOfFulfilmentActivationReportDetailsFulfilmentActivationReportDetailsItem) ? get_class($arrayOfFulfilmentActivationReportDetailsFulfilmentActivationReportDetailsItem) : sprintf('%s(%s)', gettype($arrayOfFulfilmentActivationReportDetailsFulfilmentActivationReportDetailsItem), var_export($arrayOfFulfilmentActivationReportDetailsFulfilmentActivationReportDetailsItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The FulfilmentActivationReportDetails property can only contain items of type \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountFulfilmentActivationReportDetails, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set FulfilmentActivationReportDetails value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountFulfilmentActivationReportDetails[] $fulfilmentActivationReportDetails
     * @return \SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfFulfilmentActivationReportDetails
     */
    public function setFulfilmentActivationReportDetails(array $fulfilmentActivationReportDetails = array())
    {
        // validation for constraint: array
        if ('' !== ($fulfilmentActivationReportDetailsArrayErrorMessage = self::validateFulfilmentActivationReportDetailsForArrayConstraintsFromSetFulfilmentActivationReportDetails($fulfilmentActivationReportDetails))) {
            throw new \InvalidArgumentException($fulfilmentActivationReportDetailsArrayErrorMessage, __LINE__);
        }
        if (is_null($fulfilmentActivationReportDetails) || (is_array($fulfilmentActivationReportDetails) && empty($fulfilmentActivationReportDetails))) {
            unset($this->FulfilmentActivationReportDetails);
        } else {
            $this->FulfilmentActivationReportDetails = $fulfilmentActivationReportDetails;
        }
        return $this;
    }
    /**
     * Add item to FulfilmentActivationReportDetails value
     * @throws \InvalidArgumentException
     * @param \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountFulfilmentActivationReportDetails $item
     * @return \SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfFulfilmentActivationReportDetails
     */
    public function addToFulfilmentActivationReportDetails(\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountFulfilmentActivationReportDetails $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountFulfilmentActivationReportDetails) {
            throw new \InvalidArgumentException(sprintf('The FulfilmentActivationReportDetails property can only contain items of type \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountFulfilmentActivationReportDetails, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->FulfilmentActivationReportDetails[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountFulfilmentActivationReportDetails|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountFulfilmentActivationReportDetails|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountFulfilmentActivationReportDetails|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountFulfilmentActivationReportDetails|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountFulfilmentActivationReportDetails|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string FulfilmentActivationReportDetails
     */
    public function getAttributeName()
    {
        return 'FulfilmentActivationReportDetails';
    }
}
