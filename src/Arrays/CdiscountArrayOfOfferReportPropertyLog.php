<?php

declare(strict_types=1);

namespace SengentoBV\CdiscountMarketplaceSdk\Arrays;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfOfferReportPropertyLog Arrays
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfOfferReportPropertyLog
 * @package Cdiscount
 * @subpackage Arrays
 */
class CdiscountArrayOfOfferReportPropertyLog extends AbstractStructArrayBase
{
    /**
     * The OfferReportPropertyLog
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountOfferReportPropertyLog[]
     */
    protected ?array $OfferReportPropertyLog = null;
    /**
     * Constructor method for ArrayOfOfferReportPropertyLog
     * @uses CdiscountArrayOfOfferReportPropertyLog::setOfferReportPropertyLog()
     * @param \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountOfferReportPropertyLog[] $offerReportPropertyLog
     */
    public function __construct(?array $offerReportPropertyLog = null)
    {
        $this
            ->setOfferReportPropertyLog($offerReportPropertyLog);
    }
    /**
     * Get OfferReportPropertyLog value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountOfferReportPropertyLog[]
     */
    public function getOfferReportPropertyLog(): ?array
    {
        return isset($this->OfferReportPropertyLog) ? $this->OfferReportPropertyLog : null;
    }
    /**
     * This method is responsible for validating the values passed to the setOfferReportPropertyLog method
     * This method is willingly generated in order to preserve the one-line inline validation within the setOfferReportPropertyLog method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateOfferReportPropertyLogForArrayConstraintsFromSetOfferReportPropertyLog(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfOfferReportPropertyLogOfferReportPropertyLogItem) {
            // validation for constraint: itemType
            if (!$arrayOfOfferReportPropertyLogOfferReportPropertyLogItem instanceof \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountOfferReportPropertyLog) {
                $invalidValues[] = is_object($arrayOfOfferReportPropertyLogOfferReportPropertyLogItem) ? get_class($arrayOfOfferReportPropertyLogOfferReportPropertyLogItem) : sprintf('%s(%s)', gettype($arrayOfOfferReportPropertyLogOfferReportPropertyLogItem), var_export($arrayOfOfferReportPropertyLogOfferReportPropertyLogItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The OfferReportPropertyLog property can only contain items of type \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountOfferReportPropertyLog, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set OfferReportPropertyLog value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws InvalidArgumentException
     * @param \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountOfferReportPropertyLog[] $offerReportPropertyLog
     * @return \SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfOfferReportPropertyLog
     */
    public function setOfferReportPropertyLog(?array $offerReportPropertyLog = null): self
    {
        // validation for constraint: array
        if ('' !== ($offerReportPropertyLogArrayErrorMessage = self::validateOfferReportPropertyLogForArrayConstraintsFromSetOfferReportPropertyLog($offerReportPropertyLog))) {
            throw new InvalidArgumentException($offerReportPropertyLogArrayErrorMessage, __LINE__);
        }
        if (is_null($offerReportPropertyLog) || (is_array($offerReportPropertyLog) && empty($offerReportPropertyLog))) {
            unset($this->OfferReportPropertyLog);
        } else {
            $this->OfferReportPropertyLog = $offerReportPropertyLog;
        }
        
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountOfferReportPropertyLog|null
     */
    public function current(): ?\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountOfferReportPropertyLog
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountOfferReportPropertyLog|null
     */
    public function item($index): ?\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountOfferReportPropertyLog
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountOfferReportPropertyLog|null
     */
    public function first(): ?\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountOfferReportPropertyLog
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountOfferReportPropertyLog|null
     */
    public function last(): ?\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountOfferReportPropertyLog
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountOfferReportPropertyLog|null
     */
    public function offsetGet($offset): ?\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountOfferReportPropertyLog
    {
        return parent::offsetGet($offset);
    }
    /**
     * Add element to array
     * @see AbstractStructArrayBase::add()
     * @throws InvalidArgumentException
     * @param \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountOfferReportPropertyLog $item
     * @return \SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfOfferReportPropertyLog
     */
    public function add($item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountOfferReportPropertyLog) {
            throw new InvalidArgumentException(sprintf('The OfferReportPropertyLog property can only contain items of type \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountOfferReportPropertyLog, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        return parent::add($item);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string OfferReportPropertyLog
     */
    public function getAttributeName(): string
    {
        return 'OfferReportPropertyLog';
    }
}
