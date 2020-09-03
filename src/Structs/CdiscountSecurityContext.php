<?php

namespace SengentoBV\CdiscountMarketplaceSdk\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SecurityContext Structs
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:SecurityContext
 * @package Cdiscount
 * @subpackage Structs
 */
class CdiscountSecurityContext extends AbstractStructBase
{
    /**
     * The DomainRightsList
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var \SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfDomainRights
     */
    public $DomainRightsList;
    /**
     * The IssuerID
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $IssuerID;
    /**
     * The SessionID
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $SessionID;
    /**
     * The SubjectLocality
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountSubjectLocality
     */
    public $SubjectLocality;
    /**
     * The TokenId
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $TokenId;
    /**
     * The UserName
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $UserName;
    /**
     * Constructor method for SecurityContext
     * @uses CdiscountSecurityContext::setDomainRightsList()
     * @uses CdiscountSecurityContext::setIssuerID()
     * @uses CdiscountSecurityContext::setSessionID()
     * @uses CdiscountSecurityContext::setSubjectLocality()
     * @uses CdiscountSecurityContext::setTokenId()
     * @uses CdiscountSecurityContext::setUserName()
     * @param \SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfDomainRights $domainRightsList
     * @param string $issuerID
     * @param string $sessionID
     * @param \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountSubjectLocality $subjectLocality
     * @param string $tokenId
     * @param string $userName
     */
    public function __construct(\SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfDomainRights $domainRightsList = null, $issuerID = null, $sessionID = null, \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountSubjectLocality $subjectLocality = null, $tokenId = null, $userName = null)
    {
        $this
            ->setDomainRightsList($domainRightsList)
            ->setIssuerID($issuerID)
            ->setSessionID($sessionID)
            ->setSubjectLocality($subjectLocality)
            ->setTokenId($tokenId)
            ->setUserName($userName);
    }
    /**
     * Get DomainRightsList value
     * @return \SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfDomainRights|null
     */
    public function getDomainRightsList()
    {
        return $this->DomainRightsList;
    }
    /**
     * Set DomainRightsList value
     * @param \SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfDomainRights $domainRightsList
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountSecurityContext
     */
    public function setDomainRightsList(\SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfDomainRights $domainRightsList = null)
    {
        $this->DomainRightsList = $domainRightsList;
        return $this;
    }
    /**
     * Get IssuerID value
     * @return string|null
     */
    public function getIssuerID()
    {
        return $this->IssuerID;
    }
    /**
     * Set IssuerID value
     * @param string $issuerID
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountSecurityContext
     */
    public function setIssuerID($issuerID = null)
    {
        // validation for constraint: string
        if (!is_null($issuerID) && !is_string($issuerID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($issuerID, true), gettype($issuerID)), __LINE__);
        }
        $this->IssuerID = $issuerID;
        return $this;
    }
    /**
     * Get SessionID value
     * @return string|null
     */
    public function getSessionID()
    {
        return $this->SessionID;
    }
    /**
     * Set SessionID value
     * @param string $sessionID
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountSecurityContext
     */
    public function setSessionID($sessionID = null)
    {
        // validation for constraint: string
        if (!is_null($sessionID) && !is_string($sessionID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($sessionID, true), gettype($sessionID)), __LINE__);
        }
        $this->SessionID = $sessionID;
        return $this;
    }
    /**
     * Get SubjectLocality value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountSubjectLocality|null
     */
    public function getSubjectLocality()
    {
        return isset($this->SubjectLocality) ? $this->SubjectLocality : null;
    }
    /**
     * Set SubjectLocality value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountSubjectLocality $subjectLocality
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountSecurityContext
     */
    public function setSubjectLocality(\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountSubjectLocality $subjectLocality = null)
    {
        if (is_null($subjectLocality) || (is_array($subjectLocality) && empty($subjectLocality))) {
            unset($this->SubjectLocality);
        } else {
            $this->SubjectLocality = $subjectLocality;
        }
        return $this;
    }
    /**
     * Get TokenId value
     * @return string|null
     */
    public function getTokenId()
    {
        return $this->TokenId;
    }
    /**
     * Set TokenId value
     * @param string $tokenId
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountSecurityContext
     */
    public function setTokenId($tokenId = null)
    {
        // validation for constraint: string
        if (!is_null($tokenId) && !is_string($tokenId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($tokenId, true), gettype($tokenId)), __LINE__);
        }
        $this->TokenId = $tokenId;
        return $this;
    }
    /**
     * Get UserName value
     * @return string|null
     */
    public function getUserName()
    {
        return $this->UserName;
    }
    /**
     * Set UserName value
     * @param string $userName
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountSecurityContext
     */
    public function setUserName($userName = null)
    {
        // validation for constraint: string
        if (!is_null($userName) && !is_string($userName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($userName, true), gettype($userName)), __LINE__);
        }
        $this->UserName = $userName;
        return $this;
    }
}
