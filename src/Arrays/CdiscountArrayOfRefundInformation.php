<?php

declare(strict_types=1);

namespace SengentoBV\CdiscountMarketplaceSdk\Arrays;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfRefundInformation Arrays
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfRefundInformation
 * @package Cdiscount
 * @subpackage Arrays
 */
class CdiscountArrayOfRefundInformation extends AbstractStructArrayBase
{
    /**
     * The RefundInformation
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountRefundInformation[]
     */
    protected ?array $RefundInformation = null;
    /**
     * Constructor method for ArrayOfRefundInformation
     * @uses CdiscountArrayOfRefundInformation::setRefundInformation()
     * @param \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountRefundInformation[] $refundInformation
     */
    public function __construct(?array $refundInformation = null)
    {
        $this
            ->setRefundInformation($refundInformation);
    }
    /**
     * Get RefundInformation value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountRefundInformation[]
     */
    public function getRefundInformation(): ?array
    {
        return isset($this->RefundInformation) ? $this->RefundInformation : null;
    }
    /**
     * This method is responsible for validating the values passed to the setRefundInformation method
     * This method is willingly generated in order to preserve the one-line inline validation within the setRefundInformation method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateRefundInformationForArrayConstraintsFromSetRefundInformation(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfRefundInformationRefundInformationItem) {
            // validation for constraint: itemType
            if (!$arrayOfRefundInformationRefundInformationItem instanceof \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountRefundInformation) {
                $invalidValues[] = is_object($arrayOfRefundInformationRefundInformationItem) ? get_class($arrayOfRefundInformationRefundInformationItem) : sprintf('%s(%s)', gettype($arrayOfRefundInformationRefundInformationItem), var_export($arrayOfRefundInformationRefundInformationItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The RefundInformation property can only contain items of type \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountRefundInformation, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set RefundInformation value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws InvalidArgumentException
     * @param \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountRefundInformation[] $refundInformation
     * @return \SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfRefundInformation
     */
    public function setRefundInformation(?array $refundInformation = null): self
    {
        // validation for constraint: array
        if ('' !== ($refundInformationArrayErrorMessage = self::validateRefundInformationForArrayConstraintsFromSetRefundInformation($refundInformation))) {
            throw new InvalidArgumentException($refundInformationArrayErrorMessage, __LINE__);
        }
        if (is_null($refundInformation) || (is_array($refundInformation) && empty($refundInformation))) {
            unset($this->RefundInformation);
        } else {
            $this->RefundInformation = $refundInformation;
        }
        
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountRefundInformation|null
     */
    public function current(): ?\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountRefundInformation
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountRefundInformation|null
     */
    public function item($index): ?\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountRefundInformation
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountRefundInformation|null
     */
    public function first(): ?\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountRefundInformation
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountRefundInformation|null
     */
    public function last(): ?\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountRefundInformation
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountRefundInformation|null
     */
    public function offsetGet($offset): ?\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountRefundInformation
    {
        return parent::offsetGet($offset);
    }
    /**
     * Add element to array
     * @see AbstractStructArrayBase::add()
     * @throws InvalidArgumentException
     * @param \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountRefundInformation $item
     * @return \SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfRefundInformation
     */
    public function add($item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountRefundInformation) {
            throw new InvalidArgumentException(sprintf('The RefundInformation property can only contain items of type \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountRefundInformation, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        return parent::add($item);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string RefundInformation
     */
    public function getAttributeName(): string
    {
        return 'RefundInformation';
    }
}
