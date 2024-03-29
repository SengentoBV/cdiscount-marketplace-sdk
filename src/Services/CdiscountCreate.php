<?php

declare(strict_types=1);

namespace SengentoBV\CdiscountMarketplaceSdk\Services;

use SoapFault;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Create Services
 * @package Cdiscount
 * @subpackage Services
 */
class CdiscountCreate extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named CreateRefundVoucherAfterShipment
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountCreateRefundVoucherAfterShipment $parameters
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountCreateRefundVoucherAfterShipmentResponse|bool
     */
    public function CreateRefundVoucherAfterShipment(\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountCreateRefundVoucherAfterShipment $parameters)
    {
        try {
            $this->setResult($resultCreateRefundVoucherAfterShipment = $this->getSoapClient()->__soapCall('CreateRefundVoucherAfterShipment', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultCreateRefundVoucherAfterShipment;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named CreateRefundVoucher
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountCreateRefundVoucher $parameters
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountCreateRefundVoucherResponse|bool
     */
    public function CreateRefundVoucher(\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountCreateRefundVoucher $parameters)
    {
        try {
            $this->setResult($resultCreateRefundVoucher = $this->getSoapClient()->__soapCall('CreateRefundVoucher', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultCreateRefundVoucher;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named CreateExternalOrder
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountCreateExternalOrder $parameters
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountCreateExternalOrderResponse|bool
     */
    public function CreateExternalOrder(\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountCreateExternalOrder $parameters)
    {
        try {
            $this->setResult($resultCreateExternalOrder = $this->getSoapClient()->__soapCall('CreateExternalOrder', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultCreateExternalOrder;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountCreateExternalOrderResponse|\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountCreateRefundVoucherAfterShipmentResponse|\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountCreateRefundVoucherResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
