<?php

use SengentoBV\CdiscountMarketplaceSdk\CdiscountMarketplaceApiClient;
use SengentoBV\CdiscountMarketplaceSdk\Exceptions\CdiscountTokenRetrievingFaultHandler;
use SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountOfferFilter;

require_once __DIR__ . '/vendor/autoload.php';

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

$apiClient = new CdiscountMarketplaceApiClient();

$apiClient->setFaultHandler(new CdiscountTokenRetrievingFaultHandler($_ENV['CDISCOUNT_API_USERNAME'], $_ENV['CDISCOUNT_API_PASSWORD']));

$filter = new \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountOrderFilter();
$filter->setBeginCreationDate('2020-07-01T00:00:00.00');
$filter->setEndCreationDate('2020-12-12T00:00:00.00');
$filter->setBeginModificationDate('2011-07-01T00:00:00.00');
$filter->setEndModificationDate('2020-12-12T00:00:00.00');
$filter->setFetchOrderLines(true);
$filter->setFetchParcels(true);
$result = $apiClient->order()->getOrderList($filter);

print_r($result->getGetOrderListResult()->getOrderList());


$response = $apiClient->order()->getGlobalConfiguration();

print_r($response);