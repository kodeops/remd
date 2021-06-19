<?php
namespace kodeops\remd\Services;

use kodeops\remd\Request;
use kodeops\remd\Static;

class ReferenceEs
{
    const SERVICE = 'referencees';
    const ENV_PREFIX = 'REMD_PAW_REFERENCEES';

    private static function serviceSetting($key)
    {
        return Static::serviceSetting(self::ENV_PREFIX, $key);
    }

    public static function search(array $params)
    {
        $params = array_merge($params, ['rro' => 1]);

        return Request::do(
            self::SERVICE,
            self::serviceSetting('ENDPOINT') . '/search', 
            'GET', 
            self::serviceSetting('KEY'),
            $params
        );
    }

    public static function ine(array $params)
    {
        return Request::do(
            self::SERVICE,
            self::serviceSetting('ENDPOINT') . '/ine', 
            'GET', 
            self::serviceSetting('KEY'),
            $params
        );
    }
}