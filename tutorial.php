<?php
/**
 * This file aims to show you how to use this generated package.
 * In addition, the goal is to show which methods are available and the first needed parameter(s)
 * You have to use an associative array such as:
 * - the key must be a constant beginning with WSDL_ from AbstractSoapClientBase class (each generated ServiceType class extends this class)
 * - the value must be the corresponding key value (each option matches a {@link http://www.php.net/manual/en/soapclient.soapclient.php} option)
 * $options = array(
 * \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_URL => 'https://wsvc.cdiscount.com/MarketplaceAPIService.svc?singleWsdl',
 * \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_TRACE => true,
 * \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_LOGIN => 'you_secret_login',
 * \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_PASSWORD => 'you_secret_password',
 * );
 * etc...
 */
require_once __DIR__ . '/vendor/autoload.php';
/**
 * Minimal options
 */
$options = array(
    \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_URL => 'https://wsvc.cdiscount.com/MarketplaceAPIService.svc?singleWsdl',
    \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_CLASSMAP => \SengentoBV\CdiscountMarketplaceSdk\CdiscountClassMap::get(),
);
/**
 * Samples for Get ServiceType
 */
$get = new \SengentoBV\CdiscountMarketplaceSdk\Services\CdiscountGet($options);
$get->getSoapClient()->__setLocation('https://wsvc.cdiscount.com/MarketplaceAPIService.svc');
/**
 * Sample call for GetProductList operation/method
 */
