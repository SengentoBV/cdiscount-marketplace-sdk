<?php

declare(strict_types=1);

namespace SengentoBV\CdiscountMarketplaceSdk\Arrays;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfCarrier Arrays
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfCarrier
 * @package Cdiscount
 * @subpackage Arrays
 */
class CdiscountArrayOfCarrier extends AbstractStructArrayBase
{
    /**
     * The Carrier
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountCarrier[]
     */
    protected ?array $Carrier = null;
    /**
     * Constructor method for ArrayOfCarrier
     * @uses CdiscountArrayOfCarrier::setCarrier()
     * @param \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountCarrier[] $carrier
     */
    public function __construct(?array $carrier = null)
    {
        $this
            ->setCarrier($carrier);
    }
    /**
     * Get Carrier value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountCarrier[]
     */
    public function getCarrier(): ?array
    {
        return isset($this->Carrier) ? $this->Carrier : null;
    }
    /**
     * This method is responsible for validating the values passed to the setCarrier method
     * This method is willingly generated in order to preserve the one-line inline validation within the setCarrier method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateCarrierForArrayConstraintsFromSetCarrier(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfCarrierCarrierItem) {
            // validation for constraint: itemType
            if (!$arrayOfCarrierCarrierItem instanceof \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountCarrier) {
                $invalidValues[] = is_object($arrayOfCarrierCarrierItem) ? get_class($arrayOfCarrierCarrierItem) : sprintf('%s(%s)', gettype($arrayOfCarrierCarrierItem), var_export($arrayOfCarrierCarrierItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Carrier property can only contain items of type \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountCarrier, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set Carrier value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws InvalidArgumentException
     * @param \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountCarrier[] $carrier
     * @return \SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfCarrier
     */
    public function setCarrier(?array $carrier = null): self
    {
        // validation for constraint: array
        if ('' !== ($carrierArrayErrorMessage = self::validateCarrierForArrayConstraintsFromSetCarrier($carrier))) {
            throw new InvalidArgumentException($carrierArrayErrorMessage, __LINE__);
        }
        if (is_null($carrier) || (is_array($carrier) && empty($carrier))) {
            unset($this->Carrier);
        } else {
            $this->Carrier = $carrier;
        }
        
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountCarrier|null
     */
    public function current(): ?\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountCarrier
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountCarrier|null
     */
    public function item($index): ?\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountCarrier
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountCarrier|null
     */
    public function first(): ?\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountCarrier
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountCarrier|null
     */
    public function last(): ?\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountCarrier
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountCarrier|null
     */
    public function offsetGet($offset): ?\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountCarrier
    {
        return parent::offsetGet($offset);
    }
    /**
     * Add element to array
     * @see AbstractStructArrayBase::add()
     * @throws InvalidArgumentException
     * @param \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountCarrier $item
     * @return \SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfCarrier
     */
    public function add($item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountCarrier) {
            throw new InvalidArgumentException(sprintf('The Carrier property can only contain items of type \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountCarrier, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        return parent::add($item);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string Carrier
     */
    public function getAttributeName(): string
    {
        return 'Carrier';
    }
}
