<?php
namespace kodeops\remd\Services;

use kodeops\remd\Request;
use kodeops\remd\Traits\ServiceSetting;

class RentPriceIndexCat
{
    const ENDPOINT = 'https://rent-price-index-cat.remd.tech/api';
    const SERVICE = 'rpic';
    const KEY = 'REMD_PAW_RPIC_KEY';

    public static function rentPriceIndex(array $params)
    {
        return Request::do(
            self::SERVICE,
            self::serviceSetting('ENDPOINT') . '/rent-price-index', 
            'POST', 
            self::serviceSetting('KEY'),
            $params,
            ['Accept' => 'application/json']
        );
    }
}