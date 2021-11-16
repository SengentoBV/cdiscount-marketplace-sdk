<?php

declare(strict_types=1);

namespace SengentoBV\CdiscountMarketplaceSdk\Structs;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetProductPackageProductMatchingFileDataResponse Structs
 * @package Cdiscount
 * @subpackage Structs
 */
class CdiscountGetProductPackageProductMatchingFileDataResponse extends AbstractStructBase
{
    /**
     * The GetProductPackageProductMatchingFileDataResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountProductMatchingFileMessage|null
     */
    protected ?\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountProductMatchingFileMessage $GetProductPackageProductMatchingFileDataResult = null;
    /**
     * Constructor method for GetProductPackageProductMatchingFileDataResponse
     * @uses CdiscountGetProductPackageProductMatchingFileDataResponse::setGetProductPackageProductMatchingFileDataResult()
     * @param \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountProductMatchingFileMessage $getProductPackageProductMatchingFileDataResult
     */
    public function __construct(?\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountProductMatchingFileMessage $getProductPackageProductMatchingFileDataResult = null)
    {
        $this
            ->setGetProductPackageProductMatchingFileDataResult($getProductPackageProductMatchingFileDataResult);
    }
    /**
     * Get GetProductPackageProductMatchingFileDataResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountProductMatchingFileMessage|null
     */
    public function getGetProductPackageProductMatchingFileDataResult(): ?\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountProductMatchingFileMessage
    {
        return isset($this->GetProductPackageProductMatchingFileDataResult) ? $this->GetProductPackageProductMatchingFileDataResult : null;
    }
    /**
     * Set GetProductPackageProductMatchingFileDataResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountProductMatchingFileMessage $getProductPackageProductMatchingFileDataResult
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountGetProductPackageProductMatchingFileDataResponse
     */
    public function setGetProductPackageProductMatchingFileDataResult(?\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountProductMatchingFileMessage $getProductPackageProductMatchingFileDataResult = null): self
    {
        if (is_null($getProductPackageProductMatchingFileDataResult) || (is_array($getProductPackageProductMatchingFileDataResult) && empty($getProductPackageProductMatchingFileDataResult))) {
            unset($this->GetProductPackageProductMatchingFileDataResult);
        } else {
            $this->GetProductPackageProductMatchingFileDataResult = $getProductPackageProductMatchingFileDataResult;
        }
        
        return $this;
    }
}
