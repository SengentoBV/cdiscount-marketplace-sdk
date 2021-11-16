<?php

declare(strict_types=1);

namespace SengentoBV\CdiscountMarketplaceSdk\Structs;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ProductReportLog Structs
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ProductReportLog
 * @package Cdiscount
 * @subpackage Structs
 */
class CdiscountProductReportLog extends AbstractStructBase
{
    /**
     * The LogDate
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $LogDate = null;
    /**
     * The ProductIntegrationStatus
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $ProductIntegrationStatus = null;
    /**
     * The PropertyList
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfProductReportPropertyLog|null
     */
    protected ?\SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfProductReportPropertyLog $PropertyList = null;
    /**
     * The SKU
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $SKU = null;
    /**
     * The Validated
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $Validated = null;
    /**
     * Constructor method for ProductReportLog
     * @uses CdiscountProductReportLog::setLogDate()
     * @uses CdiscountProductReportLog::setProductIntegrationStatus()
     * @uses CdiscountProductReportLog::setPropertyList()
     * @uses CdiscountProductReportLog::setSKU()
     * @uses CdiscountProductReportLog::setValidated()
     * @param string $logDate
     * @param string $productIntegrationStatus
     * @param \SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfProductReportPropertyLog $propertyList
     * @param string $sKU
     * @param bool $validated
     */
    public function __construct(?string $logDate = null, ?string $productIntegrationStatus = null, ?\SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfProductReportPropertyLog $propertyList = null, ?string $sKU = null, ?bool $validated = null)
    {
        $this
            ->setLogDate($logDate)
            ->setProductIntegrationStatus($productIntegrationStatus)
            ->setPropertyList($propertyList)
            ->setSKU($sKU)
            ->setValidated($validated);
    }
    /**
     * Get LogDate value
     * @return string|null
     */
    public function getLogDate(): ?string
    {
        return $this->LogDate;
    }
    /**
     * Set LogDate value
     * @param string $logDate
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountProductReportLog
     */
    public function setLogDate(?string $logDate = null): self
    {
        // validation for constraint: string
        if (!is_null($logDate) && !is_string($logDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($logDate, true), gettype($logDate)), __LINE__);
        }
        $this->LogDate = $logDate;
        
        return $this;
    }
    /**
     * Get ProductIntegrationStatus value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getProductIntegrationStatus(): ?string
    {
        return isset($this->ProductIntegrationStatus) ? $this->ProductIntegrationStatus : null;
    }
    /**
     * Set ProductIntegrationStatus value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $productIntegrationStatus
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountProductReportLog
     */
    public function setProductIntegrationStatus(?string $productIntegrationStatus = null): self
    {
        // validation for constraint: string
        if (!is_null($productIntegrationStatus) && !is_string($productIntegrationStatus)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($productIntegrationStatus, true), gettype($productIntegrationStatus)), __LINE__);
        }
        if (is_null($productIntegrationStatus) || (is_array($productIntegrationStatus) && empty($productIntegrationStatus))) {
            unset($this->ProductIntegrationStatus);
        } else {
            $this->ProductIntegrationStatus = $productIntegrationStatus;
        }
        
        return $this;
    }
    /**
     * Get PropertyList value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfProductReportPropertyLog|null
     */
    public function getPropertyList(): ?\SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfProductReportPropertyLog
    {
        return isset($this->PropertyList) ? $this->PropertyList : null;
    }
    /**
     * Set PropertyList value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfProductReportPropertyLog $propertyList
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountProductReportLog
     */
    public function setPropertyList(?\SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfProductReportPropertyLog $propertyList = null): self
    {
        if (is_null($propertyList) || (is_array($propertyList) && empty($propertyList))) {
            unset($this->PropertyList);
        } else {
            $this->PropertyList = $propertyList;
        }
        
        return $this;
    }
    /**
     * Get SKU value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getSKU(): ?string
    {
        return isset($this->SKU) ? $this->SKU : null;
    }
    /**
     * Set SKU value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $sKU
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountProductReportLog
     */
    public function setSKU(?string $sKU = null): self
    {
        // validation for constraint: string
        if (!is_null($sKU) && !is_string($sKU)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($sKU, true), gettype($sKU)), __LINE__);
        }
        if (is_null($sKU) || (is_array($sKU) && empty($sKU))) {
            unset($this->SKU);
        } else {
            $this->SKU = $sKU;
        }
        
        return $this;
    }
    /**
     * Get Validated value
     * @return bool|null
     */
    public function getValidated(): ?bool
    {
        return $this->Validated;
    }
    /**
     * Set Validated value
     * @param bool $validated
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountProductReportLog
     */
    public function setValidated(?bool $validated = null): self
    {
        // validation for constraint: boolean
        if (!is_null($validated) && !is_bool($validated)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($validated, true), gettype($validated)), __LINE__);
        }
        $this->Validated = $validated;
        
        return $this;
    }
}
