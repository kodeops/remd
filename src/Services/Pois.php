<?php
namespace kodeops\remd\Services;

use kodeops\remd\Request;
use kodeops\remd\Traits\ServiceSetting;

class Pois
{
    use ServiceSetting;

    const SERVICE = 'pois';

    public static function nearbyPoints(array $params)
    {
        return Request::do(
            self::SERVICE,
            self::serviceSetting('ENDPOINT') . '/nearby-points', 
            'GET', 
            self::serviceSetting('KEY'),
            $params
        );
    }
}