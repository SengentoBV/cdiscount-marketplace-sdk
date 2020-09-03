<?php

namespace SengentoBV\CdiscountMarketplaceSdk\Services;

use \WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Submit Services
 * @package Cdiscount
 * @subpackage Services
 */
class CdiscountSubmit extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named SubmitProductPackage
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountSubmitProductPackage $parameters
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountSubmitProductPackageResponse|bool
     */
    public function SubmitProductPackage(\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountSubmitProductPackage $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->SubmitProductPackage($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named SubmitOfferPackage
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountSubmitOfferPackage $parameters
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountSubmitOfferPackageResponse|bool
     */
    public function SubmitOfferPackage(\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountSubmitOfferPackage $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->SubmitOfferPackage($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named SubmitRelaysFile
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountSubmitRelaysFile $parameters
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountSubmitRelaysFileResponse|bool
     */
    public function SubmitRelaysFile(\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountSubmitRelaysFile $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->SubmitRelaysFile($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named SubmitFulfilmentSupplyOrder
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountSubmitFulfilmentSupplyOrder $parameters
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountSubmitFulfilmentSupplyOrderResponse|bool
     */
    public function SubmitFulfilmentSupplyOrder(\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountSubmitFulfilmentSupplyOrder $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->SubmitFulfilmentSupplyOrder($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named
     * SubmitFulfilmentOnDemandSupplyOrder
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountSubmitFulfilmentOnDemandSupplyOrder $parameters
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountSubmitFulfilmentOnDemandSupplyOrderResponse|bool
     */
    public function SubmitFulfilmentOnDemandSupplyOrder(\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountSubmitFulfilmentOnDemandSupplyOrder $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->SubmitFulfilmentOnDemandSupplyOrder($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named SubmitOfferStateAction
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountSubmitOfferStateAction $parameters
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountSubmitOfferStateActionResponse|bool
     */
    public function SubmitOfferStateAction(\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountSubmitOfferStateAction $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->SubmitOfferStateAction($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named SubmitFulfilmentActivation
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountSubmitFulfilmentActivation $parameters
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountSubmitFulfilmentActivationResponse|bool
     */
    public function SubmitFulfilmentActivation(\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountSubmitFulfilmentActivation $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->SubmitFulfilmentActivation($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountSubmitFulfilmentActivationResponse|\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountSubmitFulfilmentOnDemandSupplyOrderResponse|\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountSubmitFulfilmentSupplyOrderResponse|\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountSubmitOfferPackageResponse|\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountSubmitOfferStateActionResponse|\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountSubmitProductPackageResponse|\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountSubmitRelaysFileResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
