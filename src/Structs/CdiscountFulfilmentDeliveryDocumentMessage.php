<?php

namespace SengentoBV\CdiscountMarketplaceSdk\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FulfilmentDeliveryDocumentMessage Structs
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:FulfilmentDeliveryDocumentMessage
 * @package Cdiscount
 * @subpackage Structs
 */
class CdiscountFulfilmentDeliveryDocumentMessage extends CdiscountServiceBaseAPIMessage
{
    /**
     * The PdfDocument
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $PdfDocument;
    /**
     * Constructor method for FulfilmentDeliveryDocumentMessage
     * @uses CdiscountFulfilmentDeliveryDocumentMessage::setPdfDocument()
     * @param string $pdfDocument
     */
    public function __construct($pdfDocument = null)
    {
        $this
            ->setPdfDocument($pdfDocument);
    }
    /**
     * Get PdfDocument value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getPdfDocument()
    {
        return isset($this->PdfDocument) ? $this->PdfDocument : null;
    }
    /**
     * Set PdfDocument value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $pdfDocument
     * @return \SengentoBV\CdiscountMarketplaceSdk\Structs\CdiscountFulfilmentDeliveryDocumentMessage
     */
    public function setPdfDocument($pdfDocument = null)
    {
        // validation for constraint: string
        if (!is_null($pdfDocument) && !is_string($pdfDocument)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($pdfDocument, true), gettype($pdfDocument)), __LINE__);
        }
        if (is_null($pdfDocument) || (is_array($pdfDocument) && empty($pdfDocument))) {
            unset($this->PdfDocument);
        } else {
            $this->PdfDocument = $pdfDocument;
        }
        return $this;
    }
}