if ($get->GetProductList(new \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountGetProductList()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
die();
/**
 * Sample call for GetProductPackageSubmissionResult operation/method
 */
if ($get->GetProductPackageSubmissionResult(new \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountGetProductPackageSubmissionResult()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetProductPackageProductMatchingFileData operation/method
 */
if ($get->GetProductPackageProductMatchingFileData(new \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountGetProductPackageProductMatchingFileData()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetAllowedCategoryTree operation/method
 */
if ($get->GetAllowedCategoryTree(new \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountGetAllowedCategoryTree()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetAllAllowedCategoryTree operation/method
 */
if ($get->GetAllAllowedCategoryTree(new \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountGetAllAllowedCategoryTree()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetModelList operation/method
 */
if ($get->GetModelList(new \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountGetModelList()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetAllModelList operation/method
 */
if ($get->GetAllModelList(new \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountGetAllModelList()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetBrandList operation/method
 */
if ($get->GetBrandList(new \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountGetBrandList()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetProductListByIdentifier operation/method
 */
if ($get->GetProductListByIdentifier(new \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountGetProductListByIdentifier()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetOfferPackageSubmissionResult operation/method
 */
if ($get->GetOfferPackageSubmissionResult(new \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountGetOfferPackageSubmissionResult()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetOfferList operation/method
 */
if ($get->GetOfferList(new \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountGetOfferList()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetOfferListPaginated operation/method
 */
if ($get->GetOfferListPaginated(new \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountGetOfferListPaginated()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetSellerInformation operation/method
 */
if ($get->GetSellerInformation(new \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountGetSellerInformation()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetSellerIndicators operation/method
 */
if ($get->GetSellerIndicators(new \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountGetSellerIndicators()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetOrderList operation/method
 */
if ($get->GetOrderList(new \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountGetOrderList()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetServiceOrderList operation/method
 */
if ($get->GetServiceOrderList(new \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountGetServiceOrderList()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetGlobalConfiguration operation/method
 */
if ($get->GetGlobalConfiguration(new \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountGetGlobalConfiguration()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetRelaysFileSubmissionResult operation/method
 */
if ($get->GetRelaysFileSubmissionResult(new \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountGetRelaysFileSubmissionResult()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetParcelShopList operation/method
 */
if ($get->GetParcelShopList(new \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountGetParcelShopList()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetOrderClaimList operation/method
 */
if ($get->GetOrderClaimList(new \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountGetOrderClaimList()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetOrderQuestionList operation/method
 */
if ($get->GetOrderQuestionList(new \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountGetOrderQuestionList()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetOfferQuestionList operation/method
 */
if ($get->GetOfferQuestionList(new \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountGetOfferQuestionList()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetDiscussionList operation/method
 */
if ($get->GetDiscussionList(new \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountGetDiscussionList()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetDiscussionMailList operation/method
 */
if ($get->GetDiscussionMailList(new \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountGetDiscussionMailList()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetExternalOrderStatus operation/method
 */
if ($get->GetExternalOrderStatus(new \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountGetExternalOrderStatus()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetProductStockList operation/method
 */
if ($get->GetProductStockList(new \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountGetProductStockList()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetFulfilmentActivationReportList operation/method
 */
if ($get->GetFulfilmentActivationReportList(new \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountGetFulfilmentActivationReportList()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetFulfilmentOrderListToSupply operation/method
 */
if ($get->GetFulfilmentOrderListToSupply(new \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountGetFulfilmentOrderListToSupply()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetFulfilmentDeliveryDocument operation/method
 */
if ($get->GetFulfilmentDeliveryDocument(new \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountGetFulfilmentDeliveryDocument()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetFulfilmentSupplyOrder operation/method
 */
if ($get->GetFulfilmentSupplyOrder(new \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountGetFulfilmentSupplyOrder()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetFulfilmentSupplyOrderReportList operation/method
 */
if ($get->GetFulfilmentSupplyOrderReportList(new \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountGetFulfilmentSupplyOrderReportList()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetCompetingOffers operation/method
 */
if ($get->GetCompetingOffers(new \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountGetCompetingOffers()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetCompetingOfferChanges operation/method
 */
if ($get->GetCompetingOfferChanges(new \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountGetCompetingOfferChanges()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetSellerDeals operation/method
 */
if ($get->GetSellerDeals(new \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountGetSellerDeals()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Samples for Submit ServiceType
 */
$submit = new \SengentoBV\CdiscountMarketplaceSdk\Services\CdiscountSubmit($options);
/**
 * Sample call for SubmitProductPackage operation/method
 */
if ($submit->SubmitProductPackage(new \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountSubmitProductPackage()) !== false) {
    print_r($submit->getResult());
} else {
    print_r($submit->getLastError());
}
/**
 * Sample call for SubmitOfferPackage operation/method
 */
if ($submit->SubmitOfferPackage(new \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountSubmitOfferPackage()) !== false) {
    print_r($submit->getResult());
} else {
    print_r($submit->getLastError());
}
/**
 * Sample call for SubmitRelaysFile operation/method
 */
if ($submit->SubmitRelaysFile(new \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountSubmitRelaysFile()) !== false) {
    print_r($submit->getResult());
} else {
    print_r($submit->getLastError());
}
/**
 * Sample call for SubmitFulfilmentSupplyOrder operation/method
 */
if ($submit->SubmitFulfilmentSupplyOrder(new \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountSubmitFulfilmentSupplyOrder()) !== false) {
    print_r($submit->getResult());
} else {
    print_r($submit->getLastError());
}
/**
 * Sample call for SubmitFulfilmentOnDemandSupplyOrder operation/method
 */
if ($submit->SubmitFulfilmentOnDemandSupplyOrder(new \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountSubmitFulfilmentOnDemandSupplyOrder()) !== false) {
    print_r($submit->getResult());
} else {
    print_r($submit->getLastError());
}
/**
 * Sample call for SubmitOfferStateAction operation/method
 */
if ($submit->SubmitOfferStateAction(new \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountSubmitOfferStateAction()) !== false) {
    print_r($submit->getResult());
} else {
    print_r($submit->getLastError());
}
/**
 * Sample call for SubmitFulfilmentActivation operation/method
 */
if ($submit->SubmitFulfilmentActivation(new \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountSubmitFulfilmentActivation()) !== false) {
    print_r($submit->getResult());
} else {
    print_r($submit->getLastError());
}
/**
 * Samples for Validate ServiceType
 */
$validate = new \SengentoBV\CdiscountMarketplaceSdk\Services\CdiscountValidate($options);
/**
 * Sample call for ValidateOrderList operation/method
 */
if ($validate->ValidateOrderList(new \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountValidateOrderList()) !== false) {
    print_r($validate->getResult());
} else {
    print_r($validate->getLastError());
}
/**
 * Samples for Manage ServiceType
 */
$manage = new \SengentoBV\CdiscountMarketplaceSdk\Services\CdiscountManage($options);
/**
 * Sample call for ManageParcel operation/method
 */
if ($manage->ManageParcel(new \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountManageParcel()) !== false) {
    print_r($manage->getResult());
} else {
    print_r($manage->getLastError());
}
/**
 * Samples for Create ServiceType
 */
$create = new \SengentoBV\CdiscountMarketplaceSdk\Services\CdiscountCreate($options);
/**
 * Sample call for CreateRefundVoucherAfterShipment operation/method
 */
if ($create->CreateRefundVoucherAfterShipment(new \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountCreateRefundVoucherAfterShipment()) !== false) {
    print_r($create->getResult());
} else {
    print_r($create->getLastError());
}
/**
 * Sample call for CreateRefundVoucher operation/method
 */
if ($create->CreateRefundVoucher(new \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountCreateRefundVoucher()) !== false) {
    print_r($create->getResult());
} else {
    print_r($create->getLastError());
}
/**
 * Sample call for CreateExternalOrder operation/method
 */
if ($create->CreateExternalOrder(new \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountCreateExternalOrder()) !== false) {
    print_r($create->getResult());
} else {
    print_r($create->getLastError());
}
/**
 * Samples for Generate ServiceType
 */
$generate = new \SengentoBV\CdiscountMarketplaceSdk\Services\CdiscountGenerate($options);
/**
 * Sample call for GenerateDiscussionMailGuid operation/method
 */
if ($generate->GenerateDiscussionMailGuid(new \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountGenerateDiscussionMailGuid()) !== false) {
    print_r($generate->getResult());
} else {
    print_r($generate->getLastError());
}
/**
 * Samples for Close ServiceType
 */
$close = new \SengentoBV\CdiscountMarketplaceSdk\Services\CdiscountClose($options);
/**
 * Sample call for CloseDiscussionList operation/method
 */
if ($close->CloseDiscussionList(new \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountCloseDiscussionList()) !== false) {
    print_r($close->getResult());
} else {
    print_r($close->getLastError());
}
