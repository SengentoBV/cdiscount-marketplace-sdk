<?php


namespace SengentoBV\CdiscountMarketplaceSdk\ServiceClients;


use SengentoBV\CdiscountMarketplaceSdk\CdiscountMarketplaceApiClient;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

abstract class AbstractCdiscountServiceClient
{
    /**
     * @var CdiscountMarketplaceApiClient
     */
    private CdiscountMarketplaceApiClient $apiClient;

    public function __construct(CdiscountMarketplaceApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
    }

    public function getApiClient() : CdiscountMarketplaceApiClient
    {
        return $this->apiClient;
    }

    public abstract function getWsdlServiceClient() : AbstractSoapClientBase;
}
