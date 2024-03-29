<?php

declare(strict_types=1);

namespace SengentoBV\CdiscountMarketplaceSdk\Arrays;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfProductReportPropertyLog Arrays
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfProductReportPropertyLog
 * @package Cdiscount
 * @subpackage Arrays
 */
class CdiscountArrayOfProductReportPropertyLog extends AbstractStructArrayBase
{
    /**
     * The ProductReportPropertyLog
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountProductReportPropertyLog[]
     */
    protected ?array $ProductReportPropertyLog = null;
    /**
     * Constructor method for ArrayOfProductReportPropertyLog
     * @uses CdiscountArrayOfProductReportPropertyLog::setProductReportPropertyLog()
     * @param \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountProductReportPropertyLog[] $productReportPropertyLog
     */
    public function __construct(?array $productReportPropertyLog = null)
    {
        $this
            ->setProductReportPropertyLog($productReportPropertyLog);
    }
    /**
     * Get ProductReportPropertyLog value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountProductReportPropertyLog[]
     */
    public function getProductReportPropertyLog(): ?array
    {
        return isset($this->ProductReportPropertyLog) ? $this->ProductReportPropertyLog : null;
    }
    /**
     * This method is responsible for validating the values passed to the setProductReportPropertyLog method
     * This method is willingly generated in order to preserve the one-line inline validation within the setProductReportPropertyLog method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateProductReportPropertyLogForArrayConstraintsFromSetProductReportPropertyLog(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfProductReportPropertyLogProductReportPropertyLogItem) {
            // validation for constraint: itemType
            if (!$arrayOfProductReportPropertyLogProductReportPropertyLogItem instanceof \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountProductReportPropertyLog) {
                $invalidValues[] = is_object($arrayOfProductReportPropertyLogProductReportPropertyLogItem) ? get_class($arrayOfProductReportPropertyLogProductReportPropertyLogItem) : sprintf('%s(%s)', gettype($arrayOfProductReportPropertyLogProductReportPropertyLogItem), var_export($arrayOfProductReportPropertyLogProductReportPropertyLogItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The ProductReportPropertyLog property can only contain items of type \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountProductReportPropertyLog, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set ProductReportPropertyLog value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws InvalidArgumentException
     * @param \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountProductReportPropertyLog[] $productReportPropertyLog
     * @return \SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfProductReportPropertyLog
     */
    public function setProductReportPropertyLog(?array $productReportPropertyLog = null): self
    {
        // validation for constraint: array
        if ('' !== ($productReportPropertyLogArrayErrorMessage = self::validateProductReportPropertyLogForArrayConstraintsFromSetProductReportPropertyLog($productReportPropertyLog))) {
            throw new InvalidArgumentException($productReportPropertyLogArrayErrorMessage, __LINE__);
        }
        if (is_null($productReportPropertyLog) || (is_array($productReportPropertyLog) && empty($productReportPropertyLog))) {
            unset($this->ProductReportPropertyLog);
        } else {
            $this->ProductReportPropertyLog = $productReportPropertyLog;
        }
        
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountProductReportPropertyLog|null
     */
    public function current(): ?\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountProductReportPropertyLog
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountProductReportPropertyLog|null
     */
    public function item($index): ?\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountProductReportPropertyLog
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountProductReportPropertyLog|null
     */
    public function first(): ?\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountProductReportPropertyLog
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountProductReportPropertyLog|null
     */
    public function last(): ?\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountProductReportPropertyLog
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountProductReportPropertyLog|null
     */
    public function offsetGet($offset): ?\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountProductReportPropertyLog
    {
        return parent::offsetGet($offset);
    }
    /**
     * Add element to array
     * @see AbstractStructArrayBase::add()
     * @throws InvalidArgumentException
     * @param \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountProductReportPropertyLog $item
     * @return \SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfProductReportPropertyLog
     */
    public function add($item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountProductReportPropertyLog) {
            throw new InvalidArgumentException(sprintf('The ProductReportPropertyLog property can only contain items of type \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountProductReportPropertyLog, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        return parent::add($item);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string ProductReportPropertyLog
     */
    public function getAttributeName(): string
    {
        return 'ProductReportPropertyLog';
    }
}
