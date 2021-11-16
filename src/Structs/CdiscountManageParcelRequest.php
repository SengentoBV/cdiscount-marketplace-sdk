<?php

declare(strict_types=1);

namespace SengentoBV\CdiscountMarketplaceSdk\Structs;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ManageParcelRequest Structs
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ManageParcelRequest
 * @package Cdiscount
 * @subpackage Structs
 */
class CdiscountManageParcelRequest extends AbstractStructBase
{
    /**
     * The ParcelActionsList
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfParcelInfos|null
     */
    protected ?\SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfParcelInfos $ParcelActionsList = null;
    /**
     * The ScopusId
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $ScopusId = null;
    /**
     * Constructor method for ManageParcelRequest
     * @uses CdiscountManageParcelRequest::setParcelActionsList()
     * @uses CdiscountManageParcelRequest::setScopusId()
     * @param \SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfParcelInfos $parcelActionsList
     * @param string $scopusId
     */
    public function __construct(?\SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfParcelInfos $parcelActionsList = null, ?string $scopusId = null)
    {
        $this
            ->setParcelActionsList($parcelActionsList)
            ->setScopusId($scopusId);
    }
    /**
     * Get ParcelActionsList value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfParcelInfos|null
     */
    public function getParcelActionsList(): ?\SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfParcelInfos
    {
        return isset($this->ParcelActionsList) ? $this->ParcelActionsList : null;
    }
    /**
     * Set ParcelActionsList value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfParcelInfos $parcelActionsList
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountManageParcelRequest
     */
    public function setParcelActionsList(?\SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfParcelInfos $parcelActionsList = null): self
    {
        if (is_null($parcelActionsList) || (is_array($parcelActionsList) && empty($parcelActionsList))) {
            unset($this->ParcelActionsList);
        } else {
            $this->ParcelActionsList = $parcelActionsList;
        }
        
        return $this;
    }
    /**
     * Get ScopusId value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getScopusId(): ?string
    {
        return isset($this->ScopusId) ? $this->ScopusId : null;
    }
    /**
     * Set ScopusId value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $scopusId
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountManageParcelRequest
     */
    public function setScopusId(?string $scopusId = null): self
    {
        // validation for constraint: string
        if (!is_null($scopusId) && !is_string($scopusId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($scopusId, true), gettype($scopusId)), __LINE__);
        }
        if (is_null($scopusId) || (is_array($scopusId) && empty($scopusId))) {
            unset($this->ScopusId);
        } else {
            $this->ScopusId = $scopusId;
        }
        
        return $this;
    }
}
