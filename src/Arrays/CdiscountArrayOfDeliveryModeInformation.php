<?php

namespace SengentoBV\CdiscountMarketplaceSdk\Arrays;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfDeliveryModeInformation Arrays
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfDeliveryModeInformation
 * @package Cdiscount
 * @subpackage Arrays
 */
class CdiscountArrayOfDeliveryModeInformation extends AbstractStructArrayBase
{
    /**
     * The DeliveryModeInformation
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountDeliveryModeInformation[]
     */
    public $DeliveryModeInformation;
    /**
     * Constructor method for ArrayOfDeliveryModeInformation
     * @uses CdiscountArrayOfDeliveryModeInformation::setDeliveryModeInformation()
     * @param \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountDeliveryModeInformation[] $deliveryModeInformation
     */
    public function __construct(array $deliveryModeInformation = array())
    {
        $this
            ->setDeliveryModeInformation($deliveryModeInformation);
    }
    /**
     * Get DeliveryModeInformation value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountDeliveryModeInformation[]|null
     */
    public function getDeliveryModeInformation()
    {
        return isset($this->DeliveryModeInformation) ? $this->DeliveryModeInformation : null;
    }
    /**
     * This method is responsible for validating the values passed to the setDeliveryModeInformation method
     * This method is willingly generated in order to preserve the one-line inline validation within the setDeliveryModeInformation method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateDeliveryModeInformationForArrayConstraintsFromSetDeliveryModeInformation(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfDeliveryModeInformationDeliveryModeInformationItem) {
            // validation for constraint: itemType
            if (!$arrayOfDeliveryModeInformationDeliveryModeInformationItem instanceof \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountDeliveryModeInformation) {
                $invalidValues[] = is_object($arrayOfDeliveryModeInformationDeliveryModeInformationItem) ? get_class($arrayOfDeliveryModeInformationDeliveryModeInformationItem) : sprintf('%s(%s)', gettype($arrayOfDeliveryModeInformationDeliveryModeInformationItem), var_export($arrayOfDeliveryModeInformationDeliveryModeInformationItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The DeliveryModeInformation property can only contain items of type \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountDeliveryModeInformation, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set DeliveryModeInformation value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountDeliveryModeInformation[] $deliveryModeInformation
     * @return \SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfDeliveryModeInformation
     */
    public function setDeliveryModeInformation(array $deliveryModeInformation = array())
    {
        // validation for constraint: array
        if ('' !== ($deliveryModeInformationArrayErrorMessage = self::validateDeliveryModeInformationForArrayConstraintsFromSetDeliveryModeInformation($deliveryModeInformation))) {
            throw new \InvalidArgumentException($deliveryModeInformationArrayErrorMessage, __LINE__);
        }
        if (is_null($deliveryModeInformation) || (is_array($deliveryModeInformation) && empty($deliveryModeInformation))) {
            unset($this->DeliveryModeInformation);
        } else {
            $this->DeliveryModeInformation = $deliveryModeInformation;
        }
        return $this;
    }
    /**
     * Add item to DeliveryModeInformation value
     * @throws \InvalidArgumentException
     * @param \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountDeliveryModeInformation $item
     * @return \SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfDeliveryModeInformation
     */
    public function addToDeliveryModeInformation(\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountDeliveryModeInformation $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountDeliveryModeInformation) {
            throw new \InvalidArgumentException(sprintf('The DeliveryModeInformation property can only contain items of type \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountDeliveryModeInformation, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->DeliveryModeInformation[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountDeliveryModeInformation|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountDeliveryModeInformation|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountDeliveryModeInformation|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountDeliveryModeInformation|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountDeliveryModeInformation|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string DeliveryModeInformation
     */
    public function getAttributeName()
    {
        return 'DeliveryModeInformation';
    }
}
