<?php

namespace SengentoBV\CdiscountMarketplaceSdk\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FulfilmentActivationReport Structs
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:FulfilmentActivationReport
 * @package Cdiscount
 * @subpackage Structs
 */
class CdiscountFulfilmentActivationReport extends AbstractStructBase
{
    /**
     * The DepositId
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var int
     */
    public $DepositId;
    /**
     * The DetailsList
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfFulfilmentActivationReportDetails
     */
    public $DetailsList;
    /**
     * The NumberOfActivatedProducts
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $NumberOfActivatedProducts;
    /**
     * The NumberOfDeactivatedProducts
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $NumberOfDeactivatedProducts;
    /**
     * The NumberOfProcessedProducts
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $NumberOfProcessedProducts;
    /**
     * The NumberOfProducts
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $NumberOfProducts;
    /**
     * The NumberOfProductsInError
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $NumberOfProductsInError;
    /**
     * The NumberOfRemainingProductsToProcess
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $NumberOfRemainingProductsToProcess;
    /**
     * The ReportDate
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $ReportDate;
    /**
     * Constructor method for FulfilmentActivationReport
     * @uses CdiscountFulfilmentActivationReport::setDepositId()
     * @uses CdiscountFulfilmentActivationReport::setDetailsList()
     * @uses CdiscountFulfilmentActivationReport::setNumberOfActivatedProducts()
     * @uses CdiscountFulfilmentActivationReport::setNumberOfDeactivatedProducts()
     * @uses CdiscountFulfilmentActivationReport::setNumberOfProcessedProducts()
     * @uses CdiscountFulfilmentActivationReport::setNumberOfProducts()
     * @uses CdiscountFulfilmentActivationReport::setNumberOfProductsInError()
     * @uses CdiscountFulfilmentActivationReport::setNumberOfRemainingProductsToProcess()
     * @uses CdiscountFulfilmentActivationReport::setReportDate()
     * @param int $depositId
     * @param \SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfFulfilmentActivationReportDetails $detailsList
     * @param int $numberOfActivatedProducts
     * @param int $numberOfDeactivatedProducts
     * @param int $numberOfProcessedProducts
     * @param int $numberOfProducts
     * @param int $numberOfProductsInError
     * @param int $numberOfRemainingProductsToProcess
     * @param string $reportDate
     */
    public function __construct($depositId = null, \SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfFulfilmentActivationReportDetails $detailsList = null, $numberOfActivatedProducts = null, $numberOfDeactivatedProducts = null, $numberOfProcessedProducts = null, $numberOfProducts = null, $numberOfProductsInError = null, $numberOfRemainingProductsToProcess = null, $reportDate = null)
    {
        $this
            ->setDepositId($depositId)
            ->setDetailsList($detailsList)
            ->setNumberOfActivatedProducts($numberOfActivatedProducts)
            ->setNumberOfDeactivatedProducts($numberOfDeactivatedProducts)
            ->setNumberOfProcessedProducts($numberOfProcessedProducts)
            ->setNumberOfProducts($numberOfProducts)
            ->setNumberOfProductsInError($numberOfProductsInError)
            ->setNumberOfRemainingProductsToProcess($numberOfRemainingProductsToProcess)
            ->setReportDate($reportDate);
    }
    /**
     * Get DepositId value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return int|null
     */
    public function getDepositId()
    {
        return isset($this->DepositId) ? $this->DepositId : null;
    }
    /**
     * Set DepositId value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param int $depositId
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountFulfilmentActivationReport
     */
    public function setDepositId($depositId = null)
    {
        // validation for constraint: int
        if (!is_null($depositId) && !(is_int($depositId) || ctype_digit($depositId))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($depositId, true), gettype($depositId)), __LINE__);
        }
        if (is_null($depositId) || (is_array($depositId) && empty($depositId))) {
            unset($this->DepositId);
        } else {
            $this->DepositId = $depositId;
        }
        return $this;
    }
    /**
     * Get DetailsList value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfFulfilmentActivationReportDetails|null
     */
    public function getDetailsList()
    {
        return isset($this->DetailsList) ? $this->DetailsList : null;
    }
    /**
     * Set DetailsList value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfFulfilmentActivationReportDetails $detailsList
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountFulfilmentActivationReport
     */
    public function setDetailsList(\SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfFulfilmentActivationReportDetails $detailsList = null)
    {
        if (is_null($detailsList) || (is_array($detailsList) && empty($detailsList))) {
            unset($this->DetailsList);
        } else {
            $this->DetailsList = $detailsList;
        }
        return $this;
    }
    /**
     * Get NumberOfActivatedProducts value
     * @return int|null
     */
    public function getNumberOfActivatedProducts()
    {
        return $this->NumberOfActivatedProducts;
    }
    /**
     * Set NumberOfActivatedProducts value
     * @param int $numberOfActivatedProducts
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountFulfilmentActivationReport
     */
    public function setNumberOfActivatedProducts($numberOfActivatedProducts = null)
    {
        // validation for constraint: int
        if (!is_null($numberOfActivatedProducts) && !(is_int($numberOfActivatedProducts) || ctype_digit($numberOfActivatedProducts))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($numberOfActivatedProducts, true), gettype($numberOfActivatedProducts)), __LINE__);
        }
        $this->NumberOfActivatedProducts = $numberOfActivatedProducts;
        return $this;
    }
    /**
     * Get NumberOfDeactivatedProducts value
     * @return int|null
     */
    public function getNumberOfDeactivatedProducts()
    {
        return $this->NumberOfDeactivatedProducts;
    }
    /**
     * Set NumberOfDeactivatedProducts value
     * @param int $numberOfDeactivatedProducts
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountFulfilmentActivationReport
     */
    public function setNumberOfDeactivatedProducts($numberOfDeactivatedProducts = null)
    {
        // validation for constraint: int
        if (!is_null($numberOfDeactivatedProducts) && !(is_int($numberOfDeactivatedProducts) || ctype_digit($numberOfDeactivatedProducts))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($numberOfDeactivatedProducts, true), gettype($numberOfDeactivatedProducts)), __LINE__);
        }
        $this->NumberOfDeactivatedProducts = $numberOfDeactivatedProducts;
        return $this;
    }
    /**
     * Get NumberOfProcessedProducts value
     * @return int|null
     */
    public function getNumberOfProcessedProducts()
    {
        return $this->NumberOfProcessedProducts;
    }
    /**
     * Set NumberOfProcessedProducts value
     * @param int $numberOfProcessedProducts
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountFulfilmentActivationReport
     */
    public function setNumberOfProcessedProducts($numberOfProcessedProducts = null)
    {
        // validation for constraint: int
        if (!is_null($numberOfProcessedProducts) && !(is_int($numberOfProcessedProducts) || ctype_digit($numberOfProcessedProducts))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($numberOfProcessedProducts, true), gettype($numberOfProcessedProducts)), __LINE__);
        }
        $this->NumberOfProcessedProducts = $numberOfProcessedProducts;
        return $this;
    }
    /**
     * Get NumberOfProducts value
     * @return int|null
     */
    public function getNumberOfProducts()
    {
        return $this->NumberOfProducts;
    }
    /**
     * Set NumberOfProducts value
     * @param int $numberOfProducts
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountFulfilmentActivationReport
     */
    public function setNumberOfProducts($numberOfProducts = null)
    {
        // validation for constraint: int
        if (!is_null($numberOfProducts) && !(is_int($numberOfProducts) || ctype_digit($numberOfProducts))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($numberOfProducts, true), gettype($numberOfProducts)), __LINE__);
        }
        $this->NumberOfProducts = $numberOfProducts;
        return $this;
    }
    /**
     * Get NumberOfProductsInError value
     * @return int|null
     */
    public function getNumberOfProductsInError()
    {
        return $this->NumberOfProductsInError;
    }
    /**
     * Set NumberOfProductsInError value
     * @param int $numberOfProductsInError
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountFulfilmentActivationReport
     */
    public function setNumberOfProductsInError($numberOfProductsInError = null)
    {
        // validation for constraint: int
        if (!is_null($numberOfProductsInError) && !(is_int($numberOfProductsInError) || ctype_digit($numberOfProductsInError))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($numberOfProductsInError, true), gettype($numberOfProductsInError)), __LINE__);
        }
        $this->NumberOfProductsInError = $numberOfProductsInError;
        return $this;
    }
    /**
     * Get NumberOfRemainingProductsToProcess value
     * @return int|null
     */
    public function getNumberOfRemainingProductsToProcess()
    {
        return $this->NumberOfRemainingProductsToProcess;
    }
    /**
     * Set NumberOfRemainingProductsToProcess value
     * @param int $numberOfRemainingProductsToProcess
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountFulfilmentActivationReport
     */
    public function setNumberOfRemainingProductsToProcess($numberOfRemainingProductsToProcess = null)
    {
        // validation for constraint: int
        if (!is_null($numberOfRemainingProductsToProcess) && !(is_int($numberOfRemainingProductsToProcess) || ctype_digit($numberOfRemainingProductsToProcess))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($numberOfRemainingProductsToProcess, true), gettype($numberOfRemainingProductsToProcess)), __LINE__);
        }
        $this->NumberOfRemainingProductsToProcess = $numberOfRemainingProductsToProcess;
        return $this;
    }
    /**
     * Get ReportDate value
     * @return string|null
     */
    public function getReportDate()
    {
        return $this->ReportDate;
    }
    /**
     * Set ReportDate value
     * @param string $reportDate
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountFulfilmentActivationReport
     */
    public function setReportDate($reportDate = null)
    {
        // validation for constraint: string
        if (!is_null($reportDate) && !is_string($reportDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($reportDate, true), gettype($reportDate)), __LINE__);
        }
        $this->ReportDate = $reportDate;
        return $this;
    }
}
