<?php
namespace kodeops\remd\Services;

use kodeops\remd\Request;

class Registry
{
    public $endpointho = 'https://registry-es.remd.tech';
    public $search_params = [
        'lat', 'lon', 'tipologia', 'superficie', 'antiguedad', 'tipoConsulta', 'idMunicipio'
    ];

    public static function search($lat, $lng, $params = [])
    {
        $search = [];

        if (!isset($params['lat'])) {
            return error()
                ->type('invalid_parameters')
                ->message('The latitude is missing.');
        }
        $search['lat'] = $params['lat'];

        if (!isset($params['lng'])) {
            return error()
                ->type('invalid_parameters')
                ->message('The latitude is missing.');
        }
        $search['lng'] = $params['lng'];

        $search_params = array_only($params, self::search_params);

        return Request::do(
            self::$endpoint, 
            'GET', 
            $search_params
        );
    }
}