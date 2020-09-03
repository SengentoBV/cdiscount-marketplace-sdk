<?php

namespace SengentoBV\CdiscountMarketplaceSdk\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ProductListByIdentifierMessage Structs
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ProductListByIdentifierMessage
 * @package Cdiscount
 * @subpackage Structs
 */
class CdiscountProductListByIdentifierMessage extends CdiscountServiceBaseAPIMessage
{
    /**
     * The ProductListByIdentifier
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfProductByIdentifier
     */
    public $ProductListByIdentifier;
    /**
     * Constructor method for ProductListByIdentifierMessage
     * @uses CdiscountProductListByIdentifierMessage::setProductListByIdentifier()
     * @param \SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfProductByIdentifier $productListByIdentifier
     */
    public function __construct(\SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfProductByIdentifier $productListByIdentifier = null)
    {
        $this
            ->setProductListByIdentifier($productListByIdentifier);
    }
    /**
     * Get ProductListByIdentifier value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfProductByIdentifier|null
     */
    public function getProductListByIdentifier()
    {
        return isset($this->ProductListByIdentifier) ? $this->ProductListByIdentifier : null;
    }
    /**
     * Set ProductListByIdentifier value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfProductByIdentifier $productListByIdentifier
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountProductListByIdentifierMessage
     */
    public function setProductListByIdentifier(\SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfProductByIdentifier $productListByIdentifier = null)
    {
        if (is_null($productListByIdentifier) || (is_array($productListByIdentifier) && empty($productListByIdentifier))) {
            unset($this->ProductListByIdentifier);
        } else {
            $this->ProductListByIdentifier = $productListByIdentifier;
        }
        return $this;
    }
}
