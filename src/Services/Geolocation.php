<?php
namespace kodeops\remd\Services;

use kodeops\remd\Request;

class Geolocation
{
    const ENDPOINT = 'https://geolocation.remd.tech/api';
    const SERVICE = 'geolocation';

    public static function geocode(array $params)
    {
        return Request::do(
            self::SERVICE,
            self::ENDPOINT . '/geocode', 
            'GET', 
            env('REMD_GEOLOCATION_KEY'),
            $params
        );
    }

    public static function reverse(array $params)
    {
        return Request::do(
            self::SERVICE,
            self::ENDPOINT . '/reverse', 
            'GET', 
            env('REMD_GEOLOCATION_KEY'),
            $params
        );
    }
}