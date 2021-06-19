<?php
namespace kodeops\remd\Services;

use kodeops\remd\Request;
use kodeops\remd\Static;

class Idealista
{
    const SERVICE = 'idealista';
    const ENV_PREFIX = 'REMD_PAW_IDEALISTA';

    private static function serviceSetting($key)
    {
        return Static::serviceSetting(self::ENV_PREFIX, $key);
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