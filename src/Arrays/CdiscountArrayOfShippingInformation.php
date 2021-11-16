<?php

declare(strict_types=1);

namespace SengentoBV\CdiscountMarketplaceSdk\Arrays;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfShippingInformation Arrays
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfShippingInformation
 * @package Cdiscount
 * @subpackage Arrays
 */
class CdiscountArrayOfShippingInformation extends AbstractStructArrayBase
{
    /**
     * The ShippingInformation
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountShippingInformation[]
     */
    protected ?array $ShippingInformation = null;
    /**
     * Constructor method for ArrayOfShippingInformation
     * @uses CdiscountArrayOfShippingInformation::setShippingInformation()
     * @param \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountShippingInformation[] $shippingInformation
     */
    public function __construct(?array $shippingInformation = null)
    {
        $this
            ->setShippingInformation($shippingInformation);
    }
    /**
     * Get ShippingInformation value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountShippingInformation[]
     */
    public function getShippingInformation(): ?array
    {
        return isset($this->ShippingInformation) ? $this->ShippingInformation : null;
    }
    /**
     * This method is responsible for validating the values passed to the setShippingInformation method
     * This method is willingly generated in order to preserve the one-line inline validation within the setShippingInformation method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateShippingInformationForArrayConstraintsFromSetShippingInformation(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfShippingInformationShippingInformationItem) {
            // validation for constraint: itemType
            if (!$arrayOfShippingInformationShippingInformationItem instanceof \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountShippingInformation) {
                $invalidValues[] = is_object($arrayOfShippingInformationShippingInformationItem) ? get_class($arrayOfShippingInformationShippingInformationItem) : sprintf('%s(%s)', gettype($arrayOfShippingInformationShippingInformationItem), var_export($arrayOfShippingInformationShippingInformationItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The ShippingInformation property can only contain items of type \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountShippingInformation, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set ShippingInformation value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws InvalidArgumentException
     * @param \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountShippingInformation[] $shippingInformation
     * @return \SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfShippingInformation
     */
    public function setShippingInformation(?array $shippingInformation = null): self
    {
        // validation for constraint: array
        if ('' !== ($shippingInformationArrayErrorMessage = self::validateShippingInformationForArrayConstraintsFromSetShippingInformation($shippingInformation))) {
            throw new InvalidArgumentException($shippingInformationArrayErrorMessage, __LINE__);
        }
        if (is_null($shippingInformation) || (is_array($shippingInformation) && empty($shippingInformation))) {
            unset($this->ShippingInformation);
        } else {
            $this->ShippingInformation = $shippingInformation;
        }
        
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountShippingInformation|null
     */
    public function current(): ?\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountShippingInformation
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountShippingInformation|null
     */
    public function item($index): ?\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountShippingInformation
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountShippingInformation|null
     */
    public function first(): ?\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountShippingInformation
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountShippingInformation|null
     */
    public function last(): ?\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountShippingInformation
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountShippingInformation|null
     */
    public function offsetGet($offset): ?\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountShippingInformation
    {
        return parent::offsetGet($offset);
    }
    /**
     * Add element to array
     * @see AbstractStructArrayBase::add()
     * @throws InvalidArgumentException
     * @param \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountShippingInformation $item
     * @return \SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfShippingInformation
     */
    public function add($item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountShippingInformation) {
            throw new InvalidArgumentException(sprintf('The ShippingInformation property can only contain items of type \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountShippingInformation, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        return parent::add($item);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string ShippingInformation
     */
    public function getAttributeName(): string
    {
        return 'ShippingInformation';
    }
}
