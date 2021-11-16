<?php

declare(strict_types=1);

namespace SengentoBV\CdiscountMarketplaceSdk\Structs;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetProductPackageSubmissionResult Structs
 * @package Cdiscount
 * @subpackage Structs
 */
class CdiscountGetProductPackageSubmissionResult extends AbstractStructBase
{
    /**
     * The headerMessage
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountHeaderMessage|null
     */
    protected ?\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountHeaderMessage $headerMessage = null;
    /**
     * The productPackageFilter
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountPackageFilter|null
     */
    protected ?\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountPackageFilter $productPackageFilter = null;
    /**
     * Constructor method for GetProductPackageSubmissionResult
     * @uses CdiscountGetProductPackageSubmissionResult::setHeaderMessage()
     * @uses CdiscountGetProductPackageSubmissionResult::setProductPackageFilter()
     * @param \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountHeaderMessage $headerMessage
     * @param \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountPackageFilter $productPackageFilter
     */
    public function __construct(?\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountHeaderMessage $headerMessage = null, ?\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountPackageFilter $productPackageFilter = null)
    {
        $this
            ->setHeaderMessage($headerMessage)
            ->setProductPackageFilter($productPackageFilter);
    }
    /**
     * Get headerMessage value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountHeaderMessage|null
     */
    public function getHeaderMessage(): ?\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountHeaderMessage
    {
        return isset($this->headerMessage) ? $this->headerMessage : null;
    }
    /**
     * Set headerMessage value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountHeaderMessage $headerMessage
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountGetProductPackageSubmissionResult
     */
    public function setHeaderMessage(?\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountHeaderMessage $headerMessage = null): self
    {
        if (is_null($headerMessage) || (is_array($headerMessage) && empty($headerMessage))) {
            unset($this->headerMessage);
        } else {
            $this->headerMessage = $headerMessage;
        }
        
        return $this;
    }
    /**
     * Get productPackageFilter value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountPackageFilter|null
     */
    public function getProductPackageFilter(): ?\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountPackageFilter
    {
        return isset($this->productPackageFilter) ? $this->productPackageFilter : null;
    }
    /**
     * Set productPackageFilter value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountPackageFilter $productPackageFilter
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountGetProductPackageSubmissionResult
     */
    public function setProductPackageFilter(?\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountPackageFilter $productPackageFilter = null): self
    {
        if (is_null($productPackageFilter) || (is_array($productPackageFilter) && empty($productPackageFilter))) {
            unset($this->productPackageFilter);
        } else {
            $this->productPackageFilter = $productPackageFilter;
        }
        
        return $this;
    }
}
