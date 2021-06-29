<?php
namespace kodeops\remd\Services;

use kodeops\remd\Request;
use kodeops\remd\Setting;

class Idealista
{
    const SERVICE = 'idealista';

    private static function serviceSetting($key)
    {
        return Setting::get(self::SERVICE, $key);
    }

    public static function search(array $params)
    {
        return Request::do(
            self::SERVICE,
            self::serviceSetting('ENDPOINT') . '/v1/search', 
            'POST', 
            self::serviceSetting('KEY'),
            $params
        );
    }
}