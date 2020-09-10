<?php


namespace SengentoBV\CdiscountMarketplaceSdk\ApiClients;


use SengentoBV\CdiscountMarketplaceSdk\CdiscountMarketplaceApiClient;
use SengentoBV\CdiscountMarketplaceSdk\Exceptions\CdiscountSoapFaultException;
use SengentoBV\CdiscountMarketplaceSdk\ServiceClients\CdiscountGetServiceClient;
use SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountGetOfferListResponse;
use SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountOfferFilter;

class CdiscountOfferApiClient extends AbstractCdiscountApiClient
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
     * @param CdiscountOfferFilter $filter
     * @return CdiscountGetOfferListResponse
     * @throws CdiscountSoapFaultException
     */
    public function getOfferList(CdiscountOfferFilter $filter) : CdiscountGetOfferListResponse
    {
        return $this->getGetServiceClient()->getOfferList($filter);
    }

    private function getGetServiceClient() : CdiscountGetServiceClient {

        if (!isset($this->serviceClients[CdiscountGetServiceClient::class])) {
            $this->serviceClients[CdiscountGetServiceClient::class] = new CdiscountGetServiceClient($this->apiClient);
        }

        return $this->serviceClients[CdiscountGetServiceClient::class];
    }
}