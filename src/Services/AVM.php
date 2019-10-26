<?php
namespace kodeops\remd\Services;

use kodeops\remd\Request;

class AVM
{
    const ENDPOINT = 'https://avm.atenea.cloud/api';
    const SERVICE = 'atenea-avm';
    const KEY = 'REMD_AW_ATENEA_AVM_KEY';

    public static function asset(array $params)
    {
        return Request::do(
            self::SERVICE,
            self::ENDPOINT . '/v1/asset', 
            'POST', 
            env(self::KEY),
            $params
        );
    }
}