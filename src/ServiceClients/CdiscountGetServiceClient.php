<?php

namespace SengentoBV\CdiscountMarketplaceSdk\ServiceClients;

use Exception;
use SengentoBV\CdiscountMarketplaceSdk\CdiscountMarketplaceApiClient;
use SengentoBV\CdiscountMarketplaceSdk\Exceptions\CdiscountException;
use SengentoBV\CdiscountMarketplaceSdk\Exceptions\CdiscountSoapFaultException;
use SengentoBV\CdiscountMarketplaceSdk\Services\CdiscountGet;
use SengentoBV\CdiscountMarketplaceSdk\Services\CdiscountServiceMap;
use SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountGetGlobalConfiguration;
use SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountGetGlobalConfigurationResponse;
use SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountGetOfferList;
use SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountGetOfferListResponse;
use SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountGetOrderList;
use SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountGetOrderListResponse;
use SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountGetProductListByIdentifier;
use SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountGetProductListByIdentifierResponse;
use SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountGlobalConfigurationMessage;
use SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountIdentifierRequest;
use SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountOfferFilter;
use SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountOrderFilter;
use SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountProductByIdentifier;
use SoapFault;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;
use WsdlToPhp\PackageBase\AbstractStructBase;

class CdiscountGetServiceClient extends AbstractCdiscountServiceClient
{
    public function __construct(CdiscountMarketplaceApiClient $apiClient)
    {

        parent::__construct($apiClient);
    }

    /**
     * @param CdiscountOfferFilter $filter
     * @return CdiscountGetOfferListResponse
     * @throws CdiscountSoapFaultException
     */
    public function getOfferList(CdiscountOfferFilter $filter): CdiscountGetOfferListResponse
    {
        $wsdlServiceClient = $this->getWsdlServiceClient();

        $request = new CdiscountGetOfferList(
            $this->getApiClient()->getSoapServiceHeader(),
            $filter
        );

        $result = $wsdlServiceClient->GetOfferList($request);

        if ($result === false) {
            throw new CdiscountSoapFaultException($wsdlServiceClient->getLastErrorForMethod(get_class($wsdlServiceClient) . '::GetOfferList'));
        }

        return $result;
    }

    /**
     * @param CdiscountOrderFilter $filter
     * @return CdiscountGetOrderListResponse
     * @throws CdiscountException
     * @throws CdiscountSoapFaultException
     */
    public function getOrderList(CdiscountOrderFilter $filter): CdiscountGetOrderListResponse
    {
        $request = new CdiscountGetOrderList(
            $this->getApiClient()->getSoapServiceHeader(),
            $filter
        );

        return $this->executeGetServiceRequest($request, 'GetOrderList', [$filter], __FUNCTION__);
    }

    /**
     * @param CdiscountIdentifierRequest $input
     * @return CdiscountGetProductListByIdentifierResponse
     * @throws CdiscountException
     * @throws CdiscountSoapFaultException
     */
    public function getProductListByIdentifier(CdiscountIdentifierRequest $input): CdiscountGetProductListByIdentifierResponse
    {
        $request = new CdiscountGetProductListByIdentifier(
            $this->getApiClient()->getSoapServiceHeader(),
            $input
        );

        return $this->executeGetServiceRequest($request, 'GetProductListByIdentifier', [$input], __FUNCTION__);
    }

    /**
     * @return CdiscountGetGlobalConfigurationResponse
     * @throws CdiscountException
     * @throws CdiscountSoapFaultException
     */
    public function getGlobalConfiguration(): CdiscountGetGlobalConfigurationResponse
    {
        $request = new CdiscountGetGlobalConfiguration(
            $this->getApiClient()->getSoapServiceHeader()
        );

        return $this->executeGetServiceRequest($request, 'GetGlobalConfiguration', [], __FUNCTION__);
    }

    /**
     * @return CdiscountGet
     */
    public function getWsdlServiceClient(): AbstractSoapClientBase
    {
        return $this->getApiClient()->getSoapServiceClient(CdiscountServiceMap::SERVICE_GET);
    }

    /**
     * @param $request
     * @param $requestFunction
     * @param array $arguments
     * @param string|null $functionName
     * @return mixed
     * @throws CdiscountException
     * @throws CdiscountSoapFaultException
     */
    private function executeGetServiceRequest($request, $requestFunction, array $arguments, string $functionName = null)
    {
        $functionName = $functionName ?? debug_backtrace()[1]['function'];

        $fault = null;
        $result = false;

        $wsdlServiceClient = $this->getWsdlServiceClient();

        if (empty($this->getApiClient()->getToken())) {

            $fault = new SoapFault('INTERNAL_TOKEN_NOT_SET', 'INTERNAL_TOKEN_NOT_SET');
        }

        if ($fault === null) {

            $result = $wsdlServiceClient->$requestFunction($request);
        }

        if ($result === false) {
            $fault = $fault ?? $wsdlServiceClient->getLastErrorForMethod(get_class($wsdlServiceClient) . '::' . $requestFunction);

            try {
                if ($this->getApiClient()->getFaultHandler()->tryRecover($this, $functionName, $fault)) {

                    return $this->$functionName(...$arguments);
                }
            } catch (CdiscountException $cdiscountException) {
                throw $cdiscountException;
            } catch (Exception $exception) {
                throw new CdiscountException($exception);
            }

            throw new CdiscountSoapFaultException($fault);
        }

        return $result;
    }
}