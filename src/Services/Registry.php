<?php
namespace kodeops\remd\Services;

use kodeops\remd\Request;
use kodeops\remd\Traits\ServiceSetting;

class Registry
{
    use ServiceSetting;

    const SERVICE = 'registry';

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