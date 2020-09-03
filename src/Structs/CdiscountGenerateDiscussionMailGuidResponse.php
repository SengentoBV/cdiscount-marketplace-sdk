<?php

namespace SengentoBV\CdiscountMarketplaceSdk\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GenerateDiscussionMailGuidResponse Structs
 * @package Cdiscount
 * @subpackage Structs
 */
class CdiscountGenerateDiscussionMailGuidResponse extends AbstractStructBase
{
    /**
     * The GenerateDiscussionMailGuidResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountDiscussionMailGuidCreationResultMessage
     */
    public $GenerateDiscussionMailGuidResult;
    /**
     * Constructor method for GenerateDiscussionMailGuidResponse
     * @uses CdiscountGenerateDiscussionMailGuidResponse::setGenerateDiscussionMailGuidResult()
     * @param \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountDiscussionMailGuidCreationResultMessage $generateDiscussionMailGuidResult
     */
    public function __construct(\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountDiscussionMailGuidCreationResultMessage $generateDiscussionMailGuidResult = null)
    {
        $this
            ->setGenerateDiscussionMailGuidResult($generateDiscussionMailGuidResult);
    }
    /**
     * Get GenerateDiscussionMailGuidResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountDiscussionMailGuidCreationResultMessage|null
     */
    public function getGenerateDiscussionMailGuidResult()
    {
        return isset($this->GenerateDiscussionMailGuidResult) ? $this->GenerateDiscussionMailGuidResult : null;
    }
    /**
     * Set GenerateDiscussionMailGuidResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountDiscussionMailGuidCreationResultMessage $generateDiscussionMailGuidResult
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountGenerateDiscussionMailGuidResponse
     */
    public function setGenerateDiscussionMailGuidResult(\SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountDiscussionMailGuidCreationResultMessage $generateDiscussionMailGuidResult = null)
    {
        if (is_null($generateDiscussionMailGuidResult) || (is_array($generateDiscussionMailGuidResult) && empty($generateDiscussionMailGuidResult))) {
            unset($this->GenerateDiscussionMailGuidResult);
        } else {
            $this->GenerateDiscussionMailGuidResult = $generateDiscussionMailGuidResult;
        }
        return $this;
    }
}
