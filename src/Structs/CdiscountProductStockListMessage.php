<?php

declare(strict_types=1);

namespace SengentoBV\CdiscountMarketplaceSdk\Structs;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ProductStockListMessage Structs
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ProductStockListMessage
 * @package Cdiscount
 * @subpackage Structs
 */
class CdiscountProductStockListMessage extends CdiscountServiceBaseAPIMessage
{
    /**
     * The ProductStockList
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfProductStock|null
     */
    protected ?\SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfProductStock $ProductStockList = null;
    /**
     * The Status
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $Status = null;
    /**
     * The TotalProductCount
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $TotalProductCount = null;
    /**
     * Constructor method for ProductStockListMessage
     * @uses CdiscountProductStockListMessage::setProductStockList()
     * @uses CdiscountProductStockListMessage::setStatus()
     * @uses CdiscountProductStockListMessage::setTotalProductCount()
     * @param \SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfProductStock $productStockList
     * @param string $status
     * @param int $totalProductCount
     */
    public function __construct(?\SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfProductStock $productStockList = null, ?string $status = null, ?int $totalProductCount = null)
    {
        $this
            ->setProductStockList($productStockList)
            ->setStatus($status)
            ->setTotalProductCount($totalProductCount);
    }
    /**
     * Get ProductStockList value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfProductStock|null
     */
    public function getProductStockList(): ?\SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfProductStock
    {
        return isset($this->ProductStockList) ? $this->ProductStockList : null;
    }
    /**
     * Set ProductStockList value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfProductStock $productStockList
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountProductStockListMessage
     */
    public function setProductStockList(?\SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfProductStock $productStockList = null): self
    {
        if (is_null($productStockList) || (is_array($productStockList) && empty($productStockList))) {
            unset($this->ProductStockList);
        } else {
            $this->ProductStockList = $productStockList;
        }
        
        return $this;
    }
    /**
     * Get Status value
     * @return string|null
     */
    public function getStatus(): ?string
    {
        return $this->Status;
    }
    /**
     * Set Status value
     * @uses \SengentoBV\CdiscountMarketplaceSdk\Enums\CdiscountFulfilmentProductListStatus::valueIsValid()
     * @uses \SengentoBV\CdiscountMarketplaceSdk\Enums\CdiscountFulfilmentProductListStatus::getValidValues()
     * @throws InvalidArgumentException
     * @param string $status
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountProductStockListMessage
     */
    public function setStatus(?string $status = null): self
    {
        // validation for constraint: enumeration
        if (!\SengentoBV\CdiscountMarketplaceSdk\Enums\CdiscountFulfilmentProductListStatus::valueIsValid($status)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \SengentoBV\CdiscountMarketplaceSdk\Enums\CdiscountFulfilmentProductListStatus', is_array($status) ? implode(', ', $status) : var_export($status, true), implode(', ', \SengentoBV\CdiscountMarketplaceSdk\Enums\CdiscountFulfilmentProductListStatus::getValidValues())), __LINE__);
        }
        $this->Status = $status;
        
        return $this;
    }
    /**
     * Get TotalProductCount value
     * @return int|null
     */
    public function getTotalProductCount(): ?int
    {
        return $this->TotalProductCount;
    }
    /**
     * Set TotalProductCount value
     * @param int $totalProductCount
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountProductStockListMessage
     */
    public function setTotalProductCount(?int $totalProductCount = null): self
    {
        // validation for constraint: int
        if (!is_null($totalProductCount) && !(is_int($totalProductCount) || ctype_digit($totalProductCount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($totalProductCount, true), gettype($totalProductCount)), __LINE__);
        }
        $this->TotalProductCount = $totalProductCount;
        
        return $this;
    }
}
