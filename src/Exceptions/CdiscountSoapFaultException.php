<?php

namespace SengentoBV\CdiscountMarketplaceSdk\Exceptions;

class CdiscountSoapFaultException extends CdiscountException
{
    public function getSource() : \SoapFault
    {
        return $this->getPrevious();
    }

    public function __construct(\SoapFault $soapFault)
    {
        parent::__construct($soapFault);
    }
}