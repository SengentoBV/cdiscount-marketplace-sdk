<?php

declare(strict_types=1);

namespace SengentoBV\CdiscountMarketplaceSdk\Arrays;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfOffer Arrays
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfOffer
 * @package Cdiscount
 * @subpackage Arrays
 */
class CdiscountArrayOfOffer extends AbstractStructArrayBase
{
    /**
     * The Offer
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountOffer[]
     */
    protected ?array $Offer = null;
    /**
     * Constructor method for ArrayOfOffer
     * @uses CdiscountArrayOfOffer::setOffer()
     * @param \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountOffer[] $offer
     */
    public function __construct(?array $offer = null)
    {
        $this
            ->setOffer($offer);
    }
    /**
     * Get Offer value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountOffer[]
     */
    public function getOffer(): ?array
    {
        return isset($this->Offer) ? $this->Offer : null;
    }
    /**
     * This method is responsible for validating the values passed to the setOffer method
     * This method is willingly generated in order to preserve the one-line inline validation within the setOffer method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateOfferForArrayConstraintsFromSetOffer(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfOfferOfferItem) {
            // validation for constraint: itemType
            if (!$arrayOfOfferOfferItem instanceof \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountOffer) {
                $invalidValues[] = is_object($arrayOfOfferOfferItem) ? get_class($arrayOfOfferOfferItem) : sprintf('%s(%s)', gettype($arrayOfOfferOfferItem), var_export($arrayOfOfferOfferItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Offer property can only contain items of type \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountOffer, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set Offer value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws InvalidArgumentException
     * @param \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountOffer[] $offer
     * @return \SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfOffer
     */
    public function setOffer(?array $offer = null): self
    {
        // validation for constraint: array
        if ('' !== ($offerArrayErrorMessage = self::validateOfferForArrayConstraintsFromSetOffer($offer))) {
            throw new InvalidArgumentException($offerArrayErrorMessage, __LINE__);
        }
        if (is_null($offer) || (is_array($offer) && empty($offer))) {
            unset($this->Offer);
        } else {
            $this->Offer = $offer;
        }
        
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountOffer|null
     */
    public function current(): ?\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountOffer
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountOffer|null
     */
    public function item($index): ?\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountOffer
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountOffer|null
     */
    public function first(): ?\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountOffer
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountOffer|null
     */
    public function last(): ?\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountOffer
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountOffer|null
     */
    public function offsetGet($offset): ?\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountOffer
    {
        return parent::offsetGet($offset);
    }
    /**
     * Add element to array
     * @see AbstractStructArrayBase::add()
     * @throws InvalidArgumentException
     * @param \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountOffer $item
     * @return \SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfOffer
     */
    public function add($item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountOffer) {
            throw new InvalidArgumentException(sprintf('The Offer property can only contain items of type \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountOffer, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        return parent::add($item);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string Offer
     */
    public function getAttributeName(): string
    {
        return 'Offer';
    }
}
