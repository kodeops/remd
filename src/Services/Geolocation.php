<?php
namespace kodeops\remd\Services;

use kodeops\remd\Request;
use kodeops\remd\Traits\ServiceSetting;

class Geolocation
{
    use ServiceSetting;

    const SERVICE = 'geolocation';

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