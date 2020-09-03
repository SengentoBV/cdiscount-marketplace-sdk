<?php

namespace SengentoBV\CdiscountMarketplaceSdk\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CompetingOfferMessage Structs
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:CompetingOfferMessage
 * @package Cdiscount
 * @subpackage Structs
 */
class CdiscountCompetingOfferMessage extends CdiscountServiceBaseAPIMessage
{
    /**
     * The CompetingOffers
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfCompetingOffer
     */
    public $CompetingOffers;
    /**
     * The Quota
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountQuota
     */
    public $Quota;
    /**
     * Constructor method for CompetingOfferMessage
     * @uses CdiscountCompetingOfferMessage::setCompetingOffers()
     * @uses CdiscountCompetingOfferMessage::setQuota()
     * @param \SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfCompetingOffer $competingOffers
     * @param \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountQuota $quota
     */
    public function __construct(\SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfCompetingOffer $competingOffers = null, \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountQuota $quota = null)
    {
        $this
            ->setCompetingOffers($competingOffers)
            ->setQuota($quota);
    }
    /**
     * Get CompetingOffers value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfCompetingOffer|null
     */
    public function getCompetingOffers()
    {
        return isset($this->CompetingOffers) ? $this->CompetingOffers : null;
    }
    /**
     * Set CompetingOffers value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfCompetingOffer $competingOffers
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountCompetingOfferMessage
     */
    public function setCompetingOffers(\SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfCompetingOffer $competingOffers = null)
    {
        if (is_null($competingOffers) || (is_array($competingOffers) && empty($competingOffers))) {
            unset($this->CompetingOffers);
        } else {
            $this->CompetingOffers = $competingOffers;
        }
        return $this;
    }
    /**
     * Get Quota value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountQuota|null
     */
    public function getQuota()
    {
        return isset($this->Quota) ? $this->Quota : null;
    }
    /**
     * Set Quota value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountQuota $quota
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountCompetingOfferMessage
     */
    public function setQuota(\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountQuota $quota = null)
    {
        if (is_null($quota) || (is_array($quota) && empty($quota))) {
            unset($this->Quota);
        } else {
            $this->Quota = $quota;
        }
        return $this;
    }
}
