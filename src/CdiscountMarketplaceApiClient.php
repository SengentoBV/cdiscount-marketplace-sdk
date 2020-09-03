<?php


namespace SengentoBV\CdiscountMarketplaceSdk;

class CdiscountMarketplaceApiClient
{
    /**
     * Option key to define WSDL service location override
     * @var string
     */
    const CLIENT_SERVICE_URL = 'client_service_url';

    public function __construct() {

    }

    public function getOptions() : array
    {
        return array(
            \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_URL => 'https://wsvc.cdiscount.com/MarketplaceAPIService.svc?singleWsdl',
            \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_CLASSMAP => CdiscountClassMap::get(),

            CdiscountMarketplaceApiClient::CLIENT_SERVICE_URL => 'https://wsvc.cdiscount.com/MarketplaceAPIService.svc',
        );
    }

    public function
}