<?php

declare(strict_types=1);

namespace SengentoBV\CdiscountMarketplaceSdk\Arrays;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfProductActivationData Arrays
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfProductActivationData
 * @package Cdiscount
 * @subpackage Arrays
 */
class CdiscountArrayOfProductActivationData extends AbstractStructArrayBase
{
    /**
     * The ProductActivationData
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountProductActivationData[]
     */
    protected ?array $ProductActivationData = null;
    /**
     * Constructor method for ArrayOfProductActivationData
     * @uses CdiscountArrayOfProductActivationData::setProductActivationData()
     * @param \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountProductActivationData[] $productActivationData
     */
    public function __construct(?array $productActivationData = null)
    {
        $this
            ->setProductActivationData($productActivationData);
    }
    /**
     * Get ProductActivationData value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountProductActivationData[]
     */
    public function getProductActivationData(): ?array
    {
        return isset($this->ProductActivationData) ? $this->ProductActivationData : null;
    }
    /**
     * This method is responsible for validating the values passed to the setProductActivationData method
     * This method is willingly generated in order to preserve the one-line inline validation within the setProductActivationData method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateProductActivationDataForArrayConstraintsFromSetProductActivationData(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfProductActivationDataProductActivationDataItem) {
            // validation for constraint: itemType
            if (!$arrayOfProductActivationDataProductActivationDataItem instanceof \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountProductActivationData) {
                $invalidValues[] = is_object($arrayOfProductActivationDataProductActivationDataItem) ? get_class($arrayOfProductActivationDataProductActivationDataItem) : sprintf('%s(%s)', gettype($arrayOfProductActivationDataProductActivationDataItem), var_export($arrayOfProductActivationDataProductActivationDataItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The ProductActivationData property can only contain items of type \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountProductActivationData, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set ProductActivationData value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws InvalidArgumentException
     * @param \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountProductActivationData[] $productActivationData
     * @return \SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfProductActivationData
     */
    public function setProductActivationData(?array $productActivationData = null): self
    {
        // validation for constraint: array
        if ('' !== ($productActivationDataArrayErrorMessage = self::validateProductActivationDataForArrayConstraintsFromSetProductActivationData($productActivationData))) {
            throw new InvalidArgumentException($productActivationDataArrayErrorMessage, __LINE__);
        }
        if (is_null($productActivationData) || (is_array($productActivationData) && empty($productActivationData))) {
            unset($this->ProductActivationData);
        } else {
            $this->ProductActivationData = $productActivationData;
        }
        
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountProductActivationData|null
     */
    public function current(): ?\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountProductActivationData
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountProductActivationData|null
     */
    public function item($index): ?\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountProductActivationData
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountProductActivationData|null
     */
    public function first(): ?\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountProductActivationData
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountProductActivationData|null
     */
    public function last(): ?\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountProductActivationData
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountProductActivationData|null
     */
    public function offsetGet($offset): ?\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountProductActivationData
    {
        return parent::offsetGet($offset);
    }
    /**
     * Add element to array
     * @see AbstractStructArrayBase::add()
     * @throws InvalidArgumentException
     * @param \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountProductActivationData $item
     * @return \SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfProductActivationData
     */
    public function add($item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountProductActivationData) {
            throw new InvalidArgumentException(sprintf('The ProductActivationData property can only contain items of type \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountProductActivationData, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        return parent::add($item);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string ProductActivationData
     */
    public function getAttributeName(): string
    {
        return 'ProductActivationData';
    }
}
