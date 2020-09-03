<?php

namespace SengentoBV\CdiscountMarketplaceSdk\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FulfilmentProductRequest Structs
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:FulfilmentProductRequest
 * @package Cdiscount
 * @subpackage Structs
 */
class CdiscountFulfilmentProductRequest extends AbstractStructBase
{
    /**
     * The BarCodeList
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfstring
     */
    public $BarCodeList;
    /**
     * The BlockedStock
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $BlockedStock;
    /**
     * The FulfilmentReferencement
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $FulfilmentReferencement;
    /**
     * The ShippableStock
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $ShippableStock;
    /**
     * The SoldOut
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $SoldOut;
    /**
     * Constructor method for FulfilmentProductRequest
     * @uses CdiscountFulfilmentProductRequest::setBarCodeList()
     * @uses CdiscountFulfilmentProductRequest::setBlockedStock()
     * @uses CdiscountFulfilmentProductRequest::setFulfilmentReferencement()
     * @uses CdiscountFulfilmentProductRequest::setShippableStock()
     * @uses CdiscountFulfilmentProductRequest::setSoldOut()
     * @param \SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfstring $barCodeList
     * @param string $blockedStock
     * @param string $fulfilmentReferencement
     * @param string $shippableStock
     * @param string $soldOut
     */
    public function __construct(\SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfstring $barCodeList = null, $blockedStock = null, $fulfilmentReferencement = null, $shippableStock = null, $soldOut = null)
    {
        $this
            ->setBarCodeList($barCodeList)
            ->setBlockedStock($blockedStock)
            ->setFulfilmentReferencement($fulfilmentReferencement)
            ->setShippableStock($shippableStock)
            ->setSoldOut($soldOut);
    }
    /**
     * Get BarCodeList value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfstring|null
     */
    public function getBarCodeList()
    {
        return isset($this->BarCodeList) ? $this->BarCodeList : null;
    }
    /**
     * Set BarCodeList value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfstring $barCodeList
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountFulfilmentProductRequest
     */
    public function setBarCodeList(\SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfstring $barCodeList = null)
    {
        if (is_null($barCodeList) || (is_array($barCodeList) && empty($barCodeList))) {
            unset($this->BarCodeList);
        } else {
            $this->BarCodeList = $barCodeList;
        }
        return $this;
    }
    /**
     * Get BlockedStock value
     * @return string|null
     */
    public function getBlockedStock()
    {
        return $this->BlockedStock;
    }
    /**
     * Set BlockedStock value
     * @uses \SengentoBV\CdiscountMarketplaceSdk\Enums\CdiscountStockFilter::valueIsValid()
     * @uses \SengentoBV\CdiscountMarketplaceSdk\Enums\CdiscountStockFilter::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $blockedStock
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountFulfilmentProductRequest
     */
    public function setBlockedStock($blockedStock = null)
    {
        // validation for constraint: enumeration
        if (!\SengentoBV\CdiscountMarketplaceSdk\Enums\CdiscountStockFilter::valueIsValid($blockedStock)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \SengentoBV\CdiscountMarketplaceSdk\Enums\CdiscountStockFilter', is_array($blockedStock) ? implode(', ', $blockedStock) : var_export($blockedStock, true), implode(', ', \SengentoBV\CdiscountMarketplaceSdk\Enums\CdiscountStockFilter::getValidValues())), __LINE__);
        }
        $this->BlockedStock = $blockedStock;
        return $this;
    }
    /**
     * Get FulfilmentReferencement value
     * @return string|null
     */
    public function getFulfilmentReferencement()
    {
        return $this->FulfilmentReferencement;
    }
    /**
     * Set FulfilmentReferencement value
     * @uses \SengentoBV\CdiscountMarketplaceSdk\Enums\CdiscountFbcReferencementFilter::valueIsValid()
     * @uses \SengentoBV\CdiscountMarketplaceSdk\Enums\CdiscountFbcReferencementFilter::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $fulfilmentReferencement
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountFulfilmentProductRequest
     */
    public function setFulfilmentReferencement($fulfilmentReferencement = null)
    {
        // validation for constraint: enumeration
        if (!\SengentoBV\CdiscountMarketplaceSdk\Enums\CdiscountFbcReferencementFilter::valueIsValid($fulfilmentReferencement)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \SengentoBV\CdiscountMarketplaceSdk\Enums\CdiscountFbcReferencementFilter', is_array($fulfilmentReferencement) ? implode(', ', $fulfilmentReferencement) : var_export($fulfilmentReferencement, true), implode(', ', \SengentoBV\CdiscountMarketplaceSdk\Enums\CdiscountFbcReferencementFilter::getValidValues())), __LINE__);
        }
        $this->FulfilmentReferencement = $fulfilmentReferencement;
        return $this;
    }
    /**
     * Get ShippableStock value
     * @return string|null
     */
    public function getShippableStock()
    {
        return $this->ShippableStock;
    }
    /**
     * Set ShippableStock value
     * @uses \SengentoBV\CdiscountMarketplaceSdk\Enums\CdiscountStockFilter::valueIsValid()
     * @uses \SengentoBV\CdiscountMarketplaceSdk\Enums\CdiscountStockFilter::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $shippableStock
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountFulfilmentProductRequest
     */
    public function setShippableStock($shippableStock = null)
    {
        // validation for constraint: enumeration
        if (!\SengentoBV\CdiscountMarketplaceSdk\Enums\CdiscountStockFilter::valueIsValid($shippableStock)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \SengentoBV\CdiscountMarketplaceSdk\Enums\CdiscountStockFilter', is_array($shippableStock) ? implode(', ', $shippableStock) : var_export($shippableStock, true), implode(', ', \SengentoBV\CdiscountMarketplaceSdk\Enums\CdiscountStockFilter::getValidValues())), __LINE__);
        }
        $this->ShippableStock = $shippableStock;
        return $this;
    }
    /**
     * Get SoldOut value
     * @return string|null
     */
    public function getSoldOut()
    {
        return $this->SoldOut;
    }
    /**
     * Set SoldOut value
     * @uses \SengentoBV\CdiscountMarketplaceSdk\Enums\CdiscountSoldOut::valueIsValid()
     * @uses \SengentoBV\CdiscountMarketplaceSdk\Enums\CdiscountSoldOut::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $soldOut
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountFulfilmentProductRequest
     */
    public function setSoldOut($soldOut = null)
    {
        // validation for constraint: enumeration
        if (!\SengentoBV\CdiscountMarketplaceSdk\Enums\CdiscountSoldOut::valueIsValid($soldOut)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \SengentoBV\CdiscountMarketplaceSdk\Enums\CdiscountSoldOut', is_array($soldOut) ? implode(', ', $soldOut) : var_export($soldOut, true), implode(', ', \SengentoBV\CdiscountMarketplaceSdk\Enums\CdiscountSoldOut::getValidValues())), __LINE__);
        }
        $this->SoldOut = $soldOut;
        return $this;
    }
}
