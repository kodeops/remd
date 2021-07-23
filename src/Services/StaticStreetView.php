<?php
namespace kodeops\remd\Services;

use kodeops\remd\Request;
use kodeops\remd\Traits\ServiceSetting;

class StaticStreetView
{
    use ServiceSetting;

    const SERVICE = 'ssv';

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