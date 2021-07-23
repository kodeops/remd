<?php
namespace kodeops\remd\Services;

use kodeops\remd\Request;
use kodeops\remd\Traits\ServiceSetting;

class Idealista
{
    use ServiceSetting;

    const SERVICE = 'idealista';

    public static function search(array $params)
    {
        return Request::do(
            self::SERVICE,
            self::serviceSetting('ENDPOINT') . '/api/v1/search', 
            'POST', 
            self::serviceSetting('KEY'),
            $params
        );
    }
}