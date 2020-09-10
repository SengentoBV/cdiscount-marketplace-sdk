<?php

namespace SengentoBV\CdiscountMarketplaceSdk\Exceptions;

use Exception;

class CdiscountException extends Exception
{
    public function __construct(\Exception $exception)
    {
        parent::__construct($exception->getMessage(), $exception->getCode(), $exception);
    }
}