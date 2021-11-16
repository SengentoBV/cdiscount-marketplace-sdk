<?php

namespace SengentoBV\CdiscountMarketplaceSdk\Arrays;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfSecurityDescriptor Arrays
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfSecurityDescriptor
 * @package Cdiscount
 * @subpackage Arrays
 */
class CdiscountArrayOfSecurityDescriptor extends AbstractStructArrayBase
{
    /**
     * The SecurityDescriptor
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountSecurityDescriptor[]
     */
    public $SecurityDescriptor;
    /**
     * Constructor method for ArrayOfSecurityDescriptor
     * @uses CdiscountArrayOfSecurityDescriptor::setSecurityDescriptor()
     * @param \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountSecurityDescriptor[] $securityDescriptor
     */
    public function __construct(array $securityDescriptor = array())
    {
        $this
            ->setSecurityDescriptor($securityDescriptor);
    }
    /**
     * Get SecurityDescriptor value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountSecurityDescriptor[]|null
     */
    public function getSecurityDescriptor()
    {
        return isset($this->SecurityDescriptor) ? $this->SecurityDescriptor : null;
    }
    /**
     * This method is responsible for validating the values passed to the setSecurityDescriptor method
     * This method is willingly generated in order to preserve the one-line inline validation within the setSecurityDescriptor method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateSecurityDescriptorForArrayConstraintsFromSetSecurityDescriptor(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfSecurityDescriptorSecurityDescriptorItem) {
            // validation for constraint: itemType
            if (!$arrayOfSecurityDescriptorSecurityDescriptorItem instanceof \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountSecurityDescriptor) {
                $invalidValues[] = is_object($arrayOfSecurityDescriptorSecurityDescriptorItem) ? get_class($arrayOfSecurityDescriptorSecurityDescriptorItem) : sprintf('%s(%s)', gettype($arrayOfSecurityDescriptorSecurityDescriptorItem), var_export($arrayOfSecurityDescriptorSecurityDescriptorItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The SecurityDescriptor property can only contain items of type \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountSecurityDescriptor, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set SecurityDescriptor value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountSecurityDescriptor[] $securityDescriptor
     * @return \SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfSecurityDescriptor
     */
    public function setSecurityDescriptor(array $securityDescriptor = array())
    {
        // validation for constraint: array
        if ('' !== ($securityDescriptorArrayErrorMessage = self::validateSecurityDescriptorForArrayConstraintsFromSetSecurityDescriptor($securityDescriptor))) {
            throw new \InvalidArgumentException($securityDescriptorArrayErrorMessage, __LINE__);
        }
        if (is_null($securityDescriptor) || (is_array($securityDescriptor) && empty($securityDescriptor))) {
            unset($this->SecurityDescriptor);
        } else {
            $this->SecurityDescriptor = $securityDescriptor;
        }
        return $this;
    }
    /**
     * Add item to SecurityDescriptor value
     * @throws \InvalidArgumentException
     * @param \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountSecurityDescriptor $item
     * @return \SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfSecurityDescriptor
     */
    public function addToSecurityDescriptor(\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountSecurityDescriptor $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountSecurityDescriptor) {
            throw new \InvalidArgumentException(sprintf('The SecurityDescriptor property can only contain items of type \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountSecurityDescriptor, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->SecurityDescriptor[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountSecurityDescriptor|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountSecurityDescriptor|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountSecurityDescriptor|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountSecurityDescriptor|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountSecurityDescriptor|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string SecurityDescriptor
     */
    public function getAttributeName(): string
    {
        return 'SecurityDescriptor';
    }
}
