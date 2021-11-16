<?php

declare(strict_types=1);

namespace SengentoBV\CdiscountMarketplaceSdk\Arrays;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfRelayIntegrationLog Arrays
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfRelayIntegrationLog
 * @package Cdiscount
 * @subpackage Arrays
 */
class CdiscountArrayOfRelayIntegrationLog extends AbstractStructArrayBase
{
    /**
     * The RelayIntegrationLog
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountRelayIntegrationLog[]
     */
    protected ?array $RelayIntegrationLog = null;
    /**
     * Constructor method for ArrayOfRelayIntegrationLog
     * @uses CdiscountArrayOfRelayIntegrationLog::setRelayIntegrationLog()
     * @param \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountRelayIntegrationLog[] $relayIntegrationLog
     */
    public function __construct(?array $relayIntegrationLog = null)
    {
        $this
            ->setRelayIntegrationLog($relayIntegrationLog);
    }
    /**
     * Get RelayIntegrationLog value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountRelayIntegrationLog[]
     */
    public function getRelayIntegrationLog(): ?array
    {
        return isset($this->RelayIntegrationLog) ? $this->RelayIntegrationLog : null;
    }
    /**
     * This method is responsible for validating the values passed to the setRelayIntegrationLog method
     * This method is willingly generated in order to preserve the one-line inline validation within the setRelayIntegrationLog method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateRelayIntegrationLogForArrayConstraintsFromSetRelayIntegrationLog(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfRelayIntegrationLogRelayIntegrationLogItem) {
            // validation for constraint: itemType
            if (!$arrayOfRelayIntegrationLogRelayIntegrationLogItem instanceof \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountRelayIntegrationLog) {
                $invalidValues[] = is_object($arrayOfRelayIntegrationLogRelayIntegrationLogItem) ? get_class($arrayOfRelayIntegrationLogRelayIntegrationLogItem) : sprintf('%s(%s)', gettype($arrayOfRelayIntegrationLogRelayIntegrationLogItem), var_export($arrayOfRelayIntegrationLogRelayIntegrationLogItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The RelayIntegrationLog property can only contain items of type \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountRelayIntegrationLog, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set RelayIntegrationLog value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws InvalidArgumentException
     * @param \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountRelayIntegrationLog[] $relayIntegrationLog
     * @return \SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfRelayIntegrationLog
     */
    public function setRelayIntegrationLog(?array $relayIntegrationLog = null): self
    {
        // validation for constraint: array
        if ('' !== ($relayIntegrationLogArrayErrorMessage = self::validateRelayIntegrationLogForArrayConstraintsFromSetRelayIntegrationLog($relayIntegrationLog))) {
            throw new InvalidArgumentException($relayIntegrationLogArrayErrorMessage, __LINE__);
        }
        if (is_null($relayIntegrationLog) || (is_array($relayIntegrationLog) && empty($relayIntegrationLog))) {
            unset($this->RelayIntegrationLog);
        } else {
            $this->RelayIntegrationLog = $relayIntegrationLog;
        }
        
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountRelayIntegrationLog|null
     */
    public function current(): ?\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountRelayIntegrationLog
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountRelayIntegrationLog|null
     */
    public function item($index): ?\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountRelayIntegrationLog
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountRelayIntegrationLog|null
     */
    public function first(): ?\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountRelayIntegrationLog
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountRelayIntegrationLog|null
     */
    public function last(): ?\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountRelayIntegrationLog
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountRelayIntegrationLog|null
     */
    public function offsetGet($offset): ?\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountRelayIntegrationLog
    {
        return parent::offsetGet($offset);
    }
    /**
     * Add element to array
     * @see AbstractStructArrayBase::add()
     * @throws InvalidArgumentException
     * @param \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountRelayIntegrationLog $item
     * @return \SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfRelayIntegrationLog
     */
    public function add($item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountRelayIntegrationLog) {
            throw new InvalidArgumentException(sprintf('The RelayIntegrationLog property can only contain items of type \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountRelayIntegrationLog, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        return parent::add($item);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string RelayIntegrationLog
     */
    public function getAttributeName(): string
    {
        return 'RelayIntegrationLog';
    }
}
