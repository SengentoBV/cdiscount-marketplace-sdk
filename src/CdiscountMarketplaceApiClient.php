<?php


namespace SengentoBV\CdiscountMarketplaceSdk;

use SengentoBV\CdiscountMarketplaceSdk\ApiClients\CdiscountOfferApiClient;
use SengentoBV\CdiscountMarketplaceSdk\ApiClients\CdiscountOrderApiClient;
use SengentoBV\CdiscountMarketplaceSdk\ApiClients\CdiscountProductApiClient;
use SengentoBV\CdiscountMarketplaceSdk\Services\CdiscountServiceMap;
use SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountContextMessage;
use SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountHeaderMessage;
use SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountLocalizationMessage;
use SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountSecurityContext;
use SengentoBV\CdiscountMarketplaceSdk\Exceptions\CdiscountFaultHandler;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

class CdiscountMarketplaceApiClient
{
    /**
     * Option key to define WSDL service location override
     * @var string
     */
    const CLIENT_SERVICE_URL = 'client_service_url';

    private array $wsdlOptions;

    private CdiscountFaultHandler $faultHandler;

    private CdiscountHeaderMessage $header;

    /**
     * @var ?string The token used to authenticate API calls.
     */
    private ?string $token = "";

    private array $soapServiceClients = [];

    /**
     * CdiscountMarketplaceApiClient constructor.
     * @param ?string $token
     * @param array|null $wsdlOptions
     */
    public function __construct(?string $token = null, array $wsdlOptions = null)
    {

        $this->faultHandler = new CdiscountFaultHandler();

        $this->wsdlOptions = $wsdlOptions ?? [];
        $this->token = $token;

        $this->initSoapServiceHeader($token);
    }

    /**
     * Change the token used to authenticate API calls.
     * @param string $token
     * @return CdiscountMarketplaceApiClient
     */
    public function setToken(string $token): CdiscountMarketplaceApiClient
    {

        $this->token = $token;
        $this->header->getSecurity()->setTokenId($token);

        return $this;
    }

    public function getWsdlOptions(): array
    {
        $wsdlOptions = array(
            AbstractSoapClientBase::WSDL_URL => 'https://wsvc.cdiscount.com/MarketplaceAPIService.svc?singleWsdl',
            AbstractSoapClientBase::WSDL_CLASSMAP => CdiscountClassMap::get(),

            CdiscountMarketplaceApiClient::CLIENT_SERVICE_URL => 'https://wsvc.cdiscount.com/MarketplaceAPIService.svc',
        );

        if (count($this->wsdlOptions) > 0) {

            foreach ($this->wsdlOptions as $key => $value) {
                $wsdlOptions[$key] = $value;
            }
        }

        return $wsdlOptions;
    }

    public function getWsdlClientServiceUrl(): string
    {

        $wsdlOptions = $this->getWsdlOptions();

        return $wsdlOptions[CdiscountMarketplaceApiClient::CLIENT_SERVICE_URL];
    }

    private function initSoapServiceHeader(?string $token)
    {

        $headerContext = new CdiscountContextMessage();

        // Configure the header context with hardcoded values
        $headerContext->setCatalogID(1);
        $headerContext->setCustomerPoolID(1);
        $headerContext->setSiteID(100);

        // Configure the header localization with hardcoded values
        $headerLocalization = new CdiscountLocalizationMessage();

        // TODO: Make this configurable
        $headerLocalization->setCountry('Fr');
        $headerLocalization->setCurrency('Eur');
        $headerLocalization->setDecimalPosition(2);
        $headerLocalization->setLanguage('Fr');

        $headerSecurity = new CdiscountSecurityContext();

        if ($token !== null) {
            $headerSecurity->setTokenId($token);
        }

        $this->header = new CdiscountHeaderMessage(
            $headerContext,
            $headerLocalization,
            $headerSecurity,
            '1.0'
        );
    }

    public function getSoapServiceClient(string $service): AbstractSoapClientBase
    {

        $service = strtolower($service);

        if (isset($this->soapServiceClients[$service])) {

            return $this->soapServiceClients[$service];
        }

        $serviceClass = CdiscountServiceMap::get($service);

        $wsdlOptions = $this->getWsdlOptions();

        /** @var AbstractSoapClientBase $serviceInstance */
        $serviceInstance = new $serviceClass($wsdlOptions);

        // Override the service url if needed
        if (isset($wsdlOptions[CdiscountMarketplaceApiClient::CLIENT_SERVICE_URL])) {
            $serviceInstance->getSoapClient()->__setLocation($wsdlOptions[CdiscountMarketplaceApiClient::CLIENT_SERVICE_URL]);
        }

        // Cache the instance
        $this->soapServiceClients[$service] = $serviceInstance;

        return $serviceInstance;
    }

    public function getSoapServiceHeader(): CdiscountHeaderMessage
    {
        return $this->header;
    }

    public function offer(): CdiscountOfferApiClient
    {
        return new CdiscountOfferApiClient($this);
    }

    public function product(): CdiscountProductApiClient
    {
        return new CdiscountProductApiClient($this);
    }

    public function order(): CdiscountOrderApiClient
    {
        return new CdiscountOrderApiClient($this);
    }

    /**
     * @return CdiscountFaultHandler|null
     */
    public function getFaultHandler(): CdiscountFaultHandler
    {
        return $this->faultHandler;
    }

    /**
     * @param CdiscountFaultHandler $faultHandler
     * @return CdiscountMarketplaceApiClient
     */
    public function setFaultHandler(CdiscountFaultHandler $faultHandler): CdiscountMarketplaceApiClient
    {
        $this->faultHandler = $faultHandler;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getToken(): ?string
    {
        return $this->token;
    }
}