<?php
namespace kodeops\remd\Services;

use kodeops\remd\Request;

class Geolocation
{
    const ENDPOINT = 'https://geolocation.remd.tech/api';
    const SERVICE = 'geolocation';
    const KEY = 'REMD_GEOLOCATION_KEY';

    public static function geocode(array $params)
    {
        return Request::do(
            self::SERVICE,
            self::ENDPOINT . '/geocode', 
            'GET', 
            env(self::KEY),
            $params
        );
    }

    public static function reverse(array $params)
    {
        return Request::do(
            self::SERVICE,
            self::ENDPOINT . '/reverse', 
            'GET', 
            env(self::KEY),
            $params
        );
    }
}