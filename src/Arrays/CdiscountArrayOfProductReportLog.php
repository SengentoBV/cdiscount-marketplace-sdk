<?php

declare(strict_types=1);

namespace SengentoBV\CdiscountMarketplaceSdk\Arrays;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfProductReportLog Arrays
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfProductReportLog
 * @package Cdiscount
 * @subpackage Arrays
 */
class CdiscountArrayOfProductReportLog extends AbstractStructArrayBase
{
    /**
     * The ProductReportLog
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountProductReportLog[]
     */
    protected ?array $ProductReportLog = null;
    /**
     * Constructor method for ArrayOfProductReportLog
     * @uses CdiscountArrayOfProductReportLog::setProductReportLog()
     * @param \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountProductReportLog[] $productReportLog
     */
    public function __construct(?array $productReportLog = null)
    {
        $this
            ->setProductReportLog($productReportLog);
    }
    /**
     * Get ProductReportLog value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountProductReportLog[]
     */
    public function getProductReportLog(): ?array
    {
        return isset($this->ProductReportLog) ? $this->ProductReportLog : null;
    }
    /**
     * This method is responsible for validating the values passed to the setProductReportLog method
     * This method is willingly generated in order to preserve the one-line inline validation within the setProductReportLog method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateProductReportLogForArrayConstraintsFromSetProductReportLog(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfProductReportLogProductReportLogItem) {
            // validation for constraint: itemType
            if (!$arrayOfProductReportLogProductReportLogItem instanceof \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountProductReportLog) {
                $invalidValues[] = is_object($arrayOfProductReportLogProductReportLogItem) ? get_class($arrayOfProductReportLogProductReportLogItem) : sprintf('%s(%s)', gettype($arrayOfProductReportLogProductReportLogItem), var_export($arrayOfProductReportLogProductReportLogItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The ProductReportLog property can only contain items of type \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountProductReportLog, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set ProductReportLog value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws InvalidArgumentException
     * @param \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountProductReportLog[] $productReportLog
     * @return \SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfProductReportLog
     */
    public function setProductReportLog(?array $productReportLog = null): self
    {
        // validation for constraint: array
        if ('' !== ($productReportLogArrayErrorMessage = self::validateProductReportLogForArrayConstraintsFromSetProductReportLog($productReportLog))) {
            throw new InvalidArgumentException($productReportLogArrayErrorMessage, __LINE__);
        }
        if (is_null($productReportLog) || (is_array($productReportLog) && empty($productReportLog))) {
            unset($this->ProductReportLog);
        } else {
            $this->ProductReportLog = $productReportLog;
        }
        
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountProductReportLog|null
     */
    public function current(): ?\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountProductReportLog
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountProductReportLog|null
     */
    public function item($index): ?\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountProductReportLog
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountProductReportLog|null
     */
    public function first(): ?\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountProductReportLog
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountProductReportLog|null
     */
    public function last(): ?\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountProductReportLog
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountProductReportLog|null
     */
    public function offsetGet($offset): ?\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountProductReportLog
    {
        return parent::offsetGet($offset);
    }
    /**
     * Add element to array
     * @see AbstractStructArrayBase::add()
     * @throws InvalidArgumentException
     * @param \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountProductReportLog $item
     * @return \SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfProductReportLog
     */
    public function add($item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountProductReportLog) {
            throw new InvalidArgumentException(sprintf('The ProductReportLog property can only contain items of type \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountProductReportLog, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        return parent::add($item);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string ProductReportLog
     */
    public function getAttributeName(): string
    {
        return 'ProductReportLog';
    }
}
