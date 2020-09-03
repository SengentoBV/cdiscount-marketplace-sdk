<?php

namespace SengentoBV\CdiscountMarketplaceSdk\Arrays;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfOfferReportLog Arrays
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfOfferReportLog
 * @package Cdiscount
 * @subpackage Arrays
 */
class CdiscountArrayOfOfferReportLog extends AbstractStructArrayBase
{
    /**
     * The OfferReportLog
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountOfferReportLog[]
     */
    public $OfferReportLog;
    /**
     * Constructor method for ArrayOfOfferReportLog
     * @uses CdiscountArrayOfOfferReportLog::setOfferReportLog()
     * @param \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountOfferReportLog[] $offerReportLog
     */
    public function __construct(array $offerReportLog = array())
    {
        $this
            ->setOfferReportLog($offerReportLog);
    }
    /**
     * Get OfferReportLog value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountOfferReportLog[]|null
     */
    public function getOfferReportLog()
    {
        return isset($this->OfferReportLog) ? $this->OfferReportLog : null;
    }
    /**
     * This method is responsible for validating the values passed to the setOfferReportLog method
     * This method is willingly generated in order to preserve the one-line inline validation within the setOfferReportLog method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateOfferReportLogForArrayConstraintsFromSetOfferReportLog(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfOfferReportLogOfferReportLogItem) {
            // validation for constraint: itemType
            if (!$arrayOfOfferReportLogOfferReportLogItem instanceof \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountOfferReportLog) {
                $invalidValues[] = is_object($arrayOfOfferReportLogOfferReportLogItem) ? get_class($arrayOfOfferReportLogOfferReportLogItem) : sprintf('%s(%s)', gettype($arrayOfOfferReportLogOfferReportLogItem), var_export($arrayOfOfferReportLogOfferReportLogItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The OfferReportLog property can only contain items of type \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountOfferReportLog, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set OfferReportLog value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountOfferReportLog[] $offerReportLog
     * @return \SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfOfferReportLog
     */
    public function setOfferReportLog(array $offerReportLog = array())
    {
        // validation for constraint: array
        if ('' !== ($offerReportLogArrayErrorMessage = self::validateOfferReportLogForArrayConstraintsFromSetOfferReportLog($offerReportLog))) {
            throw new \InvalidArgumentException($offerReportLogArrayErrorMessage, __LINE__);
        }
        if (is_null($offerReportLog) || (is_array($offerReportLog) && empty($offerReportLog))) {
            unset($this->OfferReportLog);
        } else {
            $this->OfferReportLog = $offerReportLog;
        }
        return $this;
    }
    /**
     * Add item to OfferReportLog value
     * @throws \InvalidArgumentException
     * @param \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountOfferReportLog $item
     * @return \SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfOfferReportLog
     */
    public function addToOfferReportLog(\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountOfferReportLog $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountOfferReportLog) {
            throw new \InvalidArgumentException(sprintf('The OfferReportLog property can only contain items of type \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountOfferReportLog, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->OfferReportLog[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountOfferReportLog|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountOfferReportLog|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountOfferReportLog|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountOfferReportLog|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountOfferReportLog|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string OfferReportLog
     */
    public function getAttributeName()
    {
        return 'OfferReportLog';
    }
}
