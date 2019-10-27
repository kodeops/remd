<?php
namespace kodeops\remd\Services;

use kodeops\remd\Request;

class Idealista
{
    const ENDPOINT = 'https://idealista.remd.tech/api';
    const SERVICE = 'idealista';
    const KEY = 'REMD_PAW_IDEALISTA_KEY';

    public static function search(array $params)
    {
        return Request::do(
            self::SERVICE,
            self::ENDPOINT . '/v1/search', 
            'POST', 
            env(self::KEY),
            $params
        );
    }
}