<?php
namespace kodeops\remd\Services;

use kodeops\remd\Request;
use kodeops\remd\Static;

class Registry
{
    const SERVICE = 'registry';
    const ENV_PREFIX = 'REMD_PAW_REGISTRY';

    private static function serviceSetting($key)
    {
        return Static::serviceSetting(self::ENV_PREFIX, $key);
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