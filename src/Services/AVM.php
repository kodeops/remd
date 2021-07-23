<?php
namespace kodeops\remd\Services;

use kodeops\remd\Request;
use kodeops\remd\Traits\ServiceSetting;

class AVM
{
    use ServiceSetting;

    const SERVICE = 'avm';

    public static function asset(array $params)
    {
        return Request::do(
            self::SERVICE,
            self::serviceSetting('ENDPOINT') . '/v1/asset', 
            'POST', 
            self::serviceSetting('KEY'),
            $params
        );
    }

    public static function queue(array $params)
    {
        return Request::do(
            self::SERVICE,
            self::serviceSetting('ENDPOINT') . '/v1/queue', 
            'POST', 
            self::serviceSetting('KEY'),
            $params
        );
    }

    public static function value(array $params)
    {
        return Request::do(
            self::SERVICE,
            self::serviceSetting('ENDPOINT') . '/v2/value', 
            'POST', 
            self::serviceSetting('KEY'),
            $params
        );
    }
}