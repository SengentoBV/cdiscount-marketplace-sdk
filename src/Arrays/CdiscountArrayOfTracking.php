<?php

declare(strict_types=1);

namespace SengentoBV\CdiscountMarketplaceSdk\Arrays;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfTracking Arrays
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfTracking
 * @package Cdiscount
 * @subpackage Arrays
 */
class CdiscountArrayOfTracking extends AbstractStructArrayBase
{
    /**
     * The Tracking
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountTracking[]
     */
    protected ?array $Tracking = null;
    /**
     * Constructor method for ArrayOfTracking
     * @uses CdiscountArrayOfTracking::setTracking()
     * @param \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountTracking[] $tracking
     */
    public function __construct(?array $tracking = null)
    {
        $this
            ->setTracking($tracking);
    }
    /**
     * Get Tracking value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountTracking[]
     */
    public function getTracking(): ?array
    {
        return isset($this->Tracking) ? $this->Tracking : null;
    }
    /**
     * This method is responsible for validating the values passed to the setTracking method
     * This method is willingly generated in order to preserve the one-line inline validation within the setTracking method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateTrackingForArrayConstraintsFromSetTracking(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfTrackingTrackingItem) {
            // validation for constraint: itemType
            if (!$arrayOfTrackingTrackingItem instanceof \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountTracking) {
                $invalidValues[] = is_object($arrayOfTrackingTrackingItem) ? get_class($arrayOfTrackingTrackingItem) : sprintf('%s(%s)', gettype($arrayOfTrackingTrackingItem), var_export($arrayOfTrackingTrackingItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Tracking property can only contain items of type \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountTracking, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set Tracking value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws InvalidArgumentException
     * @param \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountTracking[] $tracking
     * @return \SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfTracking
     */
    public function setTracking(?array $tracking = null): self
    {
        // validation for constraint: array
        if ('' !== ($trackingArrayErrorMessage = self::validateTrackingForArrayConstraintsFromSetTracking($tracking))) {
            throw new InvalidArgumentException($trackingArrayErrorMessage, __LINE__);
        }
        if (is_null($tracking) || (is_array($tracking) && empty($tracking))) {
            unset($this->Tracking);
        } else {
            $this->Tracking = $tracking;
        }
        
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountTracking|null
     */
    public function current(): ?\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountTracking
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountTracking|null
     */
    public function item($index): ?\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountTracking
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountTracking|null
     */
    public function first(): ?\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountTracking
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountTracking|null
     */
    public function last(): ?\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountTracking
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountTracking|null
     */
    public function offsetGet($offset): ?\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountTracking
    {
        return parent::offsetGet($offset);
    }
    /**
     * Add element to array
     * @see AbstractStructArrayBase::add()
     * @throws InvalidArgumentException
     * @param \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountTracking $item
     * @return \SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfTracking
     */
    public function add($item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountTracking) {
            throw new InvalidArgumentException(sprintf('The Tracking property can only contain items of type \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountTracking, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        return parent::add($item);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string Tracking
     */
    public function getAttributeName(): string
    {
        return 'Tracking';
    }
}
