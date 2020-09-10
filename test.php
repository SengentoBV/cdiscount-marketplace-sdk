<?php

use SengentoBV\CdiscountMarketplaceSdk\CdiscountMarketplaceApiClient;
use SengentoBV\CdiscountMarketplaceSdk\Exceptions\CdiscountTokenRetrievingFaultHandler;
use SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountOfferFilter;

require_once __DIR__ . '/vendor/autoload.php';

$apiClient = new CdiscountMarketplaceApiClient();

$apiClient->setFaultHandler(new CdiscountTokenRetrievingFaultHandler('', ''));

$filter = new \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountOrderFilter();
$filter->setBeginCreationDate('2020-07-01T00:00:00.00');
$filter->setEndCreationDate('2020-12-12T00:00:00.00');
$filter->setBeginModificationDate('2011-07-01T00:00:00.00');
$filter->setEndModificationDate('2020-12-12T00:00:00.00');
$filter->setFetchOrderLines(true);
$filter->setFetchParcels(true);
$result = $apiClient->order()->getOrderList($filter);

print_r($result->getGetOrderListResult()->getOrderList());