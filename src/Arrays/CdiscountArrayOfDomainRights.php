<?php

namespace SengentoBV\CdiscountMarketplaceSdk\Arrays;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfDomainRights Arrays
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfDomainRights
 * @package Cdiscount
 * @subpackage Arrays
 */
class CdiscountArrayOfDomainRights extends AbstractStructArrayBase
{
    /**
     * The DomainRights
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountDomainRights[]
     */
    public $DomainRights;
    /**
     * Constructor method for ArrayOfDomainRights
     * @uses CdiscountArrayOfDomainRights::setDomainRights()
     * @param \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountDomainRights[] $domainRights
     */
    public function __construct(array $domainRights = array())
    {
        $this
            ->setDomainRights($domainRights);
    }
    /**
     * Get DomainRights value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountDomainRights[]|null
     */
    public function getDomainRights()
    {
        return isset($this->DomainRights) ? $this->DomainRights : null;
    }
    /**
     * This method is responsible for validating the values passed to the setDomainRights method
     * This method is willingly generated in order to preserve the one-line inline validation within the setDomainRights method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateDomainRightsForArrayConstraintsFromSetDomainRights(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfDomainRightsDomainRightsItem) {
            // validation for constraint: itemType
            if (!$arrayOfDomainRightsDomainRightsItem instanceof \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountDomainRights) {
                $invalidValues[] = is_object($arrayOfDomainRightsDomainRightsItem) ? get_class($arrayOfDomainRightsDomainRightsItem) : sprintf('%s(%s)', gettype($arrayOfDomainRightsDomainRightsItem), var_export($arrayOfDomainRightsDomainRightsItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The DomainRights property can only contain items of type \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountDomainRights, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set DomainRights value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountDomainRights[] $domainRights
     * @return \SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfDomainRights
     */
    public function setDomainRights(array $domainRights = array())
    {
        // validation for constraint: array
        if ('' !== ($domainRightsArrayErrorMessage = self::validateDomainRightsForArrayConstraintsFromSetDomainRights($domainRights))) {
            throw new \InvalidArgumentException($domainRightsArrayErrorMessage, __LINE__);
        }
        if (is_null($domainRights) || (is_array($domainRights) && empty($domainRights))) {
            unset($this->DomainRights);
        } else {
            $this->DomainRights = $domainRights;
        }
        return $this;
    }
    /**
     * Add item to DomainRights value
     * @throws \InvalidArgumentException
     * @param \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountDomainRights $item
     * @return \SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfDomainRights
     */
    public function addToDomainRights(\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountDomainRights $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountDomainRights) {
            throw new \InvalidArgumentException(sprintf('The DomainRights property can only contain items of type \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountDomainRights, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->DomainRights[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountDomainRights|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountDomainRights|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountDomainRights|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountDomainRights|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountDomainRights|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string DomainRights
     */
    public function getAttributeName()
    {
        return 'DomainRights';
    }
}
