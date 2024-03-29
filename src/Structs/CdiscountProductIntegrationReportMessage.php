<?php

declare(strict_types=1);

namespace SengentoBV\CdiscountMarketplaceSdk\Structs;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ProductIntegrationReportMessage Structs
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ProductIntegrationReportMessage
 * @package Cdiscount
 * @subpackage Structs
 */
class CdiscountProductIntegrationReportMessage extends CdiscountServiceBaseAPIMessage
{
    /**
     * The NumberOfErrors
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $NumberOfErrors = null;
    /**
     * The PackageId
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $PackageId = null;
    /**
     * The PackageIntegrationStatus
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $PackageIntegrationStatus = null;
    /**
     * The ProductLogList
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfProductReportLog|null
     */
    protected ?\SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfProductReportLog $ProductLogList = null;
    /**
     * Constructor method for ProductIntegrationReportMessage
     * @uses CdiscountProductIntegrationReportMessage::setNumberOfErrors()
     * @uses CdiscountProductIntegrationReportMessage::setPackageId()
     * @uses CdiscountProductIntegrationReportMessage::setPackageIntegrationStatus()
     * @uses CdiscountProductIntegrationReportMessage::setProductLogList()
     * @param int $numberOfErrors
     * @param int $packageId
     * @param string $packageIntegrationStatus
     * @param \SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfProductReportLog $productLogList
     */
    public function __construct(?int $numberOfErrors = null, ?int $packageId = null, ?string $packageIntegrationStatus = null, ?\SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfProductReportLog $productLogList = null)
    {
        $this
            ->setNumberOfErrors($numberOfErrors)
            ->setPackageId($packageId)
            ->setPackageIntegrationStatus($packageIntegrationStatus)
            ->setProductLogList($productLogList);
    }
    /**
     * Get NumberOfErrors value
     * @return int|null
     */
    public function getNumberOfErrors(): ?int
    {
        return $this->NumberOfErrors;
    }
    /**
     * Set NumberOfErrors value
     * @param int $numberOfErrors
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountProductIntegrationReportMessage
     */
    public function setNumberOfErrors(?int $numberOfErrors = null): self
    {
        // validation for constraint: int
        if (!is_null($numberOfErrors) && !(is_int($numberOfErrors) || ctype_digit($numberOfErrors))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($numberOfErrors, true), gettype($numberOfErrors)), __LINE__);
        }
        $this->NumberOfErrors = $numberOfErrors;
        
        return $this;
    }
    /**
     * Get PackageId value
     * @return int|null
     */
    public function getPackageId(): ?int
    {
        return $this->PackageId;
    }
    /**
     * Set PackageId value
     * @param int $packageId
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountProductIntegrationReportMessage
     */
    public function setPackageId(?int $packageId = null): self
    {
        // validation for constraint: int
        if (!is_null($packageId) && !(is_int($packageId) || ctype_digit($packageId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($packageId, true), gettype($packageId)), __LINE__);
        }
        $this->PackageId = $packageId;
        
        return $this;
    }
    /**
     * Get PackageIntegrationStatus value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getPackageIntegrationStatus(): ?string
    {
        return isset($this->PackageIntegrationStatus) ? $this->PackageIntegrationStatus : null;
    }
    /**
     * Set PackageIntegrationStatus value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $packageIntegrationStatus
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountProductIntegrationReportMessage
     */
    public function setPackageIntegrationStatus(?string $packageIntegrationStatus = null): self
    {
        // validation for constraint: string
        if (!is_null($packageIntegrationStatus) && !is_string($packageIntegrationStatus)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($packageIntegrationStatus, true), gettype($packageIntegrationStatus)), __LINE__);
        }
        if (is_null($packageIntegrationStatus) || (is_array($packageIntegrationStatus) && empty($packageIntegrationStatus))) {
            unset($this->PackageIntegrationStatus);
        } else {
            $this->PackageIntegrationStatus = $packageIntegrationStatus;
        }
        
        return $this;
    }
    /**
     * Get ProductLogList value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfProductReportLog|null
     */
    public function getProductLogList(): ?\SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfProductReportLog
    {
        return isset($this->ProductLogList) ? $this->ProductLogList : null;
    }
    /**
     * Set ProductLogList value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfProductReportLog $productLogList
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountProductIntegrationReportMessage
     */
    public function setProductLogList(?\SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfProductReportLog $productLogList = null): self
    {
        if (is_null($productLogList) || (is_array($productLogList) && empty($productLogList))) {
            unset($this->ProductLogList);
        } else {
            $this->ProductLogList = $productLogList;
        }
        
        return $this;
    }
}
