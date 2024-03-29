<?php

declare(strict_types=1);

namespace SengentoBV\CdiscountMarketplaceSdk\Services;

use SoapFault;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Manage Services
 * @package Cdiscount
 * @subpackage Services
 */
class CdiscountManage extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named ManageParcel
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountManageParcel $parameters
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountManageParcelResponse|bool
     */
    public function ManageParcel(\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountManageParcel $parameters)
    {
        try {
            $this->setResult($resultManageParcel = $this->getSoapClient()->__soapCall('ManageParcel', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultManageParcel;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountManageParcelResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
