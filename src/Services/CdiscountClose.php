<?php

namespace SengentoBV\CdiscountMarketplaceSdk\Services;

use \WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Close Services
 * @package Cdiscount
 * @subpackage Services
 */
class CdiscountClose extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named CloseDiscussionList
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountCloseDiscussionList $parameters
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountCloseDiscussionListResponse|bool
     */
    public function CloseDiscussionList(\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountCloseDiscussionList $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->CloseDiscussionList($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountCloseDiscussionListResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
