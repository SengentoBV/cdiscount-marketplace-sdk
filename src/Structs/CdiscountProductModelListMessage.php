<?php

declare(strict_types=1);

namespace SengentoBV\CdiscountMarketplaceSdk\Structs;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ProductModelListMessage Structs
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ProductModelListMessage
 * @package Cdiscount
 * @subpackage Structs
 */
class CdiscountProductModelListMessage extends CdiscountServiceBaseAPIMessage
{
    /**
     * The ModelList
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfProductModel|null
     */
    protected ?\SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfProductModel $ModelList = null;
    /**
     * Constructor method for ProductModelListMessage
     * @uses CdiscountProductModelListMessage::setModelList()
     * @param \SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfProductModel $modelList
     */
    public function __construct(?\SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfProductModel $modelList = null)
    {
        $this
            ->setModelList($modelList);
    }
    /**
     * Get ModelList value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfProductModel|null
     */
    public function getModelList(): ?\SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfProductModel
    {
        return isset($this->ModelList) ? $this->ModelList : null;
    }
    /**
     * Set ModelList value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfProductModel $modelList
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountProductModelListMessage
     */
    public function setModelList(?\SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfProductModel $modelList = null): self
    {
        if (is_null($modelList) || (is_array($modelList) && empty($modelList))) {
            unset($this->ModelList);
        } else {
            $this->ModelList = $modelList;
        }
        
        return $this;
    }
}
