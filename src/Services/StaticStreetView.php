<?php
namespace kodeops\remd\Services;

use kodeops\remd\Request;
use kodeops\remd\Setting;

class StaticStreetView
{
    const SERVICE = 'ssv';

    private static function serviceSetting($key)
    {
        return Setting::get(self::SERVICE, $key);
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