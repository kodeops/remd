<?php
namespace kodeops\remd\Services;

use kodeops\remd\Request;

class Pois
{
    const ENDPOINT = 'https://pois.remd.tech/api';
    const SERVICE = 'pois';
    const KEY = 'REMD_PAW_POIS_KEY';

    public static function nearbyPoints(array $params)
    {
        return Request::do(
            self::SERVICE,
            self::ENDPOINT . '/nearby-points', 
            'GET', 
            env(self::KEY),
            $params
        );
    }
}