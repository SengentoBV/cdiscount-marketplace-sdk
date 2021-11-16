<?php

declare(strict_types=1);

namespace SengentoBV\CdiscountMarketplaceSdk\Structs;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ParcelInfos Structs
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ParcelInfos
 * @package Cdiscount
 * @subpackage Structs
 */
class CdiscountParcelInfos extends AbstractStructBase
{
    /**
     * The ManageParcel
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    protected ?string $ManageParcel = null;
    /**
     * The ParcelNumber
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $ParcelNumber = null;
    /**
     * The Sku
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $Sku = null;
    /**
     * Constructor method for ParcelInfos
     * @uses CdiscountParcelInfos::setManageParcel()
     * @uses CdiscountParcelInfos::setParcelNumber()
     * @uses CdiscountParcelInfos::setSku()
     * @param array|string $manageParcel
     * @param string $parcelNumber
     * @param string $sku
     */
    public function __construct($manageParcel = null, ?string $parcelNumber = null, ?string $sku = null)
    {
        $this
            ->setManageParcel($manageParcel)
            ->setParcelNumber($parcelNumber)
            ->setSku($sku);
    }
    /**
     * Get ManageParcel value
     * @return string
     */
    public function getManageParcel(): ?string
    {
        return $this->ManageParcel;
    }
    /**
     * This method is responsible for validating the values passed to the setManageParcel method
     * This method is willingly generated in order to preserve the one-line inline validation within the setManageParcel method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateManageParcelForArrayConstraintsFromSetManageParcel(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $parcelInfosManageParcelItem) {
            // validation for constraint: enumeration
            if (!\SengentoBV\CdiscountMarketplaceSdk\Enums\CdiscountParcelActionTypes::valueIsValid($parcelInfosManageParcelItem)) {
                $invalidValues[] = is_object($parcelInfosManageParcelItem) ? get_class($parcelInfosManageParcelItem) : sprintf('%s(%s)', gettype($parcelInfosManageParcelItem), var_export($parcelInfosManageParcelItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \SengentoBV\CdiscountMarketplaceSdk\Enums\CdiscountParcelActionTypes', is_array($invalidValues) ? implode(', ', $invalidValues) : var_export($invalidValues, true), implode(', ', \SengentoBV\CdiscountMarketplaceSdk\Enums\CdiscountParcelActionTypes::getValidValues()));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set ManageParcel value
     * @uses \SengentoBV\CdiscountMarketplaceSdk\Enums\CdiscountParcelActionTypes::valueIsValid()
     * @uses \SengentoBV\CdiscountMarketplaceSdk\Enums\CdiscountParcelActionTypes::getValidValues()
     * @throws InvalidArgumentException
     * @param array|string $manageParcel
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountParcelInfos
     */
    public function setManageParcel($manageParcel = null): self
    {
        // validation for constraint: list
        if ('' !== ($manageParcelArrayErrorMessage = self::validateManageParcelForArrayConstraintsFromSetManageParcel(is_string($manageParcel) ? explode(' ', $manageParcel) : $manageParcel))) {
            throw new InvalidArgumentException($manageParcelArrayErrorMessage, __LINE__);
        }
        $this->ManageParcel = is_array($manageParcel) ? implode(' ', $manageParcel) : $manageParcel;
        
        return $this;
    }
    /**
     * Get ParcelNumber value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getParcelNumber(): ?string
    {
        return isset($this->ParcelNumber) ? $this->ParcelNumber : null;
    }
    /**
     * Set ParcelNumber value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $parcelNumber
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountParcelInfos
     */
    public function setParcelNumber(?string $parcelNumber = null): self
    {
        // validation for constraint: string
        if (!is_null($parcelNumber) && !is_string($parcelNumber)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($parcelNumber, true), gettype($parcelNumber)), __LINE__);
        }
        if (is_null($parcelNumber) || (is_array($parcelNumber) && empty($parcelNumber))) {
            unset($this->ParcelNumber);
        } else {
            $this->ParcelNumber = $parcelNumber;
        }
        
        return $this;
    }
    /**
     * Get Sku value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getSku(): ?string
    {
        return isset($this->Sku) ? $this->Sku : null;
    }
    /**
     * Set Sku value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $sku
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountParcelInfos
     */
    public function setSku(?string $sku = null): self
    {
        // validation for constraint: string
        if (!is_null($sku) && !is_string($sku)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($sku, true), gettype($sku)), __LINE__);
        }
        if (is_null($sku) || (is_array($sku) && empty($sku))) {
            unset($this->Sku);
        } else {
            $this->Sku = $sku;
        }
        
        return $this;
    }
}
