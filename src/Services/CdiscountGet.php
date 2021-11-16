<?php

declare(strict_types=1);

namespace SengentoBV\CdiscountMarketplaceSdk\Services;

use SoapFault;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Get Services
 * @package Cdiscount
 * @subpackage Services
 */
class CdiscountGet extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named GetProductList
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountGetProductList $parameters
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountGetProductListResponse|bool
     */
    public function GetProductList(\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountGetProductList $parameters)
    {
        try {
            $this->setResult($resultGetProductList = $this->getSoapClient()->__soapCall('GetProductList', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultGetProductList;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetProductPackageSubmissionResult
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountGetProductPackageSubmissionResult $parameters
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountGetProductPackageSubmissionResultResponse|bool
     */
    public function GetProductPackageSubmissionResult(\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountGetProductPackageSubmissionResult $parameters)
    {
        try {
            $this->setResult($resultGetProductPackageSubmissionResult = $this->getSoapClient()->__soapCall('GetProductPackageSubmissionResult', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultGetProductPackageSubmissionResult;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named
     * GetProductPackageProductMatchingFileData
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountGetProductPackageProductMatchingFileData $parameters
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountGetProductPackageProductMatchingFileDataResponse|bool
     */
    public function GetProductPackageProductMatchingFileData(\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountGetProductPackageProductMatchingFileData $parameters)
    {
        try {
            $this->setResult($resultGetProductPackageProductMatchingFileData = $this->getSoapClient()->__soapCall('GetProductPackageProductMatchingFileData', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultGetProductPackageProductMatchingFileData;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetAllowedCategoryTree
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountGetAllowedCategoryTree $parameters
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountGetAllowedCategoryTreeResponse|bool
     */
    public function GetAllowedCategoryTree(\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountGetAllowedCategoryTree $parameters)
    {
        try {
            $this->setResult($resultGetAllowedCategoryTree = $this->getSoapClient()->__soapCall('GetAllowedCategoryTree', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultGetAllowedCategoryTree;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetAllAllowedCategoryTree
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountGetAllAllowedCategoryTree $parameters
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountGetAllAllowedCategoryTreeResponse|bool
     */
    public function GetAllAllowedCategoryTree(\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountGetAllAllowedCategoryTree $parameters)
    {
        try {
            $this->setResult($resultGetAllAllowedCategoryTree = $this->getSoapClient()->__soapCall('GetAllAllowedCategoryTree', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultGetAllAllowedCategoryTree;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetModelList
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountGetModelList $parameters
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountGetModelListResponse|bool
     */
    public function GetModelList(\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountGetModelList $parameters)
    {
        try {
            $this->setResult($resultGetModelList = $this->getSoapClient()->__soapCall('GetModelList', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultGetModelList;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetAllModelList
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountGetAllModelList $parameters
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountGetAllModelListResponse|bool
     */
    public function GetAllModelList(\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountGetAllModelList $parameters)
    {
        try {
            $this->setResult($resultGetAllModelList = $this->getSoapClient()->__soapCall('GetAllModelList', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultGetAllModelList;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetBrandList
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountGetBrandList $parameters
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountGetBrandListResponse|bool
     */
    public function GetBrandList(\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountGetBrandList $parameters)
    {
        try {
            $this->setResult($resultGetBrandList = $this->getSoapClient()->__soapCall('GetBrandList', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultGetBrandList;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetProductListByIdentifier
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountGetProductListByIdentifier $parameters
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountGetProductListByIdentifierResponse|bool
     */
    public function GetProductListByIdentifier(\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountGetProductListByIdentifier $parameters)
    {
        try {
            $this->setResult($resultGetProductListByIdentifier = $this->getSoapClient()->__soapCall('GetProductListByIdentifier', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultGetProductListByIdentifier;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetOfferPackageSubmissionResult
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountGetOfferPackageSubmissionResult $parameters
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountGetOfferPackageSubmissionResultResponse|bool
     */
    public function GetOfferPackageSubmissionResult(\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountGetOfferPackageSubmissionResult $parameters)
    {
        try {
            $this->setResult($resultGetOfferPackageSubmissionResult = $this->getSoapClient()->__soapCall('GetOfferPackageSubmissionResult', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultGetOfferPackageSubmissionResult;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetOfferList
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountGetOfferList $parameters
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountGetOfferListResponse|bool
     */
    public function GetOfferList(\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountGetOfferList $parameters)
    {
        try {
            $this->setResult($resultGetOfferList = $this->getSoapClient()->__soapCall('GetOfferList', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultGetOfferList;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetOfferListPaginated
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountGetOfferListPaginated $parameters
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountGetOfferListPaginatedResponse|bool
     */
    public function GetOfferListPaginated(\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountGetOfferListPaginated $parameters)
    {
        try {
            $this->setResult($resultGetOfferListPaginated = $this->getSoapClient()->__soapCall('GetOfferListPaginated', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultGetOfferListPaginated;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetSellerInformation
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountGetSellerInformation $parameters
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountGetSellerInformationResponse|bool
     */
    public function GetSellerInformation(\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountGetSellerInformation $parameters)
    {
        try {
            $this->setResult($resultGetSellerInformation = $this->getSoapClient()->__soapCall('GetSellerInformation', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultGetSellerInformation;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetSellerIndicators
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountGetSellerIndicators $parameters
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountGetSellerIndicatorsResponse|bool
     */
    public function GetSellerIndicators(\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountGetSellerIndicators $parameters)
    {
        try {
            $this->setResult($resultGetSellerIndicators = $this->getSoapClient()->__soapCall('GetSellerIndicators', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultGetSellerIndicators;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetOrderList
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountGetOrderList $parameters
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountGetOrderListResponse|bool
     */
    public function GetOrderList(\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountGetOrderList $parameters)
    {
        try {
            $this->setResult($resultGetOrderList = $this->getSoapClient()->__soapCall('GetOrderList', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultGetOrderList;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetServiceOrderList
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountGetServiceOrderList $parameters
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountGetServiceOrderListResponse|bool
     */
    public function GetServiceOrderList(\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountGetServiceOrderList $parameters)
    {
        try {
            $this->setResult($resultGetServiceOrderList = $this->getSoapClient()->__soapCall('GetServiceOrderList', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultGetServiceOrderList;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetGlobalConfiguration
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountGetGlobalConfiguration $parameters
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountGetGlobalConfigurationResponse|bool
     */
    public function GetGlobalConfiguration(\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountGetGlobalConfiguration $parameters)
    {
        try {
            $this->setResult($resultGetGlobalConfiguration = $this->getSoapClient()->__soapCall('GetGlobalConfiguration', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultGetGlobalConfiguration;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetRelaysFileSubmissionResult
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountGetRelaysFileSubmissionResult $parameters
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountGetRelaysFileSubmissionResultResponse|bool
     */
    public function GetRelaysFileSubmissionResult(\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountGetRelaysFileSubmissionResult $parameters)
    {
        try {
            $this->setResult($resultGetRelaysFileSubmissionResult = $this->getSoapClient()->__soapCall('GetRelaysFileSubmissionResult', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultGetRelaysFileSubmissionResult;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetParcelShopList
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountGetParcelShopList $parameters
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountGetParcelShopListResponse|bool
     */
    public function GetParcelShopList(\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountGetParcelShopList $parameters)
    {
        try {
            $this->setResult($resultGetParcelShopList = $this->getSoapClient()->__soapCall('GetParcelShopList', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultGetParcelShopList;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetOrderClaimList
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountGetOrderClaimList $parameters
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountGetOrderClaimListResponse|bool
     */
    public function GetOrderClaimList(\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountGetOrderClaimList $parameters)
    {
        try {
            $this->setResult($resultGetOrderClaimList = $this->getSoapClient()->__soapCall('GetOrderClaimList', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultGetOrderClaimList;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetOrderQuestionList
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountGetOrderQuestionList $parameters
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountGetOrderQuestionListResponse|bool
     */
    public function GetOrderQuestionList(\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountGetOrderQuestionList $parameters)
    {
        try {
            $this->setResult($resultGetOrderQuestionList = $this->getSoapClient()->__soapCall('GetOrderQuestionList', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultGetOrderQuestionList;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetOfferQuestionList
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountGetOfferQuestionList $parameters
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountGetOfferQuestionListResponse|bool
     */
    public function GetOfferQuestionList(\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountGetOfferQuestionList $parameters)
    {
        try {
            $this->setResult($resultGetOfferQuestionList = $this->getSoapClient()->__soapCall('GetOfferQuestionList', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultGetOfferQuestionList;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetDiscussionList
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountGetDiscussionList $parameters
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountGetDiscussionListResponse|bool
     */
    public function GetDiscussionList(\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountGetDiscussionList $parameters)
    {
        try {
            $this->setResult($resultGetDiscussionList = $this->getSoapClient()->__soapCall('GetDiscussionList', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultGetDiscussionList;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetDiscussionMailList
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountGetDiscussionMailList $parameters
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountGetDiscussionMailListResponse|bool
     */
    public function GetDiscussionMailList(\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountGetDiscussionMailList $parameters)
    {
        try {
            $this->setResult($resultGetDiscussionMailList = $this->getSoapClient()->__soapCall('GetDiscussionMailList', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultGetDiscussionMailList;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetExternalOrderStatus
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountGetExternalOrderStatus $parameters
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountGetExternalOrderStatusResponse|bool
     */
    public function GetExternalOrderStatus(\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountGetExternalOrderStatus $parameters)
    {
        try {
            $this->setResult($resultGetExternalOrderStatus = $this->getSoapClient()->__soapCall('GetExternalOrderStatus', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultGetExternalOrderStatus;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetProductStockList
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountGetProductStockList $parameters
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountGetProductStockListResponse|bool
     */
    public function GetProductStockList(\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountGetProductStockList $parameters)
    {
        try {
            $this->setResult($resultGetProductStockList = $this->getSoapClient()->__soapCall('GetProductStockList', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultGetProductStockList;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetFulfilmentActivationReportList
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountGetFulfilmentActivationReportList $parameters
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountGetFulfilmentActivationReportListResponse|bool
     */
    public function GetFulfilmentActivationReportList(\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountGetFulfilmentActivationReportList $parameters)
    {
        try {
            $this->setResult($resultGetFulfilmentActivationReportList = $this->getSoapClient()->__soapCall('GetFulfilmentActivationReportList', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultGetFulfilmentActivationReportList;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetFulfilmentOrderListToSupply
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountGetFulfilmentOrderListToSupply $parameters
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountGetFulfilmentOrderListToSupplyResponse|bool
     */
    public function GetFulfilmentOrderListToSupply(\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountGetFulfilmentOrderListToSupply $parameters)
    {
        try {
            $this->setResult($resultGetFulfilmentOrderListToSupply = $this->getSoapClient()->__soapCall('GetFulfilmentOrderListToSupply', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultGetFulfilmentOrderListToSupply;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetFulfilmentDeliveryDocument
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountGetFulfilmentDeliveryDocument $parameters
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountGetFulfilmentDeliveryDocumentResponse|bool
     */
    public function GetFulfilmentDeliveryDocument(\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountGetFulfilmentDeliveryDocument $parameters)
    {
        try {
            $this->setResult($resultGetFulfilmentDeliveryDocument = $this->getSoapClient()->__soapCall('GetFulfilmentDeliveryDocument', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultGetFulfilmentDeliveryDocument;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetFulfilmentSupplyOrder
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountGetFulfilmentSupplyOrder $parameters
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountGetFulfilmentSupplyOrderResponse|bool
     */
    public function GetFulfilmentSupplyOrder(\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountGetFulfilmentSupplyOrder $parameters)
    {
        try {
            $this->setResult($resultGetFulfilmentSupplyOrder = $this->getSoapClient()->__soapCall('GetFulfilmentSupplyOrder', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultGetFulfilmentSupplyOrder;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetFulfilmentSupplyOrderReportList
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountGetFulfilmentSupplyOrderReportList $parameters
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountGetFulfilmentSupplyOrderReportListResponse|bool
     */
    public function GetFulfilmentSupplyOrderReportList(\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountGetFulfilmentSupplyOrderReportList $parameters)
    {
        try {
            $this->setResult($resultGetFulfilmentSupplyOrderReportList = $this->getSoapClient()->__soapCall('GetFulfilmentSupplyOrderReportList', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultGetFulfilmentSupplyOrderReportList;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetCompetingOffers
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountGetCompetingOffers $parameters
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountGetCompetingOffersResponse|bool
     */
    public function GetCompetingOffers(\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountGetCompetingOffers $parameters)
    {
        try {
            $this->setResult($resultGetCompetingOffers = $this->getSoapClient()->__soapCall('GetCompetingOffers', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultGetCompetingOffers;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetCompetingOfferChanges
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountGetCompetingOfferChanges $parameters
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountGetCompetingOfferChangesResponse|bool
     */
    public function GetCompetingOfferChanges(\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountGetCompetingOfferChanges $parameters)
    {
        try {
            $this->setResult($resultGetCompetingOfferChanges = $this->getSoapClient()->__soapCall('GetCompetingOfferChanges', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultGetCompetingOfferChanges;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetSellerDeals
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountGetSellerDeals $parameters
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountGetSellerDealsResponse|bool
     */
    public function GetSellerDeals(\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountGetSellerDeals $parameters)
    {
        try {
            $this->setResult($resultGetSellerDeals = $this->getSoapClient()->__soapCall('GetSellerDeals', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultGetSellerDeals;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountGetAllAllowedCategoryTreeResponse|\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountGetAllModelListResponse|\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountGetAllowedCategoryTreeResponse|\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountGetBrandListResponse|\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountGetCompetingOfferChangesResponse|\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountGetCompetingOffersResponse|\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountGetDiscussionListResponse|\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountGetDiscussionMailListResponse|\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountGetExternalOrderStatusResponse|\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountGetFulfilmentActivationReportListResponse|\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountGetFulfilmentDeliveryDocumentResponse|\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountGetFulfilmentOrderListToSupplyResponse|\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountGetFulfilmentSupplyOrderReportListResponse|\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountGetFulfilmentSupplyOrderResponse|\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountGetGlobalConfigurationResponse|\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountGetModelListResponse|\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountGetOfferListPaginatedResponse|\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountGetOfferListResponse|\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountGetOfferPackageSubmissionResultResponse|\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountGetOfferQuestionListResponse|\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountGetOrderClaimListResponse|\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountGetOrderListResponse|\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountGetOrderQuestionListResponse|\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountGetParcelShopListResponse|\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountGetProductListByIdentifierResponse|\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountGetProductListResponse|\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountGetProductPackageProductMatchingFileDataResponse|\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountGetProductPackageSubmissionResultResponse|\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountGetProductStockListResponse|\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountGetRelaysFileSubmissionResultResponse|\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountGetSellerDealsResponse|\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountGetSellerIndicatorsResponse|\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountGetSellerInformationResponse|\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountGetServiceOrderListResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
