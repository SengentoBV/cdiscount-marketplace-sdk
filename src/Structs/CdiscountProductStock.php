<?php

namespace SengentoBV\CdiscountMarketplaceSdk\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ProductStock Structs
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ProductStock
 * @package Cdiscount
 * @subpackage Structs
 */
class CdiscountProductStock extends AbstractStructBase
{
    /**
     * The AverageWeeklySales
     * @var int
     */
    public $AverageWeeklySales;
    /**
     * The BlockedStock
     * @var int
     */
    public $BlockedStock;
    /**
     * The CurrentWeeklySales
     * @var int
     */
    public $CurrentWeeklySales;
    /**
     * The DamagedReturns
     * @var int
     */
    public $DamagedReturns;
    /**
     * The DeliveryDisputes
     * @var int
     */
    public $DeliveryDisputes;
    /**
     * The Ean
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $Ean;
    /**
     * The FodStock
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var int
     */
    public $FodStock;
    /**
     * The ForecastingStockShortage
     * @var int
     */
    public $ForecastingStockShortage;
    /**
     * The FrontStock
     * @var int
     */
    public $FrontStock;
    /**
     * The IncomingShipment
     * @var int
     */
    public $IncomingShipment;
    /**
     * The IsReferenced
     * @var bool
     */
    public $IsReferenced;
    /**
     * The Libelle
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $Libelle;
    /**
     * The LogisticFees
     * @var float
     */
    public $LogisticFees;
    /**
     * The OngoingRecoveries
     * @var int
     */
    public $OngoingRecoveries;
    /**
     * The OrderInProgress
     * @var int
     */
    public $OrderInProgress;
    /**
     * The OverheadOutsizeFees
     * @var float
     */
    public $OverheadOutsizeFees;
    /**
     * The ProductConditionId
     * @var string
     */
    public $ProductConditionId;
    /**
     * The ProductState
     * @var string
     */
    public $ProductState;
    /**
     * The SellerReference
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $SellerReference;
    /**
     * The ShippableStock
     * @var int
     */
    public $ShippableStock;
    /**
     * The Sku
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $Sku;
    /**
     * The StockCategory
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $StockCategory;
    /**
     * The StockFees
     * @var float
     */
    public $StockFees;
    /**
     * The StockInWarehouse
     * @var int
     */
    public $StockInWarehouse;
    /**
     * The Warehouse
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $Warehouse;
    /**
     * The WarehouseCode
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $WarehouseCode;
    /**
     * Constructor method for ProductStock
     * @uses CdiscountProductStock::setAverageWeeklySales()
     * @uses CdiscountProductStock::setBlockedStock()
     * @uses CdiscountProductStock::setCurrentWeeklySales()
     * @uses CdiscountProductStock::setDamagedReturns()
     * @uses CdiscountProductStock::setDeliveryDisputes()
     * @uses CdiscountProductStock::setEan()
     * @uses CdiscountProductStock::setFodStock()
     * @uses CdiscountProductStock::setForecastingStockShortage()
     * @uses CdiscountProductStock::setFrontStock()
     * @uses CdiscountProductStock::setIncomingShipment()
     * @uses CdiscountProductStock::setIsReferenced()
     * @uses CdiscountProductStock::setLibelle()
     * @uses CdiscountProductStock::setLogisticFees()
     * @uses CdiscountProductStock::setOngoingRecoveries()
     * @uses CdiscountProductStock::setOrderInProgress()
     * @uses CdiscountProductStock::setOverheadOutsizeFees()
     * @uses CdiscountProductStock::setProductConditionId()
     * @uses CdiscountProductStock::setProductState()
     * @uses CdiscountProductStock::setSellerReference()
     * @uses CdiscountProductStock::setShippableStock()
     * @uses CdiscountProductStock::setSku()
     * @uses CdiscountProductStock::setStockCategory()
     * @uses CdiscountProductStock::setStockFees()
     * @uses CdiscountProductStock::setStockInWarehouse()
     * @uses CdiscountProductStock::setWarehouse()
     * @uses CdiscountProductStock::setWarehouseCode()
     * @param int $averageWeeklySales
     * @param int $blockedStock
     * @param int $currentWeeklySales
     * @param int $damagedReturns
     * @param int $deliveryDisputes
     * @param string $ean
     * @param int $fodStock
     * @param int $forecastingStockShortage
     * @param int $frontStock
     * @param int $incomingShipment
     * @param bool $isReferenced
     * @param string $libelle
     * @param float $logisticFees
     * @param int $ongoingRecoveries
     * @param int $orderInProgress
     * @param float $overheadOutsizeFees
     * @param string $productConditionId
     * @param string $productState
     * @param string $sellerReference
     * @param int $shippableStock
     * @param string $sku
     * @param string $stockCategory
     * @param float $stockFees
     * @param int $stockInWarehouse
     * @param string $warehouse
     * @param string $warehouseCode
     */
    public function __construct($averageWeeklySales = null, $blockedStock = null, $currentWeeklySales = null, $damagedReturns = null, $deliveryDisputes = null, $ean = null, $fodStock = null, $forecastingStockShortage = null, $frontStock = null, $incomingShipment = null, $isReferenced = null, $libelle = null, $logisticFees = null, $ongoingRecoveries = null, $orderInProgress = null, $overheadOutsizeFees = null, $productConditionId = null, $productState = null, $sellerReference = null, $shippableStock = null, $sku = null, $stockCategory = null, $stockFees = null, $stockInWarehouse = null, $warehouse = null, $warehouseCode = null)
    {
        $this
            ->setAverageWeeklySales($averageWeeklySales)
            ->setBlockedStock($blockedStock)
            ->setCurrentWeeklySales($currentWeeklySales)
            ->setDamagedReturns($damagedReturns)
            ->setDeliveryDisputes($deliveryDisputes)
            ->setEan($ean)
            ->setFodStock($fodStock)
            ->setForecastingStockShortage($forecastingStockShortage)
            ->setFrontStock($frontStock)
            ->setIncomingShipment($incomingShipment)
            ->setIsReferenced($isReferenced)
            ->setLibelle($libelle)
            ->setLogisticFees($logisticFees)
            ->setOngoingRecoveries($ongoingRecoveries)
            ->setOrderInProgress($orderInProgress)
            ->setOverheadOutsizeFees($overheadOutsizeFees)
            ->setProductConditionId($productConditionId)
            ->setProductState($productState)
            ->setSellerReference($sellerReference)
            ->setShippableStock($shippableStock)
            ->setSku($sku)
            ->setStockCategory($stockCategory)
            ->setStockFees($stockFees)
            ->setStockInWarehouse($stockInWarehouse)
            ->setWarehouse($warehouse)
            ->setWarehouseCode($warehouseCode);
    }
    /**
     * Get AverageWeeklySales value
     * @return int|null
     */
    public function getAverageWeeklySales()
    {
        return $this->AverageWeeklySales;
    }
    /**
     * Set AverageWeeklySales value
     * @param int $averageWeeklySales
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountProductStock
     */
    public function setAverageWeeklySales($averageWeeklySales = null)
    {
        // validation for constraint: int
        if (!is_null($averageWeeklySales) && !(is_int($averageWeeklySales) || ctype_digit($averageWeeklySales))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($averageWeeklySales, true), gettype($averageWeeklySales)), __LINE__);
        }
        $this->AverageWeeklySales = $averageWeeklySales;
        return $this;
    }
    /**
     * Get BlockedStock value
     * @return int|null
     */
    public function getBlockedStock()
    {
        return $this->BlockedStock;
    }
    /**
     * Set BlockedStock value
     * @param int $blockedStock
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountProductStock
     */
    public function setBlockedStock($blockedStock = null)
    {
        // validation for constraint: int
        if (!is_null($blockedStock) && !(is_int($blockedStock) || ctype_digit($blockedStock))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($blockedStock, true), gettype($blockedStock)), __LINE__);
        }
        $this->BlockedStock = $blockedStock;
        return $this;
    }
    /**
     * Get CurrentWeeklySales value
     * @return int|null
     */
    public function getCurrentWeeklySales()
    {
        return $this->CurrentWeeklySales;
    }
    /**
     * Set CurrentWeeklySales value
     * @param int $currentWeeklySales
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountProductStock
     */
    public function setCurrentWeeklySales($currentWeeklySales = null)
    {
        // validation for constraint: int
        if (!is_null($currentWeeklySales) && !(is_int($currentWeeklySales) || ctype_digit($currentWeeklySales))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($currentWeeklySales, true), gettype($currentWeeklySales)), __LINE__);
        }
        $this->CurrentWeeklySales = $currentWeeklySales;
        return $this;
    }
    /**
     * Get DamagedReturns value
     * @return int|null
     */
    public function getDamagedReturns()
    {
        return $this->DamagedReturns;
    }
    /**
     * Set DamagedReturns value
     * @param int $damagedReturns
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountProductStock
     */
    public function setDamagedReturns($damagedReturns = null)
    {
        // validation for constraint: int
        if (!is_null($damagedReturns) && !(is_int($damagedReturns) || ctype_digit($damagedReturns))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($damagedReturns, true), gettype($damagedReturns)), __LINE__);
        }
        $this->DamagedReturns = $damagedReturns;
        return $this;
    }
    /**
     * Get DeliveryDisputes value
     * @return int|null
     */
    public function getDeliveryDisputes()
    {
        return $this->DeliveryDisputes;
    }
    /**
     * Set DeliveryDisputes value
     * @param int $deliveryDisputes
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountProductStock
     */
    public function setDeliveryDisputes($deliveryDisputes = null)
    {
        // validation for constraint: int
        if (!is_null($deliveryDisputes) && !(is_int($deliveryDisputes) || ctype_digit($deliveryDisputes))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($deliveryDisputes, true), gettype($deliveryDisputes)), __LINE__);
        }
        $this->DeliveryDisputes = $deliveryDisputes;
        return $this;
    }
    /**
     * Get Ean value
     * @return string|null
     */
    public function getEan()
    {
        return $this->Ean;
    }
    /**
     * Set Ean value
     * @param string $ean
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountProductStock
     */
    public function setEan($ean = null)
    {
        // validation for constraint: string
        if (!is_null($ean) && !is_string($ean)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($ean, true), gettype($ean)), __LINE__);
        }
        $this->Ean = $ean;
        return $this;
    }
    /**
     * Get FodStock value
     * @return int|null
     */
    public function getFodStock()
    {
        return $this->FodStock;
    }
    /**
     * Set FodStock value
     * @param int $fodStock
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountProductStock
     */
    public function setFodStock($fodStock = null)
    {
        // validation for constraint: int
        if (!is_null($fodStock) && !(is_int($fodStock) || ctype_digit($fodStock))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($fodStock, true), gettype($fodStock)), __LINE__);
        }
        $this->FodStock = $fodStock;
        return $this;
    }
    /**
     * Get ForecastingStockShortage value
     * @return int|null
     */
    public function getForecastingStockShortage()
    {
        return $this->ForecastingStockShortage;
    }
    /**
     * Set ForecastingStockShortage value
     * @param int $forecastingStockShortage
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountProductStock
     */
    public function setForecastingStockShortage($forecastingStockShortage = null)
    {
        // validation for constraint: int
        if (!is_null($forecastingStockShortage) && !(is_int($forecastingStockShortage) || ctype_digit($forecastingStockShortage))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($forecastingStockShortage, true), gettype($forecastingStockShortage)), __LINE__);
        }
        $this->ForecastingStockShortage = $forecastingStockShortage;
        return $this;
    }
    /**
     * Get FrontStock value
     * @return int|null
     */
    public function getFrontStock()
    {
        return $this->FrontStock;
    }
    /**
     * Set FrontStock value
     * @param int $frontStock
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountProductStock
     */
    public function setFrontStock($frontStock = null)
    {
        // validation for constraint: int
        if (!is_null($frontStock) && !(is_int($frontStock) || ctype_digit($frontStock))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($frontStock, true), gettype($frontStock)), __LINE__);
        }
        $this->FrontStock = $frontStock;
        return $this;
    }
    /**
     * Get IncomingShipment value
     * @return int|null
     */
    public function getIncomingShipment()
    {
        return $this->IncomingShipment;
    }
    /**
     * Set IncomingShipment value
     * @param int $incomingShipment
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountProductStock
     */
    public function setIncomingShipment($incomingShipment = null)
    {
        // validation for constraint: int
        if (!is_null($incomingShipment) && !(is_int($incomingShipment) || ctype_digit($incomingShipment))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($incomingShipment, true), gettype($incomingShipment)), __LINE__);
        }
        $this->IncomingShipment = $incomingShipment;
        return $this;
    }
    /**
     * Get IsReferenced value
     * @return bool|null
     */
    public function getIsReferenced()
    {
        return $this->IsReferenced;
    }
    /**
     * Set IsReferenced value
     * @param bool $isReferenced
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountProductStock
     */
    public function setIsReferenced($isReferenced = null)
    {
        // validation for constraint: boolean
        if (!is_null($isReferenced) && !is_bool($isReferenced)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isReferenced, true), gettype($isReferenced)), __LINE__);
        }
        $this->IsReferenced = $isReferenced;
        return $this;
    }
    /**
     * Get Libelle value
     * @return string|null
     */
    public function getLibelle()
    {
        return $this->Libelle;
    }
    /**
     * Set Libelle value
     * @param string $libelle
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountProductStock
     */
    public function setLibelle($libelle = null)
    {
        // validation for constraint: string
        if (!is_null($libelle) && !is_string($libelle)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($libelle, true), gettype($libelle)), __LINE__);
        }
        $this->Libelle = $libelle;
        return $this;
    }
    /**
     * Get LogisticFees value
     * @return float|null
     */
    public function getLogisticFees()
    {
        return $this->LogisticFees;
    }
    /**
     * Set LogisticFees value
     * @param float $logisticFees
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountProductStock
     */
    public function setLogisticFees($logisticFees = null)
    {
        // validation for constraint: float
        if (!is_null($logisticFees) && !(is_float($logisticFees) || is_numeric($logisticFees))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($logisticFees, true), gettype($logisticFees)), __LINE__);
        }
        $this->LogisticFees = $logisticFees;
        return $this;
    }
    /**
     * Get OngoingRecoveries value
     * @return int|null
     */
    public function getOngoingRecoveries()
    {
        return $this->OngoingRecoveries;
    }
    /**
     * Set OngoingRecoveries value
     * @param int $ongoingRecoveries
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountProductStock
     */
    public function setOngoingRecoveries($ongoingRecoveries = null)
    {
        // validation for constraint: int
        if (!is_null($ongoingRecoveries) && !(is_int($ongoingRecoveries) || ctype_digit($ongoingRecoveries))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($ongoingRecoveries, true), gettype($ongoingRecoveries)), __LINE__);
        }
        $this->OngoingRecoveries = $ongoingRecoveries;
        return $this;
    }
    /**
     * Get OrderInProgress value
     * @return int|null
     */
    public function getOrderInProgress()
    {
        return $this->OrderInProgress;
    }
    /**
     * Set OrderInProgress value
     * @param int $orderInProgress
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountProductStock
     */
    public function setOrderInProgress($orderInProgress = null)
    {
        // validation for constraint: int
        if (!is_null($orderInProgress) && !(is_int($orderInProgress) || ctype_digit($orderInProgress))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($orderInProgress, true), gettype($orderInProgress)), __LINE__);
        }
        $this->OrderInProgress = $orderInProgress;
        return $this;
    }
    /**
     * Get OverheadOutsizeFees value
     * @return float|null
     */
    public function getOverheadOutsizeFees()
    {
        return $this->OverheadOutsizeFees;
    }
    /**
     * Set OverheadOutsizeFees value
     * @param float $overheadOutsizeFees
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountProductStock
     */
    public function setOverheadOutsizeFees($overheadOutsizeFees = null)
    {
        // validation for constraint: float
        if (!is_null($overheadOutsizeFees) && !(is_float($overheadOutsizeFees) || is_numeric($overheadOutsizeFees))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($overheadOutsizeFees, true), gettype($overheadOutsizeFees)), __LINE__);
        }
        $this->OverheadOutsizeFees = $overheadOutsizeFees;
        return $this;
    }
    /**
     * Get ProductConditionId value
     * @return string|null
     */
    public function getProductConditionId()
    {
        return $this->ProductConditionId;
    }
    /**
     * Set ProductConditionId value
     * @uses \SengentoBV\CdiscountMarketplaceSdk\Enums\CdiscountProductCondition::valueIsValid()
     * @uses \SengentoBV\CdiscountMarketplaceSdk\Enums\CdiscountProductCondition::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $productConditionId
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountProductStock
     */
    public function setProductConditionId($productConditionId = null)
    {
        // validation for constraint: enumeration
        if (!\SengentoBV\CdiscountMarketplaceSdk\Enums\CdiscountProductCondition::valueIsValid($productConditionId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \SengentoBV\CdiscountMarketplaceSdk\Enums\CdiscountProductCondition', is_array($productConditionId) ? implode(', ', $productConditionId) : var_export($productConditionId, true), implode(', ', \SengentoBV\CdiscountMarketplaceSdk\Enums\CdiscountProductCondition::getValidValues())), __LINE__);
        }
        $this->ProductConditionId = $productConditionId;
        return $this;
    }
    /**
     * Get ProductState value
     * @return string|null
     */
    public function getProductState()
    {
        return $this->ProductState;
    }
    /**
     * Set ProductState value
     * @uses \SengentoBV\CdiscountMarketplaceSdk\Enums\CdiscountProductState::valueIsValid()
     * @uses \SengentoBV\CdiscountMarketplaceSdk\Enums\CdiscountProductState::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $productState
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountProductStock
     */
    public function setProductState($productState = null)
    {
        // validation for constraint: enumeration
        if (!\SengentoBV\CdiscountMarketplaceSdk\Enums\CdiscountProductState::valueIsValid($productState)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \SengentoBV\CdiscountMarketplaceSdk\Enums\CdiscountProductState', is_array($productState) ? implode(', ', $productState) : var_export($productState, true), implode(', ', \SengentoBV\CdiscountMarketplaceSdk\Enums\CdiscountProductState::getValidValues())), __LINE__);
        }
        $this->ProductState = $productState;
        return $this;
    }
    /**
     * Get SellerReference value
     * @return string|null
     */
    public function getSellerReference()
    {
        return $this->SellerReference;
    }
    /**
     * Set SellerReference value
     * @param string $sellerReference
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountProductStock
     */
    public function setSellerReference($sellerReference = null)
    {
        // validation for constraint: string
        if (!is_null($sellerReference) && !is_string($sellerReference)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($sellerReference, true), gettype($sellerReference)), __LINE__);
        }
        $this->SellerReference = $sellerReference;
        return $this;
    }
    /**
     * Get ShippableStock value
     * @return int|null
     */
    public function getShippableStock()
    {
        return $this->ShippableStock;
    }
    /**
     * Set ShippableStock value
     * @param int $shippableStock
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountProductStock
     */
    public function setShippableStock($shippableStock = null)
    {
        // validation for constraint: int
        if (!is_null($shippableStock) && !(is_int($shippableStock) || ctype_digit($shippableStock))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($shippableStock, true), gettype($shippableStock)), __LINE__);
        }
        $this->ShippableStock = $shippableStock;
        return $this;
    }
    /**
     * Get Sku value
     * @return string|null
     */
    public function getSku()
    {
        return $this->Sku;
    }
    /**
     * Set Sku value
     * @param string $sku
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountProductStock
     */
    public function setSku($sku = null)
    {
        // validation for constraint: string
        if (!is_null($sku) && !is_string($sku)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($sku, true), gettype($sku)), __LINE__);
        }
        $this->Sku = $sku;
        return $this;
    }
    /**
     * Get StockCategory value
     * @return string|null
     */
    public function getStockCategory()
    {
        return $this->StockCategory;
    }
    /**
     * Set StockCategory value
     * @param string $stockCategory
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountProductStock
     */
    public function setStockCategory($stockCategory = null)
    {
        // validation for constraint: string
        if (!is_null($stockCategory) && !is_string($stockCategory)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($stockCategory, true), gettype($stockCategory)), __LINE__);
        }
        $this->StockCategory = $stockCategory;
        return $this;
    }
    /**
     * Get StockFees value
     * @return float|null
     */
    public function getStockFees()
    {
        return $this->StockFees;
    }
    /**
     * Set StockFees value
     * @param float $stockFees
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountProductStock
     */
    public function setStockFees($stockFees = null)
    {
        // validation for constraint: float
        if (!is_null($stockFees) && !(is_float($stockFees) || is_numeric($stockFees))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($stockFees, true), gettype($stockFees)), __LINE__);
        }
        $this->StockFees = $stockFees;
        return $this;
    }
    /**
     * Get StockInWarehouse value
     * @return int|null
     */
    public function getStockInWarehouse()
    {
        return $this->StockInWarehouse;
    }
    /**
     * Set StockInWarehouse value
     * @param int $stockInWarehouse
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountProductStock
     */
    public function setStockInWarehouse($stockInWarehouse = null)
    {
        // validation for constraint: int
        if (!is_null($stockInWarehouse) && !(is_int($stockInWarehouse) || ctype_digit($stockInWarehouse))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($stockInWarehouse, true), gettype($stockInWarehouse)), __LINE__);
        }
        $this->StockInWarehouse = $stockInWarehouse;
        return $this;
    }
    /**
     * Get Warehouse value
     * @return string|null
     */
    public function getWarehouse()
    {
        return $this->Warehouse;
    }
    /**
     * Set Warehouse value
     * @param string $warehouse
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountProductStock
     */
    public function setWarehouse($warehouse = null)
    {
        // validation for constraint: string
        if (!is_null($warehouse) && !is_string($warehouse)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($warehouse, true), gettype($warehouse)), __LINE__);
        }
        $this->Warehouse = $warehouse;
        return $this;
    }
    /**
     * Get WarehouseCode value
     * @return string|null
     */
    public function getWarehouseCode()
    {
        return $this->WarehouseCode;
    }
    /**
     * Set WarehouseCode value
     * @param string $warehouseCode
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountProductStock
     */
    public function setWarehouseCode($warehouseCode = null)
    {
        // validation for constraint: string
        if (!is_null($warehouseCode) && !is_string($warehouseCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($warehouseCode, true), gettype($warehouseCode)), __LINE__);
        }
        $this->WarehouseCode = $warehouseCode;
        return $this;
    }
}
