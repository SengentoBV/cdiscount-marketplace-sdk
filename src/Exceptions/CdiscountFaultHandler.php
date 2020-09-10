<?php

namespace SengentoBV\CdiscountMarketplaceSdk\Exceptions;

use SengentoBV\CdiscountMarketplaceSdk\ServiceClients\AbstractCdiscountServiceClient;
use SoapFault;

class CdiscountFaultHandler
{
    /**
     * Attempt to recover from the thrown fault.
     *
     * You can throw your own fault if needed (if not castable to CdiscountException, your exception will be wrapped)
     *
     * @param AbstractCdiscountServiceClient $serviceClient
     * @param string $function Function name
     * @param SoapFault $fault Soap fault thrown.
     * @return bool true to indicate a recovery was attempted and the call should be retried; false to throw the original exception.
     */
    public function tryRecover(AbstractCdiscountServiceClient $serviceClient, string $function, SoapFault $fault) : bool
    {
        return false;
    }
}