<?php
namespace kodeops\remd\Services;

use kodeops\remd\Request;
use kodeops\remd\Traits\ServiceSetting;

class ReferenceEs
{
    use ServiceSetting;

    const SERVICE = 'referencees';

    public static function search(array $params)
    {
        $params = array_merge($params, ['rro' => 1]);

        return Request::do(
            self::SERVICE,
            self::serviceSetting('ENDPOINT') . '/api/search', 
            'GET', 
            self::serviceSetting('KEY'),
            $params
        );
    }

    public static function ine(array $params)
    {
        return Request::do(
            self::SERVICE,
            self::serviceSetting('ENDPOINT') . '/api/ine', 
            'GET', 
            self::serviceSetting('KEY'),
            $params
        );
    }
}