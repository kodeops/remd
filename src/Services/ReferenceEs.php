<?php
namespace kodeops\remd\Services;

use kodeops\remd\Request;

class ReferenceEs
{
    const ENDPOINT = 'https://reference-es.remd.tech/api';
    const SERVICE = 'referencees';
    const KEY = 'REMD_PAW_REFERENCEES_KEY';

    public static function search(array $params)
    {
        $params = array_merge($params, ['rro' => 1]);

        return Request::do(
            self::SERVICE,
            self::ENDPOINT . '/search', 
            'GET', 
            env(self::KEY),
            $params
        );
    }

    public static function ine(array $params)
    {
        return Request::do(
            self::SERVICE,
            self::ENDPOINT . '/ine', 
            'GET', 
            env(self::KEY),
            $params
        );
    }
}