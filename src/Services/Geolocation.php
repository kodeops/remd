<?php
namespace kodeops\remd\Services;

use kodeops\remd\Request;
use kodeops\remd\Static;

class Geolocation
{
    const SERVICE = 'geolocation';
    const ENV_PREFIX = 'REMD_PAW_GEOLOCATION';

    private static function serviceSetting($key)
    {
        return Static::serviceSetting(self::ENV_PREFIX, $key);
    }

    public static function geocode(array $params)
    {
        return Request::do(
            self::SERVICE,
            self::serviceSetting('ENDPOINT') . '/geocode', 
            'GET', 
            self::serviceSetting('KEY'),
            $params
        );
    }

    public static function reverse(array $params)
    {
        return Request::do(
            self::SERVICE,
            self::serviceSetting('ENDPOINT') . '/reverse', 
            'GET', 
            self::serviceSetting('KEY'),
            $params
        );
    }
}