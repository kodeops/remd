<?php
namespace kodeops\remd\Services;

use kodeops\remd\Request;

class ReferenceEs
{
    const ENDPOINT = 'https://reference-es.remd.tech/api';
    const SERVICE = 'reference-es';
    const KEY = 'REMD_PAW_REFERENCEES_KEY';

    public static function search(array $params)
    {
        return Request::do(
            self::SERVICE,
            self::ENDPOINT . '/search', 
            'GET', 
            env(self::KEY),
            $params
        );
    }
}