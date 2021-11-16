<?php

declare(strict_types=1);

namespace SengentoBV\CdiscountMarketplaceSdk\Services;

use SoapFault;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

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
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountSubmitProductPackage $parameters
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountSubmitProductPackageResponse|bool
     */
    public function SubmitProductPackage(\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountSubmitProductPackage $parameters)
    {
        try {
            $this->setResult($resultSubmitProductPackage = $this->getSoapClient()->__soapCall('SubmitProductPackage', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultSubmitProductPackage;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named SubmitOfferPackage
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountSubmitOfferPackage $parameters
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountSubmitOfferPackageResponse|bool
     */
    public function SubmitOfferPackage(\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountSubmitOfferPackage $parameters)
    {
        try {
            $this->setResult($resultSubmitOfferPackage = $this->getSoapClient()->__soapCall('SubmitOfferPackage', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultSubmitOfferPackage;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named SubmitRelaysFile
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountSubmitRelaysFile $parameters
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountSubmitRelaysFileResponse|bool
     */
    public function SubmitRelaysFile(\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountSubmitRelaysFile $parameters)
    {
        try {
            $this->setResult($resultSubmitRelaysFile = $this->getSoapClient()->__soapCall('SubmitRelaysFile', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultSubmitRelaysFile;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named SubmitFulfilmentSupplyOrder
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountSubmitFulfilmentSupplyOrder $parameters
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountSubmitFulfilmentSupplyOrderResponse|bool
     */
    public function SubmitFulfilmentSupplyOrder(\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountSubmitFulfilmentSupplyOrder $parameters)
    {
        try {
            $this->setResult($resultSubmitFulfilmentSupplyOrder = $this->getSoapClient()->__soapCall('SubmitFulfilmentSupplyOrder', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultSubmitFulfilmentSupplyOrder;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named
     * SubmitFulfilmentOnDemandSupplyOrder
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountSubmitFulfilmentOnDemandSupplyOrder $parameters
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountSubmitFulfilmentOnDemandSupplyOrderResponse|bool
     */
    public function SubmitFulfilmentOnDemandSupplyOrder(\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountSubmitFulfilmentOnDemandSupplyOrder $parameters)
    {
        try {
            $this->setResult($resultSubmitFulfilmentOnDemandSupplyOrder = $this->getSoapClient()->__soapCall('SubmitFulfilmentOnDemandSupplyOrder', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultSubmitFulfilmentOnDemandSupplyOrder;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named SubmitOfferStateAction
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountSubmitOfferStateAction $parameters
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountSubmitOfferStateActionResponse|bool
     */
    public function SubmitOfferStateAction(\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountSubmitOfferStateAction $parameters)
    {
        try {
            $this->setResult($resultSubmitOfferStateAction = $this->getSoapClient()->__soapCall('SubmitOfferStateAction', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultSubmitOfferStateAction;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named SubmitFulfilmentActivation
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountSubmitFulfilmentActivation $parameters
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountSubmitFulfilmentActivationResponse|bool
     */
    public function SubmitFulfilmentActivation(\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountSubmitFulfilmentActivation $parameters)
    {
        try {
            $this->setResult($resultSubmitFulfilmentActivation = $this->getSoapClient()->__soapCall('SubmitFulfilmentActivation', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultSubmitFulfilmentActivation;
        } catch (SoapFault $soapFault) {
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
