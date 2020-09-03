<?php

namespace SengentoBV\CdiscountMarketplaceSdk\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ParcelActionResult Structs
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ParcelActionResult
 * @package Cdiscount
 * @subpackage Structs
 */
class CdiscountParcelActionResult extends CdiscountServiceMessage
{
    /**
     * The ActionType
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string[]
     */
    public $ActionType;
    /**
     * The IsActionCreated
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $IsActionCreated;
    /**
     * The ParcelNumber
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $ParcelNumber;
    /**
     * Constructor method for ParcelActionResult
     * @uses CdiscountParcelActionResult::setActionType()
     * @uses CdiscountParcelActionResult::setIsActionCreated()
     * @uses CdiscountParcelActionResult::setParcelNumber()
     * @param string[] $actionType
     * @param bool $isActionCreated
     * @param string $parcelNumber
     */
    public function __construct(array $actionType = array(), $isActionCreated = null, $parcelNumber = null)
    {
        $this
            ->setActionType($actionType)
            ->setIsActionCreated($isActionCreated)
            ->setParcelNumber($parcelNumber);
    }
    /**
     * Get ActionType value
     * @return string[]|null
     */
    public function getActionType()
    {
        return $this->ActionType;
    }
    /**
     * This method is responsible for validating the values passed to the setActionType method
     * This method is willingly generated in order to preserve the one-line inline validation within the setActionType method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateActionTypeForArrayConstraintsFromSetActionType(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $parcelActionResultActionTypeItem) {
            // validation for constraint: enumeration
            if (!\SengentoBV\CdiscountMarketplaceSdk\Enums\CdiscountParcelActionTypes::valueIsValid($parcelActionResultActionTypeItem)) {
                $invalidValues[] = is_object($parcelActionResultActionTypeItem) ? get_class($parcelActionResultActionTypeItem) : sprintf('%s(%s)', gettype($parcelActionResultActionTypeItem), var_export($parcelActionResultActionTypeItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \SengentoBV\CdiscountMarketplaceSdk\Enums\CdiscountParcelActionTypes', is_array($invalidValues) ? implode(', ', $invalidValues) : var_export($invalidValues, true), implode(', ', \SengentoBV\CdiscountMarketplaceSdk\Enums\CdiscountParcelActionTypes::getValidValues()));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set ActionType value
     * @uses \SengentoBV\CdiscountMarketplaceSdk\Enums\CdiscountParcelActionTypes::valueIsValid()
     * @uses \SengentoBV\CdiscountMarketplaceSdk\Enums\CdiscountParcelActionTypes::getValidValues()
     * @throws \InvalidArgumentException
     * @param string[] $actionType
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountParcelActionResult
     */
    public function setActionType(array $actionType = array())
    {
        // validation for constraint: list
        if ('' !== ($actionTypeArrayErrorMessage = self::validateActionTypeForArrayConstraintsFromSetActionType($actionType))) {
            throw new \InvalidArgumentException($actionTypeArrayErrorMessage, __LINE__);
        }
        $this->ActionType = is_array($actionType) ? implode(' ', $actionType) : null;
        return $this;
    }
    /**
     * Get IsActionCreated value
     * @return bool|null
     */
    public function getIsActionCreated()
    {
        return $this->IsActionCreated;
    }
    /**
     * Set IsActionCreated value
     * @param bool $isActionCreated
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountParcelActionResult
     */
    public function setIsActionCreated($isActionCreated = null)
    {
        // validation for constraint: boolean
        if (!is_null($isActionCreated) && !is_bool($isActionCreated)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isActionCreated, true), gettype($isActionCreated)), __LINE__);
        }
        $this->IsActionCreated = $isActionCreated;
        return $this;
    }
    /**
     * Get ParcelNumber value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getParcelNumber()
    {
        return isset($this->ParcelNumber) ? $this->ParcelNumber : null;
    }
    /**
     * Set ParcelNumber value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $parcelNumber
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountParcelActionResult
     */
    public function setParcelNumber($parcelNumber = null)
    {
        // validation for constraint: string
        if (!is_null($parcelNumber) && !is_string($parcelNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($parcelNumber, true), gettype($parcelNumber)), __LINE__);
        }
        if (is_null($parcelNumber) || (is_array($parcelNumber) && empty($parcelNumber))) {
            unset($this->ParcelNumber);
        } else {
            $this->ParcelNumber = $parcelNumber;
        }
        return $this;
    }
}
