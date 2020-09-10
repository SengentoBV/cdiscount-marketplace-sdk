<?php

namespace SengentoBV\CdiscountMarketplaceSdk\Exceptions;

use Exception;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;
use SengentoBV\CdiscountMarketplaceSdk\ServiceClients\AbstractCdiscountServiceClient;
use SoapFault;

class CdiscountTokenRetrievingFaultHandler extends CdiscountFaultHandler
{
    private array $tokenInvalidErrors = [
        'Your token does not exist',
        'Token id is not correctly formatted',
        ' has expired',

        // This indicates an internal fault, 'thrown' when no token was set on the client to begin with
        'INTERNAL_TOKEN_NOT_SET'
    ];

    private string $username = '';

    private string $password = '';

    private bool $permanentlyFailed = false;

    public function __construct(string $username = null, string $password = null)
    {
        $this->username = $username ?? '';
        $this->password = $password ?? '';
    }

    /**
     * Attempt to recover from the thrown fault.
     *
     * You can throw your own fault if needed (if not castable to CdiscountException, your exception will be wrapped)
     *
     * @param AbstractCdiscountServiceClient $serviceClient
     * @param string $function Function name
     * @param SoapFault $fault Soap fault thrown.
     * @return bool true to indicate a recovery was attempted and the call should be retried; false to throw the original exception.
     * @throws Exception|GuzzleException
     */
    public function tryRecover(AbstractCdiscountServiceClient $serviceClient, string $function, SoapFault $fault): bool
    {
        $username = $this->username;
        $password = $this->password;

        if (empty($username) || empty($password) || $this->permanentlyFailed) {

            return false;
        }

        $shouldRefreshToken = false;

        foreach ($this->tokenInvalidErrors as $tokenInvalidError) {

            if (strpos($fault->getMessage(), $tokenInvalidError) !== false) {

                $shouldRefreshToken = true;
                break;
            }
        }

        if (!$shouldRefreshToken) {

            return false;
        }

        try {
            $client = new Client();

            $res = $client->request('GET', 'https://sts.cdiscount.com/users/httpIssue.svc/?realm=' . urlencode($serviceClient->getApiClient()->getWsdlClientServiceUrl()), [
                'auth' => [$username, $password]
            ]);

            $body = trim($res->getBody());

            $prefix = '<string xmlns="http://schemas.microsoft.com/2003/10/Serialization/">';
            $suffix = '</string>';

            if (substr($body, 0, strlen($prefix)) == $prefix) {

                $token = substr($body, strlen($prefix), strlen($body) - strlen($suffix) - strlen($prefix));

                if (strlen($token) == 32) {

                    $serviceClient->getApiClient()->setToken($token);

                    return true;
                }
            }

            // Mark as permanently failed as we shouldn't be able to get here (can happen when the username / password combo is wrong)
            $this->permanentlyFailed = true;

        } catch (Exception $exception) {

            $this->permanentlyFailed = true;

            throw $exception;
        }

        return false;
    }

    /**
     * @param string $username
     * @return CdiscountTokenRetrievingFaultHandler
     */
    public function setUsername(string $username): CdiscountTokenRetrievingFaultHandler
    {
        $this->username = $username;

        return $this;
    }

    /**
     * @param string|null $password
     * @return CdiscountTokenRetrievingFaultHandler
     */
    public function setPassword(string $password): CdiscountTokenRetrievingFaultHandler
    {
        $this->password = $password ?? '';

        return $this;
    }

    /**
     * @return string
     */
    public function getUsername(): string
    {
        return $this->username;
    }

    /**
     * @return string
     */
    public function getPassword(): string
    {
        return $this->password;
    }

    /**
     * @return bool
     */
    public function hasPermanentlyFailed(): bool
    {
        return $this->permanentlyFailed;
    }
}