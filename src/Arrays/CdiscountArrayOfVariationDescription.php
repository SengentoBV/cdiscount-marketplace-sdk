<?php

namespace SengentoBV\CdiscountMarketplaceSdk\Arrays;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfVariationDescription Arrays
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfVariationDescription
 * @package Cdiscount
 * @subpackage Arrays
 */
class CdiscountArrayOfVariationDescription extends AbstractStructArrayBase
{
    /**
     * The VariationDescription
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountVariationDescription[]
     */
    public $VariationDescription;
    /**
     * Constructor method for ArrayOfVariationDescription
     * @uses CdiscountArrayOfVariationDescription::setVariationDescription()
     * @param \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountVariationDescription[] $variationDescription
     */
    public function __construct(array $variationDescription = array())
    {
        $this
            ->setVariationDescription($variationDescription);
    }
    /**
     * Get VariationDescription value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountVariationDescription[]|null
     */
    public function getVariationDescription()
    {
        return isset($this->VariationDescription) ? $this->VariationDescription : null;
    }
    /**
     * This method is responsible for validating the values passed to the setVariationDescription method
     * This method is willingly generated in order to preserve the one-line inline validation within the setVariationDescription method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateVariationDescriptionForArrayConstraintsFromSetVariationDescription(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfVariationDescriptionVariationDescriptionItem) {
            // validation for constraint: itemType
            if (!$arrayOfVariationDescriptionVariationDescriptionItem instanceof \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountVariationDescription) {
                $invalidValues[] = is_object($arrayOfVariationDescriptionVariationDescriptionItem) ? get_class($arrayOfVariationDescriptionVariationDescriptionItem) : sprintf('%s(%s)', gettype($arrayOfVariationDescriptionVariationDescriptionItem), var_export($arrayOfVariationDescriptionVariationDescriptionItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The VariationDescription property can only contain items of type \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountVariationDescription, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set VariationDescription value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountVariationDescription[] $variationDescription
     * @return \SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfVariationDescription
     */
    public function setVariationDescription(array $variationDescription = array())
    {
        // validation for constraint: array
        if ('' !== ($variationDescriptionArrayErrorMessage = self::validateVariationDescriptionForArrayConstraintsFromSetVariationDescription($variationDescription))) {
            throw new \InvalidArgumentException($variationDescriptionArrayErrorMessage, __LINE__);
        }
        if (is_null($variationDescription) || (is_array($variationDescription) && empty($variationDescription))) {
            unset($this->VariationDescription);
        } else {
            $this->VariationDescription = $variationDescription;
        }
        return $this;
    }
    /**
     * Add item to VariationDescription value
     * @throws \InvalidArgumentException
     * @param \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountVariationDescription $item
     * @return \SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfVariationDescription
     */
    public function addToVariationDescription(\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountVariationDescription $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountVariationDescription) {
            throw new \InvalidArgumentException(sprintf('The VariationDescription property can only contain items of type \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountVariationDescription, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->VariationDescription[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountVariationDescription|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountVariationDescription|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountVariationDescription|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountVariationDescription|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountVariationDescription|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string VariationDescription
     */
    public function getAttributeName(): string
    {
        return 'VariationDescription';
    }
}
