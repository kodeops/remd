<?php
namespace kodeops\remd\Services;

use kodeops\remd\Request;

class RentPriceIndexCat
{
    const ENDPOINT = 'https://rent-price-index-cat.remd.tech/api';
    const SERVICE = 'rpic';
    const KEY = 'REMD_PAW_RPIC_KEY';

    public static function rentPriceIndex(array $params)
    {
        return Request::do(
            self::SERVICE,
            self::ENDPOINT . '/rent-price-index', 
            'POST', 
            env(self::KEY),
            $params,
            ['Accept' => 'application/json']
        );
    }
}