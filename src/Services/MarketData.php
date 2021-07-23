<?php
namespace kodeops\remd\Services;

use kodeops\remd\Request;
use kodeops\remd\Traits\ServiceSetting;

class MarketData
{
    use ServiceSetting;

    const SERVICE = 'marketdata';

    public static function listings(array $params)
    {
        return Request::do(
            self::SERVICE,
            self::serviceSetting('ENDPOINT') . '/search', 
            'GET', 
            self::serviceSetting('KEY'),
            $params,
            [
                'Accept' => 'application/json',
                'Content-Type' => 'application/json',
            ]
        );
    }

    public static function user()
    {
        return Request::do(
            self::SERVICE,
            self::serviceSetting('ENDPOINT') . '/user', 
            'GET', 
            self::serviceSetting('KEY'),
            null,
            [
                'Accept' => 'application/json',
                'Content-Type' => 'application/json',
            ]
        );
    }

    public static function export(array $params)
    {
        return Request::do(
            self::SERVICE,
            self::serviceSetting('ENDPOINT') . '/export', 
            'GET', 
            self::serviceSetting('KEY'),
            $params,
            [
                'Accept' => 'application/json',
                'Content-Type' => 'application/json',
            ]
        );
    }

    public static function history(array $params)
    {
        return Request::do(
            self::SERVICE,
            self::serviceSetting('ENDPOINT') . '/history', 
            'GET', 
            self::serviceSetting('KEY'),
            $params,
            [
                'Accept' => 'application/json',
                'Content-Type' => 'application/json',
            ]
        );
    }

    public static function historyChart(array $params)
    {
        return success()
            ->type(\kodeops\remd\Request::DEFAULT_RESPONSE_TYPE)
            ->message(\kodeops\remd\Request::defaultResponseMessage(self::SERVICE))
            ->data(['url' => self::serviceSetting('ENDPOINT') . '/chart/price-history.png?' . http_build_query($params)]);
    }
}