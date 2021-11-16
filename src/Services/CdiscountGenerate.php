<?php

declare(strict_types=1);

namespace SengentoBV\CdiscountMarketplaceSdk\Services;

use SoapFault;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

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
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountGenerateDiscussionMailGuid $parameters
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountGenerateDiscussionMailGuidResponse|bool
     */
    public function GenerateDiscussionMailGuid(\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountGenerateDiscussionMailGuid $parameters)
    {
        try {
            $this->setResult($resultGenerateDiscussionMailGuid = $this->getSoapClient()->__soapCall('GenerateDiscussionMailGuid', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultGenerateDiscussionMailGuid;
        } catch (SoapFault $soapFault) {
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
