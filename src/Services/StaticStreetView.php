<?php
namespace kodeops\remd\Services;

use kodeops\remd\Request;

class StaticStreetView
{
    const SERVICE = 'ssv';
    const ENV_PREFIX = 'REMD_PAW_SSV';

    private static function serviceSetting($key)
    {
        return Static::serviceSetting(self::ENV_PREFIX, $key);
    }

    public static function streetview(array $params)
    {
        return Request::do(
            self::SERVICE,
            self::serviceSetting('ENDPOINT') . '/streetview', 
            'GET', 
            self::serviceSetting('KEY'),
            $params
        );
    }
}