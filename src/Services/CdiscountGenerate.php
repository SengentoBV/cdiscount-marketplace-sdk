<?php

namespace SengentoBV\CdiscountMarketplaceSdk\Services;

use \WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Generate Services
 * @package Cdiscount
 * @subpackage Services
 */
class CdiscountGenerate extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named GenerateDiscussionMailGuid
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountGenerateDiscussionMailGuid $parameters
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountGenerateDiscussionMailGuidResponse|bool
     */
    public function GenerateDiscussionMailGuid(\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountGenerateDiscussionMailGuid $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->GenerateDiscussionMailGuid($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountGenerateDiscussionMailGuidResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
