<?php

namespace SengentoBV\CdiscountMarketplaceSdk\Arrays;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfFulfilmentActivationReport Arrays
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfFulfilmentActivationReport
 * @package Cdiscount
 * @subpackage Arrays
 */
class CdiscountArrayOfFulfilmentActivationReport extends AbstractStructArrayBase
{
    /**
     * The FulfilmentActivationReport
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountFulfilmentActivationReport[]
     */
    public $FulfilmentActivationReport;
    /**
     * Constructor method for ArrayOfFulfilmentActivationReport
     * @uses CdiscountArrayOfFulfilmentActivationReport::setFulfilmentActivationReport()
     * @param \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountFulfilmentActivationReport[] $fulfilmentActivationReport
     */
    public function __construct(array $fulfilmentActivationReport = array())
    {
        $this
            ->setFulfilmentActivationReport($fulfilmentActivationReport);
    }
    /**
     * Get FulfilmentActivationReport value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountFulfilmentActivationReport[]|null
     */
    public function getFulfilmentActivationReport()
    {
        return isset($this->FulfilmentActivationReport) ? $this->FulfilmentActivationReport : null;
    }
    /**
     * This method is responsible for validating the values passed to the setFulfilmentActivationReport method
     * This method is willingly generated in order to preserve the one-line inline validation within the setFulfilmentActivationReport method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateFulfilmentActivationReportForArrayConstraintsFromSetFulfilmentActivationReport(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfFulfilmentActivationReportFulfilmentActivationReportItem) {
            // validation for constraint: itemType
            if (!$arrayOfFulfilmentActivationReportFulfilmentActivationReportItem instanceof \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountFulfilmentActivationReport) {
                $invalidValues[] = is_object($arrayOfFulfilmentActivationReportFulfilmentActivationReportItem) ? get_class($arrayOfFulfilmentActivationReportFulfilmentActivationReportItem) : sprintf('%s(%s)', gettype($arrayOfFulfilmentActivationReportFulfilmentActivationReportItem), var_export($arrayOfFulfilmentActivationReportFulfilmentActivationReportItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The FulfilmentActivationReport property can only contain items of type \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountFulfilmentActivationReport, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set FulfilmentActivationReport value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountFulfilmentActivationReport[] $fulfilmentActivationReport
     * @return \SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfFulfilmentActivationReport
     */
    public function setFulfilmentActivationReport(array $fulfilmentActivationReport = array())
    {
        // validation for constraint: array
        if ('' !== ($fulfilmentActivationReportArrayErrorMessage = self::validateFulfilmentActivationReportForArrayConstraintsFromSetFulfilmentActivationReport($fulfilmentActivationReport))) {
            throw new \InvalidArgumentException($fulfilmentActivationReportArrayErrorMessage, __LINE__);
        }
        if (is_null($fulfilmentActivationReport) || (is_array($fulfilmentActivationReport) && empty($fulfilmentActivationReport))) {
            unset($this->FulfilmentActivationReport);
        } else {
            $this->FulfilmentActivationReport = $fulfilmentActivationReport;
        }
        return $this;
    }
    /**
     * Add item to FulfilmentActivationReport value
     * @throws \InvalidArgumentException
     * @param \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountFulfilmentActivationReport $item
     * @return \SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfFulfilmentActivationReport
     */
    public function addToFulfilmentActivationReport(\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountFulfilmentActivationReport $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountFulfilmentActivationReport) {
            throw new \InvalidArgumentException(sprintf('The FulfilmentActivationReport property can only contain items of type \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountFulfilmentActivationReport, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->FulfilmentActivationReport[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountFulfilmentActivationReport|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountFulfilmentActivationReport|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountFulfilmentActivationReport|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountFulfilmentActivationReport|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountFulfilmentActivationReport|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string FulfilmentActivationReport
     */
    public function getAttributeName()
    {
        return 'FulfilmentActivationReport';
    }
}
