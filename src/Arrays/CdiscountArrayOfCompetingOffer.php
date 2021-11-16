<?php

declare(strict_types=1);

namespace SengentoBV\CdiscountMarketplaceSdk\Arrays;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfCompetingOffer Arrays
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfCompetingOffer
 * @package Cdiscount
 * @subpackage Arrays
 */
class CdiscountArrayOfCompetingOffer extends AbstractStructArrayBase
{
    /**
     * The CompetingOffer
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountCompetingOffer[]
     */
    protected ?array $CompetingOffer = null;
    /**
     * Constructor method for ArrayOfCompetingOffer
     * @uses CdiscountArrayOfCompetingOffer::setCompetingOffer()
     * @param \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountCompetingOffer[] $competingOffer
     */
    public function __construct(?array $competingOffer = null)
    {
        $this
            ->setCompetingOffer($competingOffer);
    }
    /**
     * Get CompetingOffer value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountCompetingOffer[]
     */
    public function getCompetingOffer(): ?array
    {
        return isset($this->CompetingOffer) ? $this->CompetingOffer : null;
    }
    /**
     * This method is responsible for validating the values passed to the setCompetingOffer method
     * This method is willingly generated in order to preserve the one-line inline validation within the setCompetingOffer method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateCompetingOfferForArrayConstraintsFromSetCompetingOffer(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfCompetingOfferCompetingOfferItem) {
            // validation for constraint: itemType
            if (!$arrayOfCompetingOfferCompetingOfferItem instanceof \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountCompetingOffer) {
                $invalidValues[] = is_object($arrayOfCompetingOfferCompetingOfferItem) ? get_class($arrayOfCompetingOfferCompetingOfferItem) : sprintf('%s(%s)', gettype($arrayOfCompetingOfferCompetingOfferItem), var_export($arrayOfCompetingOfferCompetingOfferItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The CompetingOffer property can only contain items of type \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountCompetingOffer, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set CompetingOffer value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws InvalidArgumentException
     * @param \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountCompetingOffer[] $competingOffer
     * @return \SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfCompetingOffer
     */
    public function setCompetingOffer(?array $competingOffer = null): self
    {
        // validation for constraint: array
        if ('' !== ($competingOfferArrayErrorMessage = self::validateCompetingOfferForArrayConstraintsFromSetCompetingOffer($competingOffer))) {
            throw new InvalidArgumentException($competingOfferArrayErrorMessage, __LINE__);
        }
        if (is_null($competingOffer) || (is_array($competingOffer) && empty($competingOffer))) {
            unset($this->CompetingOffer);
        } else {
            $this->CompetingOffer = $competingOffer;
        }
        
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountCompetingOffer|null
     */
    public function current(): ?\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountCompetingOffer
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountCompetingOffer|null
     */
    public function item($index): ?\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountCompetingOffer
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountCompetingOffer|null
     */
    public function first(): ?\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountCompetingOffer
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountCompetingOffer|null
     */
    public function last(): ?\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountCompetingOffer
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountCompetingOffer|null
     */
    public function offsetGet($offset): ?\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountCompetingOffer
    {
        return parent::offsetGet($offset);
    }
    /**
     * Add element to array
     * @see AbstractStructArrayBase::add()
     * @throws InvalidArgumentException
     * @param \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountCompetingOffer $item
     * @return \SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfCompetingOffer
     */
    public function add($item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountCompetingOffer) {
            throw new InvalidArgumentException(sprintf('The CompetingOffer property can only contain items of type \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountCompetingOffer, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        return parent::add($item);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string CompetingOffer
     */
    public function getAttributeName(): string
    {
        return 'CompetingOffer';
    }
}
