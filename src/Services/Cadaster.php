<?php
namespace kodeops\remd\Services;

use kodeops\remd\Request;

class Cadaster
{
    const ENDPOINT = 'https://cadaster-es.remd.tech/api';
    const SERVICE = 'cadaster';
    const KEY = 'REMD_PAW_CADASTER_KEY';

    public static function reference($reference)
    {
        return Request::do(
            self::SERVICE,
            self::ENDPOINT . '/1/reference/' . $reference, 
            'GET', 
            env(self::KEY)
        );
    }

    public static function ConsultaRCCOOR_Distancia($params)
    {
        return Request::do(
            self::SERVICE,
            self::ENDPOINT . '/1/direct/ConsultaRCCOOR_Distancia', 
            'GET', 
            env(self::KEY),
            $params
        );
    }
}