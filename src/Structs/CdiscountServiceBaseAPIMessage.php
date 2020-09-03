<?php

namespace SengentoBV\CdiscountMarketplaceSdk\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ServiceBaseAPIMessage Structs
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ServiceBaseAPIMessage
 * @package Cdiscount
 * @subpackage Structs
 */
class CdiscountServiceBaseAPIMessage extends CdiscountServiceMessage
{
    /**
     * The ErrorList
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfError
     */
    public $ErrorList;
    /**
     * The SellerLogin
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $SellerLogin;
    /**
     * The TokenId
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $TokenId;
    /**
     * Constructor method for ServiceBaseAPIMessage
     * @uses CdiscountServiceBaseAPIMessage::setErrorList()
     * @uses CdiscountServiceBaseAPIMessage::setSellerLogin()
     * @uses CdiscountServiceBaseAPIMessage::setTokenId()
     * @param \SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfError $errorList
     * @param string $sellerLogin
     * @param string $tokenId
     */
    public function __construct(\SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfError $errorList = null, $sellerLogin = null, $tokenId = null)
    {
        $this
            ->setErrorList($errorList)
            ->setSellerLogin($sellerLogin)
            ->setTokenId($tokenId);
    }
    /**
     * Get ErrorList value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfError|null
     */
    public function getErrorList()
    {
        return isset($this->ErrorList) ? $this->ErrorList : null;
    }
    /**
     * Set ErrorList value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfError $errorList
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountServiceBaseAPIMessage
     */
    public function setErrorList(\SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfError $errorList = null)
    {
        if (is_null($errorList) || (is_array($errorList) && empty($errorList))) {
            unset($this->ErrorList);
        } else {
            $this->ErrorList = $errorList;
        }
        return $this;
    }
    /**
     * Get SellerLogin value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getSellerLogin()
    {
        return isset($this->SellerLogin) ? $this->SellerLogin : null;
    }
    /**
     * Set SellerLogin value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $sellerLogin
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountServiceBaseAPIMessage
     */
    public function setSellerLogin($sellerLogin = null)
    {
        // validation for constraint: string
        if (!is_null($sellerLogin) && !is_string($sellerLogin)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($sellerLogin, true), gettype($sellerLogin)), __LINE__);
        }
        if (is_null($sellerLogin) || (is_array($sellerLogin) && empty($sellerLogin))) {
            unset($this->SellerLogin);
        } else {
            $this->SellerLogin = $sellerLogin;
        }
        return $this;
    }
    /**
     * Get TokenId value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getTokenId()
    {
        return isset($this->TokenId) ? $this->TokenId : null;
    }
    /**
     * Set TokenId value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $tokenId
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountServiceBaseAPIMessage
     */
    public function setTokenId($tokenId = null)
    {
        // validation for constraint: string
        if (!is_null($tokenId) && !is_string($tokenId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($tokenId, true), gettype($tokenId)), __LINE__);
        }
        if (is_null($tokenId) || (is_array($tokenId) && empty($tokenId))) {
            unset($this->TokenId);
        } else {
            $this->TokenId = $tokenId;
        }
        return $this;
    }
}
