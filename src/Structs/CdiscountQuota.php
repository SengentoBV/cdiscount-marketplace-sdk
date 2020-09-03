<?php

namespace SengentoBV\CdiscountMarketplaceSdk\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Quota Structs
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:Quota
 * @package Cdiscount
 * @subpackage Structs
 */
class CdiscountQuota extends AbstractStructBase
{
    /**
     * The DateResetQuota
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $DateResetQuota;
    /**
     * The QuotaAvailable
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $QuotaAvailable;
    /**
     * The QuotaTotal
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $QuotaTotal;
    /**
     * Constructor method for Quota
     * @uses CdiscountQuota::setDateResetQuota()
     * @uses CdiscountQuota::setQuotaAvailable()
     * @uses CdiscountQuota::setQuotaTotal()
     * @param string $dateResetQuota
     * @param int $quotaAvailable
     * @param int $quotaTotal
     */
    public function __construct($dateResetQuota = null, $quotaAvailable = null, $quotaTotal = null)
    {
        $this
            ->setDateResetQuota($dateResetQuota)
            ->setQuotaAvailable($quotaAvailable)
            ->setQuotaTotal($quotaTotal);
    }
    /**
     * Get DateResetQuota value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getDateResetQuota()
    {
        return isset($this->DateResetQuota) ? $this->DateResetQuota : null;
    }
    /**
     * Set DateResetQuota value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $dateResetQuota
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountQuota
     */
    public function setDateResetQuota($dateResetQuota = null)
    {
        // validation for constraint: string
        if (!is_null($dateResetQuota) && !is_string($dateResetQuota)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($dateResetQuota, true), gettype($dateResetQuota)), __LINE__);
        }
        if (is_null($dateResetQuota) || (is_array($dateResetQuota) && empty($dateResetQuota))) {
            unset($this->DateResetQuota);
        } else {
            $this->DateResetQuota = $dateResetQuota;
        }
        return $this;
    }
    /**
     * Get QuotaAvailable value
     * @return int|null
     */
    public function getQuotaAvailable()
    {
        return $this->QuotaAvailable;
    }
    /**
     * Set QuotaAvailable value
     * @param int $quotaAvailable
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountQuota
     */
    public function setQuotaAvailable($quotaAvailable = null)
    {
        // validation for constraint: int
        if (!is_null($quotaAvailable) && !(is_int($quotaAvailable) || ctype_digit($quotaAvailable))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($quotaAvailable, true), gettype($quotaAvailable)), __LINE__);
        }
        $this->QuotaAvailable = $quotaAvailable;
        return $this;
    }
    /**
     * Get QuotaTotal value
     * @return int|null
     */
    public function getQuotaTotal()
    {
        return $this->QuotaTotal;
    }
    /**
     * Set QuotaTotal value
     * @param int $quotaTotal
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountQuota
     */
    public function setQuotaTotal($quotaTotal = null)
    {
        // validation for constraint: int
        if (!is_null($quotaTotal) && !(is_int($quotaTotal) || ctype_digit($quotaTotal))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($quotaTotal, true), gettype($quotaTotal)), __LINE__);
        }
        $this->QuotaTotal = $quotaTotal;
        return $this;
    }
}
