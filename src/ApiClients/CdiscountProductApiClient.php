<?php

namespace SengentoBV\CdiscountMarketplaceSdk\ApiClients;

use SengentoBV\CdiscountMarketplaceSdk\Arrays\CdiscountArrayOfstring;
use SengentoBV\CdiscountMarketplaceSdk\CdiscountMarketplaceApiClient;
use SengentoBV\CdiscountMarketplaceSdk\Exceptions\CdiscountException;
use SengentoBV\CdiscountMarketplaceSdk\Exceptions\CdiscountSoapFaultException;
use SengentoBV\CdiscountMarketplaceSdk\ServiceClients\CdiscountGetServiceClient;
use SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountGetOrderListResponse;
use SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountGetProductListByIdentifierResponse;
use SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountIdentifierRequest;

class CdiscountProductApiClient extends AbstractCdiscountApiClient
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
     * @param CdiscountIdentifierRequest $input
     * @return CdiscountGetProductListByIdentifierResponse
     * @throws CdiscountSoapFaultException
     * @throws CdiscountException
     */
    public function getProductListByIdentifier(CdiscountIdentifierRequest $input) : CdiscountGetProductListByIdentifierResponse
    {
        return $this->getGetServiceClient()->getProductListByIdentifier($input);
    }

    /**
     * @param string[] $eanIdentifiers
     * @return CdiscountGetProductListByIdentifierResponse
     * @throws CdiscountSoapFaultException
     * @throws CdiscountException
     */
    public function getProductListByEanIdentifiers(array $eanIdentifiers) : CdiscountGetProductListByIdentifierResponse
    {
        return $this->getGetServiceClient()->getProductListByIdentifier(new CdiscountIdentifierRequest('EAN', new CdiscountArrayOfstring($eanIdentifiers)));
    }

    /**
     * @param string $eanIdentifier
     * @return CdiscountGetProductListByIdentifierResponse
     * @throws CdiscountSoapFaultException
     * @throws CdiscountException
     */
    public function getProductListByEanIdentifier(string $eanIdentifier) : CdiscountGetProductListByIdentifierResponse
    {
        return $this->getProductListByEanIdentifiers([$eanIdentifier]);
    }

    private function getGetServiceClient() : CdiscountGetServiceClient {

        if (!isset($this->serviceClients[CdiscountGetServiceClient::class])) {
            $this->serviceClients[CdiscountGetServiceClient::class] = new CdiscountGetServiceClient($this->apiClient);
        }

        return $this->serviceClients[CdiscountGetServiceClient::class];
    }
}