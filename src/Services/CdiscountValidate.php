<?php

namespace SengentoBV\CdiscountMarketplaceSdk\Services;

use \WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Validate Services
 * @package Cdiscount
 * @subpackage Services
 */
class CdiscountValidate extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named ValidateOrderList
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountValidateOrderList $parameters
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountValidateOrderListResponse|bool
     */
    public function ValidateOrderList(\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountValidateOrderList $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->ValidateOrderList($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountValidateOrderListResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
