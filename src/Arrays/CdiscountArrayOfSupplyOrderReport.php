<?php

declare(strict_types=1);

namespace SengentoBV\CdiscountMarketplaceSdk\Arrays;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfSupplyOrderReport Arrays
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfSupplyOrderReport
 * @package Cdiscount
 * @subpackage Arrays
 */
class CdiscountArrayOfSupplyOrderReport extends AbstractStructArrayBase
{
    /**
     * The SupplyOrderReport
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountSupplyOrderReport[]
     */
    protected ?array $SupplyOrderReport = null;
    /**
     * Constructor method for ArrayOfSupplyOrderReport
     * @uses CdiscountArrayOfSupplyOrderReport::setSupplyOrderReport()
     * @param \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountSupplyOrderReport[] $supplyOrderReport
     */
    public function __construct(?array $supplyOrderReport = null)
    {
        $this
            ->setSupplyOrderReport($supplyOrderReport);
    }
    /**
     * Get SupplyOrderReport value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountSupplyOrderReport[]
     */
    public function getSupplyOrderReport(): ?array
    {
        return isset($this->SupplyOrderReport) ? $this->SupplyOrderReport : null;
    }
    /**
     * This method is responsible for validating the values passed to the setSupplyOrderReport method
     * This method is willingly generated in order to preserve the one-line inline validation within the setSupplyOrderReport method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateSupplyOrderReportForArrayConstraintsFromSetSupplyOrderReport(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfSupplyOrderReportSupplyOrderReportItem) {
            // validation for constraint: itemType
            if (!$arrayOfSupplyOrderReportSupplyOrderReportItem instanceof \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountSupplyOrderReport) {
                $invalidValues[] = is_object($arrayOfSupplyOrderReportSupplyOrderReportItem) ? get_class($arrayOfSupplyOrderReportSupplyOrderReportItem) : sprintf('%s(%s)', gettype($arrayOfSupplyOrderReportSupplyOrderReportItem), var_export($arrayOfSupplyOrderReportSupplyOrderReportItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The SupplyOrderReport property can only contain items of type \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountSupplyOrderReport, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set SupplyOrderReport value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws InvalidArgumentException
     * @param \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountSupplyOrderReport[] $supplyOrderReport
     * @return \SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfSupplyOrderReport
     */
    public function setSupplyOrderReport(?array $supplyOrderReport = null): self
    {
        // validation for constraint: array
        if ('' !== ($supplyOrderReportArrayErrorMessage = self::validateSupplyOrderReportForArrayConstraintsFromSetSupplyOrderReport($supplyOrderReport))) {
            throw new InvalidArgumentException($supplyOrderReportArrayErrorMessage, __LINE__);
        }
        if (is_null($supplyOrderReport) || (is_array($supplyOrderReport) && empty($supplyOrderReport))) {
            unset($this->SupplyOrderReport);
        } else {
            $this->SupplyOrderReport = $supplyOrderReport;
        }
        
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountSupplyOrderReport|null
     */
    public function current(): ?\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountSupplyOrderReport
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountSupplyOrderReport|null
     */
    public function item($index): ?\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountSupplyOrderReport
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountSupplyOrderReport|null
     */
    public function first(): ?\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountSupplyOrderReport
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountSupplyOrderReport|null
     */
    public function last(): ?\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountSupplyOrderReport
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountSupplyOrderReport|null
     */
    public function offsetGet($offset): ?\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountSupplyOrderReport
    {
        return parent::offsetGet($offset);
    }
    /**
     * Add element to array
     * @see AbstractStructArrayBase::add()
     * @throws InvalidArgumentException
     * @param \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountSupplyOrderReport $item
     * @return \SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfSupplyOrderReport
     */
    public function add($item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountSupplyOrderReport) {
            throw new InvalidArgumentException(sprintf('The SupplyOrderReport property can only contain items of type \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountSupplyOrderReport, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        return parent::add($item);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string SupplyOrderReport
     */
    public function getAttributeName(): string
    {
        return 'SupplyOrderReport';
    }
}
