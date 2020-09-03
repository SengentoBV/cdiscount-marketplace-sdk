<?php

namespace SengentoBV\CdiscountMarketplaceSdk\Arrays;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfOrderQuestion Arrays
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfOrderQuestion
 * @package Cdiscount
 * @subpackage Arrays
 */
class CdiscountArrayOfOrderQuestion extends AbstractStructArrayBase
{
    /**
     * The OrderQuestion
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountOrderQuestion[]
     */
    public $OrderQuestion;
    /**
     * Constructor method for ArrayOfOrderQuestion
     * @uses CdiscountArrayOfOrderQuestion::setOrderQuestion()
     * @param \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountOrderQuestion[] $orderQuestion
     */
    public function __construct(array $orderQuestion = array())
    {
        $this
            ->setOrderQuestion($orderQuestion);
    }
    /**
     * Get OrderQuestion value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountOrderQuestion[]|null
     */
    public function getOrderQuestion()
    {
        return isset($this->OrderQuestion) ? $this->OrderQuestion : null;
    }
    /**
     * This method is responsible for validating the values passed to the setOrderQuestion method
     * This method is willingly generated in order to preserve the one-line inline validation within the setOrderQuestion method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateOrderQuestionForArrayConstraintsFromSetOrderQuestion(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfOrderQuestionOrderQuestionItem) {
            // validation for constraint: itemType
            if (!$arrayOfOrderQuestionOrderQuestionItem instanceof \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountOrderQuestion) {
                $invalidValues[] = is_object($arrayOfOrderQuestionOrderQuestionItem) ? get_class($arrayOfOrderQuestionOrderQuestionItem) : sprintf('%s(%s)', gettype($arrayOfOrderQuestionOrderQuestionItem), var_export($arrayOfOrderQuestionOrderQuestionItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The OrderQuestion property can only contain items of type \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountOrderQuestion, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set OrderQuestion value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountOrderQuestion[] $orderQuestion
     * @return \SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfOrderQuestion
     */
    public function setOrderQuestion(array $orderQuestion = array())
    {
        // validation for constraint: array
        if ('' !== ($orderQuestionArrayErrorMessage = self::validateOrderQuestionForArrayConstraintsFromSetOrderQuestion($orderQuestion))) {
            throw new \InvalidArgumentException($orderQuestionArrayErrorMessage, __LINE__);
        }
        if (is_null($orderQuestion) || (is_array($orderQuestion) && empty($orderQuestion))) {
            unset($this->OrderQuestion);
        } else {
            $this->OrderQuestion = $orderQuestion;
        }
        return $this;
    }
    /**
     * Add item to OrderQuestion value
     * @throws \InvalidArgumentException
     * @param \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountOrderQuestion $item
     * @return \SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfOrderQuestion
     */
    public function addToOrderQuestion(\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountOrderQuestion $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountOrderQuestion) {
            throw new \InvalidArgumentException(sprintf('The OrderQuestion property can only contain items of type \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountOrderQuestion, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->OrderQuestion[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountOrderQuestion|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountOrderQuestion|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountOrderQuestion|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountOrderQuestion|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountOrderQuestion|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string OrderQuestion
     */
    public function getAttributeName()
    {
        return 'OrderQuestion';
    }
}
