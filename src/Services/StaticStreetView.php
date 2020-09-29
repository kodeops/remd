<?php
namespace kodeops\remd\Services;

use kodeops\remd\Request;

class StaticStreetView
{
    const ENDPOINT = 'https://ssv.remd.tech/api';
    const SERVICE = 'ssv';
    const KEY = 'REMD_PAW_SSV_KEY';

    public static function streetview(array $params)
    {
        return Request::do(
            self::SERVICE,
            self::ENDPOINT . '/streetview', 
            'GET', 
            env(self::KEY),
            $params
        );
    }
}