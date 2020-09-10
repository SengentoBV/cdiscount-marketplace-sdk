<?php

namespace SengentoBV\CdiscountMarketplaceSdk\Utils;

use DateTime;
use DateTimeZone;

class CdiscountDateTime
{
// $created_time = DateTime::createFromFormat('Y-m-d H:i:s', $order->ts_created, $this->germanTimeZone);
    private DateTimeZone $utcPlus1TimeZone;
    private DateTime $dateTime;

    public function __construct()
    {
        $this->utcPlus1TimeZone = new DateTimeZone('Etc/GMT-1');
    }

    public function __toString()
    {
        return "";
    }
}