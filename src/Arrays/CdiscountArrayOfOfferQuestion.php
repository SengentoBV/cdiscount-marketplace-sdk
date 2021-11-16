<?php

declare(strict_types=1);

namespace SengentoBV\CdiscountMarketplaceSdk\Arrays;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfOfferQuestion Arrays
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfOfferQuestion
 * @package Cdiscount
 * @subpackage Arrays
 */
class CdiscountArrayOfOfferQuestion extends AbstractStructArrayBase
{
    /**
     * The OfferQuestion
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountOfferQuestion[]
     */
    protected ?array $OfferQuestion = null;
    /**
     * Constructor method for ArrayOfOfferQuestion
     * @uses CdiscountArrayOfOfferQuestion::setOfferQuestion()
     * @param \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountOfferQuestion[] $offerQuestion
     */
    public function __construct(?array $offerQuestion = null)
    {
        $this
            ->setOfferQuestion($offerQuestion);
    }
    /**
     * Get OfferQuestion value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountOfferQuestion[]
     */
    public function getOfferQuestion(): ?array
    {
        return isset($this->OfferQuestion) ? $this->OfferQuestion : null;
    }
    /**
     * This method is responsible for validating the values passed to the setOfferQuestion method
     * This method is willingly generated in order to preserve the one-line inline validation within the setOfferQuestion method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateOfferQuestionForArrayConstraintsFromSetOfferQuestion(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfOfferQuestionOfferQuestionItem) {
            // validation for constraint: itemType
            if (!$arrayOfOfferQuestionOfferQuestionItem instanceof \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountOfferQuestion) {
                $invalidValues[] = is_object($arrayOfOfferQuestionOfferQuestionItem) ? get_class($arrayOfOfferQuestionOfferQuestionItem) : sprintf('%s(%s)', gettype($arrayOfOfferQuestionOfferQuestionItem), var_export($arrayOfOfferQuestionOfferQuestionItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The OfferQuestion property can only contain items of type \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountOfferQuestion, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set OfferQuestion value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws InvalidArgumentException
     * @param \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountOfferQuestion[] $offerQuestion
     * @return \SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfOfferQuestion
     */
    public function setOfferQuestion(?array $offerQuestion = null): self
    {
        // validation for constraint: array
        if ('' !== ($offerQuestionArrayErrorMessage = self::validateOfferQuestionForArrayConstraintsFromSetOfferQuestion($offerQuestion))) {
            throw new InvalidArgumentException($offerQuestionArrayErrorMessage, __LINE__);
        }
        if (is_null($offerQuestion) || (is_array($offerQuestion) && empty($offerQuestion))) {
            unset($this->OfferQuestion);
        } else {
            $this->OfferQuestion = $offerQuestion;
        }
        
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountOfferQuestion|null
     */
    public function current(): ?\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountOfferQuestion
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountOfferQuestion|null
     */
    public function item($index): ?\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountOfferQuestion
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountOfferQuestion|null
     */
    public function first(): ?\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountOfferQuestion
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountOfferQuestion|null
     */
    public function last(): ?\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountOfferQuestion
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountOfferQuestion|null
     */
    public function offsetGet($offset): ?\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountOfferQuestion
    {
        return parent::offsetGet($offset);
    }
    /**
     * Add element to array
     * @see AbstractStructArrayBase::add()
     * @throws InvalidArgumentException
     * @param \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountOfferQuestion $item
     * @return \SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfOfferQuestion
     */
    public function add($item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountOfferQuestion) {
            throw new InvalidArgumentException(sprintf('The OfferQuestion property can only contain items of type \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountOfferQuestion, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        return parent::add($item);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string OfferQuestion
     */
    public function getAttributeName(): string
    {
        return 'OfferQuestion';
    }
}
