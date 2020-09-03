<?php

namespace SengentoBV\CdiscountMarketplaceSdk\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SubmitProductPackage Structs
 * @package Cdiscount
 * @subpackage Structs
 */
class CdiscountSubmitProductPackage extends AbstractStructBase
{
    /**
     * The headerMessage
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountHeaderMessage
     */
    public $headerMessage;
    /**
     * The productPackageRequest
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountProductPackageRequest
     */
    public $productPackageRequest;
    /**
     * Constructor method for SubmitProductPackage
     * @uses CdiscountSubmitProductPackage::setHeaderMessage()
     * @uses CdiscountSubmitProductPackage::setProductPackageRequest()
     * @param \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountHeaderMessage $headerMessage
     * @param \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountProductPackageRequest $productPackageRequest
     */
    public function __construct(\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountHeaderMessage $headerMessage = null, \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountProductPackageRequest $productPackageRequest = null)
    {
        $this
            ->setHeaderMessage($headerMessage)
            ->setProductPackageRequest($productPackageRequest);
    }
    /**
     * Get headerMessage value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountHeaderMessage|null
     */
    public function getHeaderMessage()
    {
        return isset($this->headerMessage) ? $this->headerMessage : null;
    }
    /**
     * Set headerMessage value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountHeaderMessage $headerMessage
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountSubmitProductPackage
     */
    public function setHeaderMessage(\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountHeaderMessage $headerMessage = null)
    {
        if (is_null($headerMessage) || (is_array($headerMessage) && empty($headerMessage))) {
            unset($this->headerMessage);
        } else {
            $this->headerMessage = $headerMessage;
        }
        return $this;
    }
    /**
     * Get productPackageRequest value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountProductPackageRequest|null
     */
    public function getProductPackageRequest()
    {
        return isset($this->productPackageRequest) ? $this->productPackageRequest : null;
    }
    /**
     * Set productPackageRequest value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountProductPackageRequest $productPackageRequest
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountSubmitProductPackage
     */
    public function setProductPackageRequest(\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountProductPackageRequest $productPackageRequest = null)
    {
        if (is_null($productPackageRequest) || (is_array($productPackageRequest) && empty($productPackageRequest))) {
            unset($this->productPackageRequest);
        } else {
            $this->productPackageRequest = $productPackageRequest;
        }
        return $this;
    }
}
