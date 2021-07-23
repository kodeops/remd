<?php
namespace kodeops\remd\Services;

use kodeops\remd\Request;
use kodeops\remd\Traits\ServiceSetting;

class RentPriceIndexCat
{
    use ServiceSetting;

    const SERVICE = 'rpic';

    public static function rentPriceIndex(array $params)
    {
        return Request::do(
            self::SERVICE,
            self::serviceSetting('ENDPOINT') . '/api/rent-price-index', 
            'POST', 
            self::serviceSetting('KEY'),
            $params
        );
    }
}