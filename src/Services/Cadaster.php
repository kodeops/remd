<?php
namespace kodeops\remd\Services;

use kodeops\remd\Request;
use kodeops\remd\Setting;

class Cadaster
{
    const SERVICE = 'cadaster';

    private static function serviceSetting($key)
    {
        return Setting::get(self::SERVICE, $key);
    }

    public static function reference($reference)
    {
        return Request::do(
            self::SERVICE,
            self::serviceSetting('ENDPOINT') . '/1/reference/' . $reference, 
            'GET', 
            self::serviceSetting('KEY')
        );
    }

    public static function queue($reference)
    {
        return Request::do(
            self::SERVICE,
            self::serviceSetting('ENDPOINT') . '/1/direct/queue/' . $reference, 
            'GET', 
            self::serviceSetting('KEY')
        );
    }

    public static function BuscarParcelaGoogle($params)
    {
        return Request::do(
            self::SERVICE,
            self::serviceSetting('ENDPOINT') . '/1/direct/BuscarParcelaGoogle', 
            'GET', 
            self::serviceSetting('KEY'),
            $params
        );
    }

    public static function Consulta_DNPRC($params)
    {
        return Request::do(
            self::SERVICE,
            self::serviceSetting('ENDPOINT') . '/1/direct/Consulta_DNPRC', 
            'GET', 
            self::serviceSetting('KEY'),
            $params
        );
    }

    public static function ConsultaRCCOOR_Distancia($params)
    {
        return Request::do(
            self::SERVICE,
            self::serviceSetting('ENDPOINT') . '/1/direct/ConsultaRCCOOR_Distancia', 
            'GET', 
            self::serviceSetting('KEY'),
            $params
        );
    }
}