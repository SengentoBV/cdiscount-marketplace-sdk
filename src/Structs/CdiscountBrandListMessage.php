<?php

declare(strict_types=1);

namespace SengentoBV\CdiscountMarketplaceSdk\Structs;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BrandListMessage Structs
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:BrandListMessage
 * @package Cdiscount
 * @subpackage Structs
 */
class CdiscountBrandListMessage extends CdiscountServiceBaseAPIMessage
{
    /**
     * The BrandList
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfBrand|null
     */
    protected ?\SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfBrand $BrandList = null;
    /**
     * Constructor method for BrandListMessage
     * @uses CdiscountBrandListMessage::setBrandList()
     * @param \SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfBrand $brandList
     */
    public function __construct(?\SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfBrand $brandList = null)
    {
        $this
            ->setBrandList($brandList);
    }
    /**
     * Get BrandList value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfBrand|null
     */
    public function getBrandList(): ?\SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfBrand
    {
        return isset($this->BrandList) ? $this->BrandList : null;
    }
    /**
     * Set BrandList value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfBrand $brandList
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountBrandListMessage
     */
    public function setBrandList(?\SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfBrand $brandList = null): self
    {
        if (is_null($brandList) || (is_array($brandList) && empty($brandList))) {
            unset($this->BrandList);
        } else {
            $this->BrandList = $brandList;
        }
        
        return $this;
    }
}
