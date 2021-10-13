<?php

namespace SengentoBV\CdiscountMarketplaceSdk\ApiClients;

use SengentoBV\CdiscountMarketplaceSdk\CdiscountMarketplaceApiClient;
use SengentoBV\CdiscountMarketplaceSdk\Exceptions\CdiscountException;
use SengentoBV\CdiscountMarketplaceSdk\Exceptions\CdiscountSoapFaultException;
use SengentoBV\CdiscountMarketplaceSdk\ServiceClients\CdiscountGetServiceClient;
use SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountGetGlobalConfigurationResponse;
use SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountGetOrderListResponse;
use SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountOrderFilter;

class CdiscountOrderApiClient extends AbstractCdiscountApiClient
{
    /**
     * @var CdiscountMarketplaceApiClient
     */
    private CdiscountMarketplaceApiClient $apiClient;

    private array $serviceClients = array();

    public function __construct(CdiscountMarketplaceApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
    }

    /**
     * @param CdiscountOrderFilter $filter
     * @return CdiscountGetOrderListResponse
     * @throws CdiscountSoapFaultException
     * @throws CdiscountException
     */
    public function getOrderList(CdiscountOrderFilter $filter): CdiscountGetOrderListResponse
    {
        return $this->getGetServiceClient()->getOrderList($filter);
    }

    /**
     * @return CdiscountGetGlobalConfigurationResponse
     * @throws CdiscountSoapFaultException
     * @throws CdiscountException
     */
    public function getGlobalConfiguration(): CdiscountGetGlobalConfigurationResponse
    {
        return $this->getGetServiceClient()->getGlobalConfiguration();
    }

    private function getGetServiceClient(): CdiscountGetServiceClient
    {

        if (!isset($this->serviceClients[CdiscountGetServiceClient::class])) {
            $this->serviceClients[CdiscountGetServiceClient::class] = new CdiscountGetServiceClient($this->apiClient);
        }

        return $this->serviceClients[CdiscountGetServiceClient::class];
    }
}