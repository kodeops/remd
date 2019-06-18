<?php
namespace kodeops\remd\Services;

use kodeops\remd\Request;

class MarketData
{
    const ENDPOINT = 'https://comparables.remd.tech/api';
    const SERVICE = 'market-data';

    public static function listings(array $params)
    {
        return Request::do(
            self::SERVICE,
            self::ENDPOINT . '/search', 
            'GET', 
            env('REMD_MARKETDATA_KEY'),
            $params
        );
    }

    public static function user()
    {
        return Request::do(
            self::SERVICE,
            self::ENDPOINT . '/user', 
            'GET', 
            env('REMD_MARKETDATA_KEY')
        );
    }

    public static function export(array $params)
    {
        return Request::do(
            self::SERVICE,
            self::ENDPOINT . '/export', 
            'GET', 
            env('REMD_MARKETDATA_KEY'),
            $params
        );
    }

    public static function history(array $params)
    {
        return Request::do(
            self::SERVICE,
            self::ENDPOINT . '/history', 
            'GET', 
            env('REMD_MARKETDATA_KEY'),
            $params
        );
    }

    public static function historyChart(array $params)
    {
        return success()
            ->type(\kodeops\remd\Request::DEFAULT_RESPONSE_TYPE)
            ->message(\kodeops\remd\Request::defaultResponseMessage(self::SERVICE))
            ->data(['url' => self::ENDPOINT . '/chart/price-history.png?' . http_build_query($params)]);
    }
}