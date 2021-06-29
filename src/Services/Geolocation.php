<?php
namespace kodeops\remd\Services;

use kodeops\remd\Request;
use kodeops\remd\Setting;

class Geolocation
{
    const SERVICE = 'geolocation';

    private static function serviceSetting($key)
    {
        return Setting::get(self::SERVICE, $key);
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