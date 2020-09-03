<?php

namespace SengentoBV\CdiscountMarketplaceSdk\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ModelDefinition Structs
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ModelDefinition
 * @package Cdiscount
 * @subpackage Structs
 */
class CdiscountModelDefinition extends AbstractStructBase
{
    /**
     * The ListProperties
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfKeyValueOfstringArrayOfstringty7Ep6D1
     */
    public $ListProperties;
    /**
     * The MandatoryModelProperties
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfstring
     */
    public $MandatoryModelProperties;
    /**
     * The MultipleFreeTextProperties
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfKeyValueOfstringArrayOfstringty7Ep6D1
     */
    public $MultipleFreeTextProperties;
    /**
     * The SingleFreeTextProperties
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfKeyValueOfstringArrayOfstringty7Ep6D1
     */
    public $SingleFreeTextProperties;
    /**
     * Constructor method for ModelDefinition
     * @uses CdiscountModelDefinition::setListProperties()
     * @uses CdiscountModelDefinition::setMandatoryModelProperties()
     * @uses CdiscountModelDefinition::setMultipleFreeTextProperties()
     * @uses CdiscountModelDefinition::setSingleFreeTextProperties()
     * @param \SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfKeyValueOfstringArrayOfstringty7Ep6D1 $listProperties
     * @param \SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfstring $mandatoryModelProperties
     * @param \SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfKeyValueOfstringArrayOfstringty7Ep6D1 $multipleFreeTextProperties
     * @param \SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfKeyValueOfstringArrayOfstringty7Ep6D1 $singleFreeTextProperties
     */
    public function __construct(\SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfKeyValueOfstringArrayOfstringty7Ep6D1 $listProperties = null, \SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfstring $mandatoryModelProperties = null, \SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfKeyValueOfstringArrayOfstringty7Ep6D1 $multipleFreeTextProperties = null, \SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfKeyValueOfstringArrayOfstringty7Ep6D1 $singleFreeTextProperties = null)
    {
        $this
            ->setListProperties($listProperties)
            ->setMandatoryModelProperties($mandatoryModelProperties)
            ->setMultipleFreeTextProperties($multipleFreeTextProperties)
            ->setSingleFreeTextProperties($singleFreeTextProperties);
    }
    /**
     * Get ListProperties value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfKeyValueOfstringArrayOfstringty7Ep6D1|null
     */
    public function getListProperties()
    {
        return isset($this->ListProperties) ? $this->ListProperties : null;
    }
    /**
     * Set ListProperties value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfKeyValueOfstringArrayOfstringty7Ep6D1 $listProperties
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountModelDefinition
     */
    public function setListProperties(\SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfKeyValueOfstringArrayOfstringty7Ep6D1 $listProperties = null)
    {
        if (is_null($listProperties) || (is_array($listProperties) && empty($listProperties))) {
            unset($this->ListProperties);
        } else {
            $this->ListProperties = $listProperties;
        }
        return $this;
    }
    /**
     * Get MandatoryModelProperties value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfstring|null
     */
    public function getMandatoryModelProperties()
    {
        return isset($this->MandatoryModelProperties) ? $this->MandatoryModelProperties : null;
    }
    /**
     * Set MandatoryModelProperties value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfstring $mandatoryModelProperties
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountModelDefinition
     */
    public function setMandatoryModelProperties(\SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfstring $mandatoryModelProperties = null)
    {
        if (is_null($mandatoryModelProperties) || (is_array($mandatoryModelProperties) && empty($mandatoryModelProperties))) {
            unset($this->MandatoryModelProperties);
        } else {
            $this->MandatoryModelProperties = $mandatoryModelProperties;
        }
        return $this;
    }
    /**
     * Get MultipleFreeTextProperties value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfKeyValueOfstringArrayOfstringty7Ep6D1|null
     */
    public function getMultipleFreeTextProperties()
    {
        return isset($this->MultipleFreeTextProperties) ? $this->MultipleFreeTextProperties : null;
    }
    /**
     * Set MultipleFreeTextProperties value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfKeyValueOfstringArrayOfstringty7Ep6D1 $multipleFreeTextProperties
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountModelDefinition
     */
    public function setMultipleFreeTextProperties(\SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfKeyValueOfstringArrayOfstringty7Ep6D1 $multipleFreeTextProperties = null)
    {
        if (is_null($multipleFreeTextProperties) || (is_array($multipleFreeTextProperties) && empty($multipleFreeTextProperties))) {
            unset($this->MultipleFreeTextProperties);
        } else {
            $this->MultipleFreeTextProperties = $multipleFreeTextProperties;
        }
        return $this;
    }
    /**
     * Get SingleFreeTextProperties value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfKeyValueOfstringArrayOfstringty7Ep6D1|null
     */
    public function getSingleFreeTextProperties()
    {
        return isset($this->SingleFreeTextProperties) ? $this->SingleFreeTextProperties : null;
    }
    /**
     * Set SingleFreeTextProperties value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfKeyValueOfstringArrayOfstringty7Ep6D1 $singleFreeTextProperties
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountModelDefinition
     */
    public function setSingleFreeTextProperties(\SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfKeyValueOfstringArrayOfstringty7Ep6D1 $singleFreeTextProperties = null)
    {
        if (is_null($singleFreeTextProperties) || (is_array($singleFreeTextProperties) && empty($singleFreeTextProperties))) {
            unset($this->SingleFreeTextProperties);
        } else {
            $this->SingleFreeTextProperties = $singleFreeTextProperties;
        }
        return $this;
    }
}
