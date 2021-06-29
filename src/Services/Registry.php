<?php
namespace kodeops\remd\Services;

use kodeops\remd\Request;
use kodeops\remd\Setting;

class Registry
{
    const SERVICE = 'registry';

    private static function serviceSetting($key)
    {
        return Setting::get(self::SERVICE, $key);
    }

    public static function valuate(array $params)
    {
        return Request::do(
            self::SERVICE,
            self::serviceSetting('ENDPOINT') . '/valuate', 
            'GET', 
            self::serviceSetting('KEY'),
            $params
        );
    }

    public static function queue(array $params)
    {
        return Request::do(
            self::SERVICE,
            self::serviceSetting('ENDPOINT') . '/valuate/queue', 
            'GET', 
            self::serviceSetting('KEY'),
            $params
        );
    }
}